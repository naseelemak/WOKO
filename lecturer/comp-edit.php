<?php
    $currentPage = 'Edit Post';
    
    require '../config.php';

    include '../header.php';

    include 'misc/sidebar.php';
    include 'misc/navbar.php';
?>

    <div class="container">
        <div class="row px-2">
            <div class="col-md-12">
                <form>

                    <!-- Title -->
                    <div class="form-group">
                        <label for="inputTitle">Title</label>
                        <input type="text" class="form-control mb-3" id="inputTitle" placeholder="As per APU registration">
                    </div>

                    <!-- Competition Date(s)-->
                    <!-- Date Range Picker -->
                    <div class="form-group">
                        <label for="inputDate">Competition Date(s)</label>
                        <i class="fa fa-question-circle text-muted" data-toggle="tooltip" data-placement="auto" title="For one day events, select the same date on both sides" aria-hidden="true"></i>
                        <input class="form-control mb-3" type="text" id="inputDate" name="daterange">

                        <script type="text/javascript">
                            $(function() {
                                $('input[name="daterange"]').daterangepicker();
                            });

                        </script>
                    </div>

                    <!-- Short Description -->
                    <div class="form-group">
                        <label for="compDesc">Short Description</label>
                        <i class="fa fa-question-circle text-muted" data-toggle="tooltip" data-placement="auto" title="To be displayed in competition cards. Maximum 250 characters." aria-hidden="true"></i>
                        <textarea rows="3" maxlength="250" type="text" name="compDesc" id="compDesc" class="form-control mb-3" placeholder="250 Characters Max" ></textarea>
                    </div>
                    
                    <!-- Details Text Editor (Description, Prizes) -->
                    <label for="wmwysiwyg-placeholder">Competition Details</label>
                    <div id="wmwysiwyg-placeholder" class="mb-3">
                        <h6 class="mb-2 text-muted">Description</h6>
                        <p class="card-text mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Vitae nunc sed velit dignissim sodales ut eu sem integer. Faucibus interdum posuere lorem ipsum dolor. Curabitur gravida arcu ac tortor dignissim convallis aenean. Pulvinar pellentesque habitant morbi tristique senectus. Tellus in metus vulputate eu scelerisque felis imperdiet proin. Tincidunt dui ut ornare lectus sit amet est. In hendrerit gravida rutrum quisque non tellus. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Dui sapien eget mi proin. Purus viverra accumsan in nisl. Enim neque volutpat ac tincidunt vitae semper. Suspendisse potenti nullam ac tortor. Dolor morbi non arcu risus quis varius. Eget nullam non nisi est sit amet facilisis magna etiam. Sed velit dignissim sodales ut eu.</p>



                        <h6 class="mb-2 text-muted">Prizes</h6>
                        <ul>
                            <li>1st Prize: RM3000</li>
                            <li>2nd Prize: RM1500</li>
                            <li>3rd Prize: RM500</li>
                        </ul>

                        <h6 class="mb-2 text-muted">Time</h6>
                        <ul>
                            <li>Day 1: 0900 - 1700</li>
                            <li>Day 2: 0900 - 1700</li>
                            <li>Day 3: 0900 - 1300</li>
                        </ul>
                    </div>

                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#wmwysiwyg-placeholder').wmwysiwyg({
                                toolbar_btn_size: 'sm',
                                toolbar_btn_class: 'btn-primary',
                                height: 350,
                                btns: [
                                    'fullScreen', ['formatting', 'fontSize'],
                                    ['bold', 'italic', 'underline'],
                                    ['foreColor', 'backColor'],
                                    'textAlignment', ['indent', 'outdent'],
                                    ['ul', 'ol', 'hr'],
                                    'removeFormat',
                                ],
                            });
                        });

                    </script>

                    <!-- Type of Competition -->
                    <div class="form-group">
                        <label for="compType">Type of Competition</label>
                        <select class="form-control mb-3" id="compType" onChange="changetextbox();">
                        <option selected disabled>--Select--</option>
                        <option>Individual</option>
                        <option>Team</option>
                    </select>
                    </div>

                    <!-- Participants -->
                    <div class="form-group">
                        <label for="inputParticipants">Participants (Use a dash to represent ranges: E.g. 2-4)</label>
                        <input type="text" class="form-control mb-3" id="inputParticipants" placeholder="Number of people per team" pattern="(^[0-9]+[-]*[0-9]+$)">

                        <script type="text/javascript">
                            function changetextbox() {
                                if (document.getElementById("compType").value === "Individual") {
                                    document.getElementById("inputParticipants").disabled = 'true';
                                    document.getElementById("inputParticipants").value = "";
                                } else {
                                    document.getElementById("inputParticipants").disabled = '';
                                }
                            }

                        </script>
                    </div>

                    <!-- Venue -->
                    <div class="form-group">
                        <label for="inputTitle">Venue</label>
                        <input type="url" class="form-control mb-3" id="inputTitle" placeholder="E.g. Mid Valley">
                    </div>

                    <!-- Registration Fee -->
                    <div class="form-group">
                        <label for="inputTitle">Registration Fee (MYR)</label>
                        <input type="number" class="form-control mb-3" min="0" id="inputTitle" placeholder="Per individual / team">
                    </div>

                    <!-- Registration Deadline-->
                    <div class="form-group">
                        <label for="inputDeadline">Registration Deadline</label>
                        <input class="form-control mb-3" type="text" id="inputDeadline" name="deadline" />

                        <script type="text/javascript">
                            $(function() {
                                $('input[name="deadline"]').daterangepicker({
                                        singleDatePicker: true,
                                        showDropdowns: true
                                    },
                                    function(start, end, label) {});
                            });

                        </script>
                    </div>

                    <!-- Poster -->
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Poster</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <!-- URL -->
                    <div class="form-group">
                        <label for="inputTitle">Competition URL (Optional)</label>
                        <input type="url" class="form-control mb-3" id="inputTitle" placeholder="As per APU registration">
                    </div>

                    <!-- Tags -->
                    <div class="form-group">
                        <label for="inputTitle">Tags</label>
                        <input type="text" class="form-control mb-3" id="inputTags" placeholder="E.g. Java, C++, Exhibition">
                    </div>

                    <div class="float-right mt-2 mb-4">
                        <a href="comp-preview.php" class="btn btn-primary mr-1" target="_blank">Preview</a>
                        <button type="submit" class="btn btn-primary mr-1" role="button">Publish</button>
                        <a class="btn btn-secondary" href="comp.php" style="padding-left: 15px; padding-right: 15px;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    include 'misc/sub-footer.php';
    include '../footer.php';
?>

<?php
    $currentPage = 'competition name (Preview)';

    require '../config.php';
    include '../header.php';
?>

    <div class="jumbotron jumbotron-fluid mb-4">
        <div class="container">
            <h1 class="display-5">
                <?php echo $currentPage; ?> &nbsp;
            </h1>

            <div class="float-right mb-4">
                <a class="btn btn-lg btn-danger" onclick="javascript:window.close()" style="padding: auto 30px; margin-top: -50%;">Close Preview</a>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-9 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Description</h6>
                        <p class="card-text mb-4 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Vitae nunc sed velit dignissim sodales ut eu sem integer. Faucibus interdum posuere lorem ipsum dolor. Curabitur gravida arcu ac tortor dignissim convallis aenean. Pulvinar pellentesque habitant morbi tristique senectus. Tellus in metus vulputate eu scelerisque felis imperdiet proin. Tincidunt dui ut ornare lectus sit amet est. In hendrerit gravida rutrum quisque non tellus. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Dui sapien eget mi proin. Purus viverra accumsan in nisl. Enim neque volutpat ac tincidunt vitae semper. Suspendisse potenti nullam ac tortor. Dolor morbi non arcu risus quis varius. Eget nullam non nisi est sit amet facilisis magna etiam. Sed velit dignissim sodales ut eu.</p>

                        <h6 class="card-subtitle mb-2 text-muted">Prizes</h6>
                        <ul>
                            <li>1st Prize: RM3000</li>
                            <li>2nd Prize: RM1500</li>
                            <li>3rd Prize: RM500</li>
                        </ul>

                        <h6 class="card-subtitle mb-2 text-muted">Time</h6>
                        <ul>
                            <li>Day 1: 0900 - 1700</li>
                            <li>Day 2: 0900 - 1700</li>
                            <li>Day 3: 0900 - 1300</li>
                        </ul>

                        <h6 class="card-subtitle mb-2 text-muted">Details</h6>
                        <ul>
                            <li>Competition Date: 25 Dec, 2017</li>
                            <li>Participant: 4 per team</li>
                            <li>Venue: Mid Valley</li>
                            <li>Registration Fee: FREE</li>
                        </ul>

                        <h6 class="card-subtitle mt-4">Registration Deadline: <span class="competition-deadline">&nbsp;8th Dec, 2017</span></h6>

                        <hr class="competition-details-line">

                        <div class="mb-3">
                            <h6 class="tag-title mb-2">Tags</h6>
                            <span class="btn btn-sm btn-outline-dark">C++</span>

                            <span class="btn btn-sm btn-outline-dark">Teamwork</span>

                            <span class="btn btn-sm btn-outline-dark">Public Speaking</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <a style="width:100%;" class="btn btn-primary mb-2" href="#">Competition URL</a>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success mb-4" style="width: 100%" data-toggle="modal" data-target="#lecturerModal">Contact Lecturer</button>

                <!-- Modal -->
                <div class="modal fade" id="lecturerModal" tabindex="-1" role="dialog" aria-labelledby="lecturerModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="lecturerModalLabel">Lecturer Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                            </div>
                            <div class="modal-body">
                                <strong>Jaedon Tan</strong>
                                <br>
                                <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;me@jaedon.my
                                <br>
                                <i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;&nbsp;+6012-3456789
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card competition-poster" data-toggle="modal" data-target="#posterModal">
                    <img class="card-img" src="../assets/images/e-genting.jpg" alt="E-Genting Hackathon">
                </div>

                <!-- Modal -->
                <div class="modal fade" id="posterModal" tabindex="-1" role="dialog" aria-labelledby="posterModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <img class="card-img-top" src="../assets/images/e-genting.jpg" alt="E-Genting Hackathon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
    include 'misc/sub-footer.php';
    include '../footer.php';
?>

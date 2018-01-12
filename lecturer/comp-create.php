<?php

    $currentPage = 'Create Post';

    require '../config.php';

    include '../header.php';

    include 'misc/sidebar.php';
    include 'misc/navbar.php';
?>

    <div class="container">
        <div class="row px-2">
            <div class="col-md-12">
                <form id="compCreateForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <!-- Title -->
                    <div class="form-group">
                        <label for="compTitle">Title</label>
                        <input type="text" name="compTitle" id="compTitle" class="form-control mb-3">
                    </div>

                    <!-- Competition Date(s)-->
                    <!-- Date Range Picker -->
                    <div class="form-group">
                        <label for="compDate">Competition Date(s)</label>
                        <i class="fa fa-question-circle text-muted" data-toggle="tooltip" data-placement="auto" title="For one day events, select the same date on both sides" aria-hidden="true"></i>
                        <input class="form-control mb-3" name="compDate" id="compDate" type="text">

                        <script type="text/javascript">
                            $(function() {
                                $('input[name="daterange"]').daterangepicker();
                            });

                        </script>
                    </div>

                    <!-- Details Text Editor (Description, Prizes) -->
                    <label for="compTextEditor">Competition Details</label>
                    <div id="compTextEditor" name="compTextEditor" class="mb-3">
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
                            $('#compTextEditor').wmwysiwyg({
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
                        <select class="form-control mb-3" name="compType" id="compType" onChange="changetextbox();">
                        <option selected disabled>--Select--</option>
                        <option>Individual</option>
                        <option>Team</option>
                    </select>
                    </div>

                    <!-- Participants -->
                    <div class="form-group">
                        <label for="compParticipants">Participants (Use a dash to represent ranges: E.g. 2-4)</label>
                        <input type="text" class="form-control mb-3" name="compParticipants" id="compParticipants" placeholder="Number of people per team" pattern="(^[0-9]+[-]*[0-9]+$)" disabled>

                        <script type="text/javascript">
                            function changetextbox() {
                                if (document.getElementById("compType").value === "Individual") {
                                    document.getElementById("compParticipants").disabled = 'true';
                                    document.getElementById("compParticipants").value = "";
                                } else {
                                    document.getElementById("compParticipants").disabled = '';
                                    document.getElementById("compParticipants").required = '';
                                }
                            }

                        </script>
                    </div>

                    <!-- Venue -->
                    <div class="form-group">
                        <label for="compVenue">Venue</label>
                        <input type="text" name="compVenue" id="compVenue" class="form-control mb-3" id="inputTitle" placeholder="E.g. Mid Valley">
                    </div>

                    <!-- Registration Fee -->
                    <div class="form-group">
                        <label for="compFee">Registration Fee (MYR)</label>
                        <input type="number" name="compFee" id="compFee" class="form-control mb-3" min="0" id="inputTitle" placeholder="Per individual / team">
                    </div>

                    <!-- Registration Deadline-->
                    <div class="form-group">
                        <label for="compDeadline">Registration Deadline</label>
                        <input class="form-control mb-3" type="text" id="compDeadline" name="compDeadline" />

                        <script type="text/javascript">
                            $(function() {
                                $('input[name="compDeadline"]').daterangepicker({
                                        singleDatePicker: true,
                                        showDropdowns: true
                                    },
                                    function(start, end, label) {});
                            });

                        </script>
                    </div>

                    <!-- Poster -->
                    <div class="form-group">
                        <label for="compPoster">Poster</label>
                        <input type="file" name="compPoster" id="compPoster" class="form-control-file">
                    </div>

                    <!-- URL -->
                    <div class="form-group">
                        <label for="compURL">Competition URL (Optional)</label>
                        <input type="url" class="form-control mb-3" name="compURL" id="compURL" placeholder="As per APU registration">
                    </div>

                    <!-- Tags -->
                    <div class="form-group">
                        <label for="compTags">Tags</label>
                        <input type="text" name="compTags" id="compTags" class="form-control mb-3" id="inputTags" placeholder="E.g. Java, C++, Exhibition">
                    </div>

                    <div class="float-right mt-2 mb-4">
                        <a href="comp-preview.php" class="btn btn-primary mr-1" target="_blank">Preview</a>
                        <button type="submit" name="compCreateSubmit" id="compCreateSubmit" class="btn btn-primary mr-1" role="button">Publish</button>
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


<?php
// Create Post
    if(isset($_POST['compCreateSubmit'])) {
        
		$title = $_POST['postTitle'];
		$content = $_POST['postContent'];
        $author = $_SESSION['user'];
		
        if (!empty($_POST['postTitle']) && !empty($_POST['postContent']))
        {
            if (empty($_FILES['postImage']['name']))
            {
                echo "<script>alert('Please choose an image file to upload!');";
                echo "window.location.href = 'add-post.php';</script>";
            }
            else {
                
                // Check connection
                if (!$conn)
                {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $stmt = $conn->prepare('SELECT title FROM posts WHERE title = ?');
                $stmt->bind_param('s', $title);

                $stmt->execute();
                
                $result = $stmt->get_result();
                
                if ($result->num_rows > 0)
                {
                    echo "<script>alert('Post title already exists! Please enter another title.');";
                    echo "document.getElementById('postTitle').focus();</script>";
                }
                else
                { 
                    $target_dir = "images/";
                    $filename = basename($_FILES["postImage"]["name"]);
                    $extension = pathinfo($filename,PATHINFO_EXTENSION);

                    $newfilename = $target_dir . $title . "." . $extension;

                    // Allow certain file formats
                    if($extension != "jpg" && $extension != "png" && $extension != "jpeg")
                    {
                        echo "<script>alert('Sorry, only JPG, JPEG, & PNG files are allowed!');";
                        echo "window.location.href = 'add-post.php';</script>";
                    }

                    // Check file size
                    if ($_FILES["postImage"]["size"] > 500000)
                    {
                        echo "<script>alert('Sorry, your picture too big');";
                        echo "window.location.href = 'add-post.php';</script>";
                    }

                    if (move_uploaded_file($_FILES["postImage"]["tmp_name"], $newfilename))
                    {
                        $stmt = $conn->prepare('INSERT INTO posts (title, content, image_link, author) VALUES (?, ?, ?, ?)');
                        $stmt->bind_param('ssss', $title, $content, $newfilename, $author);

                        $stmt->execute();

                        echo "<script>alert('Post added successfully!');";
                        echo "window.location.replace('index.php');</script>";
                    } 
                    else
                    {
                        echo "<script>alert('Sorry, there was an error uploading your picture!');";
                        echo "window.location.href = 'add-post.php';</script>";
                    } 
                }
            }
        }
        else
        {
            echo "<script>alert('Please fill in all the information!');";
            echo "window.location.href = 'add-post.php';</script>";
        }
	}	

?>


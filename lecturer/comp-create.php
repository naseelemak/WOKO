<?php

    $currentPage = 'Create Post';

    
    require '../restrict/restrict.php';

    include '../header.php';
    include 'misc/sidebar.php';
    include 'misc/navbar.php';
?>

    <div class="container">
        <div class="row px-2">
            <div class="col-md-12">
                <form id="compCreateForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                    <!-- Title -->
                    <div class="form-group">
                        <label for="compTitle">Title</label>
                        <input type="text" name="compTitle" id="compTitle" class="form-control mb-3" required>
                    </div>

                    <!-- Competition Date(s)-->
                    <!-- Date Range Picker -->
                    <div class="form-group">
                        <label for="compDates">Competition Date(s)</label>
                        <i class="fa fa-question-circle text-muted" data-toggle="tooltip" data-placement="auto" title="For one day events, select the same date twice" aria-hidden="true"></i>
                        <input class="form-control mb-3" name="compDates" id="compDates" type="text" required>
                    </div>

                    <!-- Short Description -->
                    <div class="form-group">
                        <label for="compDesc">Short Description</label>
                        <i class="fa fa-question-circle text-muted" data-toggle="tooltip" data-placement="auto" title="To be displayed in competition cards. Maximum 250 characters." aria-hidden="true"></i>
                        <textarea rows="3" maxlength="250" type="text" name="compDesc" id="compDesc" class="form-control mb-3" placeholder="250 Characters Max" required></textarea>
                    </div>

                    <!-- Details Text Editor (Description, Prizes) -->
                    <label for="summernote">Competition Details</label>

                    <textarea id="summernote" name="compDetails" required>
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
                    </textarea>

                    <!-- Type of Competition -->
                    <div class="form-group">
                        <label for="compType" class="mt-3">Type of Competition</label>
                        <select class="form-control mb-3" name="compType" id="compType" onChange="changetextbox();" required>
                        <option selected disabled>--Select--</option>
                        <option>Individual</option>
                        <option>Team</option>
                    </select>
                    </div>

                    <!-- Participants -->
                    <div class="form-group">
                        <label for="compParticipants">Participants (Use a dash to represent ranges: E.g. 2-4)</label>
                        <input type="text" class="form-control mb-3" name="compParticipants" id="compParticipants" placeholder="Number of people per team" disabled>
                    </div>

                    <!-- Venue -->
                    <div class="form-group">
                        <label for="compVenue">Venue</label>
                        <input type="text" name="compVenue" id="compVenue" class="form-control mb-3" id="inputTitle" placeholder="E.g. Mid Valley" required>
                    </div>

                    <!-- Registration Fee -->
                    <div class="form-group">
                        <label for="compFee">Registration Fee (MYR)</label>
                        <input type="number" name="compFee" id="compFee" class="form-control mb-3" min="0" id="inputTitle" placeholder="Per individual / team" required>
                    </div>

                    <!-- Registration Deadline-->
                    <div class="form-group">
                        <label for="compDeadline">Registration Deadline</label>
                        <input class="form-control mb-3" type="text" id="compDeadline" name="compDeadline" required>
                    </div>

                    <!-- Poster -->
                    <div class="form-group">
                        <label for="compPoster">Poster</label>
                        <input type="file" name="compPoster" id="compPoster" class="form-control-file" required>
                    </div>

                    <!-- URL -->
                    <div class="form-group">
                        <label for="compURL">Competition URL (Optional)</label>
                        <input type="url" name="compURL" id="compURL" class="form-control mb-3" placeholder="As per APU registration">
                    </div>

                    <!-- Tags -->
                    <div class="form-group">
                        <label for="compTags">Tags</label>
                        <input type="text" name="compTags" id="compTags" class="form-control mb-3" placeholder="E.g. Java, C++, Exhibition" required>
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

    <!-- Competition Dates Date Range Picker -->
    <script type="text/javascript">
        $(function() {
            $('input[name="compDates"]').daterangepicker();
        });

    </script>

    <!-- Visual Editor -->
    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 200,
            disableResizeEditor: true,
            toolbar: [
                // [groupName, [list of button]]
                ['undo'],
                ['redo'],
                ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table'],
                ['fullscreen'],
                ['codeview'],
                ['help'],
            ],
        });
        $('.note-statusbar').hide();

    </script>

    <!-- Number of Participants Field -->
    <script type="text/javascript">
        function changetextbox() {
            if (document.getElementById("compType").value === "Individual") {
                document.getElementById("compParticipants").disabled = 'true';
                document.getElementById("compParticipants").value = ""; document.getElementById("compParticipants").required = false;
                
            } else {
                document.getElementById("compParticipants").disabled = '';
                document.getElementById("compParticipants").required = true;
            }
        }

    </script>

    <!-- Registration Deadline Date Picker -->
    <script type="text/javascript">
        $(function() {
            $('input[name="compDeadline"]').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true
                },
                function(start, end, label) {});
        });

    </script>

    <script type="text/javascript">
        $().ready(function() {
            $.validator.addMethod('compParticipants', function(value) {
                return /^[0-9]+$|^[0-9]+-[0-9]+$/.test(value);
            }, 'Please follow the specified format (e.g. 2-4).');
            
            // Validate signup form on keyup and submit
            $("#compCreateForm").validate({
                rules: {
                    compParticipants: "required compParticipants",
                },
            });
        });

    </script>



<?php

    // Create Post
    if(isset($_POST['compCreateSubmit'])) 
    {        
        // -- Preliminary validation
        if (empty($_POST['compTitle']))
        {
            echo "<script>alert('Please specify a title.');";
            echo "document.getElementById('compTitle').focus();</script>";
            return false;
        }
            
        if (empty($_POST['compDates']))
        {
            echo "<script>alert('Please specify the competition dates.');";
            echo "document.getElementById('compDates').focus();</script>";
            return false;
        }    
            
        if (empty($_POST['compDesc']))
        {
            echo "<script>alert('Please give the competition a brief description.');";
            echo "document.getElementById('compDesc').focus();</script>";
            return false;
        }
            
        if (empty($_POST['compDetails']))
        {
            echo "<script>alert('Please specify the competition details (e.g. prize, time).');";
            echo "document.getElementById('compDetails').focus();</script>";
            return false;
        }
            
        if (empty($_POST['compType']))
        {
            echo "<script>alert('Please specify the type of competition.');";
            echo "document.getElementById('compType').focus();</script>";
            return false;
        }
            
        if (empty($_POST['compFee']))
        {
            echo "<script>alert('Please specify the registration fee.');";
            echo "document.getElementById('compFee').focus();</script>";
            return false;
        }
            
        if (empty($_POST['compDeadline']))
        {
            echo "<script>alert('Please specify the registration deadline.');";
            echo "document.getElementById('compDeadline').focus();</script>";
            return false;
        }
            
        if (empty($_POST['compTags']))
        {
            echo "<script>alert('Please specify at least one competition tag.');";
            echo "document.getElementById('compTitle').focus();</script>";
            return false;
        }

        $check = getimagesize($_FILES['compPoster']['tmp_name']);
        if($check !== false) {
            $uploadOk = 1;
        } 
        else 
        {
            echo "<script>alert('Please upload an image file.');";
            echo "document.getElementById('compPoster').focus();</script>";
            return false;
            $uploadOk = 0;
            return false;
        }
        // -- Preliminary validation ends

        $title = test_input($_POST['compTitle']);
        $dates = test_input($_POST['compDates']); 
        $desc = test_input($_POST['compDesc']); 
        $details = test_input($_POST['compDetails']);
        $type = test_input($_POST['compType']);

        if ($_POST['compType'] == "Individual")
        {
            $type = 0;
        }
        else
        {
            $type = 1;

            if (empty($_POST['compParticipants']))
            {
                echo "<script>alert('Please specify the number of participants in a team.');";
                echo "document.getElementById('compParticipants').focus();</script>";
                return false;
            }

        }

        if ($type == 0)
        {
            $participants = 1;
        }
        else
        {
            $participants = test_input($_POST['compParticipants']);
        }
        
        $venue = test_input($_POST['compVenue']);
        $fee = test_input($_POST['compFee']);
        $deadline = test_input($_POST['compDeadline']);
        $url = test_input($_POST['compURL']);
        $tags = test_input($_POST['compTags']);
        $lecturer = $_SESSION['user'];
        
        // Check connection
        if (!$conn)
        {
            die("Connection failed: " . mysqli_connect_error());
            return false;
        }
        
        // -- Checks first if user already exists
        $stmt = $conn->prepare('SELECT `title` FROM `posts` WHERE `title` = ?');

        $stmt->bind_param('s', $title);

        // execute query
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // If user already exists in database
        if ($result->num_rows > 0)
        {                
            echo "<script>alert('Title already exists! Please enter an another one.');";
            echo "document.getElementById('compTitle').focus();</script>";
            return false;
        }
        // -- Database check ends

        $target_dir = "../assets/images/comp/";
        $filename = basename($_FILES["compPoster"]["name"]);
        $extension = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

        $newfilename = $target_dir . $title . "." . $extension;

        // Allow only certain file formats
        if($extension != "jpg" && $extension != "png" && $extension != "jpeg")
        {
            echo "<script>alert('Sorry, only JPG, JPEG, & PNG files are allowed!');</script>";
            $uploadOk = 0;
            return false;
        }

        // Check file size
        if ($_FILES["compPoster"]["size"] > 500000)
        {
            echo "<script>alert('The picture exceeds the size limit.');</script>";
            $uploadOk = 0;
            return false;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            return false;
        }
        // if everything is ok, try to upload file
        else
        {
            if (move_uploaded_file($_FILES["compPoster"]["tmp_name"], $newfilename))
            {
                
                
                
                // Inserts details into the Posts table
                $stmt = $conn->prepare('INSERT INTO `posts`(`title`, `dates`, `short_desc`, `details`, `type`, `participants`, `venue`, `fee`, `deadline`, `poster`, `url`, `tags`, `lecturer`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

                $stmt->bind_param('ssssississsss', $title, $dates, $desc, $details, $type, $participants, $venue, $fee, $deadline, $newfilename, $url, $tags, $lecturer);

                // execute query
                $stmt->execute();

                echo "<script>alert('Post created successfully!'); window.location.replace('comp.php');</script>";
            } 
            else
            {
                echo "<script>alert('Sorry, there was an error uploading your picture!');</script>";
                return false;
            } 
        }                    
	}

    // Cleans input
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>

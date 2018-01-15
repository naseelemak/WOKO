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
                <form method="post" action="visual-editor-test.php">

                    <!-- Details Text Editor (Description, Prizes) -->
                    <label for="summernote">Competition Details</label>
                    
                    <textarea id="summernote" name="compDetails">
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
                    

                    <div class="float-right mt-2 mb-4">
                        <button type="submit" name="testSubmit" class="btn btn-primary mr-1" role="button">Publish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    include 'misc/sub-footer.php';
    include '../footer.php';
?>

<!-- WYSIWYG editor -->
<script>
    $('#summernote').summernote({
        tabsize: 2,
        height: 200,
        disableResizeEditor: true,
        toolbar: [
            // [groupName, [list of button]]
            ['undo'],
            ['redo'],
            ['style', ['style','bold', 'italic', 'underline', 'clear']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table'],
            ['fullscreen'],
            ['codeview'],
            ['help'],
      ],
    });
    $('.note-statusbar').hide();
</script>


<?php

    // Create Post
    if(isset($_POST['testSubmit'])) 
    {
        
            $compDetails = $_POST['compDetails'];
            
            // Check connection
            if (!$conn)
            {
                die("Connection failed: " . mysqli_connect_error());
            }
            
        $stmt = $conn->prepare('INSERT INTO `test`(`test`) VALUES (?)');

        $stmt->bind_param('s', $compDetails);

        // execute query
        $stmt->execute();
        
        echo "<script>alert('Post created successfully!'); window.location.replace('comp.php');</script>";
    } 	

?>
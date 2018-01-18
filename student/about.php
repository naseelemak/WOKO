<?php 
    $currentPage = 'About WOKO';

    require '../config.php';
    require '../restrict/restrict.php';

    include '../header.php';
    
    include 'misc/navbar.php';
?>

<div class="jumbotron jumbotron-fluid mb-4">
    <div class="container">
        <h1 class="display-5"><?php echo $currentPage; ?></h1>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <p class="text-justify">WOKO aims to promote lecturer-student collaboration on competitions by connecting lecturers to students and students to lecturers. </p>

            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Vitae nunc sed velit dignissim sodales ut eu sem integer. Faucibus interdum posuere lorem ipsum dolor. Curabitur gravida arcu ac tortor dignissim convallis aenean. Pulvinar pellentesque habitant morbi tristique senectus. Tellus in metus vulputate eu scelerisque felis imperdiet proin. Tincidunt dui ut ornare lectus sit amet est. In hendrerit gravida rutrum quisque non tellus. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Dui sapien eget mi proin. Purus viverra accumsan in nisl. Enim neque volutpat ac tincidunt vitae semper. Suspendisse potenti nullam ac tortor. Dolor morbi non arcu risus quis varius. Eget nullam non nisi est sit amet facilisis magna etiam. Sed velit dignissim sodales ut eu.</p>
        </div>
    </div>
</div>

<?php
    include '../footer.php';
?>

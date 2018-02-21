<?php 
    $currentPage = 'About WOKO';

    
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
            <p class="text-justify">WOKO aims to promote lecturer-student collaboration on competitions by connecting lecturers to students and students to lecturers.</p>

            <p class="text-justify">In 2018, a student noticed how troublesome it was for lecturers to promote competitions to students. Channels used for promotion included Webspace, lab computer wallpapers, and class-to-class pitches. A lot of time was wasted on students who didn't even care about what was being said.</p>
            
            <p class="text-justify">The observation drove the student to develop a website that would make it much easier for lecturers to push competitions to students who are interested in competing – students passionate about learning and testing what they've learnt beyond classrooms walls.</p>
            
            <p class="text-justify">That website is WOKO.</p>
        </div>
    </div>
</div>

<?php
    include '../footer.php';
?>

<?php 
    $currentPage = 'Home';

    require '../config.php';

    include '../header.php';
    
    include 'misc/navbar.php';
?>


<div class="homepage bg-homepage-head text-white mb-4">
    <div class="container homepage-head">
        <h1 class="homepage-title">Collaborate and Compete</h1>
        <h5 class="homepage-subtitle">Put what you know to the test. Join a competition today.</h5>
        
        <?php 
        
            if(!isset($_SESSION['user']))
            {
                echo '<h6 class="homepage-subtitle-btn">Login to begin, or register first if you haven\'t.</h6>';
                
                echo '<div class="homepage-btn-area">
                    <!-- Login Button -->
                    <a class="btn btn-primary btn-lg homepage-btn" href="../login.php" role="button">Login</a>

                    <span class="homepage-or">or</span>

                    <!-- Register Button -->
                    <a class="btn btn-lg homepage-btn" href="../register.php" role="button">Register</a>

                    </div>';
            }
        
        ?>
        
        <ul class="homepage-tips-area">
            <a href="contact.php" class="homepage-tips-item">
                <li>
                    <hr class="homepage-line">
                    <div>
                        <h3 class="homepage-tips-title">Contact Us</h3>
                        <p class="homepage-tips-description">Want your competition featured on WOKO? Have questions to ask? Message us.</p>
                    </div>
                </li>
            </a>

            <a href="guide-student.php" class="homepage-tips-item">
                <li>
                    <hr class="homepage-line">
                    <div>
                        <h3 class="homepage-tips-title">User Guide</h3>
                        <p class="homepage-tips-description">New to WOKO? As an APU student, you'll be glad to know that you can join. Here's how.</p>
                    </div>
                </li>
            </a>

            <a href="about.php" class="homepage-tips-item">
                <li>
                    <hr class="homepage-line">
                    <div>
                        <h3 class="homepage-tips-title">About Us</h3>
                        <p class="homepage-tips-description">What is WOKO? Does it even stand for anything? Read more about the platform over here.</p>
                    </div>
                </li>
            </a>
        </ul>
    </div>
</div>

<div class="container homepage-cards">
    <h5 class="mb-4"><strong>LATEST COMPETITIONS</strong></h5>
    <div class="row mb-4">

        <div class="col-lg-6 mb-4">
            <a href="comp-details.php">
                <div class="card ">
                    <div class="img-container">
                        <img class="card-img-top" src="../assets/images/e-genting.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body card-link">

                        <div class="row">
                            <div class="col-3 col-sm-2 card-date">
                                <p class="card-date-month"><strong>DEC</strong></p>
                                <p class="card-date-day"><strong>21</strong></p>
                            </div>
                            <div class="col-9 col-sm-10">
                                <h4 class="card-title line-clamp line-clamp-1">E-Genting Hackathon 2017</h4>
                                <p class="card-text line-clamp line-clamp-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="col-12">
                                <hr>
                                <div class="comp-card-footer">
                                    <div class="text-muted ml-3">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;Lecturer

                                        <i class="fa fa-map-marker ml-3" aria-hidden="true"></i>&nbsp;&nbsp;Location

                                        <i class="fa fa-user ml-3" aria-hidden="true"></i>&nbsp;&nbsp;Organiser
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-6 mb-4">
            <a href="comp-details.php">
                <div class="card ">
                    <div class="img-container">
                        <img class="card-img-top" src="../assets/images/e-genting.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body card-link">

                        <div class="row">
                            <div class="col-3 col-sm-2 card-date">
                                <p class="card-date-month"><strong>DEC</strong></p>
                                <p class="card-date-day"><strong>21</strong></p>
                            </div>
                            <div class="col-9 col-sm-10">
                                <h4 class="card-title line-clamp line-clamp-1">E-Genting Hackathon 2017</h4>
                                <p class="card-text line-clamp line-clamp-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="col-12">
                                <hr>
                                <div class="comp-card-footer">
                                    <div class="text-muted ml-3">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;Lecturer

                                        <i class="fa fa-map-marker ml-3" aria-hidden="true"></i>&nbsp;&nbsp;Location

                                        <i class="fa fa-user ml-3" aria-hidden="true"></i>&nbsp;&nbsp;Organiser
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-6 mb-4">
            <a href="comp-details.php">
                <div class="card ">
                    <div class="img-container">
                        <img class="card-img-top" src="../assets/images/e-genting.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body card-link">

                        <div class="row">
                            <div class="col-3 col-sm-2 card-date">
                                <p class="card-date-month"><strong>DEC</strong></p>
                                <p class="card-date-day"><strong>21</strong></p>
                            </div>
                            <div class="col-9 col-sm-10">
                                <h4 class="card-title line-clamp line-clamp-1">E-Genting Hackathon 2017</h4>
                                <p class="card-text line-clamp line-clamp-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="col-12">
                                <hr>
                                <div class="comp-card-footer">
                                    <div class="text-muted ml-3">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;Lecturer

                                        <i class="fa fa-map-marker ml-3" aria-hidden="true"></i>&nbsp;&nbsp;Location

                                        <i class="fa fa-user ml-3" aria-hidden="true"></i>&nbsp;&nbsp;Organiser
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-6 mb-4">
            <a href="comp-details.php">
                <div class="card ">
                    <div class="img-container">
                        <img class="card-img-top" src="../assets/images/e-genting.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body card-link">

                        <div class="row">
                            <div class="col-3 col-sm-2 card-date">
                                <p class="card-date-month"><strong>DEC</strong></p>
                                <p class="card-date-day"><strong>21</strong></p>
                            </div>
                            <div class="col-9 col-sm-10">
                                <h4 class="card-title line-clamp line-clamp-1">E-Genting Hackathon 2017</h4>
                                <p class="card-text line-clamp line-clamp-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="col-12">
                                <hr>
                                <div class="comp-card-footer">
                                    <div class="text-muted ml-3">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;Lecturer

                                        <i class="fa fa-map-marker ml-3" aria-hidden="true"></i>&nbsp;&nbsp;Location

                                        <i class="fa fa-user ml-3" aria-hidden="true"></i>&nbsp;&nbsp;Organiser
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>

    <h5 class="mb-4"><strong>BASED ON YOUR INTERESTS</strong></h5>
    <div class="row">

        <div class="col-lg-6 mb-4">
            <a href="comp-details.php">
                <div class="card ">
                    <div class="img-container">
                        <img class="card-img-top" src="../assets/images/me.JPG" alt="Card image cap">
                    </div>
                    <div class="card-body card-link">

                        <div class="row">
                            <div class="col-3 col-sm-2 card-date">
                                <p class="card-date-month"><strong>DEC</strong></p>
                                <p class="card-date-day"><strong>21</strong></p>
                            </div>
                            <div class="col-9 col-sm-10">
                                <h4 class="card-title line-clamp line-clamp-1">Jaedonothon 2018</h4>
                                <p class="card-text line-clamp line-clamp-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="col-12">
                                <hr>
                                <div class="comp-card-footer">
                                    <div class="text-muted ml-3">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;Lecturer

                                        <i class="fa fa-map-marker ml-3" aria-hidden="true"></i>&nbsp;&nbsp;Location

                                        <i class="fa fa-user ml-3" aria-hidden="true"></i>&nbsp;&nbsp;Organiser
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-lg-6 mb-4">
            <a href="comp-details.php">
                <div class="card ">
                    <div class="img-container">
                        <img class="card-img-top" src="../assets/images/me.JPG" alt="Card image cap">
                    </div>
                    <div class="card-body card-link">

                        <div class="row">
                            <div class="col-3 col-sm-2 card-date">
                                <p class="card-date-month"><strong>DEC</strong></p>
                                <p class="card-date-day"><strong>21</strong></p>
                            </div>
                            <div class="col-9 col-sm-10">
                                <h4 class="card-title line-clamp line-clamp-1">Jaedonothon 2018</h4>
                                <p class="card-text line-clamp line-clamp-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="col-12">
                                <hr>
                                <div class="comp-card-footer">
                                    <div class="text-muted ml-3">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;Lecturer

                                        <i class="fa fa-map-marker ml-3" aria-hidden="true"></i>&nbsp;&nbsp;Location

                                        <i class="fa fa-user ml-3" aria-hidden="true"></i>&nbsp;&nbsp;Organiser
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-6 mb-4">
            <a href="comp-details.php">
                <div class="card ">
                    <div class="img-container">
                        <img class="card-img-top" src="../assets/images/me.JPG" alt="Card image cap">
                    </div>
                    <div class="card-body card-link">

                        <div class="row">
                            <div class="col-3 col-sm-2 card-date">
                                <p class="card-date-month"><strong>DEC</strong></p>
                                <p class="card-date-day"><strong>21</strong></p>
                            </div>
                            <div class="col-9 col-sm-10">
                                <h4 class="card-title line-clamp line-clamp-1">Jaedonothon 2018</h4>
                                <p class="card-text line-clamp line-clamp-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="col-12">
                                <hr>
                                <div class="comp-card-footer">
                                    <div class="text-muted ml-3">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;Lecturer

                                        <i class="fa fa-map-marker ml-3" aria-hidden="true"></i>&nbsp;&nbsp;Location

                                        <i class="fa fa-user ml-3" aria-hidden="true"></i>&nbsp;&nbsp;Organiser
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-6 mb-4">
            <a href="comp-details.php">
                <div class="card ">
                    <div class="img-container">
                        <img class="card-img-top" src="../assets/images/me.JPG" alt="Card image cap">
                    </div>
                    <div class="card-body card-link">

                        <div class="row">
                            <div class="col-3 col-sm-2 card-date">
                                <p class="card-date-month"><strong>DEC</strong></p>
                                <p class="card-date-day"><strong>21</strong></p>
                            </div>
                            <div class="col-9 col-sm-10">
                                <h4 class="card-title line-clamp line-clamp-1">Jaedonothon 2018</h4>
                                <p class="card-text line-clamp line-clamp-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="col-12">
                                <hr>
                                <div class="comp-card-footer">
                                    <div class="text-muted ml-3">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;Lecturer

                                        <i class="fa fa-map-marker ml-3" aria-hidden="true"></i>&nbsp;&nbsp;Location

                                        <i class="fa fa-user ml-3" aria-hidden="true"></i>&nbsp;&nbsp;Organiser
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>


<?php
    include '../footer.php';
?>
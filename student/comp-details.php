<?php 
    $currentPage = 'E-Genting Programming Competition 2017';

    require '../config.php';
//    require '../restrict/restrict-login.php';
//    require '../restrict/restrict-stu.php';

    include '../header.php';    
    include 'misc/navbar.php';
    include '../date-calc.php';
?>

<div class="jumbotron jumbotron-fluid mb-4">
    <div class="container">
        <h1 class="display-5">
            <?php echo $currentPage; ?> &nbsp;
        </h1>
        <span class="btn btn-danger mb-1">REGISTRATION CLOSED</span>
    </div>
</div>

<?php
            
    $stmt = $conn->prepare('SELECT * FROM `posts` WHERE `id` = 13');

    // execute query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row > 0) 
    {
        list($date1, $date2) = explode(' - ', $row['dates']);
        list($month, $day, $year) = explode('/', $date1);
        list($month2, $day2, $year2) = explode('/', $date2);
        
        list($dmonth, $dday, $dyear) = explode('/', $row['deadline']);
        
        echo '<div class="container">

            <div class="row">
                <div class="col-md-9 mb-4">
                    <div class="card">
                        <div class="card-body">
                            ';
        
        echo htmlspecialchars_decode(stripslashes($row['details']));

                            echo '<h6 class="card-subtitle mb-2 text-muted">Details</h6>
                            <ul>
                                <li>Competition Date(s): ';
        
                                
                                if ($month == $month2 && $day == $day2 && $year == $year2)
                                {
                                    echo $day .'/'. $month .'/'. $year;
                                }
                                else
                                {
                                    echo $day .'/'. $month .'/'. $year .' - '. $day2 .'/'. $month2 .'/'. $year2 ;
                                }
            
            
                                echo '</li>
                                <li>Participant: 4 per team</li>
                                <li>Venue: Mid Valley</li>
                                <li>Registration Fee: FREE</li>
                            </ul>

                            <h6 class="card-subtitle mt-4">Registration Deadline: <span class="competition-deadline">&nbsp;'. $dday .'/'. $dmonth .'/'. $dyear .'</span></h6>

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
        </div>';
        
    }
    else
    {
        echo '<p class="text-muted ml-3">There seems to be a problem.</p>';
    }
                    
                

?>



<?php
    include '../footer.php';
?>

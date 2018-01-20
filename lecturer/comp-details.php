<?php
    
    require '../config.php';
//    require '../restrict/restrict.php';
        
    $stmt = $conn->prepare('SELECT * FROM `posts` WHERE `id` = ?');
    $stmt->bind_param('s', $_GET['id']);

    // execute query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if($row == 0)
    {
        echo '<p class="text-muted ml-3">There seems to be a problem.</p>';
        $currentPage = "Error";
    }
    
    $currentPage = $row['title'];

    include '../header.php';    
    include 'misc/sidebar.php';
    include 'misc/navbar.php';

    list($date1, $date2) = explode(' - ', $row['dates']);
    list($day, $month, $year) = explode('/', $date1);
    list($day2,$month2, $year2) = explode('/', $date2);
    list($dday, $dmonth, $dyear) = explode('/', $row['deadline']);
?>

    <div class="container" style="margin-top: -20px;">
        <div class="row px-2">
            <div class="col-md-12">
                <div class="mb-3">
                    <a class="btn btn-danger" href="comp-edit.php?id=<?php echo $row['id']; ?>" style="padding-left: 30px; padding-right: 30px;">Edit Details</a>&nbsp;&nbsp;
                    
                    <a class="btn btn-secondary" href="comp.php" style="padding-left: 30px; padding-right: 30px;">Back</a>&nbsp;&nbsp;
                </div>
            </div>
        <?php

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

                                    echo '</li>';

                                    if ($row['type'] == 0)    
                                    {
                                        echo '<li>Competition Type: Individual</li>';
                                    }
                                    else
                                    {
                                        echo '<li>Participants: '. $row['participants'] .' per team</li>';
                                    }

                                    echo '<li>Venue: '. $row['venue'] .'</li>';

                                    if ($row['fee'] > 0) 
                                    {
                                        echo '<li>Registration Fee: '. $row['fee'] .'</li>';
                                    }
                                    else
                                    {
                                        echo '<li>Registration Fee: FREE</li>';
                                    }


                                echo '</ul>

                                <h6 class="card-subtitle mt-4">Registration Deadline: <span class="competition-deadline">&nbsp;'. $dday .'/'. $dmonth .'/'. $dyear .'</span></h6>

                                <hr class="competition-details-line">

                                <div class="mb-3">

                                <h6 class="tag-title mb-2">Tags</h6>';

                                    $tags = explode(',', $row['tags']);

                                    foreach($tags as $tag)
                                    {
                                        echo '<span class="btn btn-sm btn-outline-dark mr-1">'. $tag .'</span>';

                                    }

                                echo '</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">';

                    if(strcasecmp($row['url'], '') == 0){
                        echo '<button style="width:100%;" class="btn btn-secondary competition-url-disabled mb-2" disabled>Competition URL</button>';
                    }
                    else
                    {
                        echo '<a style="width:100%;" class="btn btn-primary mb-2" href="'. $row['url'] .' " target="_blank">Competition URL</a>';
                    }

                echo '<!-- Button trigger modal -->
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
                                    <div class="modal-body">';

                                        $stmt = $conn->prepare('SELECT * FROM `lecturers` WHERE `username` = ?');

                                        $stmt->bind_param('s', $row['lecturer']);

                                        // execute query
                                        $stmt->execute();

                                        // Get the result
                                        $resultLec = $stmt->get_result();
                                        $rowLec = $resultLec->fetch_assoc();

                                        echo '<strong>'. $rowLec['name'] .'</strong>
                                        <br>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;'. $rowLec['email'] .'
                                        <br>
                                        <i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;&nbsp;'. $rowLec['phone_no'];


                                    echo '</div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card competition-poster" data-toggle="modal" data-target="#posterModal">
                            <img class="card-img" src="'. $row['poster'] .'" alt="'. $row['title'] .'">
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="posterModal" tabindex="-1" role="dialog" aria-labelledby="posterModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <img class="card-img-top" src="'. $row['poster'] .'" alt="'. $row['title'] .'">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';                  
        ?>
        </div>
    </div>


    <?php
    include 'misc/sub-footer.php';
    include '../footer.php';
?>

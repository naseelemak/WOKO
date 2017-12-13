
<?php
$currentPage = "Competitions";
?>

<!doctype html>
<html lang="en">
    <head>
        <title><?php echo "$currentPage" ?> | WOKO</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Own CSS -->
        <link rel="stylesheet" href="../css/style.css" type="text/css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


        <!-- Date range picker -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 4 DatePicker</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.7.0/combined/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.7.0/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- Body starts -->

    <!-- Nav bar -->
    <?php include('../constants/navbar.php'); ?>
    <!-- nav bar ends here -->

    <body style="background-color: #f5f9fA">
        <div class="container">
            <div class="row">

                <!-- Sidebar -->
                <div class="col-md-3" style="border:1px solid #cecece">
                    <p class="text-muted"><h5>Search Filters</h5>
                    <br>

                    <!-- Search field -->
                    <input class="form-control form-control-sm" type="text" placeholder="Title / Author">

                    <!-- Category selection -->
                    <select class="custom-select">
                        <option selected class="text-muted">-- Category --</option>
                        <option value="1">Pitching</option>
                        <option value="2">Hackathon</option>
                        <option value="3">Exhibition</option>
                        <option value="4">Miscellaneous</option>
                    </select>

                    <br><br>

                    <!-- Date range picker -->
                    <!-- From http://gijgo.com/datepicker/example/daterangepicker -->
                    <div class="container">
                        Start Date: <input id="startDate" width="276" />
                        End Date: <input id="endDate" width="276" />
                    </div>
                    <script>
                        var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                        $('#startDate').datepicker({
                            uiLibrary: 'bootstrap4',
                            iconsLibrary: 'fontawesome',
                            minDate: today,
                            maxDate: function () {
                                return $('#endDate').val();
                            }
                        });
                        $('#endDate').datepicker({
                            uiLibrary: 'bootstrap4',
                            iconsLibrary: 'fontawesome',
                            minDate: function () {
                                return $('#startDate').val();
                            }
                        });
                    </script>

                    <br>

                    <!-- Checkboxes -->
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="inclPastCompetitions">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Show past competitions</span>
                    </label>
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="inclOnlyAvailable">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Show available only</span>
                    </label>

                    <!-- Search button -->
                    <input class="btn btn-primary btn-sm" type="search" value="Search">

                    <br>

                </div>
                <!-- Sidebar ends here -->

                <!-- Main Content -->
                <div class="col-md-9">
                    <div class="col-sub" style="border:1px solid #cecece">

                        <!-- Event list -->

                        <ul>
                            <li>
                                <div class="card" style="span-width;">
                                    <div class="container card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <br>
                                                <span class="align-middle text-center text-muted"><h5>DEC</h5>
                                                    <h4>21</h4>
                                                </span>
                                            </div>
                                            <div class="col-md-10">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card" style="span-width;">
                                    <div class="container card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <br>
                                                <time class="event-cal">
                                                    <span class="month">Dec</span>
                                                    <span class="day">21</span>
                                                </time>
                                            </div>
                                            <div class="col-md-10">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>                     
                        </ul>


                        <ul class="event-list event-list__short">
                            <li class="event-thumb">
                                <a href="#" class="event-thumb_link">
                                    <time class="event-cal">
                                        <span class="month">Dec</span>
                                        <span class="day">21</span>
                                    </time>
                                    <div class="event-thumb_detail">
                                        <div class="event-thumb_info">
                                            <time datetime="2017-12-14T21:00:00" class="datetime">Thu, 9:00 PM</time>
                                            <span class="event-thumb_location">Bandar Kinrara, 24A (1st Floor) Lorong Rahim Kajai 14, Puchong, 60000 Kuala Lumpur</span>
                                            <h3 class="event-thumb_name">The Frugal Life </h3>
                                            <span class="event-thumb_organizer">By Freddy </span>
                                        </div>              
                                    </div>
                                </a>
                            </li>
                            <li class="event-thumb">
                                <a href="#" class="event-thumb_link">
                                    <time class="event-cal">
                                        <span class="month">Dec</span>
                                        <span class="day">23</span>
                                    </time>
                                    <div class="event-thumb_detail">
                                        <div class="event-thumb_info">
                                            <time datetime="2017-12-14T21:00:00" class="datetime">Sat, 10:00 AM</time>
                                            <span class="event-thumb_location">Joel, Lorong Tobe Pie 14, Klang, 60000 Kuala Lumpur</span>
                                            <h3 class="event-thumb_name">Cryptotalks! #8 </h3>
                                            <span class="event-thumb_organizer">By Tobuscus </span>
                                        </div>              
                                    </div>
                                </a>
                            </li>
                            <li class="event-thumb">
                                <a href="#" class="event-thumb_link">
                                    <time class="event-cal">
                                        <span class="month">Dec</span>
                                        <span class="day">25</span>
                                    </time>
                                    <div class="event-thumb_detail">
                                        <div class="event-thumb_info">
                                            <time datetime="2017-12-14T21:00:00" class="datetime">Mon, 8:00 PM</time>
                                            <span class="event-thumb_location">Bandar Kinrara, 24A (1st Floor) Lorong Rahim Kajai 14, Puchong, 60000 Kuala Lumpur</span>
                                            <h3 class="event-thumb_name">The Frugal Life </h3>
                                            <span class="event-thumb_organizer">By Freddy </span>
                                        </div>              
                                    </div>
                                </a>
                            </li>
                            <li class="event-thumb">
                                <a href="#" class="event-thumb_link">
                                    <time class="event-cal">
                                        <span class="month">Jan</span>
                                        <span class="day">02</span>
                                    </time>
                                    <div class="event-thumb_detail">
                                        <div class="event-thumb_info">
                                            <time datetime="2017-12-14T21:00:00" class="datetime">Tue, 6:30 PM</time>
                                            <span class="event-thumb_location">Joel, Lorong Tobe Pie 14, Klang, 60000 Kuala Lumpur</span>
                                            <h3 class="event-thumb_name">Cryptotalks! #8 </h3>
                                            <span class="event-thumb_organizer">By Tobuscus </span>
                                        </div>              
                                    </div>
                                </a>
                            </li>
                        </ul>                       
                    </div>
                </div>
            </div>
        </div>
    </body>

    <!-- Unique code ends here -->

    <?php include('../constants/footer.php'); ?>
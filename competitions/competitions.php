<!doctype html>
<html lang="en">
    <head>
        <title>WOKO | Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Own CSS -->
        <link rel="stylesheet" href="../css/style.css" type="text/css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <!-- Date picker header -->
        <!--<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 4 DatePicker</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.7.0/combined/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.7.0/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />-->


        <!-- Date range picker -->
        <!-- Include Required Prerequisites -->
        <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="http://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <!--<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />-->

        <!-- Include Date Range Picker -->
        <script type="text/javascript" src="http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

        <!-- Nav bar -->
        <?php include('../constants/navbar.php'); ?>
        <!-- Nav bar ends here -->

        <br>

    </head>

    <!-- Unique code begins here -->
    <body style="background-color: #f5f9fA">
        <div class="container">
            <div class="row">

                <!-- Sidebar -->
                <div class="col-md-3" style="border:1px solid #cecece">
                    <p class="text-muted"><h5>Advanced Search</h5>
                    <br>

                    <!-- Search field -->
                    <input class="form-control form-control-sm" type="text" placeholder="Search">

                    <!-- Radio buttons -->
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="inlineRadios1" value="option1">
                            Title
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="inlineRadios2" value="option2">
                            Author
                        </label>
                    </div>


                    <!-- Category selection -->
                    <select class="custom-select">
                        <option selected class="text-muted">-- Category --</option>
                        <option value="1">Pitching</option>
                        <option value="2">Hackathon</option>
                        <option value="3">Exhibition</option>
                        <option value="4">Miscellaneous</option>
                    </select>

                    <br><br>

                    <!-- Date picker -->
                    <input type="text" name="daterange" value="01/01/2015 - 01/31/2015" />
                    <!--<input name="datepicker" width="276" />-->
                    <script type="text/javascript">
                        $(function() {
                            $('input[name="daterange"]').daterangepicker();
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
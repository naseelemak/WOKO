<?php 

require '../config.php';

$currentPage = "Competitions";

include 'misc/header.php';

?>

<div class="jumbotron jumbotron-fluid mb-4">
    <div class="container">
        <h1 class="display-5">
            <?php echo $currentPage; ?>
        </h1>
    </div>
</div>


<div class="container mt-3">
    <div class="row">
        <div class="col-md-12 col-lg-3 mb-4">
            <div class="sticky-top">
                <p class="text-muted">Search Filters</p>

                <!-- Search field -->
                <input class="form-control mb-2" type="text" placeholder="Keywords" id="inputKeywords">

                <!-- Date Range Picker -->
                <input class="form-control mb-3" type="text" name="daterange" />

                <script type="text/javascript">
                    $(function() {
                        $('input[name="daterange"]').daterangepicker();
                    });

                </script>

                <button class="btn btn-primary" style="width: 100%">Search</button>

            </div>
        </div>

        <!-- Competition Cards -->
        <div class="col-md-12 col-lg-9 mb-2">
            <p class="text-muted">23 Competitions Found</p>

            <a href="comp-details.php">
                <div class="card mb-3">
                    <div class="card-body card-link">
                        <div class="row">
                            <div class="col-3 col-sm-2 card-date">
                                <p class="card-date-month"><strong>DEC</strong></p>
                                <p class="card-date-day"><strong>21</strong></p>
                            </div>
                            <div class="col-9 col-sm-10">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <hr>
                                <div class="comp-card-footer">
                                    <div class="text-muted">
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

            <a href="comp-details.php">
                <div class="card mb-3">
                    <div class="card-body card-link">
                        <div class="row">
                            <div class="col-3 col-sm-2 card-date">
                                <p class="card-date-month"><strong>DEC</strong></p>
                                <p class="card-date-day"><strong>21</strong></p>
                            </div>
                            <div class="col-9 col-sm-10">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <hr>
                                <div class="comp-card-footer">
                                    <div class="text-muted">
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

            <a href="comp-details.php">
                <div class="card mb-3">
                    <div class="card-body card-link">
                        <div class="row">
                            <div class="col-3 col-sm-2 card-date">
                                <p class="card-date-month"><strong>DEC</strong></p>
                                <p class="card-date-day"><strong>21</strong></p>
                            </div>
                            <div class="col-9 col-sm-10">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <hr>
                                <div class="comp-card-footer">
                                    <div class="text-muted">
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

            <a href="comp-details.php">
                <div class="card mb-3">
                    <div class="card-body card-link">
                        <div class="row">
                            <div class="col-3 col-sm-2 card-date">
                                <p class="card-date-month"><strong>DEC</strong></p>
                                <p class="card-date-day"><strong>21</strong></p>
                            </div>
                            <div class="col-9 col-sm-10">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <hr>
                                <div class="comp-card-footer">
                                    <div class="text-muted">
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

            <a href="comp-details.php">
                <div class="card mb-3">
                    <div class="card-body card-link">
                        <div class="row">
                            <div class="col-3 col-sm-2 card-date">
                                <p class="card-date-month"><strong>DEC</strong></p>
                                <p class="card-date-day"><strong>21</strong></p>
                            </div>
                            <div class="col-9 col-sm-10">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <hr>
                                <div class="comp-card-footer">
                                    <div class="text-muted">
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

            <a href="comp-details.php">
                <div class="card mb-3">
                    <div class="card-body card-link">
                        <div class="row">
                            <div class="col-3 col-sm-2 card-date">
                                <p class="card-date-month"><strong>DEC</strong></p>
                                <p class="card-date-day"><strong>21</strong></p>
                            </div>
                            <div class="col-9 col-sm-10">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <hr>
                                <div class="comp-card-footer">
                                    <div class="text-muted">
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

            <a href="comp-details.php">
                <div class="card mb-3">
                    <div class="card-body card-link">
                        <div class="row">
                            <div class="col-3 col-sm-2 card-date">
                                <p class="card-date-month"><strong>DEC</strong></p>
                                <p class="card-date-day"><strong>21</strong></p>
                            </div>
                            <div class="col-9 col-sm-10">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <hr>
                                <div class="comp-card-footer">
                                    <div class="text-muted">
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

include 'misc/footer.php';

?>

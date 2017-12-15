<?php 

$currentPage = "Competitions";

include 'misc/header.php';

?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12 col-lg-3 mb-4">
            <p class="text-muted">Search Filters</p>

            <!-- Search field -->
            <input class="form-control form-control" type="text" placeholder="Title / Author">
        </div>

        <!-- Competition Cards -->
        <div class="col-md-12 col-lg-9">
            <p class="text-muted">23 Competitions Found</p>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3 col-sm-2 card-date">
                            <p class="card-date-month"><strong>DEC</strong></p>
                            <p class="card-date-day"><strong>21</strong></p>
                        </div>
                        <div class="col-9 col-sm-10">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<?php

include 'misc/footer.php';

?>

<?php 
    $currentPage = 'Competitions';

    require '../config.php';
    require '../restrict/restrict-stu.php';

    include '../header.php';    
    include 'misc/navbar.php';
    include '../date-calc.php';
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

            <?php
            
                $stmt = $conn->prepare('SELECT * FROM `posts` ORDER BY `id` DESC LIMIT 10');

                // execute query
                $stmt->execute();

                // Get the result
                $result = $stmt->get_result();

            if ($result->num_rows == 0)
            {
                echo '<p class="text-muted">There are no available competitions at the moment. There will be more real soon so be sure to check this page regularly!</p>';
            }
            else
            {
                while ($row = $result->fetch_assoc())
                {      
                    list($month, $day, $year) = explode('/', $row['dates']);
                    
                    echo'<a href="comp-details.php">';
                        echo'<div class="card mb-3">';
                            echo'<div class="card-body card-link">';
                                echo'<div class="row">';
                                    echo'<div class="col-3 col-sm-2 card-date">';
                                        echo'<p class="card-date-month">';
                                        echo'<strong>'. calcMonth($month).'</strong></p>';
                                        echo'<p class="card-date-day"><strong>'.$day.'</strong></p>';
                                    echo'</div>';
                                    echo'<div class="col-9 col-sm-10">';
                                        echo'<h4 class="card-title">'.$row['title'].'</h4>';
                                        echo'<p class="card-text">'.$row['short_desc'].'</p>';
                                        echo'<hr>';
                                        echo'<div class="comp-card-footer">';
                                            echo'<div class="text-muted">';
                                                echo'<i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;'.$row['lecturer'];

                                                echo'<i class="fa fa-map-marker ml-3" aria-hidden="true"></i>&nbsp;&nbsp;'.$row['venue'];
                                            echo'</div>';
                                        echo'</div>';
                                    echo'</div>';
                                echo'</div>';
                            echo'</div>';
                        echo'</div>';
                    echo'</a>';
                }
            }
                
?>
            
<?php
    include '../footer.php';
?>

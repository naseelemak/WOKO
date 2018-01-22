<?php 
    $currentPage = 'Competitions';

    
    require '../restrict/restrict.php';

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
                <input class="form-control mb-2" type="text" placeholder="Keywords" id="keywords" onkeyup="searchFilter()">

                <!-- Date Range Picker -->
                <input class="form-control mb-3" type="text" name="daterange" id="daterange">
                
                <script type="text/javascript">
                    
                    function endDate() {
                        var d = new Date();
                        var day = d.getDate();
                        var month = d.getMonth()+1;
                        var year = d.getFullYear()+1;

                        if (day < 10) {
                            day = "0" + day;
                        }

                        if (month < 10) {
                            month = "0" + month;
                        }

                        var date = day + "/" + month + "/" + year;


                        return date;
                    }
                    
                    $(function() {
                    
                       $('input[name="daterange"]').daterangepicker({
                            locale: {
                                    "format": "DD/MM/YYYY",
                                },
                            endDate: endDate(),
                        });
                    });

                    
                    
                </script>
            </div>
        </div>

        <!-- Competition Cards -->
        
        
    
        <div class="col-md-12 col-lg-9 mb-2">
        
        <?php
            
                $stmt = $conn->prepare('SELECT * FROM `posts` ORDER BY `id` DESC');

                // execute query
                $stmt->execute();

                // Get the result
                $result = $stmt->get_result();
                $num_rows = mysqli_num_rows($result);

                echo '<p class="text-muted"><span id="number">' . $num_rows . '</span> Competitions Found</p>';


                if ($num_rows == 0)
                {
                    echo '<p class="text-muted">There are no available competitions at the moment. There will be more real soon so be sure to check this page regularly!</p>';
                } else {
                    
                

                    echo '<ul id="comp-list">';

                    while ($row = $result->fetch_assoc())
                    {      
                        list($day, $month, $year) = explode('/', $row['dates']);
                        $year = substr($year, 0, 4);

                        echo'<li class="comp-list-item">';
                        echo '<input type="hidden" class="eventDate" value="'.$year. "" .$month. "" .$day. '">';
                        echo'<a href="comp-details.php?id='.$row['id'].'">';
                            echo'<div class="card mb-3">';
                                echo'<div class="card-body card-link">';
                                    echo'<div class="row">';
                                        echo'<div class="col-3 col-sm-2 card-date">';
                                            echo'<p class="card-date-month"><strong>';
                                                echo calcMonth($month);
                                            echo'</strong></p>';
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
                        echo '</li>';
                    }

                    echo '</ul>';
                }
?>

<script>
    
    $( "#daterange" ).change(function() {
        searchFilter();
    });
    
    function searchFilter() {
        // Declare variables
        var keyword, filterKeyword, startDate, endDate, eventDate, ul, li, a, i, count;
        keyword = document.getElementById('keywords');
        filterKeyword = keyword.value.toLowerCase();
        
        startDate = document.getElementById("daterange").value.substring(0,10);
        endDate = document.getElementById("daterange").value.substring(13,23);
        
        startDate = startDate.split("/");
        endDate = endDate.split("/");
        
        startDate = startDate[2] + startDate[1] + startDate[0];
        endDate = endDate[2] + endDate[1] + endDate[0];
            
        ul = document.getElementById("comp-list");
        li = ul.getElementsByTagName('li');
        
        
        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
            
            a = li[i].getElementsByTagName("a")[0];
            eventDate = li[i].getElementsByClassName("eventDate")[0].value;
            
            if (a.innerHTML.toLowerCase().indexOf(filterKeyword) > -1 && eventDate >= startDate && eventDate <= endDate) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
        
        count = $('.comp-list-item').filter(function() {
            return $(this).css('display') !== 'none';
        }).length;
        
        
        document.getElementById("number").innerHTML = count;
        
    }

</script>
        
<?php
    include '../footer.php';
?>

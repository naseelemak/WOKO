<?php
    
    require '../config.php';
    include '../date-calc.php';

    $stmt = $conn->prepare('SELECT * FROM `posts` WHERE `id` = 13');

    // execute query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    list($date1, $date2) = explode(' - ', $row['dates']);
    list($month, $day, $year) = explode('/', $date1);
    list($month2, $day2, $year2) = explode('/', $date2);

    list($dmonth, $dday, $dyear) = explode('/', $row['deadline']);

?>
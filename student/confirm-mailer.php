<?php
    require '../restrict/restrict.php';

    include '../mailer.php';

    $stmt = $conn->prepare('SELECT * FROM `students` WHERE `username` = ?');
    $stmt->bind_param('s', $_GET['id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    $name = $row['name'];
    $email = $row['email'];
    $regDate = $row['reg_date'];
    
    $key = $name . $email . $regDate;
    $key = md5($key);

    sendConfirmation($name, $email, $key);

    echo "<script>window.close();</script>";

    if($_SESSION['previous_location'] == "unconfirmed")
    {
//        echo "<script>window.location.replace('../student/unconfirmed.php?id=". $_GET['id'] ."');</script>";
    }
    elseif($_SESSION['previous_location'] == "confirmation")
    {
//        echo "<script>window.location.replace('../student/confirmation.php?id=". $_GET['id'] ."');</script>";
    }
    
?>
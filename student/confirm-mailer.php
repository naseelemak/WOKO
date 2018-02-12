<?php
    require '../restrict/restrict.php';

    include '../mailer.php';
    
    $id = $_GET['id'];
    $username = base64_decode($id);
    
    $stmt = $conn->prepare('SELECT * FROM `students` WHERE `username` = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    $name = $row['name'];
    $email = $row['email'];
    $regDate = $row['reg_date'];
    
    //create a random key from user's unique details
    $key = $name . $email . $regDate;
    $key = md5($key);

    sendConfirmation($name, $id, $email, $key);

    echo "<script>window.close();</script>";
    
?>
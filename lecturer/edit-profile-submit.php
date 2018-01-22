<?php
    require '../restrict/restrict.php';

    // Edit Profile
    // -- Preliminary validation        
    if (empty($_POST['email']))
    {
        echo "<script>alert('Please specify an email address.;";
        echo "document.getElementById('email').focus();</script>";
        return false;
    }

    if (empty($_POST['phone']))
    {
        echo "<script>alert('Please specify a phone number.');";
        echo "document.getElementById('phone').focus();</script>";
        return false;
    }
    // -- Preliminary validation ends

    $username = test_input($_POST['usernameh']);
    $email = test_input($_POST['email']); 
    $phone = test_input($_POST['phone']); 

    // Check connection
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
        return false;
    }


    // Inserts details into the Posts table
    $stmt = $conn->prepare('UPDATE `lecturers` SET `email`= ?,`phone_no`= ? WHERE `username` = ?');

    $stmt->bind_param('sss', $email, $phone, $username);

    // execute query
    $stmt->execute();

    echo "<script>alert('Profile updated successfully!'); window.location.replace('profile.php');</script>";

    // Cleans input
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>

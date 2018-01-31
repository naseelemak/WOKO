<?php
    require '../restrict/restrict.php';

    include '../functions.php';
    
//    if(empty($_GET['id']) && empty($_GET['code']))
//    {
//        echo "<script>window.location.href='../student/index.php'</script>";
//        die;
//    }

    if(isset($_POST['submit']))
    {
        
        if(isset($_GET['id']) && isset($_GET['code']))
        {
            $username = base64_decode($_GET['id']);
            $token = $_GET['code'];
        }
        else
        {
            echo '<script>alert("User does not exist. Returning home.");</script>';
            echo '<script>window.location.replace("../student/index.php");</script>';
            return false;
        }
        
        $stmt = $conn->prepare("SELECT * FROM `students` WHERE `username` = ? AND `token` = ?");
        $stmt->bind_param('ss', $username, $token);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        
        $table = 'students';

        if($result->num_rows != 1)
        {
            $stmt = $conn->prepare("SELECT * FROM `lecturer` WHERE `username` = ? AND `token` = ?");
            $stmt->bind_param('ss', $username, $token);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            
            $table = 'lecturers';
        }
        
        if($result->num_rows != 1)
        {
            echo '<script>alert("User does not exist. Returning home.");</script>';
            echo '<script>window.location.replace("../student/index.php");</script>';
            return false;
        }   
        
        $newPassword = test_input($_POST['newPassword']);
        $newCPassword = test_input($_POST['newCPassword']);

        if(password_verify($newPassword, $row['password']))
        {
            echo "<script>alert('Please enter a different password from your previous one.');";
            echo "document.getElementById('newPassword').focus();</script>";
            echo "<script>window.location.replace('password-reset.php?id=$username&code=$token');</script>";
            return false;
        }

        // hashes the password before saving it in the db
        $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        if($table == 'students')
        {
            // Update password of Student table
            $stmt = $conn->prepare('UPDATE `students` SET `password`= ?, `token` = ? WHERE `username` = ?');
        }
        else
        {
            // Update password of Lecturer table
            $stmt = $conn->prepare('UPDATE `lecturers` SET `password`= ?, `token` = ? WHERE `username` = ?');
        }

        $token = NULL;
        
        $stmt->bind_param('sss', $newPassword, $token, $username);

        // execute query
        $stmt->execute();

        echo "<script>alert('Password changed successfully. Please login with new credentials!'); window.location.replace('login.php');</script>";
    }	


?>

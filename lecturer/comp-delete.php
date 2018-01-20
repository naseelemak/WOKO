<?php
    require '../restrict/restrict.php';
        
        $stmt = $conn->prepare('DELETE FROM `posts` WHERE id = ?');
        $stmt->bind_param('i', $_GET['id']);

        // execute query
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        echo "<script>alert('Post deleted successfully!'); window.location.replace('comp.php');</script>";
    
?>


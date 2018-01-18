<?php 

require '../config.php';

$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


$_SESSION['restrict'] = null;


// If lecturer keyword exists in the url
if (strpos($url,'lecturer') !== false) {
    
    if (!isset($_SESSION['user'])) {
        
        $_SESSION['restrict'] = "notLecturer-guest";
        header("location: ../restrict/access-denied.php"); 
        
    }
    
    if ($_SESSION['role'] == 'student') {
        
        $_SESSION['restrict'] = "notLecturer-student";
        header("location: ../restrict/access-denied.php"); 
        
    }
}

// If student keyword exists in the url
if (strpos($url,'student') !== false) {
    
    if (isset($_SESSION['user']) && $_SESSION['role'] == 'lecturer') {
        
        header("location: ../lecturer/comp.php"); 
        
    }
    
}

if (!isset($_SESSION['user'])) {
    
    if (strpos($url,'student/comp-details') !== false) {
        
        $_SESSION['restrict'] = "notStudent-guest";
        header("location: ../restrict/access-denied.php"); 
        
    }  
    
    if (strpos($url,'student/profile') !== false ||       
        strpos($url,'student/edit-profile') !== false ||
        strpos($url,'student/change-password') !== false
       ) {
        
        $_SESSION['restrict'] = "notStudent-guest-2";
        header("location: ../restrict/access-denied.php"); 
        
    }  
}


?>
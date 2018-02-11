<?php
    
    $password = "123123";
    $password = password_hash($password, PASSWORD_DEFAULT);

    echo $password;
    echo "<br><br>";
    
    if(password_verify('123123', '$2y$10$9gp/c4CWWnN5BbsemAyFi.4m9AJYma3/Zcr8vZWLR9bf6dSXQ/F6K'))
    {
        echo 'Passwords tally';
    } 
    else
    {
        echo 'Passwords do not match';
    }

?>
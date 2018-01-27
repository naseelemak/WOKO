<?php

    $password = "123123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo $hash . '<br>';

    if (password_verify($password, $hash)) 
    {
        echo 'Password is valid!';
    } 
    else 
    {
        echo 'Invalid password.';
    }

?>

<?php

    if(password_verify('123123', '$2y$10$DWZ5cWGr//5POm2Pg1moJumhmllW1/Ry94E/MZ41T6eZADrer8LYC'))
    {
        echo 'Passwords tally';
    } 
    else
    {
        echo 'Passwords do not match';
    }

?>
<?php

    function format_confirmation($name, $email, $key)
    { 
        //set the root
        $root = $_SERVER['DOCUMENT_ROOT'];

        //grab the template content
        $template = file_get_contents($root.'/student/confirm-mail.'.'html');

        //replace all the tags
        $template = preg_replace('{NAME}', $name, $template);
        $template = preg_replace('{EMAIL}', $email, $template);
        $template = preg_replace('{KEY}', $key, $template);
        $template = preg_replace('{SITEPATH}','localhost', $template);

        //return the html of the template
        return $template; 
    }

    function format_contact($name, $email, $category, $message)
    { 
        //set the root
        $root = $_SERVER['DOCUMENT_ROOT'];

        //grab the template content
        $template = file_get_contents($root.'/student/contact-mail.'.'html');

        //replace all the tags
        $template = preg_replace('{NAME}', $name, $template);
        $template = preg_replace('{EMAIL}', $email, $template);
        $template = preg_replace('{CATEGORY}', $category, $template);
        $template = preg_replace('{MESSAGE}', $message, $template);
        $template = preg_replace('{SITEPATH}','localhost', $template);

        //return the html of the template
        return $template; 
    }

?>
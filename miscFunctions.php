<?php
    
    function format_email($name, $email, $key)
    { 
        //set the root
        $root = $_SERVER['DOCUMENT_ROOT'];

        //grab the template content
        $template = file_get_contents($root.'/testTemplate.'.'html');

        //replace all the tags
        $template = preg_replace('{USERNAME}', $name, $template);
        $template = preg_replace('{EMAIL}', $email, $template);
        $template = preg_replace('{KEY}', $key, $template);
        $template = preg_replace('{SITEPATH}','localhost', $template);

        //return the html of the template
        return $template; 
    }

?>
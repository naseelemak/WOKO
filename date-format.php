<?php
        
    function calcMonth($month) 
    {
        switch ($month) 
        {
            case "01":
                return "JAN";
                break;
            case "02":
                return "FEB";
                break;
            case "03":
                return "MAR";
                break;
            case "04":
                return "APR";
                break;
            case "05":
                return "MAY";
                break;
            case "06":
                return "JUN";
                break;
            case "07":
                return "JUL";
                break;
            case "08":
                return "AUG";
                break;
            case "09":
                return "SEP";
                break;
            case "10":
                return "OCT";
                break;
            case "11":
                return "NOV";
                break;
            case "12":
                return "DEC";
                break;
            default:
        }
    } 

    function formatDate($date)
    {
        list($year, $month, $day) = explode('/', $date);
        $day = substr($day, 0, 2);
    }

?>

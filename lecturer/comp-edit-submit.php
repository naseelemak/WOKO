<?php
    require '../restrict/restrict.php';

    // Create Post
    // -- Preliminary validation            
    if (empty($_POST['compDates']))
    {
        echo "<script>alert('Please specify the competition dates.');";
        echo "document.getElementById('compDates').focus();</script>";
        return false;
    }    

    if (empty($_POST['compDesc']))
    {
        echo "<script>alert('Please give the competition a brief description.');";
        echo "document.getElementById('compDesc').focus();</script>";
        return false;
    }

    if (empty($_POST['compDetails']))
    {
        echo "<script>alert('Please specify the competition details (e.g. prize, time).');";
        echo "document.getElementById('compDetails').focus();</script>";
        return false;
    }

    if (empty($_POST['compType']))
    {
        echo "<script>alert('Please specify the type of competition.');";
        echo "document.getElementById('compType').focus();</script>";
        return false;
    }

    if (empty($_POST['compFee']))
    {
        echo "<script>alert('Please specify the registration fee.');";
        echo "document.getElementById('compFee').focus();</script>";
        return false;
    }

    if (empty($_POST['compDeadline']))
    {
        echo "<script>alert('Please specify the registration deadline.');";
        echo "document.getElementById('compDeadline').focus();</script>";
        return false;
    }

    if (empty($_POST['compTags']))
    {
        echo "<script>alert('Please specify at least one competition tag.');";
        echo "document.getElementById('compTitle').focus();</script>";
        return false;
    }
    // -- Preliminary validation ends

    $id = test_input($_POST['compId']);
    $title = test_input($_POST['compTitle']);
    $dates = test_input($_POST['compDates']); 
    $desc = test_input($_POST['compDesc']); 
    $details = test_input($_POST['compDetails']);
    $type = test_input($_POST['compType']);

    if ($_POST['compType'] == "Individual")
    {
        $type = 0;
    }
    else
    {
        $type = 1;

        if (empty($_POST['compParticipants']))
        {
            echo "<script>alert('Please specify the number of participants in a team.');";
            echo "document.getElementById('compParticipants').focus();</script>";
            return false;
        }

    }

    if ($type == 0)
    {
        $participants = 1;
    }
    else
    {
        $participants = test_input($_POST['compParticipants']);
    }

    $venue = test_input($_POST['compVenue']);
    $fee = test_input($_POST['compFee']);
    $deadline = test_input($_POST['compDeadline']);
    $url = test_input($_POST['compURL']);
    $tags = test_input($_POST['compTags']);

    // Check connection
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
        return false;
    }



    $check = getimagesize($_FILES['compPoster']['tmp_name']);
    if($check !== false) {
        $uploadOk = 1;

        $target_dir = "../assets/images/comp/";
        $filename = basename($_FILES["compPoster"]["name"]);
        $extension = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

        $newfilename = $target_dir . $title . "." . $extension;

        // Allow only certain file formats
        if($extension != "jpg" && $extension != "png" && $extension != "jpeg")
        {
            echo "<script>alert('Sorry, only JPG, JPEG, & PNG files are allowed!');</script>";
            $uploadOk = 0;
            return false;
        }

        // Check file size
        if ($_FILES["compPoster"]["size"] > 500000)
        {
            echo "<script>alert('The picture exceeds the size limit.');</script>";
            $uploadOk = 0;
            return false;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            return false;
        }
        // if everything is ok, try to upload file
        else
        {
            if (move_uploaded_file($_FILES["compPoster"]["tmp_name"], $newfilename))
            {

                // Inserts details into the Posts table
                $stmt = $conn->prepare('UPDATE `posts` SET `dates`= ?,`short_desc`= ?,`details`= ?,`type`= ?,`participants`= ?,`venue`= ?,`fee`= ?,`deadline`= ?,`poster`= ?,`url`= ?,`tags`= ? WHERE `id` = ?');

                $stmt->bind_param('sssissdsssssi', $dates, $desc, $details, $type, $participants, $venue, $fee, $deadline, $newfilename, $url, $tags, $_GET['id']);

                // execute query
                $stmt->execute();

                echo "<script>alert('Post updated successfully!'); window.location.replace('comp.php');</script>";
            } 
            else
            {
                echo "<script>alert('Sorry, there was an error uploading your picture!');</script>";
                return false;
            } 
        }  
    } 
    else
    {
        // Updates details in the Posts table
        $stmt = $conn->prepare('UPDATE `posts` SET `dates`= ?,`short_desc`= ?,`details`= ?,`type`= ?,`participants`= ?,`venue`= ?,`fee`= ?,`deadline`= ?,`url`= ?,`tags`= ? WHERE `id` = ?');

        $stmt->bind_param('sssissdsssi', $dates, $desc, $details, $type, $participants, $venue, $fee, $deadline, $url, $tags, $id);

        // execute query
        $stmt->execute();

        echo "<script>alert('Post updated successfully!'); window.location.replace('comp.php');</script>";
    }
                          
    // Cleans input
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>

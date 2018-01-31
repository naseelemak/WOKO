<?php 
    $currentPage = 'Account Verified';

    require '../restrict/restrict.php';

    include '../header.php';
    include 'misc/navbar.php';
    
?>

<?php

    $id = $_GET['id'];
    $key = $_GET['key'];
    $username = base64_decode($id);

    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    $stmt = $conn->prepare('SELECT * FROM `students` WHERE `username` = ?');
    $stmt->bind_param('s', $username);

    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Assigning these values to variables for more convenient use
    $name = $row['name'];
    $email = $row['email'];
    $regDate = $row['reg_date'];

    $ckey = $name . $email . $regDate;
    $ckey = md5($ckey);

    if(strcmp($key, $ckey) == 0)
    {
        $stmt = $conn->prepare('UPDATE `students` SET `status` = 1 WHERE `username` = ?');
        
        $stmt->bind_param('s', $username);
        
        $stmt->execute();
        
        echo '<div class="container mt-3">
                <div class="row mt-5">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h4 class="card-title">Account Verified</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Your account has been verified!</h6>
                                <p class="card-text">Click <a href="../misc/login.php">here</a> to login...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>';
    }
    else
    {
        echo '<div class="container mt-3">
                <div class="row mt-5">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h4 class="card-title">Something went wrong</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Please contact the site admin at me@jaedon.my for support.</h6>
                                <p class="card-text">Click <a href="index.php">here</a> to return home...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>';
    }

?>



<?php

include '../footer.php';

?>



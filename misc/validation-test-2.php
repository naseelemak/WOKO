<?php
    require '../config.php';
    include '../header.php';
?>

    <html>

    <head>
        <title>Basic Validation</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../assets/css/bootstrap.css">

        <!-- Own CSS -->
        <link rel="stylesheet" href="../assets/css/style.css">

    </head>

    <body>
        <div class="container mt-5 mb-4">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2 class="text-center"><strong>Register</strong></h2>
                    <hr>
                    <form class="cmxform" id="regForm" method="POST" action="validation-test-2.php">
                        <div class="form-row">

                            <!-- TP Number -->
                            <div class="form-group col-md-12">
                                <label for="regID">TP Number</label>
                                <input type="text" name="regID" id="regID" class="form-control" required>
                            </div>

                            <!-- Password -->
                            <div class="form-group col-md-6">
                                <label for="regPass">Password</label>
                                <input type="password" name="regPass" id="regPass" class="form-control" minlength="5" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="regCPass">Confirm Password</label>
                                <input type="password" name="regCPass" id="regCPass" class="form-control" minlength="5" equalto="#regPass" required>
                            </div>
                        </div>
                        <button class="btn btn-primary" style="width:100%" type="submit" id="regSubmit" name="regSubmit">Sign up</button>
                    </form>
                    <script type="text/javascript">
                        $().ready(function() {
                            $.validator.addMethod('tpValidation', function(value) {
                                return /[Tt]{1}[Pp]{1}[0-9]{6}\b/.test(value);
                            }, 'Please enter a valid TP number.');

                            // Validate signup form on keyup and submit
                            $("#regForm").validate({
                                rules: {
                                    regID: "required tpValidation",
                                },
                            });
                        });

                    </script>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </body>

    </html>

    <?php

    // Login
	if(isset($_POST['regSubmit'])) 
    {  
        
    }
?>

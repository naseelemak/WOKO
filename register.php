<!doctype html>
<html lang="en">

<head>
    <title>Register | WOKO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="assets/css/normalize.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Own CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand mr-5" href="student/index.php">WOKO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>
                <div class="my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item mr-4">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <div class="container mt-5 mb-4">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 class="text-center"><strong>Register</strong></h2>
                <hr>
                <form>
                    <div class="form-row">

                        <!-- TP Number -->
                        <div class="form-group col-md-6">
                            <label for="inputTP">TP Number (Used at login)</label>
                            <input type="id" class="form-control" id="inputTP" placeholder="TPxxxxxx">
                        </div>

                        <!-- Password -->
                        <div class="form-group col-md-6">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                    </div>

                    <!-- Name -->
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="As per APU registration">
                    </div>

                    <!-- Course of Study -->
                    <div class="form-group">
                        <label for="courseSelect">Course of Study</label>
                        <select class="form-control" id="courseSelect">
                        <option selected disabled>--Select--</option>
                        <option>Foundation in IT</option>
                        <option>BSc (Hons) in Information Technology</option>
                        <option>BSc (Hons) in Information Technology with specialism in Information System Security</option>
                        <option>BSc (Hons) in Information Technology with specialism in Cloud Computing</option>
                        <option>BSc (Hons) in Software Engineering</option>
                    </select>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Preferred email address">
                    </div>

                    <!-- Phone Number -->
                    <div class="form-group">
                        <label for="inputTel">Phone Number</label>
                        <input class="form-control" type="tel" placeholder="0123456789" id="inputTel">
                    </div>

                    <!-- Preferred Type of Competition -->
                    <div class="form-group">
                        <label for="compTypeSelect">Preferred Type of Competition</label>
                        <select class="form-control" id="courseSelect">
                        <options selected disabled>--Select--</option>
                        <option>Individual</option>
                        <option>Team</option>
                    </select>
                    </div>

                    <!-- Skills -->
                    <div class="form-group">
                        <label for="inputSkills">Skills (Might combine with Interests)</label>
                        <input type="text" class="form-control" placeholder="Java, PHP, Public Speaking" id="inputSkills">
                    </div>

                    <!-- Interests -->
                    <div class="form-group">
                        <label for="inputInterests">Interests (Might combine with Skills)</label>
                        <input type="text" class="form-control" placeholder="Java, PHP, Public Speaking" id="inputInterests">
                    </div>

                    <!-- Self-Introduction -->
                    <div class="form-group">
                        <label for="inputIntroduction">Self-Introduction (Optional)</label>
                        <textarea class="form-control" id="inputIntroduction" placeholder="I excel in programming and in identifying different breeds of cats." rows="5"></textarea>
                    </div>

                    <div class="float-right mt-2">
                        <button type="submit" class="btn btn-primary mr-1" role="button">Submit</button>
                        <a class="btn btn-secondary" href="login.php" style="padding-left: 15px; padding-right: 15px;">Cancel</a>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>


        </div>
    </div>
    <!-- JavaScript -->

    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
            });
        });

    </script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>

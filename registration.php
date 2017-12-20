<!doctype html>
<html lang="en">

<head>
    <title>WOKO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Own CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>
    <div class="container mt-5 mb-5">
        <br><br>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="index.php" class="text-center">
                    <h2><strong>WOKO</strong></h2>
                </a>
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
                        <option>--Select--</option>
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
                        <option>--Select--</option>
                        <option>Pitching</option>
                        <option>Hackathon</option>
                        <option>Exhibition</option>
                        <option>Other</option>
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

                    <br>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary mr-1" role="button">Submit</button>
                        <a class="btn btn-secondary" href="login.php">&nbsp;Cancel&nbsp;</a>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>


        </div>
    </div>
</body>

</html>

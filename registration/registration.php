<!doctype html>
<html lang="en">
    <head>
        <title>WOKO | Register</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <!- insert logo here ->
                <a class="navbar-brand" href="#">
                    <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                    WOKO
                </a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Competitions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Discussions</a>
                    </li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            --Username--
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <h6 class="dropdown-header">--Username--</h6>
                            <button class="dropdown-item" type="button">Profile</button>
                            <button class="dropdown-item" type="button">Settings</button>
                            <button class="dropdown-item" type="button">Logout</button>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>

        <br>

    </head>
    
    <!- Unique code begins here ->
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h1>Register</h1>
                    <br>
                    <form>
                        <div class="form-row">

                            <!- TP Number ->
                            <div class="form-group col-md-6">
                                <label for="inputTP">TP Number</label>
                                <input type="id" class="form-control" id="inputTP" placeholder="TPxxxxxx">
                            </div>

                            <!- Password ->
                            <div class="form-group col-md-6">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                        </div>

                        <!- Name ->
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control" id="inputName" placeholder="As per APU registration">
                        </div>

                        <!- Course of Study ->
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

                        <!- Email ->
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Preferred email address">
                        </div>

                        <!- Phone Number ->
                        <div class="form-group">
                            <label for="inputTel">Phone Number</label>
                            <input class="form-control" type="tel" placeholder="0123456789" id="inputTel">
                        </div>

                        <!- Preferred Type of Competition ->
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

                        <!- Skills ->
                        <div class="form-group">
                            <label for="inputSkills">Skills</label>
                            <input type="text" class="form-control" id="inputSkills">
                        </div>

                        <!- Interests ->
                        <div class="form-group">
                            <label for="inputInterests">Interests</label>
                            <input type="text" class="form-control" id="inputInterests">
                        </div>

                        <!- Self-Introduction ->
                        <div class="form-group">
                            <label for="inputIntroduction">Self-Introduction (Optional)</label>
                            <textarea class="form-control" id="inputIntroduction" placeholder="I excel in programming and in identifying different breeds of cats." rows="5"></textarea>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-3"></div>


            </div>
        </div>
    </body>

</html>
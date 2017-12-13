<!doctype html>
<html lang="en">
    <head>
        <title>WOKO | Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <!- Date picker header ->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 4 DatePicker</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.7.0/combined/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.7.0/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />


        <!- Nav bar ->
        <?php include('../constants/navbar.php'); ?>
        <!- Nav bar ends here ->

        <br>

    </head>

    <!- Unique code begins here ->
    <body style="background-color: #f5f9fA">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="border:1px solid #cecece">
                    <p class='text-muted'><h4>Advanced Search</h4>
                    <br>

                    <!- Search field ->
                    <input class="form-control form-control-sm" type="text" placeholder="Search">

                    <!- Radio buttons ->
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="inlineRadios1" value="option1" checked>
                            Title
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="inlineRadios2" value="option2">
                            Author
                        </label>
                    </div>
                    

                    <!- Category selection ->
                    <select class="custom-select">
                        <option selected>Category</option>
                        <option value="1">Pitching</option>
                        <option value="2">Hackathon</option>
                        <option value="3">Exhibition</option>
                        <option value="4">Miscellaneous</option>
                    </select>

                    <br><br>

                    <!- Date picker ->
                    <input id="datepicker" width="276" />
                    <script>
                        $('#datepicker').datepicker({
                            uiLibrary: 'bootstrap4'
                        });
                    </script>

                    <br>

                    <!- Checkboxes ->
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="inclPastCompetitions">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Show past competitions</span>
                    </label>
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="inclOnlyAvailable">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Show available only</span>
                    </label>

                </div>

                <!- Competition list ->
                <div class='col-md-9'>
                    QR IT Seek
                </div>
            </div>
        </div>
    </body>

    <!- Unique code ends here ->

    <?php include('../constants/footer.php'); ?>
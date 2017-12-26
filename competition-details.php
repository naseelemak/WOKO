<?php 

$currentPage = "Competitions";

include 'misc/header.php';

?>

<div class="container mt-3">
    <h1 class="mb-4">Competition Details</h1>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Cover picture</h1>
            <p class="lead">The lecturer can choose to add a cover picture or not. Without a chosen picture, this will display a default one.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">QR IT Seek 2017&nbsp;&nbsp;<span class="btn btn-outline-danger">CLOSED</span><span class="btn btn-outline-success">OPEN</span></h4>
                    
                    <h6 class="card-subtitle mb-2 text-muted">Description</h6>
                    <p class="card-text mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Vitae nunc sed velit dignissim sodales ut eu sem integer. Faucibus interdum posuere lorem ipsum dolor. Curabitur gravida arcu ac tortor dignissim convallis aenean. Pulvinar pellentesque habitant morbi tristique senectus. Tellus in metus vulputate eu scelerisque felis imperdiet proin. Tincidunt dui ut ornare lectus sit amet est. In hendrerit gravida rutrum quisque non tellus. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Dui sapien eget mi proin. Purus viverra accumsan in nisl. Enim neque volutpat ac tincidunt vitae semper. Suspendisse potenti nullam ac tortor. Dolor morbi non arcu risus quis varius. Eget nullam non nisi est sit amet facilisis magna etiam. Sed velit dignissim sodales ut eu.</p>


                    <h6 class="card-subtitle mb-2 text-muted">Details</h6>
                    <ul>
                        <li>Competition Date: 25 Dec, 2017</li>
                        <li>Venue: Mid Valley</li>
                        <li>Registration Fee: FREE</li>
                        <li>Participant: 4 per team</li>
                    </ul>

                    <h6 class="card-subtitle mb-2 text-muted">Prizes</h6>
                    <ul>
                        <li>1st Prize: RM3000</li>
                        <li>2nd Prize: RM1500</li>
                        <li>3rd Prize: RM500</li>
                    </ul>

                    <h2 style="color: red;" class="mt-5 mb-4">Registration Deadline: 8th Dec, 2017</h2>

                    <h6 class="mb-2">Tags</h6>
                    <span class="btn btn-outline-dark">C++</span>&nbsp;<span class="btn btn-outline-dark">Teamwork</span>&nbsp;<span class="btn btn-outline-dark">Public Speaking</span>

                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <a style="width:100%;" class="btn btn-primary mb-2" href="#">Competition Website</a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" style="width: 100%" data-toggle="modal" data-target="#exampleModal">Contact Lecturer</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php

include 'misc/footer.php';

?>

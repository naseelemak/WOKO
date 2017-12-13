<!- Nav bar ->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <!- insert logo here ->
        <a class="navbar-brand" href="/index.php">
            <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            WOKO
        </a>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="/competitions/competitions.php">Competitions</a>
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
<!- nav bar ends here ->

<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <div class="container">
        
        <a class="navbar-brand" href="#">Crud (Php)</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $config['base_url']."view/search.php";?>">Search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $config['base_url']."controller/logout.php";?>">Logout</a>
            </li>
            </ul>
        </div>
    </div>
</nav>
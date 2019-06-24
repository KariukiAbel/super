
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.js">
<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.bundle.js">
<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.bundle.min.js">
<link rel="stylesheet" type="text/css" href="bootstrap/js/jquery.min.js">
<link rel="stylesheet" type="text/css" href="bootstrap/js/jquery.min.js">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">Logo</a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Link 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link 3</a>
        </li>
    </ul>
<!--    <ul class="nav navbar-nav navbar-right">-->
    <ul class="nav navbar-nav ml-auto">
        <li><a href="process_login.php"><span class="glyphicon glyphicon-user">
                        </span><?php echo $_SESSION['names']?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
</nav>

<div class="container-fluid">
    <h3>Brand / Logo</h3>
    <p>When using the .navbar-brand class on images, Bootstrap 4 will automatically style the image to fit the navbar.</p>
</div>
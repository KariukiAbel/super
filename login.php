<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.js">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.min.js">
</head>
<body>
<body>
<div class="container">
    <div class="col-md-4 col-md-offset-4" id="col">
        <h3 class="text-center">Log in Here</h3>
        <form role="form" action="loginprocess.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="email" class="form-control" name="mail" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="pwd" required>
            </div>
            <div class="form-group">
                <input type="checkbox" name="rem"><label>Remember me</label>
            </div>
            <button type="submit" class="btn btn-danger">Log In</button>

        </form>
        <br>
        <a href="Supplier/index.php">Register</a>
    </div>

</div>




</body>
</html>
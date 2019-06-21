<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19/06/2019
 * Time: 12:57
 */?>
<!DOCTYPE html>
<html>
<head>
    <title>Supplier Register</title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/js/bootstrap.js">
    <link rel="stylesheet" type="text/css" href="../bootstrap/js/bootstrap.min.js">
</head>
<body>

<div class="container">
    <div class="col-md-4 col-md-offset-4" id="col">
        <h3 class="text-center">Register Here</h3>
        <form role="form" action="register.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" class="form-control" name="tel" required>
            </div>
            <div class="form-group">
                <label>Name of Firm</label>
                <input type="text" class="form-control" name="firm" required>
            </div>
            <div class="form-group">
                <label>KRA Pin Number</label>
                <input type="text" class="form-control" name="pin" required>
            </div>
            <div class="form-group">
                <label>Location</label>
                <input type="text" class="form-control" name="loc" required>
            </div>
            <span class="glyphicon-save">
            <button type="submit" class="btn btn-danger">Register</button>
                <br>
                <br>
</span>
        </form>
    </div>
</body>
</html>

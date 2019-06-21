<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19/06/2019
 * Time: 12:56
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="../styles.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/js/bootstrap.js">
    <link rel="stylesheet" type="text/css" href="../bootstrap/js/bootstrap.min.js">
    <title>Customer</title>
</head>
<body>
<div class="container">
    <div class="col-md-8 col-md-offset-2" id="cl">
        <h3 class="text-center">Enter Details Here</h3>
        <form role="form" action="addcustomer.php" method="post">
            <div class="row">
                <div class="col-md-5" style="margin-left: 5%">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" required>
                    </div>
                </div>
                <div class="col-md-5"style="margin-left: 5%">
                    <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="lname" required>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="margin-left: 5%">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="mail" required>
                    </div>
                </div>
                <div class="col-md-5" style="margin-left: 5%">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" name="tel" class="form-control" required>
                        <br>
                    </div>
                </div>
                <div class="col-md-5" style="margin-left: 5%">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass1" class="form-control" required>
                        <br>
                    </div>
                </div>
                <div class="col-md-5" style="margin-left: 5%">
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="pass2" class="form-control" required>
                        <br>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-success" name="sub">Submit</button>
                    <br><br>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

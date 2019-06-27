<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/27/19
 * Time: 6:46 AM
 */?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.js">
    <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.bundle.js">
    <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="bootstrap/js/jquery.min.js">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div>

                <a>
                    <button class="btn-danger" id="login">Images <span class="glyphicon glyphicon-th"></span></button>
                </a>

               <div class="dropdown">
                     <button class="dropbtn btn-danger">Services <span class="caret" role="button"></span> </button>
                     <div class="dropdown-content">
                         <ul>
                             <li>
                                 <a href="#">Link 1</a>
                             </li>
                             <li>
                                 <a href="#">Link 2</a>
                             </li>
                             <li>
                                 <a href="#">Link 2</a>
                             </li>
                             <li>
                                 <a href="#">Link 2</a>
                             </li>
                         </ul>

                     </div>
                 </div>

                <a href="login.php">
                    <button class="btn btn-danger" id="login"><span class="glyphicon glyphicon-log-in "></span> Log in</button></a>


                </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-5">
            <h2>Willie Online Supermarket</h2>
            <form role="form" enctype="multipart/form-data" method="post" action="serch.php">
                <div>
                    <img src="images/LOGO.png" height="224" width="150">
                </div>
                <br>
                <div>
                    <input type="text" role="search" id="look" name="tafuta">
                </div>
                <br>
                <div style="align-content: center">
                    <button class="btn btn-default" name="see" id="btn">Search </button>
                    <button class="btn btn-default" id="btn1">I`m Good</button>
                </div>

            </form>
        </div>
        <div class="col-md-3"></div>
    </div>

    <div class="row"></div>
</div>
</body>
</html>

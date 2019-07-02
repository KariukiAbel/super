<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 7/2/19
 * Time: 8:46 AM
 */?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Purchase</title>
</head>
<body>
<?php include 'links.php';?>
<div class="container-fluid">
<div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">
            <div style="border-style: groove;padding: 15px;">
        <h2 style="text-align: center;">Supplier Details</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Name of Supplier:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pwd">Address:</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pwd">Telephone Number:</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pwd">Email:</label>
                        <input type="email" class="form-control" name="mail">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pwd">Location:</label>
                        <input type="text" class="form-control" name="loc">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pwd">KRA PIN:</label>
                        <input type="text" class="form-control" name="pin">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="pwd">Unit Price:</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                </div>
                <div class="col-md-6"></div>

            </div>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>

            </div>
            </div>

            <div style="border-style: groove;padding: 15px;">
           <h2 style="text-align: center;">Product Details</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Date and Time of purchase:</label>
                            <input type="datetime-local" class="form-control" name="datetime">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pwd">Product:</label>
                            <input type="text" class="form-control" name="product">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pwd">Description:</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pwd">Quantity:</label>
                            <input type="number" class="form-control" name="quantity">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pwd">Total Price:</label>
                            <input type="number" class="form-control" name="total">
                        </div>
                    </div>
                    <div class="col-md-6"></div>

                </div>

                <button type="submit" class="btn btn-danger btn-block">Submit</button>
                <br><br>
            </form>
    </div>

        </div>
    <div class="col-md-2"></div>
</div>
</body>
</html>

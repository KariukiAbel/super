<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/27/19
 * Time: 11:24 AM
 */

include '../connect.php';
$sql="SELECT * FROM `supplies` WHERE ID=".$_REQUEST['id'];
$result=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
$arr[]=explode(',',$row['Photo']);
print_r($arr);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View </title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/js/bootstrap.js">
    <link rel="stylesheet" type="text/css" href="../bootstrap/js/bootstrap.min.js">
</head>
<body>
<div class="container">
    <div class="row" id="row1">
        <form role="form" method="post" enctype="multipart/form-data">
        <div class="col-sm-4">
            <img src='images/<?php $arr[0]?>' height="200" width="300">
        </div>
        <div class="col-sm-4" id="col4">
            <div class="form-inline">
                <label>Item name</label>
                <input type="text" class="form-control" value="<?php echo $row['Commodity_Name']?>" id="read" readonly>
            </div>
            <div class="form-inline">
                <label>Quantity</label>
                <input type="text" class="form-control" value="<?php echo $row['Unit_Measure']?>"  id="read"  readonly>
            </div>
            <div class="form-inline">
                <label>Supplier</label>
                <input type="text" class="form-control" value="<?php echo $row['Supplier_Name']?>"  id="read"  readonly>
            </div>
            <div class="form-inline">
                <label>Price</label>
                <input type="text" class="form-control" value="<?php echo $row['Price']?>"  id="read"  readonly>
            </div>
            <button class="btn btn-danger">Buy now </button>

        </div>

        </form>
    </div>
</div><?php }?>
</body>
</html>

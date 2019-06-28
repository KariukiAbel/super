<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/27/19
 * Time: 11:24 AM
 */

include '../connect.php';
$sql="SELECT * FROM `supplier` WHERE ID=".$_REQUEST['id'];
$result=mysqli_query($conn,$sql);
$data=array();

while ($row = mysqli_fetch_assoc($result)) {
    echo $row["ID"];
    echo $row["Commodity_Name"];
    echo $row["Unit_Measure"];
    echo $row["Supplier_Name"];
    echo $row["Price"];

}
//echo json_encode($data);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View </title>
</head>
<body>

</body>
</html>

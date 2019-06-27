<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/27/19
 * Time: 11:24 AM
 */

include '../connect.php';
$sql="SELECT * FROM `supplier` WHERE ID=".$_REQUEST['ID'];
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

<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/20/19
 * Time: 3:48 PM
 */
extract($_POST);
    include 'connect.php';

    $sql="select * from supplier where Commodity_Name='$tafuta'" or die(mysqli_error($conn));
    $result=mysqli_query($conn,$sql);
    $res=mysqli_fetch_assoc($result);
    echo $res[1];
    echo $res[2];
    echo $res[3];
    echo $res[4];
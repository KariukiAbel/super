<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/20/19
 * Time: 9:28 AM
 */
extract($_POST);
include '../connect.php';
$sql="select * from supplier1 where Email='$email' and Password='$pass'";
$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
$count=mysqli_num_rows($query);
if($pass==$conpass){

if($count < 1){
    $sql2="insert into supplier1 values (null,'$name','$email','$tel','$firm','$pin','$loc')";
    $query2=mysqli_query($conn,$sql2) or die(mysqli_error($conn));
    echo "<script>
alert('Record added successfully...!!');
location.href=''
</script>";
}}
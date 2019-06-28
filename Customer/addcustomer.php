<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/20/19
 * Time: 11:38 AM
 */
include "../connect.php";
extract($_POST);
$sql="select * from Customer_Details where Email='$mail' and Password='$pass1'";
$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
$count=mysqli_num_rows($query);
$pass1=md5($pass1);
$pass2=md5($pass2);
if ($pass1==$pass2){
if($count==0){
    $sql2="insert into Customer_Details values(null,'$fname','$lname','$mail','$tel','$pass1')";
    $query2=mysqli_query($conn,$sql2) or die(mysqli_error($conn));
    echo "<script>
alert('Details added sucessfully..');
location.href='../login.php';
</script>";
}
else{
    echo '<script>
alert("Details already exists..");
location.href="../index.php";
</script>';
}}
else{
    echo '<script>
alert("Passwords do not match");
location.href="index.php";
</script>';
}
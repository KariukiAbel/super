<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19/06/2019
 * Time: 12:36
 */
$pwd=md5($pwd);
extract($_POST);
include 'connect.php';
//suppliers
$sql="select * from supplier1 where Email='$mail' and Password='$pwd'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
$count=mysqli_num_rows($result);

if ($count==1){
    //success
        $fetch = mysqli_fetch_row($result);
        $names = $fetch[1];
        session_start();
        $_SESSION['Name'] = $names;
        $_SESSION['Email'] = $mail;

        echo "<script>
alert('Log in successful..!!');location.href='Supplier/commodities.php';
</script>";
}
else{
    $sql2="select * from Customer_Details where Email='$mail' and Password='$pwd'";
    $result2=mysqli_query($conn,$sql2);
    $count2=mysqli_num_rows($result2);
    if ($count2==1){
        $fetch = mysqli_fetch_row($result2);
        $names = $fetch[1][2];
        session_start();
        $_SESSION['Name'] = $names;
        $_SESSION['Email'] = $mail;
        echo "<script>
alert('Log in successful..!!');location.href='index.php';
</script>";

    }

    else{
        echo "<script>
alert('Wrong username or password');
location.href='login.php';
</script>";
    }
}
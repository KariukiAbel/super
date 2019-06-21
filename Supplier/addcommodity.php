<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/20/19
 * Time: 10:29 AM
 */

if (isset($_POST['sub'])){
    $comname=$_POST["comname"];
   // $comid=$_POST["comid"];
    $price=$_POST["price"];
    include '../connect.php';
    $fileName=$_FILES['image']['name'];
    $fileTmpName=$_FILES['image']['tmp_name'];
    $fileSize=$_FILES['image']['size'];
    $fileError=$_FILES['image']['error'];
    $fileType=$_FILES['image']['type'];
    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));
    $allowed=array('jpg','jpeg','png');
    if (in_array($fileActualExt , $allowed)){
        if ($fileError === 0){
            if ($fileSize < 5000000){
                $fileNameNew=uniqid('',true.".".$fileActualExt);
                $fileDestination='images/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);

                //looking in the database if there exists the same commodity
                $sql="select * from supplier where Commodity_Name='$comname'";
                $result=mysqli_query($conn,$sql);
                $count=mysqli_num_rows($result);

                if ($count < 1){
                    $sql2="insert into supplier(`ID`, `Commodity_Name`, `Price`, `Photo`)values (null,'$comname','Ksh $price','$fileName')"
                    or die(mysqli_error($conn));
                    $query=mysqli_query($conn,$sql2);
                    echo "<script>
alert('Successfull');
location.href='../searchTable.php';
</script>";
                }


               }
            else{
                echo "your file is too large ";
            }
        }
        else{
            echo "There was an error uploading your file ";
        }
    }
    else{
        echo "you cannot upload files of this type";
    }


}

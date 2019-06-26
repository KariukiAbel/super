<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/20/19
 * Time: 10:29 AM
 */


if (isset($_POST['sub'])) {
    include '../connect.php';
    $comname =$_POST['comname'];
    $measure =$_POST['measure'];
    $suppliername =$_POST['com'];
    $price =$_POST['price'];
    $file =$_FILES['file'];
    print_r($file);

    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];

    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));
    $allowed=array('jpg','jpeg','png');

    if (in_array($allowed,$fileActualExt)){
        if ($fileError===0){
            if ($fileSize < 5000000){
                $fileNameNew=uniqid('',true).".".$fileActualExt;
                $fileDestination='images/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);

                $sql="select * from supplier where Commodity_Name='$comname' and Supplier_name='$suppliername'";
                $result=mysqli_query($conn,$sql);
                $count= mysqli_num_rows($result);

                if ($count<1){
                    $sql2="insert into supplier (`ID`, `Commodity_Name`, `Unit_Measure`,  `Supplier_Name`, `Price`, `Photo`) 
                    values (null,'$comname','$measure','$suppliername','$price','$fileNameNew')";
                    $query=mysqli_query($conn,$sql2);
                }
                else{
                    echo "<script>
alert('Item already exists in the databse');
</script>";
                }

            }
            else{
                echo "<script>
alert('Your image is too big');
</script>";
            }
        }
        else{
            echo "<script>
alert('There was an error in your image');
</script>";
        }
    }

    else{
        echo "<script>
alert('You cannot upload this type of file');
</script>";
    }
}
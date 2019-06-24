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
    $file=$_FILES['file'];
    print_r($file);

    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];

    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));
    $allowed=array('jpg','jpeg','png','pdf');

    if (in_array($fileActualExt , $allowed)){
        if ($fileError === 0){
            if ($fileSize < 5000000){
                $fileNameNew=uniqid('',true).".".$fileActualExt;
                $fileDestination='images/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);

                $select="select * from supplier where Commodity_Name='$comname'";
                $result=mysqli_query($conn,$select) or die(mysqli_error($conn));
                if (mysqli_num_rows($result)<1){

                $sql="insert into supplier (`ID`, `Commodity_Name`,`Price`, `Photo`) values (null,'$comname','$price','$fileTmpName')";
                mysqli_query($conn,$sql);
                echo "<script>alert('Upload success..!!');
                location.href='../searchTable.php'
</script>";}
else{
                    echo "<script>
alert('Upload unsuccessful..');
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
//    else{
//        echo "you cannot upload files of this type";
//    }
}

<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/20/19
 * Time: 10:29 AM
 */


if (isset($_POST['sub'])) {
    include '../connect.php';
    $comname = $_POST['comname'];
    $measure = $_POST['measure'];
    $suppliername = $_POST['com'];
    $price = $_POST['price'];
    $files = $_FILES['file'];

    //$uploaded = array();


    $sql=mysqli_query($conn,"select * from suppplies where Commodity_Name='$comname' and Supplier_Name='$suppliername'");
    $count=mysqli_num_rows($sql);

    if ($count<1){
    foreach ($files as $file){
        $file_name=$files['name'];
        $file_tmpname=$files['tmp_name'];
        $file_size=$files['size'];
        $file_error=$files['error'];
        $allowed = array('jpg', 'jpeg', 'png');
        $fileExt=explode('.',$file_name);
        $fileActualExt=strtolower(end($fileExt));
        if (in_array($fileActualExt,$allowed)){
            if ($file_error===0){
                if ($file_size <5000000){
                    $file_name_new=uniqid('',true).".".$fileActualExt;
                        $sql2=mysqli_query($conn,"insert into supplies(`ID`, `Commodity_Name`, `Unit_Measure`, `Supplier_Name`, `Price`, `Photo`) 
                                                        values (null,'$comname','$measure','$suppliername','$price','$file_name_new')");
                        echo "<script>alert('Upload Sucessfull');</script>";

                }else{
                    echo "<script>alert('Image size should be less than 5 MB')</script>";
                    }

            }
            else{
                echo "<script>alert('There was an error in one of the images');</script>";
            }

        }else{
            echo "<script>
alert('Cannot upload images of this type');
</script>";
        }
    }}else{
        echo "<script>alert('Item already exists');</script>";
    }

   }
$fileArray=readArrayFiles($files);
    pre_r($fileArray);

function readArrayFiles($filePost){
    $fileAry=array();
    $fileCount=count($filePost['name']);
    $fileKeys=array_keys($filePost);

    for ($i=0;$i<$fileCount;$i++){
        foreach ($fileKeys as $key){
            $fileAry[$i][$key]=$filePost[$key][$i];
        }
    }
    return $fileAry;
}


function pre_r($array){
echo "<pre>";
print_r($array);
echo "</pre>";
}
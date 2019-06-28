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

    //print_r($files);
    if(!empty($_FILES['file']['name'][0])) {
        $files =$_FILES['file'];
//    print_r($files);

    $uploaded = array();
//    $fileName=$_FILES['file']['name'];
//    $fileTmpName=$_FILES['file']['tmp_name'];
//    $fileSize=$_FILES['file']['size'];
//    $fileError=$_FILES['file']['error'];
//    $fileType=$_FILES['file']['type'];

//    $fileExt=explode('.',$fileName);
//    $fileActualExt=strtolower(end($fileExt));
    $allowed=array('jpg','jpeg','png');
$i=0;
    foreach($files['name'] as $position => $file_name) {
        $file_name = $_FILES['file']['name'][$position];
        $file_tmp = $files['tmp_name'][$position];
        $file_size = $files['size'][$position];
        $file_error = $files['error'][$position];

        $file_ext = explode('.', $file_name);
        $file_Actext = strtolower(end($file_ext));

        if(in_array($file_Actext, $allowed)) {

            if($file_error === 0) {

                if($file_size <= 5000000) {// 5MB

                    $file_name_new = uniqid('', true) . '.' . $file_Actext;
                    $file_destination = 'images/'.$file_name_new;

//                        pre_r($files);
                    $sql="select * from supplier where Commodity_Name='$comname' and Supplier_name='$suppliername'";
                    $result=mysqli_query($conn,$sql);
                    $count= mysqli_num_rows($result);

                    if ($count<1){
                        $sql2="insert into supplier (`ID`, `Commodity_Name`, `Unit_Measure`,  `Supplier_Name`, `Price`, `Photo`) 
                    values (null,'$comname','$measure','$suppliername','Ksh $price','$file_name_new')";
                        $query=mysqli_query($conn,$sql2);

                    if(move_uploaded_file($file_tmp [$position], $file_destination)) {
                        $uploaded[$position] = $file_destination;
                        echo "<script>alert('Upload sucessfull..');location.href='../searchTable.php'</script>";
                    } else {
                        $failed[$position] = "[{$file_name}] failed to upload";
                    }}
                    else{
                        echo "<script>
alert('Item already exists in the databse');
</script>";

//    if (in_array($fileActualExt,$allowed)){
//        if ($fileError===0){
//            if ($fileSize < 5000000){
//                $fileNameNew=uniqid('',true).".".$fileActualExt;
//                $fileDestination='images/'.$fileNameNew;

//
//                $sql="select * from supplier where Commodity_Name='$comname' and Supplier_name='$suppliername'";
//                $result=mysqli_query($conn,$sql);
//                $count= mysqli_num_rows($result);
//
//                if ($count<1){
//                    $sql2="insert into supplier (`ID`, `Commodity_Name`, `Unit_Measure`,  `Supplier_Name`, `Price`, `Photo`)
//                    values (null,'$comname','$measure','$suppliername','Ksh $price','$fileNameNew')";
//                    $query=mysqli_query($conn,$sql2);

//                    if(move_uploaded_file($fileTmpName, $fileDestination)) {
//                        $uploaded[$position] = $fileDestination;
//                    }

//                    move_uploaded_file($fileTmpName,$fileDestination);
//                    echo "<script>alert('Upload sucessfull..');location.href='../searchTable.php'</script>";
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
    }}
}

$fileArray=readArrayFiles($files);
    pre_r($fileArray);

}

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
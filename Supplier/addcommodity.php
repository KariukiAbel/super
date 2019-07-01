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
    $imagestr;
    $allowed=array('jpg','jpeg','png');
    $upload=array();
    if ($count < 1) {
        foreach ($files['name'] as $position => $key) {
            $file_name = $files['name'][$position];
            $file_tmp = $files['tmp_name'][$position];
            $file_size = $files['size'][$position];
            $file_error = $files['error'][$position];

            $file_ext = explode('.', $file_name);
            $file_Actext = strtolower(end($file_ext));

            if (in_array($file_Actext, $allowed)) {

                if ($file_error === 0) {

                    if ($file_size < 5000000) {

                        $fileNameNew = uniqid('', true) . "." . $file_Actext;
                        array_push($upload,$fileNameNew);
                        $imagestr=implode(",",$upload);
                        $fileDestination = 'images/' . $fileNameNew;



                    } else {
                        echo "<script>
alert('Your image is too big');</scrpt>";
                    }
                } else {
                    echo "<script>
alert('Your image has an error');</scrpt>";
                }
            } else {
                echo "<script>
alert('You cannot upload this type of file');
</script>";
            }
        }
        $sql2 = mysqli_query($conn, "insert into supplies (`ID`, `Commodity_Name`, `Unit_Measure`,  `Supplier_Name`, `Price`, `Photo`)
                    values (null,'$comname','$measure','$suppliername','Ksh $price','$imagestr')");
        move_uploaded_file($file_tmp, $fileDestination);
//        echo "<script>alert('Upload sucessfull..');location.href='../searchTable.php'</script>";

    }

    else {
        echo "<script>
alert('Item already exists in the databse');
</script>";
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

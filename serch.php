<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/20/19
 * Time: 3:48 PM
 */
extract($_POST);
    include 'connect.php';

    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.js">
    <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/js/lightbox.js">
    <title>Documents</title>
</head>
<body>
<div class="container">
    <table class="table" id="example">
        <thead>
        <tr>
            <th>Commodity Name</th>
            <th>Supplier Name</th>
             <th>Price</th>
            <th style="text-align: center">Photo</th>
            <th></th>
        </tr>
        <tbody>
        <?php
        $sql="select * from supplies  where Commodity_Name like '%$tafuta%' order by ID desc ";
        $result=mysqli_query($conn,$sql);
        while($row =mysqli_fetch_array($result))
        {
            echo"<tr>";
            echo"<td>$row[1]</td>";
            echo"<td>$row[4]</td>";
            echo"<td>$row[5]</td>";
            echo"<td><img src='Supplier/images/$row[6]'height='120' width='200'> </td>";
            echo "<td>"."<a href='Customer/details.php?id=$row[0]'><button class='btn btn-primary' id='btn3'>Order</button></a></td>";
//            echo "<td><a href='Supplier/view.php?id='.$row[0]><button class='btn btn-danger' id='btn4'>View</button></a></td>";
            echo "<td>"."<a href='Supplier/view.php?id=$row[0]'><button class='btn btn-danger' id='btn4'>View</button></a></td>";
                       echo"</tr>";
        }
        ?>

        </tbody>
        </thead>
    </table>
</div>

<link rel="stylesheet" href="bootstrap/css/dataTables.css"/>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/dataTables.js"></script>
<script>
    $("#example").DataTable();
</script>

</body>
</html>
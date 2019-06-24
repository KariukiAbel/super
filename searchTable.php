<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/21/19
 * Time: 9:14 AM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Commodities</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.js">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/js/lightbox.js">
</head>
<body>
<?php
include 'connect.php';
$sql= "select count(*) from supplier";
$result = mysqli_query($conn ,$sql);
$row = mysqli_fetch_row($result);
$number = $row[0];
echo "<h4> We have $number items</h4>"
?>

<div class="container">
    <table class="table" id="example">
        <thead>
        <tr>
            <th>Commodity Name</th>
            <th>Supplier</th>
            <th>Price</th>
            <th>Photo</th>
            <th></th>
             </tr>
        <tbody>
        <?php
        $sql="select * from supplier";
        $result=mysqli_query($conn,$sql);
        while($row =mysqli_fetch_array($result))
        {
            echo"<tr>";
            echo"<td>$row[1]</td>";
            echo"<td>$row[5]</td>";
            echo"<td>$row[6]</td>";
            echo"<td>
<img src='images/.$row[7]' height='150' width='200'>
</td>";
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
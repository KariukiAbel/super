<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/24/19
 * Time: 2:01 PM
 */

include '../connect.php';
echo $result;
?>
<!doctype html>
<head>
    <title>Details</title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/js/bootstrap.js">
    <link rel="stylesheet" type="text/css" href="../bootstrap/js/bootstrap.min.js">
</head>
<body>
<?php
if (isset($_REQUEST["id"])) {
    $sql="select * from Customer_Details where ID=".$_REQUEST["id"];
    $result=mysqli_query($conn,$sql) or die(mysqli_errno($conn));
    $row = mysqli_fetch_assoc($result);
?>
<div class="container">
    <div class="col-md-8 col-md-offset-2" id="cl">
        <h3 class="text-center">Enter Details Here</h3>
        <form role="form">
            <input type="hidden" name="idd" value="<?php
            echo $_REQUEST['id'];
            ?>">
            <div class="row">
                <div class="col-md-5" style="margin-left: 5%">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" value="<?php echo $row['First_Name']?>" name="fname" required>
                    </div>
                </div>
                <div class="col-md-5"style="margin-left: 5%">
                    <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="lname" required>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="margin-left: 5%">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="mail" required>
                    </div>
                </div>
                <div class="col-md-5" style="margin-left: 5%">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" name="tel" class="form-control" required>
                        <br>
                    </div>
                </div>
                <div class="col-md-5" style="margin-left: 5%">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass1" class="form-control" required>
                        <br>
                    </div>
                </div>
                <div class="col-md-5" style="margin-left: 5%">
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="pass2" class="form-control" required>
                        <br>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-success" name="sub">Submit</button>
                    <br><br>
                </div>
            </div>
        </form>
        <?php } ?>
</body>
</html>
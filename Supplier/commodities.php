<!DOCTYPE html>
<head>
    <title>Add Commodities</title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/js/bootstrap.js">
    <link rel="stylesheet" type="text/css" href="../bootstrap/js/bootstrap.min.js">
</head>
<body>
<div class="container">
    <div class="col-md-4 col-md-offset-4" id="col">
        <h3 class="text-center">Register Commodity Here</h3>
        <form role="form" action="addcommodity.php" method="post">
            <div class="form-group">
                <label>Commodity Name</label>
                <input type="text" class="form-control" name="comname" required>
            </div>
            <div class="form-group">
                <label>Unit of Measure</label>
                <input type="text" class="form-control" name="measure" required>
            </div>

            <div class="form-group">
                <label>Supplier Name</label>
                <input type="text" class="form-control" name="com" required>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" name="price" required>
            </div>
<!--            <div class="form-group">-->
<!--                <label>Picture of the commodity</label>-->
<!--                <input type="file" name="file" required>-->
<!--                <br>-->
<!--            </div>-->
            <button type="submit" class="btn btn-success" name="sub">Register Commodity</button>
<br><br>
        </form>
        </div>

</body>
</htm>
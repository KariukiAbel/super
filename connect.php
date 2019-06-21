<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19/06/2019
 * Time: 12:36
 */

$conn=mysqli_connect("127.0.0.1","root","","Logistics");
if (!$conn){
    echo mysqli_connect_error("Failed to connect to database ",$db);
}

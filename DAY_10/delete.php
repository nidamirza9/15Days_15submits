<?php

$connection= mysqli_connect("localhost", "root", "","db_internship");

$id = $_GET['deid'];

$r = mysqli_query($connection, "delete from tbl_user where user_id='{$id}'") or die(mysqli_error($connection)) ;

If($r)
{
    echo "<script>alert('Record deleted'); window.location='3table.php';</script>";
}
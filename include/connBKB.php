<?php
$conn = mysqli_connect("localhost", "root", "", "bkb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
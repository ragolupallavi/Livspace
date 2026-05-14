<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "pglife");

if (!$conn) {
    die("Failed to connect to MySQL! Please contact the admin. Error: " . mysqli_connect_error());
}

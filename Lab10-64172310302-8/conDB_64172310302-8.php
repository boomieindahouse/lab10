<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "laboratory9";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
    echo("การเชื่อมต่อล้มเหลว<br>");
}

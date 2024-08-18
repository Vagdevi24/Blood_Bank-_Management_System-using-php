<?php
$servername="localhost";
$username="root";
$password="";
$dbname="vag";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
// echo "<h1>coonection succes</h1>";
?>
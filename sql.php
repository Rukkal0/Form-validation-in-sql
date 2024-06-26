<?php
$servername='localhost';
$username='root';
$password='';
$databasename='data';
$conn=new mysqli($servername,$username,$password,$databasename);
if($conn->connect_error)
{
    die("Error".mysqli_connect_error());
}
?>
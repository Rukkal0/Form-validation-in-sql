<?php
require('sql.php');
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql='INSERT INTO data_for_form (Username,Email,pass) VALUE(?,?,?)';
$stmt=$conn->prepare($sql);
$stmt->bind_param('sss',$username,$email,$password);
if($stmt->execute()){
  header('Location:../code/table.php');
}
else{
    $stmt->error;
}
}
?>
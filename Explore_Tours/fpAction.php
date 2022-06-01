<?php
include 'dbconnection.php';
$mail="";
$ful="";
$pass="";
$id="";
if(isset($_POST['mail'])){$mail = $_POST['mail'];}
if(isset($_POST['ful'])){$ful = $_POST['ful'];}
if(isset($_POST['pass'])){$ful = $_POST['pass'];}
$query = "Select * from user where mail = '".$mail."' ";
$result = $conn->query($query);
$id == $result;
if(isset($_POST['id'])){$id = $_POST['id'];}
$Query= "update user set mail ='".$mail."',ful='".$ful."',pass='".$pass."' WHERE id = '".$id."' "; 
$result = $conn->query($Query);
if($result===TRUE){  
    header("Location: signin.php?msg=Update Success!");die();
}else{
    header("Location: fp.php?msg=Update Error:".mysqli_error($conn));die();
}
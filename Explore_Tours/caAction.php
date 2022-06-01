<?php
include 'dbconnection.php';	
$ful="";
$mail="";
$pass="";
if(isset($_POST['ful'])){$ful = $_POST['ful'];}
if(isset($_POST['mail'])){$mail = $_POST['mail'];}
if(isset($_POST['pass'])){$pass = $_POST['pass'];}
$Query  = "Insert into user(ful,mail,pass)values('".$ful."', '".$mail."', '".$pass."')";
$result = $conn->query($Query);
                if ($result===TRUE){

     header("Location: create_account.php?msg=User save Success !"); 
         die(); 
                }else{
 header("Location: create_account.php?msg=User save Error".mysqli_error($conn)); 
         die(); 

}
?>
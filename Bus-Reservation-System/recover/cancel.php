<?php
include "include.php";

session_start();

$del="Delete from `booking` where user='".$_SESSION['user']."' and Date='".$_GET['Date']."'";
$req= $_GET['req'];
$id=$_GET['id'];
$upd= "UPDATE bus SET seats=(seats+$req) WHERE Id=$id";

mysql_query($del) or die(mysql_error());
mysql_query($upd) or die(mysql_error());

//echo "registered succesfully";
	//$_SESSION['user']=$_POST["Username"];
	$_SESSION['del'] = 'Cancelled succesfully...Rs.';
	$_SESSION['refund']=$_GET['Fare'];
	$_SESSION['mesg']=' will be refunded!!';
	header('location: history1.php');
//echo '<script language="javascript">document.location.href="web_home.php"</script>';
?>
<?php
include "include.php";

session_start();

if($_POST["Password"] == NULL)
{
$upd= "UPDATE `user` SET Fname='".$_POST["Fname"]."',Lname='".$_POST["Lname"]."',Security='".$_POST["Security"]."' WHERE Username='".$_SESSION['user']."'";

	
}
else
{
$pass=sha1($_POST["Password"]);

//$upd= "UPDATE `user` SET Fname='".$_POST["Fname"]."',Lname='".$_POST["Lname"]."',Email='".$_POST["Email"]."',Password='".$_POST["Password"]."' WHERE Username='".$_SESSION['user']."'";
$upd= "UPDATE `user` SET Fname='".$_POST["Fname"]."',Lname='".$_POST["Lname"]."',Security='".$_POST["Security"]."',Password='$pass' WHERE Username='".$_SESSION['user']."'";

}
mysql_query($upd) or die(mysql_error());

	$_SESSION['updt'] = 'Profile updated successfully...';
	header('location: generic.php');
?>
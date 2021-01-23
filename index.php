<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	body{
		background-image: url(voting.jpg);
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
</head>
</html>
<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>

<p><center><legend><font color='white' size='18'>This system allows all registered users to vote for their favorite STUDENT</p>
<p>In order to make a vote you have to register first and then login.</font></legend></center>
    <p>&nbsp;&nbsp;</p>
<?php include "footer.php";?>

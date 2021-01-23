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
<?php
if(!isset($_SESSION)) {
session_start();
}
include "auth.php";
include "header_voter.php";
?>
<h4><font color="olive"> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3>Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> vote for your favorite student!!! <BR>
<input type="radio" name="lan" value="1NH18IS001">1NH18IS001<BR>
<input type="radio" name="lan" value="1NH18IS074">1NH18IS074<BR>
<input type="radio" name="lan" value="1NH18IS054">1NH18IS054<BR>
<input type="radio" name="lan" value="1NH18IS101">1NH18IS101<BR>
<input type="radio" name="lan" value="1NH18IS088">1NH18IS088<BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>

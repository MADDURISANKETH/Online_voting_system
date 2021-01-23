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
include "connection.php";
?>
<font color="olive">
<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<?php
$username = $_SESSION['SESS_NAME'];
$query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) {
$sql = mysqli_query($con, 'SELECT voted from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
$row = mysqli_fetch_assoc($sql);
        echo "You have voted for: " . " " . $row['voted'];
    } else {
        echo "You have not voted yet. Please submit your vote!";
    }
}
?>

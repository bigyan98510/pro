<?php
	define('db_user','root');
	define('db_pswd','');
	define('db_host','localhost');
	define('db_name','hirecarwebsite');
	$dbcon=mysqli_connect(db_host,db_user,db_pswd,db_name);
	if(!$dbcon){
		die('error connecting to database.');
	}
	$password=$_POST['password'];
	mysqli_report(MYSQLI_REPORT_ERROR);
	session_start();
	$queryrenter="SELECT * FROM renter where password='".$password."'";
	$resultrenter=mysqli_query($dbcon,$queryrenter)or die(mysqli_error());
	$num_row_renter=mysqli_num_rows($resultrenter);
	if($num_row_renter>0){
		$_SESSION['username']=$username;
		header("Location:RenterSuccess.php");
		
	}
 	else{?>
	<script type="text/javascript">
	alert("Wrong Password");
	window.location.replace("RenterPassword.php");
	</script>
	<?php }
	
?>
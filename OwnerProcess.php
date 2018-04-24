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
	$queryowner="SELECT * FROM owner where password='".$password."'";
	$resultowner=mysqli_query($dbcon,$queryowner)or die(mysqli_error());
	$num_row_owner=mysqli_num_rows($resultowner);
	if($num_row_owner>0){
		$_SESSION['username']=$username;
		header("Location:OwnerSuccess.php");
		
	}
 	else{?>
	<script type="text/javascript">
	alert("Wrong Password");
	window.location.replace("OwnerPassword.php");
	</script>
	<?php }
	
?>
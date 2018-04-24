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
	$queryadmin="SELECT * FROM admin where password='".$password."'";
	$resultadmin=mysqli_query($dbcon,$queryadmin)or die(mysqli_error());
	$num_row_admin=mysqli_num_rows($resultadmin);
	if($num_row_admin>0){
		$_SESSION['username']=$username;
		header("Location:AdminSuccess.php");
		
	}
 	else{?>
	<script type="text/javascript">
	alert("Wrong Password");
	window.location.replace("AdminPassword.php");
	</script>
	<?php }
	
?>
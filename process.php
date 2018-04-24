<?php
	define('db_user','root');
	define('db_pswd','');
	define('db_host','localhost');
	define('db_name','hirecarwebsite');
	$dbcon=mysqli_connect(db_host,db_user,db_pswd,db_name);
	if(!$dbcon){
		die('error connecting to database.');
	}
	$username=$_POST['uname'];
	$count=0;
	mysqli_report(MYSQLI_REPORT_ERROR);
	session_start();
	$queryowner="SELECT * FROM owner where username='".$username."'";
	$queryrenter="SELECT * FROM renter where username='".$username."'";
	$queryadmin="SELECT * FROM admin where username='".$username."'";
	$resultowner=mysqli_query($dbcon,$queryowner)or die(mysqli_error());
	$resultrenter=mysqli_query($dbcon,$queryrenter) or die(mysqli_error());
	$resultadmin=mysqli_query($dbcon,$queryadmin) or die(mysqli_error());
	$num_row_owner=mysqli_num_rows($resultowner);
	$num_row_renter=mysqli_num_rows($resultrenter);
	$num_row_admin=mysqli_num_rows($resultadmin);
	if($num_row_owner>0){
		$_SESSION['username']=$username;
		$_SESSION['define']="owner";
		$count=1;
		header("Location:OwnerPassword.php");
	}
	else if($num_row_renter>0){
		$_SESSION['username']=$username;
		$_SESSION['define']="renter";
		$count=1;
		header("Location:RenterPassword.php");
	}
	else if($num_row_admin>0){
		$_SESSION['username']=$username;
		$_SESSION['define']="admin";
		$count=1;
		header("Location:AdminPassword.php");
	}

	else{?>
	<script type="text/javascript">
	alert("Wrong username");
	window.location.replace("login.php");
	</script>
	<?php }
	
?>
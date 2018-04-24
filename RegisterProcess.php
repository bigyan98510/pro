<?php
	define('db_user','root');
	define('db_pswd','');
	define('db_host','localhost');
	define('db_name','hirecarwebsite');
	$dbcon=mysqli_connect(db_host,db_user,db_pswd,db_name);
	if(!$dbcon){
		die('error connecting to database.');
	}
	mysqli_report(MYSQLI_REPORT_ERROR);
	session_start();
	$username=$_POST['uname'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$quetion=$_POST['question'];
	$answer=$_POST['answer'];
	$type=$_POST['type'];
	
	if($type=="Renter"){
		$queryret="select * from renter where username='".$username."';";
		$res=mysqli_query($dbcon,$queryret) or die(mysqli_error());
		$count=mysqli_num_rows($res);
				if($count>0){
				?>
				<script type="text/javascript">
				alert(" this username is already used, please choose new one. ");
				window.location.replace("newRegister.php");
				</script>
				<?php
			}
			else {
				
				 $queryretrieve="select * from renter where email='".$email."';";
				 $resret=mysqli_query($dbcon,$queryretrieve) or die(mysqli_error());
				 $c=mysqli_num_rows($resret);
				if($c>0){
					?>
					<script type="text/javascript">
					alert(" this email is already used, please enter new one. ");
					window.location.replace("newRegister.php");
					</script>
					<?php
				}
				else{
					$query="insert into renter values ('".$username."','".$password."','".$email."','".$dob."','".$question."','".$answer."');";
				$result=mysqli_query($dbcon,$query)or die(mysqli_error());
				?>
				<script type="text/javascript">
					alert("Welcome <?php echo $username ?> as Renter, you can Browse a Car ");
					window.location.replace("RenterSuccess.php");
				</script>
				<?php
					
				}
			}
			 
		}
	
	 if($type=="Owner"){
		$queryret="select * from owner where username='".$username."';";
		$res=mysqli_query($dbcon,$queryret) or die(mysqli_error());
		$count=mysqli_num_rows($res);
				if($count>0){
				?>
				<script type="text/javascript">
				alert(" this username is already used, please choose new one. ");
				window.location.replace("newRegister.php");
				</script>
				<?php
			}
			else {
				
				 $queryretrieve="select * from renter where email='".$email."';";
				 $resret=mysqli_query($dbcon,$queryretrieve) or die(mysqli_error());
				 $c=mysqli_num_rows($resret);
				if($c>0){
					?>
					<script type="text/javascript">
					alert(" this email is already used, please enter new one. ");
					window.location.replace("newRegister.php");
					</script>
					<?php
				}
				else{
					$query="insert into owner values ('".$username."','".$password."','".$email."','".$dob."','".$question."','".$answer."');";
				$result=mysqli_query($dbcon,$query)or die(mysqli_error());
				?>
				<script type="text/javascript">
					alert("Welcome <?php echo $username ?> as Owner, you can Post your Car ");
					window.location.replace("RenterSuccess.php");
				</script>
				<?php
					
				}
			}
			 
		}
?>
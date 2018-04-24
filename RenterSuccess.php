<?php session_start();
	define('db_user','root');
	define('db_pswd','');
	define('db_host','localhost');
	define('db_name','hirecarwebsite');
	$dbcon=mysqli_connect(db_host,db_user,db_pswd,db_name);
	if(!$dbcon){
		die('error connecting to database.');
	}
?>
<html>
	<head>
		<style>
		 
		 	.menubar{
				width:100%;
				height:40px;
				background:rgba(0,0,0,.5);
			}
			h1{
				margin:auto 40%;
				color:white;
			}
			</style>
			<script type="text/javascript">
				 
				
			</script>
	</head>
	<body>
		<!img class="bodyImage"src="car1.jpg"/>
			<div class="menubar">
				<h1> Welcome <?php echo $_SESSION['username'];?></h1>
 
			</div>
			<div class="owner">
				
			</div>
			 <p id="span"></p>
			 <div id="mainContainer">
				<div id="filterContainer">
					
				</div>
				<div id="displaySearch">
					
				</div>
			</div>
			 
	</body>
</html>
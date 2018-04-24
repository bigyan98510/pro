<!DOCTYPE html>
<?php session_start(); ?>
<html>
	<head>
		<style>
			body{
				background-color:#ddd;
				}
			.mainContainer{
				width:35%;
				height:650px;
				margin:200px auto;
				border:2px solid #fff;
				box-shadow:0 0 5px rgba(0,0,0,1);
				border-radius:0px;
				background:rgba(255,255,255,.9);
			}
			.mainContainer .content{
				margin:50px 50px;
			}
			input[type="text"]{
				border-bottom: 3px solid #262626;
				border-top:0px;
				border-left:0px;
				border-right:0px;
				outline:none;
				width:100%;
				font-size:20px;
			}
			h3{
				font-size:30px;
			}
			#signin{
				font-size:25px;
				font-weight:bold;
			}
 
			#password{
				font-size:20px;
				font-weight:bold;
			}
			a{
				text-decoration:none;
				color:blue;
			}
			#forget{
				color:blue;
				text-decoration:none;
				font-size:20px;
			}
			input[type="submit"]{
				 
				width:20%;
				font-size:25px;
				margin-left:80%;
				background-color:#154360;
				border:2px solid #154360;
				color:white;
				padding:5px 10px;
			}
			</style>
	</head>
	<body>
		<!img class="bodyImage"src="car.jpg"/>
		<div class="mainContainer">
			<div class="content">
			
			<h3> Hire Car : of your choice</h3><br>
			<p id="signin">  Hi,  <?php echo $_SESSION['username'];?> </p>
	 <br>
					<form action="AdminProcess.php" method="POST">
						<p id="password"> PASSWORD : </p><br>
						<input type="text" name="password" placeholder="Password"/><br><br><br>
						<a id="forget" href=""> forget password</a><br><br><br><br><br><br>
						<input type="submit" name="" value="Login"/>
					</form>
				</div>
		</div>
	</body>
</html>
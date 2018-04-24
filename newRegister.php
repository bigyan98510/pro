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
			.bodyImage{
				width:100%;
				background-color:#ddd;
				background:url('car1.jpg');
				background-size:cover;
				overflow:hidden;
				}
		 	.menubar{
				width:100%;
				height:40px;
				background:rgba(0,0,0,.5);
			}
			.homeimage{
				width:30px;
				height:30px;
				padding:5px 50px;
			}
			ul{
				list-style-type:none;
				color:#fff;
			}
			ul li{
				float:left;
				
			}
			.menulist{
				float:left;
				width:30%;
				margin:-1.5% 80%;
				color:#fff;
				display:flex;
				font-weight:bold;
			}
			.list{
				margin:0 5%;
			}
				.space{
					height:200px;
				}
			.container{
				width:50%;
				hight:auto;
				border:2px solid #fff;
				box-shadow:0 0 5px rgba(0,0,0,1);
				border-radius:0px;
				background:rgba(255,255,255,.9);
				margin:auto 25%;
			}
			h1{
				margin:2% 30%;
			}
			img{
				margin:-5% 7%;
			}
			input[type="text"], input[type="password"], select, input[type="submit"]{
				border-bottom: 3px solid lightblue;
				border-top:0px;
				border-left:0px;
				border-right:0px;
				outline:none;
				width:95%;
				font-size:20px;
			}
			form{
				margin:10% 20%;
			}
			input[type="submit"]{
				padding:3%;
				background-color:lightblue;
				color:;
			}
			</style>
			<script type="text/javascript">
				 
				
			</script>
	</head>
	<body>
		<!img class="bodyImage"src="car1.jpg"/>
			<div class="menubar">
				<ul>
					<li> <a href="index.php"><img class="homeimage" src="home.png"/></a></li>	
				</ul>
				<ul class="menulist">
					<li class="list"><a href="login.php">Login</a></li>
					<li class="list"><a href="newRegister.php">Register</a></li>
				</ul>
			</div>
			<div class="space">
			</div>
			<div class="container">
				<h1>Welcome To Team</h1>
				<img src="separator.png"/>
				<form action="RegisterProcess.php" method="POST">
					USERNAME :<br/> <br><input name="uname"  type="text" placeholder="eg. abc"/><br/><br>
					PASSWORD :<br/><br> <input name="password" type="password" placeholder="**********"/><br/><br>
					E-MAIL :<br/> <br><input name="email"  type="text" placeholder="abc@email.com"/><br/><br>
					DATE OF BIRTH<br><br><input name="dob" type="text" placeholder="dd/mm/yyyy"/><br/><br/>
					CHOOSE A SECRET QUESTION :<br><br><select name="question" >
				<option selected> </option>
				<option> What is your birth place</option>
				<option> What is your favourite car </option>
				<option> Best childhood memory </option>
				</select><br><br>
				YOUR ANSWER :<br><br><input name="answer"  type="text"/><br><br>
				REGISTER AS CAR :<br><br><select name="type" >
					<option selected></option>
					<option value="Owner">Owner</option>
					<option value="Renter">Renter</option>
				</select><br><br><br><br><br>
				<input type="submit" value="Submit"/>
				</form>
			</div>
		 
			 
	</body>
</html>
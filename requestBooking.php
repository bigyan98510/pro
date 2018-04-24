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
			#span{
				height:300px;
			}
		 
			#filterContainer{
				width:30%;
				height:auto;
				float:left;
			}
			#displaySearch{
				width:70%;
				height:auto;
				float:right;
			}
			.owner{
				width:100%;
				height:auto;
			}
			</style>
			<script type="text/javascript">
				 
				
			</script>
	</head>
	<body>
		<!img class="bodyImage"src="car1.jpg"/>
			<div class="menubar">
				<ul>
					<li> <img class="homeimage" src="home.png"/></li>	
				</ul>
 
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
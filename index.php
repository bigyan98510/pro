<?php
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
			body{
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
				margin:-2% 80%;
				color:#fff;
				display:flex;
			}
			.list{
				margin:0 5%;
			}
			.searchbar{
				width:80%;
				height:150px;
				background:rgba(0,0,0,.6);
				margin-top:-50px;
				margin-left:200px;
			}
			 
			input[type="submit"]{
				width:10%;
				margin:35px -60px;
				padding:20px 20px;
				border: 1px solid #ccc;
				border-radius:4px;
				font-size:25px;
				font-weight:bold;
				background-color:#2980B9;
				color:white;
			}
			input[type="submit"]:hover{
				background-color:#3498DB;
			}
			select{
			 
				padding: 20px 30px;
			 	border: 1px solid #ccc;
				border-radius: 4px;
				font-size:17px;
			}
		 
			.input1{
				width: 15%;
			 margin: 0px 200px;
			 border-right:none;
				outline:none;
			}
			.input2{
				width: 15%;
				margin:0px -208px;
				border-left:none;
				border-right:none;
				outline:none;
			}
			.input3{
				width:20%;
				margin:auto 200px;
				border-left:none;
				outline:none;
			}
			h1{
					font-size:75px;
					color:white;
					margin:4% 35%;
					opacity:0.6;
				}
				h2{
					font-size:60px;
					color:white;
					margin:-3% 20%;
					opacity:0.5;
				}
		 
				.space{
					height:200px;
				}
			</style>
			<script type="text/javascript">
				function populate(){
					var s1 = document.getElementById("slct1").value;
					if(s1=="toyota"){
					var inoption="<option value='0'>select model</option>";
					inoption +="<option disabled>------------------------------</option>";
					inoption +="<option >All Models</option>";
					var arr=["corolla","station wagon","echo","hilux"];
					
					 
					}
					else if(s1=="ford"){
					var inoption="<option value='0'>select</option>";
					inoption +="<option disabled>------------------------------</option>";
					var arr=["territory","ghia","flacon"];
						
					}
					else{
						var inoption="";
						var arr=[];
					}
					for(var i=0; i<arr.length; i++){
						inoption += "<option value="+arr[i]+">"+arr[i]+"</option>";
						
					}
					document.getElementById('slct2').innerHTML=inoption;
					
					//}
				}
				
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
			<h1>HIRE CAR</h1>
			<h2>Login to Book and Drive Instantly</h2>
		 <div class="space">
			</div>
			<div class="searchbar">
				<div class="searchvalues">
					<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
						<select class="input1" id="slct1" name="slct1" onChange="populate()" >
							<option selected>Select Make</option>
							<option disabled>----------------------------------------</option> 
							<option value="All makes">All makes</option>
							<option value="toyota">Toyota</option>
							<option value="bmw">BMW</option>
							<option value="ford">Ford</option>
							<option>Holden</option>
							<option>Honda</option>
							<option>Hyundai</option>
							<option>Mazda</option>
							<option>Mitsubishi</option>
						</select>
						<select class="input2" id="slct2" name="slct2">
							
						</select>
						
					
						<select class="input3" name="slct3">
							<option selected>Select Region</option>
							<option disabled>----------------------------------------</option> 
							<option>New South Wales</option>
							<option>Australian Capital Territory</option>
							<option>Victoria</option>
							<option>Queensland</option>
							<option>South Australia</option>
							<option>Western Australia</option>
							<option>Tasmania</option>
							<option>Northern Territory</option>
						</select>
						<input type="submit" name="search"value="Search "/>
						 
					</form>
					<?php
						if(isset($_POST['search'])){
							//$query="select * from table where make='".$_POST['slct1']."' model='".$_POST['slct2']."' state='".$_POST['slct3']."'";
							echo"<p style='color:white;'> ".$_POST['slct1']."</p>";
							 
							echo"<p style='color:white;margin-top:-20px;'> ".$_POST['slct2']."</p>";
							 
							echo"<p style='color:white;margin-top:-10px;'> ".$_POST['slct3']."</p>";
						 
						}
					?>
				</div>
			</div>
	</body>
</html>
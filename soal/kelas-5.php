<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("elearning");
?>

<html>
<head>
	<title>Latihan Soal | Kelas 5</title>
</head>
<body>
	<link href="style.css" type="text/css" rel="stylesheet" >
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Patrick+Hand">
	<link rel="stylesheet" href="tabs.css" type="text/css" media="screen, projection"/>
	<div id="wrapper">
		<div id="header"><img src="../headerbaru.png"  width ="1240" alt="" title=""> </img></div>
		<div id="navbar">

			<nav>
				<ul><h1>
					<li><a href="../index.html">HOME</a></li>
					<li><a href="#">MATERI</a>
						<ul>
							<li><a href="../materi/kelas4.php">Kelas 4</a></li>
							<li><a href="../materi/kelas5.php">Kelas 5</a></li>
							<li><a href="../materi/kelas6.php">Kelas 6</a></li>
						</ul>
					</li>
					<li><a href="#">SOAL-SOAL</a>
						<ul>
							<li><a href="kelas-4.php">Kelas 4</a></li>
							<li><a href="kelas-5.php">Kelas 5</a></li>
							<li><a href="kelas-6.php">Kelas 6</a></li>
						</ul>
					</li>
					<li><a href="../funfact/foodfact.php">FUN FACTS</a></li>
					<li><a href="../siswa/profilesiswa.php">PROFILE</a></li>
					<li><a href="../logiin.php" <?php if($_SESSION['login'] == TRUE ){echo 'style="display:none;"'; } ?>> SIGN UP </a></li>
					<li><a href="#" <?php if($_SESSION['login'] == TRUE ){echo 'style="display:none;"'; } ?>> LOG IN </a></li>
					<li><a href="../logout.php" <?php if($_SESSION['login'] == FALSE ){echo 'style="display:none;"'; } ?>> LOG OUT </a></li>
					<li><a> </a></li>
				</ul>
			</nav>
		</div>
		<!--/////////////////////////////////////////////////////////SIDEBAR///////////////////////////////-->

		<div id="sidebar">
	
		<button class="accordion">Kelas 4</button>
		<div class="panel">
		<p><a href="kelas-4.php" class="panel-accor"><center>Bentuk Benda</center></a> <br></p>
		</div>

		<button class="accordion">Kelas 5</button>
		<div class="panel">
		<p><a href="kelas-5.php" class="panel-accor"><center>Pencernaan</center> </a> <br></p>
		</div>

		<button class="accordion">Kelas 6</button>
		<div class="panel">
		<p><a href="kelas-6.php" class="panel-accor"><center>Ekosistem</center> </a> <br></p>
		</div>
		
		<script>
		//untuk accordion 
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
		    acc[i].onclick = function(){
		        this.classList.toggle("active");
		        this.nextElementSibling.classList.toggle("show");
		  }
		}
		</script>

	</div>
	<!--////////////////////////////////////////////////CONTENT///////////////////-->
		<div id="main"> 
			<a style="font-family: Patrick Hand; font-size: 36pt; color:#30BFC1; "> Latihan Kelas 5 </a>
			<p style="font-family: Patrick Hand; font-size: 24pt;"> Sistem Pencernaan Manusia </p>

			<div id="page-wrap">
				<form method="POST" action="#">
					<div id="tabs">
						<?php include ("soal-kelas-5.php");?>
						</div>
					</form>

				</div>
			</div>
		</div>
	</body>
	</html>
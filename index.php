<?php
session_start();
if(!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Boss Coffee</title>
	<script type="text/javascript" src="jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="njajal.css">
	<link rel="icon" href="img/kopi.png">
	<style>
		#ex3 {
			width: auto;
			box-shadow: 0px 0px 0px 0px;
			border-radius: 3px; color: #fff;
			background: rgba(23, 20, 20, 0.52);
			padding: 5px 5px 5px 10px;
			font-family: comic sans ms;
			text-align: center;
		}
	</style>
</head>
<body class="text-center">
	<slider>
		<slide><p></p></slide>
		<slide><p></p></slide>
		<slide><p></p></slide>
		<slide><p></p></slide>
	</slider>
	<div>
		<nav class="navbar navbar-expand navbar-dark-bg- sticky-top" style="background-color: #000000">
			<div>
				<a class="navbar-brand" href="index.php">
					<img src="img/boss.png" width="35" height="35">				
					<b style="color: #fff">BOSS COFFEE</b>
				</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<a href="logout.php">
						<button type="button" class="btn btn-danger">Log Out</button>
					</a>
				</ul>
			</div>
		</nav>
	</div>
	
	<button>
		<a href="penjualan.php">Laporan Penjualan</a>
	</button>
	<button>
		<a href="form.php">Form Penjualan</a>
	</button>
	<button>
		<a href="menu/create.php">Form Menu</a>
	</button> 
	<div>
		<a href="logout.php">
			<button>Log Out</button>
		</a>
	</div>
	<div class="row">
	    <div class="col">
	    	<a href="penjualan.php">
	    		<img src="img/penjualan.png" class="rounded" width="200">
	    	</a>
	    </div>
	    <div class="col">
	    	<a href="#">
	    		<img src="img/barang.png" class="rounded" width="200">
	    	</a>
	    </div>
	    <div class="col">
			 <a href="menu/index.php">
	    		<img src="img/menu.png" class="rounded" width="200">
	    	</a>   
	    </div>
  	</div>

</body>
</html>
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Partie nulle</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/p4.css" title="Normal" />
</head>
<body>
	<img src="../img/logo.png" id="logo" class="logo">
	<div class="board">
		<div class="table">
		<?php
		require_once("../controleur/afficherBoard.php");
		?>
		<div>
	</div>
	<div class="menu">
		<a href="../vue/ff.php"><img src="../img/4.PNG" id="b"></a>
		<a href="../controleur/fc.php"><img src="../img/3.PNG" id="b"></a>
		<a href="../vue/instruction.php"><img src="../img/2.PNG" id="b"></a>
		<a href="../vue/inscription.html"><img src="../img/1.PNG" id="b"></a>
	</div>

	<div class="menu1">
		<h2> Partie nulle</h2>
			<h3> <a href="../controleur/recommencer.php"> Recommencer </a> </h3>
			<br>
			<br>
	</div>

</body>
</html>
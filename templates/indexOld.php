<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<link href="css/styly.css" rel="stylesheet" />
	<title>SAINT PAUL DU TERRAY</title>
</head>

<body class="body">

<main class="main">

	<header-null class="header-null">
		<header class="header">
			<h1>SAINT PAUL DU TERRAY</a></h1>
			<menu-null class="menu-null">
				<div class="menu">
					<a href="#" class="menu_link">Index</a>
					<a href="#" class="menu_link">Manifestation</a>
					<a href="#" class="menu_link">Facturation</a>
					<a href="#" class="menu_link">Contact</a>
				</div>
			</menu-null>
		</header>
	</header-null>

	<noscreen/>

		<left class="left">
			
		</left>

	<noscreen/>

		<right class="right">
			<h2>Liste des séjours prévus </h2>
			<fieldset>
			<?php
			$bdd = new PDO('mysql:host=localhost;dbname=bdstpaul;charset=utf8', 'root');
			$SEJOURs = $bdd->query('select * from SEJOUR order by sejno');
			foreach ($SEJOURs as $SEJOUR): ?>
				<SEJOUR>
					<h2><p><?php echo $SEJOUR['SEJINTITULE'] ?></p></h2>
					<?php echo $SEJOUR['SEJMONTANTMBI'].'€' ?><BR/>
					<?php echo 'A partir du '.$SEJOUR['SEJDTEDEB'] ?>
					<?php echo $SEJOUR['SEJDUREE'].' nuits' ?>
				</SEJOUR>
			<?php endforeach ?>
			</fieldset>
		</right>
</main>

<footer class="footer">
		Copyright &copy; 2019 Saint Paul du Terray
</footer>


</body>

</html> 

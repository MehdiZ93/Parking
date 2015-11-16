<?php
	$html = "<html>
		<meta charset=\"utf-8\" />
		<link rel=\"stylesheet\" href=\"style.css\"/>";
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=Parking;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
	$html .= "
		<div id=\"nav\">
			<div id=\"nav2\">
				Application Facture
			</div>
			<div id=\"nav3\">
			<ul>
				 <li><a href=\"accueil.php\">Acceuil</a></li>
				 <li><a href=\"#\">Item 2</a></li>
				 <li><a href=\"#\">Item plus long</a></li>
			</ul>
			</div>
		</div>
	</html>";
	echo $html;
?>
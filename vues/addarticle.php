<?php 
	include_once "../inc/classArticle.php";;
	include_once "../inc/classArticleQuery.php";
	session_start();
	include_once "../inc/pdo.php";
	include_once "../inc/navviewarticle.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<!-- Importation BootStrap 3 -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		
		
		<!-- Importation de jQuery -->
		<script src="../js/jquery-3.2.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</head>

<?php 
	

	echo "<div class='container-fluid'>";
		echo "<div class='row'>";
			echo "<div class='col-md-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12'>";

				echo "<div class='mx-auto'>";
					echo "<h1>"."Ajouter un article"."</h1>";
					echo "<input type='text' class='addtitre' placeholder='Titre' name='titre'>";
					echo "<textarea class='addcontenu' placeholder='Description' name='contenu'></textarea>";
					echo "<button class='btn btn-success enregistrer'>Enregistrer</button>";
				echo "</div>";

			echo "</div>";
		echo "</div>";
	echo "</div>";

?>
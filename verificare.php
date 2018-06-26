<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?><!--/header-->
	
	<section id="form"><!--form-->
		<?php
 				include("conn.php");

 				function testare($data) {
 					$data = trim($data); 
 					$data = stripslashes($data); 
 					$data = htmlspecialchars($data); 
 					return $data; 
 				}

 				class Admin {
 					public $id_admin;
 					public $nume;
 					public $parola;
 				}

 				$n = testare($_REQUEST["numeletau"]); 
 				$p = testare($_REQUEST["parolata"]);

 				if(isset($cnx)) {

 					$cda= "SELECT * from admin";
 					$stmt = $cnx->prepare($cda);
 					$stmt->execute();
 					$gasit = false;

 					while ($utilizator = $stmt->fetchObject('Admin'))
 					{
 						if($utilizator->nume == $n && $utilizator->parola == $p) 
 						{
 							echo '<h1 class="italic centrat">Sunteti autorizat</h1><br />';
 							echo '<form class="centrat" method="post" action="adaugare.php">';
 							echo '<input type="submit" name="submit1" value="Adaugare">';
 							echo '</form></center>';
 							$gasit = true;
 							break;
 						}
 					}
 					if(!$gasit) 
 					{
 						echo '<h1 class="italic centrat">Nu aveti acces in baza de date</h1><br/>';
 						echo '<form class="centrat"><input type="button" value="Mai incearca" onClick="location.href=\'login.php\'"></form></center>';
 					}
 					$cnx = null;
 				}

 				?>
	</section><!--/form-->
	
	
	<?php include "footer.php"; ?><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
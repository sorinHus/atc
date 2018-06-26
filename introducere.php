<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?><!--/header-->
	
	<section id="form"><!--form-->
		<?php
   function testare($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   }

   $nume=testare($_REQUEST["nume"]);
   $email=testare($_REQUEST["email"]);
   $parola=testare($_REQUEST["parola"]);

   include("conn.php");
   if(isset($cnx)) {

      $cda = "INSERT INTO admin (id_admin, nume, email, parola)VALUES ('', :nume, :email, :parola)";
      $stmt = $cnx->prepare($cda); 
      $stmt->bindParam(':nume', $nume, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':parola', $parola, PDO::PARAM_STR);
      $stmt->execute(); 

      echo "<p class=\"inserare centrat\">"; 
      echo "<h3 class=\"italic centrat\">Cont nou creat";

      echo "<br /><br /><br /><br />";
      echo "<a href=\"login.php\">Intoarcere la pagina de autentificare </a>";
      
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
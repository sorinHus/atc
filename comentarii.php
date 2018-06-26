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
   $mesaj=testare($_REQUEST["mesaj"]);

   include("conn.php");
   if(isset($cnx)) {

      $cda = "INSERT INTO comentarii (nr, nume, email, mesaj)VALUES ('', :nume, :email, :mesaj)";
      $stmt = $cnx->prepare($cda); 
      $stmt->bindParam(':nume', $nume, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':mesaj', $mesaj, PDO::PARAM_STR);
      $stmt->execute(); 

      echo "<p class=\"inserare centrat\">"; 
      echo "<h3 class=\"italic centrat\">Mesajul dumneavoastra s-a adaugat in cartea noastra de oaspeti<br /><br /> Va multumim! </h3><br />"; 


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
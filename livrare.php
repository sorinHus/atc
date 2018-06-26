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



   include("conn.php");
   if(isset($cnx)) {

      $cda = "INSERT INTO comentarii (nr, nume_p, parola, companie, email, titlu, prenume, prenume_2, nume, adresa_1, adresa_2, cod_postal, judet, localitate, telefon, telefon_m, observatii)VALUES ('', :nume_p, :parola, :companie, :email, :titlu, :prenume, :prenume_2, :nume, :adresa_1, :adresa_2, :cod_postal, :judet, :localitate, :telefon, :telefon_m, :observatii)";
      $stmt = $cnx->prepare($cda); 
      $stmt->bindParam(':nume_p', $nume_p, PDO::PARAM_STR);
      $stmt->bindParam(':parola', $parola, PDO::PARAM_STR);
      $stmt->bindParam(':companie', $companie, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':titlu', $titlu, PDO::PARAM_STR);
      $stmt->bindParam(':prenume', $prenume, PDO::PARAM_STR);
      $stmt->bindParam(':prenume_2', $prenume_2, PDO::PARAM_STR);
      $stmt->bindParam(':nume', $nume, PDO::PARAM_STR);
      $stmt->bindParam(':adresa_1', $adresa_1, PDO::PARAM_STR);
      $stmt->bindParam(':adresa_2', $adresa_2, PDO::PARAM_STR);
      $stmt->bindParam(':cod_postal', $cod_postal, PDO::PARAM_STR);
      $stmt->bindParam(':judet', $judet, PDO::PARAM_STR);
      $stmt->bindParam(':localitate', $localitate, PDO::PARAM_STR);
      $stmt->bindParam(':telefon', $telefon, PDO::PARAM_STR);
      $stmt->bindParam(':telefon_m', $telefon_m, PDO::PARAM_STR);
      $stmt->bindParam(':observatii', $observatii, PDO::PARAM_STR);
      $stmt->execute(); 

      echo "<p class=\"inserare centrat\">"; 
      echo "<h3 class=\"italic centrat\">Comanda a fost inregistrata<br /><br /> Va multumim! </h3><br />"; 


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
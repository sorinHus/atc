<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?><!--/header-->
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Intra in cont</h2>
						<form action="verificare.php">
							<input type="text" name="numeletau" placeholder="Username" />
							<input type="password" name="parolata" placeholder="Parola" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">SAU</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Inregistrare Utilizator Nou</h2>
						<form action="introducere.php">
							<input type="text" name="nume" placeholder="Username"/>
							<input type="email" name="email" placeholder="Email"/>
							<input type="password" name="parola" placeholder="Parola"/>
							<button type="submit" class="btn btn-default">Inregistrare</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
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
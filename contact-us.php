<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<div id="contact-page" class="container">
	<div class="bg">
		<div class="row">    		
			<div class="col-sm-12">    			   			
				<h2 class="title text-center">Contacteaza <strong>- Ne</strong></h2>    			    				    				
				<div id="gmap" class="contact-map">
				</div>
			</div>			 		
		</div>    	
		<div class="row">  	
			<div class="col-sm-8">
				<div class="contact-form">
					<h2 class="title text-center">Intra in legatura cu noi</h2>
					<div class="status alert alert-success" style="display: none"></div>
					<form action="contact.php" method="post">
<p><b>Your Name:</b> <input type="text" name="yourname" /><br />
<b>Subject:</b> <input type="text" name="subject" /><br />
<b>E-mail:</b> <input type="text" name="email" /><br />
Website: <input type="text" name="website"></p>

<p>Do you like this website?
<input type="radio" name="likeit" value="Yes" checked="checked" /> Yes
<input type="radio" name="likeit" value="No" /> No
<input type="radio" name="likeit" value="Not sure" /> Not sure</p>

<p>How did you find us?
<select name="how">
<option value=""> -- Please select -- </option>
<option>Google</option>
<option>Yahoo</option>
<option>Link from a website</option>
<option>Word of mouth</option>
<option>Other</option>
</select>

<p><b>Your comments:</b><br />
<textarea name="comments" rows="10" cols="40"></textarea></p>

<p><input type="submit" value="Send it!"></p>

<p> </p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="contact-info">
					<h2 class="title text-center">Contact Info</h2>
					<address>
						<p>Asociatia Clusterul Agro-Food-Ind-Napoca</p>
						<p>Str. Criseni, FN, 407039</p>
						<p>Dezmir, CJ, Romania</p>
						<p>Mobil: +40 744 870 099</p>
						<p>Fax: +40 364 730 049</p>
						<p>Email: sorin.hus@agrocluster.ro</p>
					</address>
					<div class="social-networks">
						<h2 class="title text-center">Social Networking</h2>
						<ul>
							<li>
								<a href="https://www.facebook.com/agrotransilvaniacluster/"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-youtube"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>    			
		</div>  
	</div>	
</div><!--/#contact-page-->

<?php include "footer.php"; ?><!--/Footer-->



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/gmaps.js"></script>
<script src="js/contact.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>
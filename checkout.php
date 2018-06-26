<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Acasa</a></li>
				  <li class="active">Trimite comanda</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Pasul 1</h2>
			</div>
			<div class="checkout-options">
				<h3>Utilizator nou</h3>
				<p>Optiuni</p>
				<ul class="nav">
					<li>
						<label><input type="checkbox"> Inregistraza cont nou</label>
					</li>
					<li>
						<label><input type="checkbox"> Comanda fara inregistrare</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i> Anuleaza</a>
					</li>
				</ul>
			</div><!--/checkout-options-->

			<div class="register-req">
				<p>Te rugam sa folosesti Autentificare si Comanda pentru a avea acces la istoria comenzilor, sau foloseste Comanda fara inregistrare.</p>
			</div><!--/register-req-->

			
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Informatii client</p>
							<form>
								<input type="text" placeholder="Nume si Prenume">
								<input type="text" placeholder="Username">
								<input type="password" placeholder="Parola">
								<input type="password" placeholder="Confirma parola">
							</form>
							<a class="btn btn-primary" href="">Estimare cost</a>
							<a class="btn btn-primary" href="">Continua</a>
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Date facturare</p>
							<div class="form-one">
								<form>
									<input type="text" placeholder="Nume/Companie">
									<input type="text" placeholder="Email*">
									<select>
										<option>-- Titlu --</option>
										<option>Dna.</option>
										<option>Dl.</option>
									</select>
									<input type="text" placeholder="Prenume *">
									<input type="text" placeholder="Prenume 2">
									<input type="text" placeholder="Nume *">
									<input type="text" placeholder="Adresa 1 *">
									<input type="text" placeholder="Adresa 2">
									</form>
							</div>
							<div class="form-two">
								<form>
									<input type="text" placeholder="Cod Postal *">
									<select>
										<option>-- Judet --</option>
										<option>Cluj</option>
									</select>
									<select>
										<option>-- Localitate --</option>
										<option>Cluj-Napoca</option>
										<option>Dej</option>
										<option>Turda</option>
										<option>Campia Turzii</option>
										<option>Floresti</option>
										<option>Baciu</option>
										<option>Apahida</option>
										<option>Altele</option>
									</select>
									<input type="text" placeholder="Telefon">
									<input type="text" placeholder="Telefon mobil *">
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Observatii</p>
							<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
							<label><input type="checkbox"> Livreaza la adresa de facturare</label>
						</div>	
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Recapitulare & Plata</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Produs</td>
							<td class="description"></td>
							<td class="price">Pret</td>
							<td class="quantity">Cantitate</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one1.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Nectar mar cu pere | Arovit</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>15 Lei</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_down" href=""> - </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_up" href=""> + </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">15 Lei</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/two1.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Piept de porc | Moldovan</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>15 Lei</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">15 Lei</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/three.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Issa Pinot Noir Rose | Crama La Salina</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>15 Lei</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">15 Lei</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>15 Lei</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>2 Lei</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>47 Lei</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Transfer bancar</label>
					</span>
					<span>
						<label><input type="checkbox"> Ramburs</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->

	

	<?php include "footer.php"; ?><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
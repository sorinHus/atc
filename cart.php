<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Acasa</a></li>
				  <li class="active">Cosul meu</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Articol</td>
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
								<p class="cart_total_price">15 lei</p>
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
								<p>15 lei</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_down" href=""> - </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_up" href=""> + </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">15 lei</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/three1.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Issa Pinot Noir Rose | Crama La Salina</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>15 lei</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_down" href=""> - </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_up" href=""> + </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">15 lei</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Ce vrei sa faci mai departe?</h3>
				<p>Alege daca ai un cod de reducere, puncte de fidelitate, sau daca vrei sa obtii o estimare a costului de transport.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Cod de reducere</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Voucher cadou</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimeaza transport & taxe</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Judet:</label>
								<select>
									<option>Selecteaza</option>
									<option>Cluj</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Localitate:</label>
								<select>
								    <option>Selecteaza</option>
									<option>Cluj-Napoca</option>
									<option>Dej</option>
									<option>Turda</option>
									<option>Campia Turzii</option>
									<option>Floresti</option>
									<option>Baciu</option>
									<option>Apahida</option>
									<option>Altele</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Cod postal:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Obtine pret</a>
						<a class="btn btn-default check_out" href="">Continua</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Sub Total <span>45 lei</span></li>
							<li>Ecotaxa <span>2 lei</span></li>
							<li>Cost livrare <span>Gratis</span></li>
							<li>Total <span>47 lei</span></li>
						</ul>
							<a class="btn btn-default update" href="">Actualizeaza</a>
							<a class="btn btn-default check_out" href="">Trimite comanda</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	<?php include "footer.php"; ?><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
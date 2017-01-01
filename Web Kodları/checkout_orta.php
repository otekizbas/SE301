		<form action="satinal.php" method="post">
					<div id ="checkout_shopingbox">
						<?php
							$username= $_GET['username'];
							include"shoppingcartlistele.php";
						?>
					</div>
					
					<h2>Payment</h2>
					<div id= "inform">
						First Name
						<input type="text" name="firstname" value="" placeholder="First Name" id="register_firstname" class="form-control">
					</div>
					<div id= "inform">
						Last Name
						<input type="text" name="lastname" value="" placeholder="Last Name" id="register_lastname" class="form-control">
					</div>		
					<h3>Address</h3>
						<textarea name="order_adres" rows="10" id="input_enquiry" class="form-control"></textarea>
					<div id= "inform">
						Order Status
						<input type="text" name="orderstatus" value="" disabled placeholder="Order Status" id="register_orderstatus" class="form-control">
					</div>			
					
					<div id ="siparis toplamı">
						<table>
							<tr>
								<td>
									<h4>Kargo Bedeli</h4>
								</td>
								<td>
									<h4>5 TL</h4>
								</td>
							</tr>
						
							<tr>
								<td>
						<?php
							$hesaplason = $hesapla + 0;
						?>
									<h4>Sipariş Toplamı ( TL )</h4>
								</td>
								<td>
								<?php
									echo'<h4>'.$hesaplason.'</h4>';
								?>
								</td>
							</tr>
						</table>
						
						
						
					</div>
					
					<input type="submit" value="" class="btn btn-primary" id="submit_checkout">
		</form>
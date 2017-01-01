

	<div id ="new_customer">
					<h2>New Customer</h2>
					<h4>Register Account</h4>
					<p>
						By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.
					</p>
					
					<a href="register.php"><img src="img/devam.png" style="width:76px; height:34px"/></a>
				</div>
				<div id ="returning_customer">
					<h2>Returning Customer</h2>
					<h4>I am a returning customer</h4>
					<h4>E-Mail Address</h4>
					<form action="login.php" method="POST">
					<input type="text" name="email" value="" placeholder="E-Mail Address" id="input_email2" class="form-control">
					<h4>Password</h4>
					<input type="password" name="userpassword" value="" placeholder="Password" id="input_password" class="form-control">
					
					<a href="forgatpassword.php"><h4>Forgotten Password</h4></a>
					
					<input type="submit" value="" class="btn btn-primary" id="userLogin">
					</form>
				</div>
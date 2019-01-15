{include file='common/header.tpl'}

<section class="register">


  <form class="rform" action="{$BASE_URL}actions/users/registeruser.php" method="post">
			<label class="lasign" for="username">Username</label>
			<input required class="insign" type="text" name="username" id="user" placeholder="Username" value=" "/><br>
			<label class="lasign" for="email">Email</label>
			<input required class="insign" type="email" name="email" id="email" placeholder="Email" value=""/><br>
			<label class="lasign" for="password">Password</label>
			<input required class="insign" type="password" id="password" minlength="8" maxlength="16" name="pass" placeholder="Password"/><br>
			<label class="lasign" for="repeatpassword">Repeat password</label>
			<input required class="insign" type="password" id="repeatpassword" minlength="8" maxlength="16" name="repeatpassword" placeholder="Confirm Password"/><br>
			<label class="lasign" for="name">Name</label>
			<input required class="insign" type="text" name="name" id="name" placeholder="Full Name" value=""/><br>
			<label class="lasign" for="age">Age</label>
			<input required class="insign" type="number" name="age" id="age" placeholder="Age" value="" /><br>
			<fieldset class="insign">
				<legend>Gender</legend>
				<input class="gender" type="radio" name="gender" id="male" value="Male"  />
				<label class="lasign" for="male">Male</label>
				<input required class="gender" type="radio" name="gender" id="female" value="Female" />
				<label class="lasign" for="female">Female</label>
			</fieldset><br>
			<label class="lasign" for="adress">Address</label>
			<input required class="insign" type="text" name="address" id="address" placeholder="Address" value=""/><br>
			<label class="lasign" for="country">Country</label>
			<input required class="insign" type="text" name="country" id="country" placeholder="Country" value=""/><br>
			<label class="lasign" for="city">City</label>
			<input required class="insign" type="text" name="city" id="city" placeholder="City" value=""/> <br>
			
			<button class="signbut" type="submit" name="sign">Sign up</button>
		</form>
	</section>

{include file='common/footer.tpl'}


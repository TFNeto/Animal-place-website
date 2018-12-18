{include file='common/header.tpl'}

<section id="registeruser">
  <h2>Register</h2>

  <form action="{$BASE_URL}actions/users/registeruser.php" method="post">
    <input type="text" name="username" placeholder="Username" value="">
    <input type="password" name="password" placeholder="Password" value="">
	<input type="password" name="repeatpassword" placeholder="Confirm Password" value="">
    <input type="text" name="name" placeholder="Name" value="">
	<input type="text" name="email" placeholder="Email" value="">
	<input type="number" name="age" placeholder="Age" value="">
	<fieldset class="insign">
		<legend>Gender</legend>
		<input class="gender" type="radio" name="gender" id="male" value="Male" />
		<label class="lasign" for="male">Male</label>
		<input required class="gender" type="radio" name="gender" id="female" value="Female"/>
		<label class="lasign" for="female">Female</label>
	</fieldset><br>
	<input type="text" name="address" placeholder="Address" value="">
	<input type="text" name="country" placeholder="Country" value="">
	<input type="text" name="city" placeholder="City" value="">
	<input type="submit" value="Register">
  </form>

</section>

{include file='common/footer.tpl'}


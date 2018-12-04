<?php
/* Smarty version 3.1.33, created on 2018-11-26 13:01:58
  from '/usr/users2/mieec2013/up201303019/public_html/aula2siem/templates/users/registeruser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfbeec680ab71_76604489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ecd04212d70986b6288aaad48589fa2cd24940a' => 
    array (
      0 => '/usr/users2/mieec2013/up201303019/public_html/aula2siem/templates/users/registeruser.tpl',
      1 => 1543237314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5bfbeec680ab71_76604489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section id="registeruser">
  <h2>Register</h2>

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/registeruser.php" method="post">
  	<label class="lasign" for="user">Username</label>
			<input required class="insign" type="text" name="user" id="user" placeholder="Username" value=""/><br>
			<label class="lasign" for="mail">Email</label>
			<input required class="insign" type="email" name="mail" id="mail" placeholder="Email" value=""/><br>
			<label class="lasign" for="password">Password</label>
			<input required class="insign" type="password" id="password" minlength="8" maxlength="16" name="pass" placeholder="Password"/><br>
			<label class="lasign" for="password_d">Repeat password</label>
			<input required class="insign" type="password" id="password_d" minlength="8" maxlength="16" name="passw" placeholder="Confirm Password"/><br>
			<label class="lasign" for="name">Name</label>
			<input required class="insign" type="text" name="name" id="name" placeholder="Full Name" value=""/><br>
			<label class="lasign" for="age">Age</label>
			<input required class="insign" type="number" name="age" id="age" placeholder="Age" value="" /><br>
			<fieldset class="insign">
				<legend>Gender</legend>
				<input class="gender" type="radio" name="gender" id="male" value="Male" />
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

<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

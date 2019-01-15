<?php
/* Smarty version 3.1.33, created on 2019-01-15 09:43:51
  from '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/users/registeruser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3dab57d1c0f5_22991121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15e60c6f55d4f128bf081d6efd4a09aa223e55dc' => 
    array (
      0 => '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/users/registeruser.tpl',
      1 => 1547514627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3dab57d1c0f5_22991121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="register">


  <form class="rform" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/registeruser.php" method="post">
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

<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

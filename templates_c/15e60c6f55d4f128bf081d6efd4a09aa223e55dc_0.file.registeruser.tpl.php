<?php
/* Smarty version 3.1.33, created on 2018-12-18 23:28:48
  from '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/users/registeruser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1982b0202990_69671494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15e60c6f55d4f128bf081d6efd4a09aa223e55dc' => 
    array (
      0 => '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/users/registeruser.tpl',
      1 => 1545175392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c1982b0202990_69671494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section id="registeruser">
  <h2>Register</h2>

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/registeruser.php" method="post">
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

<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

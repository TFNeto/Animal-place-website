<?php
/* Smarty version 3.1.33, created on 2019-01-15 13:29:22
  from '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/animals/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3de032bbbf38_79401987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50d8492638d6acf03efeebfa81ffde850da0a938' => 
    array (
      0 => '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/animals/home.tpl',
      1 => 1547558862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3de032bbbf38_79401987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	

    <div class="home">
	    <div class="signupbut">
		
			<p>Don´t have an account yet? Just sign up and choose your new friend!</p>
			<p>Click on the button below to sign up</p>
			<button type="button" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/registeruser.php'" name="signup">Sign Up</button>
	    </div>
	
	    <div class="signupbut">
		
			<p>Or just continue to our website and see the friends you can make</p>
			<p>Click on the button below to see the animals</p>
			<button type="button" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/animals/animals.php'" name="continuetoweb">Continue To Website</button>
		</div>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

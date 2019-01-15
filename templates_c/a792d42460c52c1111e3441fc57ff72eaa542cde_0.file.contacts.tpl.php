<?php
/* Smarty version 3.1.33, created on 2019-01-15 08:14:06
  from '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/animals/contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3d964ec46f36_04985053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a792d42460c52c1111e3441fc57ff72eaa542cde' => 
    array (
      0 => '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/animals/contacts.tpl',
      1 => 1547540012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3d964ec46f36_04985053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="contact">
		<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/contact.jpg" class="imgcont" alt="Dog">
		<p>Morada: R. Dr. Roberto Frias, 4200-465 Porto</p>
		<p>Contactos: 220 123 456 | 910 123 456</p>
		<ul>Horário
			<li>2ª - 6ª | 8:30h-19:30h</li>
			<li>Fim-de-semana | 10h-19h</li>
		</ul>


	</div>

<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

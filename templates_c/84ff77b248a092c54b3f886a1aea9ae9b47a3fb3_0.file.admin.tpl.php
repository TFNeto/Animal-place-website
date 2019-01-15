<?php
/* Smarty version 3.1.33, created on 2019-01-15 01:05:33
  from '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/users/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3d31dd03fcf5_26101370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84ff77b248a092c54b3f886a1aea9ae9b47a3fb3' => 
    array (
      0 => '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/users/admin.tpl',
      1 => 1547514301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3d31dd03fcf5_26101370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<article>
<button id = "adoptlist">Adoption List</button>
<button id = "adoptstatus">Adoption Status</button>

<div id="myadmin">
</div>

</article>

<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

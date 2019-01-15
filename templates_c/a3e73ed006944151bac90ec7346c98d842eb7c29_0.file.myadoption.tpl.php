<?php
/* Smarty version 3.1.33, created on 2019-01-15 13:48:45
  from '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/users/myadoption.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3de4bd56fc32_99343198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3e73ed006944151bac90ec7346c98d842eb7c29' => 
    array (
      0 => '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/users/myadoption.tpl',
      1 => 1547560084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3de4bd56fc32_99343198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<article class="choose">
<button id = "adoptlist">Adoption List</button>
<button id = "adoptstatus">Adoption Status</button>
</article>
<div id="myadoption">
</div>



<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

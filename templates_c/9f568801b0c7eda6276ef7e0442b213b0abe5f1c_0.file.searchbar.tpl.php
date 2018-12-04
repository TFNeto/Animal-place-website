<?php
/* Smarty version 3.1.33, created on 2018-12-04 14:25:41
  from '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/animals/searchbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c068e65d57390_59607165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f568801b0c7eda6276ef7e0442b213b0abe5f1c' => 
    array (
      0 => '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/animals/searchbar.tpl',
      1 => 1543933539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c068e65d57390_59607165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form method="POST" action="search.tpl">
    <input list="Breeds" placeholder="Breeds">
    <datalist>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breeds']->value, 'breed');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['breed']->value) {
?>
            <option value=<?php echo $_smarty_tpl->tpl_vars['breed']->value['name'];?>
>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </datalist>
</form>
    
<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

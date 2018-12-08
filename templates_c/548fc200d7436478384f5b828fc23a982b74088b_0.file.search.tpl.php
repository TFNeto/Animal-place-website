<?php
/* Smarty version 3.1.33, created on 2018-12-07 10:53:22
  from '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/animals/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0a512267ed22_15746967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '548fc200d7436478384f5b828fc23a982b74088b' => 
    array (
      0 => '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/animals/search.tpl',
      1 => 1544127697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c0a512267ed22_15746967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


       <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-2.2.4.min.js"><?php echo '</script'; ?>
>



   
    <?php echo '<script'; ?>
>
    $(() => {
        const foo = document.getElementById('specie');
        document.getElementById('specie').onchange = function() {
            getallbreeds()
            $('#breeds').append('<option value="foo">');
        };
    });
    <?php echo '</script'; ?>
>



<form method="POST" action="search.tpl">
        <select id="specie" placeholder="Spicies...">
            <option value="" disabled selected>Select Specie...</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['species']->value, 'specie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['specie']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['specie']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['specie']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    <input list="breeds" placeholder="Breeds">
        <datalist id="breeds">
             <option value="">
        </datalist>
</form>
    
<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

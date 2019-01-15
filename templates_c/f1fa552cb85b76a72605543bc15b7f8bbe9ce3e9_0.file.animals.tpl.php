<?php
/* Smarty version 3.1.33, created on 2019-01-15 13:29:28
  from '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/animals/animals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3de0388e56b1_81228154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1fa552cb85b76a72605543bc15b7f8bbe9ce3e9' => 
    array (
      0 => '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/animals/animals.tpl',
      1 => 1547558954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c3de0388e56b1_81228154 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['animals']->value, 'animal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['animal']->value) {
?> 
        <div class="gallery">
            <p><img src= <?php echo $_smarty_tpl->tpl_vars['animal']->value['picture'];?>
 alt='animals'></p>
            <div class="overlay">
			    <div class="text">
                <p> <?php echo $_smarty_tpl->tpl_vars['animal']->value['name'];?>
</p>
                <p> <?php echo $_smarty_tpl->tpl_vars['animal']->value['breed'];?>
</p>
                <p> <?php echo $_smarty_tpl->tpl_vars['animal']->value['age'];?>
</p>
                </div>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <?php }
}

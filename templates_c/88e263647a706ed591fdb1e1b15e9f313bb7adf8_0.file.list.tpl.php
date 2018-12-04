<?php
/* Smarty version 3.1.33, created on 2018-11-26 11:59:27
  from '/usr/users2/mieec2013/up201303019/public_html/aula2siem/templates/animals/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfbe01f978bd9_31337221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88e263647a706ed591fdb1e1b15e9f313bb7adf8' => 
    array (
      0 => '/usr/users2/mieec2013/up201303019/public_html/aula2siem/templates/animals/list.tpl',
      1 => 1543233560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5bfbe01f978bd9_31337221 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<section id="animals">
    <h2>Animals</h2>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['animals']->value, 'animal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['animal']->value) {
?> 
   
    <article class="animal">
        <p><img src= <?php echo $_smarty_tpl->tpl_vars['animal']->value['picture'];?>
 alt='animais'></p>
    </article>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</section>
    
<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

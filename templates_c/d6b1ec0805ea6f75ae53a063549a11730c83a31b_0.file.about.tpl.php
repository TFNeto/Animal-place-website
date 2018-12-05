<?php
/* Smarty version 3.1.33, created on 2018-12-05 11:36:08
  from '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/animals/about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c07b82879b3b0_46215620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6b1ec0805ea6f75ae53a063549a11730c83a31b' => 
    array (
      0 => '/usr/users2/mieec2014/up201402912/public_html/trabalhosSiem/PHP2/templates/animals/about.tpl',
      1 => 1544009766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5c07b82879b3b0_46215620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<article>
	<article class="row">
        <article class="column">
            <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/joao.jpg" alt="Joao" style="width:45%">
            <figcaption>João Matos<br>up201303019@fe.up.pt</figcaption>
        </article>
        <article class="column">
            <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/tiago.jpg" alt="Tiago" style="width:50%">
            <figcaption>Tiago Neto <br>up201402912@fe.up.pt</figcaption>
        </article>

	</article>

	<p>Login info (username | password)</p>
	<ul class="b">
		<p><li>Cliente -> user | useruser</li></p>
		<p><li>Admin -> admin | adminadmin </li></p>
	</ul>


    <a href="TrabalhoPHP_Vf.pptx" download>
    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/pp.png" alt="PPT" style="width:10%">
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
animalplace.css" download>
    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/css.png" alt="CSS" style="width:10%">
    <a href="trabalhoPHP-1.zip" download>
    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/zip.png" alt="ZIP" style="width:8%">

</article>


<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

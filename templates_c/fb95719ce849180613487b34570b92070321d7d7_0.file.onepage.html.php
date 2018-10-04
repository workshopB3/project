<?php
/* Smarty version 3.1.33, created on 2018-10-04 13:29:03
  from '/Users/ronanlaplaud/Documents/project/html/onepage/onepage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb5f97f9336e5_20774658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb95719ce849180613487b34570b92070321d7d7' => 
    array (
      0 => '/Users/ronanlaplaud/Documents/project/html/onepage/onepage.html',
      1 => 1538491209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/onepage/home.html' => 1,
    'file:html/onepage/schools.html' => 1,
    'file:html/onepage/specificities.html' => 1,
  ),
),false)) {
function content_5bb5f97f9336e5_20774658 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="fullpage">
<?php $_smarty_tpl->_subTemplateRender('file:html/onepage/home.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:html/onepage/schools.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:html/onepage/specificities.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php }
}

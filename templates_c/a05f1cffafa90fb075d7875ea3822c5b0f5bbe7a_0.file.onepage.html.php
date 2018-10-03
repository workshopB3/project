<?php
/* Smarty version 3.1.33, created on 2018-10-02 14:37:29
  from 'C:\wamp64\www\workshop\html\onepage\onepage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb382a9516f49_55854840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a05f1cffafa90fb075d7875ea3822c5b0f5bbe7a' => 
    array (
      0 => 'C:\\wamp64\\www\\workshop\\html\\onepage\\onepage.html',
      1 => 1538490997,
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
function content_5bb382a9516f49_55854840 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="fullpage">
<?php $_smarty_tpl->_subTemplateRender('file:html/onepage/home.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:html/onepage/schools.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:html/onepage/specificities.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php }
}

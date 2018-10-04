<?php
/* Smarty version 3.1.33, created on 2018-10-03 10:47:21
  from 'C:\wamp\www\workshop\project\html\onepage\onepage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb48219a568f1_59663361',
  'has_nocache_code' => false,
  'file_dependency' =>
  array (
    'e2b2a9322a6eb4ded306bdbe9fa8959dcbc880d1' =>
    array (
      0 => 'C:\\wamp\\www\\workshop\\project\\html\\onepage\\onepage.html',
      1 => 1538556422,
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
function content_5bb48219a568f1_59663361 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="fullpage">
<?php $_smarty_tpl->_subTemplateRender('file:html/onepage/home.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:html/onepage/schools.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:html/onepage/specificities.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php }
}

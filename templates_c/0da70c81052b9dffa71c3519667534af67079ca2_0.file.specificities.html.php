<?php
/* Smarty version 3.1.33, created on 2018-10-04 11:26:39
  from '/Users/ronanlaplaud/Documents/project/html/onepage/specificities.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb5dccf6ed4a8_76841931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0da70c81052b9dffa71c3519667534af67079ca2' => 
    array (
      0 => '/Users/ronanlaplaud/Documents/project/html/onepage/specificities.html',
      1 => 1538644908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb5dccf6ed4a8_76841931 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="section" data-anchor="specificities" body style = "background-color:#4bbfc3">
  <h1> <?php echo $_smarty_tpl->tpl_vars['xml']->value->richesses_du_campus;?>
</h1>
  </br>
  <p class="description">
    <?php echo $_smarty_tpl->tpl_vars['xml']->value->richesses_du_campus_description;?>

  </p>
</div>

<div class="section">
  <h2><span class = "liste_a_puce"></span><?php echo $_smarty_tpl->tpl_vars['xml']->value->richesse1;?>
</h2></br>
  <p class="description">
    <?php echo $_smarty_tpl->tpl_vars['xml']->value->richesse1_description;?>

. </p>
</div>

<div class="section">
  <h2><?php echo $_smarty_tpl->tpl_vars['xml']->value->richesse2;?>
 </h2></br>
  <p class="description">
    <?php echo $_smarty_tpl->tpl_vars['xml']->value->richesse2_description;?>

. </p>
</div>

<div class="section">
  <h2><?php echo $_smarty_tpl->tpl_vars['xml']->value->richesse3;?>
</h2></br>
  <p class="description">
    <?php echo $_smarty_tpl->tpl_vars['xml']->value->richesse3_description;?>

. </p>
</div>

<div class="section">
  <h2><?php echo $_smarty_tpl->tpl_vars['xml']->value->richesse4;?>
</h2></br>
  <p class="description">
    <?php echo $_smarty_tpl->tpl_vars['xml']->value->richesse4_description;?>

. </p>
</div>

<div class="section">
  <h2><?php echo $_smarty_tpl->tpl_vars['xml']->value->richesse5;?>
</h2></br>
  <p class="description">
    <?php echo $_smarty_tpl->tpl_vars['xml']->value->richesse5_description;?>

. </p>
</div>
<?php }
}

<?php
/* Smarty version 3.1.33, created on 2018-10-04 11:26:39
  from '/Users/ronanlaplaud/Documents/project/html/onepage/schools.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb5dccf6cdd11_61216613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23c1b09bbb538be0d51bc8ed9bb66524bc007234' => 
    array (
      0 => '/Users/ronanlaplaud/Documents/project/html/onepage/schools.html',
      1 => 1538644908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb5dccf6cdd11_61216613 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="section" data-anchor="schools" style = "background-color:#4bbfc3">
  <h1><?php echo $_smarty_tpl->tpl_vars['xml']->value->ecoles_partenaires;?>
</h1>
  <p class="description">
    <?php echo $_smarty_tpl->tpl_vars['xml']->value->ecoles_partenaires_description;?>
  </p>
</div>
<div class="section">
        <img class="rotate" src="http://dev.meilleures-licences.com/logo_ecole/epsilogo-1447338739.png" width="260px" />
        <p class="description">
          <?php echo $_smarty_tpl->tpl_vars['xml']->value->ecole1;?>

      <br /><br /><a href="http://www.epsi.fr/">http://www.epsi.fr/</a>
        </p>
</div>
<div class="section">
      <img class="rotate" src="http://www.concours-team.net/sites/default/files/logo_idrac2.png" width="260px" />
      <p class="description">
        <?php echo $_smarty_tpl->tpl_vars['xml']->value->ecole2;?>

        <br /><br /><a href="http://www.ecoles-idrac.com/">http://www.ecoles-idrac.com/</a>
      </p>
</div>
<div class="section">
      <img class="rotate" src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Ifag_logo.png" width="260px" />
      <p class="description">
        <?php echo $_smarty_tpl->tpl_vars['xml']->value->ecole3;?>

        <br /><br /><a href="http://www.ifag.com/">www.ifag.com/</a>
      </p>
</div>
    <div class="section">
      <img class="rotate" src="https://i.tween.pics/v1/https://s3-eu-west-1.amazonaws.com/assets.atout-on-line.com/images/commerce/2015/fiches_ecoles/igefi_logo.jpg" width="260px" />
      <p class="description">
        <?php echo $_smarty_tpl->tpl_vars['xml']->value->ecole4;?>

        <br /><br /><a href="http://www.igefi.net/">www.igefi.net/</a>
      </p>
    </div>
    <div class="section">
      <img  class="rotate"src="https://www.tagemage.fr/images/school/166-SUP-'DE%20COM-Logo-01.jpg" width="260px" />
      <p class="description">
        <?php echo $_smarty_tpl->tpl_vars['xml']->value->ecole5;?>

        <br /><br /><a href="http://www.ecoles-supdecom.com/campus/nantes/">www.ecoles-supdecom.com/campus/nantes/</a>
      </p>
    </div>
    <div class="section">
      <img class="rotate" src="https://www.usine-digitale.fr/mediatheque/9/2/1/000643129.png" width="260px" />
      <p class="description">
        <?php echo $_smarty_tpl->tpl_vars['xml']->value->ecole6;?>

        <br /><br /><a href="http://www.wis-ecoles.com/">www.wis-ecoles.com/</a>
      </p>
    </div>
<?php }
}

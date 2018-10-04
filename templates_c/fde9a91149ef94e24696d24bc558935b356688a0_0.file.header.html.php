<?php
/* Smarty version 3.1.33, created on 2018-10-04 11:26:32
  from '/Users/ronanlaplaud/Documents/project/html/header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb5dcc8dddae3_13445329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fde9a91149ef94e24696d24bc558935b356688a0' => 
    array (
      0 => '/Users/ronanlaplaud/Documents/project/html/header.html',
      1 => 1538645089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb5dcc8dddae3_13445329 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
	<title>Workshop</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
	<link rel="icon" type="image/png" href="" />
	<link rel="stylesheet" href="web/css/style.css">
  <link rel="stylesheet" href="plugins/fullpage/dist/fullpage.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<body>
	<?php if (!empty($_GET['page']) && ($_GET['page'] == 'navigation_choice' || $_GET['page'] == 'navigation')) {?>
	<?php } else { ?>
	<nav id="menu">
    <ul>
        <li><a class="active" href="index.php"><?php echo $_smarty_tpl->tpl_vars['xml']->value->accueil;?>
</a></li>
				<li><a href="index.php#secondPage"><?php echo $_smarty_tpl->tpl_vars['xml']->value->ecoles_partenaires;?>
</a></li>
				<li><a href="index.php#ninthPage"><?php echo $_smarty_tpl->tpl_vars['xml']->value->richesses_du_campus;?>
</a></li>
        <li><a href="index.php?page=navigation_choice"><?php echo $_smarty_tpl->tpl_vars['xml']->value->navigation;?>
</a></li>
				<li><a href="index.php?page=contact"><?php echo $_smarty_tpl->tpl_vars['xml']->value->contact;?>
</a></li>
				<li><a href="<?php if (!empty($_GET['page'])) {?>index.php?page=<?php echo $_GET['page'];?>
&lang=fr<?php } else { ?>index.php?lang=fr<?php }?>"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/1200px-Flag_of_France.svg.png" width='30' height='30' /></a></li>
				<li><a href="<?php if (!empty($_GET['page'])) {?>index.php?page=<?php echo $_GET['page'];?>
&lang=en<?php } else { ?>index.php?lang=en<?php }?>"><img src="https://images-na.ssl-images-amazon.com/images/I/41cfK9pPRpL._SX355_.jpg" width='30' height='30' /></a></li>
    </ul>
</nav>
<div class="clear: both;">

</div>
	<?php }
}
}

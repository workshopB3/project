<?php
/* Smarty version 3.1.33, created on 2018-10-03 16:33:24
  from '/Users/adrien/Sites/workshop/html/header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb4d334cad746_87328347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b19c3e6ec0fb23b3a2591c8180ac3e9dfc877d8' => 
    array (
      0 => '/Users/adrien/Sites/workshop/html/header.html',
      1 => 1538577202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb4d334cad746_87328347 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
	<title>Workshop</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
	<link rel="icon" type="image/png" href="" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="web/css/style.css">
  <link rel="stylesheet" href="plugins/fullpage/dist/fullpage.min.css">
	<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<body>
	<?php if (!empty($_GET['page']) && $_GET['page'] == 'navigation') {?>

	<?php } else { ?>
	<nav id="menu">
    <ul>
        <li><a class="active" href="index.php"><?php echo $_smarty_tpl->tpl_vars['xml']->value->accueil;?>
</a></li>
				<li><a href="index.php#secondPage">Écoles partenaires</a></li>
				<li><a href="index.php#ninthPage">Les richesses du campus</a></li>
        <li><a href="index.php?page=navigation">Navigation</a></li>
				<li><a href="index.php?page=contact">Contact</a></li>
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

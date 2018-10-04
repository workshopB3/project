<?php
/* Smarty version 3.1.33, created on 2018-10-04 09:56:29
  from '/Users/ronanlaplaud/Documents/project/html/header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb5c7ad5a2d52_58105174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fde9a91149ef94e24696d24bc558935b356688a0' => 
    array (
      0 => '/Users/ronanlaplaud/Documents/project/html/header.html',
      1 => 1538639573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb5c7ad5a2d52_58105174 (Smarty_Internal_Template $_smarty_tpl) {
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
        <li data-menuanchor="Accueil"><a href="index.php">Accueil</a></li>
				<li data-menuanchor="Ecoles"><a href="#ecoles">Nos écoles</a></li>
				<li data-menuanchor="Ecoles"><a href="#">Les Richesses du campus</a></li>
        <li data-menuanchor="Navigation"><a href="index.php?page=navigation_choice">Navigation</a></li>
    </ul>
	</nav>
	<?php }
}
}

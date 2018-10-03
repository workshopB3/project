<?php
/* Smarty version 3.1.33, created on 2018-10-03 11:20:33
  from 'C:\wamp\www\workshop\project\html\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb489e1c6e943_06717320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '206ad1c293127caa3b8120198dbf95e23175c972' => 
    array (
      0 => 'C:\\wamp\\www\\workshop\\project\\html\\header.html',
      1 => 1538553774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb489e1c6e943_06717320 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
	<title>Workshop</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
	<link rel="icon" type="image/png" href="" />
	<link rel="stylesheet" href="web/css/style.css">
  <link rel="stylesheet" href="plugins/fullpage/dist/fullpage.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<body>
	<?php if (!empty($_GET['page']) && $_GET['page'] == 'navigation') {?>
	<?php } else { ?>
	<nav id="menu">
    <ul>
        <li data-menuanchor="Accueil"><a href="index.php">Accueil</a></li>
				<li data-menuanchor="Ecoles"><a href="#ecoles">Nos écoles</a></li>
				<li data-menuanchor="Ecoles"><a href="#">Les Richesses du campus</a></li>
        <li data-menuanchor="Navigation"><a href="index.php?page=navigation">Navigation</a></li>
    </ul>
	</nav>
	<?php }
}
}

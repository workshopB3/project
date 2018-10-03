<?php
/* Smarty version 3.1.33, created on 2018-10-03 08:28:47
  from 'C:\wamp64\www\workshop\html\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb47dbf5f0ed8_78633297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb23e5278cc5f94afcfa062b58cdf5d8480c244d' => 
    array (
      0 => 'C:\\wamp64\\www\\workshop\\html\\header.html',
      1 => 1538555244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb47dbf5f0ed8_78633297 (Smarty_Internal_Template $_smarty_tpl) {
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
        <li><a class="active" href="index.php">Accueil</a></li>
				<li><a href="#secondPage">Nos écoles</a></li>
				<li><a href="#ninthPage">Les richesses du campus</a></li>
        <li><a href="index.php?page=navigation">Navigation</a></li>
				<li><a href="index.php#contact">Contact</a></li>
    </ul>
</nav>
	<?php }
}
}

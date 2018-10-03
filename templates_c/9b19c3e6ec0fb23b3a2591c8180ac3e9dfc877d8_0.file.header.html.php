<?php
/* Smarty version 3.1.33, created on 2018-10-03 09:51:33
  from '/Users/adrien/Sites/workshop/html/header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb47505b169c7_35188889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b19c3e6ec0fb23b3a2591c8180ac3e9dfc877d8' => 
    array (
      0 => '/Users/adrien/Sites/workshop/html/header.html',
      1 => 1538553091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb47505b169c7_35188889 (Smarty_Internal_Template $_smarty_tpl) {
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
        <li><a href="index.php">Accueil</a></li>
				<li><a href="#schools">Nos écoles</a></li>
				<li><a href="#specificities">Les richesses du campus</a></li>
        <li><a href="index.php?page=navigation">Navigation</a></li>
				<li><a href="index.php#contact">Contact</a></li>
    </ul>
</nav>
	<?php }
}
}

<?php
/* Smarty version 3.1.33, created on 2018-10-03 08:39:21
  from 'C:\wamp\www\workshop\project\html\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb464197c3ad0_87759144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '206ad1c293127caa3b8120198dbf95e23175c972' => 
    array (
      0 => 'C:\\wamp\\www\\workshop\\project\\html\\header.html',
      1 => 1538548759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb464197c3ad0_87759144 (Smarty_Internal_Template $_smarty_tpl) {
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
  <nav id="menu">
    <ul>
        <li data-menuanchor="Accueil"><a href="index.php"><?php echo $_smarty_tpl->tpl_vars['XMLfile']->value->accueil;?>
</a></li>
				<li data-menuanchor="Ecoles"><a href="#ecoles"><?php echo $_smarty_tpl->tpl_vars['XMLfile']->value->ecole;?>
</a></li>
				<li data-menuanchor="Richesses"><a href="#"><?php echo $_smarty_tpl->tpl_vars['XMLfile']->value->richesseCampus;?>
</a></li>
        <li data-menuanchor="Navigation"><a href="index.php?page=navigation"><?php echo $_smarty_tpl->tpl_vars['XMLfile']->value->navigation;?>
</a></li>
    </ul>
	</nav>
	<div id="content">
<?php }
}

<?php
/* Smarty version 3.1.33, created on 2018-10-02 13:17:05
  from '/Users/ronanlaplaud/Documents/project/html/header.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb353b19f12b2_47394789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b6335c0e4a7b7fb726dfe48ff1bba5221738736' => 
    array (
      0 => '/Users/ronanlaplaud/Documents/project/html/header.php',
      1 => 1538470690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb353b19f12b2_47394789 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
	<title>Workshop</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
	<link rel="icon" type="image/png" href="" />
	<link rel="stylesheet" href="web/css/style.css">
  <link rel="stylesheet" href="plugins/fullpage/dist/fullpage.min.css">
	<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<body>
  <nav id="menu">
    <ul>
        <li data-menuanchor="Accueil"><a href="index.php">Accueil</a></li>
        <li data-menuanchor="Navigation"><a href="index.php?page=navigation">Navigation</a></li>
        <li data-menuanchor="Contact"><a href="#Con">Contact</a></li>
    </ul>
</nav>
<?php }
}

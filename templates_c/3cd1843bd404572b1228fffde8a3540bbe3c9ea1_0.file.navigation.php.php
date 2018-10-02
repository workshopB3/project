<?php
/* Smarty version 3.1.33, created on 2018-10-02 13:21:57
  from '/Users/ronanlaplaud/Documents/project/html/navigation.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb354d514f081_68357228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cd1843bd404572b1228fffde8a3540bbe3c9ea1' => 
    array (
      0 => '/Users/ronanlaplaud/Documents/project/html/navigation.php',
      1 => 1538479315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb354d514f081_68357228 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="img-content">
  <?php echo '<?php ';?>print_r($img); <?php echo '?>';?>
  <img id="navImg" width="800" height="800" style="width:100%; height:100%;" onclick="changeSrcImg();" src="<?php echo '<?php ';?>echo $img[0]['url']; <?php echo '?>';?>"></img>
</div>
<?php echo '<script'; ?>
 language="javascript">
  function changeSrcImg() {
    var arrayImg = <?php echo '<?php ';?>echo json_encode($img); <?php echo '?>';?>;
    console.log(document.getElementById("navImg"));
    console.log("ArrayImg - " + arrayImg);
      //document.getElementById("navImg").src = arrayImg[1]['url'];
  }
<?php echo '</script'; ?>
>
<?php }
}

<?php
/* Smarty version 3.1.33, created on 2018-10-02 14:28:45
  from '/Users/ronanlaplaud/Documents/project/html/navigation.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb3647da05951_24906941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '741dc61bce0fc94e527a9ad04032ead25b2d7444' => 
    array (
      0 => '/Users/ronanlaplaud/Documents/project/html/navigation.html',
      1 => 1538483308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb3647da05951_24906941 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="img-content">
  <img id="navImg" width="800" height="800" style="width:100%; height:100%;"src="<?php echo $_smarty_tpl->tpl_vars['img']->value[0]['url'];?>
" onclick="changeSrcImg('behind');"></img>
</div>
<?php echo '<script'; ?>
 language="javascript">
  var imgIndex = 0;

  function changeSrcImg(direction) {
    var encodedImg = <?php echo $_smarty_tpl->tpl_vars['encoded_img']->value;?>
;
    var currentObj = encodedImg[imgIndex];
    for (var i = 0; i<encodedImg.length; i++) {
      var obj = encodedImg[i];
      if(obj.id == currentObj[direction]) {
        currentObj = obj;
        imgIndex = i;
        break;
      }
    }
    document.getElementById("navImg").src = currentObj.url;
  }
<?php echo '</script'; ?>
>
<?php }
}

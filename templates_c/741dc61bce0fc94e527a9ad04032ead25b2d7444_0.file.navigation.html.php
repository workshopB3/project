<?php
/* Smarty version 3.1.33, created on 2018-10-02 14:40:13
  from '/Users/ronanlaplaud/Documents/project/html/navigation.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb3672dcb9f71_46269359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '741dc61bce0fc94e527a9ad04032ead25b2d7444' => 
    array (
      0 => '/Users/ronanlaplaud/Documents/project/html/navigation.html',
      1 => 1538483988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb3672dcb9f71_46269359 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="img-content">
  <img id="navImg" width="800" height="800" style="position: absolute;z-index: 1;width:100%; height:100%;" src="<?php echo $_smarty_tpl->tpl_vars['img']->value[0]['url'];?>
" onclick="changeSrcImg('forward');">
    <img class="fleche" style="left:5%;top:45%" src="./assets/imgs/fleche_grise.png">Flèche gauche</img>
    <img class="fleche" style="right:5%;top:45%" src="./assets/imgs/fleche_grise.png">Flèche droite</img>
    <img class="fleche" style="left:45%;top:5%" src="./assets/imgs/fleche_grise.png">Flèche haut</img>
    <img class="fleche" style="left:45%;bottom:5%" src="./assets/imgs/fleche_grise.png">Flèche bas</img>
  </img>
</img>
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

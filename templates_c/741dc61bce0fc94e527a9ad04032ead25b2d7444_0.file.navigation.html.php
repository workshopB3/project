<?php
/* Smarty version 3.1.33, created on 2018-10-02 15:07:27
  from '/Users/ronanlaplaud/Documents/project/html/navigation.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb36d8f492ae9_42073491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '741dc61bce0fc94e527a9ad04032ead25b2d7444' => 
    array (
      0 => '/Users/ronanlaplaud/Documents/project/html/navigation.html',
      1 => 1538485646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb36d8f492ae9_42073491 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="web/css/navigation.css">

<div id="img-content">
  <img id="navImg" width="800" height="800" style="position: absolute;z-index: 1;width:100%; height:100%;" src="<?php echo $_smarty_tpl->tpl_vars['img']->value[0]['url'];?>
">
    <img id="arrowLeft" class="fleche" style="left:5%;top:45%" src="./assets/imgs/fleche_grise.png" onclick="changeSrcImg('left');"></img>
    <img id="arrowRight" class="fleche" style="right:5%;top:45%" src="./assets/imgs/fleche_grise.png" onclick="changeSrcImg('right');"></img>
    <img id="arrowForward" class="fleche" style="left:45%;top:5%" src="./assets/imgs/fleche_grise.png" onclick="changeSrcImg('forward');"></img>
    <img id="arrowBehind" class="fleche" style="left:45%;bottom:5%" src="./assets/imgs/fleche_grise.png" onclick="changeSrcImg('behind');"></img>
  </img>
</div>
<?php echo '<script'; ?>
 language="javascript">
  var imgIndex = 0;
  var encodedImg = <?php echo $_smarty_tpl->tpl_vars['encoded_img']->value;?>
;
  var currentObj = encodedImg[imgIndex];
  displayArrows(currentObj);


  function changeSrcImg(direction) {
    console.log(direction);
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
    displayArrows(currentObj);
  }

  function displayArrows(obj) {
    if(obj.forward != 0) {
      document.getElementById("arrowForward").style.display = "block";
    }
    else {
      document.getElementById("arrowForward").style.display = "none";
    }

    if(obj.behind != 0) {
      document.getElementById("arrowBehind").style.display = "block";
    }
    else {
      document.getElementById("arrowBehind").style.display = "none";
    }

    if(obj.left != 0) {
      document.getElementById("arrowLeft").style.display = "block";
    }
    else {
      document.getElementById("arrowLeft").style.display = "none";
    }

    if(obj.right != 0) {
      document.getElementById("arrowRight").style.display = "block";
    }
    else {
      document.getElementById("arrowRight").style.display = "none";
    }
  }
<?php echo '</script'; ?>
>
<?php }
}

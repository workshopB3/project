<?php
/* Smarty version 3.1.33, created on 2018-10-03 11:20:33
  from 'C:\wamp\www\workshop\project\html\navigation.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb489e1cbe404_44524243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76ccdd73ed802cfe3671ba9b3cb7ed3ff0dd528' => 
    array (
      0 => 'C:\\wamp\\www\\workshop\\project\\html\\navigation.html',
      1 => 1538557846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb489e1cbe404_44524243 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="web/css/navigation.css">
<div id="navImg" style="background:url(<?php echo $_smarty_tpl->tpl_vars['img']->value[0]['url'];?>
);height:700px;background-size:cover;background-position:center;background-repeat:no-repeat;">
  <a href="/">Retour</a>
  <img id="arrowLeft" class="fleche" style="left:5%;top:45%" src="./assets/imgs/fleche_gauche.png" onclick="changeSrcImg('left');"></img>
  <img id="arrowRight" class="fleche" style="right:5%;top:45%" src="./assets/imgs/fleche_droite.png" onclick="changeSrcImg('right');"></img>
  <img id="arrowForward" class="fleche" style="left:45%;top:5%" src="./assets/imgs/fleche_haut.png" onclick="changeSrcImg('forward');"></img>
  <img id="arrowBehind" class="fleche" style="left:45%;bottom:5%" src="./assets/imgs/fleche_bas.png" onclick="changeSrcImg('behind');"></img>
</div>
<?php echo '<script'; ?>
 language="javascript">
  var imgIndex = 0;
  var encodedImg = <?php echo $_smarty_tpl->tpl_vars['encoded_img']->value;?>
;
  var currentObj = encodedImg[imgIndex];
  displayArrows(currentObj);

  function loadPathfinding(placeName) {
    var img = <?php echo $_smarty_tpl->tpl_vars['encoded_img']->value;?>
;
    var objToFind = null;
    for (var i = 0; i<img.length; i++) {
      var obj = img[i];
      if(obj.name == placeName) {
        objToFind = obj;
        break;
      }
    }
    console.log("OBJTOFIND = " + objToFind);

    var id = 0;
    var thisObj = objToFind;
    encodedImg = [];
    thisObj.forward = 0;
    thisObj.left = 0;
    thisObj.right = 0;
    encodedImg.push(thisObj);
    while(id != 1) {
      for (var i = 0; i<img.length; i++) {
        var obj = img[i];
        if(obj.id == thisObj.behind) {
          if(obj.forward == thisObj.id) {
            obj.right = 0;
            obj.left = 0;
          }
          else if (obj.left == thisObj.id) {
            obj.right = 0;
            obj.forward = 0;
          }
          else if (obj.right == thisObj.id) {
            obj.forward = 0;
            obj.left = 0;
          }

          objToFind = obj;
          id = obj.id;
          encodedImg.push(obj);
          break;
        }
      }
    }
    console.log("NEW IMGS = " + encodedImg);
  }

  function changeSrcImg(direction) {
    var currentObj = encodedImg[imgIndex];
    for (var i = 0; i<encodedImg.length; i++) {
      var obj = encodedImg[i];
      if(obj.id == currentObj[direction]) {
        currentObj = obj;
        imgIndex = i;
        break;
      }
    }
    document.getElementById("navImg").style.backgroundImage = "url(" + currentObj.url + ")";
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
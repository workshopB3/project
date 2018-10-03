<?php
/* Smarty version 3.1.33, created on 2018-10-03 22:09:36
  from '/Users/ronanlaplaud/Documents/project/html/navigation.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb52200ea3a73_13081950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '741dc61bce0fc94e527a9ad04032ead25b2d7444' => 
    array (
      0 => '/Users/ronanlaplaud/Documents/project/html/navigation.html',
      1 => 1538597330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb52200ea3a73_13081950 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="web/css/navigation.css">
<div style="margin-bottom: 20px;"class="pictureDesc">
  <p id="challenge"></p>
</div>
<div class="content">
  <div id="navImg" style="background:url(<?php echo $_smarty_tpl->tpl_vars['img']->value[0]['url'];?>
);height:630px;background-size:cover;background-position:center;background-repeat:no-repeat;">
    <a class="linkBtn" href="/">Retour site</a>
    <img id="arrowLeft" class="fleche" style="left:5%;top:45%" src="./assets/imgs/fleche_gauche.png" onclick="changeSrcImg('left');"></img>
    <img id="arrowRight" class="fleche" style="right:5%;top:45%" src="./assets/imgs/fleche_droite.png" onclick="changeSrcImg('right');"></img>
    <img id="arrowForward" class="fleche" style="left:45%;top:5%" src="./assets/imgs/fleche_haut.png" onclick="changeSrcImg('forward');"></img>
    <img id="arrowBehind" class="fleche" style="left:45%;bottom:15%" src="./assets/imgs/fleche_bas.png" onclick="changeSrcImg('behind');"></img>
  </div>
  <div style="margin-top: 20px;"class="pictureDesc">
    <p id="pictureDesc"></p>
  </div>
</div>
<?php echo '<script'; ?>
 language="javascript">

  function getUrlParam(param) {
    var url = window.location.search.substring(1);
    var sURLVariables = url.split('&');

    for (var i = 0; i < sURLVariables.length; i++) {
      var sParameterName = sURLVariables[i].split('=');
      if(sParameterName[0] == param) {
        return sParameterName[1];
      }
    }
    return 0;
  }


  var encodedImg = [];
  var currentObj = [];
  var imgIndex = 0;

  var urlChallenge = getUrlParam("challenge");
  if(urlChallenge == "true") {
    var arrayImg = <?php echo $_smarty_tpl->tpl_vars['encoded_img']->value;?>
;
    var ind = Math.floor(Math.random() * arrayImg.length);
    while(ind == 0) {
      ind = Math.floor(Math.random() * arrayImg.length);
    }
    console.log(arrayImg[ind]);
    loadPathfinding(arrayImg[ind].id);
    var countClicks = encodedImg.length;
    document.getElementById("challenge").innerHTML = "Challenge : Atteindre " + arrayImg[ind].name + " en " + countClicks + " ou moins";
  }

  var imgIndex = 0;

  var urlId = getUrlParam("id");
  if(urlId != 0) {
    if(urlId > 1) {
      currentObj = loadPathfinding(urlId);
    }
    else {
      console.log("else");
      encodedImg = <?php echo $_smarty_tpl->tpl_vars['encoded_img']->value;?>
;
      currentObj = encodedImg[imgIndex];
      currentObj.forward = 0;
      currentObj.left = 0;
      currentObj.right = 0;
      currentObj.behind = 0;
      encodedImg = [];
      encodedImg.push(currentObj);
    }
  }
  else {
    console.log(<?php echo $_smarty_tpl->tpl_vars['encoded_img']->value;?>
);
    encodedImg = <?php echo $_smarty_tpl->tpl_vars['encoded_img']->value;?>
;
    currentObj = encodedImg[imgIndex];
  }

  console.log(encodedImg);
  console.log(currentObj);

  document.getElementById("pictureDesc").innerHTML = currentObj.description;
  displayArrows(currentObj);

  function loadPath(id) {
    var img = <?php echo $_smarty_tpl->tpl_vars['encoded_img']->value;?>
;
    var objToFind = null;
    for (var i = 0; i<img.length; i++) {
      var obj = img[i];
      if(obj.id == id) {
        objToFind = obj;
        break;
      }
    }

    var id = 0;
    var thisObj = objToFind;
    var encoded = [];
    thisObj.forward = 0;
    thisObj.left = 0;
    thisObj.right = 0;
    encoded.push(thisObj);

    var objToReturn = [];
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

          thisObj = obj;
          id = obj.id;
          encoded.push(obj);
          break;
        }
      }
    }
    return encoded;
  }

  function loadPathfinding(id) {
    var img = <?php echo $_smarty_tpl->tpl_vars['encoded_img']->value;?>
;
    var objToFind = null;
    for (var i = 0; i<img.length; i++) {
      var obj = img[i];
      if(obj.id == id) {
        objToFind = obj;
        break;
      }
    }

    var id = 0;
    var thisObj = objToFind;
    encodedImg = [];
    thisObj.forward = 0;
    thisObj.left = 0;
    thisObj.right = 0;
    encodedImg.push(thisObj);

    var objToReturn = [];
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

          thisObj = obj;
          id = obj.id;
          encodedImg.push(obj);
          if(obj.id == 1) {
            objToReturn = obj;
            imgIndex = encodedImg.length - 1;
          }
          break;
        }
      }
    }

    return objToReturn;
  }

  function changeSrcImg(direction) {
    console.log(encodedImg);
    console.log(imgIndex);
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
    document.getElementById("pictureDesc").innerHTML = currentObj.description;
    displayArrows(currentObj);
  }

  function displayArrows(obj) {
    if(obj.forward != 0) {
      document.getElementById("arrowForward").style.display = "block";
      for (var i = 0; i<encodedImg.length; i++) {
        if(obj.forward == encodedImg[i].id) {
          document.getElementById("arrowForward").title = encodedImg[i].name;
        }
      }
    }
    else {
      document.getElementById("arrowForward").style.display = "none";
    }

    if(obj.behind != 0) {
      document.getElementById("arrowBehind").style.display = "block";
      for (var i = 0; i<encodedImg.length; i++) {
        if(obj.behind == encodedImg[i].id) {
          document.getElementById("arrowBehind").title = encodedImg[i].name;
        }
      }
    }
    else {
      document.getElementById("arrowBehind").style.display = "none";
    }

    if(obj.left != 0) {
      document.getElementById("arrowLeft").style.display = "block";
      for (var i = 0; i<encodedImg.length; i++) {
        if(obj.left == encodedImg[i].id) {
          document.getElementById("arrowLeft").title = encodedImg[i].name;
        }
      }
    }
    else {
      document.getElementById("arrowLeft").style.display = "none";
    }

    if(obj.right != 0) {
      document.getElementById("arrowRight").style.display = "block";
      for (var i = 0; i<encodedImg.length; i++) {
        if(obj.right == encodedImg[i].id) {
          document.getElementById("arrowRight").title = encodedImg[i].name;
        }
      }
    }
    else {
      document.getElementById("arrowRight").style.display = "none";
    }
  }
<?php echo '</script'; ?>
>
<?php }
}

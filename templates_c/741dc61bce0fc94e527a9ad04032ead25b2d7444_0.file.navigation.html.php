<?php
/* Smarty version 3.1.33, created on 2018-10-04 11:14:49
  from '/Users/ronanlaplaud/Documents/project/html/navigation.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb5da0915bd10_28808316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '741dc61bce0fc94e527a9ad04032ead25b2d7444' => 
    array (
      0 => '/Users/ronanlaplaud/Documents/project/html/navigation.html',
      1 => 1538644487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb5da0915bd10_28808316 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="web/css/navigation.css">
<div id="challengeBord" style="margin-bottom: 20px;"class="pictureDesc" style="display: none;">
  <p id="challenge"></p>
</div>
<div id="successModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id ="modalTitle" class="modal-title"></h5>
      </div>
        <img id="successMedal"></img>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="window.location.href='/index.php?page=navigation'">Retour navigation</button>
        </div>
    </div>
  </div>
</div>
<div class="content">
  <div id="navImg" style="background:url(<?php echo $_smarty_tpl->tpl_vars['img']->value[0]['url'];?>
);height:580px;background-size:850px;background-position:center;background-repeat:no-repeat;">
    <a class="linkBtn" href="/">Retour site</a>
    <img id="arrowLeft" class="fleche" style="left:20%;top:40%" src="./assets/imgs/fleche_gauche.png" onclick="changeSrcImg('left');"></img>
    <img id="arrowRight" class="fleche" style="right:20%;top:40%" src="./assets/imgs/fleche_droite.png" onclick="changeSrcImg('right');"></img>
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

  var countImgs = 0;
  var encodedImg = [];
  var currentObj = [];
  var imgIndex = 0;

  var urlChallenge = getUrlParam("challenge");
  if(urlChallenge == "true") {
    var challengeObj = [];
    var arrayImg = <?php echo $_smarty_tpl->tpl_vars['encoded_img']->value;?>
;
    var ind = Math.floor(Math.random() * arrayImg.length);
    while(ind == 0) {
      ind = Math.floor(Math.random() * arrayImg.length);
    }
    challengeObj = arrayImg[ind];
    loadPathfinding(arrayImg[ind].id);
    var countClicks = encodedImg.length;
    document.getElementById("challengeBord").style.display = "block";
    document.getElementById("challenge").innerHTML = "Challenge : Essayez d'atteindre " + arrayImg[ind].name + " en " + (countClicks - 1);
  }
  else {
    document.getElementById("challengeBord").style.display = "none";
  }

  var imgIndex = 0;

  var urlId = getUrlParam("id");
  if(urlId != 0) {
    if(urlId > 1) {
      currentObj = loadPathfinding(urlId);
    }
    else {
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
    encodedImg = <?php echo $_smarty_tpl->tpl_vars['encoded_img']->value;?>
;
    currentObj = encodedImg[imgIndex];
  }

  document.getElementById("pictureDesc").innerHTML = currentObj.description;
  displayArrows(currentObj);

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
    countImgs++;
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

    if(challengeObj.length != 0) {
      if(currentObj.id == challengeObj.id) {
        $('#successModal').modal('toggle');
        document.getElementById("modalTitle").innerHTML = "Félicitations! Vous avez atteint " + challengeObj.name;
        if(countImgs <= countClicks) {
          document.getElementById("successMedal").src = './assets/imgs/gold-medal.jpg';
        }
        else if(countImgs > countClicks && countImgs < countClicks + 2) {
          document.getElementById("successMedal").src = './assets/imgs/silver-medal.jpg';
        }
        else {
          document.getElementById("successMedal").src = './assets/imgs/bronze-medal.jpg';
        }
      }
    }
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

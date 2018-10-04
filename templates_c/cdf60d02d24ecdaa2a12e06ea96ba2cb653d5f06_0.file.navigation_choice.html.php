<?php
/* Smarty version 3.1.33, created on 2018-10-03 19:23:08
  from '/Users/ronanlaplaud/Documents/project/html/navigation_choice.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb4fafc4fef28_73815579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdf60d02d24ecdaa2a12e06ea96ba2cb653d5f06' => 
    array (
      0 => '/Users/ronanlaplaud/Documents/project/html/navigation_choice.html',
      1 => 1538587385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb4fafc4fef28_73815579 (Smarty_Internal_Template $_smarty_tpl) {
?><button id="libre" onclick="window.location.href='/index.php?page=navigation'">Visite libre</button>
<button id="guidee" onclick="document.getElementById('dropdownCat').style.display='block';">Visite guidée</button>
<button id="challenge" onclick="window.location.href='/index.php?page=navigation&challenge=true'">Challenge</button>

<form>
  <select style="display:none;" id="dropdownCat" class='alt_list' name="dropdownCat" onchange="onChangeCat();">
    <option></option>
  </select>
  <select id="dropdownImg" class='alt_list' name="dropdownImg" onchange="onChangePlace();" style="display:none;">
    <option></option>
  </select>
  <a id="navBtn" href="/index.php?page=navigation&id=" style="display:none;">
    Commencez la visite
  </a>
</form>

<?php echo '<script'; ?>
 language="javascript">
  var encodedImg = <?php echo $_smarty_tpl->tpl_vars['encoded_img']->value;?>
;
  var categories = [];
  for(var i=0; i < encodedImg.length; i++) {
    var inArray = false;
    for(catI=0; catI < categories.length; catI++) {
      if(categories[catI] == encodedImg[i]['category']) {
        inArray = true;
        break;
      }
    }
    if(inArray == false) {
      categories.push(encodedImg[i]['category']);
    }
  }

  var select = document.getElementById("dropdownCat");
  for(catI=0; catI < categories.length; catI++) {
    var opt = document.createElement('option');
    opt.value = categories[catI];
    opt.innerHTML = categories[catI];
    select.appendChild(opt);
  }

  function onChangeCat() {
    document.getElementById("navBtn").style.display = "none";
    var select = document.getElementById("dropdownCat");
    var thisSelect = document.getElementById("dropdownImg");
    thisSelect.style.display = "block";
    var category = select.options[select.selectedIndex].value;
    var options = [];
    for (var i=0; i<encodedImg.length; i++) {
      if(encodedImg[i]['category'] == category) {
        var option = [];
        option['name'] = encodedImg[i]['name'];
        option['id'] = encodedImg[i]['id'];
        options.push(option);
      }
    }

    thisSelect.innerHTML = '';
    var opt = document.createElement('option');
    opt.value = '';
    opt.innerHTML = '';
    thisSelect.appendChild(opt);

    for(var i=0; i<options.length; i++) {
      var opt = document.createElement('option');
      opt.value = options[i]['id'];
      opt.innerHTML = options[i]['name'];
      thisSelect.appendChild(opt);
    }
  }
  function onChangePlace() {
    document.getElementById("navBtn").style.display = "none";
    var select = document.getElementById("dropdownImg");
    var imgId = select.options[select.selectedIndex].value;
    if(imgId != 0) {
      document.getElementById("navBtn").style.display = "block";
      document.getElementById("navBtn").href += imgId;
    }
  }

<?php echo '</script'; ?>
>
<?php }
}

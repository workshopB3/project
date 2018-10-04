<?php
/* Smarty version 3.1.33, created on 2018-10-03 14:11:59
  from '/Users/adrien/Sites/workshop/html/contact.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb4b20f7d1df3_37054547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a69022467b43ad4153d6ff2adc1048e49ef0490' => 
    array (
      0 => '/Users/adrien/Sites/workshop/html/contact.html',
      1 => 1538568716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb4b20f7d1df3_37054547 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <br /><br />
    <div class="col-sm-6">
      <h2 style="margin-top: 100px;">Nous contacter</h2>
      <br />
      <form action="" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Vous êtes : </label>
          <select class="form-control" id="person" name="person">
            <option></option>
            <option>Un candidat</option>
            <option>Une entreprise</option>
            <option>Autre</option>
          </select>
        </div>
        <div class="form-group">
          <label for="email">Votre email : </label>
          <input type="email" class="form-control" id="email" placeholder="">
        </div>
        <div class="form-group">
          <label for="subject">Sujet de votre message : </label>
          <input type="text" class="form-control" id="subject" placeholder="">
        </div>
        <div class="form-group">
          <label for="content">Votre message : </label>
          <textarea type="text" class="form-control" id="content" rows="8"></textarea>
        </div>
        <div class="form-group">
          <label for="file">Pièce jointe : </label>
          <input type="file" class="form-control" id="file"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
    </div>
    <div class="col-sm-6">
      <h2 style="margin-top: 100px;">Nous trouver</h2>
      <br />
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2710.5394285923308!2d-1.5415818842703546!3d47.206026579159996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805eeca822992c9%3A0x98e05f85f9a043f8!2s16+Boulevard+G%C3%A9n%C3%A9ral+de+Gaulle%2C+44200+Nantes!5e0!3m2!1sfr!2sfr!4v1538568673854" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <?php echo '<script'; ?>
>
    $('form').submit(function(e) {
      var email = $("#email").val();
      var subject = $("#subject").val();
      var content = $("#content").val();
      var person = $("#person").val();
      $('.alert').remove();
      if (email!='' && subject!='' && content !='' && person!=''){
        $('form').prepend('<div class="alert alert-success" role="alert">Le formulaire a bien été envoyé</div>');
      }
      else{
        $('form').prepend('<div class="alert alert-danger" role="alert">Veuillez remplir tous les champs !</div>');
      }
      return false;
    });
    <?php echo '</script'; ?>
>
<?php }
}

<?php
/*
Template Name: Feedback
*/
?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/template/header.php");
?>

<div id="wrap">
    
  <!-- CONTACT FULL 2 BLOCK -->
  <section id="contact-full-2" class="dark-bg bg-color1 cover-bg p100 bp280" style="background-image:url(/images/bg29.jpg);">
   <div class="container">
    <h2 class="title">Обратная связь</h2>
    <p class="sep-bottom">Вам скучно и одиноко? Пишите через форму обратной связи или на почту <a href="emailto:mims2707@gmail.com" rel="nofollow" target="_blank">mims2707@gmail.com</a> <i class="icon icon-emoticon-smile"></i></p>
    <form action="/scripts/contact.php" role="form" id="contact_form" novalidate="novalidate">
     <div class="form-group">
      <input type="text" class="form-control error" id="contact_name" placeholder="Имя" name="name"><!--<label for="contact_name" generated="true" class="error">Как Вас зовут?</label>-->
     </div>
     <div class="form-group">
      <input type="email" class="form-control error" id="contact_email" placeholder="Email" name="email"><!--</input><label for="contact_email" generated="true" class="error">Ваш email?</label>-->
     </div>
     <div class="form-group">
      <textarea class="form-control error" rows="4" placeholder="Ваше сообщение или вопрос" id="contact_message" name="message"></textarea><!--<label for="contact_message" generated="true" class="error">Впишите ваше сообщение</label>-->
     </div>
     <button type="submit" id="contact_submit" data-loading-text="•••" class="btn btn-lg btn-block btn-primary"><i class="icon icon-paper-plane"></i>Отправить</button>
    <input id="reset-epta" type="reset" style="display:none" value="Сбросить" />
	</form>
	
<div class="modal-title"></div>
	
   </div>
   
   
  </section>
    
    </div><!-- /#wrap -->
 <script src="<?'http://'.$_SERVER['HTTP_HOST']?>/scripts/jquery.validate.min.js"></script> 
 <script src="<?'http://'.$_SERVER['HTTP_HOST']?>/scripts/placeholders.jquery.min.js"></script> 
 <script>
 
  $('#contact_form').validate({
   onfocusout: false,
   onkeyup: false,
   rules: {
    name: "required",
    message: "required",
    email: {
     required: true,
     email: true
    }
   },
   errorPlacement: function(error, element) {
    error.insertAfter(element);
   },
   messages: {
    name: "Как Вас зовут?",
    message: "Впишите ваше сообщение",
    email: {
     required: "Ваш email?",
     email: "Пожалуйста, введите валидный email"
    }
   },
      
   highlight: function(element) {
    $(element)
    .text('').addClass('error')
   },                    
      
   success: function(element) {
    element
    .text('').addClass('valid')
   }
  });
 
  
  $('#contact_form').submit(function() {
   // submit the form
   if($(this).valid()){
    $('#contact_submit').button('loading'); 
    var action = $(this).attr('action');
    $.ajax({
     url: action,
     type: 'POST',
      data: {
      contactname: $('#contact_name').val(),
      contactemail: $('#contact_email').val(),
      contactemail: $('#contact_email').val(),
      contactmessage: $('#contact_message').val()
     },
     success: function() {
     
       //смотри тут что тебе скрывать и что показывать 
      $('#contact_submit').button('reset');
      $('#modalContact').modal('hide');
       
       //Use modal popups to display messages
       $('.modal-title').html('<i class="icon icon-envelope-open"></i>Все хорошо!<br>Ваше сообщение было успешно отослано!');
       $('#modalMessage').modal('show');
	   $('#reset-epta').click();
     
     },
     error: function() {
      $('#contact_submit').button('reset');
      $('#modalContact').modal('hide');
      
      //Use modal popups to display messages
      $('#modalMessage .modal-title').html('<i class="icon icon-ban"></i>Oops!<br>Что-то пошло не так!');
      $('#modalMessage').modal('show');
     }
    });
   } else {
    $('#contact_submit').button('reset')
   }
   return false; 
  }); 
  
 </script> 
 
<? 
require($_SERVER["DOCUMENT_ROOT"]."/template/footer.php");
?>

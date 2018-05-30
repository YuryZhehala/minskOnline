$('#feedback div').click(function(){
  $('#feedback ul').toggle(300);
});

$('#feedback a').click(function(){
  
  var kx='name='+$('#feedback input[name=fname]').val()+'&phone='+$('#feedback input[name=phone]').val();
  // передаём в $_POST на feedback.php
$.ajax({
  url: 'feedback.php',
  type: 'POST',
  dataType: 'html',
  data: kx
});    
  $('#feedback ul').toggle(300);
  return false;
});
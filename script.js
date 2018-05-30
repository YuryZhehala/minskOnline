$('#feedback div').click(function() {
  $('#feedback ul').toggle(300);
});

$('#feedback a').click(function() { 
  var kx =
    'name=' +
    $('#feedback input[name=fname]').val() +
    '&phone=' +
    $('#feedback input[name=phone]').val();
  // передаём в $_POST на feedback.php
  $.ajax({
    url: 'feedback.php',
    type: 'POST',
    dataType: 'html',
    data: kx,
  });
  $('#feedback ul').toggle(300);
  return false;
});

$('#enter div').click(function() {
  $('#enter ul').toggle(300);
});

$('#enter a').click(function() {
  var kx =
    'name=' +
    $('#enter input[name=fname]').val() +
    '&phone=' +
    $('#enter input[name=phone]').val();
  // передаём в $_POST на feedback.php
  $.ajax({
    url: 'enter.php',
    type: 'POST',
    dataType: 'html',
    data: kx,
  });
  $('#enter ul').toggle(300);
  return false;
});

$('#registration div').click(function() {
  $('#registration ul').toggle(300);
});

$('#registration a').click(function() {
  var kx =
    'name=' +
    $('#registration input[name=fname]').val() +
    '&phone=' +
    $('#registration input[name=phone]').val();
  // передаём в $_POST на feedback.php
  $.ajax({
    url: 'registration.php',
    type: 'POST',
    dataType: 'html',
    data: kx,
  });
  $('#registration ul').toggle(300);
  return false;
});

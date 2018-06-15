$(function() {
  $('.sidemenu a').on('mouseover', function() {
    var body = $(this).attr('data-body');
    var src = $(this).attr('data-src');
    // console.log(body);
    $('#data-body').html(body);
    $('#header').css('background', 'url(' + src + ')');
  });
});

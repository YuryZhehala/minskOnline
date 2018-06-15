$(function() {
  var fx = {
    initModal: function() {
      if ($('.modal-window').length == 0) {
        $('<div>')
          .attr('id', 'overlay')
          .fadeIn('slow')
          .appendTo('body');
        return $('<div>')
          .addClass('modal-window')
          .appendTo('body');
      } else {
        return $('.modal-window');
      }
    },
  };
  $('.prod').click(function(e) {
    e.preventDefault();
    var data = $(this).attr('data-id');
    // console.log(data);
    modal = fx.initModal();
    $('<a>')
      .attr('href', '#')
      .addClass('modal-close-btn')
      .html('&times')
      .click(function(e) {
        e.preventDefault();
        modal.remove();
        $('#overlay').fadeOut('slow', function() {
          $(this).remove();
        });
      })
      .appendTo(modal);
    $.ajax({
      url: 'ajax.php',
      type: 'Post',
      data: 'id=' + data,
      success: function(data) {
        modal.append(data);
      },
    });
  });
});

$( document ).ready(function() {
  //quand on clique sur le logo
  $('#logo').on('click', function() {
    $('.acc').css('width', '100%');
  })

  //Quand on clique sur un des pan de l'accordeon
  $('.acc').on('click', function() {
      $('.acc').css('width', '0%');
      $('.acc')
      // $('.acc').hide();
      // $(this).show();
      $(this).css('width', '100%');
    })

});

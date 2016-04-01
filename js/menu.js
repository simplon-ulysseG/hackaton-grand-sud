$( document ).ready(function() {


  //POUR LE RESPONSIVE
  if ($(window).width() <= 600) {
    $('.titreAcc').addClass('bounceInLeft');
    //quand on clique sur le logo
    $('#logo').on('click', function() {
      $('.acc').css('height', '100%');
      //permet l'animation de retour
      $('.titreAcc').removeClass('bounceOutUp');
      $('.titreAcc').addClass('bounceInLeft');
      //on refixe les delay d'animation
      $('#acc1 .titreAcc').css('animation-delay', '0s');
      $('#acc2 .titreAcc').css('animation-delay', '.3s');
      $('#acc3 .titreAcc').css('animation-delay', '.6s');
    })

    //Quand on clique sur un des pan de l'accordeon
    $('.acc').on('click', function() {
        $('.acc').css('height', '0%'); //On ferme tout
        $(this).css('height', '100%'); //sauf celui qu'on selectionne

        $('.titreAcc').removeClass('bounceInLeft');
        $('.titreAcc').css('animation-delay', '1s');
        $('.titreAcc').addClass('bounceOutUp');
      })

  }


  else {
    $('.titreAcc').addClass('bounceInDown');
  //quand on clique sur le logo
  $('#logo').on('click', function() {
    $('.acc').css('width', '100%');
    //permet l'animation de retour
    $('.titreAcc').removeClass('bounceOutUp');
    $('.titreAcc').addClass('bounceInDown');
    //on refixe les delay d'animation
    $('#acc1 .titreAcc').css('animation-delay', '0s');
    $('#acc2 .titreAcc').css('animation-delay', '.3s');
    $('#acc3 .titreAcc').css('animation-delay', '.6s');
  })

  //Quand on clique sur un des pan de l'accordeon
  $('.acc').on('click', function() {
      $('.acc').css('width', '0%'); //On ferme tout
      $(this).css('width', '100%'); //sauf celui qu'on selectionne

      $('.titreAcc').removeClass('bounceInDown');
      $('.titreAcc').css('animation-delay', '1s');
      $('.titreAcc').addClass('bounceOutUp');
    })

    }

});

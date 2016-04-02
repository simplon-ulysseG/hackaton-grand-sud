$( document ).ready(function() {

$('.bio').hide();
$('.Artistes1').on('click', function() {
  if ($('.bio').is(':visible')) {
    $('.bio').hide();
    $('.description').html('Description: Cliquez pour en savoir plus !');
  }
  else {
    $('.bio').show();
    $('.description').html('Description:');

  }
})

});

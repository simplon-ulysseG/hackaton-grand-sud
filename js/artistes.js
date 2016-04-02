$( document ).ready(function() {

$('.bio').hide();
$('.Artistes1').on('click', function() {
  var id = this.id;
  if ($('#'+id+' .bio').is(':visible')) {
    $('#'+id+' .bio').hide();
    $('#'+id+' .description').html('Description: Cliquez pour en savoir plus !');
  }
  else {
    $('#'+id+' .bio').show();
    $('#'+id+' .description').html('Description:');

  }
})

});

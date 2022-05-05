$(document).ready(function(){
  
  $("#filtragem").on("change", function() {
    var value = $(this).val();
    console.log(value);
    
    if(value == 'all') {
      $('.item').fadeIn();
    }else {
      $('.item').hide();
      $('.item-selecionado-' + value).fadeIn();
    }
  });
});
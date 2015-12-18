
$(document).mouseup(function (e)
{
  var container = $(".login");

  if (!container.is(e.target) && container.has(e.target).length === 0) 
  {
      container.hide();
      $('#loginform').removeClass('ADF081');
  }
});


$('input[type="submit"]').mousedown(function(){ $(this).css('background', '#ADF081'); });

$('input[type="submit"]').mouseup(function(){ $(this).css('background', '#ADF081'); });

$('#loginform').click(function(){

  $('.login').fadeToggle('slow');
  $(this).toggleClass('ADF081');
});




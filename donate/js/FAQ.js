$(document).ready(function() {
  $('.answer').hide();

  $('.main h3').click(function() {
    $(this).next('.answer').slideToggle(300);
	
  });
  
  $('.container h4').click(function() {
    $(this).next('.answer').slideToggle(300);
  });

});
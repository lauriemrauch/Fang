// Menu toggle on mobile

jQuery(document).ready(function($) {
	$("#menu-main .menu-item").click(function() {
	   if($(this).hasClass("on"))
	   {
	      $(this).removeClass("on");
	      $(this).addClass("off");
	   }
	   else
	   {
	      $(this).addClass("on");
	      $(this).removeClass("off");
	   }
	});
});
/* SCROLLING NAVBAR */
(function ($) {
  $(document).ready(function(){

  	var OFFSET_TOP = 0;

		$(window).scroll(function () {
		  if ($('.navbar').length) {
		    if ($('.navbar').offset().top > OFFSET_TOP) {
		      $('.scrolling-navbar').addClass('navbar-show');
		    } else {
		      $('.scrolling-navbar').removeClass('navbar-show');
		    }
		  }
		});

		//Class applied to top level navbar when navbar-nav expanded
		$('#navbar').on('show.bs.collapse', function (e) {
		  $('#nav').addClass('show');
		})

		$('#navbar').on('hidden.bs.collapse', function (e) {
		  $('#nav').removeClass('show');
		})

		// //Navbar appears when pointer hovers over
		// $('.navbar').hover(
		//   function() {
		//   	$(this).addClass('navbar-show');
		//   },
		//   function() {
		//   	$(this).removeClass('navbar-show');
		//   }
		// );
	});
}(jQuery));




$(function() {
    "use strict";
	
     
	 $(document).ready(function () {
			 $("#respMenu").horizontalMenu({
				 resizeWidth: '1024', // Set the same in Media query
				 animationSpeed: 'fast', //slow, medium, fast
				 accoridonExpAll: false //Expands all the accordion menu on click
			 });
		 });
		 

// === toggle-menu js
$(".toggle-menu").on("click", function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });	 
	
	
	
	// === search bar 
	
	$(".search-btn-mobile").on("click", function(){
        $(".search-bar").addClass("full-search-bar");
    });	
	
	$(".search-arrow-back").on("click", function(){
        $(".search-bar").removeClass("full-search-bar");
    });
	
	
	   
// === sidebar menu activation js

$(function() {
        for (var i = window.location, o = $(".sidebar-menu a").filter(function() {
            return this.href == i;
        }).addClass("active").parent().addClass("active"); ;) {
            if (!o.is("li")) break;
            o = o.parent().addClass("in").parent().addClass("active");
        }
    }), 	   

 
/* Top Header */

$(document).ready(function(){ 
    $(window).on("scroll", function(){ 
        if ($(this).scrollTop() > 60) { 
            $('.top-wrapper').addClass('bg-dark'); 
        } else { 
            $('.top-wrapper').removeClass('bg-dark'); 
        } 
    });

 });


/* Back To Top */

$(document).ready(function(){ 
    $(window).on("scroll", function(){ 
        if ($(this).scrollTop() > 300) { 
            $('.back-to-top').fadeIn(); 
        } else { 
            $('.back-to-top').fadeOut(); 
        } 
    }); 

    $('.back-to-top').on("click", function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});	   
	   

  // page loader

    $(window).on('load', function(){

     $('#pageloader-overlay').fadeOut(1000);

    })  
   
   
	$(function () {
	  $('[data-toggle="popover"]').popover()
	})


	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})



	// mobile menu
	
	 $("#mobile-btn").on("click", function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("sidenav");
    });
	
	 
	$(".close-btn").on("click", function(e) {
        e.preventDefault();
        $("#wrapper").removeClass("sidenav");
    }); 
	
	$(".overlay").on("click", function(e) {
        e.preventDefault();
        $("#wrapper").removeClass("sidenav");
    }); 


	 // theme setting
	 $(".switcher-icon").on("click", function(e) {
        e.preventDefault();
        $(".right-sidebar").toggleClass("right-toggled");
    });
	
	$('#theme1').click(theme1);
    $('#theme2').click(theme2);
    $('#theme3').click(theme3);
    $('#theme4').click(theme4);
    $('#theme5').click(theme5);
    $('#theme6').click(theme6);
    $('#theme7').click(theme7);
    $('#theme8').click(theme8);
    $('#theme9').click(theme9);
    $('#theme10').click(theme10);
    $('#theme11').click(theme11);
    $('#theme12').click(theme12);
    $('#theme13').click(theme13);
    $('#theme14').click(theme14);
    $('#theme15').click(theme15);

    function theme1() {
      $('body').attr('class', 'bg-theme bg-theme1');
    }

    function theme2() {
      $('body').attr('class', 'bg-theme bg-theme2');
    }

    function theme3() {
      $('body').attr('class', 'bg-theme bg-theme3');
    }

    function theme4() {
      $('body').attr('class', 'bg-theme bg-theme4');
    }
	
	function theme5() {
      $('body').attr('class', 'bg-theme bg-theme5');
    }
	
	function theme6() {
      $('body').attr('class', 'bg-theme bg-theme6');
    }

    function theme7() {
      $('body').attr('class', 'bg-theme bg-theme7');
    }

    function theme8() {
      $('body').attr('class', 'bg-theme bg-theme8');
    }

    function theme9() {
      $('body').attr('class', 'bg-theme bg-theme9');
    }

    function theme10() {
      $('body').attr('class', 'bg-theme bg-theme10');
    }

    function theme11() {
      $('body').attr('class', 'bg-theme bg-theme11');
    }

    function theme12() {
      $('body').attr('class', 'bg-theme bg-theme12');
    }
	
	function theme13() {
      $('body').attr('class', 'bg-theme bg-theme13');
    }
	
	function theme14() {
      $('body').attr('class', 'bg-theme bg-theme14');
    }
	
	function theme15() {
      $('body').attr('class', 'bg-theme bg-theme15');
    }




});
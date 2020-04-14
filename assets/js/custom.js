jQuery(document).ready(function($) {

/*------------------------------------------------
            DECLARATIONS
------------------------------------------------*/

    var scroll = $(window).scrollTop();  
    var scrollup = $('.backtotop');
    var menu_toggle = $('.menu-toggle');
    var nav_menu = $('.main-navigation ul.nav-menu');
    var testimonial_slider = $('.testimonial-slider-wrapper');
    var featured_slider = $('.featured-slider-wrapper');
    var posts_height = $('.blog-posts-wrapper article .post-item');

/*------------------------------------------------
            BACK TO TOP
------------------------------------------------*/

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            scrollup.css({bottom:"25px"});
        } 
        else {
            scrollup.css({bottom:"-100px"});
        }
    });

    scrollup.click(function() {
        $('html, body').animate({scrollTop: '0px'}, 800);
        return false;
    });


    $( "li.menu-item" ).hover(function() {  // mouse enter
        $( this ).find( " > .sub-menu" ).show(); // display immediate child
    
    }, function(){ // mouse leave
        if ( !$(this).hasClass("current_page_item") ) {  // check if current page
            $( this ).find( ".sub-menu" ).hide(); // hide if not current page
        }
    });
/*------------------------------------------------
            MAIN NAVIGATION
------------------------------------------------*/

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();  
        if (scroll > 1) {
            $("#masthead").addClass("nav-shrink");
        }
        else {
             $("#masthead").removeClass("nav-shrink");
        }
    });

    menu_toggle.click(function(){
        nav_menu.slideToggle();
    });

    $('.main-navigation .nav-menu .menu-item-has-children > a').after( $('<button class="dropdown-toggle"><i class="fa fa-angle-down"></i></button>') );

    $('button.dropdown-toggle').click(function() {
        $(this).toggleClass('active');
       $(this).parent().find('.sub-menu').first().slideToggle();
    });

/*------------------------------------------------
            SLICK SLIDER
------------------------------------------------*/

    featured_slider.slick();
    testimonial_slider.slick();
    
/*------------------------------------------------
            MATCH HEIGHT
------------------------------------------------*/

    posts_height.matchHeight();
    $('.additional-info-item').matchHeight();
    $('#testimonial article').matchHeight();

/*------------------------------------------------
                END JQUERY
------------------------------------------------*/
/*Custom*/
$('.carousel').carousel();
$('.copy-right').innerText = "Copyright © All rights reserved. Prithak Creation";

});
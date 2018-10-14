jQuery(document).ready(function($){

    // testimonial slider
    $(document).ready(function() {

    /** Variables from Customizer for testimonial settings */

    if( restaurant_and_cafe_data.pager == '1' ){
        var testimonial_control = true;
    }else{
        testimonial_control = false;
    }

    if( restaurant_and_cafe_data.loop == '1' ){
        var slider_loop = true;
    }else{
        var slider_loop = false;
    }

    if( restaurant_and_cafe_data.rtl == '1' ){
        var rtl = true;
    }else{
       var rtl = false;
    }

    if( restaurant_and_cafe_data.animation == 'slide' ){
        var animation = false;
    }else{
       var animation = true;
    }
    $('#testimonial-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: testimonial_control,
      fade: animation,
      asNavFor: '#testimonial-slider-nav',
      autoplaySpeed: restaurant_and_cafe_data.speed, //ms'
      autoplay: restaurant_and_cafe_data.auto,
      infinite: slider_loop,
      rtl : rtl,
      draggable: false,
    });
    $('#testimonial-slider-nav').slick({
      slidesToShow: 7,
      slidesToScroll: 1,
      asNavFor: '#testimonial-slider',
      dots: false,
      arrows: false,
      focusOnSelect: true, 
      draggable: false,
      responsive : [
            {
                breakpoint:991,
                settings: {
                    slidesToShow:5,
                  }
            },
            {
                breakpoint:600,
                settings: {
                    slidesToShow:3,
                  }
            }
        ],
    });
    });


    // scrolling down
    $(document).ready(function(){
        $(".btn-scroll-down > span").click(function() {
            $('html, body').animate({
                scrollTop: $("#next_section").offset().top
            }, 1000);
        });
    });

    // responsive menu
    $('#responsive-menu-button').sidr({
          name: 'sidr-main',
          source: '#site-navigation',
          side: 'right'
    });


    $('.tabs li').click(function(){
           id = $(this).attr('id').split('-').pop();
           $('.tab-content').hide();
           $('#content-'+id).show();
           $('.tabs li').removeClass('active');
           $(this).addClass('active');
           //console.log(id); 
    });


});
var locations;
var banner_autoplay;

jQuery( window ).load(function() {
    jQuery( "body" ).addClass('loaded');
});


jQuery(document).ready(function(){

  //mobile menu
  jQuery("#open-responsive-menu").click(function(event){
      event.preventDefault();
      jQuery("#responsive-menu").toggleClass("is_open");
  });

  create_home_slider();
  create_customer_slider();
  create_service_slider();
  create_page_slider();


  var window_width = jQuery( window ).width();
  if(jQuery("#contact_map").length) {
    init_google_map();
  }

  var col_9 = jQuery('.about_sec .about_col_9').height();
  var col_3 = jQuery('.about_sec .about_col_3').height();

  if (col_9 > col_3) {
    jQuery('.about_sec .about_col_9').addClass('border_left');
    jQuery('.about_sec .about_col_3').removeClass('border_right');
  } else {
    jQuery('.about_sec .about_col_3').addClass('border_right');
    jQuery('.about_sec .about_col_9').removeClass('border_left');
  }


  jQuery( ".search_btn" ).click(function(e) {
    e.preventDefault();
    jQuery( ".search_div" ).slideToggle( "fast", function() {
      // Animation complete.
    });
  });

  jQuery('.share_sidebar_inner a').click(function() {
   // var social_title = jQuery(this).data('title');
    var social_img = jQuery(this).data('img');
    jQuery('meta[property="og:image"]').attr('content', social_img);
  });

  jQuery('.gallery').magnificPopup({
      delegate: 'a',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          console.log();
          return '<small>'+item.el.data("title")+'</small>';
        }
      }
  });

  jQuery('.logo_box a').click(function(e) {
    var url = jQuery(this).data('url');
    if (url === false) {
      e.preventDefault();
    }
  });

  jQuery('.slick_pause a').click(function(e) {
      e.preventDefault();
      jQuery('.page_banner_wrap-element').slick('slickPause');
  });

	jQuery(document).foundation();

});


function create_home_slider(){
  jQuery('.home_banner_wrap').on('init', function(event, slick){
    jQuery("button.pause").insertBefore('.slick-dots li:first-child');
    jQuery("button.play").insertBefore('button.pause');
    jQuery("button.prev").insertBefore('button.play');
    jQuery("button.next").insertAfter('.slick-dots li:last-child');

  });
  //, .page_banner_wrap
  home_slider = jQuery(".home_banner_wrap");
  home_slider.slick({
    infinite: true,
    speed: 500,
    autoplay: banner_autoplay,
    fade: true,
    rtl: true,
    dots: true,
    customPaging: function(slider, i) {
        // this example would render "tabs" with titles
        return '<button class="tab123"></button>';
      },
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    focusOnSelect: false,
    arrows: true,
    prevArrow: '<div class="carousel-prev carousel-arr"></div>',
    nextArrow: '<div class="carousel-next carousel-arr"></div>',
    appendArrows : '.slick-dots',
    responsive: [
      {
        breakpoint: 767,
        settings: {
          arrows:false,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          dots:false,
          slidesToShow: 1
        }
      }
    ]
  });
  jQuery('.pause').on('click', function() {
      jQuery('.home_banner_wrap')
          .slick('slickPause')
          .slick('slickSetOption', 'pauseOnDotsHover', false);
  });

  jQuery('.play').on('click', function() {
      jQuery('.home_banner_wrap')
          .slick('slickPlay')
          .slick('slickSetOption', 'pauseOnDotsHover', true);
  });

  jQuery('button.next').click(function(){
      jQuery(".home_banner_wrap").slick('slickNext');
  });

  jQuery('button.prev').click(function(){
      jQuery(".home_banner_wrap").slick('slickPrev');
  });
}

function create_page_slider(){
  page_slider = jQuery(".page_banner_wrap");
  page_slider.slick({
    infinite: true,
    speed: 500,
    autoplay: banner_autoplay,
    fade: true,
    rtl: true,
    dots: false,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    focusOnSelect: false,
    arrows: true,
    prevArrow: '<div class="carousel-prev carousel-arr"></div>',
    nextArrow: '<div class="carousel-next carousel-arr"></div>',
    responsive: [
      {
        breakpoint: 767,
        settings: {
          arrows:false,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          dots:false,
          slidesToShow: 1
        }
      }
    ]
  });
}

function create_service_slider(){
  home_slider = jQuery(".service_slider");
  home_slider.slick({
    infinite: true,
    speed: 500,
    autoplay: false,
    fade: false,
    rtl: true,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    focusOnSelect: false,
    arrows: true,
    prevArrow: '<div class="carousel-prev carousel-arr"></div>',
    nextArrow: '<div class="carousel-next carousel-arr"></div>',
    responsive: [
      {
        breakpoint: 767,
        settings: {
          arrows:false,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          dots:false,
          slidesToShow: 1
        }
      }
    ]
  });
}

function create_customer_slider(){
  service_slider = jQuery(".customer_slider");
  service_slider.slick({
    infinite: true,
    speed: 500,
    autoplay: true,
    fade: false,
    rtl: true,
    autoplaySpeed: 2000,
    slidesToShow: 7,
    slidesToScroll: 1,
    focusOnSelect: false,
    arrows: true,
    prevArrow: '<div class="carousel-prev carousel-arr"></div>',
    nextArrow: '<div class="carousel-next carousel-arr"></div>',
    responsive: [
        {
          breakpoint: 991,
          settings: {
            arrows:false,
            slidesToShow: 3
          }
        },
        {
            breakpoint: 767,
            settings: {
              arrows:false,
              slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
              dots:false,
              slidesToShow: 1
            }
        }
    ]
  });
}

function fix_top_menu() {
   var window_width = jQuery( window ).width();
    if (window_width > 640) {
     //  console.log('bigeerrr 640');
      jQuery( ".bg_image" ).insertBefore( "nav" );
    }

    else{
      // console.log('640');
       jQuery( "nav" ).insertBefore( ".bg_image" );
    }
}

function init_google_map(){
  if(locations && typeof locations !='undefined'){
      map = new google.maps.Map(document.getElementById('contact_map'), {
        zoom: 18,
        center: new google.maps.LatLng(locations[1],locations[2])
      });
      marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[1], locations[2]),
      map: map,
      animation: google.maps.Animation.DROP
      });
  }
}

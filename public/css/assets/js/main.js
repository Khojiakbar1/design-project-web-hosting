$(document).ready(function(){ 
  $(window).scroll(function(){ 
    if ($(this).scrollTop() > 100) { 
      $('#scroll').fadeIn(); 
    } else { 
      $('#scroll').fadeOut(); 
    }
  });

    var body = $('.body');
    var burgerMenu = $('.b-menu');
    var burgerContain = $('.b-container');
    var burgerNav = $('.b-nav');

    burgerMenu.on('click', function(e) {
      e.preventDefault();
      burgerContain.toggleClass('open');
      burgerNav.toggleClass('open');
    });

  $('#scroll').click(function(){ 
    $("html, body").animate({ scrollTop: 0 }, 600); 
    return false; 
  });     

  $(".scrollDown").on("click", function( e ) {
    e.preventDefault();
    $("body, html").animate({ 
      scrollTop: $( $(this).attr('href') ).offset().top 
    }, 600);
  });
 

  var curlang = $('li.dropdown.lang ul.dropdown-menu li span').text();
  $('li.dropdown.lang>a').text(curlang);

  $('.btn-a').click(function(){
    $('.header-page').toggleClass("host-open", function(){

    });

  });

  $('.link.host a').on('click', function(){
    $('.reason-text').slideToggle();
  })


    $('.slick-eskiz').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1280,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });


    $('.slick-partner').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1170,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 6,
            infinite: true
          }
        },
        {
          breakpoint: 1074,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 5,
            infinite: true
          }
        },
        {
          breakpoint: 884,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true
          }
        },
        {
          breakpoint: 780,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 460,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

    $('a.nav02').on('shown.bs.tab', function (e) {
      $('.slick-client').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 7,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1170,
            settings: {
              slidesToShow: 6,
              slidesToScroll: 6,
              infinite: true
            }
          },
          {
            breakpoint: 1074,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 5,
              infinite: true
            }
          },
          {
            breakpoint: 884,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
              infinite: true
            }
          },
          {
            breakpoint: 780,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 460,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });    
    });

});

    
var extraConsulting = 0;
var extraFire = 0;
var extraSecurity = 0;
var extraBolt = 0;

(function($){ //códígo home page e header

  if ($(window).width() <768) {//Programação para dispositivos mobile
    //variaveis
    var headerHeight = $('.mobile-header').height();


    $('.header-distance').css('margin-top', headerHeight+50);
    //mobile header side
    $(window).scroll(function(){//making a fixed header
      if($(this).scrollTop() > headerHeight){
              $('.header-mobile').addClass("fixed-header");
      }else{
              $('.header-mobile').removeClass("fixed-header");
      }
    });

    $('.switch-header-mobile').click(function(event) {
      $('.header-menu').addClass('actived');
      $('.rollback-area').addClass('shown');
      $('.mobile-header').addClass('hidden');
    });
    $('.rollback').click(function(event) {
      $('.header-menu').removeClass('actived');
      $('.rollback-area').removeClass('shown');
      $('.mobile-header').removeClass('hidden');
    });

  }
  else {// programação para desktops
    var headerHeight = $('.header').height() - $('.header-menu').height();
    $('.header-distance').css('margin-top', headerHeight+100);
    $(window).scroll(function(){
      if($(this).scrollTop() > headerHeight){
              $('.header-menu').addClass("fixed-header");
      }else{
              $('.header-menu').removeClass("fixed-header");
      }

    });
  }
})(jQuery);
(function($){//about page code
  var hmin = $(window).height() - $('.page-reference').height();
  $('.about-item').each(function(index, el) {
    $(this).css('min-height', hmin);

  });
    $('.menu-item').click(function(event) {
      var target = $(this).attr('data-target');
      $('.menu-item').each(function(index, el) {
        $(this).removeClass('actived');
      });
      $('.about-item').each(function(index, el) {
        $(this).css('display', 'none').removeClass('actived');
      });
      $(this).addClass('actived');
      $(target).css('display', 'flex');
      setTimeout(function(){
        $(target).addClass('actived');
      }, 200);
    });

})(jQuery);

(function($) {
    $(window).scroll( function () {
        return servicesScroll();
    });

    $(".dropdown").click( function() {
        if( $(this).hasClass("actived") ) {

            $(this).removeClass("actived");

            return setTimeout(function() {
                return servicesScroll();
            }, 251);
        }

        $(".dropdown").removeClass("actived");
        $(this).addClass("actived");

        return setTimeout(function() {
            return servicesScroll();
        }, 251);
    });


    function servicesScroll() {
        var consulting = $("#consulting");
        var fire = $("#fire");
        var security = $("#security");
        var bolt = $("#bolt");

        var additionalHeight = 0;

        var consultingTop = consulting.offset().top;
        var fireTop = fire.offset().top;
        var securityTop = security.offset().top;
        var boltTop = bolt.offset().top;

        var consultingHeight = consulting.outerHeight();
        var fireHeight = fire.outerHeight();
        var securityHeight = security.outerHeight();
        var boltHeight = bolt.outerHeight();

        var consultingBottom = consultingTop + consultingHeight;
        var fireBottom = fireTop + fireHeight;
        var securityBottom = securityTop + securityHeight;
        var boltBottom = boltTop + boltHeight;

        var windowBottom = $(window).scrollTop() + $(window).height();

        /**
         * TODA ESSA PARTE É APENAS PARA QUANDO A ROLAGEM
         * FOR PARA BAIXO.
         */

        if (windowBottom > consultingBottom) {
            consulting.css({
                position: 'fixed',
                top: 'auto',
                bottom: 0
            });

            fire.css({
                position: 'absolute',
                top: consultingHeight + additionalHeight,
                bottom: 'auto'
            });

            security.css({
                position: 'absolute',
                top: consultingHeight + fireHeight + additionalHeight,
                bottom: 'auto'
            });

            bolt.css({
                position: 'absolute',
                top:  consultingHeight + fireHeight + securityHeight + additionalHeight,
            });
        }

        if(windowBottom > fireBottom) {
            fire.css({
                position: 'fixed',
                top: 'auto',
                bottom: 0
            });

            security.css({
                position: 'absolute',
                top: consultingHeight + fireHeight + additionalHeight,
                bottom: 'auto'
            });

            bolt.css({
                position: 'absolute',
                top:  consultingHeight + fireHeight + securityHeight + additionalHeight,
            });
        }

        if (windowBottom > securityBottom) {
            security.css({
                position: 'fixed',
                top: 'auto',
                bottom: 0
            });

            bolt.css({
                position: 'absolute',
                top:  consultingHeight + fireHeight + securityHeight + additionalHeight,
            });
        }

        /**
         * AGORA É PARA QUANDO
         * A ROLAGEM
         * É PARA CIMA
         */

        if(windowBottom <= boltTop) {
            security.css({
                position: 'absolute',
                top: consultingHeight + fireHeight + additionalHeight,
                bottom: 'auto',
            });
        }

        if(windowBottom <= securityTop) {
            fire.css({
                position: 'absolute',
                top: consultingHeight + additionalHeight,
                bottom: 'auto'
            });
        }

        if(windowBottom <= fireTop) {
            consulting.css({
                position: 'initial'
            });
        }
    }
})(jQuery);
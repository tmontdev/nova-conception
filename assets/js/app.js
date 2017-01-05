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
  var hmin = $(window).height() - $('.about').offset().top;
  if ($(window).width() >768) {hmin = hmin + 20;  }
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

(function($){//services page code
  var osFixed = $('.page-reference').height();
  alert(osFixed);
})(jQuery);

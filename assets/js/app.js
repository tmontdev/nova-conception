(function($){
  if ($(window).width() <768) {//Programação para dispositivos mobile
    //variaveis
    var headerHeight = $('.mobile-header').height();
    $('.header-distance').css('margin-top', headerHeight+50);
    //mobile header
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
  else {
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

(function($){

  $(".home-slider").slick({
    autoplay:true,
    autoplaySpeed:10000,
    speed:600,
    slidesToShow:1,
    slidesToScroll:1,
    pauseOnHover:false,
    dots:false,
    pauseOnDotsHover:true,
    fade:false,
    draggable:true,
    prevArrow:'.controllers .previous',
    nextArrow:'.controllers .next',
  });

})(jQuery);

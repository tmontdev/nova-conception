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

(function ($){//services page code

  //SCDROLL FIXO / ABSOLUTO
	var anti_bug = 80; //padding do
	var prh = $('.page-reference').height(); //altura do cabeçalho
  var mt = 0;
  if ($(window).width()>768) {
    mt= $('.header-menu').height();

  } else {
    mt = $('.mobile-header').height();
  }

var obvious = 100 + mt;

	var consultingH=  $('#consulting').height() + obvious;
	var fireH =  $('#fire').height() + anti_bug;
	var securityH =  $('#security').height() + anti_bug;
	var boltH =  $('#bolt').height() + anti_bug;


	var initialConsulting = 0;
	var initialFire =  consultingH;
	var initialSecurity =  consultingH+ fireH ;
	var initialBolt =  consultingH+ fireH + securityH ;

	atualConsulting = initialConsulting + prh;
	atualFire = initialFire + prh;
	atualSecurity = initialSecurity + prh;
	atualBolt = initialBolt + prh;

	$('#consulting').css({'top' : initialConsulting });
	$('#fire').css({'top' : initialFire });
	$('#security').css({'top' : initialSecurity });
	$('#bolt').css({'top' : initialBolt });


	var window_h = $(window).height() ;

	osConsulting = consultingH- window_h;
	osFire = fireH - window_h;
	osSecurity = securityH - window_h;
	osBolt = boltH - window_h;

	osConsulting_ = osConsulting;
	osFire_ = osFire;
	osSecurity_ = osSecurity;
	osBolt_ = osBolt;

	if (osConsulting < 0 ) { atualConsulting = initialConsulting + (osConsulting  * -1); osConsulting_ = 0 }
	if (osFire < 0 ) { atualFire = initialFire + (osFire  * -1); osFire_ = 0 }
	if (osSecurity < 0 ) { atualSecurity = initialSecurity + (osSecurity  * -1); osSecurity_ = 0 }
	if (osBolt < 0 ) { atualBolt = initialBolt + (osBolt  * -1); osBolt_ = 0 }

	function resize() {

        osConsulting = consultingH- window_h;
        osFire = fireH - window_h;
        osSecurity = securityH - window_h;
        osBolt = boltH - window_h;

        osConsulting_ = osConsulting;
        osFire_ = osFire;
        osSecurity_ = osSecurity;
        osBolt_ = osBolt;

        if (osConsulting < 0 ) { atualConsulting = initialConsulting + (osConsulting  * -1); osConsulting_ = 0 }
        if (osFire < 0 ) { atualFire = initialFire + (osFire  * -1); osFire_ = 0 }
        if (osSecurity < 0 ) { atualSecurity = initialSecurity + (osSecurity  * -1); osSecurity_ = 0 }
        if (osBolt < 0 ) { atualBolt = initialBolt + (osBolt  * -1); osBolt_ = 0 }

        var window_h = $(window).height() ;

        osConsulting = consultingH- window_h + extraConsulting;
        osFire = fireH - window_h + extraFire;
        osSecurity = securityH - window_h + extraSecurity;
        osBolt = boltH - window_h + extraBolt;

        osConsulting_ = osConsulting;
        osFire_ = osFire;
        osSecurity_ = osSecurity;
        osBolt_ = osBolt;

        if (osConsulting < 0 ) { atualConsulting = initialConsulting + (osConsulting  * -1); osConsulting_ = 0 }
        if (osFire < 0 ) { atualFire = initialFire + (osFire  * -1); osFire_ = 0 }
        if (osSecurity < 0 ) { atualSecurity = initialSecurity + (osSecurity  * -1); osSecurity_ = 0 }
        if (osBolt < 0 ) { atualBolt = initialBolt + (osBolt  * -1); osBolt_ = 0 }

        fckingScroll();
    }

	$(window).resize(function() {

	    resize();
	});

	//scroll to dos links
	//define onde é o top de cada um dos elementos
	var tops = new Array();
	tops[0] = prh + 0; //home
	tops[1] = prh + initialFire;
	tops[2] = prh + initialSecurity;
	tops[3] = prh + initialBolt;

    $('.dropdown').click(function(event) {
        extraConsulting = 0;
        extraFire = 0;
        extraSecurity = 0;
        extraBolt = 0;
        if($(this).hasClass('actived')){
            return $(this).removeClass('actived');
        }
        var _this = this;
        $('.dropdown').each(function(index, el) {
            $(this).removeClass('actived');
        });

        $(this).addClass('actived');

        setTimeout(function(){
            Extra = $(_this).find('.service-post-body').height();


            if($(_this).closest('#consuting').length > 0){
                extraConsulting = Extra;
            }
            if($(_this).closest('#fire').length > 0){
                extraFire = Extra;
            }
            if($(_this).closest('#security').length > 0){
                extraSecurity = Extra;
            }
            if($(_this).closest('#bolt').length > 0){
                extraBolt = Extra;
            }

            resize();
        }, 250)

    });

    function fckingScroll()
    {
        if ($(this).scrollTop() > prh - mt) {
            $('.services-menu').css('position', 'fixed').css('top', 15 + mt);
        }
        else{
            $('.services-menu').css('position', 'absolute').css('top', 15);
        }


        var pos = $(window).scrollTop();
        posConsulting = ( pos - consultingH) + mt + window_h + extraConsulting;
        posFire = ( pos - consultingH) + mt + window_h +extraFire;
        posSecurity = ( pos - fireH) + mt + window_h + extraSecurity;
        posBolt = ( pos - securityH) + mt + window_h +extraBolt;

        if(navigator.appVersion.indexOf("MSIE")==-1) { //se nao for ie

            //altera o display da section de absolute para fixed, dependendo da posicao e do tamanho da section
            if (posFire >= atualConsulting ) { $('#consulting').css({'position': 'fixed', 'top' : -osConsulting + mt}); }
            else { $('#consulting').css({'position': 'absolute', 'top' : initialConsulting }); }

            if (posSecurity >= atualFire ) { $('#fire').css({'position': 'fixed', 'top' : -osFire_}); }
            else { $('#fire').css({'position': 'absolute', 'top' : initialFire - mt});  }

            if (posBolt >= atualSecurity ) $('#security').css({'position': 'fixed', 'top' : -osSecurity_});
            else $('#security').css({'position': 'absolute', 'top' : initialSecurity - mt});
        }

        //muda a img do link no menu
        var middleheight = $(window).height()/2;
        if ( pos < tops[1]) {
            $('.menu-button').each(function(index, el) {
                $(this).removeClass('actived');
            });
            $('#consulting-button').addClass("actived");}
        else { $('#consulting-button').removeClass("actived"); }

        if ( ( pos >= tops[1]-middleheight ) && ( pos < tops[2] ) ) {
            $('.menu-button').each(function(index, el) {
                $(this).removeClass('actived');
            });
            $('#fire-button').addClass("actived"); }
        else { $('#fire-button').removeClass("actived");  }

        if ( ( pos >= tops[2]-middleheight ) && ( pos < tops[3] ) ) {
            $('.menu-button').each(function(index, el) {
                $(this).removeClass('actived');
            });
            $('#security-button').addClass("actived"); }
        else { $('#security-button').removeClass("actived"); }

        if (pos >= tops[3]-middleheight) {
            $('.menu-button').each(function(index, el) {
                $(this).removeClass('actived');
            });
            $('#bolt-button').addClass("actived"); }
        else { $('#bolt-button').removeClass("actived"); }
    }

	// funcoes durante o scroll
	$(window).scroll(function(e){
	    fckingScroll();
	});

$('.menu-button').click(function(event) {
  var pos = $(window).scrollTop(); //posição atual
  var target = $(this).attr('data-target');
  var distance = 0;
  posConsulting = ( pos - consultingH) +mt ;
  posFire = ( pos - consultingH) + mt;
  posSecurity = ( pos - fireH) + mt ;
  posBolt = ( pos - securityH) + mt;
  if($(this).hasClass('consulting-button')){
    distance = initialConsulting +prh -mt;
  }
  if($(this).hasClass('fire-button')){
    distance = initialFire +prh -mt -mt;
  }
  if($(this).hasClass('security-button')){
    distance = initialSecurity +prh -mt -mt;
  }
  if($(this).hasClass('bolt-button')){
    distance =initialBolt +prh -mt;
  }

  $('html, body').animate({
        scrollTop: distance
      }, 1000);
});

})(jQuery);


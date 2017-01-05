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
  var hmin = $(window).height() - $('.about').offset.top;
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

  //SCDROLL FIXO / ABSOLUTO
	var anti_bug = 80; //padding do
	var prh = $('.page-reference').height(); //altura do cabeçalho

	var consultingH=  $('#consulting').height() + 100;
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

	$(window).resize(function() {

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
	});

	//scroll to dos links
	//define onde é o top de cada um dos elementos
	var tops = new Array();
	tops[0] = prh + 0; //home
	tops[1] = prh + initialFire;
	tops[2] = prh + initialSecurity;
	tops[3] = prh + initialBolt;


	// funcoes durante o scroll
	$(window).scroll(function(e){


		var pos = $(window).scrollTop();
		posConsulting = ( pos - consultingH) + prh + window_h;
		posFire = ( pos - consultingH) + prh + window_h;
		posSecurity = ( pos - fireH) + prh + window_h;
		posBolt = ( pos - securityH) + prh + window_h;

		if(navigator.appVersion.indexOf("MSIE")==-1) { //se nao for ie

			//altera o display da section de absolute para fixed, dependendo da posicao e do tamanho da section
			if (posFire >= atualConsulting ) { $('#consulting').css({'position': 'fixed', 'top' : -osConsulting_}); }
			else { $('#consulting').css({'position': 'absolute', 'top' : initialConsulting}); }

			if (posSecurity >= atualFire ) { $('#fire').css({'position': 'fixed', 'top' : -osFire_}); }
			else { $('#fire').css({'position': 'absolute', 'top' : initialFire});  }

			if (posBolt >= atualSecurity ) $('#security').css({'position': 'fixed', 'top' : -osSecurity_});
			else $('#security').css({'position': 'absolute', 'top' : initialSecurity});
		}

		//muda a img do link no menu
		if ( ( pos >= tops[0] ) && ( pos < tops[1] ) ) { $('#consulting-button').addClass("actived");}
		else { $('#consulting-button').removeClass("actived"); }

		if ( ( pos >= tops[1] ) && ( pos < tops[2] ) ) { $('#fire-button').addClass("actived"); }
		else { $('#fire-button').removeClass("actived");  }

		if ( ( pos >= tops[2] ) && ( pos < tops[3] ) ) { $('#security-button').addClass("actived"); }
		else { $('#security-button').removeClass("actived"); }

		if ( ( pos >= tops[3] ) && ( pos < tops[4] ) ) { $('#bolt-button').addClass("actived"); }
		else { $('#bolt-button').removeClass("actived"); }
	});



	//scroll to dos links
	//define onde é o top de cada um dos elementos
	var tops = new Array();
	tops[0] = prh + 0; //home
	tops[1] = prh + initialFire;
	tops[2] = prh + initialSecurity;
	tops[3] = prh + initialBolt;

	$('.menu-button').click(function(event) {
		$('.menu-button').each(function(index, el) {
			$(this).removeClass('actived');
		});
		$(this).addClass('actived');
		var target = $(this).attr('data-target');

	});

})(jQuery);

$(document).ready(function(){
	// ANIMACIONES
	$('.loader img').css({
		"opacity": "1",
		"transform": "translate(0px, 0px)",
		"-moz-transform": "translate(0px, 0px)",
		"-webkit-transform": "translate(0px, 0px)"
	});
	setTimeout(function(){
		$('.loader img').css({
			"opacity": "0"
		});
		$('.loader').css({
			"height": "0%"
		});
		setTimeout(function(){
			$('header').css({
				"width": "100%"
			});
			$('.loader img').css({
				"display": "none"
			});
		},350);
		setTimeout(function(){
			$('.text1').addClass('text1--2-on');
			setTimeout(function(){
				$('.text2').addClass('text1--2-on');
				setTimeout(function(){
					$('.text3').addClass('text3--on');
				},1000);
				$('.p-alto').addClass('text--action');
				setTimeout(function(){
					setTimeout(function(){
						$('.descubre').addClass('text--action');
						setTimeout(function(){
							$('.thumb1').addClass('thumbaso');
							setTimeout(function(){
								$('.thumb2').addClass('thumbaso');
							},500);
						},500);
					},500);
				},500);
			},500);
		},500);
	},1400);
	// PAROLLEX SCROLL PLUGIN
	$("#home").paroller();
	// menu mobil
	$('.hamburguesa').click(function(){
		$('.menu_mob').toggleClass('menu_mobOn');
		$('.nav-1').toggleClass('nav-1-on');
		$('.pan').toggleClass('panOnDeg');
		$('.carne').toggleClass('carneOf');
		$('.queso').toggleClass('quesoOnDeg');
		$('.shadow-mob').toggleClass('shadow-mobOn');
	});
	$('.shadow-mob').click(function(){
		$('.menu_mob').removeClass('menu_mobOn');
		$('.nav-1').removeClass('nav-1-on');
		$('.pan').removeClass('panOnDeg');
		$('.carne').removeClass('carneOf');
		$('.queso').removeClass('quesoOnDeg');
		$('.shadow-mob').removeClass('shadow-mobOn');
	});
	$('a.soft').click(function(){
		setTimeout(function(){
			$('.menu_mob').removeClass('menu_mobOn');
			$('.nav-1').removeClass('nav-1-on');
			$('.pan').removeClass('panOnDeg');
			$('.carne').removeClass('carneOf');
			$('.queso').removeClass('quesoOnDeg');
			$('.shadow-mob').removeClass('shadow-mobOn');
		},1000);
	});
	// scroll soft
    $('a.soft').on('click', function(event) {
        var target = $( $(this).attr('href') );
        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
	// BOTONERA PROYECTOS
	$('.select_propio').change(function(){
		if($(this).val() == 'depa_a') {
			$('.pro1').addClass('proOn');
			$('.pro1').removeClass('proOff');
			$('.pro2,.pro3,.pro4,.pro5,.pro6,.pro7').addClass('proOff');
			$('.pro2,.pro3,.pro4,.pro5,.pro6,.pro7').removeClass('proOn');
		}
		if ($(this).val() == 'depa_b1') {
			$('.pro2').addClass('proOn');
			$('.pro2').removeClass('proOff');
			$('.pro1,.pro3,.pro4,.pro5,.pro6,.pro7').addClass('proOff');
			$('.pro1,.pro3,.pro4,.pro5,.pro6,.pro7').removeClass('proOn');
		}
		if ($(this).val() == 'depa_b2') {
			$('.pro3').addClass('proOn');
			$('.pro3').removeClass('proOff');
			$('.pro2,.pro1,.pro4,.pro5,.pro6,.pro7').addClass('proOff');
			$('.pro2,.pro1,.pro4,.pro5,.pro6,.pro7').removeClass('proOn');
		}
		if ($(this).val() == 'depa_c1') {
			$('.pro4').addClass('proOn');
			$('.pro4').removeClass('proOff');
			$('.pro1,.pro3,.pro2,.pro5,.pro6,.pro7').addClass('proOff');
			$('.pro1,.pro3,.pro2,.pro5,.pro6,.pro7').removeClass('proOn');
		}
		if ($(this).val() == 'depa_c3') {
			$('.pro5').addClass('proOn');
			$('.pro5').removeClass('proOff');
			$('.pro1,.pro2,.pro4,.pro3,.pro6,.pro7').addClass('proOff');
			$('.pro1,.pro2,.pro4,.pro3,.pro6,.pro7').removeClass('proOn');
		}
		if ($(this).val() == 'depa_d') {
			$('.pro6').addClass('proOn');
			$('.pro6').removeClass('proOff');
			$('.pro2,.pro3,.pro4,.pro1,.pro5,.pro7').addClass('proOff');
			$('.pro2,.pro3,.pro4,.pro1,.pro5,.pro7').removeClass('proOn');
		}
		if ($(this).val() == 'depa_e') {
			$('.pro7').addClass('proOn');
			$('.pro7').removeClass('proOff');
			$('.pro2,.pro3,.pro4,.pro1,.pro6,.pro5').addClass('proOff');
			$('.pro2,.pro3,.pro4,.pro1,.pro6,.pro5').removeClass('proOn');
		}
	});
	//BTN FIXED
	$(window).scroll(function(event){
		if( $(window).scrollTop() == 0 ) {
			//console.log('top');
			$('.ticket').addClass('ticket_on');
			$('.btn-fixed').removeClass('btn-fix-on');
		}
		if( $(window).scrollTop()) {
			//console.log('top');
			$('.btn-fixed').addClass('btn-fix-on');
		}
	});

	// funcion si es visible un elemento
	function isScrolledIntoView(elem)
	{
	    var docViewTop = $(window).scrollTop();
	    var docViewBottom = docViewTop + $(window).height();

	    var elemTop = $(elem).offset().top;
	    var elemBottom = elemTop + $(elem).height();

	    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
	}

	function Utils() {

	}

	Utils.prototype = {
	    constructor: Utils,
	    isElementInView: function (element, fullyInView) {
	        var pageTop = $(window).scrollTop();
	        var pageBottom = pageTop + $(window).height();
	        var elementTop = $(element).offset().top;
	        var elementBottom = elementTop + $(element).height();

	        if (fullyInView === true) {
	            return ((pageTop < elementTop) && (pageBottom > elementBottom));
	        } else {
	            return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
	        }
	    }
	};

	var Utils = new Utils();

	$(window).scroll(function(){

		var home = Utils.isElementInView($('#home'), false);
		var contmosaico = Utils.isElementInView($('.contmosaico'), false);
		var thumb3 = Utils.isElementInView($('.thumb3'), false);
		var thumb4 = Utils.isElementInView($('.thumb4'), false);
		var thumb5 = Utils.isElementInView($('.thumb5'), false);
		var thumb6 = Utils.isElementInView($('.thumb6'), false);
		var elige_tu_depa = Utils.isElementInView($('#elige_tu_depa'), false);
		var conoce = Utils.isElementInView($('#conoce'), false);
		var ubicacion = Utils.isElementInView($('#ubicacion'), false);

		if (home) {
			setTimeout(function(){
				$('.text1').addClass('text1--2-on');
				setTimeout(function(){
					$('.text2').addClass('text1--2-on');
					setTimeout(function(){
						$('.text3').addClass('text3--on');
					},1000);
				},1000);
			},1000);
		}

		if (contmosaico) {
			setTimeout(function(){
				$('.thumb1').addClass('thumbaso');
				setTimeout(function(){
					$('.thumb2').addClass('thumbaso');
				},500);
			},1000);
		}

		if (thumb3) {
			$('.thumb3').addClass('thumbaso');
		}

		if (thumb4) {
			$('.thumb4').addClass('thumbaso');
		}

		if (thumb5) {
			$('.thumb5').addClass('thumbaso');
		}

		if (thumb6) {
			$('.thumb6').addClass('thumbaso');
		}

		if (desc) {
			$('.p-alto').addClass('text--action');
			setTimeout(function(){
				setTimeout(function(){
					$('.descubre').addClass('text--action');
				},500);
			},500);
		}

		if (elige_tu_depa) {
			$('.todo_el').addClass('todo_elcito');
			setTimeout(function(){
				$('.descripcion').addClass('pro--a');
				setTimeout(function(){
					$('.contplano').addClass('pro--a');
				},1000);
			},1000);
		}

		if (conoce) {
			$('#conoce h2').css({
				"opacity": "1",
			    "transform": "translate(0px, 0px)",
			    "-webkit-transform": "translate(0px, 0px)",
			    "-moz-transform": "translate(0px, 0px)"
			});
			setTimeout(function(){
				$('.boxconoce').css({
					"margin-top": "0",
					"opacity": "1"
				});
			},1000);
			$('.btn-fixed').removeClass('btn-fix-on');
		} else {
			$('.btn-fixed').addClass('btn-fix-on');
		}

		if(ubicacion){
			$('.ubi--off').addClass('ubi--on');
		}

	});

});
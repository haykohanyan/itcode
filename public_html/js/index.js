$(window).load(function () {
        $('.loader').fadeOut('slow');

	var $text = $('#h3_1');

	function typeEffect(element, speed) {
		var $element = $(element);
		var text = $element.text();
		$element.html('');
	
		var i = 0;
		var timer = setInterval(function() {
			if (i < text.length) {
				$element.append(text.charAt(i));
				i++;
			} else {
				clearInterval(timer);
			}
		}, speed);
	}

	// -
    // setTimeout(function(){
    //   $('.p1').css('display', 'inline-block');
    //   typeEffect($('.p1'), speed);
    // }, delay);

	$('.read1').click(function(){
	 	$('.p1').toggle();
	 	$('.read1').toggleClass('cl','');
	})
	$('.read2').click(function(){
	 	$('.p2').toggle();
		$('.read2').toggleClass('cl2','');

	})
	$('.read3').click(function(){
	 	$('.p3').toggle();
	 	$('.read3').toggleClass('cl2','');
	})
	$('.read4').click(function(){
	 	$('.p4').toggle();
		$('.read4').toggleClass('cl','');

	})

	$('#JiSlider').JiSlider(
		{
			color: '#fff',
			start: 1,
			reverse: false,
			// onRole: function($element) {debugger;
			// 	$element.find('#h3_1').addClass('fadeInLeft');
			// 	$element.find('#h3_2').addClass('fadeInRight');
			// 	$element.find('.mb-4').addClass('rotateInUpRight');
			// }
		},
		['',animate1,animate3,animate4,animate2]
	).addClass('ff');

    function animate1(){
    	var $subtitle = $('#p1')
    	$subtitle.css('display', 'none');

    	var speed1 = 100;
    	var speed  = 30;

    	var $title = $('#h1');
    	// $title.empty();
    	var delay = $title.text().length * speed1 + speed1;
    	typeEffect($title, speed1);

    	setTimeout(function() {
    	
	    $subtitle.css('display', 'inline-block');
	    typeEffect($subtitle, speed);
    	}, delay);
    }

 	function animate2(){

 		$text.removeClass('animated fadeInLeft');
		$text_h3_2=$('.h3_2');
		$text_pp=$('.pp');
		$text_h3_2.removeClass('animated fadeInRight');
		$text_pp.removeClass('animated  rotateInUpRight');
 		setTimeout(function() {
	 		$text.addClass('animated fadeInLeft');
			$text_h3_2.addClass('animated fadeInRight');
			$text_pp.addClass('animated  rotateInUpRight');
 		}, 0);

 	}
 	function animate3(){
 		//console.log('-----');
 		$text_h2=$('.h2_free_practic');
 		$text_p=$('.p_free_practic');
 		$text_h2.removeClass('animated zoomInLeft');
 		$text_p.removeClass('animated fadeInRight');
 		setTimeout(function() {
	 		$text_h2.addClass('animated zoomInLeft');
	 		$text_p.addClass('animated fadeInRight');
 		}, 0);

 	}
	function animate4(){
	 	    $text_h3=$('.h3_work');
	 		$text_p=$('.p_work');
			console.log($text_h3);
	 		$text_h3.removeClass('animated rollIn');
	 		$text_p.removeClass('animated fadeInRight');
	 		setTimeout(function() {
		 		$text_h3.addClass('animated rollIn');
		 		$text_p.addClass('animated fadeInRight');
	 		}, 0);
	}
 	animate1();
	$(window).on('resize orientationchange', function () {
		$('.js-slider').slick('resize');
	});

	$('.bbo').slick({
		dots: false,
		infinite: true,
		autoplay: false,
		speed: 600,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		mobileFirst:true,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,

				}
			},
			{
				breakpoint: 978,
				settings: {
					slidesToShow:3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 1,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}

		]
	});


 	
});
$('.asd').slick({
	dots: false,
	infinite: true,
	autoplay: true,
	speed: 600,
	prevArrow: '<button class="slick-prev1" aria-label="Previous" type="button"></button>',
	nextArrow: '<button class="slick-next1" aria-label="Next" type="button"></button>',
	slidesToShow: 6,
	slidesToScroll: 1,
	arrows: true,
	mobileFirst:true,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1,

			}
		},
		{
			breakpoint: 978,
			settings: {
				slidesToShow:3,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 660,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 1,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}

	]
});

$('.slid').slick({
	dots: false,
	infinite: true,
	autoplay: true,
	speed: 600,
	prevArrow: '<button class="slick-prev2" aria-label="Previous" type="button"></button>',
	nextArrow: '<button class="slick-next2" aria-label="Next" type="button"></button>',
	slidesToShow: 6,
	slidesToScroll: 1,
	arrows: true,
	mobileFirst:true,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1,

			}
		},
		{
			breakpoint: 978,
			settings: {
				slidesToShow:3,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 560,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 1,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}

	]
});
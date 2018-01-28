(function($){
    $(window).on("load",function(){
        $(".content").mCustomScrollbar({
        	theme:"my-theme"
        });
    });
})(jQuery);
$(document).foundation()

$(window).load(function() {
	//loader animation
    incrementalNumber();
    if($(window).width() < 1024) {
    	$('.allow_video').click(function(){
    	});
    }
    setTimeout(function() {
      $(".loading").addClass("fadeout-stage1"); 
    }, 4000);
   	setTimeout(function() {
      $(".loading").addClass("fadeout-stage2"); 
   	}, 6000);
   	setTimeout(function() {
      $(".loading").addClass("fadeout-stage3"); 
   	}, 6500);
   	setTimeout(function() {
      $(".welcome-logo, .audio_control").addClass("fadein-stage3"); 
   	}, 6800);
});
$(document).ready(function(){
    $('.loading').click(function(){
    	$(this).delay(3000).addClass('fadeout-stage3');
    	$(".welcome-logo, .audio_control").addClass("fadein-stage3"); 
    });
	//hides all section appart welcome
	$('.vp-moodboard, .vp-about, .vp-works, .vp-skills, .vp-contact, .vp-thankyou').hide();

	//animation welcome
	$('.select-end').click(function(){
		$('.wrapper').addClass('v-end');
		$('.sliders').addClass('sliders-end');
		$('.show_nav').addClass('show_nav-end');
		$('.vp-moodboard, .vp-about, .vp-works, .vp-skills, .vp-contact, .vp-thankyou').slideDown("fast");
		$(".vp-moodboard").insertAfter(".vp-skills").toggleClass('end-moodboard');
		$(".vp-about").insertAfter(".vp-skills").toggleClass('end-about');
		$(".vp-works").insertAfter(".vp-skills").toggleClass('end-works');
		$(".vp-skills").toggleClass('end-skills');
		$(".nav-moodboard").insertAfter('.nav-contact');
		$(".nav-moodboard .number").html('05.');
		$(".nav-about").insertAfter('.nav-contact');
		$(".nav-about .number").html('04.');
		$(".nav-works").insertAfter('.nav-contact');
		$(".nav-works .number").html('03.');
		$(".nav-skills").insertAfter('.nav-contact');
		$(".nav-skills .number").html('02.');
		$(".nav-contact .number").html('01.');
		$('.show_nav').css('color','#fafafa');

		$('.about6').insertAfter('.introduction');
		$('.about4').insertAfter('.explication');
		$('.about5').insertAfter('.explication');
		$('.about1').insertAfter('.closure');
		$('.about2').insertAfter('.closure');
		$('.about3').insertAfter('.closure');


        $(".content").mCustomScrollbar({
        	theme:"my-theme"
        });

	});
	$('.select-beginning').click(function(){
		$('.wrapper').addClass('v-beginning');
		$('.sliders').addClass('sliders-beginning');
		$('.show_nav').addClass('show_nav-beginning');
		$('.vp-moodboard, .vp-about, .vp-works, .vp-skills, .vp-contact, .vp-thankyou').slideDown("fast");
        $(".content").mCustomScrollbar({
        	theme:"my-theme"
        });	
	});
	$('.select-beginning, .select-end').click(function(){
		//turn on slider works
		$('.show_nav').addClass('visible_show_nav');
		$('.slider-moodboard').slick({
			infinite: true,
			dots: false,
			autoplay: false,
			fade: true,
  			cssEase: 'linear',
			speed: 1000
		});
		if($(window).width() < 768) {
			$('.slider-works-example').slick({
				infinite: true,
				dots: false,
				autoplay: false,
				fade: true,
	  			cssEase: 'linear',
				speed: 1000	
			});
		} else {
			$('.slider-works-example').slick({
				infinite: true,
				dots: false,
				autoplay: false,
				autoplaySpeed: 3000,
				nextArrow: $('.next-works'),
				prevArrow: $('.prev-works'),
				fade: true,
	  			cssEase: 'linear',
				speed: 1000	
			});
		}
	});
	$('.about-me').slick({
		infinite: false,
		dots: false,
		autoplay: false,	
		speed: 1000,
		fade: true,
  		cssEase: 'ease'
	});
		$('.number').addClass('animated');

	//Nav
	$('.show_nav').click(function(){
		$('.nav_box').toggleClass('visible_nav');
		$('.nav_box').removeClass('visible_contact');
		$('.show_nav .icon').toggleClass('ion-android-close ion-navicon');
		$('.wrapper').toggleClass('wrapper_to_right-1');
		$('.wrapper').removeClass('wrapper_to_right-2');
		$('.number').toggleClass('slideInUp');
	});
	$('.show_contact').click(function(){
		$('.nav_box').addClass('visible_contact');
		$('.wrapper').addClass('wrapper_to_right-2');
	});
	$('.show_contact-thankyou').click(function(){
		$('.nav_box').addClass('visible_contact');
		$('.nav_box').toggleClass('visible_nav');
		$('.wrapper').toggleClass('wrapper_to_right-1');
		$('.wrapper').addClass('wrapper_to_right-2');		
		$('.show_nav .icon').toggleClass('ion-navicon ion-android-close');	
	});
	$('.show_nav .ion-android-close').click(function(){
		$('.nav_box').toggleClass('visible_nav');
	});
	$('.goto').click(function(){
		var vp = $(this).attr('data-target');
		$('html, body').animate({
			scrollTop: $('.vp-'+vp).offset().top
		}, 2000);
		$('.nav_box').removeClass('visible_contact');
		$('.nav_box').removeClass('visible_nav');
		$('.show_nav .icon').toggleClass('ion-navicon ion-android-close');	
		$('.wrapper').removeClass('wrapper_to_right-1');
		$('.wrapper').removeClass('wrapper_to_right-2');
	});
	$('.show_references').click(function(){
		$('.box-contact_info').addClass('lifted');
	});
	$('.hide_references').click(function(){
		$('.box-contact_info').removeClass('lifted');
	});

	//scroll down to first section
	$('.scroll-down').click(function(){
		$('html, body').animate({
			scrollTop: $('.section:nth-of-type(2)').offset().top
		}, 2000);
	});

	var scrollTop = $(window).scrollTop();
	var overlay = $('.dh-overlay').offset().top - 1000;

	if($(window).width() > 768) {
		$('.dh-container').directionalHover({
			easing: "swing",
			speed: 200
		});
	} else {
		$(window).scroll(function(){
			if(scrollTop > overlay) {
				$('.dh-overlay').css({'opacity': '1'});
				$(this).addClass('test');
			} else {
				$('.dh-overlay').css({'opacity': '0'});

			}
		});
	}

	//make a slider-moodboard visible + lead to the right slide
	$('.seemore').click(function(){
		var mb_slide_no = $(this).attr('data-target');
    	$(".slider-moodboard").slick('slickGoTo', mb_slide_no);
    	$('.box-slider-moodboard').addClass('slider-on');
    	$('.show_nav').removeClass('visible_show_nav');
    	$('body').addClass('scroll-off');
	});

    //turn off a slider in moodboard section + reset postion of content
    $('.hide-moodboard').click(function(){
		$('html, body').animate({
			scrollTop: $('.vp-moodboard').offset().top
		}, 0);    	
		$('.box-slider-moodboard').removeClass('slider-on');
    	$('.show_nav').addClass('visible_show_nav');
    	$('body').removeClass('scroll-off');
    });

    //slide works-example to viewport
    $('.show_project').click(function(){
    	$('.box-slider-works-example').addClass('visible-works');
    	var works_example_no = $(this).attr('data-target');
    	$(".slider-works-example").slick('slickGoTo', works_example_no);
    	$('.show_nav').removeClass('visible_show_nav');
    	$('body').addClass('scroll-off');
    });

    //turn off a slider in works section + reset postion of content
    $('.hide-works').click(function(){  	
		$('.box-slider-works-example').removeClass('visible-works');
    	$('.show_nav').addClass('visible_show_nav');
    	$('body').removeClass('scroll-off');
    });

    //change order of elements for works description on mobile
    if($(window).width() < 768) {
		$('.works-pic-1').insertAfter('.works-desc-1');
		$('.works-pic-2').insertAfter('.works-desc-2');
		$('.works-pic-3').insertAfter('.works-desc-3');
		$('.works-pic-4').insertAfter('.works-desc-4');
		$('.works-pic-5').insertAfter('.works-desc-5');
		$('.works-pic-6').insertAfter('.works-desc-6');
		$('.works-pic-7').insertAfter('.works-desc-7');
		$('.works-pic-8').insertAfter('.works-desc-8');
		$('.works-pic-9').insertAfter('.works-desc-9');
		$('.works-pic-10').insertAfter('.works-desc-10');
		$('.works-pic-11').insertAfter('.works-desc-11');
    }

    //video play

    	$(".welcome-left, .welcome-right, .loading").hover( hoverleft, hoverright, pauseboth );

    	function pauseboth(e) {
    		$('.loading').hover(function(){
		    	$('.video-beginning').get(0).pause();
		    	//$('.video-end').get(0).pause(); 
    		});    		
    	}

    	function hoverleft(e) {
    		$('.welcome-left').hover(function(){
		    	$('.video-beginning').get(0).play(); 
		    	$('.video-end').get(0).pause(); 
    		});
		}

		function hoverright(e) {
    		$('.welcome-right').hover(function(){
		    	$('.video-beginning').get(0).pause(); 
		    	$('.video-end').get(0).play(); 
    		});			
		}

		$('.allow_video').click(function(){
		   	$('.video-end, .video-beginning').get(0).play(); 
    	});


	//AUDIO
	    $('audio').prop("volume", 0.04);
		$('#play').click(function() {
			$("audio")[0].play();
			$('.button_wrapper').addClass('audio_on');
	    });
		$('#pause').click(function() {
			$("audio")[0].pause();
			$('.button_wrapper').removeClass('audio_on');
	    });


	window.sr = ScrollReveal();
	var left = {
		origin: 'left',
		distance : '50px',
		duration: 1500,
		delay: 500,
		easing: 'ease'
	};
	var right = {
		origin: 'right',
		distance : '50px',
		duration: 1500,
		easing: 'ease'
	};
	var bottom = {
		origin: 'bottom',
		distance : '50px',
		duration: 1500,
		easing: 'ease'
	};
	var top = {
		origin: 'top',
		distance : '50px',
		duration: 1500,
		easing: 'ease'
	};

	var scale = {
		easing: 'ease',
		duration: 1500,
		scale: { direction: 'down', power: '5%' },
		opacity: 1
	};
	sr.reveal('.box_works-leftside .to_animate', left); 
	sr.reveal('.box_works-rightside .to_animate', right); 
	sr.reveal('.vp-moodboard .to_animate', bottom); 
	sr.reveal('.vp-skills .to_animate h3', right);
});
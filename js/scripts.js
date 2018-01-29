(function($){
    $(window).on("load",function(){
        $(".content").mCustomScrollbar({
        	theme:"my-theme"
        });
    });
})(jQuery);
jQuery(document).foundation()

jQuery(window).load(function() {
	//loader animation
    incrementalNumber();
    if(jQuery(window).width() < 1024) {
        jQuery('.allow_video').click(function(){
    	});
    }
    setTimeout(function() {
        jQuery(".loading").addClass("fadeout-stage1");
    }, 4000);
   	setTimeout(function() {
        jQuery(".loading").addClass("fadeout-stage2");
   	}, 6000);
   	setTimeout(function() {
   		jQuery(".loading").addClass("fadeout-stage3");
   	}, 6500);
   	setTimeout(function() {
   		jQuery(".welcome-logo, .audio_control").addClass("fadein-stage3");
   	}, 6800);
});
jQuery(document).ready(function(){
    jQuery('.loading').click(function(){
    	jQuery(this).delay(3000).addClass('fadeout-stage3');
    	jQuery(".welcome-logo, .audio_control").addClass("fadein-stage3");
    });
	//hides all section appart welcome
    jQuery('.vp-moodboard, .vp-about, .vp-works, .vp-skills, .vp-contact, .vp-thankyou').hide();  // HERE

	//animation welcome
    jQuery('.select-end').click(function(){
		jQuery('.wrapper').addClass('v-end');
		jQuery('.sliders').addClass('sliders-end');
		jQuery('.show_nav').addClass('show_nav-end');
		jQuery('.vp-moodboard, .vp-about, .vp-works, .vp-skills, .vp-contact, .vp-thankyou').slideDown("fast");
		jQuery(".vp-moodboard").insertAfter(".vp-skills").toggleClass('end-moodboard');
		jQuery(".vp-about").insertAfter(".vp-skills").toggleClass('end-about');
		jQuery(".vp-works").insertAfter(".vp-skills").toggleClass('end-works');
		jQuery(".vp-skills").toggleClass('end-skills');
		jQuery(".nav-moodboard").insertAfter('.nav-contact');
		jQuery(".nav-moodboard .number").html('05.');
		jQuery(".nav-about").insertAfter('.nav-contact');
		jQuery(".nav-about .number").html('04.');
		jQuery(".nav-works").insertAfter('.nav-contact');
		jQuery(".nav-works .number").html('03.');
		jQuery(".nav-skills").insertAfter('.nav-contact');
		jQuery(".nav-skills .number").html('02.');
		jQuery(".nav-contact .number").html('01.');
		jQuery('.show_nav').css('color','#fafafa');

		jQuery('.about6').insertAfter('.introduction');
		jQuery('.about4').insertAfter('.explication');
		jQuery('.about5').insertAfter('.explication');
		jQuery('.about1').insertAfter('.closure');
		jQuery('.about2').insertAfter('.closure');
		jQuery('.about3').insertAfter('.closure');


        jQuery(".content").mCustomScrollbar({
        	theme:"my-theme"
        });

	});
    jQuery('.select-beginning').click(function(){
		jQuery('.wrapper').addClass('v-beginning');
		jQuery('.sliders').addClass('sliders-beginning');
		jQuery('.show_nav').addClass('show_nav-beginning');
		jQuery('.vp-moodboard, .vp-about, .vp-works, .vp-skills, .vp-contact, .vp-thankyou').slideDown("fast");
        jQuery(".content").mCustomScrollbar({
        	theme:"my-theme"
        });	
	});
    jQuery('.select-beginning, .select-end').click(function(){
		//turn on slider works
		jQuery('.show_nav').addClass('visible_show_nav');
		jQuery('.slider-moodboard').slick({
			infinite: true,
			dots: false,
			autoplay: false,
			fade: true,
  			cssEase: 'linear',
			speed: 1000
		});
		if(jQuery(window).width() < 768) {
            jQuery('.slider-works-example').slick({
				infinite: true,
				dots: false,
				autoplay: false,
				fade: true,
	  			cssEase: 'linear',
				speed: 1000	
			});
		} else {
            jQuery('.slider-works-example').slick({
				infinite: true,
				dots: false,
				autoplay: false,
				autoplaySpeed: 3000,
				nextArrow: jQuery('.next-works'),
				prevArrow: jQuery('.prev-works'),
				fade: true,
	  			cssEase: 'linear',
				speed: 1000	
			});
		}
	});
    jQuery('.about-me').slick({
		infinite: false,
		dots: false,
		autoplay: false,	
		speed: 1000,
		fade: true,
  		cssEase: 'ease'
	});
    jQuery('.number').addClass('animated');

	//Nav
    jQuery('.show_nav').click(function(){
		jQuery('.nav_box').toggleClass('visible_nav');
		jQuery('.nav_box').removeClass('visible_contact');
		jQuery('.show_nav .icon').toggleClass('ion-android-close ion-navicon');
		jQuery('.wrapper').toggleClass('wrapper_to_right-1');
		jQuery('.wrapper').removeClass('wrapper_to_right-2');
		jQuery('.number').toggleClass('slideInUp');
	});
    jQuery('.show_contact').click(function(){
		jQuery('.nav_box').addClass('visible_contact');
		jQuery('.wrapper').addClass('wrapper_to_right-2');
	});
    jQuery('.show_contact-thankyou').click(function(){
		jQuery('.nav_box').addClass('visible_contact');
		jQuery('.nav_box').toggleClass('visible_nav');
		jQuery('.wrapper').toggleClass('wrapper_to_right-1');
		jQuery('.wrapper').addClass('wrapper_to_right-2');
		jQuery('.show_nav .icon').toggleClass('ion-navicon ion-android-close');
	});
    jQuery('.show_nav .ion-android-close').click(function(){
        jQuery('.nav_box').toggleClass('visible_nav');
	});
    jQuery('.goto').click(function(){
		var vp = jQuery(this).attr('data-target');
        jQuery('html, body').animate({
			scrollTop: jQuery('.vp-'+vp).offset().top
		}, 2000);
		jQuery('.nav_box').removeClass('visible_contact');
		jQuery('.nav_box').removeClass('visible_nav');
		jQuery('.show_nav .icon').toggleClass('ion-navicon ion-android-close');
		jQuery('.wrapper').removeClass('wrapper_to_right-1');
		jQuery('.wrapper').removeClass('wrapper_to_right-2');
	});
    jQuery('.show_references').click(function(){
        jQuery('.box-contact_info').addClass('lifted');
	});
    jQuery('.hide_references').click(function(){
        jQuery('.box-contact_info').removeClass('lifted');
	});

	//scroll down to first section
    jQuery('.scroll-down').click(function(){
        jQuery('html, body').animate({
			scrollTop: jQuery('.section:nth-of-type(2)').offset().top
		}, 2000);
	});

	var scrollTop = jQuery(window).scrollTop();
	var overlay = jQuery('.dh-overlay').offset().top - 1000;

	if(jQuery(window).width() > 768) {
        jQuery('.dh-container').directionalHover({
			easing: "swing",
			speed: 200
		});
	} else {
        jQuery(window).scroll(function(){
			if(scrollTop > overlay) {
				jQuery('.dh-overlay').css({'opacity': '1'});
				jQuery(this).addClass('test');
			} else {
                jQuery('.dh-overlay').css({'opacity': '0'});

			}
		});
	}

	//make a slider-moodboard visible + lead to the right slide
    jQuery('.seemore').click(function(){
		var mb_slide_no = jQuery(this).attr('data-target');
    	jQuery(".slider-moodboard").slick('slickGoTo', mb_slide_no);
    	jQuery('.box-slider-moodboard').addClass('slider-on');
    	jQuery('.show_nav').removeClass('visible_show_nav');
        jQuery('body').addClass('scroll-off');
	});

    //turn off a slider in moodboard section + reset postion of content
    jQuery('.hide-moodboard').click(function(){
        jQuery('html, body').animate({
			scrollTop: jQuery('.vp-moodboard').offset().top
		}, 0);    	
		jQuery('.box-slider-moodboard').removeClass('slider-on');
    	jQuery('.show_nav').addClass('visible_show_nav');
    	jQuery('body').removeClass('scroll-off');
    });

    //slide works-example to viewport
    jQuery('.show_project').click(function(){
        jQuery('.box-slider-works-example').addClass('visible-works');
    	var works_example_no = jQuery(this).attr('data-target');
    	jQuery(".slider-works-example").slick('slickGoTo', works_example_no);
    	jQuery('.show_nav').removeClass('visible_show_nav');
    	jQuery('body').addClass('scroll-off');
    });

    //turn off a slider in works section + reset postion of content
    jQuery('.hide-works').click(function(){
		jQuery('.box-slider-works-example').removeClass('visible-works');
    	jQuery('.show_nav').addClass('visible_show_nav');
    	jQuery('body').removeClass('scroll-off');
    });

    //change order of elements for works description on mobile
    if(jQuery(window).width() < 768) {
		jQuery('.works-pic-1').insertAfter('.works-desc-1');
		jQuery('.works-pic-2').insertAfter('.works-desc-2');
		jQuery('.works-pic-3').insertAfter('.works-desc-3');
		jQuery('.works-pic-4').insertAfter('.works-desc-4');
		jQuery('.works-pic-5').insertAfter('.works-desc-5');
		jQuery('.works-pic-6').insertAfter('.works-desc-6');
		jQuery('.works-pic-7').insertAfter('.works-desc-7');
		jQuery('.works-pic-8').insertAfter('.works-desc-8');
		jQuery('.works-pic-9').insertAfter('.works-desc-9');
		jQuery('.works-pic-10').insertAfter('.works-desc-10');
		jQuery('.works-pic-11').insertAfter('.works-desc-11');
    }

    //video play

    jQuery(".welcome-left, .welcome-right, .loading").hover( hoverleft, hoverright, pauseboth );

    	function pauseboth(e) {
    		jQuery('.loading').hover(function(){
                jQuery('.video-beginning').get(0).pause();
		    	//$('.video-end').get(0).pause(); 
    		});    		
    	}

    	function hoverleft(e) {
            jQuery('.welcome-left').hover(function(){
		    	jQuery('.video-beginning').get(0).play();
		    	jQuery('.video-end').get(0).pause();
    		});
		}

		function hoverright(e) {
            jQuery('.welcome-right').hover(function(){
		    	jQuery('.video-beginning').get(0).pause();
		    	jQuery('.video-end').get(0).play();
    		});			
		}

    jQuery('.allow_video').click(function(){
        jQuery('.video-end, .video-beginning').get(0).play();
	});


	//AUDIO
	    jQuery('audio').prop("volume", 0.04);
		jQuery('#play').click(function() {
			jQuery("audio")[0].play();
			jQuery('.button_wrapper').addClass('audio_on');
	    });
		jQuery('#pause').click(function() {
			jQuery("audio")[0].pause();
			jQuery('.button_wrapper').removeClass('audio_on');
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
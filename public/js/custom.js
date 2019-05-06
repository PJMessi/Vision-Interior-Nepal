(function ($) {
    "use strict";
    var $wn =  $(window);
    $wn.load(function () {
    /***************************
     *   Header Fixed  *
     ***************************/
      $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
                $('header').addClass("header-small");
        } else {
                $('header').removeClass("header-small");
        }
        });
        });
            
/***********************
    *   service-slider Carousel  *
    ***********************/
   $('.service-slider').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        767:{
            items:1
        },
        768:{
            items:3
        }
    }
});
/***********************
 *   Testimonial Carousel  *
 ***********************/
$('.testimonial-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        }
    }
});


/***********************
 *   Testimonial Carousel  *
 ***********************/
var slider = $('#thumb_slider');
var thumbnailSlider  = $('#service-thumbnil');
var duration = 500;
// carousel function for main slider
  slider.owlCarousel({
   loop:false,
    nav:false,
   items:1
  }).on('changed.owl.carousel', function (e) {
   //On change of main item to trigger thumbnail item
   	thumbnailSlider.trigger('to.owl.carousel', [e.item.index, duration, true]);
  });
  
	// carousel function for thumbnail slider
	thumbnailSlider.owlCarousel({
		loop:false,
		center: false, //to display the thumbnail item in center
		nav:false,
		 margin:10,
		responsive:{
		0:{
		 items: 3
		},
		600:{
		 items:4
		},
		1000:{
		 items:6
		} 
	}
	}).on('click', '.owl-item', function () {
		// On click of thumbnail items to trigger same main item
		slider.trigger('to.owl.carousel', [$(this).index(), duration, true]);
	
	}).on('changed.owl.carousel', function (e) {
		// On change of thumbnail item to trigger main item
		slider.trigger('to.owl.carousel', [e.item.index, duration, true]);
	});
	
	
	//These two are navigation for main items
	$('.slider-right').on("click", function(e){
		slider.trigger('next.owl.carousel');
	});
	$('.slider-left').on("click", function(e){
		slider.trigger('prev.owl.carousel');
	});
    
	$('.service-list-toggle').on("click", function(e){
        e.preventDefault();
		$('ul.service-list').slideToggle();
		$(this).toggleClass('active');
    });

    /***************************
     *   Scroll to top action  *
     ***************************/
    var $element = $('.scroll-top');

    $wn.on("scroll", function () {
            if ($(this)
                .scrollTop() > 100) {
                $element.fadeIn();
            } else {
                $element.fadeOut();
            }
        });

    $element.on("click", function () {
        var $scrollElement = $("html, body");
        $scrollElement.animate({
            scrollTop: 0
        }, 600);
        return false;
    });
	
	 /****************************
	 *   Validate Contact Form  *
	 ****************************/
	var $form = $("#contactform");
	if ($form.length > 0) {
		
		$form.validate({
			rules: {
				first_name: {
					required: true,
					minlength: 3
				},
				last_name: {
					required: true
				},
				company: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					required: true,
					number: true,
					minlength: 10
				} 
			},
			messages: {
				first_name: {
					required: "Please Enter Name",
					minlength: "Name must consist of at least 3 characters"
				},
				last_name: {
					required: "Please Enter Name",
					minlength: "Name must consist of at least 3 characters"
				},
				email: {
					required: "Please provide an Email",
					email: "Please enter a valid Email"
				},
				phone: {
					required: "Please provide Phone Number",
					number: "Please enter only digits",
					minlength: "Phone Number must be atleast 10 Numbers"
				},
				 
			},

			submitHandler: function ($form) {
				//Send Booking Mail AJAX
				var formdata = jQuery("#contactform").serialize();
				jQuery.ajax({
					type: "POST",
					url: "contact_form/ajax-contact.php",
					data: formdata,
					dataType: 'json',
					async: false,
					success: function (data) {
						if (data.success) {
							jQuery('.msg')
								.removeClass('alert alert-danger alert-dismissible');
							jQuery('.msg')
								.addClass('alert alert-success alert-dismissible');
							jQuery('.msg')
								.text('Thank You, Your Message Has been Sent');
						} else {
							jQuery('.msg')
								.removeClass('alert alert-success alert-dismissible');
							jQuery('.msg')
								.addClass('alert alert-danger alert-dismissible');
							jQuery('.msg')
								.text('Error on Sending Message, Please Try Again');
						}

					},
					error: function (error) {
						jQuery('.msg')
							.removeClass('alert alert-success alert-dismissible');
						jQuery('.msg')
							.addClass('alert alert-danger alert-dismissible');
						jQuery('.msg')
							.text('Something Went Wrong');
					}

				});
			}
		});
	}

})(jQuery);
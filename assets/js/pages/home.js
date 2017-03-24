define(['jquery','bootstrap','caroufredsel','levelmenu'], function(){
	return new function(){
		var self = this;
		self.run = function(){
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
					$('body').removeClass('loading');
				}
			});
			
			/* Bootstrap Carousel */
			$('.carousel').carousel({
			   interval: 8000,
			   pause: "hover"
			});

			/* Recent post carousel (CarouFredSel) */
			/* Carousel */
			$('#carousel_container').carouFredSel({
				responsive: true,
				width: '100%',
				direction: 'right',
				scroll: {
					items: 4,
					delay: 2000,
					duration: 5000,
					pauseOnHover: "true"
				},
				prev : {
					button	: "#car_prev",
					key		: "left"
				},
				next : {
					button	: "#car_next",
					key		: "right"
				},
				items: {	
					visible: {
						min: 1,
						max: 4
					}
				}
			});	
		}
	}
});
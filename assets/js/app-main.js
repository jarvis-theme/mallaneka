var dirTema = document.getElementsByTagName('link')[1].getAttribute('href');

require.config({
	baseUrl: '/',
	shim: {
		"bootstrap"	: {
			deps: ['jquery'],
		},
		"flexslider" : {
			deps : ['jquery'],
		},
		'jq_ui' : {
			deps : ['jquery'],
		},
		"navgoco" : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
	},
    "waitSeconds" : 20,

	paths: {
		// LIBRARY
		bootstrap 		: ['//maxcdn.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min',dirTema+'assets/js/lib/bootstrap.min'],
		cart			: 'js/cart',
		caroufredsel	: dirTema+'assets/js/lib/jquery.carouFredSel-6.2.1-packed',
		flexslider		: dirTema+'assets/js/lib/jquery.flexslider',
		fancybox		: dirTema+'assets/js/lib/jquery.fancybox',
		jq_ui			: 'js/jquery-ui',
		jquery 			: ['//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min',dirTema+'assets/js/lib/jquery-1.7.2.min'],
		navgoco			: dirTema+'assets/js/lib/jquery.navgoco.min',
		noty			: 'js/jquery.noty',
		levelmenu		: dirTema+'assets/js/lib/ddlevelsmenu',

		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		home            : dirTema+'assets/js/pages/home',
		member          : dirTema+'assets/js/pages/member',
		main            : dirTema+'assets/js/pages/default',
		produk          : dirTema+'assets/js/pages/produk',
	}
});
require([
	'router',
	'bootstrap',
	'main',
], function(router,b,main)
{
	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// MEMBER
	router.define('member/*', 'member@run');

	// PRODUK
	router.define('produk/*', 'produk@run');
	
	router.run();
	main.run();
});
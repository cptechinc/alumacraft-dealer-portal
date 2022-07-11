<!doctype html>
<html class=" js ">
<head>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=9">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<title></title>

	<link rel="shortcut icon" sizes="32x32" href="/etc.clientlibs/nextgen/clientlibs/clientlib-dependencies/resources/favicon-32x32.png">
	<link rel="icon" sizes="32x32" href="/etc.clientlibs/nextgen/clientlibs/clientlib-dependencies/resources/favicon-32x32.png">


    <!-- CSS -->
	<link rel="stylesheet" type="text/css" href="https://legacy.alumacraft.com/css/base.css?v=1">
    <link rel="stylesheet" type="text/css" href="https://legacy.alumacraft.com/css/style.css?v=2" media="all">
    <link rel="stylesheet" type="text/css" href="https://legacy.alumacraft.com/css/stylesheet.css?v=1" media="all">
    <link rel="stylesheet" type="text/css" href="https://legacy.alumacraft.com/css/jetmenu.css?v=1">
	<link rel="stylesheet" type="text/css" href="https://legacy.alumacraft.com/css/amazium.css?v=1">
	<link rel="stylesheet" type="text/css" href="https://legacy.alumacraft.com/css/layout-new.css?v=1">
	<link rel="stylesheet" type="text/css" href="https://legacy.alumacraft.com/css/everslider.css?v=1">
	<link rel="stylesheet" type="text/css" href="https://legacy.alumacraft.com/css/everslider-custom.css?v=1">


	<link rel="stylesheet" type="text/css" href="https://legacy.alumacraft.com/css/jquery-ui.css?v=1">

        <link rel="stylesheet" type="text/css" href="assets/css/jquery.modal.css?v=1">
        <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css?v=1">
        <link rel="stylesheet" type="text/css" href="assets/css/cpt.css">


		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="https://legacy.alumacraft.com/css/settings.css?v=1" media="screen">
    <link rel="stylesheet" type="text/css" href="https://legacy.alumacraft.com/css/extralayers.css?v=1" media="all">

 	<link href="https://alumacraftapp.alumacraft.com/css/admin-LAYOUT-2017.css?v=1" rel="stylesheet" type="text/css">

	<script type="text/javascript" async="" src="https://www.google-analytics.com/ga.js"></script>
	<script type="text/javascript" src="https://legacy.alumacraft.com/scripts/jquery-2.0.0.min.js"></script>
	<script src="https://legacy.alumacraft.com/scripts/jquery-ui.js?v=1"></script>
	<script src="https://legacy.alumacraft.com/scripts/modernizr.custom.js"></script>
	<script src="https://legacy.alumacraft.com/scripts/jquery.magnific-popup.js"></script>

	<!-- SLIDER REVOLUTION 4.x scripts  -->

    <script type="text/javascript">
        /mobi/i.test(navigator.userAgent) && !location.hash && setTimeout(function () {
          if (!pageYOffset) window.scrollTo(0, 1);
        }, 1000);
    </script>


	<!-- JavaScript -->
	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
	<script type="text/javascript" src="https://legacy.alumacraft.com/scripts/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="https://legacy.alumacraft.com/scripts/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="https://legacy.alumacraft.com/scripts/jquery.everslider.js"></script>

    <script type="text/javascript" src="https://legacy.alumacraft.com/scripts/jetmenu.js"></script>

    <script type="text/javascript" src="https://legacy.alumacraft.com/scripts/classie.js"></script>

    <script type="text/javascript" src="assets/js/jquery.modal.min.js"></script>
        <script type="text/javascript" src="assets/js/select2.full.min.js"></script>
        <script type="text/javascript" src="assets/js/moment.js"></script>
        <script type="text/javascript" src="assets/js/cpt.js"></script>
        <script type="text/javascript" src="assets/js/noty.js"></script>
        <script type="text/javascript" src="assets/js/uri.js"></script>

		<script>
		    window.dataLayer = window.dataLayer || [];
		</script>

<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#jetmenu-1').jetmenu( {
				indicator:false
			});

			jQuery('#jetmenu-2').jetmenu( {
				indicator:false
			});


				/* Fullwidth slider */
			jQuery('#fullwidth_slider').everslider({
				mode: 'carousel',
				moveSlides: 1,
				slideEasing: 'easeInOutCubic',
				slideDuration: 700,
				navigation: true,
				keyboard: true,
				nextNav: '<span class="alt-arrow">Next</span>',
				prevNav: '<span class="alt-arrow">Next</span>',
				ticker: true,
				tickerAutoStart: true,
				tickerHover: true,
				tickerTimeout: 2000,
				maxVisible: 3
			});


			jQuery('#fullwidth_slider_2').everslider({
				mode: 'carousel',
				moveSlides: 1,
				slideEasing: 'easeInOutCubic',
				slideDuration: 700,
				navigation: true,
				keyboard: true,
				nextNav: '<span class="alt-arrow">Next</span>',
				prevNav: '<span class="alt-arrow">Next</span>',
				ticker: true,
				tickerAutoStart: true,
				tickerHover: true,
				tickerTimeout: 2000
			});


		});
	</script>
	<script>

	  jQuery( function() {

		jQuery( "#price-range" ).slider({
		  range: true,
		  min: 0,
		  max: 55000,
		  step:500,
		  values: [ 0, 55000 ],
			slide: function( event, ui ) {
			  jQuery( "#price1" ).val( "$" + ui.values[ 0 ].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " - $" + ui.values[ 1 ].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );
			},
			stop: function( event, ui ) {
			  jQuery( "#price1" ).change();
			}
		  });
		jQuery( "#price1" ).val( "$" + jQuery( "#price-range" ).slider( "values", 0 ).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +
				" - $" + jQuery( "#price-range" ).slider( "values", 1 ).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );

	  jQuery( "#boat-length" ).slider({
		  range: true,
		  min: 10,
		  max: 21,
		  step:1,
		  values: [ 10, 21 ],
		  slide: function( event, ui ) {
			jQuery( "#price2" ).val(  ui.values[ 0 ] + " feet - " + ui.values[ 1 ] + " feet" );
			},
		  stop: function( event, ui ) {
			jQuery( "#price2" ).change();
			}
		});
		jQuery( "#price2" ).val(jQuery( "#boat-length" ).slider( "values", 0 ) +
		  " feet - " + jQuery( "#boat-length" ).slider( "values", 1 ) + " feet" ).change();

		jQuery( ".accordion" ).accordion({
			header: "h4",
		  collapsible: true,
		  active: false,
		  heightStyle: "content"
		});


	  } );

  </script>


	<script type="text/javascript">
		var domain = "https://reg.alumacraft.com/";
		var is_map = "";
		var is_new = "1";
		var is_nap = 0;

		var location_iso = "";
		var model_line = "";
		var model_name = "";
		var item_id = "";
		var model_year = "";
		var is_boatbuilder = "";
		var test_pre_rigs = "";
		var build_id = "";
		var is_package_available = "";
		var user_id = "4189";
		var popup_id = "";
	</script>



	<script src="https://alumacraftapp.alumacraft.com/Scripts/jquery.validate.min.js"></script>
	<script type="text/javascript">jQuery.noConflict();</script>
	<script type="text/javascript" src="https://wsqa.aimbase.com/Scripts/awa.js" id="AimbaseAnalytics" data-clientid="TI1480"></script>
	<script src="https://alumacraftapp.alumacraft.com/Scripts/public_2017.js?v=3" type="text/javascript"></script>
    <script src="https://alumacraftapp.alumacraft.com/Scripts/imageUpload.js?v=1" type="text/javascript"></script>
	<script src="https://alumacraftapp.alumacraft.com/Scripts/general_2017.js?v=4"></script>

	<!-- <script src="https://legacy.alumacraft.com/scripts/boat-builder-2018.js?v=17"></script> -->
	<script src="https://alumacraftapp.alumacraft.com/Scripts/jquery.formatCurrency-1.4.0.min.js"></script>
	<!-- <script src="https://legacy.alumacraft.com/scripts/boat-builder.2017.js.php?id=119" type="text/javascript"></script> -->
	<script>
	jQuery( function() {


	jQuery( ".accordion" ).accordion({
	header: "h4",
	collapsible: true,
	active: false,
	heightStyle: "content"
	});


	} );
	</script>


	<!--[if IE]><script src = 'https://legacy.alumacraft.com/scripts/ie.js'></script><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="https://legacy.alumacraft.com/css/ie.css" /><![endif]-->


    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    <!-- include map js -->


</head>

<body>

	<div id="header-wrapper">
		<div class="row">

		</div>
		<div class="navigation">
			<div class="row">
				<div class="grid_4">
					<div id="logo">
						<a href="https://www.alumacraft.com/Alumacraft-Boats.php">
							<img src="https://legacy.alumacraft.com/images/logo.jpg" alt="Alumacraft logo" class="max-img">
						</a>
					</div>
				</div>
				<div class="grid_7">
					<ul id="jetmenu-1" class="jetmenu">
						<li class="showhide" style="display: none;"><span class="title"></span><span class="icon"><em></em><em></em><em></em><em></em></span></li>


						<!-- <li><a href="https://dealer.alumacraft.com/admin/Logout.php"><img src="https://www.alumacraft.com/images/icons/unLock.png" style="height:17px;"/></a></li>-->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="nav-space"></div>

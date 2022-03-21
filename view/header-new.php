<!doctype html>
<html class=" js ">
<head>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=9">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<title></title>

	<link rel="shortcut icon" href="https://www.alumacraft.com/favicon.ico" type="image/x-icon">
	<link rel="icon" href="https://www.alumacraft.com/favicon.ico" type="image/x-icon">


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
	<script type="text/javascript" src="https://www.alumacraft.com/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="https://www.alumacraft.com/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

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

	<style type="text/css">
		.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}.fb_link img{border:none}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
	.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_loader{background-color:#f6f7f9;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{width:auto;height:auto;min-height:initial;min-width:initial;background:none}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{color:#fff;display:block;padding-top:20px;clear:both;font-size:18px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;bottom:0;left:0;right:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #29487d;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f6f7f9;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-repeat:no-repeat;background-position:50% 50%;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
	.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}</style>


</head>

<body>
	<div id="fb-root" class=" fb_reset">
		<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
			<div>
				<iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://staticxx.facebook.com/connect/xd_arbiter/r/BbnCpbXY9X8.js?version=42#channel=f1f6a550cb78e&amp;origin=http%3A%2F%2Freg.alumacraft.com" style="border: none;"></iframe>
				<iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/BbnCpbXY9X8.js?version=42#channel=f1f6a550cb78e&amp;origin=http%3A%2F%2Freg.alumacraft.com" style="border: none;"></iframe>
			</div>
		</div>
		<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
			<div></div>
		</div>
	</div>
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

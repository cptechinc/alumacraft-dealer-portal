<html class=" js ">
	<head>
	<meta charset="UTF-8">
	
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=9">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<title></title>

	<link rel="shortcut icon" href="http://alumacraft.com/favicon.ico" type="image/x-icon">
	<link rel="icon" href="http://alumacraft.com/favicon.ico" type="image/x-icon">


    <!-- CSS -->
	<link rel="stylesheet" type="text/css" href="http://alumacraft.com/css/base.css?v=1">
    <link rel="stylesheet" type="text/css" href="http://alumacraft.com/css/style.css?v=2" media="all">
    <link rel="stylesheet" type="text/css" href="http://alumacraft.com/css/stylesheet.css?v=1" media="all">
    <link rel="stylesheet" type="text/css" href="http://alumacraft.com/css/jetmenu.css?v=1">
	<link rel="stylesheet" type="text/css" href="http://alumacraft.com/css/amazium.css?v=1">
	<link rel="stylesheet" type="text/css" href="http://alumacraft.com/css/layout-new.css?v=1">
	<link rel="stylesheet" type="text/css" href="http://alumacraft.com/css/everslider.css?v=1">
	<link rel="stylesheet" type="text/css" href="http://alumacraft.com/css/everslider-custom.css?v=1">
    
	
	<link rel="stylesheet" type="text/css" href="http://alumacraft.com/css/jquery-ui.css?v=1">
    
     
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="http://alumacraft.com/css/settings.css?v=1" media="screen">
    <link rel="stylesheet" type="text/css" href="http://alumacraft.com/css/extralayers.css?v=1" media="all">

 	<link href="http://alumacraft_app.alumacraft.com/css/admin-LAYOUT-2017.css?v=1" rel="stylesheet" type="text/css">

	<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
	<script type="text/javascript" src="http://alumacraft.com/scripts/jquery-2.0.0.min.js"></script>
	<script src="http://alumacraft.com/scripts/jquery-ui.js?v=1"></script>
	<script src="http://alumacraft.com/scripts/modernizr.custom.js"></script>
	<script src="http://alumacraft.com/scripts/jquery.magnific-popup.js"></script> 


<!-- CSS STYLE-->

		<!-- SLIDER REVOLUTION 4.x scripts  -->
		<script type="text/javascript" src="http://alumacraft.com/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="http://alumacraft.com/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript">
        /mobi/i.test(navigator.userAgent) && !location.hash && setTimeout(function () {
          if (!pageYOffset) window.scrollTo(0, 1);
        }, 1000);
    </script>
    
	
	<!-- JavaScript -->
	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
	<script type="text/javascript" src="http://alumacraft.com/scripts/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="http://alumacraft.com/scripts/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="http://alumacraft.com/scripts/jquery.everslider.js"></script>
    
    <script type="text/javascript" src="http://alumacraft.com/scripts/jetmenu.js"></script>
    <script type="text/javascript" src="http://alumacraft.com/scripts/classie.js"></script>
    
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector("#header-wrapper");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
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
	var domain = "http://reg.alumacraft.com/";
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
    
 
   
	<script src="http://alumacraft_app.alumacraft.com/Scripts/jquery.validate.min.js"></script>  
	<script type="text/javascript">jQuery.noConflict();</script>
	<script src="http://alumacraft_app.alumacraft.com/Scripts/public_2017.js?v=3" type="text/javascript"></script>
    <script src="http://alumacraft_app.alumacraft.com/Scripts/imageUpload.js?v=1" type="text/javascript"></script>  
	<script src="http://alumacraft_app.alumacraft.com/Scripts/general_2017.js?v=4"></script>

	<!-- <script src="http://alumacraft.com/scripts/boat-builder-2018.js?v=17"></script> -->
	<script src="http://alumacraft_app.alumacraft.com/Scripts/jquery.formatCurrency-1.4.0.min.js"></script>
	<!-- <script src="http://alumacraft.com/scripts/boat-builder.2017.js.php?id=119" type="text/javascript"></script> -->


 
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
    
    
	<!--[if IE]><script src = 'http://alumacraft.com/scripts/ie.js'></script><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="http://alumacraft.com/css/ie.css" /><![endif]-->
    
    
    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- include map js -->
    
   
        
<style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}.fb_link img{border:none}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_loader{background-color:#f6f7f9;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{width:auto;height:auto;min-height:initial;min-width:initial;background:none}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{color:#fff;display:block;padding-top:20px;clear:both;font-size:18px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;bottom:0;left:0;right:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #29487d;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f6f7f9;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-repeat:no-repeat;background-position:50% 50%;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}</style>
<script async="true" type="text/javascript" src="http://a.adroll.com/j/roundtrip.js"></script>
<script async="true" type="text/javascript" src="https://d.adroll.com/pixel/5V72JSICDFGIBOB6N42XAD/NUD3AOZMRZEVRPA3GSM3C2?pv=86364689416.86674&amp;cookie=JMMCW2QGBBGG3ESSS7IDTK%3A20%7CNUD3AOZMRZEVRPA3GSM3C2%3A20%7C5V72JSICDFGIBOB6N42XAD%3A20&amp;adroll_s_ref=http%3A//alumacraft.com/&amp;keyw=&amp;arrfrr=http%3A%2F%2Falumacraft.com%2FBoat-Builder.php%3Faction%3Dlist"></script><div style="width: 1px; height: 1px; display: inline; position: absolute;"><img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/r/out">
<img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/f/out">
<img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/b/out">
<img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/x/out">
<img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/l/out">
<img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/o/out">
<img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/g/out?google_nid=adroll5">
</div></head>
<body style="">

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

<script type="text/javascript">

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=260143120669377";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>




<div id="header-wrapper">
    <div class="row">
        <div class="grid_4">
            <div id="logo">
                <a href="http://alumacraft.com/Alumacraft-Boats.php"><img src="http://alumacraft.com/images/logo.jpg" alt="Alumacraft logo" class="max-img"></a>
            </div>
        </div>
    </div>
    <div class="navigation">
        <div class="row">
            <div class="grid_12">
                <ul id="jetmenu-1" class="jetmenu">
                    <li class="showhide" style="display: none;"><span class="title"></span><span class="icon"><em></em><em></em><em></em><em></em></span></li>
                    <li class="fix-sub" style=""><a href="#">MENU <span>☰</span></a>
                        <div class="megamenu full-width" style="">
                            <div class="row">
                                <div class="col1-1-5"><a href="http://alumacraft.com/About-Alumacraft.php?content=best_catch"><i class="icon-alumacash"></i>Best Catch Promo</a></div>
                                <div class="col1-1-5"><a href="http://alumacraft.com/About-Alumacraft.php?content=nap"><i class="icon-nap-models"></i>BOAT SPECIALS</a></div>
                                <div class="col1-1-5"><a href="http://alumacraft.com/About-Alumacraft.php?content=boats&amp;model_year=2018"><i class="icon-models"></i>BOAT MODELS</a></div>
                                <div class="col1-1-5"><a href="http://alumacraft.com/About-Alumacraft.php?content=military"><i class="icon-military"></i>military DISCOUNTS</a></div>
                            </div>
                            <div class="row">
                                <div class="col1-1-5"><a href="http://alumacraft.com/About-Alumacraft.php?content=boats&amp;model_year=2018"><i class="icon-build-a-boat"></i>build YOUR boat</a></div>
                                <div class="col1-1-5"><a href="http://alumacraft.com/Alumacraft-Boat-Dealer-Locator.php?dealer_locator=1"><i class="icon-find-a-dealer"></i>find a dealer</a></div>
                                <!--<div class="col1-1-5"><a href="#"><i class="icon-compare"></i>compare models</a></div>-->
                                <div class="col1-1-5"><a href="http://alumacraft.com/About-Alumacraft.php?content=brochure_request"><i class="icon-request-a-brochure"></i>request a brochure</a></div>
                                <div class="col1-1-5"><a href="http://www.alumacraft-gear.com" target="_blank"><i class="icon-alumacraft-gear"></i>alumacraft gear</a></div>
                            </div>
                            <div class="row">
                                <div class="col1-1-5"><a href="http://alumacraft.com/About-Alumacraft.php?content=careers"><i class="icon-alumacraft-careers"></i>career OPPORTUNITIES</a></div>
                                <div class="col1-1-5"><a href="http://alumacraft.com/About-Alumacraft.php?content=about_us"><i class="icon-about"></i>ABOUT ALUMACRAFT</a></div>
                                <div class="col1-1-5"><a href="http://alumacraft.com/About-Alumacraft.php?content=social"><i class="icon-alumalife"></i>ALUMA-LIFE</a></div>
                                <div class="col1-1-5"><a href="http://alumacraft.com/About-Alumacraft.php?content=contact_us"><i class="icon-contact"></i>CONTACT</a></div>
                            </div>
                        </div>
                    </li>
                    <li class="social-nav-wrapper" style="">
                        <div class="social-nav">
                            <a href="http://alumacraft.com/admin/Logout.php" class="loggedin" title="Dealer Portal"></a>
                            <a href="https://www.facebook.com/alumacraft" class="fb" target="_blank"></a>
                            <a href="https://www.youtube.com/user/alumacraftboatco" class="yt" target="_blank"></a>
                            <a href="http://instagram.com/alumacraftboats" class="instagram" target="_blank"></a>
                            <!--<a href="http://alumacraft.com/admin/Logout.php" ><img src="http://alumacraft.com/images/icons/unLock.png" style="height:17px;"/></a>--></div>
                    </li>
                    <!-- <li><a href="http://alumacraft.com/admin/Logout.php"><img src="http://alumacraft.com/images/icons/unLock.png" style="height:17px;"/></a></li>-->
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="nav-space"></div>	



<div class="page-section white">
    <div class="row">
        <div class="grid_12">
            <!-- verify permissions to view this sensative template -->
            <div class="row">
                <div class="grid_4">
                    <h5>Select a Dealer or Rep To Narrow Search:</h5></div>
                <div class="grid_4">
                    <form action="http://alumacraft.com/Boat-Builder.php" method="get" id="build_list_location_changer">
                        <input type="hidden" name="action" value="list">
                        <div class="row">
                            <div class="grid_3">
                                <select name="location_id" id="build_list_location_changer_select" class="build_list_search_modifier">
                                    <option value="0">All Dealers</option>
                                    <option value="786">Alumacraft ------ St. Peter</option>
                                    <option value="828">154 Marine ------ Perry</option>
                                    <option value="1291">61 Marine &amp; Sports ------ Hastings</option>
                                    <option value="1028">A.K. McCallum Co. ------ Fayetteville</option>
                                    <option value="827">Academy Ltd. ------ Katy</option>
                                    <option value="1456">Action Power ------ Brandon</option>
                                    <option value="952">Action Sports ------ Marshall</option>
                                    <option value="1412">Adirondack Mountain Sports ------ Remsen</option>
                                    <option value="1043">Advanced Small Engines &amp; Marine ------ Fergus</option>
                                    <option value="829">Al Loebig Marine ------ Wesley</option>
                                    <option value="1826">All Seasons Powersports ------ Yankton</option>
                                    <option value="786">Alumacraft Boats ------ St. Peter</option>
                                    <option value="1553">American Anchor ------ Newaygo</option>
                                    <option value="455">American Marine &amp; Motorsports Center ------ Shawano</option>
                                    <option value="1030">Anchor Marine ------ Speedwell</option>
                                    <option value="892">Anderson Boat Sales ------ Waterford</option>
                                    <option value="1031">Anderson Marine ------ Old Hickory</option>
                                    <option value="1752">Andrew Howie ------ Winnipeg</option>
                                    <option value="922">Angel Boats &amp; Motors ------ Cedar Creek</option>
                                    <option value="1830">Anglers Marine NC ------ Supply</option>
                                    <option value="1439">ARG ------ Stanchfield</option>
                                    <option value="1795">Arkansas Cash Card ------ Arkadelphia</option>
                                    <option value="1786">Auburn Outboard Marine ------ Loomis</option>
                                    <option value="41">B &amp; B Outdoors ------ Henderson</option>
                                    <option value="1443">B &amp; R Marine ------ Taylorville</option>
                                    <option value="926">B &amp; S Watercraft &amp; Marine ------ Corpus Christi</option>
                                    <option value="1045">Babin's Service Centre LTD ------ Lennox Passage</option>
                                    <option value="1046">Badiuk Equipment ------ Fort Francis</option>
                                    <option value="1047">Baie-Comeau Motorsports ------ Baie-Comeau</option>
                                    <option value="927">Bartlett Motor Co. ------ Lake Jackson</option>
                                    <option value="863">Battle's Rivercraft Marine ------ Panama City</option>
                                    <option value="954">Bay Lake Marine ------ Deerwood</option>
                                    <option value="955">Beaver Bay Sport Shop ------ Beaver Bay</option>
                                    <option value="1500">Beltzville Manor Marine ------ Lehighton</option>
                                    <option value="956">Bemidji Marine ------ Bemidji</option>
                                    <option value="842">Big Bend Marine ------ Perry</option>
                                    <option value="843">Big Boys Play Toys ------ East Palatka</option>
                                    <option value="1538">Blake's Boats ------ Corsicana</option>
                                    <option value="1789">Boat and Motor Superstore ------ Palm Harbor</option>
                                    <option value="1493">Boat House of Anaheim ------ Anaheim</option>
                                    <option value="641">Boat Mart ------ Guntersville</option>
                                    <option value="1049">Boat Mart (Red Deer) LTD ------ Red Deer</option>
                                    <option value="1546">Boat Masters Marine ------ Akron</option>
                                    <option value="957">Boat Sport Marina ------ Eagle River</option>
                                    <option value="1824">Boat Works of South Windsor ------ South Windsor</option>
                                    <option value="1274">Boater's Marine ------ Monroe</option>
                                    <option value="605">Boaters Choice Marine ------ Chippewa Falls</option>
                                    <option value="1449">Boathouse Discount Marine ------ Melbourne</option>
                                    <option value="1050">Boatland RV Marine ------ Orono</option>
                                    <option value="928">Boats Etc. ------ La Porte</option>
                                    <option value="871">Bob's Marine ------ Modesto</option>
                                    <option value="959">Boulder Marine Center ------ Boulder Junction</option>
                                    <option value="999">Bow &amp; Stern Marine ------ N. Tonawanda</option>
                                    <option value="960">Brainerd Sports &amp; Marine ------ Brainerd</option>
                                    <option value="929">Breaux &amp; Daigle Marine ------ Pierre Part</option>
                                    <option value="1505">Bridgeport Equipment &amp; Tool ------ Ripley</option>
                                    <option value="872">Broadwater Ford ------ Townsend</option>
                                    <option value="1283">Cabela's - Acworth ------ Acworth</option>
                                    <option value="809">Cabela's - Allen ------ Allen</option>
                                    <option value="1527">Cabela's - Ammon ------ Ammon</option>
                                    <option value="1528">Cabela's - Augusta ------ Augusta</option>
                                    <option value="1513">Cabela's - Avon ------ Avon</option>
                                    <option value="1362">Cabela's - Berlin ------ Hudson</option>
                                    <option value="794">Cabela's - Billings ------ Billings</option>
                                    <option value="795">Cabela's - Boise ------ Boise</option>
                                    <option value="1460">Cabela's - Bowling Green ------ Bowling Green</option>
                                    <option value="1395">Cabela's - Bristol ------ Bristol</option>
                                    <option value="810">Cabela's - Buda ------ Buda</option>
                                    <option value="1529">Cabela's - Centerville ------ Centerville</option>
                                    <option value="1530">Cabela's - Charleston ------ Charleston</option>
                                    <option value="1280">Cabela's - Cheektowaga ------ Cheektowaga</option>
                                    <option value="804">Cabela's - Columbus ------ Columbus</option>
                                    <option value="805">Cabela's - Dundee ------ Dundee</option>
                                    <option value="813">Cabela's - East Grand Forks ------ East Grand Forks</option>
                                    <option value="823">Cabela's - East Hartford ------ East Hartford</option>
                                    <option value="1361">Cabela's - Fort Mill ------ Fort Mill</option>
                                    <option value="1418">Cabela's - Fort Oglethorpe ------ Ringgold</option>
                                    <option value="811">Cabela's - Fort Worth ------ Fort Worth</option>
                                    <option value="1732">Cabela's - Gainesville ------ Gainesville</option>
                                    <option value="1330">Cabela's - Garner ------ Garner</option>
                                    <option value="796">Cabela's - Glendale ------ Glendale</option>
                                    <option value="1467">Cabela's - Gonzales ------ Gonzales</option>
                                    <option value="806">Cabela's - Grandville ------ Grandville</option>
                                    <option value="814">Cabela's - Green Bay ------ Ashwaubenon</option>
                                    <option value="1525">Cabela's - Greenville ------ Greenville</option>
                                    <option value="1533">Cabela's - Hamburg ------ Hamburg</option>
                                    <option value="807">Cabela's - Hammond ------ Hammond</option>
                                    <option value="788">Cabela's - Hazelwood ------ Hazelwood</option>
                                    <option value="808">Cabela's - Hoffman Estates ------ Hoffman Estates</option>
                                    <option value="1394">Cabela's - Huntsville ------ Huntsville</option>
                                    <option value="789">Cabela's - Kansas City ------ Kansas City</option>
                                    <option value="790">Cabela's - Kearney ------ Kearney</option>
                                    <option value="797">Cabela's - Lacey ------ Lacey</option>
                                    <option value="1438">Cabela's - League City ------ League City</option>
                                    <option value="798">Cabela's - Lehi ------ Lehi</option>
                                    <option value="1536">Cabela's - Lexington ------ Lexington</option>
                                    <option value="799">Cabela's - Lone Tree ------ Lone Tree</option>
                                    <option value="826">Cabela's - Louisville ------ Louisville</option>
                                    <option value="1526">Cabela's - Lubbock ------ Lubbock</option>
                                    <option value="1534">Cabela's - Missoula ------ Missoula</option>
                                    <option value="815">Cabela's - Mitchell ------ Mitchell</option>
                                    <option value="822">Cabela's - Newark ------ Newark</option>
                                    <option value="1391">Cabela's - Noblesville ------ Noblesville</option>
                                    <option value="1393">Cabela's - Oklahoma City ------ Oklahoma City</option>
                                    <option value="791">Cabela's - Omaha/LaVista ------ La Vista</option>
                                    <option value="816">Cabela's - Owatonna ------ Owatonna</option>
                                    <option value="800">Cabela's - Post Falls ------ Post Falls</option>
                                    <option value="817">Cabela's - Prairie Du Chien ------ Prairie Du Chien</option>
                                    <option value="818">Cabela's - Rapid City ------ Rapid City</option>
                                    <option value="801">Cabela's - Reno ------ Verdi</option>
                                    <option value="819">Cabela's - Richfield ------ Richfield</option>
                                    <option value="820">Cabela's - Rogers MN ------ Rogers</option>
                                    <option value="1462">Cabela's - Saginaw ------ Saginaw</option>
                                    <option value="824">Cabela's - Scarborough ------ Scarborough</option>
                                    <option value="1491">Cabela's - Short Pump ------ Henrico</option>
                                    <option value="792">Cabela's - Sidney ------ Sidney</option>
                                    <option value="1535">Cabela's - Springfield ------ Springfield</option>
                                    <option value="1417">Cabela's - Sun Prairie ------ Sun Prairie</option>
                                    <option value="802">Cabela's - Thornton ------ Thornton</option>
                                    <option value="803">Cabela's - Tulalip ------ Tulalip</option>
                                    <option value="1514">Cabela's - Waco ------ Waco</option>
                                    <option value="1392">Cabela's - West Chester ------ West Chester</option>
                                    <option value="825">Cabela's - Wheeling ------ Triadelphia</option>
                                    <option value="793">Cabela's - Wichita ------ Wichita</option>
                                    <option value="787">Cabela's Corporate ------ Sidney</option>
                                    <option value="845">Carter's Outboard Marine ------ Adel</option>
                                    <option value="83">Castle Rock Marine ------ New Lisbon</option>
                                    <option value="1051">Centre Moto Folie &amp; Marine ------ Anjou</option>
                                    <option value="1509">Chalk's Marina &amp; Boat Sales ------ Fishers Landing</option>
                                    <option value="1001">Chapman's Sport Shop ------ Hammond</option>
                                    <option value="962">Charlie's Boat &amp; Marine ------ Park Rapids</option>
                                    <option value="1002">Clark's Marina ------ Inlet</option>
                                    <option value="1003">Clearshade Boats ------ Windber</option>
                                    <option value="1312">Clearshade Boats ------ Patton</option>
                                    <option value="1481">Coastal Bend Marine &amp; Auto ------ Port O'Connor</option>
                                    <option value="847">Custom Marine ------ Statesboro</option>
                                    <option value="1287">Cycle &amp; Marine Supercenter ------ Pine Bluff</option>
                                    <option value="964">Dan O's Marine Sales &amp; Service ------ Watertown</option>
                                    <option value="965">Dan's Southside Marine ------ Bloomington</option>
                                    <option value="1517">Danny's Marine ------ East New Market</option>
                                    <option value="966">Dave's Sport &amp; Marine ------ Kaukauna</option>
                                    <option value="1082">Dennis Radcliff ------ Dublin</option>
                                    <option value="1475">Der's Boats ------ St. Albert</option>
                                    <option value="1799">DiMarine ------ Puerto Montt</option>
                                    <option value="1052">Dingwall Ford Sales ------ Sioux Lookout</option>
                                    <option value="119">Don's Marine ------ Lodi</option>
                                    <option value="967">Dranttel Sales &amp; Service ------ St. Peter</option>
                                    <option value="968">Duane's Marine ------ Virginia</option>
                                    <option value="1279">Dublin Marine ------ Dublin</option>
                                    <option value="848">Dusky Sports Center ------ Dania Beach</option>
                                    <option value="1804">East Port Marina &amp; Resort ------ Alpine</option>
                                    <option value="912">Euro Bass Boat ------ Garganta La Olla</option>
                                    <option value="874">Extreme Performance ------ Casper</option>
                                    <option value="1442">Extreme Torque Motorsports ------ Fredericton</option>
                                    <option value="1497">EZE Trailer &amp; Boat Sales ------ Lakeside</option>
                                    <option value="136">F &amp; S Yamaha &amp; Marine ------ Spring Grove</option>
                                    <option value="1816">Fay's Marina ------ La Porte</option>
                                    <option value="969">Feldner Chevrolet ------ St. Cloud</option>
                                    <option value="1053">Filteau Marine ------ Ste-Therese</option>
                                    <option value="1005">Fox Marine Service ------ Colchester</option>
                                    <option value="1521">Fredricks Marine ------ Hartselle</option>
                                    <option value="1006">Frontenac Harbor ------ Union Springs</option>
                                    <option value="539">Frontier Powersports ------ Fergus Falls</option>
                                    <option value="970">Galles Marine ------ Wisconsin Rapids</option>
                                    <option value="1056">Gordon Trailer Sales &amp; Rentals ------ Thunder Bay</option>
                                    <option value="832">Grace Marine ------ LeClaire</option>
                                    <option value="1808">Graham Marine Sales ------ Graham</option>
                                    <option value="971">Grand Rapids Marine ------ Grand Rapids</option>
                                    <option value="833">Great Lakes Marine Service &amp; Sales ------ Spirit Lake</option>
                                    <option value="1058">Guertin Equipment ------ Winnipeg</option>
                                    <option value="1010">Guilford Boat Yards ------ Guilford</option>
                                    <option value="546">Hallberg Marine ------ Wyoming</option>
                                    <option value="1450">Hamlin's Marine ------ Waterville</option>
                                    <option value="914">Het Noorden Watersport ------ Grootebroek</option>
                                    <option value="850">Hickory Bluff Marine ------ Waverly</option>
                                    <option value="877">Hillside Powersports &amp; Marine ------ Lakeport</option>
                                    <option value="851">Holden's Marine Center ------ Spartanburg</option>
                                    <option value="933">Hometown Marine ------ Center</option>
                                    <option value="1522">Homosassa Marine ------ Homosassa</option>
                                    <option value="1495">Howell's Marine LTD ------ Chatham</option>
                                    <option value="878">Idaho Marine ------ Boise</option>
                                    <option value="879">Inland Boats &amp; Motors ------ Ellensburg</option>
                                    <option value="895">Inland Marine ------ Augres</option>
                                    <option value="916">Inversiones Sertes SA ------ Bogota</option>
                                    <option value="1014">Irwin Marine ------ Laconia</option>
                                    <option value="1286">Irwin Marine ------ Hudson</option>
                                    <option value="972">J &amp; J Marine ------ South Haven</option>
                                    <option value="958">J &amp; K Marine ------ Detroit Lakes</option>
                                    <option value="1548">Jackson True Value ------ Jackson</option>

                                    <option value="30">Jalensky Outdoors &amp; Marine ------ Kenosha</option>
                                    <option value="1086">Jeff Jones Marine ------ Versailles</option>
                                    <option value="1298">Jett's Marine ------ Reedville</option>
                                    <option value="973">Jim's Snowmobile &amp; Marine ------ Holdingford</option>
                                    <option value="852">Jolly Roger Marina ------ Clewiston</option>
                                    <option value="1556">Kotas ------ Vilnius</option>
                                    <option value="936">Kroll's Marine ------ Rosenberg</option>
                                    <option value="1059">L' Expert Marine ------ Alma</option>
                                    <option value="974">LaCanne's Marine ------ Faribault</option>
                                    <option value="975">Lake of the Woods Marine ------ Baudette</option>
                                    <option value="536">Lake Road Marine ------ Conneaut Lake</option>
                                    <option value="896">Lake Sara Marina ------ Effingham</option>
                                    <option value="1060">Lakeside Marina ------ Red Lake</option>
                                    <option value="1457">Lapointe Sports ------ Notre-Dame Des Prairies</option>
                                    <option value="1033">Lawrenceburg Marine ------ Lawrenceburg</option>
                                    <option value="1063">Le Phare Nautique ------ St Denis de Brompton</option>
                                    <option value="1064">Leatherdale Marine ------ Ramara</option>
                                    <option value="855">Leon's Marine ------ Cullman</option>
                                    <option value="1489">Lethal Motorsports ------ Lloydminster</option>
                                    <option value="1373">Limit Out Performance Marine ------ Pacific</option>
                                    <option value="856">Lincolnton Marine ------ Lincolnton</option>
                                    <option value="976">Little Crow Sports Center ------ Spicer</option>
                                    <option value="1739">LJ Patterson Sales ------ Upper Onslow</option>
                                    <option value="1520">Location Sport ------ Matane</option>
                                    <option value="938">Lucedale Marine ------ Lucedale Marine</option>
                                    <option value="1062">Luke Town Services ------ Elie</option>
                                    <option value="254">M &amp; J Marine ------ Mosinee</option>
                                    <option value="898">M &amp; M Marine ------ Savanna</option>
                                    <option value="644">Mac Sport &amp; Marine ------ Superior</option>
                                    <option value="1814">Macon Marine Center ------ Prudenville</option>
                                    <option value="1476">Mainline RV and Marine ------ Birtle</option>
                                    <option value="1273">Mainline RV and Marine ------ Rosetown</option>
                                    <option value="882">Marina Boats &amp; Powersports ------ Lodi</option>
                                    <option value="1068">Marine One ------ Langley</option>
                                    <option value="1441">Marine Parts Outlet ------ Stuart</option>
                                    <option value="883">Marine Products Pro Shop ------ Salt Lake City</option>
                                    <option value="857">Marine Service Center of MI ------ Murrells Inlet</option>
                                    <option value="858">Marine Supply The Boating Center ------ Winter Haven</option>
                                    <option value="244">Marineland Boating Center ------ Waco</option>
                                    <option value="243">Mark's Marine ------ Grimesland</option>
                                    <option value="1304">Marsh's Marina ------ Waubaushene</option>
                                    <option value="940">Master Marine ------ San Antonio</option>
                                    <option value="899">Matteson Marine South ------ Shelbyville</option>
                                    <option value="1390">McCall Marine Sales ------ Englewood</option>
                                    <option value="859">McDuffie Marine Sporting Goods ------ Lake City</option>
                                    <option value="1070">Mercury Service ------ Moose Jaw</option>
                                    <option value="1501">Midway Auto &amp; Marine ------ Lovell</option>
                                    <option value="860">Millers Boating Center ------ Ocala</option>
                                    <option value="1537">Minnesota Cash Card ------ Saint Peter</option>
                                    <option value="861">Mitchell Marine ------ La Grange</option>
                                    <option value="978">Moorhead Marine ------ Moorhead</option>
                                    <option value="979">Moritz Sport &amp; Marine ------ Mandan</option>
                                    <option value="1016">Morris County Marine ------ Kenvil</option>
                                    <option value="1748">Moto Falardeau ------ Mont-Laurier</option>
                                    <option value="1736">MPM Group ------ </option>
                                    <option value="980">Muellers' Sales &amp; Service ------ Random Lake</option>
                                    <option value="260">Munson Marine ------ Ingleside</option>
                                    <option value="1523">N &amp; B Marine Supply and Service ------ Bordentown</option>
                                    <option value="1285">Nautica Shark ------ Noventa</option>
                                    <option value="1499">New River Marine ------ Barren Springs</option>
                                    <option value="1827">Newburg Marine ------ Newburg</option>
                                    <option value="1831">Nickel City Motors ------ Thompson</option>
                                    <option value="1761">Nicola Motorsports ------ Merritt</option>
                                    <option value="1072">Noddings' Sales &amp; Service ------ Bridgewater</option>
                                    <option value="1073">Norsask Farm Equipment ------ North Battleford</option>
                                    <option value="1758">Northshore Sports &amp; Auto ------ Echo Bay</option>
                                    <option value="480">Northstar Powersports &amp; Marine ------ Albert Lea</option>
                                    <option value="885">Northwest Boat Center ------ Portland</option>
                                    <option value="902">Parma Marine ------ Parma</option>
                                    <option value="1817">Performance Sales &amp; Service ------ Lake Placid</option>
                                    <option value="942">Pete Jorgensen Marine ------ Beaumont</option>
                                    <option value="694">Play Powersports &amp; Marine ------ Sudbury</option>
                                    <option value="328">Point Breeze Marine ------ Saratoga Springs</option>
                                    <option value="1020">Port Side Marine ------ Baltimore</option>
                                    <option value="1731">Portside Marine ------ Winter Park</option>
                                    <option value="1452">Precision Water &amp; Powersports ------ Jefferson City</option>
                                    <option value="1797">Proctor Marine ------ Simcoe</option>
                                    <option value="1539">Prospect ------ </option>
                                    <option value="917">Prowabol Srl ------ Santa Cruz</option>
                                    <option value="1803">Pure Honda ------ Minot</option>
                                    <option value="1077">Rapid Power Sports ------ Little Rapids</option>
                                    <option value="1021">Reading Boat Works ------ Reading</option>
                                    <option value="1473">Red River Boating Center ------ Heber Springs</option>
                                    <option value="887">Reeds Snow Machine &amp; Marine ------ Fairbanks</option>
                                    <option value="982">Retzlaff's Marine ------ New Ulm</option>
                                    <option value="904">Richards Boatworks ------ Escanaba</option>
                                    <option value="1078">Rideau Ferry Marine ------ Rideau Ferry</option>
                                    <option value="1757">River Valley Power &amp; Sport ------ Rochester</option>
                                    <option value="1756">River Valley Power &amp; Sport ------ Redwing</option>
                                    <option value="1554">Riverrunner Recreation ------ Taber</option>
                                    <option value="1503">Riverview Marina ------ Lewiston</option>
                                    <option value="773">RJ's Outboard Sales &amp; Service ------ Brandon</option>
                                    <option value="349">Robbins Marine ------ Milton</option>
                                    <option value="983">Rock River Motorsports ------ Edgerton</option>
                                    <option value="1552">Rockhill Marine ------ Lincoln</option>
                                    <option value="945">Rockwall Marine ------ Rockwall</option>
                                    <option value="918">Rod &amp; Pod ------ Brassac Les Mines</option>
                                    <option value="1023">Rodger Smith Marine ------ Lavalette</option>
                                    <option value="1426">RPM Marine &amp; Engine Repairs ------ Campbellton</option>
                                    <option value="1550">Rugged Marine Supplies ------ Chester</option>
                                    <option value="1037">Sandhill Boat Co. ------ Dayton</option>
                                    <option value="1451">Sandpoint Marine &amp; Motorsports ------ Ponderay</option>
                                    <option value="1810">Savannah Marine ------ Savannah</option>
                                    <option value="1763">Schneider's Motorsports &amp; Marine ------ Fair Haven</option>
                                    <option value="1813">Sealand Marine ------ Omaha</option>
                                    <option value="17">Sealand Marine ------ Norfolk</option>
                                    <option value="1024">Seaman's Marine ------ Honesdale</option>
                                    <option value="864">Seels Outboard Service ------ Charleston</option>
                                    <option value="889">Semper Speed &amp; Marine ------ Madera</option>
                                    <option value="984">Simonar Sports ------ Luxemburg</option>
                                    <option value="651">SiteDoneRite ------ Valdosta</option>
                                    <option value="1734">Ski-N-Sports ------ Tyler</option>
                                    <option value="1788">Skipper Marine Corp ------ Winthrop Harbor</option>
                                    <option value="1792">SkipperBud's ------ Fenton</option>
                                    <option value="1793">SkipperBud's ------ Bay City</option>
                                    <option value="1794">SkipperBud's ------ Grand Haven</option>
                                    <option value="1790">SkipperBud's ------ Pewaukee</option>
                                    <option value="1791">SkipperBud's ------ Oshkosh</option>
                                    <option value="1811">SkipperBud's ------ Round Lake</option>
                                    <option value="1271">Smith Mountain Boat &amp; Tackle ------ Penhook</option>
                                    <option value="985">Smitty's Marine ------ Lake City</option>
                                    <option value="1551">Solon Power Sports ------ Solon</option>
                                    <option value="593">Soo Sport Sales ------ Sioux Falls</option>
                                    <option value="986">Spellman's Marina ------ Oshkosh</option>
                                    <option value="987">Sport Country ATV &amp; Marine ------ Black River Falls</option>
                                    <option value="1275">Sportsman Sales &amp; Service ------ Aberdeen</option>
                                    <option value="988">Stark's Sport Shop, Inc. ------ Prairie Du Chien</option>
                                    <option value="1026">Stewart Marine ------ Carmel</option>
                                    <option value="1549">Stow Away Marine &amp; More ------ Crawfordville</option>
                                    <option value="989">Stub's Marine ------ Alexandria</option>
                                    <option value="867">Sutton Marine ------ Aiken</option>
                                    <option value="750">Tall Timbers Marina ------ Monticello</option>
                                    <option value="395">Taylor Marine Performance Center ------ Belleville</option>
                                    <option value="1396">The Boat House ------ Athens</option>
                                    <option value="400">The Boat Place ------ Rockville</option>
                                    <option value="1818">The Great Outdoors ------ Cherryville</option>
                                    <option value="1036">The Old Bait House ------ Paducah</option>
                                    <option value="919">The Outdoor Company ------ Pilar, Buenos Aires</option>
                                    <option value="949">The Sportsman ------ Abbeville</option>
                                    <option value="1039">Tideline Marine ------ Jacksonville</option>
                                    <option value="990">Tomahawk Sports Center ------ Tomahawk</option>
                                    <option value="1465">Tompkins Hardware Limited ------ Emo</option>
                                    <option value="1770">Tourist RV Sales ------ Port Hope</option>
                                    <option value="1490">Town &amp; Country Marine ------ Trout</option>
                                    <option value="1080">Tweed Recreational Sport &amp; Lawn ------ Tweed</option>
                                    <option value="1389">Tycoon Motorsports ------ Kingston</option>
                                    <option value="1735">Unity Marine Group ------ St Anne</option>
                                    <option value="838">Upper Iowa Marine ------ Decorah</option>
                                    <option value="1482">Urban Sport ------ Arnprior</option>
                                    <option value="1040">Uwharrie Marine Sales &amp; Service ------ Mount Gilead</option>
                                    <option value="891">Valentine's Marine ------ Sheridan</option>
                                    <option value="1504">Venture Riverboats ------ Chilliwack</option>
                                    <option value="920">Volga Boat ------ Uglich</option>
                                    <option value="992">Voyageur Marine ------ Kabetogama</option>
                                    <option value="1823">Walley's Marine &amp; Auto Sales ------ Mobile</option>
                                    <option value="1081">Walsten Marine ------ Kinmount</option>
                                    <option value="993">Warner's Dock ------ New Richmond</option>
                                    <option value="951">Water Moccasin Outdoors ------ Stonewall</option>
                                    <option value="840">Waters Edge Marine ------ Polk City</option>
                                    <option value="1806">Weather Oar Knot Sales &amp; Service ------ Union</option>
                                    <option value="921">Westgear ------ Halmstad</option>
                                    <option value="1474">Westlock Powersports &amp; Marine ------ Westlock</option>
                                    <option value="1776">Westlock Powersports &amp; Marine ------ Edmonton</option>
                                    <option value="1294">Westre's Marine &amp; Sport ------ St. Cloud</option>
                                    <option value="994">Wheel Camping &amp; Marine ------ Worthington</option>
                                    <option value="1041">Wilcox Bait &amp; Tackle ------ Newport News</option>
                                    <option value="995">Wild River Sport &amp; Marine ------ Trego</option>
                                    <option value="996">Willey's Marine ------ McGregor</option>
                                    <option value="869">Wilson Marine ------ Newberry</option>
                                    <option value="997">Wolf River Marine ------ Fremont</option>
                                    <option value="1087">Woodlake Marine ------ Kenora</option>
                                    <option value="1335">Woodland Resort &amp; Marine, Inc. ------ Devils Lake</option>
                                    <option value="1511">Woods Boat House &amp; Power Sports ------ Fairmont</option>
                                    <option value="599">Wyland's Marine ------ Mishawaka</option>
                                    <option value="998">Yamaha Motorsports ------ Hutchinson</option>
                                </select>
                            </div>
                            <div class="grid_1">
                                <input type="submit" value=" GO ">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="grid_4">
                    <form action="http://alumacraft.com/Boat-Builder.php" method="get" id="build_list_rep_changer">
                        <input type="hidden" name="action" value="list">
                        <div class="row">
                            <div class="grid_3">
                                <!--<label style="color:#fff;">Regional Sales Rep:</label><br />-->
                                <select name="rep_id" id="build_list_rep_changer_select" class="build_list_search_modifier">
                                    <option value="">-- All --</option>
                                    <option value="2223">Andrew Klopak</option>
                                    <option value="2215">Brian Caughron</option>
                                    <option value="2216">Chris George</option>
                                    <option value="3288">Clint Dwire</option>
                                    <option value="2217">Dan Hasshaw</option>
                                    <option value="2219">Darren Landry</option>
                                    <option value="2218">Dennis Radcliff</option>
                                    <option value="3706">Duane Krueger</option>
                                    <option value="2514">House Account</option>
                                    <option value="2220">Jim Hobson</option>
                                    <option value="2222">Kirk Lewellen</option>
                                    <option value="2956">Lynndon Hecker</option>
                                    <option value="2273">Pee Wee Strother</option>
                                    <option value="2221">Ryan Kagy</option>
                                    <option value="3511">Steve Peterson</option>
                                    <option value="2943">Theresa Olivas</option>
                                </select>
                            </div>
                            <div class="grid_1">
                                <input type="submit" value=" GO ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <form action="http://alumacraft.com/Boat-Builder.php?dothis=1" method="get" id="bulk_build_list_form">
                <input type="hidden" name="action" id="bulk_print_download_action" value="print_batch">
                <input type="hidden" name="pricing" id="" value="cost">
                <div>
                    <div class="invisibleTabs ui-tabs ui-corner-all ui-widget ui-widget-content">
                        <ul class="tabs ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header" id="list_build_tab_headers" role="tablist">
                            <li role="tab" tabindex="0" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active" aria-controls="internet_quotes" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#internet_quotes" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-1">Internet Leads</a></li>
                            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="dealer_quotes" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#dealer_quotes" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-2">Dealer/Rep Quotes</a></li>
                            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="orders" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false"><a href="#orders" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-3">Pending Orders</a></li>
                            <!-- OLD NAMING CONVENTION changed 2/21 by rusty per James><li><a href="#orders">Dealership Orders</a></li><li class="unbind"><a href="http://reg.alumacraft.com/reg/index.php?session=4830411d273795e53741938bc4028b80&userid=4189#pending">Pending Approval</a></li><li class="unbind"><a href="http://reg.alumacraft.com/reg/index.php?session=4830411d273795e53741938bc4028b80&userid=4189#approved">Approved</a></li><li class="unbind"><a href="http://reg.alumacraft.com/reg/index.php?session=4830411d273795e53741938bc4028b80&userid=4189#inventory">Inventory</a></li><li class="unbind"><a href="http://reg.alumacraft.com/reg/index.php?session=4830411d273795e53741938bc4028b80&userid=4189#registered">Registered</a></li>-->
                            <li class="unbind ui-tabs-tab ui-corner-top ui-state-default ui-tab" role="tab" tabindex="-1" aria-controls="ui-id-5" aria-labelledby="ui-id-4" aria-selected="false" aria-expanded="false"><a href="http://reg.alumacraft.com/reg/index.php?session=4830411d273795e53741938bc4028b80&amp;userid=4189#pending" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-4">Pending Acknowledgement</a></li>
                            <li class="unbind ui-tabs-tab ui-corner-top ui-state-default ui-tab" role="tab" tabindex="-1" aria-controls="ui-id-7" aria-labelledby="ui-id-6" aria-selected="false" aria-expanded="false"><a href="http://reg.alumacraft.com/reg/index.php?session=4830411d273795e53741938bc4028b80&amp;userid=4189#approved" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-6">Acknowledged</a></li>
                            <li class="unbind ui-tabs-tab ui-corner-top ui-state-default ui-tab" role="tab" tabindex="-1" aria-controls="ui-id-9" aria-labelledby="ui-id-8" aria-selected="false" aria-expanded="false"><a href="http://reg.alumacraft.com/reg/index.php?session=4830411d273795e53741938bc4028b80&amp;userid=4189#inventory" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-8">Dealer Inventory</a></li>
                            <li class="unbind ui-tabs-tab ui-corner-top ui-state-default ui-tab" role="tab" tabindex="-1" aria-controls="ui-id-11" aria-labelledby="ui-id-10" aria-selected="false" aria-expanded="false"><a href="http://reg.alumacraft.com/reg/index.php?session=4830411d273795e53741938bc4028b80&amp;userid=4189#registered" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-10">Registered</a></li>
                            <!--<a href="http://reg.alumacraft.com/reg/index.php?session=4830411d273795e53741938bc4028b80&userid=4189#pending">Pending Approval</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://reg.alumacraft.com/reg/index.php?session=4830411d273795e53741938bc4028b80&userid=4189#approved">Approved</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://reg.alumacraft.com/reg/index.php?session=4830411d273795e53741938bc4028b80&userid=4189#inventory">Inventory</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://reg.alumacraft.com/reg/index.php?session=4830411d273795e53741938bc4028b80&userid=4189#registered">Registered</a>&nbsp;&nbsp;&nbsp;&nbsp;--></ul>
                        <div class="clearFloat"></div>
                        <div id="internet_quotes" class="transparentBackground blueLinks build_list_set ui-tabs-panel ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
                            <div style="float:left;">
                                <p class="link boat_builder_list_pager" style="margin:10px 0;" user_id="4189" build_type="internet_quotes" location_id="" rep_id=""><a href="/Boat-Builder.php?next=1&amp;" text="First" class="list_build_pager">First</a> | [1] <a href="/Boat-Builder.php?next=21&amp;" class="list_build_pager">[2]</a> <a href="/Boat-Builder.php?next=41&amp;" class="list_build_pager">[3]</a> <a href="/Boat-Builder.php?next=61&amp;" class="list_build_pager">[4]</a> <a href="/Boat-Builder.php?next=81&amp;" class="list_build_pager">[5]</a> <a href="/Boat-Builder.php?next=21&amp;" text=" ...Next->" class="list_build_pager"> ...Next-&gt;</a> | <a href="/Boat-Builder.php?next=14661&amp;" text="Last" class="list_build_pager">Last</a></p>
                            </div>
                            <div class="clear"></div>
                            <table class="sortable_table tablesorter">
                                <thead>
                                    <tr>
                                        <th class="sortable_table_header">Customer</th>
                                        <th class="sortable_table_header">Dealer</th>
                                        <th class="sortable_table_header">Boat</th>
                                        <th class="sortable_table_header">Quote Date</th>
                                        <th class="sortable_table_header">Quote Updated</th>
                                        <th class="sortable_table_header">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>FRED </td>
                                        <td>Anderson Boat Sales</td>
                                        <td>2018 Bass 175 Prowler</td>
                                        <td>Nov 6, 2017</td>
                                        <td>Nov 6, 2017</td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47778&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47778&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47778&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47778&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47778&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47778&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47778" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47778" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47778#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>FRED </td>
                                        <td>Anderson Boat Sales</td>
                                        <td>2018 Bass 175 Prowler</td>
                                        <td>Nov 6, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47776&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47776&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47776&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47776&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47776&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47776&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47776" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47776" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47776#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>Luke Kielbaos</td>
                                        <td>Alumacraft Boats</td>
                                        <td>2018 Sierra 1436 LT</td>
                                        <td>Nov 6, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47767&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47767&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47767&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47767&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47767&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47767&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47767&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47767&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47767&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47767" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47767" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47767#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>jon 16</td>
                                        <td>Alumacraft Boats</td>
                                        <td>2018 Riveted Jon MV 1648</td>
                                        <td>Nov 6, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47766&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47766&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47766&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47766&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47766&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47766&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47766&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47766&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47766&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47766" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47766" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47766#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>camo2 </td>
                                        <td>Alumacraft Boats</td>
                                        <td>2018 MV Tiller MV 1546</td>
                                        <td>Nov 6, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47765&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47765&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47765&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47765&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47765&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47765&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47765&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47765&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47765&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47765" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47765" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47765#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>Paul Hoholik</td>
                                        <td>Richards Boatworks</td>
                                        <td>2018 All Weld MV 1650 SC</td>
                                        <td>Nov 5, 2017</td>
                                        <td>Nov 6, 2017</td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47764&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47764&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47764&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47764&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47764&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47764&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47764&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47764&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47764&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47764" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47764" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47764#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>Paul Hoholik</td>
                                        <td>Richards Boatworks</td>
                                        <td>2018 All Weld MV 1650 SC</td>
                                        <td>Nov 5, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47763&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47763&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47763&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47763&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47763&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47763&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47763&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47763&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47763&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47763" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47763" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47763#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>Paul Hoholik</td>
                                        <td>Richards Boatworks</td>
                                        <td>2018 All Weld MV 1650 SC</td>
                                        <td>Nov 5, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47762&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47762&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47762&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47762&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47762&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47762&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47762&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47762&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47762&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47762" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47762" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47762#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>Paul Hoholik</td>
                                        <td>Richards Boatworks</td>
                                        <td>2018 All Weld MV 1650 SC</td>
                                        <td>Nov 5, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47761&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47761&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47761&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47761&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47761&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47761&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47761&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47761&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47761&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47761" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47761" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47761#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>Joel </td>
                                        <td>RPM Marine &amp; Engine Repairs</td>
                                        <td>2018 Riveted Jon 1648</td>
                                        <td>Nov 5, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47754&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47754&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47754&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47754&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47754&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47754&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47754&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47754&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47754&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47754" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47754" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47754#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>Joel </td>
                                        <td>RPM Marine &amp; Engine Repairs</td>
                                        <td>2018 Riveted Jon 1648</td>
                                        <td>Nov 5, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47753&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47753&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47753&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47753&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47753&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47753&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47753&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47753&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47753&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47753" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47753" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47753#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>Bruce </td>
                                        <td>Hallberg Marine</td>
                                        <td>2018 Shadow Series 185 Sport</td>
                                        <td>Nov 4, 2017</td>
                                        <td>Nov 4, 2017</td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47744&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47744&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47744&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47744&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47744&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47744&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47744&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47744&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47744&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47744" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47744" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47744#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>MyAlumaCraft </td>
                                        <td>Kroll's Marine</td>
                                        <td>2018 Riveted Jon 1848</td>
                                        <td>Nov 4, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47740&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47740&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47740&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47740&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47740&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47740&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47740&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47740&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47740&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47740" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47740" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47740#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>camo </td>
                                        <td>Alumacraft Boats</td>
                                        <td>2018 Waterfowler Waterfowler 15</td>
                                        <td>Nov 4, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47739&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47739&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47739&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47739&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47739&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47739&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47739&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47739&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47739&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47739" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47739" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47739#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>16 jon</td>
                                        <td>Alumacraft Boats</td>
                                        <td>2018 Riveted Jon MV 1648</td>
                                        <td>Nov 4, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47738&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47738&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47738&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47738&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47738&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47738&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47738&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47738&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47738&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47738" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47738" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47738#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>Chester Granard</td>
                                        <td>Inland Boats &amp; Motors</td>
                                        <td>2018 Trophy 195</td>
                                        <td>Nov 4, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47735&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47735&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47735&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47735&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47735&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47735&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47735&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47735&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47735&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47735" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47735" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47735#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>Competitor 165</td>
                                        <td>SkipperBud's</td>
                                        <td>2018 Competitor 165 CS</td>
                                        <td>Nov 4, 2017</td>
                                        <td>Nov 6, 2017</td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47726&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47726&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47726&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47726&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47726&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47726&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47726&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47726&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47726&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47726" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47726" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47726#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>cartier bracciali imitazione</td>
                                        <td>Alumacraft Boats</td>
                                        <td>2017 Riveted Jon MV 1648 20</td>
                                        <td>Nov 4, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47724&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47724&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47724&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47724&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47724&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47724&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47724&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47724&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47724&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47724" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47724#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>copia cartier pasha</td>
                                        <td>Alumacraft Boats</td>
                                        <td>2017 Escape 145 CS</td>
                                        <td>Nov 4, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47720&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47720&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47720&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47720&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47720&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47720&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47720&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47720&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47720&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47720" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47720#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>Bob West</td>
                                        <td>Dave's Sport &amp; Marine</td>
                                        <td>2018 Competitor 165 CS</td>
                                        <td>Nov 3, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47686&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47686&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47686&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47686&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47686&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47686&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47686&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47686&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47686&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47686" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47686" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47686#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                </tbody>
                            </table><span class="link boat_builder_list_pager" user_id="4189" build_type="internet_quotes" location_id="" rep_id=""><a href="/Boat-Builder.php?next=1&amp;" text="First" class="list_build_pager">First</a> |   [1]  <a href="/Boat-Builder.php?next=21&amp;" class="list_build_pager">[2]</a>  <a href="/Boat-Builder.php?next=41&amp;" class="list_build_pager">[3]</a>  <a href="/Boat-Builder.php?next=61&amp;" class="list_build_pager">[4]</a>  <a href="/Boat-Builder.php?next=81&amp;" class="list_build_pager">[5]</a>  <a href="/Boat-Builder.php?next=21&amp;" text=" ...Next->" class="list_build_pager"> ...Next-&gt;</a> | <a href="/Boat-Builder.php?next=14661&amp;" text="Last" class="list_build_pager">Last</a></span></div>
                        <div id="dealer_quotes" class="transparentBackground blueLinks build_list_set ui-tabs-panel ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="true" style="display: none;">
                            <div style="float:left;">
                                <p class="link boat_builder_list_pager" style="margin:10px 0;" user_id="4189" build_type="dealer_quotes" location_id="" rep_id=""><a href="/Boat-Builder.php?next=1&amp;" text="First" class="list_build_pager">First</a> | [1] <a href="/Boat-Builder.php?next=21&amp;" class="list_build_pager">[2]</a> <a href="/Boat-Builder.php?next=41&amp;" class="list_build_pager">[3]</a> <a href="/Boat-Builder.php?next=61&amp;" class="list_build_pager">[4]</a> <a href="/Boat-Builder.php?next=81&amp;" class="list_build_pager">[5]</a> <a href="/Boat-Builder.php?next=21&amp;" text=" ...Next->" class="list_build_pager"> ...Next-&gt;</a> | <a href="/Boat-Builder.php?next=14081&amp;" text="Last" class="list_build_pager">Last</a></p>
                            </div>
                            <div class="clear"></div>
                            <table class="sortable_table tablesorter">
                                <thead>
                                    <tr>
                                        <th class=""></th>
                                        <th class="sortable_table_header">Customer</th>
                                        <th class="sortable_table_header">Web #</th>
                                        <th class="sortable_table_header">Dealer</th>
                                        <th class="sortable_table_header">Boat</th>
                                        <th class="sortable_table_header" style="width:90px;">Quote Date</th>
                                        <th class="sortable_table_header" style="width:90px;">Quote Updated</th>
                                        <th class="sortable_table_header" style="width:200px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47782" name="build_batch_checkboxes[]">
                                        </td>
                                        <td>Brandon Marr</td>
                                        <td>47782 </td>
                                        <td>Guertin Equipment</td>
                                        <td>2018 Shadow Series 185</td>
                                        <td>Nov 6, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47782&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47782&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47782&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47782&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47782&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47782&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47782&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47782&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47782&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47782" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47782" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47782#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47781" name="build_batch_checkboxes[]">
                                        </td>
                                        <td> </td>
                                        <td>47781 </td>
                                        <td>Spellman's Marina</td>
                                        <td>2018 Yukon 165 Tiller</td>
                                        <td>Nov 6, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47781&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47781&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47781&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47781&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47781&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47781&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47781&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47781&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47781&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47781" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47781" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47781#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47742" name="build_batch_checkboxes[]">
                                        </td>
                                        <td> </td>
                                        <td>47742 </td>
                                        <td>Alumacraft Boats</td>
                                        <td>2018 Tournament Pro 195 CS</td>
                                        <td>Nov 4, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47742&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47742&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47742&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47742&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47742&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47742&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47742&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47742&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47742&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47742" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47742" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47742#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47734" name="build_batch_checkboxes[]">
                                        </td>
                                        <td> </td>
                                        <td>47734 </td>
                                        <td>Hallberg Marine</td>
                                        <td>2018 Competitor 175</td>
                                        <td>Nov 4, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47734&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47734&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47734&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47734&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47734&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47734&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47734&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47734&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47734&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47734" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47734" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47734#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47733" name="build_batch_checkboxes[]">
                                        </td>
                                        <td>Urban </td>
                                        <td>47733 </td>
                                        <td>Jalensky Outdoors &amp; Marine</td>
                                        <td>2018 Competitor 175 CS</td>
                                        <td>Nov 4, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47733&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47733&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47733&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47733&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47733&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47733&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47733&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47733&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47733&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47733" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47733" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47733#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47732" name="build_batch_checkboxes[]">
                                        </td>
                                        <td> </td>
                                        <td>47732 </td>
                                        <td>Mainline RV and Marine</td>
                                        <td>2018 MV Tiller MV 1650</td>
                                        <td>Nov 4, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47732&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47732&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47732&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47732&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47732&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47732&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47732&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47732&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47732&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47732" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47732" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47732#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47730" name="build_batch_checkboxes[]">
                                        </td>
                                        <td> </td>
                                        <td>47730 </td>
                                        <td>Leatherdale Marine</td>
                                        <td>2018 Trophy 195</td>
                                        <td>Nov 4, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47730&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47730&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47730&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47730&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47730&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47730&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47730&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47730&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47730&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47730" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47730" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47730#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47729" name="build_batch_checkboxes[]">
                                        </td>
                                        <td> </td>
                                        <td>47729 </td>
                                        <td>Fay's Marina</td>
                                        <td>2018 Escape 165 CS</td>
                                        <td>Nov 4, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47729&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47729&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47729&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47729&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47729&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47729&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47729&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47729&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47729&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47729" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47729" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47729#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47728" name="build_batch_checkboxes[]">
                                        </td>
                                        <td> </td>
                                        <td>47728 </td>
                                        <td>Fay's Marina</td>
                                        <td>2018 Escape 165 CS</td>
                                        <td>Nov 4, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47728&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47728&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47728&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47728&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47728&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47728&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47728&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47728&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47728&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47728" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47728" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47728#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47723" name="build_batch_checkboxes[]">
                                        </td>
                                        <td> </td>
                                        <td>47723 </td>
                                        <td>Clearshade Boats</td>
                                        <td>2018 Bass 165 Prowler</td>
                                        <td>Nov 4, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47723&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47723&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47723&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47723&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47723&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47723&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47723&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47723&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47723&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47723" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47723" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47723#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47722" name="build_batch_checkboxes[]">
                                        </td>
                                        <td>CAVE, PAT W/175</td>
                                        <td>47722 </td>
                                        <td>Savannah Marine</td>
                                        <td>2018 Trophy 195</td>
                                        <td>Nov 4, 2017</td>
                                        <td>Nov 4, 2017</td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47722&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47722&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47722&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47722&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47722&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47722&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47722&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47722&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47722&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47722" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47722" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47722#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47719" name="build_batch_checkboxes[]">
                                        </td>
                                        <td> </td>
                                        <td>47719 </td>
                                        <td>Alumacraft Boats</td>
                                        <td>2018 Tournament Pro 195 Sport</td>
                                        <td>Nov 3, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47719&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47719&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47719&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47719&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47719&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47719&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47719&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47719&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47719&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47719" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47719" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47719#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47711" name="build_batch_checkboxes[]">
                                        </td>
                                        <td>Denny Crampton, Rand 11-3-17 VF115</td>
                                        <td>47711 </td>
                                        <td>Hallberg Marine</td>
                                        <td>2018 Competitor 205</td>
                                        <td>Nov 3, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47711&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47711&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47711&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47711&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47711&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47711&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47711&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47711&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47711&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47711" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47711" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47711#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47710" name="build_batch_checkboxes[]">
                                        </td>
                                        <td>Kamil </td>
                                        <td>47710 </td>
                                        <td>Cabela's - Avon</td>
                                        <td>2018 V 16</td>
                                        <td>Nov 3, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47710&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47710&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47710&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47710&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47710&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47710&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47710&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47710&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47710&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47710" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47710" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47710#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47709" name="build_batch_checkboxes[]">
                                        </td>
                                        <td>mike h</td>
                                        <td>47709 </td>
                                        <td>Grand Rapids Marine</td>
                                        <td>2018 Competitor 165 CS</td>
                                        <td>Nov 3, 2017</td>
                                        <td>Nov 3, 2017</td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47709&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47709&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47709&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47709&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47709&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47709&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47709&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47709&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47709&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47709" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47709" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47709#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47708" name="build_batch_checkboxes[]">
                                        </td>
                                        <td>Boat Show</td>
                                        <td>47708 </td>
                                        <td>Weather Oar Knot Sales &amp; Service</td>
                                        <td>2018 Crappie Deluxe</td>
                                        <td>Nov 3, 2017</td>
                                        <td>Nov 3, 2017</td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47708&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47708&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47708&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47708&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47708&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47708&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47708&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47708&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47708&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47708" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47708" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47708#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47707" name="build_batch_checkboxes[]">
                                        </td>
                                        <td>Boat Show?</td>
                                        <td>47707 </td>
                                        <td>Weather Oar Knot Sales &amp; Service</td>
                                        <td>2018 Bay Series 1860 Bay</td>
                                        <td>Nov 3, 2017</td>
                                        <td>Nov 3, 2017</td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47707&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47707&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47707&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47707&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47707&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47707&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47707&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47707&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47707&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47707" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47707" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47707#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47706" name="build_batch_checkboxes[]">
                                        </td>
                                        <td>Boat Show?</td>
                                        <td>47706 </td>
                                        <td>Weather Oar Knot Sales &amp; Service</td>
                                        <td>2018 Pro Series 185</td>
                                        <td>Nov 3, 2017</td>
                                        <td>Nov 3, 2017</td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47706&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47706&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47706&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47706&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47706&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47706&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47706&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47706&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47706&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47706" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47706" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47706#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47705" name="build_batch_checkboxes[]">
                                        </td>
                                        <td>Boat Show?</td>
                                        <td>47705 </td>
                                        <td>Weather Oar Knot Sales &amp; Service</td>
                                        <td>2018 Riveted Jon MV 1648</td>
                                        <td>Nov 3, 2017</td>
                                        <td>Nov 3, 2017</td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47705&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47705&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47705&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47705&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47705&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47705&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47705&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47705&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47705&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47705" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47705" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47705#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47703" name="build_batch_checkboxes[]">
                                        </td>
                                        <td> </td>
                                        <td>47703 </td>
                                        <td>Galles Marine</td>
                                        <td>2018 Competitor 165 CS</td>
                                        <td>Nov 3, 2017</td>
                                        <td></td>
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47703&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47703&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47703&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47703&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47703&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47703&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47703&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47703&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47703&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47703" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47703" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47703#dealer_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a></td>
                                    </tr>
                                </tbody>
                            </table><span class="link boat_builder_list_pager" user_id="4189" build_type="dealer_quotes" location_id="" rep_id=""><a href="/Boat-Builder.php?next=1&amp;" text="First" class="list_build_pager">First</a> |   [1]  <a href="/Boat-Builder.php?next=21&amp;" class="list_build_pager">[2]</a>  <a href="/Boat-Builder.php?next=41&amp;" class="list_build_pager">[3]</a>  <a href="/Boat-Builder.php?next=61&amp;" class="list_build_pager">[4]</a>  <a href="/Boat-Builder.php?next=81&amp;" class="list_build_pager">[5]</a>  <a href="/Boat-Builder.php?next=21&amp;" text=" ...Next->" class="list_build_pager"> ...Next-&gt;</a> | <a href="/Boat-Builder.php?next=14081&amp;" text="Last" class="list_build_pager">Last</a></span></div>
                        <div id="orders" class="transparentBackground blueLinks build_list_set ui-tabs-panel ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                            <div style="float:left;">
                                <p class="link boat_builder_list_pager" style="margin:10px 0;" user_id="4189" build_type="orders" location_id="" rep_id=""><a href="/Boat-Builder.php?next=1&amp;" text="First" class="list_build_pager">First</a> | [1] | <a href="/Boat-Builder.php?next=1&amp;" text="Last" class="list_build_pager">Last</a></p>
                            </div>
                            <div class="clear"></div>
                            <table class="sortable_table tablesorter">
                                <thead>
                                    <tr>
                                        <th class=""></th>
                                        <th class="sortable_table_header">Load #</th>
                                        <th class="sortable_table_header">Web #</th>
                                        <th class="sortable_table_header">Customer</th>
                                        <th class="sortable_table_header">Dealer</th>
                                        <th class="sortable_table_header">Boat</th>
                                        <th class="sortable_table_header" style="width:90px;">Order Date</th>
                                        <!--<th class="sortable_table_header" style="width:90px;">Order Updated</th>-->
                                        <th class="sortable_table_header" style="width:250px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47721" name="build_batch_checkboxes[]">
                                        </td>
                                        <td></td>
                                        <td>47721 </td>
                                        <td>Test build</td>
                                        <td>SiteDoneRite</td>
                                        <td>2018 Competitor 165 CS</td>
                                        <td>Nov 4, 2017</td>
                                        <!--<td>Nov 4, 2017</td>-->
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47721&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47721&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47721&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47721&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47721&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47721&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47721&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47721&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47721&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47721" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47721" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47721#orders" class="t_icon t_delete delete_build_confirm" title="delete">delete</a>
                                            <!-- javascript function gets some build info to display in an overlay where order info is either confirmed or is gathered -->
                                            <!--<a href="http://alumacraft.com/Boat-Builder.php?action=approve&build_id=47721#approved" build_id="47721" class="t_icon t_approve approve_build" title="approve">approve</a>--></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47717" name="build_batch_checkboxes[]">
                                        </td>
                                        <td></td>
                                        <td>47717 </td>
                                        <td>TEST </td>
                                        <td>Minnesota Cash Card</td>
                                        <td>2018 Classic 165 CS</td>
                                        <td>Nov 3, 2017</td>
                                        <!--<td>Nov 3, 2017</td>-->
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47717&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47717&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47717&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47717&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47717&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47717&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47717&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47717&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47717&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47717" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47717" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47717#orders" class="t_icon t_delete delete_build_confirm" title="delete">delete</a>
                                            <!-- javascript function gets some build info to display in an overlay where order info is either confirmed or is gathered -->
                                            <!--<a href="http://alumacraft.com/Boat-Builder.php?action=approve&build_id=47717#approved" build_id="47717" class="t_icon t_approve approve_build" title="approve">approve</a>--></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47704" name="build_batch_checkboxes[]">
                                        </td>
                                        <td></td>
                                        <td>47704 </td>
                                        <td>Keopple </td>
                                        <td>Warner's Dock</td>
                                        <td>2018 Edge 185 Sport</td>
                                        <td>Nov 3, 2017</td>
                                        <!--<td></td>-->
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47704&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47704&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47704&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47704&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47704&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47704&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47704&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47704&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47704&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47704" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47704" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47704#orders" class="t_icon t_delete delete_build_confirm" title="delete">delete</a>
                                            <!-- javascript function gets some build info to display in an overlay where order info is either confirmed or is gathered -->
                                            <!--<a href="http://alumacraft.com/Boat-Builder.php?action=approve&build_id=47704#approved" build_id="47704" class="t_icon t_approve approve_build" title="approve">approve</a>--></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="47105" name="build_batch_checkboxes[]">
                                        </td>
                                        <td></td>
                                        <td>47105 </td>
                                        <td> </td>
                                        <td>Skipper Marine Corp</td>
                                        <td>2018 Competitor 205 Sport</td>
                                        <td>Oct 18, 2017</td>
                                        <!--<td>Oct 27, 2017</td>-->
                                        <td><a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
                                            <div class="submenu">
                                                <fieldset style="margin:0;">
                                                    <legend>Order Forms</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47105&amp;pricing=cost">Dealer Cost</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47105&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print&amp;build_id=47105&amp;pricing=msrp">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Retail Forms</legend>
                                                    <!--<a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&build_id=47105&pricing=price&format=pdf">Selling Price</a><br>--><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=47105&amp;pricing=msrp&amp;format=pdf">MSRP</a>
                                                    <br>
                                                </fieldset>
                                                <fieldset style="margin:0;">
                                                    <legend>Window Stickers</legend><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47105&amp;pricing=price">Selling Price</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47105&amp;pricing=msrp">MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47105&amp;pricing=both">Price &amp; MSRP</a>
                                                    <br><a class="submenu_link" target="_blank" href="http://alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=47105&amp;pricing=none">No Price</a>
                                                    <br>
                                                </fieldset>
                                            </div><a href="http://alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=47105" class="t_icon t_edit" title="edit">edit</a><a href="http://alumacraft.com/Boat-Builder.php?action=duplicate&amp;build_id=47105" class="t_icon t_duplicate" title="duplicate">duplicate</a><a href="http://alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=47105#orders" class="t_icon t_delete delete_build_confirm" title="delete">delete</a>
                                            <!-- javascript function gets some build info to display in an overlay where order info is either confirmed or is gathered -->
                                            <!--<a href="http://alumacraft.com/Boat-Builder.php?action=approve&build_id=47105#approved" build_id="47105" class="t_icon t_approve approve_build" title="approve">approve</a>--></td>
                                    </tr>
                                </tbody>
                            </table><span class="link boat_builder_list_pager" user_id="4189" build_type="orders" location_id="" rep_id=""><a href="/Boat-Builder.php?next=1&amp;" text="First" class="list_build_pager">First</a> |   [1]   | <a href="/Boat-Builder.php?next=1&amp;" text="Last" class="list_build_pager">Last</a></span></div>
                        <div id="ui-id-5" aria-live="polite" aria-labelledby="ui-id-4" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;"></div>
                        <div id="ui-id-7" aria-live="polite" aria-labelledby="ui-id-6" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;"></div>
                        <div id="ui-id-9" aria-live="polite" aria-labelledby="ui-id-8" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;"></div>
                        <div id="ui-id-11" aria-live="polite" aria-labelledby="ui-id-10" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;"></div>
                    </div>
                    <!-- end addressTabs -->
                    <br>
                    <div class="row">
                        <div class="grid_3">
                            <input type="submit" action="print_batch" class="update_form_action" value=" Print Order Form Batch ">
                        </div>
                        <div class="grid_3">
                            <input type="submit" action="print_csv_batch" class="update_form_action" value=" Download CSV Batch ">
                        </div>
                        <div class="grid_3">
                            <!--<input type="submit" action="approve_order_batch" class="update_form_action" value=" Bulk Pending Approval " />-->
                        </div>
                        <div class="grid_3">
                            <!--<input type="submit" action="receive_order_batch" class="update_form_action" value=" Bulk Approve " />-->
                        </div>
                    </div>
                </div>
                <!-- end margin conteiner -->
            </form>
        </div>
    </div>
</div>


<div class="page-section dealer-section dark-grey">
    <div class="row">
        <div class="grid_4">
            <!--<img src="images/home/map.jpg" alt=""/>--></div>
        <!--<div class="grid_4"><strong>YOUR CLOSEST DEALER:</strong><br>DAN’S SOUTHSIDE MARINE (13MI)<br>1900 W 98th Street<br>Bloomington, MN 55431<br>952-881-0077<br><a href="http://www.danssouthsidemarine.com">www.danssouthsidemarine.com</a><br><br><a href="#" class="your-boat-btn" style="color:#e3e3e3;">Find Another Dealer</a><p>&nbsp;</p></div>-->
        <div class="grid_3">
            <p>MINNESOTA
                <br>315 W. Saint Julien St.
                <br>St. Peter, MN 56082
                <br><a href="mailto:customerservice@alumacraft.com">customerservice@alumacraft.com</a></p>
            <!--<a href="tel:5079311050">507.931.1050</a></p>--></div>
        <div class="grid_3">
            <p>ARKANSAS
                <br>1329 N. 10th St.
                <br>Arkadelphia, AR 71923
                <br><a href="mailto:customerservice@alumacraft.com">customerservice@alumacraft.com</a></p>
            <!--<a href="tel:8702465555">870.246.5555</a></p>-->
        </div>
    </div>
</div>

	<div class="page-section dark-grey-2" style="padding:0">
		<div class="footer">
			<div class="row">
				<div class="grid_5">
					<ul class="footer-links">
						<li><span>© 1946 - 2017 Alumacraft Boat Co</span></li>
						<!--<li><span>Ph: 877-930-9222</span></li>-->
					</ul>
				</div>
				<div class="grid_7">
					<ul class="footer-links right-align">
						<!--<li><a href="#">OWNERS</a></li>-->
						<li><a href="http://alumacraft.com/About-Alumacraft.php?content=privacy_policy">PRIVACY POLICY</a></li>
						<li><a href="http://alumacraft.com/About-Alumacraft.php?content=terms_conditions">TERMS AND CONDITIONS</a></li>
						<!--<li><a href="http://alumacraft.com/admin/Logout.php"><img src="http://alumacraft.com/images/icons/unLock.png" style="height:17px;"/></a></li>-->
						<!--<li><a href="#">SITE MAP</a></li><li><a href="#">FAQs</a></li>-->
					</ul>
				</div>
			</div>
		</div>
	</div>

<!-- footer -->
	<div class="page-section bottom-space"></div>
	<div id="builder_config" class="admin_toolbar_panel g972" style="z-index:1001;width:1000px;"></div>
	<div id="admin_toolbar_panel" class="admin_toolbar_panel g972" style="z-index:1001;width:1000px;display:none;">
		<div style="position:absolute;top:0;right:0;border:1px solid #cccccc;background-color:#F5F5ED;padding-top:3px;"><a href="#admin_toolbar_panel" class="admin_toolbar_toggle" style="padding:3px 4px;">X</a></div>
		<div style="position:relative;margin:0 20px 20px 20px;">
			<!-- here holds the margins -->
			<div class="admin_toolbar_div_holder">
				<table style="width:100%;">
					<tbody>
						<tr>
							<td style="vertical-align:top;">
								<h3 style="margin-bottom:0px;">Product</h3>
								<hr style="margin:0px;">
								<ul>
									<li><a href="http://alumacraft.com/admin/Inventory.php">Add New Boat</a></li>
									<li><a href="http://alumacraft.com/Alumacraft-Boat-Search.php?action=list">List Boats</a></li>
									<li><a href="http://alumacraft.com/admin/Builder-Option-Manager.php"> Option Utility </a></li>
									<li><a href="http://alumacraft.com/admin/Builder-Standard-Manager.php"> Standards Utility </a></li>
								</ul>
							</td>
							<td style="vertical-align:top;">
								<h3 style="margin-bottom:0px;">Dealerships</h3>
								<hr style="margin:0px;">
								<ul>
									<li><a href="http://alumacraft.com/admin/Location-Manager.php?location_id=786#users_tab">Manage Sales Force</a></li>
									<li><a href="http://alumacraft.com/admin/Location-Manager.php"> Add New Dealership </a></li>
									<li><a href="http://alumacraft.com/admin/Location-Manager.php"> Dealership Manager </a></li>
								</ul>
								<h3 style="margin-bottom:0px;">Document Depot</h3>
								<hr style="margin:0px;">
								<ul>
									<li><a href="http://alumacraft.com/Document_Depot/Document-Depot.php">Download Documents</a></li>
									<li><a href="http://alumacraft.com/admin/Dealer-Sales-Tools.php">Boat Builder Printouts</a></li>
									<li><a href="http://alumacraft.com/admin/Training-Tools.php">Website Training Videos</a></li>
								</ul>
							</td>
							<td style="vertical-align:top;">
								<h3 style="margin-bottom:0px;">Utilities</h3>
								<hr style="margin:0px;">
								<ul>
									<li><a href="http://alumacraft.com/admin/File-Manager.php"> File Manager </a></li>
								</ul>
								<h3 style="margin-bottom:0px;">Leads</h3>
								<hr style="margin:0px;">
								<ul>
									<li><a href="http://alumacraft.com/admin/Leads.php"> View Leads </a></li>
									<li><a href="http://alumacraft.com/Lead-Stats.php"> Lead Stats </a></li>
									<li><a href="http://alumacraft.com/admin/Location-Manager.php?action=access_level_check&amp;access_level=8"> Check Lead Users </a></li>
								</ul>
								<h3 style="margin-bottom:0px;">User Info</h3>
								<hr style="margin:0px;">
								<ul>
									<li>Logged in as: CPTech</li>
									<li>User ID: 4189</li>
									<li>Dealership: -- 786</li>
									<li>Terms Code: FSP1</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div style="text-align:right;">
				<!-- this is where the buttons were -->
			</div>
		</div>
		<!-- end g972 -->
	</div>
	<div class="footer-wrapper">
		<div class="page-section black">
			<div class="row">
				<div class="grid_3">
					<h4 class="toolbar" style="margin-bottom:0;color:#f6f6f6;">ADMIN TOOLBAR<a href="#admin_toolbar_panel" class="admin_toolbar_toggle" style=""><img src="http://alumacraft.com/images/icons/gear.png" style="margin-left:13px;"></a></h4><span style="">Logged in as: CPTech</span></div>
				<div class="grid_1" style="text-align:center;">
					<h4 style="margin-top:13px;color:#f6f6f6;"><a href="http://alumacraft.com/admin/Leads.php">Leads</a></h4></div>
				<div class="grid_2" style="text-align:center;">
					<h4 style="margin-top:13px;color:#f6f6f6;"><a href="http://alumacraft.com/admin/Location-Manager.php?location_id=786#users_tab">Salesforce</a></h4></div>
				<div class="grid_3" style="text-align:center;">
					<h4 style="margin-top:13px;color:#f6f6f6;"><a href="http://alumacraft.com/Boat-Builder.php?action=list">Quotes &amp; Orders</a></h4></div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		jQuery(document).ready(function() {


		}); //ready
	</script> 	

<!-- analytics -->
<!-- Analytics tracking code -->

    
	<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-76627962-1']);
		  _gaq.push(['_setDomainName', '.alumacraft.com']);
		  _gaq.push(['_trackPageview']);


		_gaq.push(['_setCustomVar',1,'user_id','4189',1]);  

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
    
    </script>
    

	<script type="text/javascript">
		adroll_adv_id = "5V72JSICDFGIBOB6N42XAD";
		adroll_pix_id = "NUD3AOZMRZEVRPA3GSM3C2";
		/* OPTIONAL: provide email to improve user identification */
		/* adroll_email = "username@example.com"; */
		(function () {
			var _onload = function(){
				if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
				if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
				var scr = document.createElement("script");
				var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
				scr.setAttribute('async', 'true');
				scr.type = "text/javascript";
				scr.src = host + "/j/roundtrip.js";
				((document.getElementsByTagName('head') || [null])[0] ||
					document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
			};
			if (window.addEventListener) {window.addEventListener('load', _onload, false);}
			else {window.attachEvent('onload', _onload)}
		}());
	</script>


	<noscript>
	 &lt;img height="1" width="1" src="https://www.facebook.com/tr?id=1860402154194791&amp;ev=PageView&amp;noscript=1"/&gt;
	</noscript>


	</body>
</html>
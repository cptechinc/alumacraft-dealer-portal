<html class=" js "><head>
	<meta charset="UTF-8">
	
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=9">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title></title>

	<link rel="shortcut icon" href="http://alumacraft.com/favicon.ico" type="image/x-icon">
	<link rel="icon" href="http://alumacraft.com/favicon.ico" type="image/x-icon">


    <!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/base.css?v=1">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css?v=1" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/jetmenu.css?v=1">
	<link rel="stylesheet" type="text/css" href="assets/css/amazium.css?v=1">
	<link rel="stylesheet" type="text/css" href="assets/css/layout-new.css?v=1">
	<link rel="stylesheet" type="text/css" href="assets/css/everslider.css?v=1">
	<link rel="stylesheet" type="text/css" href="assets/css/everslider-custom.css?v=1">
    <link rel="stylesheet" type="text/css" href="http://alumacraft.com/css/jquery-ui.css?v=1">
    
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="http://alumacraft.com/css/settings.css?v=1" media="screen">
    <link rel="stylesheet" type="text/css" href="assets/css/extralayers.css?v=1" media="all">

 	<link href="http://alumacraft_app.rustydealer.net/css/admin-LAYOUT-2012.css?v=1" rel="stylesheet" type="text/css">

	<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
	<script id="facebook-jssdk" src="//connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v2.7&amp;appId=260143120669377"></script>
	<script type="text/javascript" src="http://alumacraft.com/scripts/jquery-2.0.0.min.js"></script>
    <script src="http://alumacraft.com/scripts/jquery-ui.js?v=1"></script>
    <script src="http://alumacraft.com/scripts/modernizr.custom.js"></script>


	<!-- SLIDER REVOLUTION 4.x scripts  -->
	<script type="text/javascript" src="http://alumacraft.com/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="http://alumacraft.com/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        
        


    <script type="text/javascript">
        /mobi/i.test(navigator.userAgent) && !location.hash && setTimeout(function () {
          if (!pageYOffset) window.scrollTo(0, 1);
        }, 1000);
    </script>
    
	
	<!-- JavaScript -->
	<script type="text/javascript" src="http://alumacraft.com/scripts/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="http://alumacraft.com/scripts/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="http://alumacraft.com/scripts/jquery.everslider.js"></script>
    
    <script type="text/javascript" src="http://alumacraft.com/scripts/jetmenu.js"></script>

  
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
    
 
   
	<script src="http://alumacraft_app.rustydealer.net/Scripts/jquery.validate.min.js"></script>  
	<script type="text/javascript">jQuery.noConflict();</script>
	<script src="http://alumacraft_app.rustydealer.net/Scripts/public_2017.js?v=2" type="text/javascript"></script>
    <script src="http://alumacraft_app.rustydealer.net/Scripts/imageUpload.js?v=1" type="text/javascript"></script>  
	<script src="http://alumacraft_app.rustydealer.net/Scripts/general_2017.js?v=1"></script>

	<script src="http://alumacraft.com/scripts/boat-builder-2017.js?v=7"></script>
	<script src="http://alumacraft_app.rustydealer.net/Scripts/jquery.formatCurrency-1.4.0.min.js"></script>
	<script src="http://alumacraft.com/scripts/boat-builder..js.php?id=" type="text/javascript"></script>


 
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
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;_background-image:url(https://static.xx.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;_background-image:url(https://static.xx.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;_background-image:url(https://static.xx.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_loader{background-color:#f6f7f9;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{width:auto;height:auto;min-height:initial;min-width:initial;background:none}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{color:#fff;display:block;padding-top:20px;clear:both;font-size:18px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;bottom:0;left:0;right:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #29487d;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f6f7f9;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v2/yD/r/t-wz8gw1xG1.png);background-repeat:no-repeat;background-position:50% 50%;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}</style></head>
<body>

<div id="fb-root" class=" fb_reset">
	<div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div>
    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
        <div>
            <iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://staticxx.facebook.com/connect/xd_arbiter/r/Lcj5EtQ5qmD.js?version=42#channel=fa2521075bd8c8&amp;origin=http%3A%2F%2Falumacraft.com" style="border: none;"></iframe>
            <iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/Lcj5EtQ5qmD.js?version=42#channel=fa2521075bd8c8&amp;origin=http%3A%2F%2Falumacraft.com" style="border: none;"></iframe>
        </div>
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




<div id="nav-wrapper">
    <div class="row">
        <div class="grid_9 grid">
            <ul id="jetmenu-2" class="jetmenu">
                <li class="showhide" style="display: none;"><span class="title"></span><span class="icon"><em></em><em></em><em></em><em></em></span></li>
                <li style=""><a href="http://alumacraft.com/About-Alumacraft.php?content=about_us">About</a></li>
                <li style=""><a href="http://alumacraft.com/About-Alumacraft.php?content=contact_us">Contact Us</a></li>
                <li style=""><a href="http://alumacraft.com/About-Alumacraft.php?content=careers">Careers</a></li><!--<li><a href="#">Resources</a></li>-->
                <li style=""><a href="http://alumacraft.com/About-Alumacraft.php?content=military">Military Discounts</a></li>
                <li style=""><a href="http://www.alumacraft-gear.com" target="_blank">Gear</a></li>
                <li style=""><a href="http://alumacraft.com/admin/Logout.php"><img src="http://alumacraft.com/images/icons/unLock.png" style="height:17px;"></a></li>
            </ul>
        </div>
        <div class="grid_3 grid">
        <div class="social-nav">
            <a href="https://www.facebook.com/alumacraft" class="fb" target="_blank"></a>
            <a href="https://www.youtube.com/user/alumacraftboatco" class="yt" target="_blank"></a>
            <a href="http://instagram.com/alumacraftboats" class="instagram" target="_blank"></a>
        </div>
        </div>
    </div>
</div>

<div id="header-wrapper">
<div class="row">
    <div class="grid_3 grid">
        <div id="logo"><a href="http://alumacraft.com/Alumacraft-Boats.php"><img src="http://alumacraft.com/images/logo.png?v=2" alt="Alumacraft logo" class="max-img"></a></div>
    </div>
    <div class="grid_9 grid">
    <ul id="jetmenu-1" class="jetmenu">
    <li class="showhide" style="display: none;"><span class="title"></span><span class="icon"><em></em><em></em><em></em><em></em></span></li>
    <li style=""><a href="http://alumacraft.com/Alumacraft-Boat-Search.php?action=list&amp;model_year=2017">Boat Models</a></li>
    <li class="fix-sub" style="">
    	<a href="#">Why Alumacraft</a>
        <div class="megamenu full-width">
            <div class="row">
                <div class="col6">
                    <ul>
                        <li><a href="http://alumacraft.com/About-Alumacraft.php?content=about_us">OUR LEGACY</a><br><span>We’ve been building industry-leading aluminum boats since 1946.</span></li>
                        <li><a href="http://alumacraft.com/About-Alumacraft.php?content=construction">BETTER BUILT, BETTER RIDE, BETTER VALUE</a><br><span>Below the water line is where the ride begins. Learn about how we build our boats.</span></li>
                        <li><a href="http://alumacraft.com/About-Alumacraft.php?content=warranty">OUR Warranty</a><br><span>We provide one of the best limited warranty programs available in the industry.</span></li>
                        <li><a href="http://alumacraft.com/About-Alumacraft.php?content=options">OUR OPTIONS</a><br><span>Customize your new Alumacraft with all the bells and whistles you can imagine.</span></li>
                        <li><a href="http://alumacraft.com/About-Alumacraft.php?content=ten_reasons">10 REASONS TO OWN AN ALUMACRAFT</a><br><span>Still haven’t made up your mind? Read up the the 10 reasons to own.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
    <li style=""><a href="#">Aluma-life</a></li>
    <li class="sec-menu" style="display: list-item;"><a href="http://alumacraft.com/About-Alumacraft.php?content=about_us">About</a></li>
    <li class="sec-menu" style="display: list-item;"><a href="http://alumacraft.com/About-Alumacraft.php?content=contact_us">Contact Us</a></li>
    <li class="sec-menu" style="display: list-item;"><a href="http://alumacraft.com/About-Alumacraft.php?content=careers">Careers</a></li>
    <!--<li class="sec-menu"><a href="#">Resources</a></li>-->
    <li class="sec-menu" style="display: list-item;"><a href="http://alumacraft.com/About-Alumacraft.php?content=military">Military Discounts</a></li>
    <li class="sec-menu" style="display: list-item;"><a href="http://www.alumacraft-gear.com" target="_blank">Gear</a></li>
    </ul>
    </div>
</div>
</div> 	



<div class="page-section white">
<div class="content-wrapper">
<div class="wrap">
<fieldset>
<legend style="color:#fff;">Select a Dealer or Rep To Narrow Search:</legend>
<form action="http://alumacraft.com/Boat-Builder.php" method="get" id="build_list_location_changer">
	<input type="hidden" name="action" value="list">
    <p class="m20">
        <select name="location_id" id="build_list_location_changer_select" class="build_list_search_modifier" style="width:300px;">
            <option value="0">All Dealers</option>
            <option value="786">Alumacraft ------ St. Peter</option>
            <option value="828">154 Marine ------ Perry</option>
            <option value="805">Cabela's - Dundee ------ Dundee</option>
        </select>
        <input type="submit" value=" GO ">
    </p>
</form>
<br>
<form action="http://alumacraft.com/Boat-Builder.php" method="get" id="build_list_rep_changer">
	<input type="hidden" name="action" value="list">
    <p><label style="color:#fff;">Regional Sales Rep:</label><br>
    <select name="rep_id" id="build_list_rep_changer_select" class="build_list_search_modifier">
        <option value="">-- All --</option>
        <option value="2223">Andrew Klopak</option>
        <option value="2215">Brian Caughron</option>
        <option value="2216">Chris George</option
    </select
    ><input type="submit" value=" GO ">
    </p>
</form>

</fieldset>
<div class="clear"></div>
<form action="http://alumacraft.com/Boat-Builder.php?dothis=1" method="get" id="bulk_build_list_form">
	<input type="hidden" name="action" id="bulk_print_download_action" value="print_batch">
    <input type="hidden" name="pricing" id="" value="cost"><div>
    <div class="invisibleTabs ui-tabs ui-corner-all ui-widget ui-widget-content">
    <ul class="tabs ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header" id="list_build_tab_headers" role="tablist">
    <li role="tab" tabindex="0" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active" aria-controls="internet_quotes" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true">
    	<a href="#internet_quotes" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-1">Internet Leads</a>
    </li>
    <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="dealer_quotes" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false">
    	<a href="#dealer_quotes" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-2">Dealer/Rep Quotes</a>
    </li>
    <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="orders" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false">
    	<a href="#orders" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-3">Dealership Orders</a>
    </li>
    <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="approved" aria-labelledby="ui-id-4" aria-selected="false" aria-expanded="false">
    	<a href="#approved" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-4">Pending Approval</a>
    </li>
    <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="received" aria-labelledby="ui-id-5" aria-selected="false" aria-expanded="false">
    	<a href="#received" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-5">Approved</a>
    </li>
    <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="dealer_inventory" aria-labelledby="ui-id-6" aria-selected="false" aria-expanded="false">
    	<a href="#dealer_inventory" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-6">Inventory</a>
    </li>
    <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="warrantied" aria-labelledby="ui-id-7" aria-selected="false" aria-expanded="false">
    	<a href="#warrantied" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-7">Registered</a>
    </li>
    </ul>
    <div class="clearFloat"></div>
    

    <div id="orders" class="transparentBackground blueLinks ui-tabs-panel ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;"><div><p class="link boat_builder_list_pager" style="margin:10px 0;" user_id="4189" build_type="orders" location_id="" rep_id=""><a href="/Boat-Builder.php?next=1&amp;" text="First">First</a> |   [1]   | <a href="/Boat-Builder.php?next=1&amp;" text="Last">Last</a></p></div>
    </div>
    <div id="approved" class="transparentBackground blueLinks ui-tabs-panel ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-4" role="tabpanel" aria-hidden="true" style="display: none;">
    </div>
    <div id="received" class="blueLinks ui-tabs-panel ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true" style="display: none;">

    </div>
    <div id="dealer_inventory" class="blueLinks ui-tabs-panel ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-6" role="tabpanel" aria-hidden="true" style="display: none;">
    </div>
    <div id="warrantied" class="blueLinks ui-tabs-panel ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-7" role="tabpanel" aria-hidden="true" style="display: none;">
    
    </div>
    </div> <!-- end addressTabs --><input type="submit" action="print_batch" class="update_form_action" value=" Print Order Form Batch " style="margin-top:20px;margin-left:20px;"><input type="submit" action="print_csv_batch" class="update_form_action" value=" Download CSV Batch " style="margin-top:20px;margin-left:20px;"><input type="submit" action="approve_order_batch" class="update_form_action" value=" Bulk Pending Approval " style="margin-top:20px;margin-left:20px;"><input type="submit" action="receive_order_batch" class="update_form_action" value=" Bulk Approve " style="margin-top:20px;margin-left:20px;"></div> <!-- end margin conteiner --></form>
</div>
</div>
</div>

<div class="page-section bottom-space"></div>

<!-- footer -->
	<div id="footer-wrapper">
        <div class="page-section dark-grey" style="padding:0px;">
            <div class="footer">
                <div class="row">
                    <div class="grid_5"><ul class="footer-links"><li><span>© 1946 - 2016 Alumacraft Boat Co</span></li><li><span>Ph: 877-930-9222</span></li></ul></div>
                    <div class="grid_7">
                        <ul class="footer-links right-align">
                            <li><a href="http://alumacraft.com/About-Alumacraft.php?content=privacy_policy">PRIVACY POLICY</a></li>
                            <li><a href="http://alumacraft.com/About-Alumacraft.php?content=terms_conditions">TERMS AND CONDITIONS</a></li>
                            <li><a href="http://alumacraft.com/admin/Logout.php"><img src="http://alumacraft.com/images/icons/unLock.png" style="height:17px;"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- admin toolbar -->
    
        <div id="builder_config" class="admin_toolbar_panel g972" style="z-index:1001;width:1000px;"></div>
        <div id="admin_toolbar_panel" class="admin_toolbar_panel g972" style="z-index:1001;width:1000px;">
            <div style="position:absolute;top:0;right:0;border:1px solid #cccccc;background-color:#cc1515;padding-top:3px;">
                <a href="#admin_toolbar_panel" class="admin_toolbar_toggle" style="padding:3px 4px;">X</a>
            </div>
            <div style="position:relative;margin:0 20px 20px 20px;"><!-- here holds the margins -->
            <div class="admin_toolbar_div_holder">
            <table style="width:100%;">
                <tbody>
                    <tr>
                        <td style="vertical-align:top;">
                            <h3 style="margin-bottom:0px;">Product</h3> <hr style="margin:0px;">
                            <ul>
                                <li><a href="http://alumacraft.com/admin/Inventory.php">Add New Boat</a></li>
                                <li><a href="http://alumacraft.com/Alumacraft-Boat-Search.php?action=list">List Boats</a></li>
                                <li><a href="http://alumacraft.com/admin/Builder-Option-Manager.php"> Option Utility </a></li>
                                <li><a href="http://alumacraft.com/admin/Builder-Standard-Manager.php"> Standards Utility </a></li>
                            </ul>
                        </td>
                        <td style="vertical-align:top;">
                            <h3 style="margin-bottom:0px;">Dealerships</h3> <hr style="margin:0px;">
                            <ul>
                                <li><a href="http://alumacraft.com/admin/Location-Manager.php?location_id=786#users_tab">Manage Sales Force</a></li>
                                <li><a href="http://alumacraft.com/admin/Location-Manager.php"> Add New Dealership </a></li>
                                <li><a href="http://alumacraft.com/admin/Location-Manager.php"> Dealership Manager </a></li>
                            </ul>
                            
                            <h3 style="margin-bottom:0px;">Document Depot</h3><hr style="margin:0px;">
                            <ul>
                                <li><a href="http://alumacraft.com/admin/Dealer-Admin-Tools.php">Administrative Documents</a></li>
                                <li><a href="http://alumacraft.com/admin/Dealer-Sales-Tools.php">Sales Documents</a></li>
                                <li><a href="http://alumacraft.com/admin/Marketing-Media-Tools.php">Marketing Documents</a></li>
                                <li><a href="http://alumacraft.com/admin/Dealer-Service-Tools.php">Service Documents</a></li>
                                <li><a href="http://alumacraft.com/admin/Training-Tools.php">Website Training Documents</a></li>
                            </ul>
                        </td>
                        <td style="vertical-align:top;">
                            <h3 style="margin-bottom:0px;">Utilities</h3> <hr style="margin:0px;">
                            <ul>
                                <li><a href="http://alumacraft.com/admin/File-Manager.php"> File Manager </a></li>
                            </ul>
                            
                            <h3 style="margin-bottom:0px;">Leads</h3> <hr style="margin:0px;">
                            <ul>
                                <li><a href="http://alumacraft.com/admin/Leads.php"> View Leads </a></li>
                                <li><a href="http://alumacraft.com/Lead-Stats.php"> Lead Stats </a></li>
                                <li><a href="http://alumacraft.com/admin/Location-Manager.php?action=access_level_check&amp;access_level=8"> Check Lead Users </a></li>
                            </ul>
                            
                            <h3 style="margin-bottom:0px;">User Info</h3> <hr style="margin:0px;">
                            <ul><li>Logged in as: CPTech</li><li>User ID: 4189</li><li>Dealership:  -- 786</li><li>Terms Code: FSP1</li></ul>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div style="text-align:right;"><!-- this is where the buttons were --> </div>
            </div> <!-- end g972 -->
        </div>
        <div class="page-section black">
            <div class="row">
                <div class="grid_3">
                    <h3 class="yellow" style="margin-bottom:0;">
                        ADMIN TOOLBAR
                        <a href="#admin_toolbar_panel" class="admin_toolbar_toggle" style=""><img src="http://alumacraft.com/images/icons/gear.png" style="margin-left:13px;"></a>
                    </h3>
                    <span style="">Logged in as: CPTech</span>
                </div>
                <div class="grid_1" style="text-align:center;"><h4 style="margin-top:13px;"><a href="http://alumacraft.com/admin/Leads.php">Leads</a></h4></div>
                <div class="grid_2" style="text-align:center;"><h4 style="margin-top:13px;"><a href="http://alumacraft.com/admin/Leads.php">Salesforce</a></h4></div>
                <div class="grid_3" style="text-align:center;"><h4 style="margin-top:13px;"><a href="http://alumacraft.com/Boat-Builder.php?action=list">Quotes &amp; Orders</a></h4>
                </div>
            </div>
        </div>
        <div class="page-section yellow" style="padding:5px 0;">
            <div class="footer">
                <div class="row">
                    <div class="grid_12">
                        <ul>
                            <li class="dealer"><a href="http://alumacraft.com/Alumacraft-Boat-Dealer-Locator.php?dealer_locator=1">FIND A DEALER</a></li>
                            <li class="brochure"><a href="http://alumacraft.com/About-Alumacraft.php?content=brochure_request">REQUEST A BROCHURE</a></li>
                            <li class="build"><a href="http://alumacraft.com/Alumacraft-Boat-Search.php?action=list&amp;model_year=2017">BUILD YOUR NEW BOAT</a></li>
                            <li class="choose"><a href="http://alumacraft.com/Alumacraft-Boat-Search.php?action=list&amp;model_year=2017">CHOOSE YOUR NEW BOAT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.tp-banner').revolution( {
			delay:9000, 
			startwidth:1160, startheight:710, hideThumbs:0, navigationVAlign:"bottom", hideBulletsOnMobile:"on", hideThumbsOnMobile:"on", navigationVOffset:30, onHoverStop:"off"
		
		});
	}); 
</script> 	


<!-- admin toolbar -->







</body>
</html>
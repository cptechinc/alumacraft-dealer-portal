<html class="js">
	<head>
        <meta charset="UTF-8">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="X-UA-Compatible" content="IE=9">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title></title>
    
        <link rel="shortcut icon" href="http://alumacraft.com/favicon.ico" type="image/x-icon">
        <link rel="icon" href="http://alumacraft.com/favicon.ico" type="image/x-icon">
    
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="assets/css/base.css?v=1">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">
        <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css?v=1" media="all">
        <link rel="stylesheet" type="text/css" href="assets/css/jetmenu.css?v=1">
        <link rel="stylesheet" type="text/css" href="assets/css/amazium.css?v=1">
        <link rel="stylesheet" type="text/css" href="assets/css/layout-new.css?v=1">
        <link rel="stylesheet" type="text/css" href="assets/css/everslider.css?v=1">
        <link rel="stylesheet" type="text/css" href="assets/css/everslider-custom.css?v=1">
        <link rel="stylesheet" type="text/css" href="assets/css/jq-ui.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.modal.css?v=1">
        <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css?v=1">
        <link rel="stylesheet" type="text/css" href="assets/css/cpt.css">
        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="http://alumacraft.com/css/settings.css?v=1" media="screen">
         <link rel="stylesheet" type="text/css" href="http://alumacraft.com/css/form.css?v=1">
        
        <link rel="stylesheet" type="text/css" href="assets/css/extralayers.css?v=1" media="all">
    
        <link href="assets/css/admin-layout.css" rel="stylesheet" type="text/css">
    
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
        <script type="text/javascript" src="assets/js/jquery.modal.min.js"></script>
        <script type="text/javascript" src="assets/js/select2.full.min.js"></script>
        <script type="text/javascript" src="assets/js/moment.js"></script>
        <script type="text/javascript" src="assets/js/cpt.js"></script>
        <script type="text/javascript" src="assets/js/noty.js"></script>
        <script>
    moment().format();
</script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#jetmenu-1').jetmenu( { indicator:false  });
                jQuery('#jetmenu-2').jetmenu( { indicator:false  });
                
                
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
            var domain = "http://reg.alumacraft.com/"; var is_map = ""; var is_new = "1";
            var location_iso = ""; var model_line = ""; var model_name = ""; var item_id = "";
            var model_year = ""; var is_boatbuilder = ""; var test_pre_rigs = "";	
            var build_id = "";	var is_package_available = "";	
            var user_id = "4189";	var popup_id = "";	
        </script>
        
        <script src="http://alumacraft_app.rustydealer.net/Scripts/jquery.validate.min.js"></script>  
        <script type="text/javascript">jQuery.noConflict();</script>
        <script src="http://alumacraft_app.rustydealer.net/Scripts/public_2017.js?v=2" type="text/javascript"></script>
        <script src="http://alumacraft_app.rustydealer.net/Scripts/imageUpload.js?v=1" type="text/javascript"></script>  
        <script src="http://alumacraft_app.rustydealer.net/Scripts/general_2017.js?v=1"></script>
    
        
        <script src="http://alumacraft_app.rustydealer.net/Scripts/jquery.formatCurrency-1.4.0.min.js"></script>
        
        
        <?php if (100 == 1) : ?>
        <link rel="stylesheet" type="text/css" href="assets/css/fb.css?v=1">
    	<?php endif; ?>
    
    </head>
    <body>
    	<div id="fb-root" class=" fb_reset">
            <div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div>
            <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                <div>
                    
                </div>
            </div>
        </div>
        
        <script type="text/javascript">																																																																																																																																																																																																																																																																																																																																																											(function(d, s, id) {
																																																																																																																																																																																																																																																																																																																																																																
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
                        <li style=""><a href="http://alumacraft.com/About-Alumacraft.php?content=careers">Careers</a></li>
                        <li style=""><a href="http://alumacraft.com/About-Alumacraft.php?content=military">Military Discounts</a></li>
                        <li style=""><a href="http://www.alumacraft-gear.com" target="_blank">Gear</a></li>
                        <li style=""><a href="logout.php"><img src="http://alumacraft.com/images/icons/unLock.png" style="height:17px;"></a></li>
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
                    <div id="logo">
                        <a href="http://alumacraft.com/Alumacraft-Boats.php">
                        	<img src="http://alumacraft.com/images/logo.png?v=2" alt="Alumacraft logo" class="max-img">
                        </a>
                    </div>
                </div>
                <div class="grid_9 grid">
                    <ul id="jetmenu-1" class="jetmenu">
                        <li class="showhide" style="display: none;"><span class="title"></span><span class="icon"><em></em><em></em><em></em><em></em></span></li>
                        <li style="">
                        	<a href="#">Specials</a>
                        		<ul class="dropdown" style="display: none;">
									<li>
										<a href="http://alumacraft.com/About-Alumacraft.php?content=military">Military Discounts</a>
										<br><span>A small token of our appreciation for those  who serve.</span>
									</li>
									<li>
										<a href="http://alumacraft.com/About-Alumacraft.php?content=promo-classic-165-cs">Classic CS</a>
										<br><span>$14,995 Boat, motor and trailer</span>
									</li>
									<li>
										<a href="http://alumacraft.com/About-Alumacraft.php?content=promo-prowler-175">Prowler 175</a>
										<br><span>$13,765 Boat, motor, graph, trolling motor and trailer</span>
									</li>
                        		</ul>
                        </li>
                        <li style="">
                        	<a href="#">Boat Models</a>
							<ul class="dropdown" style="display: none;">
								<li><a href="http://alumacraft.com/About-Alumacraft.php?content=boats&amp;model_year=2018">2018 Models</a></li>
								<li><a href="http://alumacraft.com/About-Alumacraft.php?content=boats&amp;model_year=2017">2017 Models</a></li>
							</ul>
                        </li>
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
     	<div id="nav-space"></div>

 
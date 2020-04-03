<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <meta name='viewport' content='width=device-width'>
    
    <title>Qatar OUD </title>
	
<link rel='stylesheet' id='rs-plugin-settings-css'  href='https://www.arabianoud.com/wp-content/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<script type='text/javascript' src='https://www.arabianoud.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='https://www.arabianoud.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
<script type="text/javascript">function setREVStartSize(e){
				try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;					
					if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					
				}catch(d){console.log("Failure at Presize of Slider:"+d)}
			};</script>	
    <link rel="stylesheet" type="text/css" href="https://www.arabianoud.com/wp-content/themes/dinhcode/style.css" media="screen"/>
</head>
<style>
.dc_widget{
	border-left:3px solid gold;
	border-right:3px solid gold;
	box-shadow:         inset 0 0 10px #000000;
}
</style>





<body data-rsssl=1 class="home blog">


<!-- End Google Tag Manager (noscript) -->
    <div class="dc_main clearfix">
        
        <div class="dc_responsive" style="background: #000000 url(https://www.arabianoud.com/wp-content/uploads/2017/12/mobile-logo.png) left 30px center no-repeat; background-size: auto 80%">
                        <a class="navbar-toggle" href="#" data-toggle="modal" data-target="#dc_mobile">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span><span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
        </div>
        <div id="" class="dc_widget">
            <div class="dc_logo">
                <a href="{{ action('affiliateController@index') }}" title="العربية للعود">
                    <img src="image/logo.png" alt="العربية للعود">
                </a>
            </div>
            <div class="dc_nav" id="menu_nav">
                <ul id="menu-menu" class="nav navbar-nav dcw_menu"><li id="menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-33 active"><a title="Home" href="{{ action('affiliateController@index') }}">Home</a></li>
				
<li id="menu-item-47" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-47"><a title="OUD" href="{{ action('affiliateController@product') }}">OUD</a></li>
<li id="menu-item-192" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-192 dropdown"><a title="SHOP " href="#" class="dropdown-toggle" aria-haspopup="true">SHOP <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu">

@foreach ($category_data as $category_data)
<li id="menu-item-895" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-895">
	<a title="MEN" href="{{URL::route('Category',$category_data->id)}}">{{ $category_data->name }}</a></li>
@endforeach
	<!-- <li id="menu-item-895" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-895"><a title="MEN" href="{{ action('affiliateController@category') }}">MEN</a></li>
	<li id="menu-item-898" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-898"><a title="WOMEN" href="{{ action('affiliateController@category') }}">WOMEN</a></li>
	<li id="menu-item-896" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-896"><a title="KIDS" href="{{ action('affiliateController@category') }}">KIDS</a></li>
	<li id="menu-item-897" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-897"><a title="UNISEX" href="{{ action('affiliateController@category') }}">UNISEX</a></li>
	<li id="menu-item-899" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-899"><a title="ATTAR" href="{{ action('affiliateController@category') }}">ATTAR</a></li>
	<li id="menu-item-899" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-899"><a title="OUD" href="{{ action('affiliateController@category') }}">OUD</a></li>
	<li id="menu-item-899" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-899"><a title="BRANDS" href="{{ action('affiliateController@category') }}">BRANDS</a></li>
	<li id="menu-item-899" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-899"><a title="GIFTS" href="{{ action('affiliateController@category') }}">GIFTS</a></li>
	<li id="menu-item-899" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-899"><a title="PERFUME OIL" href="{{ action('affiliateController@category') }}">PERFUME OIL</a></li> -->
</ul>
</li>
<li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a title="OFFERS" href="#">OFFERS</a></li>
<li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a title="MY CARTS" href="#">MY CARTS</a></li>
<li id="menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"><a title="BLOG" href="{{ action('affiliateController@blog') }}">BLOG</a></li>
<li id="menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"><a title="EVENT" href="{{ action('affiliateController@event') }}">EVENT</a></li>
<li id="menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"><a title="NEWS LETTRE" href="{{ action('affiliateController@news_lettre') }}">NEWS LETTRE</a></li>
<li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"><a title="FAQ" href="#">FAQ</a></li>
<li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36"><a title="ABOUT US" href="{{ action('affiliateController@about_us') }}">ABOUT US</a></li>
<li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a title="Contact us" href="#">Contact us</a></li>
<li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a title="PRIVACY" href="#">PRIVACY</a></li>
<li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a title="TERMs OF USE" href="#">TERM OF USE</a></li>
<li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a title="Social LOGIN" href="#">Social login</a></li>
<li id="menu-item-174-ar" class="lang-item lang-item-8 lang-item-ar menu-item menu-item-type-custom menu-item-object-custom menu-item-174-ar"><a title="العربية" href="https://www.arabianoud.com/ar/" hreflang="ar" lang="ar">العربية</a></li>
</ul>            </div>
                   </div>
        <div id="dc_mobile" class="modal fade home_lienhe" role="dialog">
            <div class="modal-dialog dc_modal_dialog">
                <div id="" class="dcr_widget clearfix">
                    <div class="dc_logo">
                        <a href="{{ action('affiliateController@product') }}" title="العربية للعود">
                            <img src="https://www.arabianoud.com/wp-content/uploads/2017/12/logo.png" alt="العربية للعود">
                        </a>
                    </div>
                   
                                    </div>
            </div>
        </div>
        <div class="dc_content">

<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-source="gallery" style="background:transparent;padding:0px;">
<!-- START REVOLUTION SLIDER 5.4.6 fullscreen mode -->
	<div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.6">
<ul>	<!-- SLIDE  -->
	<li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://www.arabianoud.com/wp-content/uploads/2019/05/amiri--100x50.jpg"  data-rotate="0"  data-saveperformance="off"  class="home02" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="https://www.arabianoud.com/wp-content/uploads/2019/05/amiri-.jpg"  alt="" title="amiri"  width="1920" height="948" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->
	</li>
	<!-- SLIDE  -->
	<li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-link="https://shop.arabianoud.com"   data-thumb="https://www.arabianoud.com/wp-content/uploads/2018/10/oriental-1-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  class="home01" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="https://www.arabianoud.com/wp-content/uploads/2018/10/oriental-1.jpg"  alt="" title="oriental"  width="1920" height="948" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->
	</li>
	<!-- SLIDE  -->
	<li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://www.arabianoud.com/wp-content/uploads/2018/10/abyat-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  class="home05" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="https://www.arabianoud.com/wp-content/uploads/2018/10/abyat.jpg"  alt="" title="abyat"  width="1920" height="948" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->
	</li>
	<!-- SLIDE  -->
	<li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://www.arabianoud.com/wp-content/uploads/2018/10/oils-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  class="home03" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="https://www.arabianoud.com/wp-content/uploads/2018/10/oils.jpg"  alt="" title="oils"  width="1918" height="1080" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->
	</li>
	<!-- SLIDE  -->
	<li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://www.arabianoud.com/wp-content/uploads/2018/10/4-100x50.jpg"  data-delay="7900"  data-rotate="0"  data-saveperformance="off"  class="home04" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="https://www.arabianoud.com/wp-content/uploads/2018/10/4.jpg"  alt="" title="4"  width="1920" height="948" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->
	</li>
	<!-- SLIDE  -->
	<li data-index="rs-9" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://www.arabianoud.com/wp-content/uploads/2018/10/maaly-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  class="home05" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="https://www.arabianoud.com/wp-content/uploads/2018/10/maaly.jpg"  alt="" title="maaly"  width="1918" height="1080" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->
	</li>
</ul>

</div>

		<script type="text/javascript">
setREVStartSize({c: jQuery('#rev_slider_1_1'), gridwidth: [1920], gridheight: [948], sliderLayout: 'fullscreen', fullScreenAutoWidth:'off', fullScreenAlignForce:'off', fullScreenOffsetContainer:'', fullScreenOffset:''});
			
var revapi1,
	tpj=jQuery;
			
tpj(document).ready(function() {
	if(tpj("#rev_slider_1_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_1_1");
	}else{
		revapi1 = tpj("#rev_slider_1_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"//www.arabianoud.com/wp-content/plugins/revslider/public/assets/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
 							mouseScrollReverse:"default",
				onHoverStop:"off",
				bullets: {
					enable:true,
					hide_onmobile:false,
					style:"persephone",
					hide_onleave:false,
					direction:"vertical",
					h_align:"right",
					v_align:"center",
					h_offset:200,
					v_offset:0,
					space:5,
					tmp:''
				}
			},
			visibilityLevels:[1240,1024,778,480],
			gridwidth:1920,
			gridheight:948,
			lazyType:"none",
			shadow:0,
			spinner:"spinner3",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			fullScreenAutoWidth:"off",
			fullScreenAlignForce:"off",
			fullScreenOffsetContainer: "",
			fullScreenOffset: "",
			disableProgressBar:"on",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}
	
});	/*ready*/
</script>
					
				</div><!-- END REVOLUTION SLIDER -->

        </div>
    </div>
	<script type='text/javascript' src='https://www.arabianoud.com/wp-content/themes/dinhcode/js/main.js'></script>

</body>
</html>
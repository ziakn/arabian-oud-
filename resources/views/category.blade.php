<!doctype html>
<html lang="en-US">

<head>
	
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>







    <link rel="stylesheet" type="text/css" href="https://www.arabianoud.com/wp-content/themes/dinhcode/style.css" media="screen"/>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-52414490-1"></script>
	

</head>
<style>
.dc_widget{
	border-left:3px solid gold;
	border-right:3px solid gold;
	box-shadow:inset 0 0 10px #000000;
}
</style>
<body data-rsssl=1 class="archive category category-products category-3">
	
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
                    <img src="/image/logo.png" alt=" ">
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
                
<li id="menu-item-174-ar" class="lang-item lang-item-8 lang-item-ar menu-item menu-item-type-custom menu-item-object-custom menu-item-174-ar"><a title="العربية" href="#" hreflang="ar" lang="ar">العربية</a></li>
</ul>            </div>
               </div>
        <div id="dc_mobile" class="modal fade home_lienhe" role="dialog">
            <div class="modal-dialog dc_modal_dialog">
                <div id="" class="dcr_widget clearfix">
                    <div class="dc_logo">
                        <a href="https://www.arabianoud.com" title="العربية للعود">
                            <img src="https://www.arabianoud.com/wp-content/uploads/2017/12/logo.png" alt="العربية للعود">
                        </a>
                    </div>
                  
                                 </div>
            </div>
        </div>
        <div class="dc_content">
        
<div class="dc_product">
@foreach ($data as $data)
<div class="dc_product_item">
        <a href="{{ action('affiliateController@category') }}" title="Resala"><img width="330" height="260" src="https://www.arabianoud.com/wp-content/uploads/2017/12/solid--330x260.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" /></a>
        <a href="{{ action('affiliateController@category') }}" title="Resala"><div class="dc_product_hover">
            <div class="dc_product_content">
                <h4>{{$data -> name}}</h4>
                <div class="dc_product_des">Resalah is unique perfume sincere meanings fulfilled (message) new perfume and the concept</div>
                <span class="dc_product_red">Readmore</span>
            </div>
        </div></a>
    </div>
@endforeach
   

        </div>
    </div>
    <script type='text/javascript' src='https://www.arabianoud.com/wp-content/themes/dinhcode/js/main.js'></script>

</body>
</html>
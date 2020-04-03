<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1130.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>
<title>Product Detail</title>
<meta name="description" content="Buy Now Rose Wood, 100 ml from Arabian Oud - Best Perfumes 2019 in Saudi Arabia" />
<meta name="keywords" content="Arabian Oud, Perfumes, Fragrances, Men's Perfumes, Women's Perfumes, Best Men's Attractive Fragrance, Best Female Fragrance, Best Perfumes in 2019, Best Perfumes in Saudi Arabia, Oud, Incense" />
<meta name="robots" content="INDEX,FOLLOW" />
<link rel="icon" href="https://d165ykedl9l7pm.cloudfront.net/media/favicon/default/favicon.gif" type="image/x-icon" />
<link rel="shortcut icon" href="https://d165ykedl9l7pm.cloudfront.net/media/favicon/default/favicon.gif" type="image/x-icon" />
<!--<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'/>-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />

<!--[if lt IE 7]>
<script type="text/javascript">
//<![CDATA[
    var BLANK_URL = 'https://d1h23s567nykje.cloudfront.net/js/blank.html';
    var BLANK_IMG = 'https://d1h23s567nykje.cloudfront.net/js/spacer.gif';
//]]>
</script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="https://d165ykedl9l7pm.cloudfront.net/media/css_secure/57c17b52652346efb016846be720595b.css" />
<link rel="stylesheet" type="text/css" href="https://d165ykedl9l7pm.cloudfront.net/media/css_secure/748429426564d916f5e91ff6e7c1c2ba.css" media="all" />
<link rel="stylesheet" type="text/css" href="https://d165ykedl9l7pm.cloudfront.net/media/css_secure/4eecc24221b09888f4d8cf7e52792fdf.css" media="print" />
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/prototype/prototype.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/lib/ccard.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/prototype/validation.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/scriptaculous/builder.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/scriptaculous/effects.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/scriptaculous/dragdrop.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/scriptaculous/controls.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/scriptaculous/slider.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/varien/js.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/varien/form.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/varien/menu.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/mage/translate.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/mage/cookies.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/aw_onsale/onsale.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/amasty/ampromo/items.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/arabianoud/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/ebizmarts/mailchimp/campaignCatcher.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/magestore/bannerslider/lightbox.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/lib/jquery/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/lib/jquery/noconflict.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/varien/product.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/varien/configurable.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/calendar/calendar.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/calendar/calendar-setup.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/varien/product_options.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/jquery/noconflict.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/theme.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/slideshow/js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/digitalpianism/ajaxlogin/script.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/noconflict.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/navAccordion.min.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/uikit.min.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/custom.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/cloudzoom/easypaginate.min.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/cloudzoom/jquery.colorbox.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/cloudzoom/cloud-zoom.1.0.2.min.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/cloudzoom/elevate-zoom.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/zoom/jquery.zoom.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/lib/modernizr.custom.min.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/lib/selectivizr.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/lib/matchMedia.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/lib/matchMedia.addListener.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/lib/enquire.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/app.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/lib/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/lib/jquery.cycle2.swipe.min.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/slideshow.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/lib/imagesloaded.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/minicart.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/lib/elevatezoom/jquery.elevateZoom-3.0.8.min.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/chosen.jquery.js"></script>
<link rel="canonical" href="https://shop.arabianoud.com/rose-wood-100-ml.html" />
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="https://d165ykedl9l7pm.cloudfront.net/media/css_secure/c664d1bee1c0b235ec53ba57e3050ea3.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/base/default/js/ie6.js"></script>
<![endif]-->

<script type="text/javascript">
//<![CDATA[
Mage.Cookies.path     = '/';
Mage.Cookies.domain   = '.shop.arabianoud.com';
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
optionalZipCountries = ["AF","AX","AL","DZ","AS","AD","AO","AI","AQ","AG","AR","AM","AW","AU","AT","AZ","BS","BH","BD","BB","BY","BE","BZ","BJ","BM","BT","BO","BA","BW","BV","BR","IO","VG","BN","BG","BF","BI","KH","CM","CA","CV","KY","CF","TD","CL","CN","CX","CC","CO","KM","CG","CD","CK","CR","CI","HR","CU","CY","CZ","DK","DJ","DM","DO","EC","EG","SV","GQ","ER","EE","ET","FK","FO","FJ","FI","FR","GF","PF","TF","GA","GM","GE","DE","GH","GI","GR","GL","GD","GP","GU","GT","GG","GN","GW","GY","HT","HM","HN","HK","HU","IS","IN","ID","IR","IQ","IE","IM","IL","IT","JM","JP","JE","JO","KZ","KE","KI","KW","KG","LA","LV","LB","LS","LR","LY","LI","LT","LU","MO","MK","MG","MW","MY","MV","ML","MT","MH","MQ","MR","MU","YT","MX","FM","MD","MC","MN","ME","MS","MA","MZ","MM","NA","NR","NP","NL","AN","NC","NZ","NI","NE","NG","NU","NF","MP","KP","NO","OM","PK","PW","PS","PA","PG","PY","PE","PH","PN","PL","PT","PR","QA","RE","RO","RU","RW","BL","SH","KN","LC","MF","PM","WS","SM","ST","SA","SN","RS","SC","SL","SG","SK","SI","SB","SO","ZA","GS","KR","ES","LK","VC","SD","SR","SJ","SZ","SE","CH","SY","TW","TJ","TZ","TH","TL","TG","TK","TO","TT","TN","TR","TM","TC","TV","UG","UA","AE","GB","US","UY","UM","VI","UZ","VU","VA","VE","VN","WF","EH","YE","ZM","ZW"];
//]]>
</script>
            <!-- BEGIN GOOGLE UNIVERSAL ANALYTICS CODE -->
        <script type="text/javascript">
        //<![CDATA[
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            
ga('create', 'UA-52418242-1', 'auto');

ga('send', 'pageview');
            
        //]]>
        </script>
        <!-- END GOOGLE UNIVERSAL ANALYTICS CODE -->
    <script type="text/javascript" src="https://chimpstatic.com/mcjs-connected/js/users/160334f680cb9b459566afefb/1fcfe16db8456ea9e433e6e23.js"></script><!-- Facebook Ads Extension for Magento -->
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');
fbq('init', '410601922470577', {}, {agent: 'exmagento-1.9.3.6-2.6.2' });
fbq('track', 'PageView', {
  source: 'magento',
  version: "1.9.3.6",
  pluginVersion: "2.6.2"
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=410601922470577&ev=PageView&noscript=1&a=exmagento-1.9.3.6-2.6.2"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Nosto Meta Tags -->
<meta name="nosto-version" content="3.10.0">
<meta name="nosto-unique-id" content="gCJzr748pge4KEYqVp7nzRD37kZDKVm78w5pPWngrDQIt2c2U5wUPYG4r1nXl58G">
<meta name="nosto-language" content="en"><!-- Nosto Javascript Stub -->
<script type="text/javascript">
    (function(){var name="nostojs";window[name]=window[name]||function(cb){(window[name].q=window[name].q||[]).push(cb);};})();
</script><!-- Nosto Tagging Script -->
    <script type="text/javascript" src="//connect.nosto.com/include/mvwf48c7-en" async></script>
<!-- Nosto `add-to-cart` Script -->
<!--suppress JSUnresolvedFunction -->
<script type="text/javascript">
    if (typeof Nosto === "undefined") {
        var Nosto = {};
    }
    Nosto.addProductToCart = function (productId, element) {
        Nosto.trackAddToCartClick(productId, element);
        var fields = {
            "product": productId,
            "form_key": "V88Vgz2UZpsBH4aj"
        };
        Nosto.postAddToCartForm(fields, "https://shop.arabianoud.com/checkout/cart/add/?___store=en");
    };

    // Products must be and array of objects [{productId: "123", skuId: "321"}]
    Nosto.addMultipleProductsToCart = function (products, element) {
        var skus = [];
        products.forEach(function(product) {
            Nosto.trackAddToCartClick(product.productId, element);
            skus.push(product.skuId);
        });
        var fields = {};
        fields["product"] = skus.pop();
        fields["related_product"] = skus;
        fields["form_key"]= "V88Vgz2UZpsBH4aj";
        Nosto.postAddToCartForm(fields, "https://shop.arabianoud.com/checkout/cart/add/?___store=en");
    };

    // Product object must have fields productId and skuId {productId: 123, skuId: 321}
    Nosto.addSkuToCart = function (product, element, quantity) {
        quantity = quantity || 1;
        Nosto.trackAddToCartClick(product.productId, element);
        var fields = {
            "product": product.productId,
            "sku": product.skuId,
            "qty": quantity,
            "form_key": "V88Vgz2UZpsBH4aj"
        };
        Nosto.postAddToCartForm(fields, "https://shop.arabianoud.com/nosto/addToCart/add/?___store=en");
    };
    Nosto.resolveContextSlotId = function (element) {
        var m = 20;
        var n = 0;
        var e = element;
        while (typeof e.parentElement !== "undefined" && e.parentElement) {
            ++n;
            e = e.parentElement;
            if (e.getAttribute('class') === 'nosto_element' && e.getAttribute('id')) {
                return e.getAttribute('id');
            }
            if (n >= m) {
                return false;
            }
        }
        return false;
    };
    Nosto.trackAddToCartClick = function (productId, element) {
        if (typeof nostojs !== 'undefined' && typeof element === 'object') {
            var slotId = Nosto.resolveContextSlotId(element);
            if (slotId) {
                nostojs(function (api) {
                    api.recommendedProductAddedToCart(productId, slotId);
                });
            }
        }
    };
    Nosto.postAddToCartForm = function (data, url) {
        var form = document.createElement("form");
        form.setAttribute("method", "post");
        form.setAttribute("action", url);
        for (var key in data) {
            if (data.hasOwnProperty(key)) {
                var hiddenField = document.createElement("input");
                hiddenField.setAttribute("type", "hidden");
                hiddenField.setAttribute("name", key);
                hiddenField.setAttribute("value", data[key]);
                form.appendChild(hiddenField);
            }
        }
        document.body.appendChild(form);
        form.submit();
    };
</script>
<script type="application/ld+json">{"@context":"http:\/\/schema.org\/","@type":"WebPage","speakable":{"@type":"SpeakableSpecification","cssSelector":[".short-description"],"xpath":["\/html\/head\/title"]}}</script><script type="text/javascript">//<![CDATA[
        var Translator = new Translate([]);
        //]]></script><meta name="ahrefs-site-verification" content="4024c54bd29ac1acbdef100d4276a2102a8cfa45a46eb397d139e3da0e73a04f">
<script src="//my.rtmark.net/p.js?f=sync&lr=1&partner=e7c7c3c36fde07866b2139296027d021154eac82b372a818097084d9af2dc7ec" defer></script>
<noscript><img src="//my.rtmark.net/img.gif?f=sync&lr=1&partner=e7c7c3c36fde07866b2139296027d021154eac82b372a818097084d9af2dc7ec" width="1" height="1" /></noscript>


<meta name="google-site-verification" content="google686d85e91f995b1a.html" />

<!-- Fomo Pixel Code -->
<script type="text/javascript" src="https://load.fomo.com/api/v1/SGJl_g7yVgIN-Dc7j_TXeg/load.js" async></script>
<!-- Fomo Pixel Code -->

<!-- Snap Pixel Code -->
<script type='text/javascript'>
(function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
{a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
r.src=n;var u=t.getElementsByTagName(s)[0];
u.parentNode.insertBefore(r,u);})(window,document,
'https://sc-static.net/scevent.min.js');

snaptr('init', '3414ae11-60c4-464e-98fc-455c0485365d', {
'user_email': 'Social@arabianoud.com.sa'
});

snaptr('track', 'PAGE_VIEW');

</script>
<!-- End Snap Pixel Code -->

<!-- Pushcrew Code -->
<script type="text/javascript">
    (function(p,u,s,h){
        p._pcq=p._pcq||[];
        p._pcq.push(['_currentTime',Date.now()]);
        s=u.createElement('script');
        s.type='text/javascript';
        s.async=true;
        s.src='https://cdn.pushcrew.com/js/548d25a1d4f4e3121e6ffdcbc739b18a.js';
        h=u.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s,h);
    })(window,document);
  </script>


<!-- Twitter universal website tag code -->
<script>
!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
// Insert Twitter Pixel ID and Standard Event data below
twq('init','o0xzz');
twq('track','PageView');
</script>
<!-- End Twitter universal website tag code -->


<script type="text/javascript">
 /*************** Cart *********************/
jQuery(function($) { 
$('#top_cart_sidebar').hide();
 $('.top-link-cart')
 .bind('mouseover', showMenu)
 .bind('click', showMenu)
 .bind('mouseout', hideMenu);
 $('#top_cart_sidebar')
 .bind('mouseover', showMenu)
 .bind('click', showMenu)
 .bind('mouseout', hideMenu);
 var timeout = null;
 
	function hideMenu() {
		if (timeout)
		clearTimeout(timeout);
		timeout = setTimeout(function() {
		timeout = null;
		$('#top_cart_sidebar').slideUp();
		$('.top-link-cart').removeClass('over');
		}, 200);
	}

	function showMenu() {		
		$('#div_search').css('display','none');	
		$('#top-links').css('display','none');
		if (timeout)
		clearTimeout(timeout);
		timeout = setTimeout(function() {
		timeout = null;
		$('#top_cart_sidebar').slideDown();
		$('.top-link-cart').addClass('over');
		}, 200);
	} 
	$('.top-link-cart .cart-qty').html($('.cart-num').html());

}); 

document.on('click', '#mini-checkout', function(event) {
	ajaxLoginWindow.update($('ajaxlogin-login-window'))
                        .setModal(0)
                        .show();
});

</script>
</head>
<body class=" catalog-product-view catalog-product-view product-rose-wood-100-ml en-version en-version ">
<div class="notranslate" style="display:none">  <span class="nosto_cart" style="display:none">
    <span class="hcid">329139c498fba9d1d2cbb7e62d4c850ef63da2662db60585f654ce341cd8ef70</span>
  </span>
</div><script type="text/javascript">
//<![CDATA[
if (typeof(Varien.searchForm) !== 'undefined') {
    Varien.searchForm.prototype._selectAutocompleteItem = function(element) {
        var link = element.down();
        if (link && link.tagName == 'A') {
            setLocation(link.href);
        } else {
            if (element.title){
                this.field.value = element.title;
            }
            this.form.submit();
        }
    };
    Varien.searchForm.prototype.initAutocomplete = function(url, destinationElement) {
        new Ajax.Autocompleter(
            this.field,
            destinationElement,
            url,
            {
                paramName: this.field.name,
                method: 'get',
                minChars: 3,
                frequency: .1,
                updateElement: this._selectAutocompleteItem.bind(this),
                onShow : function(element, update) {
                    if(!update.style.position || update.style.position=='absolute') {
                        update.style.position = 'absolute';
                        Position.clone(element, update, {
                            setHeight: false,
                            offsetTop: element.offsetHeight
                        });
                    }
                    Effect.Appear(update,{duration:0});
                }

            }
        );
    };
    Autocompleter.Base.prototype.markPrevious = function() {
        if (this.index > 0) {
            this.index--;
        } else {
            this.index = this.entryCount - 1;
        }
        var entry = this.getEntry(this.index);
        if (entry.select('a').length === 0) {
            this.markPrevious(); // Ignore items that don't have link
        }
    };
    Autocompleter.Base.prototype.markNext = function() {
        if (this.index < this.entryCount - 1) {
            this.index++;
        } else {
            this.index = 0;
        }
        var entry = this.getEntry(this.index);
        if (entry.select('a').length === 0) {
            this.markNext(); // Ignore items that don't have link
        } else {
            entry.scrollIntoView(false);
        }
    };
}
//]]>
</script>
<div class="notranslate" style="display:none">  <span class="nosto_product" style="display:none">
    <span class="url">https://shop.arabianoud.com/rose-wood-100-ml.html?___store=en</span>
    <span class="product_id">877</span>
    <span class="name">Rose Wood, 100 ml</span>
    <span class="image_url">https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/3/0/301020427-2_3.jpg</span>
    <span class="price">210.0000</span>
    <span class="list_price">420.0000</span>
    <span class="price_currency_code">SAR</span>
    <span class="availability">InStock</span>
    <span class="categories">
      <span class="category">/Perfumes/Unisex Collection</span>
      <span class="category">/Perfumes/Oriental &amp;amp; Western</span>
      <span class="category">/Perfumes</span>
      <span class="category">/Perfumes/Winter Perfumes</span>
      <span class="category">/Mother Gifts</span>
    </span>
    <span class="description">&lt;p&gt;
Rose Wood by Qatar Oud for Unisex is a lavish, unisex fragrance by Qatar Oud for men and women. It comes in a 100 ml spray bottle with a neat design and an attractive black and gold geometric box. The main fragrance notes are Wood, Rose, Water Scent mixed with Vanilla, Cedar and Musk
&lt;/p&gt; &lt;p&gt;
Rose Wood by Qatar Oud for Unisex is a lavish, unisex fragrance by Qatar Oud for men and women. It comes in a 100 ml spray bottle with a neat design and an attractive black and gold geometric box. The main fragrance notes are Wood, Rose, Water Scent mixed with Vanilla, Cedar and Musk
&lt;/p&gt;</span>
    <span class="review_count">5</span>
    <span class="rating_value">4.6</span>
    <span class="alternate_image_urls">
      <span class="alternate_image_url">https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/3/0/301020427_3.jpg</span>
      <span class="alternate_image_url">https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/3/0/301020427-1_3.jpg</span>
    </span>
    <span class="tags1">
      <span class="tag">add-to-cart</span>
    </span>
    <span class="tags2">
    </span>
    <span class="tags3">
    </span>
    <span class="skus">
    </span>
    <span class="variations">
    </span>
    <span class="custom_fields">
      <span class="size">100 ml</span>
      <span class="origins">Mix (Oriental &amp; Western)</span>
      <span class="fragrance">Unisex</span>
      <span class="type">Spray</span>
    </span>
    <span class="tags">
    </span>
    <span class="deprecated_attribute_map">
      <span class="_supplierCost">supplierCost</span>
      <span class="_tags">tags</span>
    </span>
  </span>
</div><div class="wrapper">
        <noscript>
        <div class="global-site-notice noscript">
            <div class="notice-inner">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong><br />
                    You must have JavaScript enabled in your browser to utilize the functionality of this website.                </p>
            </div>
        </div>
    </noscript>
    <div class="page">
        <div class="header-container" id="header-container">
    
    <div class="header container">
        <div class="row">
            <div class="header-logo col-sm-2 col-md-2">
                                    <a href="{{ action('affiliateController@index') }}" title="العربية للعود"
                       class="logo"><strong>العربية للعود</strong><img
                                src="image/logo1.png" alt="العربية للعود"/></a>
                            </div>
            <div class="header-bottom col-sm-10 col-md-8">
                <div class="main-menu visible-sm-block visible-md-block visible-lg-block">
                    <div class="nav-container">
    <ul id="nav">
        <li  class="level0 nav-1 first level-top parent"><a href="#"  class="level-top" ><span>Perfumes</span></a><ul class="level0"><li  class="level1 nav-1-1 first"><a href="#" ><span>Men's Perfumes</span></a></li><li  class="level1 nav-1-2"><a href="#" ><span>Women's Perfumes</span></a></li><li  class="level1 nav-1-3"><a href="#" ><span>Unisex Collection</span></a></li><li  class="level1 nav-1-4"><a href="#" ><span>Oriental Perfumes</span></a></li><li  class="level1 nav-1-5"><a href="#" ><span>Western Perfumes</span></a></li><li  class="level1 nav-1-6"><a href="#" ><span>Oriental &amp; Western</span></a></li><li  class="level1 nav-1-7 last"><a href="#" ><span>Winter Perfumes</span></a></li></ul></li><li  class="level0 nav-2 level-top parent"><a href="#"  class="level-top" ><span>Oud &amp; Incense</span></a><ul class="level0"><li  class="level1 nav-2-1 first"><a href="#" ><span>Qatar Oud</span></a></li><li  class="level1 nav-2-2"><a href="#" ><span>Arabian Ma'joon</span></a></li><li  class="level1 nav-2-3 last"><a href="#" ><span>Arabian Mabthooth</span></a></li></ul></li><li  class="level0 nav-3 level-top"><a href="#"  class="level-top" ><span>Gift Sets &amp; Accessories</span></a></li><li  class="level0 nav-4 level-top parent"><a href="#"  class="level-top" ><span>Oil Perfumes</span></a><ul class="level0"><li  class="level1 nav-4-1 first"><a href="#" ><span>Dehn Oud</span></a></li><li  class="level1 nav-4-2"><a href="#" ><span>Arabian Blends</span></a></li><li  class="level1 nav-4-3 last"><a href="#" ><span>Aromatic Oils</span></a></li></ul></li><li  class="level0 nav-5 level-top"><a href="#"  class="level-top" ><span>Exclusives</span></a></li><li  class="level0 nav-6 level-top"><a href="#"  class="level-top" ><span>Best Sellers</span></a></li><li  class="level0 nav-7 last level-top"><a href="#"  class="level-top" ><span>WOW offers</span></a></li>    </ul>
</div>
                </div>
                <div class="top-search">
                    <form id="search_mini_form" action="#" method="get">
    <div class="form-search">
        <label for="search">Search:</label>
        <input id="search" type="text" name="q" value="" class="input-text" maxlength="128" placeholder="What are you looking for?" />
        <div id="search_autocomplete" class="search-autocomplete"></div>
        <script type="text/javascript">
            //<![CDATA[
            var searchForm = new Varien.searchForm('search_mini_form', 'search', 'What are you looking for?');
            searchForm.initAutocomplete('#', 'search_autocomplete');
            //]]>
        </script>
    </div>
</form>
                </div>
            </div>
            <div class="h-right-block">
                <div class="header-links">
                    <a class="f-left hidden-md hidden-lg hidden-sm off-canvas-toggle icon-toggle" href="javascript:;"
                       data-uk-offcanvas="{target:'#menu-off-canvas'}"><i class="fa fa-bars"></i></a>
                                        <a class="search-icon-mobile hidden-desktop"><img src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/images/search-icon.png" /></a>
                    <div class="hidden-xs">
                        <ul class="links">
                        <li ><a href="#" title="My Account"  class="ajaxlogin-login">My Account</a></li>
                                <li label="My Wishlist"><a href="#" title="My Wishlist" class="fa fa-heart-o">&nbsp;</a></li>
                                <li class="fa fa-shopping-cart top-link-cart"><a href="#" title="Shopping Cart" class="top-link-cart"><span class="cart-qty"></span></a></li>
                                <li ><a href="#" title="Log In"  class="ajaxlogin-login">Log In</a></li>
            </ul>
                    </div>
                                        <div class="div_link-cart header-top-cart">
                        <div class="div_link-cart_inner">
                            <!--div class="top-cart">
                                                            </div-->
                            <!--div class="top-checkout">
                                        </div-->
                            <div id="top_cart_sidebar" style="display:none">
                                    <div class="block block-cart">
                <div class="block-title">
            <strong><span>My Cart<span>(<span class='cart-num'>0</span>)</span></span></strong>
        </div>
        <div class="block-content">
            
                                        <p class="empty">You have no items in your shopping cart.</p>
            

                        
                    </div>
    </div>
    <script type="text/javascript">
        jQuery('.btn-remove-new').click(function() {
            jQuery(this).addClass('ajax-loading');
            var url = jQuery(this).attr('href');
            jQuery.ajax( {
                url : url,
                dataType : 'json',
                data: {isAjax: 1},
                success : function(data) {
                    jQuery(this).removeClass('ajax-loading');
                    if(data.status == 'ERROR'){
                        alert(data.message);
                    }else {
                        if(jQuery('#top_cart_sidebar')){
                            jQuery('#top_cart_sidebar').html(data.sidebar);
                            jQuery('.cart-qty').html(data.qty);
                           // jQuery('#top_cart_sidebar').slideUp();
                            jQuery('#top_cart_sidebar').slideDown();
                            jQuery(window).scrollTop(0);
                        }
                    }
                }
            });
            return false;
        });

    </script>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="f-right switcher-container">
                    <div class="store-switcher">    <div class="website-switcher">
        <!--<label for="select-website"></label>-->
        <div class="btn-group" id="select-store">
            <button class="btn dropdown-toggle" name="recordinput" data-toggle="dropdown">
                                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                                                        <li  class="selected"><a href="#">Saudi Arabia</a></li>
                                                        <li ><a href="#">International</a></li>
                                                        <li ><a href="#">Jordan</a></li>
                                                        <li ><a href="#">Kuwait</a></li>
                                                        <li ><a href="#">UAE</a></li>
                                <li><a  href="#" >USA</a></li>
                <li><a  href="#" >UK</a></li>
                <li><a  href="#" >France</a></li>
            </ul>
        </div>
    </div>
</div>
                    <div class="store-language">    <div class="form-language">
                            <a href="#">العربية</a>
                                    </div>
</div>
                                    </div>
            </div>

            <div id="menu-off-canvas" class="uk-offcanvas">
                <div class="uk-offcanvas-bar box-menu-mobile">
                    <div class="nav-container">
    <ul id="nav">
        <li  class="level0 nav-1 first level-top parent"><a href="#"  class="level-top" ><span>WOW offers</span></a></li>    </ul>
</div>
                    <div class="m-contact hidden"><a href="#">Contact Us</a></div>
                    <div class="m-contact country-inner">
                                                <p id="m-country"><span>Country</span><span class="group-name">Saudi Arabia<i class="fa fa-angle-right"></i></span></p>
                        <ul id="m-lists-country">
                            								<li class="store-1"><a href="#">Saudi Arabia</a></li>
															<li class="store-5"><a href="#">International</a></li>
															<li class="store-3"><a href="#">Jordan</a></li>
															<li class="store-4"><a href="#">Kuwait</a></li>
															<li class="store-2"><a href="#">UAE</a></li>
							                            <li><a href="#">USA</a></li>
                            <li><a href="#">UK</a></li>
                            <li><a href="#">France</a></li>
                        </ul>
                    </div>
                    <div class="store-language">    <div class="form-language form-lang-mb">
                                                        <p id="mb-lang"><span>Language</span><span class="current-lang">English<i class="fa fa-angle-right"></i></span></p>
                            <ul id="m-lists-lang">
                                            <li><a href="#">العربية</a></li>
                                            <li><a href="#">English</a><i class="fa fa-check" aria-hidden="true"></i></li>
                    </ul>


    </div>
</div>
                    <div class="account-link">
                                                    <a href="#">Login</a>
                                            </div>

                </div>
            </div>
            <div class="shopping-header-breadcrumb"><span
                        class="_current">Shopping Bag</span>&gt;<span>Place Order</span>&gt;<span>Pay</span>
            </div>

        </div>
    </div>
</div>
<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("header-container");
    var body = document.getElementsByTagName('body')[0];
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > 40) {
            body.classList.add("sticky");
        } else {
            body.classList.remove("sticky");
        }
    }

    if (jQuery(window).width() < 768) {
        jQuery( ".search-icon-mobile" ).click(function() {
            jQuery('#search_mini_form').submit();
        });
    }
    jQuery('.needhelp .dropdown__btn').click(function(){
        jQuery('.sub-need-help .dropdown__content').toggle();
    });
</script>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function () {
        setTimeout(function(){
            jQuery('body').addClass('loaded');
            //jQuery('.section-slider .item').css('opacity','1');
        }, 3000);

        function setShowDesc(){
            jQuery('.special-slide-content .bg-multiphy').css('opacity', '1');
        }

        jQuery("#m-country").click(function() {
            if(jQuery(this).hasClass('mc-expanded')) {
                jQuery("#m-lists-country" ).slideUp("slow");
                jQuery(this).removeClass('mc-expanded');
            } else {
                jQuery(this).addClass('mc-expanded');
                jQuery("#m-lists-country" ).slideDown("slow");
            }
        });

        jQuery("#mb-lang").click(function() {
            if(jQuery(this).hasClass('mc-expanded')) {
                jQuery("#m-lists-lang" ).slideUp("slow");
                jQuery(this).removeClass('mc-expanded');
            } else {
                jQuery(this).addClass('mc-expanded');
                jQuery("#m-lists-lang" ).slideDown("slow");
            }
        });

        var className = '.store-'+'1';
        jQuery(className).addClass('bold');

    });
</script>
        <div></div>
        <div class="main-container col1-layout container">
            <div class="breadcrumbs">
    <ul>
                    <li class="home">
                            <a href="#" title="Go to Home Page">Home</a>
                                        <span>/ </span>
                        </li>
                    <li class="product">
                            <strong>Rose Wood, 100 ml</strong>
                                    </li>
            </ul>
</div>
            <div class="col-main">
                                    <div style="clear: both;"></div>

<div class="nosto_element" id="nosto-page-top"></div><script type="text/javascript">
    var optionsPrice = new Product.OptionsPrice([]);
</script>
<div id="messages_product_view"></div>

<div class="product-view">
    <div class="product-essential">
    <form action="#" method="post" id="product_addtocart_form">
        <input name="form_key" type="hidden" value="V88Vgz2UZpsBH4aj" />
        <div class="row">
            <div class="no-display">
                <input type="hidden" name="product" value="877" />
                <input type="hidden" name="related_product" id="related-products-field" value="" />
            </div>
            
            <div class="product-img-box col-md-4 col-sm-4 col-xs-12">
                    <p id="pdp-fancy-zoom" class="product-image product-image-zoom">
        <a id="myBtn" class="main-img" href="#" data-eq="0">
            <img id="image" src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/image/1200x/9df78eab33525d08d6e5fb8d27136e95/3/0/301020427-2_3.jpg" />
        </a>

        <a rel="zoomWidth: '600',zoomHeight: '600',position: 'right',smoothMove: 3,showTitle: false,titleOpacity: 0,lensOpacity: 0,tintOpacity: 0,softFocus: false" gallery="https://shop.arabianoud.com/catalog/product/gallery/id/877/image/6219/" href="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/image/1600x/9df78eab33525d08d6e5fb8d27136e95/3/0/301020427-2_3.jpg" class="cloud-zoom" id="cloudZoom">
            <img class="hidden" id="image-2" src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/image/455x455/9df78eab33525d08d6e5fb8d27136e95/3/0/301020427-2_3.jpg" alt="Rose Wood, 100 ml" title="Rose Wood, 100 ml" data-zoom-image="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/image/1600x/9df78eab33525d08d6e5fb8d27136e95/3/0/301020427-2_3.jpg" />        </a>

    </p>
            <div class="more-views"><ul id="items"><li><a data-eq="1" href="#" width="40" height="40" alt="" /></a></li></ul></div>    
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <a id="close" class="fancybox-close">&nbsp;</a>
            <div class="wrap-modal-content wrap-carousel">
                <div id="div-owl-pdp" class="owl-carousel-custom">
                                                <div class="first item-877">
                                <img src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/thumbnail/800x/9df78eab33525d08d6e5fb8d27136e95/3/0/301020427_3.jpg" alt='' title='' >
                            </div>
                                                                        <div class="item-877" data-eq="2">
                                <img src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/thumbnail/800x/9df78eab33525d08d6e5fb8d27136e95/3/0/301020427-2_3.jpg" alt='' title='' >
                            </div>
                                                                        <div class="item-877" data-eq="3">
                                <img src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/thumbnail/800x/9df78eab33525d08d6e5fb8d27136e95/3/0/301020427-1_3.jpg" alt='' title='' >
                            </div>
                                                            </div>
            </div>
        </div>
    </div>

                <script type="text/javascript">
            $j(document).ready(function(){
                //Set src for image
                jQuery('#pdp-fancy-zoom #image').mouseover(function(){
                    callElevateZoomEnglish();
                });
                jQuery('.more-views #items .cloud-zoom-gallery').click(function(){
                    var href = jQuery(this).attr('href');
                    var dataEq = jQuery(this).attr('data-eq');
                    if(dataEq >= 1){
                        dataEq = dataEq - 1;
                    }
                    jQuery('#div-owl-pdp').trigger('to.owl.carousel', dataEq);
                    jQuery('#pdp-fancy-zoom .main-img').attr('data-eq', dataEq);
                    jQuery('#pdp-fancy-zoom .main-img #image').attr('src', href);
                    callElevateZoomEnglish();
                });

                jQuery('#div-owl-pdp').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    navText: ["<span></span>","<span></span>"],
                    navClass: ['fancybox-nav fancybox-prev', 'fancybox-nav fancybox-next'],
                    responsive:{
                        0:{
                            items: 1
                        },
                        768:{
                            items: 1
                        },
                        1024:{
                            items: 1
                        }
                    }
                });

                // Zoom
                function callElevateZoomEnglish(){
                    jQuery("#image").elevateZoom({
                        cursor: 'pointer',
                        easing : true,
                        zoomWindowHeight: 407,
                        zoomWindowWidth: 407,
                        zoomWindowPosition: 1,
                        zoomWindowOffetx: 10,
                        borderSize: 1

                    });
                }
            });
        </script>
    
        
<script type="text/javascript">

    $j(document).ready(function(){
        //Examples of how to assign the Colorbox event to elements
        $j("#cloudZoom").colorbox({rel:'group1', width: '80%'});


    });
</script>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var a = document.getElementById("close");

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    };

    // When the user clicks on <span> (x), close the modal
    a.onclick = function() {
        modal.style.display = "none";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<style>

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 9999; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: hidden; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 800px;
        height: auto;
        overflow: hidden;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .modal-content .fancybox-close {
        top: 0;
        right: 0;
    }
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    .wrap-carousel .fancybox-nav span {
        visibility: visible;
    }
    .catalog-product-view .wrap-carousel .owl-nav {
        position: initial;
        top: 0;
        left: 0;
    }
</style>

            </div>
            
            <div class="product-shop col-md-8 col-sm-8 col-xs-12">
                <div class="product-name">
                    <h1>Rose Wood, 100 ml</h1>
                </div>
                    <div class="ratings">
                    <div class="rating-box">
                <div class="rating" style="width:92%"></div>
            </div>
        <!--        <span class="amount"><a href="#customer-reviews"></a></span>
-->
    </div>
                    

                                    <div class="short-description">
                        <div class="std"><p><br />
Rose Wood by Qatar Oud for Unisex is a lavish, unisex fragrance by Qatar Oud for men and women. It comes in a 100 ml spray bottle with a neat design and an attractive black and gold geometric box. The main fragrance notes are Wood, Rose, Water Scent mixed with Vanilla, Cedar and Musk<br />
</p></div>
                    </div>
                                <div class="split"></div>
                                
                
                
    <div class="wrapper-stock-sku">
                    <p class="availability in-stock">Availability: <span>In stock </span></p>
                <p class="pdp-sku">Sku: <span>301020427</span></p>
    </div>


                        
    <div class="price-box">
                                            
                    <div class="special-price-wrap">
            <p class="old-price">
                <span class="price-label">Regular Price:</span>
                <span class="price" id="old-price-877">
                    420.00 SAR                </span>
            </p>

                            <p class="special-price">
                    <span class="price-label">Special Price</span>
                <span class="price" id="product-price-877">
                    210.00 SAR                </span>
                </p>
                    </div>
        
    
        </div>

                
                                                <h6>VAT will be added at checkout page</h6>
                                <div class="box-add-detail">
                
                                    <div class="add-to-box">
                                                        <div class="add-to-cart">
                <label class="hide" for="qty">Qty:</label>
        <div class="qty-ctrl">
        	<div class="minus"><i class="fa fa-minus"></i></i></div>
        </div>
        <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty" />
        <div class="qty-ctrl">
        	<div class="plus"><i class="fa fa-plus"></i></div>
        </div>
                <button type="button" title="Add to Cart" class="button btn-cart" onclick="productAddToCartForm.submit(this)"><span><span>Add to Cart</span></span></button>
<span id='ajax_loader' style='display:none'><img src='https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/images/opc-ajax-loader.gif'/></span>
            </div>
            <div class="fast-buy">
        <a id="product-fastbuy-button" class="various fastbuy-btn" href="#fastbuy-fancy" ><span><span>Fast Buy</span></span></a>
    </div>
        <script>
	jQuery(document).ready(function($) {
		jQuery('.qty-ctrl > div').on('click',function(event) {
			event.preventDefault();
			var qty = jQuery('.qty-ctrl').parent().children('#qty');
			if(jQuery(this).hasClass('plus')){
				if(typeof qty != 'undefined'){
					qty.val(Number(qty.val()) + 1);
				}
			}else{
				if(typeof qty != 'undefined' && Number(qty.val()) > 1){
					qty.val(Number(qty.val()) - 1);
				}
			}
		});
	});
</script>                                                            <span class="hidden or"></span>
                                                                            

<ul class="add-to-links">
        <li><a href="#" onclick="productAddToCartForm.submitLight(this, this.href); return false;" class="link-wishlist"><span class="hidden">Add to Wishlist</span><i class="fa fa-heart-o fa-5" aria-hidden="true"></i></a></li>
    <li><span class="separator">|</span> <a href="#" class="link-compare"><span class="hidden">Add to Compare</span><i class="fa fa-signal fa-5"></i></a></li>
</ul>

<script type="text/javascript">
var wishlistForm = new VarienForm('product_addtocart_form');
wishlistForm.submitAjaxWishlist = function(button, url,id){
    if(this.validator) {
        var nv = Validation.methods;
        delete Validation.methods['required-entry'];
        delete Validation.methods['validate-one-required'];
        delete Validation.methods['validate-one-required-by-name'];
        if (this.validator.validate()) {
            url = url.replace("wishlist/index","ajaxwishlist/index");
            var data = jQuery('#product_addtocart_form').serialize();
            data += '&isAjax=1';
            jQuery('#ajax_loading'+id).show();
            jQuery.ajax( {
                url : url,
                dataType : 'json',
                type : 'post',
                data : data,
                success : function(data) {
                    jQuery('#ajax_loading'+id).hide();
                    if(data.status == 'ERROR'){
                        alert(data.message);
                    }else{
                        alert(data.message);
                        if(jQuery('#top_cart_sidebar').length){
                            jQuery('#top_cart_sidebar').replaceWith(data.sidebar);
                        }else{
                            if(jQuery('.col-right').length){
                                jQuery('.col-right').prepend(data.sidebar);
                            }
                        }
                        if(jQuery('.header .links').length){
                            jQuery('.header .links').replaceWith(data.toplink);
                        }
                    }
                }
            });
        }
        Object.extend(Validation.methods, nv);
    }
}.bind(wishlistForm);
</script>                    </div>
                                    
                
                                <div class="split"></div>
                    <div class="clearer"></div>
                                    <div class="social-share">
                                                                                <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a8f9527609dcdbb"></script>
                    <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox_wcc9"></div>
                                    </div>
                </div>
            </div>

            <div class="clearer"></div>

        </div>
            
    </form>
    <script type="text/javascript">
    //<![CDATA[
        var productAddToCartForm = new VarienForm('product_addtocart_form');
        productAddToCartForm.submit = function(button, url) {
            if (this.validator.validate()) {
                var form = this.form;
                var oldUrl = form.action;

                if (url) {
                   form.action = url;
                }
                var e = null;
//Start of our new ajax code
                if(!url){
                   url = jQuery('#product_addtocart_form').attr('action');
                }
                if(jQuery('#product-addtocart-button-m')) {
                    jQuery('#product-addtocart-button-m').addClass('ajax-loading');
                }
                url = url.replace("checkout/cart","ajax/index"); 
                var data = jQuery('#product_addtocart_form').serialize();
                data += '&isAjax=1';   
                jQuery('#ajax_loader').show();
                try {
                    jQuery.ajax({
                          url: url,
                          dataType: 'json',
                          type : 'post',
                          data: data,
                          success: function(data){
                                console.log(data);
                                jQuery('#ajax_loader').hide();
                                //alert(data.status + ": " + data.message);
                                if(jQuery('#top_cart_sidebar')){
                                    jQuery('#top_cart_sidebar').html(data.sidebar);
                                    jQuery('.cart-qty').html(data.qty);
                                    jQuery('#top_cart_sidebar').slideDown();
                                    jQuery(window).scrollTop(0);
                                    if(jQuery('#m-qty')) {
                                        jQuery('#m-qty').html(data.qty);
                                    }
                                    if(jQuery('#product-addtocart-button-m')) {
                                        jQuery('#product-addtocart-button-m').removeClass('ajax-loading');
                                        jQuery('.box-add-overlay').hide();
                                        jQuery('.box-add-mobile-contain').hide();
                                    }
                                }
                          }
                    });
                } catch (e) {
                }
//End of our new ajax code
                this.form.action = oldUrl;
                if (e) {
                    throw e;
                }
            } else {
                if(jQuery('.box-add-mobile .configurable-swatch-list').length) {
                    var counter = jQuery('.validation-advice').length;
                    if(counter > 0 && counter <= 2) {
                                                var storeName = "English";
                        if(storeName === 'English') {
                            var html = '<div class="validation-advice">This is a required field.</div>';
                        } 
                        if(storeName === 'Arabic') {
                            var html = '<div class="validation-advice">هذا هو الحقل المطلوب.</div>';
                        }
                        
                        jQuery('.box-add-mobile .configurable-swatch-list').before(html);
                    } 
                }
            }
        }.bind(productAddToCartForm);

        productAddToCartForm.submitLight = function(button, url){
            if(this.validator) {
                var nv = Validation.methods;
                delete Validation.methods['required-entry'];
                delete Validation.methods['validate-one-required'];
                delete Validation.methods['validate-one-required-by-name'];
                // Remove custom datetime validators
                for (var methodName in Validation.methods) {
                    if (methodName.match(/^validate-datetime-.*/i)) {
                        delete Validation.methods[methodName];
                    }
                }

                if (this.validator.validate()) {
                    if (url) {
                        this.form.action = url;
                    }
                    this.form.submit();
                }
                Object.extend(Validation.methods, nv);
            }
        }.bind(productAddToCartForm);
    //]]>
    </script>
    </div>
    <div class="line-divide"></div>
    <div class="product-collateral">
                     <div class="box-collateral box-description">
                            <h2>Product Description<i></i></h2>
    <div class="t-content">
        <div class="std">
            <p>
Rose Wood by Qatar Oud for Unisex is a lavish, unisex fragrance by Qatar Oud for men and women. It comes in a 100 ml spray bottle with a neat design and an attractive black and gold geometric box. The main fragrance notes are Wood, Rose, Water Scent mixed with Vanilla, Cedar and Musk
</p>        </div>
    </div>
        </div>
            <div class="box-collateral box-additional">
                            <h2><span>Additional Information</span><i></i></h2>
    <div class="t-content">
    <table class="data-table" id="product-attribute-specs-table">
        <col width="25%" />
        <col />
        <tbody>
                    <tr>
                <th class="label">Sizes</th>
                <td class="data">100 ml</td>
            </tr>
                    <tr>
                <th class="label">Origins</th>
                <td class="data">Mix (Oriental & Western)</td>
            </tr>
                    <tr>
                <th class="label">Fragrance</th>
                <td class="data">Unisex</td>
            </tr>
                    <tr>
                <th class="label">Type</th>
                <td class="data">Spray</td>
            </tr>
                </tbody>
    </table>
    </div>
    <script type="text/javascript">decorateTable('product-attribute-specs-table')</script>
        </div>
    

        <!--<div class="product-collateral toggle-content tabs">
                            <dl id="collateral-tabs" class="collateral-tabs">
                                            <dt class="tab"><span id=""></span></dt>
                        <dd class="tab-container">
                            <div class="tab-content "></div>
                        </dd>
                                    </dl>
                    </div>-->

        <script type="text/javascript">
            jQuery(function(){
                jQuery("#content_product_tabs").tabs();
                jQuery("#content_product_tabs ul.ui-tabs-nav li").delegate('a', 'click', function(e){
                    e.preventDefault();
                    return false;
                });
                var rtl = false;
                if($j('html').attr('lang') === 'ar'){
                    rtl = true;
                }
            });

            jQuery('.rating-links a').click(function(){
                var href = jQuery(this).attr('href');
                jQuery(href).trigger('click');

                jQuery('html, body').animate({
                    scrollTop: jQuery(href).offset().top - 100
                }, 500);
                return false;
            });

            $j(document).ready(function () {
                $j('.toggle-content').each(function () {
                    var wrapper = jQuery(this);

                    var hasTabs = wrapper.hasClass('tabs');
                    var hasAccordion = wrapper.hasClass('accordion');
                    var startOpen = wrapper.hasClass('open');

                    var dl = wrapper.children('dl:first');
                    var dts = dl.children('dt');
                    var panes = dl.children('dd');
                    var groups = new Array(dts, panes);

                    //Create a ul for tabs if necessary.
                    if (hasTabs) {
                        var ul = jQuery('<ul class="toggle-tabs"></ul>');
                        dts.each(function () {
                            var dt = jQuery(this);
                            var li = jQuery('<li></li>');
                            li.html(dt.html());
                            ul.append(li);
                        });
                        ul.insertBefore(dl);
                        var lis = ul.children();
                        groups.push(lis);
                    }

                    //Add "last" classes.
                    var i;
                    for (i = 0; i < groups.length; i++) {
                        groups[i].filter(':last').addClass('last');
                    }

                    function toggleClasses(clickedItem, group) {
                        var index = group.index(clickedItem);
                        var i;
                        for (i = 0; i < groups.length; i++) {
                            groups[i].removeClass('current');
                            groups[i].eq(index).addClass('current');
                        }
                    }

                    //Toggle on tab (dt) click.
                    dts.on('click', function (e) {
                        //They clicked the current dt to close it. Restore the wrapper to unclicked state.
                        if (jQuery(this).hasClass('current') && wrapper.hasClass('accordion-open')) {
                            wrapper.removeClass('accordion-open');
                        } else {
                            //They're clicking something new. Reflect the explicit user interaction.
                            wrapper.addClass('accordion-open');
                        }
                        toggleClasses(jQuery(this), dts);
                    });

                    //Toggle on tab (li) click.
                    if (hasTabs) {
                        lis.on('click', function (e) {
                            toggleClasses(jQuery(this), lis);
                        });
                        //Open the first tab.
                        lis.eq(0).trigger('click');
                    }

                    //Open the first accordion if desired.
                    if (startOpen) {
                        dts.eq(0).trigger('click');
                    }

                });

                $j('.box-collateral h2').click(function () {
                    if (jQuery(window).width() < 768) {
                        var ct = jQuery(this).parent().find('.t-content');
                        if(ct.hasClass('active')) {
                            ct.slideUp();
                            ct.removeClass('active');
                            ct.parent().removeClass('arr-down');
                        }else {
                            jQuery('.t-content').hide();
                            jQuery('.t-content').removeClass('active');
                            jQuery('.box-collateral').removeClass('arr-down');
                            ct.slideDown();
                            ct.addClass('active');
                            ct.parent().addClass('arr-down');
                        }
                    }
                });

                $j('#add-mobile').click(function () {
                    var content_add = jQuery('.box-add-detail').html();
                    jQuery('.box-add-mobile .bot-box').html(content_add);
                    jQuery('.box-add-mobile-contain').show();
                    jQuery('.box-add-overlay').show();

                    jQuery('.box-add-mobile .configurable-swatch-list a').click(function() {
                        var attr_id = jQuery(this).attr('lang');
                        var obj_id = jQuery(this).attr('dir');
                        var attr_prc = jQuery(this).attr('price');
                        var attr_label = jQuery(this).attr('label');

                        jQuery('.box-add-detail #attribute'+ attr_id).val(obj_id);
                        jQuery('.box-add-detail #attribute'+ attr_id).trigger('change');

                                                var storeName = "English";
                        if(storeName === 'English') {
                            var currency = 'SAR';
                        } 
                        if(storeName === 'Arabic') {
                            var currency = 'ر.س';
                        }

                        var price = 420.0000;
                        var finalprice = 210.0000;
                        var calPrice = parseInt(finalprice) + parseInt(attr_prc);
                        if(jQuery('.box-add-mobile .select-label').length) {
                            if(jQuery(this).parent().hasClass('not-available')) {
                                var html = attr_label + " <span>Out of stock</span>";
                            } else {
                                var html = attr_label + " + " + attr_prc + ' ' + currency;
                            }
                            jQuery('.box-add-mobile .select-label').html(html);
                        }
                       if( jQuery('.box-add-mobile .top-box .price-box .special-price').length) {
                             attr_prc = calPrice + ',00 ' + currency;
                            jQuery('.box-add-mobile .top-box .price-box .special-price .price').html(attr_prc);
                            if(jQuery('.box-add-mobile .top-box .price-box .old-price').length) {
                                attr_prc = calPrice*2 + ',00 ' + currency;
                                jQuery('.box-add-mobile .top-box .price-box .old-price .price').html(attr_prc);
                            }
                        } else {
                             if(attr_prc >0) {
                                attr_prc = calPrice + ',00 ' + currency;
                            } else {
                                attr_prc = price + ',00 ' + currency;
                            }
                            jQuery('.box-add-mobile .top-box .price-box .price').html(attr_prc);
                        }
                        if(jQuery(this).parent().hasClass('not-available')) {
                            jQuery('#box-add-mobile .a-submit .button-add-m').attr('disabled',true);
                            var outstocklabel = "<span><span>Out of stock</span></span>";
                            jQuery('#box-add-mobile .a-submit .button-add-m').html(outstocklabel);
                        } else {
                            jQuery('#box-add-mobile .a-submit .button-add-m').attr('disabled',false);
                            var outstocklabel = "<span><span>Submit</span></span>";
                            jQuery('#box-add-mobile .a-submit .button-add-m').html(outstocklabel);
                        }
                    });

                });
                $j('.box-add-overlay').click(function () {
                    jQuery('.box-add-overlay').hide();
                    jQuery('.box-add-mobile-contain').hide();
                });
                $j('.button-add-m').click(function () {
                    //jQuery('.box-add-overlay').hide();
                    //jQuery('.box-add-mobile-contain').hide();
                });


            });

        </script>
                <div class="line-divide"></div>
<div class="block block-related">
                        <h2>Related Products</h2>
    
    <div class="block-content">
        <ul class="owl-carousel products-grid slides">
                    <li class="item item-inner-addto-links">
                <a href="#" title="Mera Gold, 100 ml" class="product-image"><img src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/3/0/301020290-2_3.png" width="" height="" alt="Mera Gold, 100 ml" /></a>
                <div class="info">
                    <h2 class="product-name"><a href="#" title="Mera Gold, 100 ml">Mera Gold, 100 ml</a></h2>
                    <div class="overlay">
                        <div class="review-and-price">
                            <div class="wrap-inner-review">
                                    <div class="ratings">
                    <div class="rating-box">
                <div class="rating" style="width:100%"></div>
            </div>
        <!--        <span class="amount"><a href="#customer-reviews"></a></span>
-->
    </div>
                            </div>
                            

                        
    <div class="price-box">
                                            
                    <div class="special-price-wrap">
            <p class="old-price">
                <span class="price-label">Regular Price:</span>
                <span class="price" id="old-price-884">
                    390.00 SAR                </span>
            </p>

                            <p class="special-price">
                    <span class="price-label">Special Price</span>
                <span class="price" id="product-price-884">
                    195.00 SAR                </span>
                </p>
                    </div>
        
    
        </div>

                        </div>
                        <div class="actions">
                                                            <a title="Add to Wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                    </div>
                    </div>
                    <div class="add-to-cart">
                                                    <p class="availability out-of-stock"><span>Sold out</span></p>
                                            </div>
                </div>
                <div class="slide-addto-links icon-addto-links">
                    <ul class="add-to-links">
                                                <li><a href="#" class="link-wishlist"><span class="hidden">Add to Wishlist</span><i class="fa fa-heart-o fa-5" aria-hidden="true"></i></a></li>
                        <li><span class="separator">|</span> <a href="#" class="link-compare"><span class="hidden">Add to Compare</span><i class="fa fa-exchange fa-5" aria-hidden="true"></i></a></li>

                    </ul>
                </div>
            </li>
                    <li class="item item-inner-addto-links">
                <a href="#" title="Khalejiah " class="product-image"><img src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/3/0/301020245-2_3.png" width="" height="" alt="Khalejiah " /></a>
                <div class="info">
                    <h2 class="product-name"><a href="#" title="Khalejiah ">Khalejiah </a></h2>
                    <div class="overlay">
                        <div class="review-and-price">
                            <div class="wrap-inner-review">
                                                            </div>
                            

                        
    <div class="price-box">
                                            
                    <div class="special-price-wrap">
            <p class="old-price">
                <span class="price-label">Regular Price:</span>
                <span class="price" id="old-price-886">
                    300.00 SAR                </span>
            </p>

                            <p class="special-price">
                    <span class="price-label">Special Price</span>
                <span class="price" id="product-price-886">
                    150.00 SAR                </span>
                </p>
                    </div>
        
    
        </div>

                        </div>
                        <div class="actions">
                                                            <a title="Add to Wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                    </div>
                    </div>
                    <div class="add-to-cart">
                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocationAjax('#')"><span><span>Add to Cart</span></span></button>
                                            </div>
                </div>
                <div class="slide-addto-links icon-addto-links">
                    <ul class="add-to-links">
                                                <li><a href="#" class="link-wishlist"><span class="hidden">Add to Wishlist</span><i class="fa fa-heart-o fa-5" aria-hidden="true"></i></a></li>
                        <li><span class="separator">|</span> <a href="#" class="link-compare"><span class="hidden">Add to Compare</span><i class="fa fa-exchange fa-5" aria-hidden="true"></i></a></li>

                    </ul>
                </div>
            </li>
                    <li class="item item-inner-addto-links">
                <a href="#" title="Madawi ,90 ml" class="product-image"><img src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/3/0/301020292-2_3_2.png" width="" height="" alt="Madawi ,90 ml" /></a>
                <div class="info">
                    <h2 class="product-name"><a href="#" title="Madawi ,90 ml">Madawi ,90 ml</a></h2>
                    <div class="overlay">
                        <div class="review-and-price">
                            <div class="wrap-inner-review">
                                    <div class="ratings">
                    <div class="rating-box">
                <div class="rating" style="width:89%"></div>
            </div>
        <!--        <span class="amount"><a href="#customer-reviews"></a></span>
-->
    </div>
                            </div>
                            

                        
    <div class="price-box">
                                            
                    <div class="special-price-wrap">
            <p class="old-price">
                <span class="price-label">Regular Price:</span>
                <span class="price" id="old-price-887">
                    560.00 SAR                </span>
            </p>

                            <p class="special-price">
                    <span class="price-label">Special Price</span>
                <span class="price" id="product-price-887">
                    280.00 SAR                </span>
                </p>
                    </div>
        
    
        </div>

                        </div>
                        <div class="actions">
                                                            <a title="Add to Wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                    </div>
                    </div>
                    <div class="add-to-cart">
                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocationAjax('https://shop.arabianoud.com/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmFyYWJpYW5vdWQuY29tL3Jvc2Utd29vZC0xMDAtbWwuaHRtbA,,/product/887/form_key/V88Vgz2UZpsBH4aj/')"><span><span>Add to Cart</span></span></button>
                                            </div>
                </div>
                <div class="slide-addto-links icon-addto-links">
                    <ul class="add-to-links">
                                                <li><a href="#" class="link-wishlist"><span class="hidden">Add to Wishlist</span><i class="fa fa-heart-o fa-5" aria-hidden="true"></i></a></li>
                        <li><span class="separator">|</span> <a href="#" class="link-compare"><span class="hidden">Add to Compare</span><i class="fa fa-exchange fa-5" aria-hidden="true"></i></a></li>

                    </ul>
                </div>
            </li>
                    <li class="item item-inner-addto-links">
                <a href="#" title="Woody Collection Set , 50 ml" class="product-image"><img src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/3/0/302020076_5.png" width="" height="" alt="Woody Collection Set , 50 ml" /></a>
                <div class="info">
                    <h2 class="product-name"><a href="#" title="Woody Collection Set , 50 ml">Woody Collection Set , 50 ml</a></h2>
                    <div class="overlay">
                        <div class="review-and-price">
                            <div class="wrap-inner-review">
                                    <div class="ratings">
        <!--        <span class="amount"><a href="#customer-reviews"></a></span>
-->
    </div>
                            </div>
                            

                        
    <div class="price-box">
                                            
                    <div class="special-price-wrap">
            <p class="old-price">
                <span class="price-label">Regular Price:</span>
                <span class="price" id="old-price-888">
                    580.00 SAR                </span>
            </p>

                            <p class="special-price">
                    <span class="price-label">Special Price</span>
                <span class="price" id="product-price-888">
                    290.00 SAR                </span>
                </p>
                    </div>
        
    
        </div>

                        </div>
                        <div class="actions">
                                                            <a title="Add to Wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                    </div>
                    </div>
                    <div class="add-to-cart">
                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocationAjax('#')"><span><span>Add to Cart</span></span></button>
                                            </div>
                </div>
                <div class="slide-addto-links icon-addto-links">
                    <ul class="add-to-links">
                                                <li><a href="#" class="link-wishlist"><span class="hidden">Add to Wishlist</span><i class="fa fa-heart-o fa-5" aria-hidden="true"></i></a></li>
                        <li><span class="separator">|</span> <a href="#" class="link-compare"><span class="hidden">Add to Compare</span><i class="fa fa-exchange fa-5" aria-hidden="true"></i></a></li>

                    </ul>
                </div>
            </li>
                    <li class="item item-inner-addto-links">
                <a href="#" title="Secret Collection , 30 ml" class="product-image"><img src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/3/0/302020077-2_3.png" width="" height="" alt="Secret Collection , 30 ml" /></a>
                <div class="info">
                    <h2 class="product-name"><a href="#" title="Secret Collection , 30 ml">Secret Collection , 30 ml</a></h2>
                    <div class="overlay">
                        <div class="review-and-price">
                            <div class="wrap-inner-review">
                                                            </div>
                            

                        
    <div class="price-box">
                                            
                    <div class="special-price-wrap">
            <p class="old-price">
                <span class="price-label">Regular Price:</span>
                <span class="price" id="old-price-889">
                    480.00 SAR                </span>
            </p>

                            <p class="special-price">
                    <span class="price-label">Special Price</span>
                <span class="price" id="product-price-889">
                    240.00 SAR                </span>
                </p>
                    </div>
        
    
        </div>

                        </div>
                        <div class="actions">
                                                            <a title="Add to Wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                    </div>
                    </div>
                    <div class="add-to-cart">
                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocationAjax('#')"><span><span>Add to Cart</span></span></button>
                                            </div>
                </div>
                <div class="slide-addto-links icon-addto-links">
                    <ul class="add-to-links">
                                                <li><a href="#" class="link-wishlist"><span class="hidden">Add to Wishlist</span><i class="fa fa-heart-o fa-5" aria-hidden="true"></i></a></li>
                        <li><span class="separator">|</span> <a href="#" class="link-compare"><span class="hidden">Add to Compare</span><i class="fa fa-exchange fa-5" aria-hidden="true"></i></a></li>

                    </ul>
                </div>
            </li>
                    <li class="item item-inner-addto-links">
                <a href="#" title="Kashmir, 100 ml" class="product-image"><img src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/3/0/301020294-2_3.png" width="" height="" alt="Kashmir, 100 ml" /></a>
                <div class="info">
                    <h2 class="product-name"><a href="#" title="Kashmir, 100 ml">Kashmir, 100 ml</a></h2>
                    <div class="overlay">
                        <div class="review-and-price">
                            <div class="wrap-inner-review">
                                    <div class="ratings">
                    <div class="rating-box">
                <div class="rating" style="width:100%"></div>
            </div>
        <!--        <span class="amount"><a href="#customer-reviews"></a></span>
-->
    </div>
                            </div>
                            

                        
    <div class="price-box">
                                            
                    <div class="special-price-wrap">
            <p class="old-price">
                <span class="price-label">Regular Price:</span>
                <span class="price" id="old-price-890">
                    580.00 SAR                </span>
            </p>

                            <p class="special-price">
                    <span class="price-label">Special Price</span>
                <span class="price" id="product-price-890">
                    290.00 SAR                </span>
                </p>
                    </div>
        
    
        </div>

                        </div>
                        <div class="actions">
                                                            <a title="Add to Wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                    </div>
                    </div>
                    <div class="add-to-cart">
                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocationAjax('#')"><span><span>Add to Cart</span></span></button>
                                            </div>
                </div>
                <div class="slide-addto-links icon-addto-links">
                    <ul class="add-to-links">
                                                <li><a href="#" class="link-wishlist"><span class="hidden">Add to Wishlist</span><i class="fa fa-heart-o fa-5" aria-hidden="true"></i></a></li>
                        <li><span class="separator">|</span> <a href="#" class="link-compare"><span class="hidden">Add to Compare</span><i class="fa fa-exchange fa-5" aria-hidden="true"></i></a></li>

                    </ul>
                </div>
            </li>
                    <li class="item item-inner-addto-links">
                <a href="#" title="Gold Tartiel 75 ml" class="product-image"><img src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/3/0/301020445-2_3_1.png" width="" height="" alt="Gold Tartiel 75 ml" /></a>
                <div class="info">
                    <h2 class="product-name"><a href="#" title="Gold Tartiel 75 ml">Gold Tartiel 75 ml</a></h2>
                    <div class="overlay">
                        <div class="review-and-price">
                            <div class="wrap-inner-review">
                                                            </div>
                            

                        
    <div class="price-box">
                                            
                    <div class="special-price-wrap">
            <p class="old-price">
                <span class="price-label">Regular Price:</span>
                <span class="price" id="old-price-899">
                    540.00 SAR                </span>
            </p>

                            <p class="special-price">
                    <span class="price-label">Special Price</span>
                <span class="price" id="product-price-899">
                    270.00 SAR                </span>
                </p>
                    </div>
        
    
        </div>

                        </div>
                        <div class="actions">
                                                            <a title="Add to Wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                    </div>
                    </div>
                    <div class="add-to-cart">
                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocationAjax('#')"><span><span>Add to Cart</span></span></button>
                                            </div>
                </div>
                <div class="slide-addto-links icon-addto-links">
                    <ul class="add-to-links">
                                                <li><a href="#" class="link-wishlist"><span class="hidden">Add to Wishlist</span><i class="fa fa-heart-o fa-5" aria-hidden="true"></i></a></li>
                        <li><span class="separator">|</span> <a href="#" class="link-compare"><span class="hidden">Add to Compare</span><i class="fa fa-exchange fa-5" aria-hidden="true"></i></a></li>

                    </ul>
                </div>
            </li>
                    <li class="item item-inner-addto-links">
                <a href="#" title="Miss Arabian , 100 ml" class="product-image"><img src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/3/0/301020321-2_4.png" width="" height="" alt="Miss Arabian , 100 ml" /></a>
                <div class="info">
                    <h2 class="product-name"><a href="#" title="Miss Arabian , 100 ml">Miss Arabian , 100 ml</a></h2>
                    <div class="overlay">
                        <div class="review-and-price">
                            <div class="wrap-inner-review">
                                    <div class="ratings">
                    <div class="rating-box">
                <div class="rating" style="width:53%"></div>
            </div>
        <!--        <span class="amount"><a href="#customer-reviews"></a></span>
-->
    </div>
                            </div>
                            

                        
    <div class="price-box">
                                            
                    <div class="special-price-wrap">
            <p class="old-price">
                <span class="price-label">Regular Price:</span>
                <span class="price" id="old-price-910">
                    440.00 SAR                </span>
            </p>

                            <p class="special-price">
                    <span class="price-label">Special Price</span>
                <span class="price" id="product-price-910">
                    220.00 SAR                </span>
                </p>
                    </div>
        
    
        </div>

                        </div>
                        <div class="actions">
                                                            <a title="Add to Wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                    </div>
                    </div>
                    <div class="add-to-cart">
                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocationAjax('#')"><span><span>Add to Cart</span></span></button>
                                            </div>
                </div>
                <div class="slide-addto-links icon-addto-links">
                    <ul class="add-to-links">
                                                <li><a href="#" class="link-wishlist"><span class="hidden">Add to Wishlist</span><i class="fa fa-heart-o fa-5" aria-hidden="true"></i></a></li>
                        <li><span class="separator">|</span> <a href="#" class="link-compare"><span class="hidden">Add to Compare</span><i class="fa fa-exchange fa-5" aria-hidden="true"></i></a></li>

                    </ul>
                </div>
            </li>
                </ul>
    </div>
            <script type="text/javascript">
        if (jQuery(window).width() > 767) {
            $j('.owl-carousel').owlCarousel({
                loop: false,
                nav: true,
                items: 5,
                dots: false,
                autoplay: true,
                navText: ['&nbsp;', '&nbsp;'],
                responsive: {
                    320: {
                        items: 3
                    },
                    400: {
                        items: 3
                    },
                    768: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                },
                navClass: ['owl-prev fa fa-caret-left', 'owl-next fa  fa-caret-right']
            });
        }
    </script>
    
    </div>
<script type="text/javascript">
    function setAjaxData(data,iframe){
        if(data.status == 'ERROR'){
            alert(data.message);
        }else{
            if(jQuery('#top_cart_sidebar')){
                jQuery('#top_cart_sidebar').html(data.sidebar);
                jQuery('.cart-qty').html(data.qty);
                jQuery('#top_cart_sidebar').slideDown();
                jQuery(window).scrollTop(0);
            }
            jQuery.fancybox.close();
        }
    }
    function setLocationAjax(url,id){
        if (url.indexOf("checkout/cart") < 0){
            window.location.href = url;
        }
        url = url.replace("checkout/cart","ajax/index");
        jQuery('#ajax_loader'+id).show();
        try {
            jQuery.ajax( {
                url : url,
                dataType : 'json',
                data: {isAjax: 1},
                success : function(data) {
                    jQuery('#ajax_loader'+id).hide();
                    setAjaxData(data,false);          
                }
            });
        } catch (e) {
        }
    }
</script>        
    <div class="line-divide"></div>
    <div class="box-collateral block block-related box-sell">
        <h2>You may also be interested in the following product(s)</h2>
        <div class="block-content">
            <ul class="owl-carousel box-up products-grid slides">
                                    <li class="item item-inner-addto-links">
                        <a href="#" title="Sehr Al Kalemat, 100 ml" class="product-image"><img src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/3/0/301020262-2_6.png" width="" height="" alt="Sehr Al Kalemat, 100 ml" /></a>
                        <div class="info">
                            <h2 class="product-name"><a href="#" title="Sehr Al Kalemat, 100 ml">Sehr Al Kalemat, 100 ml</a></h2>
                            <div class="overlay">
                                <div class="review-and-price">
                                    <div class="wrap-inner-review">
                                            <div class="ratings">
                    <div class="rating-box">
                <div class="rating" style="width:95%"></div>
            </div>
        <!--        <span class="amount"><a href="#customer-reviews"></a></span>
-->
    </div>
                                    </div>
                                    

                        
    <div class="price-box">
                                            
                    <div class="special-price-wrap">
            <p class="old-price">
                <span class="price-label">Regular Price:</span>
                <span class="price" id="old-price-783">
                    440.00 SAR                </span>
            </p>

                            <p class="special-price">
                    <span class="price-label">Special Price</span>
                <span class="price" id="product-price-783">
                    220.00 SAR                </span>
                </p>
                    </div>
        
    
        </div>

                                </div>
                                <div class="actions">
                                                                            <a title="Add to Wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                                    </div>
                            </div>
                            <div class="add-to-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocationAjax('#')"><span><span>Add to Cart</span></span></button>
                                                            </div>
                        </div>
                        <div class="slide-addto-links icon-addto-links">
                            <ul class="add-to-links">
                                                                <li><a href="#" class="link-wishlist"><span class="hidden">Add to Wishlist</span><i class="fa fa-heart-o fa-5" aria-hidden="true"></i></a></li>
                                <li><span class="separator">|</span> <a href="#" class="link-compare"><span class="hidden">Add to Compare</span><i class="fa fa-exchange fa-5" aria-hidden="true"></i></a></li>

                            </ul>
                        </div>

                    </li>
                                    <li class="item item-inner-addto-links">
                        <a href="#" title="Gentleman Secret, 100 ml" class="product-image"><img src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/3/0/301020398_4.png" width="" height="" alt="Gentleman Secret, 100 ml" /></a>
                        <div class="info">
                            <h2 class="product-name"><a href="#" title="Gentleman Secret, 100 ml">Gentleman Secret, 100 ml</a></h2>
                            <div class="overlay">
                                <div class="review-and-price">
                                    <div class="wrap-inner-review">
                                            <div class="ratings">
                    <div class="rating-box">
                <div class="rating" style="width:68%"></div>
            </div>
        <!--        <span class="amount"><a href="#customer-reviews"></a></span>
-->
    </div>
                                    </div>
                                    

                        
    <div class="price-box">
                                            
                    <div class="special-price-wrap">
            <p class="old-price">
                <span class="price-label">Regular Price:</span>
                <span class="price" id="old-price-784">
                    290.00 SAR                </span>
            </p>

                            <p class="special-price">
                    <span class="price-label">Special Price</span>
                <span class="price" id="product-price-784">
                    145.00 SAR                </span>
                </p>
                    </div>
        
    
        </div>

                                </div>
                                <div class="actions">
                                                                            <a title="Add to Wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                                    </div>
                            </div>
                            <div class="add-to-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocationAjax('#')"><span><span>Add to Cart</span></span></button>
                                                            </div>
                        </div>
                        <div class="slide-addto-links icon-addto-links">
                            <ul class="add-to-links">
                                                                <li><a href="#" class="link-wishlist"><span class="hidden">Add to Wishlist</span><i class="fa fa-heart-o fa-5" aria-hidden="true"></i></a></li>
                                <li><span class="separator">|</span> <a href="#" class="link-compare"><span class="hidden">Add to Compare</span><i class="fa fa-exchange fa-5" aria-hidden="true"></i></a></li>

                            </ul>
                        </div>

                    </li>
                                    <li class="item item-inner-addto-links">
                        <a href="#" title="Farasha 5, 100 ml" class="product-image"><img src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/3/0/301020352-1_4.png" width="" height="" alt="Farasha 5, 100 ml" /></a>
                        <div class="info">
                            <h2 class="product-name"><a href="#" title="Farasha 5, 100 ml">Farasha 5, 100 ml</a></h2>
                            <div class="overlay">
                                <div class="review-and-price">
                                    <div class="wrap-inner-review">
                                                                            </div>
                                    

                        
    <div class="price-box">
                                            
                    <div class="special-price-wrap">
            <p class="old-price">
                <span class="price-label">Regular Price:</span>
                <span class="price" id="old-price-786">
                    260.00 SAR                </span>
            </p>

                            <p class="special-price">
                    <span class="price-label">Special Price</span>
                <span class="price" id="product-price-786">
                    130.00 SAR                </span>
                </p>
                    </div>
        
    
        </div>

                                </div>
                                <div class="actions">
                                                                            <a title="Add to Wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                                    </div>
                            </div>
                            <div class="add-to-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocationAjax('#')"><span><span>Add to Cart</span></span></button>
                                                            </div>
                        </div>
                        <div class="slide-addto-links icon-addto-links">
                            <ul class="add-to-links">
                                                                <li><a href="#" class="link-wishlist"><span class="hidden">Add to Wishlist</span><i class="fa fa-heart-o fa-5" aria-hidden="true"></i></a></li>
                                <li><span class="separator">|</span> <a href="#" class="link-compare"><span class="hidden">Add to Compare</span><i class="fa fa-exchange fa-5" aria-hidden="true"></i></a></li>

                            </ul>
                        </div>

                    </li>
                                    <li class="item item-inner-addto-links">
                        <a href="#" title="Ehsas, 100 ml" class="product-image"><img src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/3/0/301020265-2_6.png" width="" height="" alt="Ehsas, 100 ml" /></a>
                        <div class="info">
                            <h2 class="product-name"><a href="#" title="Ehsas, 100 ml">Ehsas, 100 ml</a></h2>
                            <div class="overlay">
                                <div class="review-and-price">
                                    <div class="wrap-inner-review">
                                            <div class="ratings">
                    <div class="rating-box">
                <div class="rating" style="width:100%"></div>
            </div>
        <!--        <span class="amount"><a href="#customer-reviews"></a></span>
-->
    </div>
                                    </div>
                                    

                        
    <div class="price-box">
                                            
                    <div class="special-price-wrap">
            <p class="old-price">
                <span class="price-label">Regular Price:</span>
                <span class="price" id="old-price-787">
                    240.00 SAR                </span>
            </p>

                            <p class="special-price">
                    <span class="price-label">Special Price</span>
                <span class="price" id="product-price-787">
                    120.00 SAR                </span>
                </p>
                    </div>
        
    
        </div>

                                </div>
                                <div class="actions">
                                                                            <a title="Add to Wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                                    </div>
                            </div>
                            <div class="add-to-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocationAjax('#')"><span><span>Add to Cart</span></span></button>
                                                            </div>
                        </div>
                        <div class="slide-addto-links icon-addto-links">
                            <ul class="add-to-links">
                                                                <li><a href="#" class="link-wishlist"><span class="hidden">Add to Wishlist</span><i class="fa fa-heart-o fa-5" aria-hidden="true"></i></a></li>
                                <li><span class="separator">|</span> <a href="#" class="link-compare"><span class="hidden">Add to Compare</span><i class="fa fa-exchange fa-5" aria-hidden="true"></i></a></li>

                            </ul>
                        </div>

                    </li>
                            </ul>
        </div>
    </div>
                <script type="text/javascript">
           // if (jQuery(window).width() > 767) {
                $j('.box-up').owlCarousel({
                    loop: true,
                    nav: true,
                    items: 5,
                    dots: false,
                    autoplay: true,
                    navText: ['&nbsp;', '&nbsp;'],
                    responsive: {
                        320: {
                            items: 3
                        },
                        400: {
                            items: 3
                        },
                        768: {
                            items: 3
                        },
                        1000: {
                            items: 4
                        }
                    },
                    navClass: ['owl-prev fa fa-caret-left', 'owl-next fa  fa-caret-right']
                });
         //   }
        </script>
    
     <script type="text/javascript">
    function setAjaxData(data,iframe){
        if(data.status == 'ERROR'){
            alert(data.message);
        }else{
            if(jQuery('#top_cart_sidebar')){
                jQuery('#top_cart_sidebar').html(data.sidebar);
                jQuery('.cart-qty').html(data.qty);
                jQuery('#top_cart_sidebar').slideDown();
                jQuery(window).scrollTop(0);
            }
            jQuery.fancybox.close();
        }
    }
    function setLocationAjax(url,id){
        if (url.indexOf("checkout/cart") < 0){
            window.location.href = url;
        }
        url = url.replace("checkout/cart","ajax/index");
        jQuery('#ajax_loader'+id).show();
        try {
            jQuery.ajax( {
                url : url,
                dataType : 'json',
                data: {isAjax: 1},
                success : function(data) {
                    jQuery('#ajax_loader'+id).hide();
                    setAjaxData(data,false);
                }
            });
        } catch (e) {
        }
    }
</script>                    
<div class="box-collateral box-reviews" id="customer-reviews">
    <h2>Customer Reviews<i></i></h2>
    <div class="t-content">
    
                        <dl>
                            <dt>
                                            <a href="#"></a>
                   <br>                        
                          Review by <span>guest</span>                                    </dt>
                <dd>
                                                                <table class="ratings-table">
                            <col />
                            <col />
                            <tbody>
                                                            <tr>
                                    <th><div class="hidden">Rate the product</div></th>
                                    <td>
                                        <span>Rate the product</span>
                                        <div class="rating-box">

                                            <div class="rating" style="width:80%;"></div>
                                        </div>
                                    </td>
                               

                                </tr>
                            
                            </tbody>
                        </table>
                        
                                        it is very good smelling fragrance I like it                   <br>                    
<div class="split"></div>
                    
                </dd>
                            <dt>
                                            <a href="#"></a>
                   <br>                        
                          Review by <span>guest</span>                                    </dt>
                <dd>
                                                                <table class="ratings-table">
                            <col />
                            <col />
                            <tbody>
                                                            <tr>
                                    <th><div class="hidden">Rate the product</div></th>
                                    <td>
                                        <span>Rate the product</span>
                                        <div class="rating-box">

                                            <div class="rating" style="width:100%;"></div>
                                        </div>
                                    </td>
                               

                                </tr>
                            
                            </tbody>
                        </table>
                        
                                        ماشاءالله تبارك الله<br />
مره مره حلو<br />
                   <br>                    
<div class="split"></div>
                    
                </dd>
                            <dt>
                                            <a href="#">Perfect</a>
                   <br>                        
                          Review by <span>Jasim gamdi</span>                                    </dt>
                <dd>
                                                                <table class="ratings-table">
                            <col />
                            <col />
                            <tbody>
                                                            <tr>
                                    <th><div class="hidden">Rate the product</div></th>
                                    <td>
                                        <span>Rate the product</span>
                                        <div class="rating-box">

                                            <div class="rating" style="width:100%;"></div>
                                        </div>
                                    </td>
                               

                                </tr>
                            
                            </tbody>
                        </table>
                        
                                        Offffffff  <br />
Beautifulll product <br />
Arabic oud Goood job <br />
Exelllent <br />
And price is Also Gooood...<br />
I give you if you count in the sky stars all for you..<br />
Thank you very muchh....                   <br>                    
<div class="split"></div>
                    
                </dd>
                            <dt>
                                            <a href="#">bon </a>
                   <br>                        
                          Review by <span>vdp</span>                                    </dt>
                <dd>
                                                                <table class="ratings-table">
                            <col />
                            <col />
                            <tbody>
                                                            <tr>
                                    <th><div class="hidden">Rate the product</div></th>
                                    <td>
                                        <span>Rate the product</span>
                                        <div class="rating-box">

                                            <div class="rating" style="width:100%;"></div>
                                        </div>
                                    </td>
                               

                                </tr>
                            
                            </tbody>
                        </table>
                        
                                        I would like to recommend but there are marked in stock but I can not buy<br />
when are you going to go on sale rosewood?                   <br>                    
<div class="split"></div>
                    
                </dd>
                            <dt>
                                            <a href="#">Outstanding </a>
                   <br>                        
                          Review by <span>Tamina</span>                                    </dt>
                <dd>
                                                                <table class="ratings-table">
                            <col />
                            <col />
                            <tbody>
                                                            <tr>
                                    <th><div class="hidden">Rate the product</div></th>
                                    <td>
                                        <span>Rate the product</span>
                                        <div class="rating-box">

                                            <div class="rating" style="width:80%;"></div>
                                        </div>
                                    </td>
                               

                                </tr>
                            
                            </tbody>
                        </table>
                        
                                        Long lasting. Even though it's uni but it smells pretty sweet and more on a girly side. Perfect for females.                    <br>                    
<div class="split"></div>
                    
                </dd>
                    </dl>
                <div class="form-add">
    <h2>Write Your Own Review</h2>
        <form action="#" method="post" id="review-form">
        <input name="form_key" type="hidden" value="V88Vgz2UZpsBH4aj" />
        <fieldset>
                        <h3>You're reviewing: <span>Rose Wood, 100 ml</span></h3>
                            <h4>How do you rate this product<span class="mark-ques">?</span> <em class="required">*</em></h4>
                <span id="input-message-box"></span>
                <table class="data-table" id="product-review-table">
                    <col />
                    <col width="1" />
                    <col width="1" />
                    <col width="1" />
                    <col width="1" />
                    <col width="1" />
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th><span class="nobr">1 star</span></th>
                            <th><span class="nobr">2 stars</span></th>
                            <th><span class="nobr">3 stars</span></th>
                            <th><span class="nobr">4 stars</span></th>
                            <th><span class="nobr">5 stars</span></th>
                        </tr>
                    </thead>
                    <tbody>
                                            <tr>
                            <th>Rate the product</th>
                                                    <td class="value"><input type="radio" name="ratings[3]" id="Rate the product_1" value="11" class="radio" /></td>
                                                    <td class="value"><input type="radio" name="ratings[3]" id="Rate the product_2" value="12" class="radio" /></td>
                                                    <td class="value"><input type="radio" name="ratings[3]" id="Rate the product_3" value="13" class="radio" /></td>
                                                    <td class="value"><input type="radio" name="ratings[3]" id="Rate the product_4" value="14" class="radio" /></td>
                                                    <td class="value"><input type="radio" name="ratings[3]" id="Rate the product_5" value="15" class="radio" /></td>
                                                </tr>
                                        </tbody>
                </table>
                <input type="hidden" name="validate_rating" class="validate-rating" value="" />
                <script type="text/javascript">decorateTable('product-review-table')</script>
                            <ul class="form-list">
                    <li>
                        <label for="nickname_field" class="required"><em>*</em>Nickname</label>
                        <div class="input-box">
                            <input type="text" name="nickname" id="nickname_field" class="input-text required-entry" value="" />
                        </div>
                    </li>
                    <li>
                        <label for="summary_field" class="required"><em>*</em>Summary of Your Review</label>
                        <div class="input-box">
                            <input type="text" name="title" id="summary_field" class="input-text required-entry" value="" />
                        </div>
                    </li>
                    <li>
                        <label for="review_field" class="required"><em>*</em>Review</label>
                        <div class="input-box">
                            <textarea name="detail" id="review_field" cols="5" rows="3" class="required-entry"></textarea>
                        </div>
                    </li>
                </ul>
            </fieldset>
            <div class="buttons-set">
                <button type="submit" title="Submit Review" class="button"><span><span>Submit Review</span></span></button>
            </div>
    </form>
    <script type="text/javascript">
    //<![CDATA[
        var dataForm = new VarienForm('review-form');
        Validation.addAllThese(
        [
               ['validate-rating', 'Please select one of each of the ratings above', function(v) {
                    var trs = $('product-review-table').select('tr');
                    var inputs;
                    var error = 1;

                    for( var j=0; j < trs.length; j++ ) {
                        var tr = trs[j];
                        if( j > 0 ) {
                            inputs = tr.select('input');

                            for( i in inputs ) {
                                if( inputs[i].checked == true ) {
                                    error = 0;
                                }
                            }

                            if( error == 1 ) {
                                return false;
                            } else {
                                error = 1;
                            }
                        }
                    }
                    return true;
                }]
        ]
        );
    //]]>
    </script>
    </div>
        </div>
</div>
                
            </div>
</div>
<style>
    .at-resp-share-element .at-share-btn .at-label {
        display: none;
    }
</style>

<div id="fastbuy-fancy" class="fastbuy-fancy-content" style="display:none; width:580px;max-width:100%">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <legend>
                    <div class="text-center">
                        Fast buy fill your information and will ship your order direct.                    </div>
                </legend>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-12 no-padding-mobile">
                <form name="fastbuy-form" action="#" method="post" id="product-fastbuy-form" class="clearfix">
                    <div class="col-xs-12 col-md-12 col-lg-6">
                        <!-- First Name -->
                        <div id="name-group" class="form-group first-name">
                            <label for="first-name">First Name <span>*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="first-name" placeholder="First Name" class="form-control input-text required-entry">
                            </div>
                            <!-- errors will go here -->
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-6">
                        <!-- Last Name -->
                        <div id="name-group" class="form-group last-name">
                            <label for="last-name">Last Name <span>*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                 <input type="text" name="last-name" placeholder="Last Name" class="form-control input-text required-entry">
                            </div>
                            <!-- errors will go here -->
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <!-- EMAIL -->
                        <div id="email-group" class="form-group">
                            <label for="email">Email <span>*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                 <input type="text" name="email" placeholder="Email" class="form-control input-text required-entry validate-email">
                            </div>
                            <!-- errors will go here -->
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <!-- Address -->
                        <div id="address-group" class="form-group">
                            <label for="address">Address <span>*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                   <input type="text" name="address" placeholder="Address" class="form-control input-text required-entry">
                            </div>
                            <!-- errors will go here -->
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 col-lg-4">
                        <!-- mobile -->
                        <div id="mobile-group" class="form-group">
                            <label for=mobile">Mobile <span>*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                  <input type="text" name="mobile" placeholder="Mobile" class="form-control input-text  required-entry validate-length">
                            </div>
                            <!-- errors will go here -->
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-4">
                        <!-- City -->
                                                <div id="city-group" class="form-group">
                            <label for="city">City <span>*</span></label>
                            <!--<input type="text" name="city" placeholder="City" class="form-control input-text required-entry">-->
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <div class="city-nav">
                                    <input type="text" id="city-required" class="required-entry">
                                    <div class="city-select">
                                        <select data-placeholder="Select" name="city" class="chosen-select chosen-city required-entry validate-select" >
                                            <option value="">Choose your City</option>
                                                                                                                                                                                                                                                                                            <option value="Riyadh">Riyadh</option>
                                                                                                                                                                                                                                                <option value="Jeddah">Jeddah</option>
                                                                                                                                                                                                                                                <option value="Abha">Abha</option>
                                                                                                                                                                                                                                                <option value="Ahod Rufaidah">Ahod Rufaidah</option>
                                                                                                                                                                                                                                                <option value="Dawdmi">Dawdmi</option>
                                                                                                                                                                                                                                                <option value="Al Hassa">Al Hassa</option>
                                                                                                                                                                                                                                                <option value="Arar">Arar</option>
                                                                                                                                                                                                                                                <option value="Baha">Baha</option>
                                                                                                                                                                                                                                                <option value="Bisha">Bisha</option>
                                                                                                                                                                                                                                                <option value="Dammam">Dammam</option>
                                                                                                                                                                                                                                                <option value="Dere`iyeh">Dere`iyeh</option>
                                                                                                                                                                                                                                                <option value="Dhahran">Dhahran</option>
                                                                                                                                                                                                                                                <option value="Gizan">Gizan</option>
                                                                                                                                                                                                                                                <option value="Hafer Ak Battin">Hafer Ak Battin</option>
                                                                                                                                                                                                                                                <option value="Hail">Hail</option>
                                                                                                                                                                                                                                                <option value="Jouf">Jouf</option>
                                                                                                                                                                                                                                                <option value="Jubail">Jubail</option>
                                                                                                                                                                                                                                                <option value="Khamis Mushait">Khamis Mushait</option>
                                                                                                                                                                                                                                                <option value="Kharj">Kharj</option>
                                                                                                                                                                                                                                                <option value="Khobar">Khobar</option>
                                                                                                                                                                                                                                                <option value="Makkah">Makkah</option>
                                                                                                                                                                                                                                                <option value="Madinah">Madinah</option>
                                                                                                                                                                                                                                                <option value="Nejran">Nejran</option>
                                                                                                                                                                                                                                                <option value="Qassim">Qassim</option>
                                                                                                                                                                                                                                                <option value="Qatif">Qatif</option>
                                                                                                                                                                                                                                                <option value="Qurayat">Qurayat</option>
                                                                                                                                                                                                                                                <option value="Rafha">Rafha</option>
                                                                                                                                                                                                                                                <option value="Seihat">Seihat</option>
                                                                                                                                                                                                                                                <option value="Sharourah">Sharourah</option>
                                                                                                                                                                                                                                                <option value="Tabuk">Tabuk</option>
                                                                                                                                                                                                                                                <option value="Taif">Taif</option>
                                                                                                                                                                                                                                                <option value="Tarut">Tarut</option>
                                                                                                                                                                                                                                                <option value="Turaif">Turaif</option>
                                                                                                                                                                                                                                                <option value="Wadi El Dwaser">Wadi El Dwaser</option>
                                                                                                                                                                                                                                                <option value="Yanbu">Yanbu</option>
                                                                                                                                                                                                                                                <option value="Al Qonfotha">Al Qonfotha</option>
                                                                                                                                                                                                                                                <option value="Al Majma`ah">Al Majma`ah</option>
                                                                                                                                                                                                                                                <option value="Mahd Ad Dhahab">Mahd Ad Dhahab</option>
                                                                                                                                                                                                                                                <option value="Khafji">Khafji</option>
                                                                                                                                                                                                                                                <option value="Buraydah">Buraydah</option>
                                                                                                                                                                                                                                                <option value="Unayzah">Unayzah</option>
                                                                                                                                                                                                                                                <option value="Ar Rass">Ar Rass</option>
                                                                                                                                                                                                                                                <option value="Skaka">Skaka</option>
                                                                                                                                                                                                                                                <option value="Buqaiq">Buqaiq</option>
                                                                                                                                                                                                                                                <option value="Ras Tanura">Ras Tanura</option>
                                                                                                                                                                                                                                                <option value="Afif">Afif</option>
                                                                                                                                                                                                                                                <option value="Aflaj">Aflaj</option>
                                                                                                                                                                                                                                                <option value="Sajir">Sajir</option>
                                                                                                                                                                                                                                                <option value="Shaqra">Shaqra</option>
                                                                                                                                                                                                                                                <option value="Zilfi">Zilfi</option>
                                                                                                                                                                                                                                                <option value="An Namas">An Namas</option>
                                                                                                                                                                                                                                                <option value="Sulayel">Sulayel</option>
                                                                                                                                                                                                                                                <option value="Biljurashi">Biljurashi</option>
                                                                                                                                                                                                                                                <option value="Majardah">Majardah</option>
                                                                                                                                                                                                                                                <option value="Al Khorma">Al Khorma</option>
                                                                                                                                                                                                                                                <option value="Ranya">Ranya</option>
                                                                                                                                                                                                                                                <option value="Turbah">Turbah</option>
                                                                                                                                                                                                                                                <option value="Al Bikreyah">Al Bikreyah</option>
                                                                                                                                                                                                                                                <option value="Tathleeth">Tathleeth</option>
                                                                                                                                                                                                                                                <option value="Al Modhanb">Al Modhanb</option>
                                                                                                                                                                                                                                                <option value="Al Quwayiyah">Al Quwayiyah</option>
                                                                                                                                                                                                                                                <option value="Dhahran Al Janoub">Dhahran Al Janoub</option>
                                                                                                                                                                                                                                                <option value="Abu Arish">Abu Arish</option>
                                                                                                                                                                                                                                                <option value="Sarat Abida">Sarat Abida</option>
                                                                                                                                                                                                                                                <option value="Al Mukhwah">Al Mukhwah</option>
                                                                                                                                                                                                                                                <option value="Sabt Al alaya">Sabt Al alaya</option>
                                                                                                                                                                                                                                                <option value="Tanumah">Tanumah</option>
                                                                                                                                                                                                                                                <option value="Muhayyil Assir">Muhayyil Assir</option>
                                                                                                                                                                                                                                                <option value="An nairiyah">An nairiyah</option>
                                                                                                                                                                                                                                                <option value="Al Hufuf">Al Hufuf</option>
                                                                                                                                                                                                                                                <option value="Sabya">Sabya</option>
                                                                                                                                                                                                                                                <option value="Dawmat Al Jandal">Dawmat Al Jandal</option>
                                                                                                                                                                                                                                                <option value="umm lajj">umm lajj</option>
                                                                                                                                                                                                                                                <option value="al ula">al ula</option>
                                                                                                                                                                                                                                                <option value="Samtah">Samtah</option>
                                                                                                                                                                                                                                                <option value="At tuwal">At tuwal</option>
                                                                                                                                                                                                                                                <option value="Al Darb">Al Darb</option>
                                                                                                                                                                                                                                                <option value="Dhuba">Dhuba</option>
                                                                                                                                                                                                                                                <option value="Tabarjal">Tabarjal</option>
                                                                                                                                                                                                                                                <option value="Taima">Taima</option>
                                                                                                                                                                                                                                                <option value="Thaqba">Thaqba</option>
                                                                                                                                                                                                                                                <option value="Safwa">Safwa</option>
                                                                                                                                                                                                                                                <option value="Rabigh">Rabigh</option>
                                                                                                                                                                                                                                                <option value="Raj`l Almaa">Raj`l Almaa</option>
                                                                                                                                                                                                                                                <option value="Al Dayer">Al Dayer</option>
                                                                                                                                                                                                                                                <option value="Riyadh Al Khabra">Riyadh Al Khabra</option>
                                                                                                                                                                                                                                                <option value="Muzahmiyah">Muzahmiyah</option>
                                                                                                                                                                                                                                                <option value="Al Qarya Al Ulya">Al Qarya Al Ulya</option>
                                                                                                                                                                                                                                                <option value="Wajh">Wajh</option>
                                                                                                                                                                                                                                                <option value="Anak">Anak</option>
                                                                                                                                                                                                                                                <option value="Hawtat Bani Tamim">Hawtat Bani Tamim</option>
                                                                                                                                                                                                                                                <option value="Rumah">Rumah</option>
                                                                                                                                                                                                                                                <option value="Baysh">Baysh</option>
                                                                                                                                                                                                                                                <option value="Badaya">Badaya</option>
                                                                                                                                                                                                                                                <option value="Hanakyah">Hanakyah</option>
                                                                                                                                                                                                                                                <option value="Lith">Lith</option>
                                                                                                                                                                                                                                                <option value="Uyun Al Jiwa">Uyun Al Jiwa</option>
                                                                                                                                                                                                                                                <option value="Tareeb">Tareeb</option>
                                                                                                                                                                                                                                                <option value="Badr">Badr</option>
                                                                                                                                                                                                                                                <option value="Khulais">Khulais</option>
                                                                                                                                                                                                                                                <option value="Qilwah">Qilwah</option>
                                                                                                                                                                                                                                                <option value="Aqiq">Aqiq</option>
                                                                                                                                                                                                                                                <option value="Mandaq">Mandaq</option>
                                                                                                                                                                                                                                                <option value="Rafayaa Al Gimsh">Rafayaa Al Gimsh</option>
                                                                                                                                                                                                                                                <option value="Jumom">Jumom</option>
                                                                                                                                    </select>
                                    </div>
                                </div>
                            </div>

                            <!-- errors will go here -->
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 col-lg-4">
                        <!-- City -->
                        <div id="country-group" class="form-group">
                            
                            <label for="country">Country</label>
                            <div class="input-group">

                                <div class="side-by-side side-by-side-country clearfix">
                                    <div>
                                        <input type="hidden" name="country-name" id="country-name" value="Saudi Arabia">
                                        <input type="hidden" name="country-code" id="country-code" value="SA">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                        <select data-placeholder="Select" class="chosen-select chosen-country validate-select" tabindex="1" id="single-country">
                                            <option value="" ></option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <option selected value="SA" data-name="Saudi Arabia">Saudi Arabia</option>
                                                                                    </select>
                                    </div>
                                </div>
                            </div>
                            <!-- errors will go here -->
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 col-lg-4 m-show">
                        <hr/>
                        <label>Perfumes Names:</label>
                        <hr/>
                    </div>

                    <input type="hidden" id="custome_count" name="custome_count" value="1">
                    <input type="hidden" id="shipping_type" name="shipping_type" value="">
                    <input type="hidden" id="total_include_tax" name="total_include_tax" value="">
                    <input type="hidden" id="shipping_amount" name="shipping_amount" value="">

                    <div class="clearfix form-group">
                        <div class="col-xs-12 col-md-12 col-lg-3" style="padding-right: 0;"><label style="margin-top: 4px;">Perfumes Names:</label></div>
                        <div class="col-xs-12 col-md-12 col-lg-5" style="padding: 0 0 0;">
                            <div class="input-group">

                                <div class="side-by-side clearfix">
                                    <div>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                        <input type="hidden" name="product-id[]" id="product-id1" value="">
                                        <input type="hidden" name="product-name1" class="set-perfumes-name1" id="fastbuy-name1" value="">
                                        <input type="hidden" name="product-price1" class="set-perfumes-price1" id="fastbuy-price1" value="">
                                        <div class="product-buy">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-12 col-lg-4" >
                            <div class="qty-activate">
                                <div class="col-xs-12 col-md-12 col-lg-5">
                                    <div class="form-group">
                                        <label for="fastbuy-qty" style="margin-top: 4px;">Qty:</label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12 col-lg-7" style="padding: 0;">

                                        <div id="quantity-group" class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                  <input disabled type="text" name="fastbuy-qty[]" id="fastbuy-qty1" placeholder="Quantity" class="form-control input-text required-entry validate-greater-than-zero input-fastbuy-qty" onkeyup="checkquantity(1)" style="text-align: right;">
                                            </div>
                                    </div>
                                    <!-- errors will go here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="insert_product"></div>
                    <div class="add-new-product"><a id="add-new-product" rel="2" class="button">Add New Product<span class="glyphicon glyphicon-send"></span></a><span class="ajax-loading"></span></div>

                    <div class="col-xs-12 col-md-12 col-lg-4 m-show for-discount m-show">
                        <hr/>
                    </div>
                    <div class="discount col-xs-12 col-md-12 col-lg-12">
                        <div class="mess-coupon messages">
                            <div class="inner-mess"></div>
                        </div>
                        <label>Discount Codes</label>
                        <!-- <div class="discount-form">
                            <input type="hidden" name="has_coupon" id="has_coupon" value="0" />
                            <label for="coupon_code">Coupon</label>
                            <input class="input-text" id="coupon_code" name="coupon_code" placeholder="Enter Coupon Code" value="">
                            <button type="button" title="Apply" class="button" id="coupon_apply" value="Apply"><span><span>Apply</span></span></button>
                            <button type="button" style="display: none" title="Cancel" class="button" id="coupon_cancel" value="Cancel"><span><span>Cancel</span></span></button>
                        </div>
                    </div> -->
                    <div class="col-xs-12 col-md-12 col-lg-4 m-show for-discount m-show">
                        <hr/>
                    </div>

                    <div class="col-xs-12 col-md-12 col-lg-4 m-show">
                        <label>Invoice Data</label>
                        <hr/>
                        <p class="fastbuy-tax tax-text">Tax Number:</p>
                        <p class="fastbuy-tax tax-number"><strong style="font-weight: 700;">300124696900003</strong></p>
                        <hr/>
                    </div>

                    <div id="fastbuy-summary"></div>
                    <div class="col-xs-12 col-md-12 col-lg-12" >
                        <div class="fast-buy text-center">
                            <button type="submit" name="submit" value="Submit" class="fastbuy-btn fastbuy-place-order" ><span>Submit</span><span class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12 m-hide">
                        <div class="taxt-inner clearfix">
                            <p class="fastbuy-tax tax-text">Tax Number:</p>
                            <p class="fastbuy-tax tax-number"><strong style="font-weight: 700;">300124696900003</strong></p>
                        </div>
                    </div>

                </form>
                <script type="text/javascript">
                    //< ![CDATA[
                    var fastbuyForm = new VarienForm('product-fastbuy-form');

                    jQuery('#product-fastbuy-form').submit(function(){
                        if (fastbuyForm .validator.validate()){
                            jQuery('.fastbuy-place-order').prop('disabled', true);
                        }
                    });

                    //]]>
                </script>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    jQuery(document).ready(function(){
        var windowsize = jQuery(window).width();
        if(windowsize > 767 ) {
            jQuery(".various").fancybox({
                width       : 600,
                height      : 700,
                fitToView   : false,
                closeClick  : false,
                openEffect  : 'fade',
                closeEffect : 'fade',
                autoSize : false,
                beforeShow: function() {
                    jQuery('body').addClass('hidden_scroll');
                },
                afterClose: function() {
                    jQuery('body').removeClass('hidden_scroll');
                }
            });
        }
        if(windowsize < 767 ) {
            jQuery(".various").fancybox({
                width       : windowsize,
                height      : 'auto',
                fitToView   : false,
                closeClick  : false,
                openEffect  : 'fade',
                closeEffect : 'fade',
                autoSize : false,
                beforeShow: function() {
                   /// jQuery('body').addClass('hidden_scroll');
                   // jQuery('body').css('width',windowsize);

                },
                afterClose: function() {
                    //jQuery('body').removeClass('hidden_scroll');
                    //jQuery('body').css('width','auto');
                }
            });
        }


       /* jQuery(".various").on('click', function () {

            setTimeout(setchosenproduct , 1000);
            setTimeout(setchosencountry , 1000);
        }); */

        $j(document).on('click', '#product-fastbuy-button', function(event) {
            event.preventDefault();
            if (jQuery('#single-label-example1').length == 0) {
                $j.ajax({
                    url: '#',
                    type: 'POST',
                    dataType: 'HTML',
                })
                    .done(function(data) {
                        jQuery('.product-buy').html(data);
                        jQuery('.product-buy').find('#single-label-example1').val(877);
                        jQuery(".chosen-select").chosen({
                            width: "100%",
                            allow_single_deselect: true
                        });

                        setTimeout(setchosenproduct , 1000);
                        setTimeout(setchosencountry , 1000);
                    })
                    .fail(function() {
                        // console.log("error");
                    })
                    .always(function() {
                        // console.log("complete");
                    });
            }

        });


        function setchosenproduct() {
            var my_val = "877";
            jQuery("#single-label-example1 option[value='"+my_val+"']").prop('selected', true);
            jQuery("#single-label-example1").val(my_val).trigger("chosen:updated");
            var productId = my_val;
            var productPrice = jQuery('#single-label-example1').find(':selected').data('price');
            var productName = jQuery('#single-label-example1').find(':selected').data('name');

            jQuery("#product-id1").val(productId);
            //jQuery(".input-fastbuy-qty").val('1');
            jQuery("#fastbuy-qty1").val('1');
            jQuery("#fastbuy-price1").val(productPrice);
            jQuery("#fastbuy-name1").val(productName);
            jQuery("#fastbuy-qty1").prop('disabled', false);
            update_bill();
        }

        function setchosencountry() {
            var storeCode = "SA";

            jQuery("#single-country option[value='"+storeCode+"']").prop('selected', true);
            jQuery('#single-country').val(storeCode).trigger("chosen:updated");

            var storeName = jQuery('#single-country').find(':selected').data('name');
            jQuery('#country-code').val(storeCode);
            jQuery('#country-name').val(storeName);
        }

        //chosen select

        jQuery(".chosen-select").chosen({
            width: "100%",
            allow_single_deselect: true
        });

        jQuery('.chosen-country').on('change', function() {
            var storeCode = jQuery(this).val();
            var storeName = jQuery('#single-country').find(':selected').data('name');
            jQuery('#country-code').val(storeCode);
            jQuery('#country-name').val(storeName);
        });

        //jQuery('.chosen-product').on('change', function() {
        jQuery(document).on('change', '.chosen-product', function() {
            var productId = jQuery(this).val();
            var rel = jQuery(this).attr('rel');
            var productPrice = jQuery('#single-label-example' + rel).find(':selected').data('price');
            var productName = jQuery('#single-label-example' + rel).find(':selected').data('name');
            jQuery('#coupon_apply').removeAttr("disabled");
            jQuery("#product-id"+rel).val(productId);
            //jQuery(".input-fastbuy-qty").val('1');
            jQuery("#fastbuy-qty"+rel).val('1');
            jQuery("#fastbuy-price"+rel).val(productPrice);
            jQuery("#fastbuy-name"+rel).val(productName);
            jQuery("#fastbuy-qty"+rel).prop('disabled', false);
            update_bill();

        });

    });
</script>
<style>
    #fastbuy-fancy .container {
        width: 580px;
    }
</style>

<script type="text/javascript">

    jQuery("#add-new-product").click(function() {
        jQuery(this).hide();
        jQuery('.add-new-product .ajax-loading').show();
        var rel = jQuery(this).attr('rel');
        var formData = {
            "rel"      : rel
        };
        var url = '#';
        jQuery.ajax({
            type        : 'POST',
            url         : url,
            data        : formData,
            dataType    : 'json',
            encode      : true
        }).done(function(response) {
            jQuery('#add-new-product').show();
            jQuery('.add-new-product .ajax-loading').hide();
            if(response.error ==0) {
                jQuery(".insert_product").append(jQuery.trim(response.html));
                jQuery("#custome_count").val(rel);
                jQuery("#add-new-product").attr('rel', parseInt(rel) + 1);
                jQuery("#single-label-example"+rel).chosen({
                    width: "100%",
                    allow_single_deselect: true
                });
            }
        });
    });

    jQuery("#coupon_apply").click(function() {
        var code = jQuery('#coupon_code').val();
        var formData = {
            "code"      : code
        };
        var url = '#';
        jQuery.ajax({
            type        : 'POST',
            url         : url,
            data        : formData,
            dataType    : 'json',
            encode      : true
        }).done(function(response) {
            //jQuery('#coupon_apply').show();
            //jQuery('.add-new-product .ajax-loading').hide();
            if(response.error ==0) {
                if(response.active == 1) {
                    var amount = 0;
                    var total = 0;
                    total = parseFloat(jQuery('#grandtotal').html());
                    var action = response.simple_action;
                    var discount_amount = response.discount_amount;
                    var discount_html = '';
                    if(action == 'by_fixed') {
                        if(response.apply_to_shipping == 0) {
                            var amount = Number(parseFloat(discount_amount));
                        }else {
                            var amount = Number(parseFloat(discount_amount) + parseFloat(jQuery('#shipping_amount').val()));
                        }
                       // amount = Number(discount_amount);
                        total = total - amount;
                    }
                    if(action == 'by_percent'  || action == 'group_n_disc') {
                        if(response.apply_to_shipping == 0) {
                            var sub = parseFloat(jQuery('#total_include_tax').val());
                        }else {
                            var sub = parseFloat(jQuery('#grandtotal').html())
                        }
                        amount = (sub*discount_amount)/ 100;
                        total = total - amount;
                    }
                    jQuery('#discount_div').html('<label class="col-xs-6 col-md-6 control-labelx">Discount </label> <label id="discount_amount" class="col-xs-6 col-md-6 control-labelx">'+amount+' </label>');
                    jQuery('#grandtotal').html(total);
                    jQuery('#coupon_cancel').show();
                    jQuery('#coupon_apply').hide();
                    jQuery('.inner-mess').html(response.mess);
                    jQuery('.inner-mess').removeClass('error-msg');
                    jQuery('.inner-mess').removeClass('success-msg');
                    jQuery('.inner-mess').addClass('success-msg');
                    jQuery('#has_coupon').val(1);
                    jQuery("#coupon_apply").prop('disabled', true);
                }else {
                    jQuery('.inner-mess').html(response.mess);
                    updateCoupon();
                    jQuery('.inner-mess').addClass('error-msg');
                    jQuery("#coupon_cancel").hide();
                    jQuery('#coupon_apply').show();


                }
            }else {
                jQuery('.inner-mess').html(response.mess);
                updateCoupon();
                jQuery('.inner-mess').addClass('error-msg');
                jQuery("#coupon_cancel").hide();
                jQuery('#coupon_apply').show();
            }
        });
    });

    jQuery("#coupon_cancel").click(function() {
        jQuery(this).hide();
        jQuery('.inner-mess').html('');
        jQuery("#coupon_apply").prop('disabled', false);
        jQuery('#coupon_apply').show();
        updateCoupon();
    });

    function updateCoupon() {
        var discount = parseFloat(jQuery('#discount_amount').html());
        var total = parseFloat(jQuery('#grandtotal').html());
        total = total + discount;
        if(discount > 0)
             jQuery('#grandtotal').html(total);
        jQuery('#discount_div').html('');
        jQuery('#has_coupon').val(0);
        jQuery("#coupon_cancel").hide();
        jQuery('.inner-mess').removeClass('error-msg');
        jQuery('.inner-mess').removeClass('success-msg');
    }

    jQuery(document).on('click', '.remove-product', function() {
        var id = jQuery(this).attr('dir');
        jQuery('#product-item'+id).remove();
        update_bill();
    });

    function checkquantity(i){
        var html = "";
        var productId = Number(document.getElementById("product-id"+i).value);
        var quantity = Number(document.getElementById("fastbuy-qty"+i).value);
        var inputId = "fastbuy-qty"+i;

        var formData = {
            "productid"      : productId,
            "quantity"       : quantity
        };
        var url = '#';
        jQuery.ajax({
            type        : 'POST',
            url         : url,
            data        : formData,
            dataType    : 'json',
            encode      : true
        }).done(function(response) {

            if(response == 1) {
                //In Stock
                update_bill();
            }
            if(response == 0) {
                //Out Stock
                html += "<div class=\"validation-advice\" id=\"advice-required-entry-city\" style=\"\">No Stock</div>";
                jQuery('#'+inputId).next('div').remove();
                jQuery('#'+inputId).addClass('validation-failed');
                jQuery('#'+inputId).after(html);
                jQuery('#'+inputId).val(1);
                update_bill();
            }
        });
        event.preventDefault();
    }

    function update_bill() {
        var minimumFree = '0';
        var flatrate_amount = '20.00';
        var i=1;
        var flag=0;
        var last_total=0;
        var total_for_tax = 0;
        var total_product_with_tax = 0;
        var product_tax = '5';
        var html = "";
        var custome_count=document.getElementById('custome_count').value;
        custome_count=Number(custome_count);

        while(i <= custome_count){

            //var product_name=document.getElementById('fastbuy-name'+i).value;
            var product_name = jQuery('#fastbuy-name'+i).val();
            //var quantity=document.getElementById('fastbuy-qty'+i).value;
            var quantity= jQuery('#fastbuy-qty'+i).val();
            if(typeof(quantity) !== "undefined") {
                quantity = convertDigitIn(quantity);

                //var product_price=document.getElementById('fastbuy-price'+i).value;
                var product_price = jQuery('#fastbuy-price' + i).val();

                if (product_name != "" || quantity != "" || quantity != 0) {
                    if (flag == 0) {
                        html += '<div class="fastbuy-header inputGroupContainer clearfix"><div class="col-xs-6 col-md-6 col-lg-6 control-labelx">Perfume Name</div><div class="col-xs-2 col-md-2 col-lg-2 control-labelx text-center">Qty</div><div class="col-xs-4 col-md-4 col-lg-4 control-labelx">Total</div></div>';
                        flag = 1;
                    }
                    var total = product_price * quantity;
                    last_total = last_total + total;
                    html += '<div class="form-group" ><div class="inputGroupContainer"><label class="col-xs-6 col-md-6 col-lg-6 control-labelx" >' + product_name + '</label> <label class="col-xs-2 col-md-2 col-lg-2 control-labelx text-center" >' + quantity + '</label> <label class="col-xs-4 col-md-2 col-lg-4 control-labelx"  >' + total + '</label> </div></div>';
                }
            }
            i=i+1;
        }
        html +='<hr>';
        total_for_tax = last_total;

        if(last_total >= minimumFree){
            jQuery('#shipping_type').val('free');
            jQuery('#shipping_amount').val(0);
            html +='<div class="form-group" ><div class="inputGroupContainer"><label class="col-xs-6 col-md-6 control-labelx" >Shipping Fees</label> <label class="col-xs-6 col-md-6 control-labelx" >Free Shipping</label></div></div>';
        }else {
            html +='<div class="form-group" ><div class="inputGroupContainer"><label class="col-xs-6 col-md-6 control-labelx" >Shipping Fees</label> <label class="col-xs-6 col-md-6 control-labelx" >'+parseFloat(flatrate_amount).toFixed(0)+'</label></div></div>';
            last_total = last_total + parseFloat(flatrate_amount);
            jQuery('#shipping_type').val('flat');
            jQuery('#shipping_amount').val(parseFloat(flatrate_amount));
        }
        tax=total_for_tax*(parseFloat(product_tax)/100);
        after_tax=tax+last_total;
        total_product_with_tax = tax + total_for_tax;
        jQuery('#total_include_tax').val(total_product_with_tax);
        html +='<div class="form-group" ><div class="inputGroupContainer"><label class="col-xs-6 col-md-6 control-labelx" >Total</label> <label class="col-xs-6 col-md-6 control-labelx"  >'+last_total +' </label> </div><div class="inputGroupContainer"><label class="col-xs-6 col-md-6 control-labelx" >Tax </label> <label class="col-xs-6 col-md-6 control-labelx"  >'+tax +' </label> </div><div class="inputGroupContainer" id="discount_div"></div><div class="inputGroupContainer"><label class="col-xs-6 col-md-6 control-labelx" >Grand Total </label> <label class="col-xs-6 col-md-6 control-labelx" style="color:#c41230; font-size: 20px;" id="grandtotal">'+after_tax +' </label> </div></div>';
        jQuery('#fastbuy-summary').html(html);
    }

    function convertDigitIn(enDigit){ // PERSIAN, ARABIC, URDO
        var yas =enDigit;
        yas = Number(yas.replace(/[٠١٢٣٤٥٦٧٨٩]/g, function (d) {
                return d.charCodeAt(0) - 1632;
            }).replace(/[۰۱۲۳۴۵۶۷۸۹]/g, function (d) { return d.charCodeAt(0) - 1776; })
        );

        return yas;
    }

    function stopBodyScrolling (bool) {
        if (bool === true) {
            document.body.addEventListener("touchmove", freezeVp, false);

        } else {
            document.body.removeEventListener("touchmove", freezeVp, false);
        }
    }

    var freezeVp = function(e) {
        e.preventDefault();
    };

    $j(document).on('input', 'input[name="mobile"]', function(event) {
        event.preventDefault();
        if($j('#single-country').val() == "SA"){
            $j(this).attr('maxlength', '10');
            var v = $j(this).val()[0];
            if(v == "0"){
                $j(this).attr('maxlength', '10').removeClass('minimum-length-9').addClass('minimum-length-10');
            }else{
                $j(this).attr('maxlength', '9').removeClass('minimum-length-10').addClass('minimum-length-9');
            }
        }else{
            $j(this).removeClass('minimum-length-9').removeClass('minimum-length-10');
            $j(this).removeAttr('maxlength');
        }
    });

    $j(document).on('change', 'input[name="mobile"]', function(event) {
        var phone = $j('input[name="mobile"]').val();
        if (phone.length == 9 && phone[0] != '0'){
            $j(this).removeAttr('maxlength');
            $j(this).val('0'+phone);
        }
    });

    $j(document).on('input', '.chosen-city', function(event) {
        event.preventDefault();
        $j('#city-required').val($j(this).val());
    });

</script>
<div class="nosto_element" id="nosto-page-product1"></div>
<div class="nosto_element" id="nosto-page-product2"></div>
<div class="nosto_element" id="nosto-page-product3"></div>
<script type="text/javascript">
    var lifetime = 3600;
    var expireAt = Mage.Cookies.expires;
    if (lifetime > 0) {
        expireAt = new Date();
        expireAt.setTime(expireAt.getTime() + lifetime * 1000);
    }
    Mage.Cookies.set('external_no_cache', 1, expireAt);
</script>
<div class="notranslate" style="display:none">  <span class="nosto_page_type" style="display:none">product</span>
</div>
<div class="nosto_element" id="nosto-page-footer"></div>            </div>
        </div>
        <div class="footer-container hidden-xs">
                     <div class="rowshipment">
  <div class="columnshipment">
    <img  src="https://shop.arabianoud.com/skin/frontend/arabianoud/default/images/fastship.png" alt="" style="width:100%">
  </div>
  <div class="columnshipment">
    <img  src="https://shop.arabianoud.com/skin/frontend/arabianoud/default/images/securepay.png"   alt="" style="width:100%">
  </div>
  <div class="columnshipment">
    <img  src="https://shop.arabianoud.com/skin/frontend/arabianoud/default/images/cod.png"   alt="" style="width:100%">
  </div>
  <div class="columnshipment">
    <img src="https://shop.arabianoud.com/skin/frontend/arabianoud/default/images/easyreturn.png"   alt="" style="width:100%">
  </div>
</div>                     

		<div class="footer-1-wrapper hidden-xs">
			<div class="footer-1-inner">
			<!-- Footer 1 -->
				<div class="footer-1">
					<!-- Sign Up for Newsletter -->
					<div class="block block-subscribe row">
    <form action="#" method="post" id="newsletter-validate-detail">
        <div class="block-content container">
            <div class="form-subscribe-header col-sm-5 col-md-5">
                <label for="newsletter">Get hooked with our Emails.</label>
            </div>
            <div class="input-box col-sm-7 col-md-7">
                <div class="inner">
                   <input type="text" name="email" id="newsletter" placeholder="Email address" title="Email address" class="input-text required-entry validate-email" />
                   <button type="submit" title="Sign up" class="button"><span><span>SIGN UP</span></span></button>
                </div>
            </div>
        </div>
    </form>
    <script type="text/javascript">
    //<![CDATA[
        var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
    //]]>
    </script>
</div>
									</div>
			</div>
	    </div>
	    <!-- Footer 2 -->
	    <div class="footer-2">
	    	<div class="row">
	    		<div class="container">



                    <div class="fcol col-xs-12 col-md-2 col-sm-3">
                        <div class="clearfix">
                            <img alt="" src="image/logo.png"  width="80%"/>
                        </div>
                    </div>
                    <div class="fcol col-xs-6 col-md-3 col-sm-3">
                        <div class="clearfix">
                            <span class="fcol-title">Qatar OUD</span>
                            <ul>
<li><a href="#">About Us</a></li>
<li><a href="#">Contact Us</a></li>

</ul>                        </div>
                    </div>
                    <div class="fcol col-xs-6 col-md-3 col-sm-3">
                        <div class="clearfix">
                            <span class="fcol-title">Customer Service</span>
                            <ul>
<li><a href="#">FAQ</a></li>
<li><a href="#">Privacy policy</a></li>
<li><a href="#">Terms &amp; conditions</a></li>
<li><a href="#">Return policy</a></li>
<li><a href="#">Shipment Policy</a></li>

</ul>                        </div>
                    </div>
                    <div class="fcol col-xs-6 col-md-3 col-sm-3">
                        <div class="clearfix">
                            <span class="fcol-title">You</span>
                            <ul>
<li><a href="#">Account</a></li>
<li><a href="#">Track a package</a></li>
<li><a href="#">Favourites</a></li>
</ul>
                        </div>
                    </div>
	    		</div>
	    	</div>
			    	
	    </div>
                     <div class="footer-distributed">

			

			<div class="footer-center">

				<div class="footer-mm">
					<i class="fa fa-whatsapp"></i>
					<p><span>WhatsApp</span></p>
				</div>

				<div class="footer-mm">
					<i class="fa fa-phone"></i>
					<p>920009692</p>
				</div class="footer-mm">

				<div class="footer-mm">
					<i class="fa fa-envelope"></i>
					<p><a href="#">InworthIt@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				

				<div class="footer-icons">

					<a href="#"><img src="https://shop.arabianoud.com/skin/frontend/arabianoud/default/images/facebook.png"></a>
					<a href="#"><img src="https://shop.arabianoud.com/skin/frontend/arabianoud/default/images/youtube.png"></a>
					<a href="#"><img src="https://shop.arabianoud.com/skin/frontend/arabianoud/default/images/twitter.png"></a>
					<a href="#"><img src="https://shop.arabianoud.com/skin/frontend/arabianoud/default/images/instagram.png"></a>

				</div>
				
				


			</div>

		</div>                             <div class="containerfooter">
 <div class="textfoot">
Copyright © 2019 all rights reserved
  </div>
  <div class="imagefoot">
    <img src="https://shop.arabianoud.com/skin/frontend/arabianoud/default/images/icons.png">
  </div>
</div>

</div>



                

<div class="visible-xs-block visible-sm-block">
    <div class="guideBottom">
        <dl>
            <a href="/">
                <dt class="home"></dt>
                <dd>Home</dd>
            </a>
        </dl>
        <dl>
            <a href="#">
                <dt class="categories"></dt>
                <dd>Categories</dd>
            </a>
        </dl>
        <dl class="m-bag">
            <a href="#">
                <dt class="bag"></dt>
                                <dd>Bag<span id="m-qty" class="m-qty">0</span></dd>
            </a>
        </dl>
        <dl>
            <a href="#">
                <dt class="contactus"><img src="https://d165ykedl9l7pm.cloudfront.net/media/wysiwyg/telephone.png" alt="" /></dt>
                <dd>Contact Us</dd>
            </a>
        </dl>
        <dl>
            <a href="#">
                <dt class="account"></dt>
                <dd>Account</dd>
            </a>
        </dl>
    </div>
    </div>	    <!-- CRITEO ONETAG MAGENTO EXTENSION VERSION 1.6.4 -->
            <!-- START OF CRITEO ONETAG -->
            <script type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async="true"></script>
            <script type="text/javascript">
                var deviceType = (window.innerWidth <= 767) ? 'm' : (window.innerWidth >= 980) ? 'd' : 't';
                window.criteo_q = window.criteo_q || [];
                window.criteo_q.push({"event": "setSiteType", "type": deviceType, "ecpplugin": "magento-1.6.4"});
                window.criteo_q.push( {"event":"setAccount","account":"28944"},
{"event":"setEmail","email":""},
{"event":"viewItem","item":"301020427"} );

            </script>
            <!-- END OF CRITEO ONETAG -->            <script type="text/javascript">
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    "event": "crto_productpage",
                    "crto": {"email":"","products":"301020427"}
                });
            </script>    <div id="ajaxlogin-login-window" style="display: none;">
        <div class="wrapper-check-customer display-width-350">

            <div class="page-title">
                <p class="ajax-logo">
                    <img src="https://d165ykedl9l7pm.cloudfront.net/media/wysiwyg/Arabian-oud-png-logo-Arabic.png" alt="" />                </p>
                <span>Please sign in </span>
            </div>
            <form  id="ajaxlogin-check-form">
                <div class="field">
                    <div class="input-box">
                        <input name="lt_email" id="lt_email" title="Email" value="" class="input-text input-lt-email required-entry validate-email" placeholder="Enter your email address" type="text" />
                    </div>
                </div>
                <div class="buttons-set">
                    <input type="button" id="button-check-account" class="button lt-button" value="Continue with Email">
                </div>
            </form>
            <script type="text/javascript">
                //<![CDATA[
                var ajaxlogincheckform = new VarienForm('"ajaxlogin-check-form', true);
                //]]>
            </script>
            <p style="padding-top: 10px;"><small>or</small></p>
            <div class="wrapper-login-social">
                <div class="clearer">
    <a href="#">
                <div id="login-by-facebook" class="facebook-social">
            <span class="fa fa-facebook"></span>
            <span class="text">Sign in with Facebook</span>
        </div>
    </a>
</div>
                            </div>
        </div>

        <div class="wrapper-customer-login">
            <div class="display-width-350">
                <div class="page-title">
                    <p class="ajax-logo">
                        <img src="https://d165ykedl9l7pm.cloudfront.net/media/wysiwyg/Arabian-oud-png-logo-Arabic.png" alt="" />                    </p>
                    <span>Almost done, just enter your password and you're in!</span>
                </div>
                <form action="#" method="post" id="ajaxlogin-login-form">
                    <input type="hidden" name="checkoutlogin" id="checkoutlogin" value="">
                    <div class="content">
                        <ul class="form-list">
                            <li class="ajaxlogin-login-email">
                                <label for="email" class="required"><em>*</em>Email Address</label>
                                <div class="input-box">
                                    <input type="text" name="login[username]" value="" id="email" class="input-text required-entry validate-email" title="Email Address" />
                                </div>
                            </li>
                            <li>
                                <label for="pass" class="required"><em>*</em>Password</label>
                                <div class="input-box">
                                    <input type="password" name="login[password]" class="input-text required-entry validate-password" id="pass" title="Password" placeholder="Enter password" />
                                </div>
                            </li>
                                                    </ul>
                    </div>
                    <div class="buttons-set">
                        <button type="button" class="button" title="Register" name="noaccount" id="noaccount"><span><span>Register</span></span></button>
                        <button type="submit" class="button" title="Login" name="send" id="send2"><span><span>Login</span></span></button>
                        <div class="progress-indicator">
                    <span class="please-wait" id="login-please-wait" style="display:none;">
                        <img src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/images/opc-ajax-loader.gif" class="v-middle" alt=""/>
                    </span>
                        </div>
                    </div>
                    <div class="ajaxlogin-link-footer clearfix">
                        <p class="back-link f-left "><a href="#" class="ajaxlogin-login-back"><i class="fa fa-angle-left" aria-hidden="true"></i>Back to Login</a></p>
                        <p class="back-link forgot-password f-right"><a href="" class="ajaxlogin-forgot">Forgot Your Password<span class="mark-ques">?</span></a></p>
                    </div>
                </form>
                <script type="text/javascript">
                    //<![CDATA[
                    var ajaxLoginForm = new VarienForm('ajaxlogin-login-form', true);
                    //]]>
                </script>
            </div>
        </div>
    </div>

    <div id="ajaxlogin-forgot-window" style="display: none;">
        <div class="display-width-350">
            <div class="page-title">
                <p class="ajax-logo">
                    <img src="https://d165ykedl9l7pm.cloudfront.net/media/wysiwyg/Arabian-oud-png-logo-Arabic.png" alt="" />                </p>
                <span>Forgot Your Password<span class="mark-ques">?</span></span>
            </div>
            <form action="#" method="post" id="ajaxlogin-forgot-password-form">

                <div class="content">
                                            <p>Please enter your email address below. You will receive a link to reset your password.</p>
                                        <ul class="form-list">
                        <li>
                            <label for="email_address_forgot" class="required"><em>*</em>Email Address</label>
                            <div class="input-box">
                                <input type="text" name="email" id="email_address_forgot" class="input-text required-entry validate-email" value="" placeholder="Email Address" />
                            </div>
                        </li>
                                            </ul>
                </div>
                <div class="buttons-set">
                    <button type="submit" title="Submit" id="btn-forgot" class="button"><span><span>Submit</span></span></button>
                    <div class="progress-indicator">
                    <span class="please-wait" id="forgot-please-wait" style="display:none;">
                        <img src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/images/opc-ajax-loader.gif" class="v-middle" alt=""/>
                    </span>
                    </div>
                                    </div>
            </form>
            <script type="text/javascript">
                //<![CDATA[
                var ajaxForgotForm = new VarienForm('ajaxlogin-forgot-password-form', true);
                //]]>
            </script>
        </div>
    </div>

    <div id="ajaxlogin-create-window" style="display: none;">
        <div class="display-width-350">
            <div class="page-title">
                <p class="ajax-logo">
                    <img src="https://d165ykedl9l7pm.cloudfront.net/media/wysiwyg/Arabian-oud-png-logo-Arabic.png" alt="" />                </p>
                <span>Personal Information</span>
            </div>
            <form action="#" method="post" id="ajaxlogin-create-form">
                <div class="fieldset">
    <input type="hidden" name="success_url" value="" />
    <input type="hidden" name="error_url" value="" />
            <input type="hidden" name="form_key" value="V88Vgz2UZpsBH4aj" />
        <h2 class="legend">Personal Information</h2>
    <ul class="form-list">
        <li class="fields">
            <div class="customer-name-middlename">
    <div class="field name-firstname">
        <label for="firstname" class="required"><em>*</em>First Name</label>
        <div class="input-box">
            <input type="text" id="firstname" name="firstname" value="" title="First Name" maxlength="255" class="input-text required-entry"  placeholder="Your First Name" />
        </div>
    </div>
    <div class="field name-lastname">
        <label for="lastname" class="required"><em>*</em>Last Name</label>
        <div class="input-box">
            <input type="text" id="lastname" name="lastname" value="" title="Last Name" maxlength="255" class="input-text required-entry"  placeholder="Your Last Name" />
        </div>
    </div>
</div>        </li>
        <li class="hidden">
            <label for="email_address" class="required"><em>*</em>Email Address</label>
            <div class="input-box">
                <input type="text" name="email" id="email_address" value="" title="Email Address" class="input-text validate-email required-entry" />
            </div>
        </li>
                    <li class="control">
                <div class="input-box">
                    <input type="checkbox" name="is_subscribed" title="Sign Up for Newsletter" value="1" id="is_subscribed" class="checkbox" />
                </div>
                <label for="is_subscribed">Sign Up for Newsletter</label>
                                            </li>
                                                            </ul>
</div>
<div class="fieldset">
    <h2 class="legend">Login Information</h2>
    <ul class="form-list">
        <li class="fields">
            <div class="field">
                <label for="password" class="required"><em>*</em>Password</label>
                <div class="input-box">
                    <input type="password" name="password" id="password" title="Password" class="input-text required-entry validate-password" placeholder="Password" />
                </div>
            </div>
            <div class="field hidden">
                <label for="confirmation" class="required"><em>*</em>Confirm Password</label>
                <div class="input-box">
                    <input type="password" name="confirmation" title="Confirm Password" id="confirmation" class="input-text required-entry validate-cpassword" />
                </div>
            </div>
        </li>
                    </ul>
    </div>
<div class="buttons-set">
    <div class="progress-indicator">
        <span class="please-wait" id="create-please-wait" style="display:none;">
            <img src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/images/opc-ajax-loader.gif" class="v-middle" alt=""/>
        </span>
    </div>
    <button type="submit" title="Create My Account" class="button" name="create" id="create"><span><span>Create My Account</span></span></button>
</div>
<script type="text/javascript">
    //<![CDATA[
        //]]>
</script><div id="window-overlay" class="window-overlay" style="display:none;"></div>
<div id="remember-me-popup" class="remember-me-popup" style="display:none;">
    <div class="remember-me-popup-head">
        <h3>What's this?</h3>
        <a href="#" class="remember-me-popup-close" title="Close">Close</a>
    </div>
    <div class="remember-me-popup-body">
        <p>Checking &quot;Remember Me&quot; will let you access your shopping cart on this computer when you are logged out</p>
        <div class="remember-me-popup-close-button a-right">
            <a href="#" class="remember-me-popup-close button" title="Close"><span>Close</span></a>
        </div>
    </div>
</div>
<script type="text/javascript">
//<![CDATA[
    function toggleRememberMepopup(event){
        if($('remember-me-popup')){
            var viewportHeight = document.viewport.getHeight(),
                docHeight      = $$('body')[0].getHeight(),
                height         = docHeight > viewportHeight ? docHeight : viewportHeight;
            $('remember-me-popup').toggle();
            $('window-overlay').setStyle({ height: height + 'px' }).toggle();
        }
        Event.stop(event);
    }

    document.observe("dom:loaded", function() {
        new Insertion.Bottom($$('body')[0], $('window-overlay'));
        new Insertion.Bottom($$('body')[0], $('remember-me-popup'));

        $$('.remember-me-popup-close').each(function(element){
            Event.observe(element, 'click', toggleRememberMepopup);
        })
        $$('#remember-me-box a').each(function(element) {
            Event.observe(element, 'click', toggleRememberMepopup);
        });
    });
//]]>
</script>

            </form>
            <script type="text/javascript">
                //<![CDATA[
                var ajaxCreateForm = new VarienForm('ajaxlogin-create-form', true);
                //]]>
            </script>

            <div class="ajaxlogin-link-footer">
                <p class="back-link f-left "><a href="#" class="ajaxlogin-login"><i class="fa fa-angle-left" aria-hidden="true"></i>Back to Login</a></p>
                <p class="back-link forgot-password f-right"><a href="" class="ajaxlogin-forgot">Forgot Your Password<span class="mark-ques">?</span></a></p>
            </div>
        </div>
    </div>


    
    


<!--<script type="text/javascript">
    document.observe("dom:loaded", function() {
        var triggers = {
            login: {
                el    : $$('.ajaxlogin-login'),
                event : 'click',
                window: $('ajaxlogin-login-window'),
                size: {
                    maxWidth: 660
                }
            },
            create: {
                el    : $$('#noaccount'),
                event : 'click',
                window: $('ajaxlogin-create-window')
            },
            forgot: {
                el    : $$('.ajaxlogin-forgot'),
                event : 'click',
                window: $('ajaxlogin-forgot-window'),
                size: {
                    maxWidth: 660
                }
            },
            logout: {
                el    : $$('.ajaxlogin-logout'),
                event : 'click',
                window: $('ajaxlogin-logout-window'),
                size: {
                    maxWidth: 660
                }
            }
        };
        ajaxLoginWindow = new AjaxLogin({
            triggers: triggers
        });
    });
</script> -->



<script type="text/javascript">

    var validEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

    jQuery('#button-check-account').click(function(){
        var lt_email=  jQuery('#lt_email').val();

        if(lt_email.match(validEmail)) {
            var formData = {
                'customeremail'        : lt_email
            };
            var url = '#';
            jQuery.ajax({
                type        : 'POST',
                url         : url,
                data        : formData,
                dataType    : 'json',
                encode      : true
            }).done(function(response) {
                if(response == 1) {
                    jQuery('.wrapper-check-customer').fadeOut();
                    jQuery('.wrapper-customer-login').delay(500).fadeIn();


                    jQuery('#ajaxlogin-login-form #email').val(lt_email);
                }
                if(response == 0) {
                    console.log('Your account not exists: '+ response);
                    jQuery('#noaccount').trigger('click');
                    jQuery('#ajaxlogin-create-window #email_address').val(lt_email);
                }
                console.log('data: '+ response);
            });
            event.preventDefault();
        } else {
            if(!jQuery('.validation-advice').length){
                jQuery('#lt_email').addClass('validation-failed');
                jQuery('#lt_email').after("<div class=\"validation-advice\" id=\"advice-required-entry-email\" style=\"\">This is a required field.</div>");
                jQuery('#lt_email').focus();
            } else {
                jQuery('#lt_email').focus();
            }
        }
    });

    jQuery(document).ready(function() {
        jQuery('#ajaxlogin-check-form').keydown(function(event){
            if(event.keyCode == 13) {
                event.preventDefault();
                jQuery('#button-check-account').trigger('click');
                return false;
            }
        });

        jQuery('.ajaxlogin-window .close').click(function(){
            recall();
            setTimeout(removemessage, 100);
        });

        jQuery('#btn-forgot').click(function(){
            var emailAddress = jQuery('#ajaxlogin-forgot-password-form input#email_address_forgot').val();
            var text = '<ul class="messages"><li class="success-msg">If there is an account associated with '+ emailAddress +' you will receive an email with a link to reset your password.</ul></li>';
            jQuery('.wrapper-check-customer').before(text);
            setTimeout(removemessage, 5000);
            recall();
        });

        function recall() {
            jQuery('.wrapper-customer-login').fadeOut();
            jQuery('.wrapper-check-customer').delay(500).fadeIn();
        }

        function removemessage() {
            jQuery('.messages').remove();
        }

        jQuery("#password").change(function(){
            jQuery("#confirmation").val(jQuery("#password").val())
        });

        jQuery('.ajaxlogin-login-back').click(function(event){
            event.preventDefault();
            recall();
            return false;
        });

        jQuery('#login-by-facebook').click(function(){
            console.log('here');
            jQuery('.inchoo-socialconnect-facebook-inner a').trigger('click');
        })

        //End
    });



</script> <script>
  fbq('track', 'ViewContent', {
    source: 'magento',
    version: "1.9.3.6",
    pluginVersion: "2.6.2",
    content_type: "product",
    content_ids: ["877"]
          , content_name: "Rose Wood, 100 ml"
                  , value: 420              , currency: "SAR"
      });
 </script>
    </div>
</div>
<script type="text/javascript">
	var $mcGoal = {'settings':{'uuid':'160334f680cb9b459566afefb','dc':'us11'}};
	(function() {
		 var sp = document.createElement('script'); sp.type = 'text/javascript'; sp.async = true; sp.defer = true;
		sp.src = ('https:' == document.location.protocol ? '#') + '/js/goal.min.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sp, s);
	})(); 
</script>




</html>


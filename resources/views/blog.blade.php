<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript">
        window.NREUM || (NREUM = {}), __nr_require = function(e, n, t) {
            function r(t) {
                if (!n[t]) {
                    var o = n[t] = {
                        exports: {}
                    };
                    e[t][0].call(o.exports, function(n) {
                        var o = e[t][1][n];
                        return r(o || n)
                    }, o, o.exports)
                }
                return n[t].exports
            }
            if ("function" == typeof __nr_require) return __nr_require;
            for (var o = 0; o < t.length; o++) r(t[o]);
            return r
        }({
            1: [function(e, n, t) {
                function r() {}

                function o(e, n, t) {
                    return function() {
                        return i(e, [c.now()].concat(u(arguments)), n ? null : this, t), n ? void 0 : this
                    }
                }
                var i = e("handle"),
                    a = e(3),
                    u = e(4),
                    f = e("ee").get("tracer"),
                    c = e("loader"),
                    s = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = s);
                var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    d = "api-",
                    l = d + "ixn-";
                a(p, function(e, n) {
                    s[n] = o(d + n, !0, "api")
                }), s.addPageAction = o(d + "addPageAction", !0), s.setCurrentRouteName = o(d + "routeName", !0), n.exports = newrelic, s.interaction = function() {
                    return (new r).get()
                };
                var m = r.prototype = {
                    createTracer: function(e, n) {
                        var t = {},
                            r = this,
                            o = "function" == typeof n;
                        return i(l + "tracer", [c.now(), e, t], r),
                            function() {
                                if (f.emit((o ? "" : "no-") + "fn-start", [c.now(), r, o], t), o) try {
                                    return n.apply(this, arguments)
                                } catch (e) {
                                    throw f.emit("fn-err", [arguments, this, e], t), e
                                } finally {
                                    f.emit("fn-end", [c.now()], t)
                                }
                            }
                    }
                };
                a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(e, n) {
                    m[n] = o(l + n)
                }), newrelic.noticeError = function(e, n) {
                    "string" == typeof e && (e = new Error(e)), i("err", [e, c.now(), !1, n])
                }
            }, {}],
            2: [function(e, n, t) {
                function r(e, n) {
                    if (!o) return !1;
                    if (e !== o) return !1;
                    if (!n) return !0;
                    if (!i) return !1;
                    for (var t = i.split("."), r = n.split("."), a = 0; a < r.length; a++)
                        if (r[a] !== t[a]) return !1;
                    return !0
                }
                var o = null,
                    i = null,
                    a = /Version\/(\S+)\s+Safari/;
                if (navigator.userAgent) {
                    var u = navigator.userAgent,
                        f = u.match(a);
                    f && u.indexOf("Chrome") === -1 && u.indexOf("Chromium") === -1 && (o = "Safari", i = f[1])
                }
                n.exports = {
                    agent: o,
                    version: i,
                    match: r
                }
            }, {}],
            3: [function(e, n, t) {
                function r(e, n) {
                    var t = [],
                        r = "",
                        i = 0;
                    for (r in e) o.call(e, r) && (t[i] = n(r, e[r]), i += 1);
                    return t
                }
                var o = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}],
            4: [function(e, n, t) {
                function r(e, n, t) {
                    n || (n = 0), "undefined" == typeof t && (t = e ? e.length : 0);
                    for (var r = -1, o = t - n || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = e[n + r];
                    return i
                }
                n.exports = r
            }, {}],
            5: [function(e, n, t) {
                n.exports = {
                    exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart
                }
            }, {}],
            ee: [function(e, n, t) {
                function r() {}

                function o(e) {
                    function n(e) {
                        return e && e instanceof r ? e : e ? f(e, u, i) : i()
                    }

                    function t(t, r, o, i) {
                        if (!d.aborted || i) {
                            e && e(t, r, o);
                            for (var a = n(o), u = v(t), f = u.length, c = 0; c < f; c++) u[c].apply(a, r);
                            var p = s[y[t]];
                            return p && p.push([b, t, r, a]), a
                        }
                    }

                    function l(e, n) {
                        h[e] = v(e).concat(n)
                    }

                    function m(e, n) {
                        var t = h[e];
                        if (t)
                            for (var r = 0; r < t.length; r++) t[r] === n && t.splice(r, 1)
                    }

                    function v(e) {
                        return h[e] || []
                    }

                    function g(e) {
                        return p[e] = p[e] || o(t)
                    }

                    function w(e, n) {
                        c(e, function(e, t) {
                            n = n || "feature", y[t] = n, n in s || (s[n] = [])
                        })
                    }
                    var h = {},
                        y = {},
                        b = {
                            on: l,
                            addEventListener: l,
                            removeEventListener: m,
                            emit: t,
                            get: g,
                            listeners: v,
                            context: n,
                            buffer: w,
                            abort: a,
                            aborted: !1
                        };
                    return b
                }

                function i() {
                    return new r
                }

                function a() {
                    (s.api || s.feature) && (d.aborted = !0, s = d.backlog = {})
                }
                var u = "nr@context",
                    f = e("gos"),
                    c = e(3),
                    s = {},
                    p = {},
                    d = n.exports = o();
                d.backlog = s
            }, {}],
            gos: [function(e, n, t) {
                function r(e, n, t) {
                    if (o.call(e, n)) return e[n];
                    var r = t();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(e, n, {
                            value: r,
                            writable: !0,
                            enumerable: !1
                        }), r
                    } catch (i) {}
                    return e[n] = r, r
                }
                var o = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}],
            handle: [function(e, n, t) {
                function r(e, n, t, r) {
                    o.buffer([e], r), o.emit(e, n, t)
                }
                var o = e("ee").get("handle");
                n.exports = r, r.ee = o
            }, {}],
            id: [function(e, n, t) {
                function r(e) {
                    var n = typeof e;
                    return !e || "object" !== n && "function" !== n ? -1 : e === window ? 0 : a(e, i, function() {
                        return o++
                    })
                }
                var o = 1,
                    i = "nr@id",
                    a = e("gos");
                n.exports = r
            }, {}],
            loader: [function(e, n, t) {
                function r() {
                    if (!E++) {
                        var e = x.info = NREUM.info,
                            n = l.getElementsByTagName("script")[0];
                        if (setTimeout(s.abort, 3e4), !(e && e.licenseKey && e.applicationID && n)) return s.abort();
                        c(y, function(n, t) {
                            e[n] || (e[n] = t)
                        }), f("mark", ["onload", a() + x.offset], null, "api");
                        var t = l.createElement("script");
                        t.src = "https://" + e.agent, n.parentNode.insertBefore(t, n)
                    }
                }

                function o() {
                    "complete" === l.readyState && i()
                }

                function i() {
                    f("mark", ["domContent", a() + x.offset], null, "api")
                }

                function a() {
                    return O.exists && performance.now ? Math.round(performance.now()) : (u = Math.max((new Date).getTime(), u)) - x.offset
                }
                var u = (new Date).getTime(),
                    f = e("handle"),
                    c = e(3),
                    s = e("ee"),
                    p = e(2),
                    d = window,
                    l = d.document,
                    m = "addEventListener",
                    v = "attachEvent",
                    g = d.XMLHttpRequest,
                    w = g && g.prototype;
                NREUM.o = {
                    ST: setTimeout,
                    SI: d.setImmediate,
                    CT: clearTimeout,
                    XHR: g,
                    REQ: d.Request,
                    EV: d.Event,
                    PR: d.Promise,
                    MO: d.MutationObserver
                };
                var h = "" + location,
                    y = {
                        beacon: "bam.nr-data.net",
                        errorBeacon: "bam.nr-data.net",
                        agent: "js-agent.newrelic.com/nr-1130.min.js"
                    },
                    b = g && w && w[m] && !/CriOS/.test(navigator.userAgent),
                    x = n.exports = {
                        offset: u,
                        now: a,
                        origin: h,
                        features: {},
                        xhrWrappable: b,
                        userAgent: p
                    };
                e(1), l[m] ? (l[m]("DOMContentLoaded", i, !1), d[m]("load", r, !1)) : (l[v]("onreadystatechange", o), d[v]("onload", r)), f("mark", ["firstbyte", u], null, "api");
                var E = 0,
                    O = e(5)
            }, {}]
        }, {}, ["loader"]);
    </script>
    <title>New Products</title>
    <meta name="description" content="العربية للعود الرائده فى عالم العطور وصناعه العود فى افريقيا والشرق الاوسط. بأكثر من ٨٠٠ فرع حول العالم فى ٣٥ دوله نقدم لك ٤٠٠ منتج من اجود ماتم ايداعه فى عالم العطور." />
    <meta name="keywords" content="العربية للعود , عطور , العود , العربيه للعود, متجر العربية للعود, متجر العربيه للعود السعودى" />
    <meta name="robots" content="NOINDEX, FOLLOW" />
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
    <link rel="stylesheet" type="text/css" href="https://d165ykedl9l7pm.cloudfront.net/media/css_secure/5b228bc0b984ddf3e47868b5bb27beb2.css" media="all" />
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
    <script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/configurableswatches/product-media.js"></script>
    <script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/configurableswatches/swatches-list.js"></script>
    <script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/ajaxwishlist/ajaxwishlist.js"></script>
    <script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
    <link rel="canonical" href="https://shop.arabianoud.com/featured.html" />
    <!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="https://d165ykedl9l7pm.cloudfront.net/media/css_secure/c664d1bee1c0b235ec53ba57e3050ea3.css" media="all" />
<![endif]-->
    <!--[if lt IE 7]>
<script type="text/javascript" src="https://d1h23s567nykje.cloudfront.net/js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/base/default/js/ie6.js"></script>
<![endif]-->

    <script type="text/javascript">
        //<![CDATA[
        Mage.Cookies.path = '/';
        Mage.Cookies.domain = '.shop.arabianoud.com';
        //]]>
    </script>

    <script type="text/javascript">
        //<![CDATA[
        optionalZipCountries = ["AF", "AX", "AL", "DZ", "AS", "AD", "AO", "AI", "AQ", "AG", "AR", "AM", "AW", "AU", "AT", "AZ", "BS", "BH", "BD", "BB", "BY", "BE", "BZ", "BJ", "BM", "BT", "BO", "BA", "BW", "BV", "BR", "IO", "VG", "BN", "BG", "BF", "BI", "KH", "CM", "CA", "CV", "KY", "CF", "TD", "CL", "CN", "CX", "CC", "CO", "KM", "CG", "CD", "CK", "CR", "CI", "HR", "CU", "CY", "CZ", "DK", "DJ", "DM", "DO", "EC", "EG", "SV", "GQ", "ER", "EE", "ET", "FK", "FO", "FJ", "FI", "FR", "GF", "PF", "TF", "GA", "GM", "GE", "DE", "GH", "GI", "GR", "GL", "GD", "GP", "GU", "GT", "GG", "GN", "GW", "GY", "HT", "HM", "HN", "HK", "HU", "IS", "IN", "ID", "IR", "IQ", "IE", "IM", "IL", "IT", "JM", "JP", "JE", "JO", "KZ", "KE", "KI", "KW", "KG", "LA", "LV", "LB", "LS", "LR", "LY", "LI", "LT", "LU", "MO", "MK", "MG", "MW", "MY", "MV", "ML", "MT", "MH", "MQ", "MR", "MU", "YT", "MX", "FM", "MD", "MC", "MN", "ME", "MS", "MA", "MZ", "MM", "NA", "NR", "NP", "NL", "AN", "NC", "NZ", "NI", "NE", "NG", "NU", "NF", "MP", "KP", "NO", "OM", "PK", "PW", "PS", "PA", "PG", "PY", "PE", "PH", "PN", "PL", "PT", "PR", "QA", "RE", "RO", "RU", "RW", "BL", "SH", "KN", "LC", "MF", "PM", "WS", "SM", "ST", "SA", "SN", "RS", "SC", "SL", "SG", "SK", "SI", "SB", "SO", "ZA", "GS", "KR", "ES", "LK", "VC", "SD", "SR", "SJ", "SZ", "SE", "CH", "SY", "TW", "TJ", "TZ", "TH", "TL", "TG", "TK", "TO", "TT", "TN", "TR", "TM", "TC", "TV", "UG", "UA", "AE", "GB", "US", "UY", "UM", "VI", "UZ", "VU", "VA", "VE", "VN", "WF", "EH", "YE", "ZM", "ZW"];
        //]]>
    </script>
    <!-- BEGIN GOOGLE UNIVERSAL ANALYTICS CODE -->
    <script type="text/javascript">
        //<![CDATA[
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');


        ga('create', 'UA-52418242-1', 'auto');

        ga('send', 'pageview');

        //]]>
    </script>
    <!-- END GOOGLE UNIVERSAL ANALYTICS CODE -->
    <script type="text/javascript" src="https://chimpstatic.com/mcjs-connected/js/users/160334f680cb9b459566afefb/1fcfe16db8456ea9e433e6e23.js"></script><!-- Facebook Ads Extension for Magento -->
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');
        fbq('init', '410601922470577', {}, {
            agent: 'exmagento-1.9.3.6-2.6.2'
        });
        fbq('track', 'PageView', {
            source: 'magento',
            version: "1.9.3.6",
            pluginVersion: "2.6.2"
        });
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=410601922470577&ev=PageView&noscript=1&a=exmagento-1.9.3.6-2.6.2" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Nosto Meta Tags -->
    <meta name="nosto-version" content="3.10.0">
    <meta name="nosto-unique-id" content="gCJzr748pge4KEYqVp7nzRD37kZDKVm78w5pPWngrDQIt2c2U5wUPYG4r1nXl58G">
    <meta name="nosto-language" content="en"><!-- Nosto Javascript Stub -->
    <script type="text/javascript">
        (function() {
            var name = "nostojs";
            window[name] = window[name] || function(cb) {
                (window[name].q = window[name].q || []).push(cb);
            };
        })();
    </script><!-- Nosto Tagging Script -->
    <script type="text/javascript" src="//connect.nosto.com/include/mvwf48c7-en" async></script>
    <!-- Nosto `add-to-cart` Script -->
    <!--suppress JSUnresolvedFunction -->
    <script type="text/javascript">
        if (typeof Nosto === "undefined") {
            var Nosto = {};
        }
        Nosto.addProductToCart = function(productId, element) {
            Nosto.trackAddToCartClick(productId, element);
            var fields = {
                "product": productId,
                "form_key": "cThdjgzRObT1SQFy"
            };
            Nosto.postAddToCartForm(fields, "https://shop.arabianoud.com/checkout/cart/add/?___store=en");
        };

        // Products must be and array of objects [{productId: "123", skuId: "321"}]
        Nosto.addMultipleProductsToCart = function(products, element) {
            var skus = [];
            products.forEach(function(product) {
                Nosto.trackAddToCartClick(product.productId, element);
                skus.push(product.skuId);
            });
            var fields = {};
            fields["product"] = skus.pop();
            fields["related_product"] = skus;
            fields["form_key"] = "cThdjgzRObT1SQFy";
            Nosto.postAddToCartForm(fields, "https://shop.arabianoud.com/checkout/cart/add/?___store=en");
        };

        // Product object must have fields productId and skuId {productId: 123, skuId: 321}
        Nosto.addSkuToCart = function(product, element, quantity) {
            quantity = quantity || 1;
            Nosto.trackAddToCartClick(product.productId, element);
            var fields = {
                "product": product.productId,
                "sku": product.skuId,
                "qty": quantity,
                "form_key": "cThdjgzRObT1SQFy"
            };
            Nosto.postAddToCartForm(fields, "https://shop.arabianoud.com/nosto/addToCart/add/?___store=en");
        };
        Nosto.resolveContextSlotId = function(element) {
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
        Nosto.trackAddToCartClick = function(productId, element) {
            if (typeof nostojs !== 'undefined' && typeof element === 'object') {
                var slotId = Nosto.resolveContextSlotId(element);
                if (slotId) {
                    nostojs(function(api) {
                        api.recommendedProductAddedToCart(productId, slotId);
                    });
                }
            }
        };
        Nosto.postAddToCartForm = function(data, url) {
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
    <script type="text/javascript">
        //<![CDATA[
        var Translator = new Translate([]);
        //]]>
    </script>
    <meta name="ahrefs-site-verification" content="4024c54bd29ac1acbdef100d4276a2102a8cfa45a46eb397d139e3da0e73a04f">
    <script src="//my.rtmark.net/p.js?f=sync&lr=1&partner=e7c7c3c36fde07866b2139296027d021154eac82b372a818097084d9af2dc7ec" defer></script>
    <noscript><img src="//my.rtmark.net/img.gif?f=sync&lr=1&partner=e7c7c3c36fde07866b2139296027d021154eac82b372a818097084d9af2dc7ec" width="1" height="1" /></noscript>


    <meta name="google-site-verification" content="google686d85e91f995b1a.html" />

    <!-- Fomo Pixel Code -->
    <script type="text/javascript" src="https://load.fomo.com/api/v1/SGJl_g7yVgIN-Dc7j_TXeg/load.js" async></script>
    <!-- Fomo Pixel Code -->

    <!-- Snap Pixel Code -->
    <script type='text/javascript'>
        (function(e, t, n) {
            if (e.snaptr) return;
            var a = e.snaptr = function() {
                a.handleRequest ? a.handleRequest.apply(a, arguments) : a.queue.push(arguments)
            };
            a.queue = [];
            var s = 'script';
            r = t.createElement(s);
            r.async = !0;
            r.src = n;
            var u = t.getElementsByTagName(s)[0];
            u.parentNode.insertBefore(r, u);
        })(window, document,
            'https://sc-static.net/scevent.min.js');

        snaptr('init', '3414ae11-60c4-464e-98fc-455c0485365d', {
            'user_email': 'Social@arabianoud.com.sa'
        });

        snaptr('track', 'PAGE_VIEW');
    </script>
    <!-- End Snap Pixel Code -->

    <!-- Pushcrew Code -->
    <script type="text/javascript">
        (function(p, u, s, h) {
            p._pcq = p._pcq || [];
            p._pcq.push(['_currentTime', Date.now()]);
            s = u.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = 'https://cdn.pushcrew.com/js/548d25a1d4f4e3121e6ffdcbc739b18a.js';
            h = u.getElementsByTagName('script')[0];
            h.parentNode.insertBefore(s, h);
        })(window, document);
    </script>




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
                $('#div_search').css('display', 'none');
                $('#top-links').css('display', 'none');
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

    <link rel="next" href="https://shop.arabianoud.com/featured.html?mode=list&amp;p=2" />
    <script type="application/ld+json">
        {
            "@context": "http:\/\/schema.org\/",
            "@type": "WebPage",
            "speakable": {
                "@type": "SpeakableSpecification",
                "cssSelector": [".category-description"],
                "xpath": ["\/html\/head\/title"]
            }
        }
    </script>
</head>

<body class=" catalog-category-view categorypath-featured-html category-featured en-version en-version">
    <div class="notranslate" style="display:none"> <span class="nosto_cart" style="display:none">
            <span class="hcid">06779838d3f223de7bfdb496a91212abe642fca2d99e5777521ab4961da11a56</span>
        </span>
    </div>
    <script type="text/javascript">
        //<![CDATA[
        if (typeof(Varien.searchForm) !== 'undefined') {
            Varien.searchForm.prototype._selectAutocompleteItem = function(element) {
                var link = element.down();
                if (link && link.tagName == 'A') {
                    setLocation(link.href);
                } else {
                    if (element.title) {
                        this.field.value = element.title;
                    }
                    this.form.submit();
                }
            };
            Varien.searchForm.prototype.initAutocomplete = function(url, destinationElement) {
                new Ajax.Autocompleter(
                    this.field,
                    destinationElement,
                    url, {
                        paramName: this.field.name,
                        method: 'get',
                        minChars: 3,
                        frequency: .1,
                        updateElement: this._selectAutocompleteItem.bind(this),
                        onShow: function(element, update) {
                            if (!update.style.position || update.style.position == 'absolute') {
                                update.style.position = 'absolute';
                                Position.clone(element, update, {
                                    setHeight: false,
                                    offsetTop: element.offsetHeight
                                });
                            }
                            Effect.Appear(update, {
                                duration: 0
                            });
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
    <div class="notranslate" style="display:none"> <span class="nosto_category" style="display:none">
            <span class="category_string">/New Products</span>
            <span class="id">8</span>
            <span class="parent_id">2</span>
            <span class="name">New Products</span>
            <span class="url">#</span>
            <span class="image_url"></span>
            <span class="visible_in_menu"></span>
            <span class="level">2</span>
        </span>
    </div>
    <div class="wrapper">
        <noscript>
            <div class="global-site-notice noscript">
                <div class="notice-inner">
                    <p>
                        <strong>JavaScript seems to be disabled in your browser.</strong><br />
                        You must have JavaScript enabled in your browser to utilize the functionality of this website. </p>
                </div>
            </div>
        </noscript>
        <div class="page">
            <div class="header-container" id="header-container">

                <div class="header container">
                    <div class="row">
                        <div class="header-logo col-sm-2 col-md-2">
                            <a href="{{ action('affiliateController@index') }}" title="Blog" class="logo"><strong>العربية للعود</strong><img src="image/logo1.png" alt="" /></a>
                        </div>
                        <div class="header-bottom col-sm-10 col-md-8">
                            <div class="main-menu visible-sm-block visible-md-block visible-lg-block">
                                <div class="nav-container">
                                    <ul id="nav">
                                        <li class="level0 nav-1 first level-top parent"><a href="#" class="level-top"><span>Perfumes</span></a>
                                            <ul class="level0">
                                                <li class="level1 nav-1-1 first"><a href="https://shop.arabianoud.com/arabian-oud-perfumes/mens-perfumes.html"><span>Men's Perfumes</span></a></li>
                                                <li class="level1 nav-1-2"><a href="#"><span>Women's Perfumes</span></a></li>
                                                <li class="level1 nav-1-3"><a href="#"><span>Unisex Collection</span></a></li>
                                                <li class="level1 nav-1-4"><a href="#"><span>Oriental Perfumes</span></a></li>
                                                <li class="level1 nav-1-5"><a href="#"><span>Western Perfumes</span></a></li>
                                                <li class="level1 nav-1-6"><a href="https://shop.arabianoud.com/arabian-oud-perfumes/oriental-western.html"><span>Oriental &amp; Western</span></a></li>
                                                <li class="level1 nav-1-7 last"><a href="https://shop.arabianoud.com/arabian-oud-perfumes/winter-perfumes.html"><span>Winter Perfumes</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="level0 nav-2 level-top parent"><a href="#" class="level-top"><span>Oud &amp; Incense</span></a>
                                            <ul class="level0">
                                                <li class="level1 nav-2-1 first"><a href="#"><span>Qatar Oud</span></a></li>
                                                <li class="level1 nav-2-2"><a href="#"><span>Arabian Ma'joon</span></a></li>
                                                <li class="level1 nav-2-3 last"><a href="#"><span>Arabian Mabthooth</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="level0 nav-3 level-top"><a href="#" class="level-top"><span>Gift Sets &amp; Accessories</span></a></li>
                                        <li class="level0 nav-4 level-top parent"><a href="#" class="level-top"><span>Oil Perfumes</span></a>
                                            <ul class="level0">
                                                <li class="level1 nav-4-1 first"><a href="#"><span>Dehn Oud</span></a></li>
                                                <li class="level1 nav-4-2"><a href="#"><span>Arabian Blends</span></a></li>
                                                <li class="level1 nav-4-3 last"><a href="#"><span>Aromatic Oils</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="level0 nav-5 level-top"><a href="#" class="level-top"><span>Exclusives</span></a></li>
                                        <li class="level0 nav-6 level-top"><a href="#" class="level-top"><span>Best Sellers</span></a></li>
                                        <li class="level0 nav-7 last level-top"><a href="#" class="level-top"><span>WOW offers</span></a></li>
                                    </ul>
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
                                <a class="f-left hidden-md hidden-lg hidden-sm off-canvas-toggle icon-toggle" href="#" data-uk-offcanvas="{target:'#menu-off-canvas'}"><i class="fa fa-bars"></i></a>
                                <a class="search-icon-mobile hidden-desktop"><img src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/images/search-icon.png" /></a>
                                <div class="hidden-xs">
                                    <ul class="links">
                                        <li><a href="#" title="My Account" class="ajaxlogin-login">My Account</a></li>
                                        <li label="My Wishlist"><a href="#" title="My Wishlist" class="fa fa-heart-o">&nbsp;</a></li>
                                        <li class="fa fa-shopping-cart top-link-cart"><a href="#" title="Shopping Cart" class="top-link-cart"><span class="cart-qty"></span></a></li>
                                        <li><a href="#" title="Log In" class="ajaxlogin-login">Log In</a></li>
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
                                                    jQuery.ajax({
                                                        url: url,
                                                        dataType: 'json',
                                                        data: {
                                                            isAjax: 1
                                                        },
                                                        success: function(data) {
                                                            jQuery(this).removeClass('ajax-loading');
                                                            if (data.status == 'ERROR') {
                                                                alert(data.message);
                                                            } else {
                                                                if (jQuery('#top_cart_sidebar')) {
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
                                <div class="store-switcher">
                                    <div class="website-switcher">
                                        <!--<label for="select-website"></label>-->
                                        <div class="btn-group" id="select-store">
                                            <button class="btn dropdown-toggle" name="recordinput" data-toggle="dropdown">
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Malaysia</a></li>
                                                <li class="selected"><a href="#">Saudi Arabia</a></li>
                                                <li><a href="#">International</a></li>
                                                <li><a href="#">Jordan</a></li>
                                                <li><a href="#">Kuwait</a></li>
                                                <li><a href="#">UAE</a></li>
                                                <li><a href="#">USA</a></li>
                                                <li><a href="#">UK</a></li>
                                                <li><a href="#">France</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="store-language">
                                    <div class="form-language">
                                        <a href="#">العربية</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="menu-off-canvas" class="uk-offcanvas">
                            <div class="uk-offcanvas-bar box-menu-mobile">
                                <div class="nav-container">
                                    <ul id="nav">
                                        <li class="level0 nav-1 first level-top parent"><a href="#" class="level-top"><span>Perfumes</span></a>
                                            <ul class="level0">
                                                <li class="level1 nav-1-1 first"><a href="#"><span>Men's Perfumes</span></a></li>
                                                <li class="level1 nav-1-2"><a href="#"><span>Women's Perfumes</span></a></li>
                                                <li class="level1 nav-1-3"><a href="#"><span>Unisex Collection</span></a></li>
                                                <li class="level1 nav-1-4"><a href="#"><span>Oriental Perfumes</span></a></li>
                                                <li class="level1 nav-1-5"><a href="#"><span>Western Perfumes</span></a></li>
                                                <li class="level1 nav-1-6"><a href="#"><span>Oriental &amp; Western</span></a></li>
                                                <li class="level1 nav-1-7 last"><a href="#"><span>Winter Perfumes</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="level0 nav-2 level-top parent"><a href="#" class="level-top"><span>Oud &amp; Incense</span></a>
                                            <ul class="level0">
                                                <li class="level1 nav-2-1 first"><a href="#"><span>Qatar oud</span></a></li>
                                                <li class="level1 nav-2-2"><a href="#"><span>Arabian Ma'joon</span></a></li>
                                                <li class="level1 nav-2-3 last"><a href="#"><span>Arabian Mabthooth</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="level0 nav-3 level-top"><a href="#" class="level-top"><span>Gift Sets &amp; Accessories</span></a></li>
                                        <li class="level0 nav-4 level-top parent"><a href="#" class="level-top"><span>Oil Perfumes</span></a>
                                            <ul class="level0">
                                                <li class="level1 nav-4-1 first"><a href="#"><span>Dehn Oud</span></a></li>
                                                <li class="level1 nav-4-2"><a href="#"><span>Arabian Blends</span></a></li>
                                                <li class="level1 nav-4-3 last"><a href="#"><span>Aromatic Oils</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="level0 nav-5 level-top"><a href="#" class="level-top"><span>Exclusives</span></a></li>
                                        <li class="level0 nav-6 level-top"><a href="#" class="level-top"><span>Best Sellers</span></a></li>
                                        <li class="level0 nav-7 last level-top"><a href="#" class="level-top"><span>WOW offers</span></a></li>
                                    </ul>
                                </div>
                                <div class="m-contact hidden"><a href="#">Contact Us</a></div>
                                <div class="m-contact country-inner">
                                    <p id="m-country"><span>Country</span><span class="group-name">Saudi Arabia<i class="fa fa-angle-right"></i></span></p>
                                    <ul id="m-lists-country">
                                        <li class="store-6"><a href="#">Malaysia</a></li>
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
                                <div class="store-language">
                                    <div class="form-language form-lang-mb">
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
                        <div class="shopping-header-breadcrumb"><span class="_current">Shopping Bag</span>&gt;<span>Place Order</span>&gt;<span>Pay</span>
                        </div>

                    </div>
                </div>
            </div>
            <script>
                window.onscroll = function() {
                    myFunction()
                };

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
                    jQuery(".search-icon-mobile").click(function() {
                        jQuery('#search_mini_form').submit();
                    });
                }
                jQuery('.needhelp .dropdown__btn').click(function() {
                    jQuery('.sub-need-help .dropdown__content').toggle();
                });
            </script>
            <div id="loader-wrapper">
                <div id="loader"></div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>

            <script type="text/javascript">
                jQuery(document).ready(function() {
                    setTimeout(function() {
                        jQuery('body').addClass('loaded');
                        //jQuery('.section-slider .item').css('opacity','1');
                    }, 3000);

                    function setShowDesc() {
                        jQuery('.special-slide-content .bg-multiphy').css('opacity', '1');
                    }

                    jQuery("#m-country").click(function() {
                        if (jQuery(this).hasClass('mc-expanded')) {
                            jQuery("#m-lists-country").slideUp("slow");
                            jQuery(this).removeClass('mc-expanded');
                        } else {
                            jQuery(this).addClass('mc-expanded');
                            jQuery("#m-lists-country").slideDown("slow");
                        }
                    });

                    jQuery("#mb-lang").click(function() {
                        if (jQuery(this).hasClass('mc-expanded')) {
                            jQuery("#m-lists-lang").slideUp("slow");
                            jQuery(this).removeClass('mc-expanded');
                        } else {
                            jQuery(this).addClass('mc-expanded');
                            jQuery("#m-lists-lang").slideDown("slow");
                        }
                    });

                    var className = '.store-' + '1';
                    jQuery(className).addClass('bold');

                });
            </script>
            <div class="main-container col2-left-layout">
                <div class="main">
                    <div class="container">

                        <div class="row">
                            <div class="breadcrumbs">
                                <ul>
                                    <li class="home">
                                        <a href="#" title="Go to Home Page">Home</a>
                                        <span>/ </span>
                                    </li>
                                    <li class="category8">
                                        <strong>New Products</strong>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-main col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="row">
                                    <div class="col-left sidebar">
                                        <div class="block block-layered-nav">
                                            <div class="block-title">
                                                <strong><span>Shop By</span></strong>
                                            </div>
                                            <div class="block-content">
                                                <p class="block-subtitle">Shopping Options</p>
                                                <dl id="narrow-by-list">
                                                    <dt>Price</dt>
                                                    <dd>
                                                        <ol>
                                                            <li>
                                                                <a href="#"><span class="price">100.00 SAR</span> - <span class="price">199.99 SAR</span></a>
                                                                (4)
                                                            </li>
                                                            <li>
                                                                <a href="#"><span class="price">200.00 SAR</span> - <span class="price">299.99 SAR</span></a>
                                                                (4)
                                                            </li>
                                                            <li>
                                                                <a href="#"><span class="price">300.00 SAR</span> - <span class="price">399.99 SAR</span></a>
                                                                (2)
                                                            </li>
                                                            <li>
                                                                <a href="#"><span class="price">400.00 SAR</span> <span class="price">and above</span></a>
                                                                (3)
                                                            </li>
                                                        </ol>
                                                    </dd>
                                                    <dt>Sizes</dt>
                                                    <dd>
                                                        <ol class="configurable-swatch-list">
                                                            <li>
                                                                <a href="#" class="">
                                                                    <span class="swatch-label">
                                                                        4*100 ml </span>

                                                                </a>
                                                                (1)
                                                            </li>
                                                            <li>
                                                                <a href="#" class="">
                                                                    <span class="swatch-label">
                                                                        95 Ml </span>

                                                                </a>
                                                                (1)
                                                            </li>
                                                            <li>
                                                                <a href="#" class="">
                                                                    <span class="swatch-label">
                                                                        75 ml </span>

                                                                </a>
                                                                (1)
                                                            </li>
                                                            <li>
                                                                <a href="#" class="">
                                                                    <span class="swatch-label">
                                                                        80 ml </span>

                                                                </a>
                                                                (2)
                                                            </li>
                                                            <li>
                                                                <a href="#" class="">
                                                                    <span class="swatch-label">
                                                                        100 ml </span>

                                                                </a>
                                                                (4)
                                                            </li>
                                                            <li>
                                                                <a href="#" class="">
                                                                    <span class="swatch-label">
                                                                        110 ml </span>

                                                                </a>
                                                                (1)
                                                            </li>
                                                        </ol>
                                                    </dd>
                                                    <dt>Fragrance</dt>
                                                    <dd>
                                                        <ol>
                                                            <li>
                                                                <a href="#">For Men</a>
                                                                (5)
                                                            </li>
                                                            <li>
                                                                <a href="#">Unisex</a>
                                                                (8)
                                                            </li>
                                                        </ol>
                                                    </dd>
                                                    <dt>Type</dt>
                                                    <dd>
                                                        <ol>
                                                            <li>
                                                                <a href="#">Gift Set</a>
                                                                (3)
                                                            </li>
                                                            <li>
                                                                <a href="#">Spray</a>
                                                                (10)
                                                            </li>
                                                        </ol>
                                                    </dd>
                                                    <dt>Origins</dt>
                                                    <dd>
                                                        <ol>
                                                            <li>
                                                                <a href="#">Mix (Oriental & Western)</a>
                                                                (3)
                                                            </li>
                                                            <li>
                                                                <a href="#">Oriental</a>
                                                                (6)
                                                            </li>
                                                            <li>
                                                                <a href="#">Western</a>
                                                                (4)
                                                            </li>
                                                        </ol>
                                                    </dd>
                                                </dl>
                                                <script type="text/javascript">
                                                    decorateDataList('narrow-by-list')
                                                </script>
                                            </div>
                                        </div>
                                        <div class="block text-center"><a href="#"> <img src="https://d165ykedl9l7pm.cloudfront.net/media/wysiwyg/musk-rose-side-banner.jpg" /> </a></div>

                                        <div class="nosto_element" id="nosto-column-left"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="column-main col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <div class="row">

                                    <div class="col-main">

                                        <div class="nosto_element" id="nosto-page-top"></div>
                                        <div class="nosto_element" id="nosto-page-category1"></div>
                                        <div class="page-title category-title hidden">
                                            <h1>New Products</h1>
                                        </div>





                                        <script type="text/javascript">
                                            // <![CDATA[
                                            function getTimer() {
                                                dt = new Date("2019/05/20 00:00:00");
                                                dt = dt.getTime();
                                                no = new Date();
                                                no = no.getTime();
                                                var end = dt;
                                                var now_date = no;
                                                var _second = 1000;
                                                var _minute = _second * 60;
                                                var _hour = _minute * 60;
                                                var _day = _hour * 24;
                                                flag_time = true;
                                                timer = '';

                                                setInterval(function() {
                                                    showRemaining();
                                                }, 1000);

                                                function showRemaining() {
                                                    var date = no;
                                                    var now = new Date(date);
                                                    var de = now.getTime();

                                                    if (flag_time) {
                                                        timer = de;
                                                    }
                                                    var d = new Date(timer);
                                                    currentYear = d.getFullYear();
                                                    month = d.getMonth() + 1;

                                                    var currentDate = d.getDate();
                                                    currentDate = currentDate < 10 ? '0' + currentDate : currentDate;

                                                    var hours = d.getHours();
                                                    var minutes = d.getMinutes();
                                                    var seconds = d.getSeconds();

                                                    minutes = minutes < 10 ? '0' + minutes : minutes;
                                                    seconds = seconds < 10 ? '0' + seconds : seconds;
                                                    var strTime = hours + ':' + minutes + ':' + seconds;
                                                    timer = timer + 1000;
                                                    var now_time = currentYear + '/' + month + '/' + currentDate + ' ' + strTime;

                                                    var now = new Date(now_time);
                                                    var distance = end - now;

                                                    if (distance < 0) {
                                                        if (distance > -3) {
                                                            location.reload(true);
                                                            return;
                                                        };

                                                        clearInterval(timer);
                                                        document.getElementById('countdown').innerHTML = 'Completed';
                                                        return;
                                                    }
                                                    var days = Math.floor(distance / _day);
                                                    var hours = Math.floor((distance % _day) / _hour);
                                                    var minutes = Math.floor((distance % _hour) / _minute);
                                                    var seconds = Math.floor((distance % _minute) / _second);
                                                    if (days < 10) {
                                                        days = '0' + days;
                                                    }
                                                    if (hours < 10) {
                                                        hours = '0' + hours;
                                                    }
                                                    if (minutes < 10) {
                                                        minutes = '0' + minutes;
                                                    }
                                                    if (seconds < 10) {
                                                        seconds = '0' + seconds;
                                                    }

                                                    if (days == 00) {
                                                        dytext = '';
                                                    } else if (days == 1) {

                                                        dytext = '<span class="countdown-text">' + days + ' يوم  </span>';

                                                    } else if (days == 2) {

                                                        dytext = '<span class="countdown-text">يومان  </span>';

                                                    } else {

                                                        dytext = '<span class="countdown-text" id="days">' + days + ' ايام  </span>';

                                                    }


                                                    hours = parseFloat(hours) + parseFloat(days) * 24;
                                                    hrtext = '<span class="countdown-text" id="timer">' + hours + '</span>' + ":";


                                                    if (minutes == 00) {
                                                        mintext = '';
                                                    } else {
                                                        mintext = '<span class="countdown-text" id="timer">' + minutes + '</span>' + ":";
                                                    }

                                                    sectext = '<span class="countdown-text" id="timer">' + seconds + '</span>';
                                                    document.getElementById('countdown').innerHTML = hrtext + mintext + sectext;
                                                    flag_time = false;
                                                }
                                            }
                                            // ]]>
                                        </script>

                                        <style type="text/css" dir="rtl">
                                            #countdown {


                                                font-size: 25px;
                                            }

                                            #days {
                                                direction: ltr;
                                                display: block;
                                                padding-bottom: 10px;
                                            }

                                            #timer {

                                                font-size: 30px;
                                                padding: 2px 5px 2px 5px;
                                                color: #EED183;
                                                border: 1px dashed #EED183;
                                                background-color: #545454;
                                                white-space: nowrap;
                                            }

                                            #dbanner {
                                                background-image: url("https://dev95.arabianoud.com/skin/frontend/arabianoud/default/images/timerbanner.png");
                                                bottom: 0px;
                                                height: auto;
                                                width: 100%;
                                                padding: 30px 0 30px 0;
                                                color: #fff;
                                                text-align: center;
                                                font-family: "Open Sans";

                                            }

                                            .dcontent {
                                                padding: 0px 30px 10px 30px;
                                                font-size: 16px;
                                            }

                                            .dcontent strong {
                                                font-size: 20px;
                                                color: #bf9b45;
                                                white-space: nowrap;
                                                font-family: 'Ali';
                                            }

                                            .dcontent code {
                                                font-size: 30px;
                                                padding: 2px 5px 2px 5px;
                                                color: #EED183;
                                                border: 1px dashed #EED183;
                                                background-color: #0C3D4C;
                                                white-space: nowrap;
                                            }

                                            .dtime {
                                                font-size: 30px;
                                                background-color: #FF2A2A;
                                                padding: 0 10px 0 10px;
                                                white-space: nowrap;
                                            }


                                            .change-color {
                                                background-color: #1b1b1b;
                                                color: #FFF;
                                                text-align: center;
                                                animation-name: homeCycle;
                                                animation-duration: 6s;
                                                animation-direction: alternate;
                                                animation-iteration-count: infinite;
                                                -webkit-animation-name: homeCycle;
                                                -webkit-animation-duration: 6s;
                                                -webkit-animation-direction: alternate;
                                                -webkit-animation-iteration-count: infinite;
                                            }

                                            @keyframes homeCycle {
                                                0% {
                                                    background-color: #8e744c;
                                                }

                                            }

                                            @-webkit-keyframes homeCycle {
                                                0% {
                                                    background-color: #8e744c;
                                                }

                                            }
                                        </style>





                                        <div class="category-products">


                                            <div class="toolbar">
                                                <div class="pager">
                                                    <p class="amount">
                                                        1 - 10 of 13 items </p>

                                                    <div class="limiter">
                                                        <label>Show</label>
                                                        <select onchange="setLocation(this.value)">
                                                            <option value="#">
                                                                5 </option>
                                                            <option value="#" selected="selected">
                                                                10 </option>
                                                            <option value="#">
                                                                15 </option>
                                                            <option value="#">
                                                                20 </option>
                                                            <option value="#">
                                                                25 </option>
                                                        </select> per page </div>





                                                    <div class="pages">
                                                        <strong>Page:</strong>
                                                        <ol>



                                                            <li class="current">1</li>
                                                            <li><a href="#">2</a></li>




                                                            <li>
                                                                <a class="next i-next" href="#" title="Next">
                                                                    <img src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/images/pager_arrow_right.gif" alt="Next" class="v-middle" />
                                                                </a>
                                                            </li>
                                                        </ol>

                                                    </div>



                                                </div>

                                                <div class="sorter">
                                                    <p class="view-mode">
                                                        <label>View as:</label>
                                                        <a href="#" title="Grid" class="grid">Grid</a>&nbsp;
                                                        <strong title="List" class="list">List</strong>&nbsp;
                                                    </p>

                                                    <div class="sort-by">
                                                        <label>Sort By</label>
                                                        <select onchange="setLocation(this.value)">
                                                            <option value="#" selected="selected">
                                                                Position </option>
                                                            <option value="#">
                                                                Name </option>
                                                            <option value="#">
                                                                Price </option>
                                                            <option value="#">
                                                                Sizes </option>
                                                            <option value="#">
                                                                Fragrance </option>
                                                            <option value="#">
                                                                Type </option>
                                                            <option value="#">
                                                                Origins </option>
                                                        </select>
                                                        <a href="#" title="Set Descending Direction"><img src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/images/i_asc_arrow.gif" alt="Set Descending Direction" class="v-middle" /></a>
                                                    </div>
                                                </div>
                                            </div>


                                            <ol class="products-list" id="products-list">
                                                @foreach($data as $data)
                                                <li class=" item">
                                                    <div class="row">
                                                        <div class=" col-sm-4 col-md-4 col-sms-6 col-smb-12">
                                                            <div class="box-images">
                                                                <div class="imageslider">
                                                                    <a href="#" title="Kairouan censer" class="product-image"><img src="https://d165ykedl9l7pm.cloudfront.net/media/catalog/product/cache/1/small_image/232x232/9df78eab33525d08d6e5fb8d27136e95/_/-/_-1.jpg" width="232" height="232" alt="Kairouan censer" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-shop col-sm-8 col-md-8 col-sms-6 col-smb-12">
                                                            <div class="f-fix">
                                                                <h3 >{{$data -> name}} </h3>
                                        

                                                                <div class="desc std">
                                                                    {{$data -> description}} 
                                                                </div>

                                                                <div class="actions">
                                                                    <ul class="add-to-links ">
                                                                    
                                                                        <li><a href="{{URL::route('blog_view',$data->id)}}" title=" blog" class="link-learn"><button type="button" class="button btn-cart" ><span><span>Learn more</span></span></button></a></li>
                                                                        <span id='ajax_loader1366' style='display:none'><img src='https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/images/opc-ajax-loader.gif' /></span>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ol>
                                            <script type="text/javascript">
                                                decorateList('products-list', 'none-recursive')
                                            </script>

                                            <div id="modal" class="modal">
                                                <div class="modal-content">
                                                    <a href="#" class="btn_close"><img src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/base/default/css/imedia/images/pop-up-close.png" /></a>
                                                    <div class="main-content"></div>
                                                </div>
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="toolbar-bottom">
                                                <div class="toolbar">
                                                    <div class="pager">
                                                        <p class="amount">
                                                            1 - 10 of 13 items </p>

                                                        <div class="limiter">
                                                            <label>Show</label>
                                                            <select onchange="setLocation(this.value)">
                                                                <option value="https://shop.arabianoud.com/featured.html?limit=5&amp;mode=list">
                                                                    5 </option>
                                                                <option value="https://shop.arabianoud.com/featured.html?limit=10&amp;mode=list" selected="selected">
                                                                    10 </option>
                                                                <option value="https://shop.arabianoud.com/featured.html?limit=15&amp;mode=list">
                                                                    15 </option>
                                                                <option value="https://shop.arabianoud.com/featured.html?limit=20&amp;mode=list">
                                                                    20 </option>
                                                                <option value="https://shop.arabianoud.com/featured.html?limit=25&amp;mode=list">
                                                                    25 </option>
                                                            </select> per page </div>





                                                        <div class="pages">
                                                            <strong>Page:</strong>
                                                            <ol>



                                                                <li class="current">1</li>
                                                                <li><a href="#">2</a></li>




                                                                <li>
                                                                    <a class="next i-next" href="#" title="Next">
                                                                        <img src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/images/pager_arrow_right.gif" alt="Next" class="v-middle" />
                                                                    </a>
                                                                </li>
                                                            </ol>

                                                        </div>



                                                    </div>

                                                    <div class="sorter">
                                                        <p class="view-mode">
                                                            <label>View as:</label>
                                                            <a href="#" title="Grid" class="grid">Grid</a>&nbsp;
                                                            <strong title="List" class="list">List</strong>&nbsp;
                                                        </p>

                                                        <div class="sort-by">
                                                            <label>Sort By</label>
                                                            <select onchange="setLocation(this.value)">
                                                                <option value="#" selected="selected">
                                                                    Position </option>
                                                                <option value="#">
                                                                    Name </option>
                                                                <option value="#">
                                                                    Price </option>
                                                                <option value="#">
                                                                    Sizes </option>
                                                                <option value="#">
                                                                    Fragrance </option>
                                                                <option value="#">
                                                                    Type </option>
                                                                <option value="#">
                                                                    Origins </option>
                                                            </select>
                                                            <a href="#" title="Set Descending Direction"><img src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/images/i_asc_arrow.gif" alt="Set Descending Direction" class="v-middle" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            function setAjaxData(data, iframe) {
                                                if (data.status == 'ERROR') {
                                                    alert(data.message);
                                                } else {
                                                    if (jQuery('#top_cart_sidebar')) {
                                                        jQuery('#top_cart_sidebar').html(data.sidebar);
                                                        jQuery('.cart-qty').html(data.qty);
                                                        jQuery('#top_cart_sidebar').slideDown();
                                                        jQuery(window).scrollTop(0);
                                                    }
                                                    jQuery.fancybox.close();
                                                }
                                            }

                                            function setLocationAjax(url, id) {
                                                if (url.indexOf("checkout/cart") < 0) {
                                                    window.location.href = url;
                                                }
                                                url = url.replace("checkout/cart", "ajax/index");
                                                jQuery('#ajax_loader' + id).show();
                                                try {
                                                    jQuery.ajax({
                                                        url: url,
                                                        dataType: 'json',
                                                        data: {
                                                            isAjax: 1
                                                        },
                                                        success: function(data) {
                                                            jQuery('#ajax_loader' + id).hide();
                                                            setAjaxData(data, false);
                                                        }
                                                    });
                                                } catch (e) {}
                                            }

                                            jQuery(document).ready(function() {
                                                jQuery(".quickview").fancybox({
                                                    width: 700,
                                                    height: 600,
                                                    fitToView: false,
                                                    closeClick: false,
                                                    openEffect: 'fade',
                                                    closeEffect: 'fade',
                                                    autoSize: false
                                                });

                                                jQuery(window).on('load', function() {
                                                    var winWidth = jQuery(window).width();
                                                    if (winWidth > '767') {
                                                        if (jQuery('.products-grid .item-inner ul.add-to-links').length) {
                                                            var maxHeight = -1;
                                                            jQuery('div.item-inner').each(function() {
                                                                if (jQuery(this).height() > maxHeight) {
                                                                    maxHeight = jQuery(this).height();
                                                                }
                                                            });
                                                            jQuery('div.item-inner').delay(2000).height(maxHeight);

                                                            var maxHeight = -1;

                                                            jQuery('h2.product-name').each(function() {
                                                                if (jQuery(this).height() > maxHeight) {
                                                                    maxHeight = jQuery(this).height();
                                                                }
                                                            });
                                                            jQuery('h2.product-name').delay(2000).height(maxHeight);
                                                        }
                                                    }
                                                });

                                            });
                                        </script>
                                        <style>
                                            .fancybox-lock .fancybox-overlay {
                                                overflow: hidden !important;
                                            }
                                        </style>
                                        <div class="nosto_element" id="nosto-page-category2"></div>
                                        <div class="notranslate" style="display:none"> <span class="nosto_page_type" style="display:none">category</span>
                                        </div>
                                        <div class="nosto_element" id="nosto-page-footer"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-container hidden-xs">
                <div class="rowshipment">
                    <div class="columnshipment">
                        <img src="https://shop.arabianoud.com/skin/frontend/arabianoud/default/images/fastship.png" alt="" style="width:100%">
                    </div>
                    <div class="columnshipment">
                        <img src="https://shop.arabianoud.com/skin/frontend/arabianoud/default/images/securepay.png" alt="" style="width:100%">
                    </div>
                    <div class="columnshipment">
                        <img src="https://shop.arabianoud.com/skin/frontend/arabianoud/default/images/cod.png" alt="" style="width:100%">
                    </div>
                    <div class="columnshipment">
                        <img src="https://shop.arabianoud.com/skin/frontend/arabianoud/default/images/easyreturn.png" alt="" style="width:100%">
                    </div>
                </div>

                <div class="footer-1-wrapper hidden-xs">
                    <div class="footer-1-inner">
                        <!-- Footer 1 -->
                        <div class="footer-1">
                            <!-- Sign Up for Newsletter -->
                            <div class="block block-subscribe row">
                                <form action="https://shop.arabianoud.com/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
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



                            <div class="fcol col-xs-12 col-md-3 col-sm-3">
                                <div class="clearfix">
                                    <img alt="" src="image/logo.png" width="80%" />
                                </div>
                            </div>
                            <div class="fcol col-xs-6 col-md-3 col-sm-3">
                                <div class="clearfix">
                                    <span class="fcol-title">Qatar oud</span>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Contact Us</a></li>

                                        <li><a href="#" target="_self">How To Order</a></li>
                                    </ul>
                                </div>
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

                                    </ul>
                                </div>
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
                            <p><a href="#">InworthIT@gmail.com</a></p>
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

                </div>
                <div class="containerfooter">
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
                        <a href="#">
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
            </div> <!-- CRITEO ONETAG MAGENTO EXTENSION VERSION 1.6.4 -->
            <!-- START OF CRITEO ONETAG -->
            <script type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async="true"></script>
            <script type="text/javascript">
                var deviceType = (window.innerWidth <= 767) ? 'm' : (window.innerWidth >= 980) ? 'd' : 't';
                window.criteo_q = window.criteo_q || [];
                window.criteo_q.push({
                    "event": "setSiteType",
                    "type": deviceType,
                    "ecpplugin": "magento-1.6.4"
                });
                window.criteo_q.push({
                    "event": "setAccount",
                    "account": "28944"
                }, {
                    "event": "setEmail",
                    "email": ""
                }, {
                    "event": "viewList",
                    "item": ["401020038", "401010271", "301020467"]
                });
            </script>
            <!-- END OF CRITEO ONETAG -->
            <script type="text/javascript">
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    "event": "crto_listingpage",
                    "crto": {
                        "email": "",
                        "products": ["401020038", "401010271", "301020467"]
                    }
                });
            </script>
            <div id="ajaxlogin-login-window" style="display: none;">
                <div class="wrapper-check-customer display-width-350">

                    <div class="page-title">
                        <p class="ajax-logo">
                            <img src="https://d165ykedl9l7pm.cloudfront.net/media/wysiwyg/Arabian-oud-png-logo-Arabic.png" alt="" /> </p>
                        <span>Please sign in </span>
                    </div>
                    <form id="ajaxlogin-check-form">
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
                                <img src="https://d165ykedl9l7pm.cloudfront.net/media/wysiwyg/Arabian-oud-png-logo-Arabic.png" alt="" /> </p>
                            <span>Almost done, just enter your password and you're in!</span>
                        </div>
                        <form action="https://shop.arabianoud.com/ajaxlogin/index/login/" method="post" id="ajaxlogin-login-form">
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
                                        <img src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/images/opc-ajax-loader.gif" class="v-middle" alt="" />
                                    </span>
                                </div>
                            </div>
                            <div class="ajaxlogin-link-footer clearfix">
                                <p class="back-link f-left "><a href="#" class="ajaxlogin-login-back"><i class="fa fa-angle-left" aria-hidden="true"></i>Back to Login</a></p>
                                <p class="back-link forgot-password f-right"><a href="#" class="ajaxlogin-forgot">Forgot Your Password<span class="mark-ques">?</span></a></p>
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
                            <img src="https://d165ykedl9l7pm.cloudfront.net/media/wysiwyg/Arabian-oud-png-logo-Arabic.png" alt="" /> </p>
                        <span>Forgot Your Password<span class="mark-ques">?</span></span>
                    </div>
                    <form action="https://shop.arabianoud.com/ajaxlogin/index/forgotpassword/" method="post" id="ajaxlogin-forgot-password-form">

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
                                    <img src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/images/opc-ajax-loader.gif" class="v-middle" alt="" />
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
                            <img src="https://d165ykedl9l7pm.cloudfront.net/media/wysiwyg/Arabian-oud-png-logo-Arabic.png" alt="" /> </p>
                        <span>Personal Information</span>
                    </div>
                    <form action="https://shop.arabianoud.com/ajaxlogin/index/create/" method="post" id="ajaxlogin-create-form">
                        <div class="fieldset">
                            <input type="hidden" name="success_url" value="" />
                            <input type="hidden" name="error_url" value="" />
                            <input type="hidden" name="form_key" value="tysxiEUMRyEv7BsN" />
                            <h2 class="legend">Personal Information</h2>
                            <ul class="form-list">
                                <li class="fields">
                                    <div class="customer-name-middlename">
                                        <div class="field name-firstname">
                                            <label for="firstname" class="required"><em>*</em>First Name</label>
                                            <div class="input-box">
                                                <input type="text" id="firstname" name="firstname" value="" title="First Name" maxlength="255" class="input-text required-entry" placeholder="Your First Name" />
                                            </div>
                                        </div>
                                        <div class="field name-lastname">
                                            <label for="lastname" class="required"><em>*</em>Last Name</label>
                                            <div class="input-box">
                                                <input type="text" id="lastname" name="lastname" value="" title="Last Name" maxlength="255" class="input-text required-entry" placeholder="Your Last Name" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
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
                                    <img src="https://d3tdoo2h4fu36q.cloudfront.net/skin/frontend/arabianoud/default/images/opc-ajax-loader.gif" class="v-middle" alt="" />
                                </span>
                            </div>
                            <button type="submit" title="Create My Account" class="button" name="create" id="create"><span><span>Create My Account</span></span></button>
                        </div>
                        <script type="text/javascript">
                            //<![CDATA[
                            //]]>
                        </script>
                        <div id="window-overlay" class="window-overlay" style="display:none;"></div>
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
                            function toggleRememberMepopup(event) {
                                if ($('remember-me-popup')) {
                                    var viewportHeight = document.viewport.getHeight(),
                                        docHeight = $$('body')[0].getHeight(),
                                        height = docHeight > viewportHeight ? docHeight : viewportHeight;
                                    $('remember-me-popup').toggle();
                                    $('window-overlay').setStyle({
                                        height: height + 'px'
                                    }).toggle();
                                }
                                Event.stop(event);
                            }

                            document.observe("dom:loaded", function() {
                                new Insertion.Bottom($$('body')[0], $('window-overlay'));
                                new Insertion.Bottom($$('body')[0], $('remember-me-popup'));

                                $$('.remember-me-popup-close').each(function(element) {
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

                jQuery('#button-check-account').click(function() {
                    var lt_email = jQuery('#lt_email').val();

                    if (lt_email.match(validEmail)) {
                        var formData = {
                            'customeremail': lt_email
                        };
                        var url = 'https://shop.arabianoud.com//checkcustomer/index/index';
                        jQuery.ajax({
                            type: 'POST',
                            url: url,
                            data: formData,
                            dataType: 'json',
                            encode: true
                        }).done(function(response) {
                            if (response == 1) {
                                jQuery('.wrapper-check-customer').fadeOut();
                                jQuery('.wrapper-customer-login').delay(500).fadeIn();


                                jQuery('#ajaxlogin-login-form #email').val(lt_email);
                            }
                            if (response == 0) {
                                console.log('Your account not exists: ' + response);
                                jQuery('#noaccount').trigger('click');
                                jQuery('#ajaxlogin-create-window #email_address').val(lt_email);
                            }
                            console.log('data: ' + response);
                        });
                        event.preventDefault();
                    } else {
                        if (!jQuery('.validation-advice').length) {
                            jQuery('#lt_email').addClass('validation-failed');
                            jQuery('#lt_email').after("<div class=\"validation-advice\" id=\"advice-required-entry-email\" style=\"\">This is a required field.</div>");
                            jQuery('#lt_email').focus();
                        } else {
                            jQuery('#lt_email').focus();
                        }
                    }
                });

                jQuery(document).ready(function() {
                    jQuery('#ajaxlogin-check-form').keydown(function(event) {
                        if (event.keyCode == 13) {
                            event.preventDefault();
                            jQuery('#button-check-account').trigger('click');
                            return false;
                        }
                    });

                    jQuery('.ajaxlogin-window .close').click(function() {
                        recall();
                        setTimeout(removemessage, 100);
                    });

                    jQuery('#btn-forgot').click(function() {
                        var emailAddress = jQuery('#ajaxlogin-forgot-password-form input#email_address_forgot').val();
                        var text = '<ul class="messages"><li class="success-msg">If there is an account associated with ' + emailAddress + ' you will receive an email with a link to reset your password.</ul></li>';
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

                    jQuery("#password").change(function() {
                        jQuery("#confirmation").val(jQuery("#password").val())
                    });

                    jQuery('.ajaxlogin-login-back').click(function(event) {
                        event.preventDefault();
                        recall();
                        return false;
                    });

                    jQuery('#login-by-facebook').click(function() {
                        console.log('here');
                        jQuery('.inchoo-socialconnect-facebook-inner a').trigger('click');
                    })

                    //End
                });
            </script>
            <script>
                fbq('trackCustom', 'ViewCategory', {
                    source: 'magento',
                    version: "1.9.3.6",
                    pluginVersion: "2.6.2",
                    content_category: "New Products"
                });
            </script>
        </div>
    </div>
    <script type="text/javascript">
        var $mcGoal = {
            'settings': {
                'uuid': '160334f680cb9b459566afefb',
                'dc': 'us11'
            }
        };
        (function() {
            var sp = document.createElement('script');
            sp.type = 'text/javascript';
            sp.async = true;
            sp.defer = true;
            sp.src = ('https:' == document.location.protocol ? 'https://s3.amazonaws.com/downloads.mailchimp.com' : 'http://downloads.mailchimp.com') + '/js/goal.min.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(sp, s);
        })();
    </script>


    <script>
        jQuery(window).load(function() {
            // run code
            jQuery('.cdw-chat-popup-white-label').attr('style', 'display: none !important');
        });

        jQuery("body").mousemove(function() {
            jQuery('.cdw-chat-popup-white-label').attr('style', 'display: none !important');
        });
        jQuery("body").mouseover(function() {
            jQuery('.cdw-chat-popup-white-label').attr('style', 'display: none !important');
        });
    </script>

    <!-- Start of arabianoude Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=9cb4cdf0-475b-45df-8d8e-bd5979dddcc9"> </script>
    <!-- End of arabianoude Zendesk Widget script -->
    <script type="text/javascript">
        window.NREUM || (NREUM = {});
        NREUM.info = {
            "beacon": "bam.nr-data.net",
            "licenseKey": "41b3fd4cbe",
            "applicationID": "128513495",
            "transactionName": "Y1BUMEcCDRBTVBFaCloadwdBCgwNHVQERwRYWlFLVgIXBlVYF0pKQlxTEw==",
            "queueTime": 0,
            "applicationTime": 551,
            "atts": "TxdXRg8YHh4=",
            "errorBeacon": "bam.nr-data.net",
            "agent": ""
        }
    </script>
</body>

</html>
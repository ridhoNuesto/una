<?php $mixedData=array (
  'sys_install_time' => '1509678951',
  'sys_ftp_login' => '',
  'sys_ftp_password' => '',
  'sys_ftp_dir' => '',
  'sys_template_cache_image_enable' => '',
  'sys_template_cache_image_max_size' => '5',
  'sys_email_confirmation' => 'on',
  'sys_email_attachable_email_templates' => 'bx_timeline_send',
  'sys_redirect_after_account_added' => 'page.php?i=account-profile-switcher',
  'sys_editor_default' => 'sys_tinymce',
  'sys_captcha_default' => 'sys_recaptcha',
  'sys_live_updates_interval' => '10000',
  'site_email_html_template_header' => '<html>
    <head></head>
    <body bgcolor="#eee" style="margin:0; padding:0;">
        <div style="padding:20px; background-color:#eee;">
            <table width="600" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr><td valign="top">
                    <div style="color:#333; padding:20px; border:1px solid #999; background-color:#fff; font:14px Helvetica, Arial, sans-serif;">
                        <div style="border-bottom:2px solid #eee; padding-bottom:10px; margin-bottom:20px; font-weight:bold; font-size:22px; color:#999;">{site_name}</div>',
  'site_email_html_template_footer' => '
                    </div>
                </td></tr>
                <tr><td valign="top">
                    <div style="margin-top:5px; text-align:center; color:#999; font:11px Helvetica, Arial, sans-serif;">{about_us}&nbsp;&nbsp;&nbsp;{unsubscribe}</div>
                </td></tr>
            </table>
        </div>
    </body>
</html>',
  'sys_site_logo' => '0',
  'sys_site_logo_alt' => '0',
  'sys_site_icon' => '0',
  'sys_site_logo_width' => '240',
  'sys_site_logo_height' => '48',
  'sys_site_splash_code' => '<style>
    /*--- General ---*/
  
    @media (max-width:1024px) {
        #bx-footer-wrapper,
        #bx-menu-main-bar-wrapper,
        #bx-toolbar {
            display:none;
        }
        html #bx-content-wrapper {
            border:none;
            padding-bottom:0;
        }
    }

    #bx-content-wrapper {
        padding-top: 0px;
        padding-bottom: 4rem;
    }

    .bx-page-wrapper,
    #bx-content-container,
    #bx-content-main {
        width: 100%;
        margin: 0px;
        padding: 0px;
    }

    /*--- Splash ---*/

    .bx-splash {
        position: relative;
    }

    .bx-spl-preload {
        position: absolute;

        top: 0px;
        left: 0px;
        width: 1px;
        height: 1px;

        overflow: hidden;
    }

    .bx-spl-slide {
        position: relative;
        display: block;

        overflow: hidden;
    }

    .bx-spl-bg {
        position: relative;

        width: 100%;
        height: 100%;
    }

    .bx-spl-container {
        position: relative;

        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
    }

    .bx-spl-content {
        position: relative;
        width:100%;
    }

    .bx-spl-slide .bx-spl-content h1 {
        font-size: 2.25rem;
    }

    .bx-spl-slide .bx-spl-content h3 {
        font-size: 1.5rem;
    }

    .bx-spl-white-text-all * {
        color: #fff;
    }

    /*--- Join button ---*/

    .bx-spl-join,
    .bx-spl-join {
        display: inline-block;
        border-color: #fff;
    }
    .bx-spl-join a,
    .bx-spl-join a {
        display: block;
        padding-left: 3.75rem;
        padding-right: 3.75rem;
        text-decoration: none;
    }

    /*--- Slides ---*/

    #bx-spl-slide01 .bx-spl-container,
    #bx-spl-slide03 .bx-spl-container {
        position: absolute;
        display: -webkit-flex;
        display: flex;
        -webkit-align-items: center;
        align-items: center;
    }
    #bx-spl-slide01 .bx-spl-content,
    #bx-spl-slide03 .bx-spl-content {
        text-align: center;
        text-shadow: 0px 0px 0.25rem #000;
    }
    #bx-spl-slide02 .bx-spl-content h3,
    #bx-spl-slide04 .bx-spl-content h3 {
        text-align: center;
    }

    /*--- Slide 1 ---*/

    #bx-spl-slide01 {
        width:100%;
        height:100vh;
    }
    #bx-spl-slide01 .bx-spl-bg {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    #bx-spl-slide01 .bx-spl-slide-video {
        object-fit: cover;

        width: 100%;
        height: 100vh;
    }

    /*--- Slide 2 ---*/

    #bx-spl-slide02 .bx-spl-bg {
        background-color: #fff;
        height: 35vw;
        max-height:400px;
    }
    #bx-spl-slide02 .bx-spl-image {
        position: absolute;
        width: 60%;
        height: 100%;
        background-position: center bottom;
        background-repeat: no-repeat;
        background-size: contain;
    }
    #bx-spl-slide02 .bx-spl-content {
        position: absolute;
        display: -webkit-flex;
        -webkit-align-items: center;
        -webkit-justify-content: center;
        display: flex;
        align-items: center;
        justify-content: center;

        top: 0px;
        right: 0px;
        width: 40%;
        height: 100%;
    }
    @media (max-width:720px) {
        #bx-spl-slide02.bx-spl-slide .bx-spl-content h3 {
            font-size: 0.8rem;
        }
    }

    /*--- Slide 3 ---*/

    #bx-spl-slide03 {
        width:100%;
        height:150vh;
    }
    #bx-spl-slide03 .bx-spl-bg {
        background-position: center center;
        background-repeat: repeat;
        background-attachment: fixed;
        background-size:100%;
    }

    /*--- Slide 4 ---*/

    #bx-spl-slide04 {
        width:100%;
        height:100vh;
    }
    #bx-spl-slide04 .bx-spl-bg {
        background-color:#fff;
    }
    #bx-spl-slide04 .bx-spl-container {
        display: -webkit-flex;
        -webkit-align-items: center;
        -webkit-justify-content: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #bx-spl-slide04 .bx-spl-content {
        width: 50%;
    }
    @media (max-width:720px) {
        #bx-spl-slide04 .bx-spl-content {
            width: 90%;
        }
    }
    #bx-spl-slide04 .bx-spl-content h3 {
        margin-top: 0px;
        margin-bottom: 2rem;
    }
</style>
<div id="skrollr-body" class="bx-splash bx-def-color-bg-page">
	<div id="bx-spl-preload" class="bx-spl-preload">
		<img src="<bx_image_url:cover01.jpg />">
		<img src="<bx_image_url:cover02.jpg />">
		<img src="<bx_image_url:cover03.jpg />">
	</div>

	<div id="bx-spl-slide01" class="bx-spl-slide">
		<div class="bx-spl-bg" style="background-image:url(<bx_image_url:cover01.jpg />);">
			<video class="bx-spl-slide-video bx-def-media-phone-hide bx-def-media-tablet-hide" poster="<bx_image_url:cover01.jpg />" loop autoplay muted>
				<source src="<bx_image_url:cover01.mp4 />" type="video/mp4">
				<source src="<bx_image_url:cover01.webm />" type="video/webm">
			</video>
		</div>
		<div class="bx-spl-container">
			<div class="bx-spl-content bx-spl-white-text-all" data-anchor-target="#bx-spl-slide01 .bx-spl-bg" data-top="opacity:1" data-top-center="opacity:0">
				<h1 class="bx-def-font-semibold"><bx_text:_sys_txt_splash_slide01_title /></h1>
				<h3 class="bx-def-font-normal"><bx_text:_sys_txt_splash_slide01_desc /></h3>
				<div class="bx-spl-join bx-def-margin-topbottom bx-def-border bx-def-round-corners">
					<a class="bx-def-padding-sec-topbottom bx-def-font-h3 bx-def-font-normal" href="__join_link__"><bx_text:_sys_txt_splash_btn_join /></a>
				</div>
			</div>
		</div>
	</div>

	<div id="bx-spl-slide02" class="bx-spl-slide">
		<div class="bx-spl-bg">
			<div class="bx-spl-container">
				<div class="bx-spl-image" style="background-image:url(<bx_image_url:cover02.jpg />);" data-bottom-top="bottom:-100%;" data-100-center-center="bottom:0%;"></div>
				<div class="bx-spl-content" data-bottom-top="right:-50%;" data-100-center-center="right:0%;">
					<h3 class="bx-def-font-normal"><bx_text:_sys_txt_splash_slide02_txt /></h3>
				</div>
			</div>
		</div>
	</div>

	<div id="bx-spl-slide03" class="bx-spl-slide">
		<div class="bx-spl-bg" style="background-image:url(<bx_image_url:cover03.jpg />)"></div>
		<div class="bx-spl-container">
			<div class="bx-spl-content bx-spl-white-text-all">
				<h3 class="bx-def-font-normal"><bx_text:_sys_txt_splash_slide03_txt /></h3>
				<div class="bx-spl-join bx-def-margin-topbottom bx-def-border bx-def-round-corners">
					<a class="bx-def-padding-sec-topbottom bx-def-font-h3 bx-def-font-normal" href="__join_link__"><bx_text:_sys_txt_splash_btn_join /></a>
				</div>
			</div>
		</div>
	</div>
	<div id="bx-spl-slide04" class="bx-spl-slide">
		<div class="bx-spl-bg">
            <div class="bx-spl-container" data-anchor-target="#bx-spl-slide03 .bx-spl-bg" data-100-center-bottom="opacity:0; transform:scale(0.7,0.7);" data-200-end="opacity:1; transform:scale(1,1);">
                <div class="bx-spl-content">
                    <h3 class="bx-def-font-normal"><bx_text:_sys_txt_splash_slide04_txt /></h3>
                    <div class="bx-spl-login">__login_form__</div>
                </div>
            </div>
        </div>
	</div>
	<script type="text/javascript">
		$(document).ready(function () {

            // workaround for iOS 7 
            if (!!navigator.userAgent.match(/i(Pad|Phone|Pod).+(Version\\/7\\.\\d+ Mobile)/i)) {
                var aSelVh = {
                    \'1\': \'#bx-spl-slide01, #bx-spl-slide01 .bx-spl-slide-video, #bx-spl-slide04\',
                    \'1.5\': \'#bx-spl-slide03\'
                };
                var aSelVw = {
                    \'0.35\': \'#bx-spl-slide02 .bx-spl-bg\'
                };
                function fixMobileSafariViewport() {
                    $.each(aSelVh, function (sVal, sSel) {
                        $(sSel).css(\'height\', window.innerHeight * parseFloat(sVal));
                    });
                    $.each(aSelVw, function (sVal, sSel) {
                        $(sSel).css(\'height\', window.innerWidth * parseFloat(sVal));
                    });                
                }
                // listen to portrait/landscape changes
                window.addEventListener(\'orientationchange\', fixMobileSafariViewport, true);
                fixMobileSafariViewport();
            }

			skrollr.init();
		});
	</script>
</div>',
  'sys_site_splash_enabled' => '',
  'sys_site_cover_common' => '0',
  'sys_unit_cover_profile' => '0',
  'lang_default' => 'en',
  'lang_subst_from_en' => 'on',
  'sys_format_date' => 'D MMM YYYY',
  'sys_format_time' => 'HH:mm',
  'sys_format_datetime' => 'D MMM YYYY h:mm:ss a',
  'sys_format_timeago' => '432000',
  'template' => 'protean',
  'sys_db_cache_enable' => 'on',
  'sys_db_cache_engine' => 'File',
  'sys_cache_memcache_host' => '',
  'sys_cache_memcache_port' => '11211',
  'sys_page_cache_enable' => 'on',
  'sys_page_cache_engine' => 'File',
  'sys_pb_cache_enable' => 'on',
  'sys_pb_cache_engine' => 'File',
  'sys_template_cache_enable' => 'on',
  'sys_template_cache_engine' => 'FileHtml',
  'sys_template_cache_css_enable' => 'on',
  'sys_template_cache_js_enable' => 'on',
  'sys_template_cache_minify_css_enable' => 'on',
  'sys_template_cache_minify_js_enable' => 'on',
  'sys_template_cache_compress_enable' => 'on',
  'sys_oauth_key' => 'hs5z78izaj',
  'sys_oauth_secret' => '9z8czq9trdjyp2x7uzqzr8cauhduuekk',
  'currency_code' => 'USD',
  'currency_sign' => '&#36;',
  'enable_gd' => 'on',
  'useLikeOperator' => 'on',
  'sys_transcoder_queue_storage' => '',
  'sys_default_payment' => '',
  'sys_maps_api_key' => '',
  'sys_embedly_api_key' => '',
  'sys_embedly_api_pattern' => '((https?:\\/\\/(.*yfrog\\..*\\/.*|www\\.flickr\\.com\\/photos\\/.*|flic\\.kr\\/.*|twitpic\\.com\\/.*|www\\.twitpic\\.com\\/.*|twitpic\\.com\\/photos\\/.*|www\\.twitpic\\.com\\/photos\\/.*|.*imgur\\.com\\/.*|twitgoo\\.com\\/.*|i.*\\.photobucket\\.com\\/albums\\/.*|s.*\\.photobucket\\.com\\/albums\\/.*|media\\.photobucket\\.com\\/image\\/.*|www\\.mobypicture\\.com\\/user\\/.*\\/view\\/.*|moby\\.to\\/.*|xkcd\\.com\\/.*|www\\.xkcd\\.com\\/.*|imgs\\.xkcd\\.com\\/.*|www\\.asofterworld\\.com\\/index\\.php\\?id=.*|www\\.asofterworld\\.com\\/.*\\.jpg|asofterworld\\.com\\/.*\\.jpg|www\\.qwantz\\.com\\/index\\.php\\?comic=.*|23hq\\.com\\/.*\\/photo\\/.*|www\\.23hq\\.com\\/.*\\/photo\\/.*|.*dribbble\\.com\\/shots\\/.*|drbl\\.in\\/.*|.*\\.smugmug\\.com\\/.*|.*\\.smugmug\\.com\\/.*#.*|picasaweb\\.google\\.com.*\\/.*\\/.*#.*|picasaweb\\.google\\.com.*\\/lh\\/photo\\/.*|picasaweb\\.google\\.com.*\\/.*\\/.*|img\\.ly\\/.*|www\\.tinypic\\.com\\/view\\.php.*|tinypic\\.com\\/view\\.php.*|www\\.tinypic\\.com\\/player\\.php.*|tinypic\\.com\\/player\\.php.*|www\\.tinypic\\.com\\/r\\/.*\\/.*|tinypic\\.com\\/r\\/.*\\/.*|.*\\.tinypic\\.com\\/.*\\.jpg|.*\\.tinypic\\.com\\/.*\\.png|meadd\\.com\\/.*\\/.*|meadd\\.com\\/.*|.*\\.deviantart\\.com\\/art\\/.*|.*\\.deviantart\\.com\\/gallery\\/.*|.*\\.deviantart\\.com\\/#\\/.*|fav\\.me\\/.*|.*\\.deviantart\\.com|.*\\.deviantart\\.com\\/gallery|.*\\.deviantart\\.com\\/.*\\/.*\\.jpg|.*\\.deviantart\\.com\\/.*\\/.*\\.gif|.*\\.deviantart\\.net\\/.*\\/.*\\.jpg|.*\\.deviantart\\.net\\/.*\\/.*\\.gif|www\\.fotopedia\\.com\\/.*\\/.*|fotopedia\\.com\\/.*\\/.*|photozou\\.jp\\/photo\\/show\\/.*\\/.*|photozou\\.jp\\/photo\\/photo_only\\/.*\\/.*|instagr\\.am\\/p\\/.*|instagram\\.com\\/p\\/.*|skitch\\.com\\/.*\\/.*\\/.*|img\\.skitch\\.com\\/.*|www\\.questionablecontent\\.net\\/|questionablecontent\\.net\\/|www\\.questionablecontent\\.net\\/view\\.php.*|questionablecontent\\.net\\/view\\.php.*|questionablecontent\\.net\\/comics\\/.*\\.png|www\\.questionablecontent\\.net\\/comics\\/.*\\.png|twitrpix\\.com\\/.*|.*\\.twitrpix\\.com\\/.*|www\\.someecards\\.com\\/.*\\/.*|someecards\\.com\\/.*\\/.*|some\\.ly\\/.*|www\\.some\\.ly\\/.*|pikchur\\.com\\/.*|achewood\\.com\\/.*|www\\.achewood\\.com\\/.*|achewood\\.com\\/index\\.php.*|www\\.achewood\\.com\\/index\\.php.*|www\\.whosay\\.com\\/.*\\/content\\/.*|www\\.whosay\\.com\\/.*\\/photos\\/.*|www\\.whosay\\.com\\/.*\\/videos\\/.*|say\\.ly\\/.*|ow\\.ly\\/i\\/.*|mlkshk\\.com\\/p\\/.*|lockerz\\.com\\/s\\/.*|pics\\.lockerz\\.com\\/s\\/.*|d\\.pr\\/i\\/.*|www\\.eyeem\\.com\\/p\\/.*|www\\.eyeem\\.com\\/a\\/.*|www\\.eyeem\\.com\\/u\\/.*|giphy\\.com\\/gifs\\/.*|gph\\.is\\/.*|frontback\\.me\\/p\\/.*|www\\.fotokritik\\.com\\/.*\\/.*|fotokritik\\.com\\/.*\\/.*|vid\\.me\\/.*|galeri\\.uludagsozluk\\.com\\/.*|gfycat\\.com\\/.*|tochka\\.net\\/.*|.*\\.tochka\\.net\\/.*|4cook\\.net\\/recipe\\/.*|.*youtube\\.com\\/watch.*|.*\\.youtube\\.com\\/v\\/.*|youtu\\.be\\/.*|.*\\.youtube\\.com\\/user\\/.*|.*\\.youtube\\.com\\/.*#.*\\/.*|m\\.youtube\\.com\\/watch.*|m\\.youtube\\.com\\/index.*|.*\\.youtube\\.com\\/profile.*|.*\\.youtube\\.com\\/view_play_list.*|.*\\.youtube\\.com\\/playlist.*|www\\.youtube\\.com\\/embed\\/.*|youtube\\.com\\/gif.*|www\\.youtube\\.com\\/gif.*|.*twitch\\.tv\\/.*|.*twitch\\.tv\\/.*\\/b\\/.*|www\\.ustream\\.tv\\/recorded\\/.*|www\\.ustream\\.tv\\/channel\\/.*|www\\.ustream\\.tv\\/.*|ustre\\.am\\/.*|qik\\.com\\/video\\/.*|qik\\.com\\/.*|qik\\.ly\\/.*|.*revision3\\.com\\/.*|.*\\.dailymotion\\.com\\/video\\/.*|.*\\.dailymotion\\.com\\/.*\\/video\\/.*|collegehumor\\.com\\/video:.*|collegehumor\\.com\\/video\\/.*|www\\.collegehumor\\.com\\/video:.*|www\\.collegehumor\\.com\\/video\\/.*|telly\\.com\\/.*|www\\.telly\\.com\\/.*|break\\.com\\/.*\\/.*|www\\.break\\.com\\/.*\\/.*|vids\\.myspace\\.com\\/index\\.cfm\\?fuseaction=vids\\.individual&videoid.*|www\\.myspace\\.com\\/index\\.cfm\\?fuseaction=.*&videoid.*|www\\.metacafe\\.com\\/watch\\/.*|www\\.metacafe\\.com\\/w\\/.*|blip\\.tv\\/.*\\/.*|.*\\.blip\\.tv\\/.*\\/.*|video\\.google\\.com\\/videoplay\\?.*|.*viddler\\.com\\/v\\/.*|liveleak\\.com\\/view\\?.*|www\\.liveleak\\.com\\/view\\?.*|animoto\\.com\\/play\\/.*|video214\\.com\\/play\\/.*|dotsub\\.com\\/view\\/.*|www\\.overstream\\.net\\/view\\.php\\?oid=.*|www\\.livestream\\.com\\/.*|new\\.livestream\\.com\\/.*|www\\.worldstarhiphop\\.com\\/videos\\/video.*\\.php\\?v=.*|worldstarhiphop\\.com\\/videos\\/video.*\\.php\\?v=.*|bambuser\\.com\\/v\\/.*|bambuser\\.com\\/channel\\/.*|bambuser\\.com\\/channel\\/.*\\/broadcast\\/.*|www\\.schooltube\\.com\\/video\\/.*\\/.*|bigthink\\.com\\/ideas\\/.*|bigthink\\.com\\/series\\/.*|sendables\\.jibjab\\.com\\/view\\/.*|sendables\\.jibjab\\.com\\/originals\\/.*|jibjab\\.com\\/view\\/.*|www\\.xtranormal\\.com\\/watch\\/.*|socialcam\\.com\\/v\\/.*|www\\.socialcam\\.com\\/v\\/.*|v\\.youku\\.com\\/v_show\\/.*|v\\.youku\\.com\\/v_playlist\\/.*|www\\.snotr\\.com\\/video\\/.*|snotr\\.com\\/video\\/.*|www\\.clipfish\\.de\\/.*\\/.*\\/video\\/.*|www\\.myvideo\\.de\\/watch\\/.*|www\\.vzaar\\.com\\/videos\\/.*|vzaar\\.com\\/videos\\/.*|www\\.vzaar\\.tv\\/.*|vzaar\\.tv\\/.*|vzaar\\.me\\/.*|.*\\.vzaar\\.me\\/.*|coub\\.com\\/view\\/.*|coub\\.com\\/embed\\/.*|www\\.streamio\\.com\\/api\\/v1\\/.*|streamio\\.com\\/api\\/v1\\/.*|vine\\.co\\/v\\/.*|www\\.vine\\.co\\/v\\/.*|www\\.viddy\\.com\\/video\\/.*|www\\.viddy\\.com\\/.*\\/v\\/.*|www\\.tudou\\.com\\/programs\\/view\\/.*|tudou\\.com\\/programs\\/view\\/.*|sproutvideo\\.com\\/videos\\/.*|embed\\.minoto-video\\.com\\/.*|iframe\\.minoto-video\\.com\\/.*|play\\.minoto-video\\.com\\/.*|dashboard\\.minoto-video\\.com\\/main\\/video\\/details\\/.*|api\\.minoto-video\\.com\\/publishers\\/.*\\/videos\\/.*|www\\.brainshark\\.com\\/.*\\/.*|brainshark\\.com\\/.*\\/.*|23video\\.com\\/.*|.*\\.23video\\.com\\/.*|goanimate\\.com\\/videos\\/.*|brainsonic\\.com\\/.*|.*\\.brainsonic\\.com\\/.*|lustich\\.de\\/videos\\/.*|web\\.tv\\/.*|.*\\.web\\.tv\\/.*|mynet\\.com\\/video\\/.*|www\\.mynet\\.com\\/video\\/|izlesene\\.com\\/video\\/.*|www\\.izlesene\\.com\\/video\\/|alkislarlayasiyorum\\.com\\/.*|www\\.alkislarlayasiyorum\\.com\\/.*|59saniye\\.com\\/.*|www\\.59saniye\\.com\\/.*|zie\\.nl\\/video\\/.*|www\\.zie\\.nl\\/video\\/.*|app\\.ustudio\\.com\\/embed\\/.*\\/.*|bale\\.io\\/.*|www\\.allego\\.com\\/.*|clipter\\.com\\/c\\/.*|sendvid\\.com\\/.*|www\\.snappytv\\.com\\/.*|snappytv\\.com\\/.*|frankly\\.me\\/.*|streamable\\.com\\/.*|ticker\\.tv\\/v\\/.*|videobio\\.com\\/playerjs\\/.*|clippituser\\.tv\\/.*|www\\.clippituser\\.tv\\/.*|www\\.whitehouse\\.gov\\/photos-and-video\\/video\\/.*|www\\.whitehouse\\.gov\\/video\\/.*|wh\\.gov\\/photos-and-video\\/video\\/.*|wh\\.gov\\/video\\/.*|www\\.hulu\\.com\\/watch.*|www\\.hulu\\.com\\/w\\/.*|www\\.hulu\\.com\\/embed\\/.*|hulu\\.com\\/watch.*|hulu\\.com\\/w\\/.*|.*crackle\\.com\\/c\\/.*|www\\.funnyordie\\.com\\/videos\\/.*|www\\.funnyordie\\.com\\/m\\/.*|funnyordie\\.com\\/videos\\/.*|funnyordie\\.com\\/m\\/.*|www\\.vimeo\\.com\\/groups\\/.*\\/videos\\/.*|www\\.vimeo\\.com\\/.*|vimeo\\.com\\/groups\\/.*\\/videos\\/.*|vimeo\\.com\\/.*|vimeo\\.com\\/m\\/#\\/.*|player\\.vimeo\\.com\\/.*|www\\.ted\\.com\\/talks\\/.*\\.html.*|www\\.ted\\.com\\/talks\\/lang\\/.*\\/.*\\.html.*|www\\.ted\\.com\\/index\\.php\\/talks\\/.*\\.html.*|www\\.ted\\.com\\/index\\.php\\/talks\\/lang\\/.*\\/.*\\.html.*|www\\.ted\\.com\\/talks\\/|.*nfb\\.ca\\/film\\/.*|thedailyshow\\.cc\\.com\\/videos\\/.*|www\\.thedailyshow\\.com\\/watch\\/.*|www\\.thedailyshow\\.com\\/full-episodes\\/.*|www\\.thedailyshow\\.com\\/collection\\/.*\\/.*\\/.*|yahoo\\.com\\/movies\\/.*|.*\\.yahoo\\.com\\/movies\\/.*|thecolbertreport\\.cc\\.com\\/videos\\/.*|www\\.colbertnation\\.com\\/the-colbert-report-collections\\/.*|www\\.colbertnation\\.com\\/full-episodes\\/.*|www\\.colbertnation\\.com\\/the-colbert-report-videos\\/.*|www\\.comedycentral\\.com\\/videos\\/index\\.jhtml\\?.*|www\\.theonion\\.com\\/video\\/.*|theonion\\.com\\/video\\/.*|wordpress\\.tv\\/.*\\/.*\\/.*\\/.*\\/|www\\.traileraddict\\.com\\/trailer\\/.*|www\\.traileraddict\\.com\\/clip\\/.*|www\\.traileraddict\\.com\\/poster\\/.*|www\\.trailerspy\\.com\\/trailer\\/.*\\/.*|www\\.trailerspy\\.com\\/trailer\\/.*|www\\.trailerspy\\.com\\/view_video\\.php.*|fora\\.tv\\/.*\\/.*\\/.*\\/.*|www\\.spike\\.com\\/video\\/.*|www\\.gametrailers\\.com\\/video.*|gametrailers\\.com\\/video.*|www\\.koldcast\\.tv\\/video\\/.*|www\\.koldcast\\.tv\\/#video:.*|mixergy\\.com\\/.*|video\\.pbs\\.org\\/video\\/.*|www\\.zapiks\\.com\\/.*|www\\.trutv\\.com\\/video\\/.*|www\\.nzonscreen\\.com\\/title\\/.*|nzonscreen\\.com\\/title\\/.*|app\\.wistia\\.com\\/embed\\/medias\\/.*|wistia\\.com\\/.*|.*\\.wistia\\.com\\/.*|.*\\.wi\\.st\\/.*|wi\\.st\\/.*|confreaks\\.net\\/videos\\/.*|www\\.confreaks\\.net\\/videos\\/.*|confreaks\\.com\\/videos\\/.*|www\\.confreaks\\.com\\/videos\\/.*|video\\.allthingsd\\.com\\/video\\/.*|videos\\.nymag\\.com\\/.*|aniboom\\.com\\/animation-video\\/.*|www\\.aniboom\\.com\\/animation-video\\/.*|grindtv\\.com\\/.*\\/video\\/.*|www\\.grindtv\\.com\\/.*\\/video\\/.*|ifood\\.tv\\/recipe\\/.*|ifood\\.tv\\/video\\/.*|ifood\\.tv\\/channel\\/user\\/.*|www\\.ifood\\.tv\\/recipe\\/.*|www\\.ifood\\.tv\\/video\\/.*|www\\.ifood\\.tv\\/channel\\/user\\/.*|logotv\\.com\\/video\\/.*|www\\.logotv\\.com\\/video\\/.*|lonelyplanet\\.com\\/Clip\\.aspx\\?.*|www\\.lonelyplanet\\.com\\/Clip\\.aspx\\?.*|streetfire\\.net\\/video\\/.*\\.htm.*|www\\.streetfire\\.net\\/video\\/.*\\.htm.*|sciencestage\\.com\\/v\\/.*\\.html|sciencestage\\.com\\/a\\/.*\\.html|www\\.sciencestage\\.com\\/v\\/.*\\.html|www\\.sciencestage\\.com\\/a\\/.*\\.html|link\\.brightcove\\.com\\/services\\/player\\/bcpid.*|bcove\\.me\\/.*|wirewax\\.com\\/.*|www\\.wirewax\\.com\\/.*|canalplus\\.fr\\/.*|www\\.canalplus\\.fr\\/.*|www\\.vevo\\.com\\/watch\\/.*|www\\.vevo\\.com\\/video\\/.*|pixorial\\.com\\/watch\\/.*|www\\.pixorial\\.com\\/watch\\/.*|spreecast\\.com\\/events\\/.*|www\\.spreecast\\.com\\/events\\/.*|showme\\.com\\/sh\\/.*|www\\.showme\\.com\\/sh\\/.*|.*\\.looplogic\\.com\\/.*|on\\.aol\\.com\\/video\\/.*|on\\.aol\\.com\\/playlist\\/.*|videodetective\\.com\\/.*\\/.*|www\\.videodetective\\.com\\/.*\\/.*|khanacademy\\.org\\/.*|www\\.khanacademy\\.org\\/.*|.*vidyard\\.com\\/.*|www\\.veoh\\.com\\/watch\\/.*|veoh\\.com\\/watch\\/.*|.*\\.univision\\.com\\/.*\\/video\\/.*|.*\\.vidcaster\\.com\\/.*|muzu\\.tv\\/.*|www\\.muzu\\.tv\\/.*|vube\\.com\\/.*\\/.*|www\\.vube\\.com\\/.*\\/.*|.*boxofficebuz\\.com\\/video\\/.*|www\\.godtube\\.com\\/featured\\/video\\/.*|godtube\\.com\\/featured\\/video\\/.*|www\\.godtube\\.com\\/watch\\/.*|godtube\\.com\\/watch\\/.*|mediamatters\\.org\\/mmtv\\/.*|www\\.clikthrough\\.com\\/theater\\/video\\/.*|www\\.clipsyndicate\\.com\\/video\\/playlist\\/.*\\/.*|www\\.srf\\.ch\\/play\\/.*\\/.*\\/.*\\/.*\\?id=.*|www\\.mpora\\.com\\/videos\\/.*|mpora\\.com\\/videos\\/.*|vice\\.com\\/.*|www\\.vice\\.com\\/.*|videodonor\\.com\\/video\\/.*|api\\.lovelive\\.tv\\/v1\\/.*|www\\.hurriyettv\\.com\\/.*|www\\.hurriyettv\\.com\\/.*|video\\.uludagsozluk\\.com\\/.*|www\\.ign\\.com\\/videos\\/.*|ign\\.com\\/videos\\/.*|www\\.askmen\\.com\\/video\\/.*|askmen\\.com\\/video\\/.*|video\\.esri\\.com\\/.*|www\\.zapkolik\\.com\\/video\\/.*|.*\\.iplayerhd\\.com\\/playerframe\\/.*|.*\\.iplayerhd\\.com\\/player\\/video\\/.*|plays\\.tv\\/video\\/.*|espn\\.go\\.com\\/video\\/clip.*|espn\\.go\\.com\\/.*\\/story.*|abcnews\\.com\\/.*\\/video\\/.*|abcnews\\.com\\/video\\/playerIndex.*|abcnews\\.go\\.com\\/.*\\/video\\/.*|abcnews\\.go\\.com\\/video\\/playerIndex.*|washingtonpost\\.com\\/wp-dyn\\/.*\\/video\\/.*\\/.*\\/.*\\/.*|www\\.washingtonpost\\.com\\/wp-dyn\\/.*\\/video\\/.*\\/.*\\/.*\\/.*|www\\.boston\\.com\\/video.*|boston\\.com\\/video.*|www\\.boston\\.com\\/.*video.*|boston\\.com\\/.*video.*|www\\.facebook\\.com\\/photo\\.php.*|www\\.facebook\\.com\\/video\\.php.*|www\\.facebook\\.com\\/.*\\/posts\\/.*|fb\\.me\\/.*|www\\.facebook\\.com\\/.*\\/photos\\/.*|www\\.facebook\\.com\\/.*\\/videos\\/.*|cnbc\\.com\\/id\\/.*\\?.*video.*|www\\.cnbc\\.com\\/id\\/.*\\?.*video.*|cnbc\\.com\\/id\\/.*\\/play\\/1\\/video\\/.*|www\\.cnbc\\.com\\/id\\/.*\\/play\\/1\\/video\\/.*|cbsnews\\.com\\/video\\/watch\\/.*|plus\\.google\\.com\\/.*|www\\.google\\.com\\/profiles\\/.*|google\\.com\\/profiles\\/.*|www\\.cnn\\.com\\/video\\/.*|edition\\.cnn\\.com\\/video\\/.*|money\\.cnn\\.com\\/video\\/.*|today\\.msnbc\\.msn\\.com\\/id\\/.*\\/vp\\/.*|www\\.msnbc\\.msn\\.com\\/id\\/.*\\/vp\\/.*|www\\.msnbc\\.msn\\.com\\/id\\/.*\\/ns\\/.*|today\\.msnbc\\.msn\\.com\\/id\\/.*\\/ns\\/.*|msnbc\\.msn\\.com\\/.*\\/watch\\/.*|www\\.msnbc\\.msn\\.com\\/.*\\/watch\\/.*|nbcnews\\.com\\/.*|www\\.nbcnews\\.com\\/.*|multimedia\\.foxsports\\.com\\/m\\/video\\/.*\\/.*|msn\\.foxsports\\.com\\/video.*|www\\.globalpost\\.com\\/video\\/.*|www\\.globalpost\\.com\\/dispatch\\/.*|theguardian\\.com\\/.*\\/video\\/.*\\/.*\\/.*\\/.*|www\\.theguardian\\.com\\/.*\\/video\\/.*\\/.*\\/.*\\/.*|guardian\\.co\\.uk\\/.*\\/video\\/.*\\/.*\\/.*\\/.*|www\\.guardian\\.co\\.uk\\/.*\\/video\\/.*\\/.*\\/.*\\/.*|bravotv\\.com\\/.*\\/.*\\/videos\\/.*|www\\.bravotv\\.com\\/.*\\/.*\\/videos\\/.*|dsc\\.discovery\\.com\\/videos\\/.*|animal\\.discovery\\.com\\/videos\\/.*|health\\.discovery\\.com\\/videos\\/.*|investigation\\.discovery\\.com\\/videos\\/.*|military\\.discovery\\.com\\/videos\\/.*|planetgreen\\.discovery\\.com\\/videos\\/.*|science\\.discovery\\.com\\/videos\\/.*|tlc\\.discovery\\.com\\/videos\\/.*|video\\.forbes\\.com\\/fvn\\/.*|distrify\\.com\\/film\\/.*|muvi\\.es\\/.*|video\\.foxnews\\.com\\/v\\/.*|video\\.foxbusiness\\.com\\/v\\/.*|www\\.reuters\\.com\\/video\\/.*|reuters\\.com\\/video\\/.*|live\\.huffingtonpost\\.com\\/r\\/segment\\/.*\\/.*|video\\.nytimes\\.com\\/video\\/.*|www\\.nytimes\\.com\\/video\\/.*\\/.*|nyti\\.ms\\/.*|www\\.vol\\.at\\/video\\/.*|vol\\.at\\/video\\/.*|www\\.spiegel\\.de\\/video\\/.*|spiegel\\.de\\/video\\/.*|www\\.zeit\\.de\\/video\\/.*|zeit\\.de\\/video\\/.*|www\\.rts\\.ch\\/play\\/tv\\/.*|soundcloud\\.com\\/.*|soundcloud\\.com\\/.*\\/.*|soundcloud\\.com\\/.*\\/sets\\/.*|soundcloud\\.com\\/groups\\/.*|snd\\.sc\\/.*|open\\.spotify\\.com\\/.*|spoti\\.fi\\/.*|play\\.spotify\\.com\\/.*|www\\.last\\.fm\\/music\\/.*|www\\.last\\.fm\\/music\\/+videos\\/.*|www\\.last\\.fm\\/music\\/+images\\/.*|www\\.last\\.fm\\/music\\/.*\\/_\\/.*|www\\.last\\.fm\\/music\\/.*\\/.*|www\\.mixcloud\\.com\\/.*\\/.*\\/|www\\.radionomy\\.com\\/.*\\/radio\\/.*|radionomy\\.com\\/.*\\/radio\\/.*|www\\.hark\\.com\\/clips\\/.*|www\\.rdio\\.com\\/#\\/artist\\/.*\\/album\\/.*|www\\.rdio\\.com\\/artist\\/.*\\/album\\/.*|www\\.zero-inch\\.com\\/.*|.*\\.bandcamp\\.com\\/|.*\\.bandcamp\\.com\\/track\\/.*|.*\\.bandcamp\\.com\\/album\\/.*|freemusicarchive\\.org\\/music\\/.*|www\\.freemusicarchive\\.org\\/music\\/.*|freemusicarchive\\.org\\/curator\\/.*|www\\.freemusicarchive\\.org\\/curator\\/.*|www\\.npr\\.org\\/.*\\/.*\\/.*\\/.*\\/.*|www\\.npr\\.org\\/.*\\/.*\\/.*\\/.*\\/.*\\/.*|www\\.npr\\.org\\/.*\\/.*\\/.*\\/.*\\/.*\\/.*\\/.*|www\\.npr\\.org\\/templates\\/story\\/story\\.php.*|huffduffer\\.com\\/.*\\/.*|www\\.audioboom\\.com\\/boos\\/.*|audioboom\\.com\\/boos\\/.*|boo\\.fm\\/b.*|www\\.xiami\\.com\\/song\\/.*|xiami\\.com\\/song\\/.*|www\\.saynow\\.com\\/playMsg\\.html.*|www\\.saynow\\.com\\/playMsg\\.html.*|grooveshark\\.com\\/.*|radioreddit\\.com\\/songs.*|www\\.radioreddit\\.com\\/songs.*|radioreddit\\.com\\/\\?q=songs.*|www\\.radioreddit\\.com\\/\\?q=songs.*|www\\.gogoyoko\\.com\\/song\\/.*|hypem\\.com\\/premiere\\/.*|bop\\.fm\\/s\\/.*\\/.*|clyp\\.it\\/.*|www\\.dnbradio\\.com\\/.*|dnbradio\\.com\\/.*))|(https:\\/\\/(picasaweb\\.google\\.com.*\\/.*\\/.*#.*|picasaweb\\.google\\.com.*\\/lh\\/photo\\/.*|picasaweb\\.google\\.com.*\\/.*\\/.*|skitch\\.com\\/.*\\/.*\\/.*|img\\.skitch\\.com\\/.*|vidd\\.me\\/.*|vid\\.me\\/.*|gfycat\\.com\\/.*|.*youtube\\.com\\/watch.*|.*\\.youtube\\.com\\/v\\/.*|youtu\\.be\\/.*|.*\\.youtube\\.com\\/playlist.*|www\\.youtube\\.com\\/embed\\/.*|youtube\\.com\\/gif.*|www\\.youtube\\.com\\/gif.*|screen\\.yahoo\\.com\\/.*\\/.*|animoto\\.com\\/play\\/.*|video214\\.com\\/play\\/.*|www\\.streamio\\.com\\/api\\/v1\\/.*|streamio\\.com\\/api\\/v1\\/.*|vine\\.co\\/v\\/.*|www\\.vine\\.co\\/v\\/.*|mixbit\\.com\\/v\\/.*|www\\.brainshark\\.com\\/.*\\/.*|brainshark\\.com\\/.*\\/.*|23video\\.com\\/.*|.*\\.23video\\.com\\/.*|brainsonic\\.com\\/.*|.*\\.brainsonic\\.com\\/.*|www\\.reelhouse\\.org\\/.*|reelhouse\\.org\\/.*|www\\.allego\\.com\\/.*|clipter\\.com\\/c\\/.*|app\\.devhv\\.com\\/oembed\\/.*|sendvid\\.com\\/.*|clipmine\\.com\\/video\\/.*|clipmine\\.com\\/embed\\/.*|clippituser\\.tv\\/.*|www\\.clippituser\\.tv\\/.*|www\\.vimeo\\.com\\/.*|vimeo\\.com\\/.*|player\\.vimeo\\.com\\/.*|yahoo\\.com\\/movies\\/.*|.*\\.yahoo\\.com\\/movies\\/.*|app\\.wistia\\.com\\/embed\\/medias\\/.*|wistia\\.com\\/.*|.*\\.wistia\\.com\\/.*|.*\\.wi\\.st\\/.*|wi\\.st\\/.*|.*\\.looplogic\\.com\\/.*|khanacademy\\.org\\/.*|www\\.khanacademy\\.org\\/.*|.*vidyard\\.com\\/.*|.*\\.stream\\.co\\.jp\\/apiservice\\/.*|.*\\.stream\\.ne\\.jp\\/apiservice\\/.*|api\\.lovelive\\.tv\\/v1\\/.*|video\\.esri\\.com\\/.*|mix\\.office\\.com\\/watch\\/.*|mix\\.office\\.com\\/mix\\/.*|mix\\.office\\.com\\/embed\\/.*|mix\\.office\\.com\\/MyMixes\\/Details\\/.*|.*\\.iplayerhd\\.com\\/playerframe\\/.*|.*\\.iplayerhd\\.com\\/player\\/video\\/.*|plays\\.tv\\/video\\/.*|www\\.facebook\\.com\\/photo\\.php.*|www\\.facebook\\.com\\/video\\.php.*|www\\.facebook\\.com\\/.*\\/posts\\/.*|fb\\.me\\/.*|www\\.facebook\\.com\\/.*\\/photos\\/.*|www\\.facebook\\.com\\/.*\\/videos\\/.*|plus\\.google\\.com\\/.*|soundcloud\\.com\\/.*|soundcloud\\.com\\/.*\\/.*|soundcloud\\.com\\/.*\\/sets\\/.*|soundcloud\\.com\\/groups\\/.*|open\\.spotify\\.com\\/.*|play\\.spotify\\.com\\/.*|bop\\.fm\\/s\\/.*\\/.*|bop\\.fm\\/p\\/.*|bop\\.fm\\/a\\/.*|clyp\\.it\\/.*|sfx\\.io\\/.*)))',
  'sys_iframely_api_key' => '',
  'permalinks_pages' => 'on',
  'permalinks_modules' => 'on',
  'permalinks_storage' => 'on',
  'sys_security_form_token_enable' => 'on',
  'sys_security_form_token_lifetime' => '86400',
  'sys_recaptcha_key_public' => '',
  'sys_recaptcha_key_private' => '',
  'sys_add_nofollow' => 'on',
  'site_title' => 'Nuesto',
  'site_email' => 'developer@nuesto.net',
  'site_email_notify' => 'developer@nuesto.net',
  'site_tour_home' => 'on',
  'site_tour_studio' => 'on',
  'add_to_mobile_homepage' => 'on',
  'site_login_social_compact' => '',
  'sys_autoupdate_system' => 'on',
  'sys_autoupdate_modules' => 'on',
  'sys_autoupdate_force_modified_files' => '',
  'sys_per_page_search_keyword_single' => '24',
  'sys_per_page_search_keyword_plural' => '3',
  'sys_storage_default' => 'Local',
  'sys_storage_s3_access_key' => '',
  'sys_storage_s3_secret_key' => '',
  'sys_storage_s3_bucket' => '',
  'sys_storage_s3_domain' => '',
  'sys_account_online_time' => '5',
  'sys_account_autoapproval' => 'on',
  'sys_account_activation_letter' => '',
  'sys_account_default_profile_type' => 'bx_persons',
  'sys_account_limit_profiles_number' => '0',
  'sys_acl_expire_notification_days' => '1',
  'sys_acl_expire_notify_once' => 'on',
  'enable_notification_pruning' => '',
  'enable_notification_account' => 'on',
  'bx_en_switcher_title' => 'English',
  'bx_protean_switcher_title' => 'Protean',
  'bx_protean_general_item_bg_color_hover' => 'rgba(210, 230, 250, 0.3)',
  'bx_protean_general_item_bg_color_active' => 'rgba(196, 248, 156, 0.4)',
  'bx_protean_header_height' => '4rem',
  'bx_protean_header_content_padding' => '0.5rem',
  'bx_protean_header_bg_color' => 'rgba(255, 255, 255, 1)',
  'bx_protean_header_bg_image' => '',
  'bx_protean_header_bg_image_repeat' => 'no-repeat',
  'bx_protean_header_bg_image_size' => 'cover',
  'bx_protean_site_logo' => '',
  'bx_protean_site_logo_alt' => '',
  'bx_protean_site_logo_width' => '240',
  'bx_protean_site_logo_height' => '48',
  'bx_protean_header_border_color' => 'rgba(0, 0, 0, 0.2)',
  'bx_protean_header_border_size' => '1px',
  'bx_protean_header_shadow' => '0px 1px 3px 0px rgba(0, 0, 0, 0.05)',
  'bx_protean_header_icon_color' => 'rgba(30, 150, 250, 0.8)',
  'bx_protean_header_icon_color_hover' => 'rgba(30, 150, 250, 1)',
  'bx_protean_header_link_color' => 'rgba(30, 150, 250, 0.8)',
  'bx_protean_header_link_color_hover' => 'rgba(30, 150, 250, 1)',
  'bx_protean_footer_bg_color' => 'rgba(30, 150, 250, 0.5)',
  'bx_protean_footer_bg_image' => '',
  'bx_protean_footer_bg_image_repeat' => 'no-repeat',
  'bx_protean_footer_bg_image_size' => 'cover',
  'bx_protean_footer_content_padding' => '1rem',
  'bx_protean_footer_border_color' => 'rgba(0, 0, 0, 1)',
  'bx_protean_footer_border_size' => '1px',
  'bx_protean_footer_shadow' => 'none',
  'bx_protean_footer_font_color' => 'rgba(40, 50, 60, 0.9)',
  'bx_protean_footer_icon_color' => 'rgba(10, 120, 220, 1)',
  'bx_protean_footer_icon_color_hover' => 'rgba(10, 120, 220, 1)',
  'bx_protean_footer_link_color' => 'rgba(10, 120, 220, 1)',
  'bx_protean_footer_link_color_hover' => 'rgba(10, 120, 220, 1)',
  'bx_protean_body_bg_color' => 'rgb(230, 240, 250)',
  'bx_protean_body_bg_image' => '',
  'bx_protean_body_bg_image_repeat' => 'no-repeat',
  'bx_protean_body_bg_image_size' => 'cover',
  'bx_protean_page_width' => '1024',
  'bx_protean_body_icon_color' => 'rgba(30, 150, 250, 0.9)',
  'bx_protean_body_icon_color_hover' => 'rgba(30, 150, 250, 1)',
  'bx_protean_body_link_color' => 'rgba(30, 150, 250, 0.9)',
  'bx_protean_body_link_color_hover' => 'rgba(30, 150, 250, 1)',
  'bx_protean_cover_height' => '30vh',
  'bx_protean_cover_bg_color' => 'rgba(255, 255, 255, 1)',
  'bx_protean_cover_content_padding' => '2rem 3rem 2rem 3rem',
  'bx_protean_cover_border_color' => 'rgba(208, 208, 208, 0)',
  'bx_protean_cover_border_size' => '0px',
  'bx_protean_cover_border_radius' => '0px',
  'bx_protean_cover_shadow' => 'none',
  'bx_protean_cover_icon_border_color' => 'rgba(208, 208, 208, 1)',
  'bx_protean_cover_icon_border_size' => '1px',
  'bx_protean_cover_icon_border_radius' => '3px',
  'bx_protean_cover_icon_shadow' => 'none',
  'bx_protean_cover_text_align' => 'center',
  'bx_protean_cover_text_shadow' => '0px 1px 3px rgba(0, 0, 0, .3)',
  'bx_protean_cover_font_family' => 'Arial, sans-serif',
  'bx_protean_cover_font_size' => '2.0rem',
  'bx_protean_cover_font_color' => 'rgba(255, 255, 255, 1)',
  'bx_protean_cover_font_weight' => '700',
  'bx_protean_block_bg_color' => 'rgba(245, 250, 255, 0.9)',
  'bx_protean_block_bg_image' => '',
  'bx_protean_block_bg_image_repeat' => 'no-repeat',
  'bx_protean_block_bg_image_size' => 'cover',
  'bx_protean_block_content_padding' => '1rem',
  'bx_protean_block_border_color' => 'rgba(0, 0, 0, 0)',
  'bx_protean_block_border_size' => '0px',
  'bx_protean_block_border_radius' => '3px',
  'bx_protean_block_shadow' => '0px 1px 2px 0px rgba(0, 0, 0, 0.05)',
  'bx_protean_block_title_bg_color' => 'rgba(255, 255, 255, 0)',
  'bx_protean_block_title_padding' => '0.3rem 1rem 0rem 1rem',
  'bx_protean_block_title_border_color' => 'rgba(0, 0, 0, 0)',
  'bx_protean_block_title_border_size' => '0px',
  'bx_protean_block_title_border_radius' => '0px',
  'bx_protean_block_title_font_family' => 'Arial, sans-serif',
  'bx_protean_block_title_font_size' => '1rem',
  'bx_protean_block_title_font_color' => 'rgba(40, 50, 60, 0.8)',
  'bx_protean_block_title_font_weight' => '700',
  'bx_protean_block_title_div_height' => '0px',
  'bx_protean_block_title_div_bg_color' => 'rgba(40, 60, 80, 0)',
  'bx_protean_card_bg_color' => 'rgba(255, 255, 255, 1)',
  'bx_protean_card_bg_image' => '',
  'bx_protean_card_bg_image_repeat' => 'no-repeat',
  'bx_protean_card_bg_image_size' => 'cover',
  'bx_protean_card_content_padding' => '1rem',
  'bx_protean_card_border_color' => 'rgba(0, 0, 0, 0.1)',
  'bx_protean_card_border_size' => '1px',
  'bx_protean_card_border_radius' => '3px',
  'bx_protean_card_shadow' => '0px 1px 3px 0px rgba(0, 0, 0, 0.05)',
  'bx_protean_popup_bg_color' => 'rgba(255, 255, 255, 1)',
  'bx_protean_popup_bg_image' => '',
  'bx_protean_popup_bg_image_repeat' => 'no-repeat',
  'bx_protean_popup_bg_image_size' => 'cover',
  'bx_protean_popup_content_padding' => '1.25rem',
  'bx_protean_popup_border_color' => 'rgba(0, 0, 0, 0.2)',
  'bx_protean_popup_border_size' => '1px',
  'bx_protean_popup_border_radius' => '3px',
  'bx_protean_popup_shadow' => '0px 1px 5px 0px rgba(0, 0, 0, 0.05)',
  'bx_protean_popup_title_bg_color' => 'rgba(230, 240, 250, 0.9)',
  'bx_protean_popup_title_padding' => '1.25rem',
  'bx_protean_popup_title_font_family' => 'Arial, sans-serif',
  'bx_protean_popup_title_font_size' => '1rem',
  'bx_protean_popup_title_font_color' => 'rgba(40, 50, 60, 0.9)',
  'bx_protean_menu_main_bg_color' => 'rgba(255, 255, 255, 0.9)',
  'bx_protean_menu_main_bg_image' => '',
  'bx_protean_menu_main_bg_image_repeat' => 'no-repeat',
  'bx_protean_menu_main_bg_image_size' => 'cover',
  'bx_protean_menu_main_content_padding' => '0px',
  'bx_protean_menu_main_border_color' => 'rgba(0, 0, 0, 0.1)',
  'bx_protean_menu_main_border_size' => '0px',
  'bx_protean_menu_main_shadow' => 'none',
  'bx_protean_menu_main_font_family' => 'Arial, sans-serif',
  'bx_protean_menu_main_font_size' => '1rem',
  'bx_protean_menu_main_font_color' => 'rgba(40, 50, 60, 0.8)',
  'bx_protean_menu_main_font_color_hover' => 'rgba(40, 50, 60, 0.9)',
  'bx_protean_menu_main_font_color_active' => 'rgba(20, 30, 40, 1)',
  'bx_protean_menu_main_font_shadow' => 'none',
  'bx_protean_menu_main_font_weight' => '700',
  'bx_protean_menu_account_bg_color' => 'rgba(255, 255, 255, 0.9)',
  'bx_protean_menu_account_bg_image' => '',
  'bx_protean_menu_account_bg_image_repeat' => 'no-repeat',
  'bx_protean_menu_account_bg_image_size' => 'cover',
  'bx_protean_menu_account_content_padding' => '0px',
  'bx_protean_menu_account_border_color' => 'rgba(0, 0, 0, 0.1)',
  'bx_protean_menu_account_border_size' => '0px',
  'bx_protean_menu_account_shadow' => 'none',
  'bx_protean_menu_account_font_family' => 'Arial, sans-serif',
  'bx_protean_menu_account_font_size' => '1rem',
  'bx_protean_menu_account_font_color' => 'rgba(40, 50, 60, 0.8)',
  'bx_protean_menu_account_font_color_hover' => 'rgba(40, 50, 60, 0.9)',
  'bx_protean_menu_account_font_color_active' => 'rgba(20, 30, 40, 1)',
  'bx_protean_menu_account_font_shadow' => 'none',
  'bx_protean_menu_account_font_weight' => '400',
  'bx_protean_menu_page_bg_color' => 'rgba(255, 255, 255, 0.9)',
  'bx_protean_menu_page_bg_image' => '',
  'bx_protean_menu_page_bg_image_repeat' => 'no-repeat',
  'bx_protean_menu_page_bg_image_size' => 'cover',
  'bx_protean_menu_page_content_padding' => '0.3rem',
  'bx_protean_menu_page_border_color' => 'rgba(0, 0, 0, 0.1)',
  'bx_protean_menu_page_border_size' => '1px',
  'bx_protean_menu_page_shadow' => 'none',
  'bx_protean_menu_page_font_family' => 'Arial, sans-serif',
  'bx_protean_menu_page_font_size' => '1rem',
  'bx_protean_menu_page_font_color' => 'rgba(40, 50, 60, 0.8)',
  'bx_protean_menu_page_font_color_hover' => 'rgba(30, 150, 250, 1)',
  'bx_protean_menu_page_font_color_active' => 'rgba(30, 150, 250, 1)',
  'bx_protean_menu_page_font_shadow' => 'none',
  'bx_protean_menu_page_font_weight' => '400',
  'bx_protean_menu_slide_bg_color' => 'rgba(255, 255, 255, 0.9)',
  'bx_protean_menu_slide_bg_image' => '',
  'bx_protean_menu_slide_bg_image_repeat' => 'no-repeat',
  'bx_protean_menu_slide_bg_image_size' => 'cover',
  'bx_protean_menu_slide_content_padding' => '1.25rem',
  'bx_protean_menu_slide_border_color' => 'rgba(0, 0, 0, 0.1)',
  'bx_protean_menu_slide_border_size' => '1px 0px 1px 0px',
  'bx_protean_menu_slide_shadow' => 'none',
  'bx_protean_menu_slide_font_family' => 'Arial, sans-serif',
  'bx_protean_menu_slide_font_size' => '1.0rem',
  'bx_protean_menu_slide_font_color' => 'rgba(40, 50, 60, 0.8)',
  'bx_protean_menu_slide_font_color_hover' => 'rgba(40, 50, 60, 0.9)',
  'bx_protean_menu_slide_font_color_active' => 'rgba(20, 30, 40, 1)',
  'bx_protean_menu_slide_font_shadow' => 'none',
  'bx_protean_menu_slide_font_weight' => '400',
  'bx_protean_form_input_height' => '2rem',
  'bx_protean_form_input_bg_color' => 'rgba(255, 255, 255, 0.8)',
  'bx_protean_form_input_bg_color_active' => 'rgba(255, 255, 255, 1)',
  'bx_protean_form_input_border_color' => 'rgba(40, 60, 80, 0.5)',
  'bx_protean_form_input_border_color_active' => 'rgba(30, 150, 250, 1)',
  'bx_protean_form_input_border_size' => '1px',
  'bx_protean_form_input_shadow' => 'inset 0px 0px 2px 1px rgba(0,0,0,0.15)',
  'bx_protean_form_input_font_family' => 'Arial, sans-serif',
  'bx_protean_form_input_font_size' => '1rem',
  'bx_protean_form_input_font_color' => 'rgba(20, 30, 40, 1)',
  'bx_protean_button_lg_height' => '2rem',
  'bx_protean_button_lg_bg_color' => 'rgba(30, 150, 250, 0.8)',
  'bx_protean_button_lg_bg_color_hover' => 'rgba(30, 150, 250, 1)',
  'bx_protean_button_lg_border_color' => 'rgba(30, 150, 250, 1)',
  'bx_protean_button_lg_border_color_hover' => 'rgba(30, 150, 250, 1)',
  'bx_protean_button_lg_border_size' => '0px',
  'bx_protean_button_lg_border_radius' => '3px',
  'bx_protean_button_lg_shadow' => '0px 0px 0px 1px rgba(0,0,0,0.0)',
  'bx_protean_button_lg_font_family' => 'Arial, sans-serif',
  'bx_protean_button_lg_font_size' => '1rem',
  'bx_protean_button_lg_font_color' => 'rgba(255, 255, 255, 0.9)',
  'bx_protean_button_lg_font_color_hover' => 'rgba(255, 255, 255, 1)',
  'bx_protean_button_lg_font_shadow' => 'none',
  'bx_protean_button_lg_font_weight' => '700',
  'bx_protean_button_sm_height' => '1.5rem',
  'bx_protean_button_sm_bg_color' => 'rgba(40, 180, 140, 0.8)',
  'bx_protean_button_sm_bg_color_hover' => 'rgba(40, 180, 140, 1)',
  'bx_protean_button_sm_border_color' => 'rgba(40, 180, 140, 1)',
  'bx_protean_button_sm_border_color_hover' => 'rgba(40, 180, 140, 1)',
  'bx_protean_button_sm_border_size' => '0px',
  'bx_protean_button_sm_border_radius' => '2px',
  'bx_protean_button_sm_shadow' => '0px 0px 0px 1px rgba(0,0,0,0)',
  'bx_protean_button_sm_font_family' => 'Arial, sans-serif',
  'bx_protean_button_sm_font_size' => '0.75rem',
  'bx_protean_button_sm_font_color' => 'rgba(255, 255, 255, 0.9)',
  'bx_protean_button_sm_font_color_hover' => 'rgba(255, 255, 255, 1)',
  'bx_protean_button_sm_font_shadow' => 'none',
  'bx_protean_button_sm_font_weight' => '400',
  'bx_protean_font_family' => 'Arial, sans-serif',
  'bx_protean_font_size_default' => '18px',
  'bx_protean_font_color_default' => 'rgba(40, 50, 60, 0.9)',
  'bx_protean_font_color_grayed' => 'rgba(40, 50, 60, 0.5)',
  'bx_protean_font_color_contrasted' => 'rgba(255, 255, 255, 1)',
  'bx_protean_font_size_small' => '12px',
  'bx_protean_font_size_middle' => '15px',
  'bx_protean_font_size_large' => '18px',
  'bx_protean_font_size_h1' => '32px',
  'bx_protean_font_weight_h1' => '700',
  'bx_protean_font_color_default_h1' => 'rgba(40, 50, 60, 1)',
  'bx_protean_font_color_grayed_h1' => 'rgba(40, 50, 60, 0.5)',
  'bx_protean_font_color_contrasted_h1' => 'rgba(255, 255, 255, 0.9)',
  'bx_protean_font_color_link_h1' => 'rgba(30, 150, 250, 0.9)',
  'bx_protean_font_color_link_h1_hover' => 'rgba(30, 150, 250, 1)',
  'bx_protean_font_size_h2' => '24px',
  'bx_protean_font_weight_h2' => '700',
  'bx_protean_font_color_default_h2' => 'rgba(40, 60, 80, 0.9)',
  'bx_protean_font_color_grayed_h2' => 'rgba(40, 60, 80, 0.5)',
  'bx_protean_font_color_contrasted_h2' => 'rgba(255, 255, 255, 1)',
  'bx_protean_font_color_link_h2' => 'rgba(30, 150, 250, 0.9)',
  'bx_protean_font_color_link_h2_hover' => 'rgba(30, 150, 250, 1)',
  'bx_protean_font_size_h3' => '20px',
  'bx_protean_font_weight_h3' => '500',
  'bx_protean_font_color_default_h3' => 'rgba(40, 60, 80, 0.9)',
  'bx_protean_font_color_grayed_h3' => 'rgba(40, 60, 80, 0.5)',
  'bx_protean_font_color_contrasted_h3' => 'rgba(255, 255, 255, 1)',
  'bx_protean_font_color_link_h3' => 'rgba(30, 150, 250, 0.9)',
  'bx_protean_font_color_link_h3_hover' => 'rgba(30, 150, 250, 1)',
  'bx_protean_styles_custom' => 'div.bx-market-unit-cover div.bx-base-text-unit-no-thumb {
 border-width: 0px;
}',
  'bx_protean_vpt_font_size_scale' => '100%',
  'bx_protean_vpm_font_size_scale' => '100%',
  'bx_persons_autoapproval' => 'on',
  'bx_persons_default_acl_level' => '3',
  'bx_persons_redirect_aadd' => 'profile',
  'bx_persons_redirect_aadd_custom_url' => '',
  'bx_persons_num_connections_quick' => '4',
  'bx_persons_per_page_browse' => '20',
  'bx_persons_num_rss' => '10',
  'bx_persons_searchable_fields' => 'fullname,description',
  'bx_persons_public_subscriptions' => '',
  'bx_persons_public_subscribed_me' => '',
  'bx_organizations_autoapproval' => 'on',
  'bx_organizations_default_acl_level' => '3',
  'bx_organizations_redirect_aadd' => 'profile',
  'bx_organizations_redirect_aadd_custom_url' => '',
  'bx_organizations_num_connections_quick' => '4',
  'bx_organizations_per_page_browse' => '20',
  'bx_organizations_num_rss' => '10',
  'bx_organizations_searchable_fields' => 'org_name,org_desc',
  'bx_organizations_public_subscriptions' => '',
  'bx_organizations_public_subscribed_me' => '',
  'bx_groups_num_connections_quick' => '4',
  'bx_groups_per_page_browse' => '20',
  'bx_groups_num_rss' => '10',
  'bx_groups_searchable_fields' => 'group_name,group_desc',
  'bx_convos_preview_messages_num' => '3',
  'bx_forum_summary_chars' => '700',
  'bx_forum_plain_summary_chars' => '240',
  'bx_forum_per_page_browse' => '10',
  'bx_forum_per_page_index' => '10',
  'bx_forum_per_page_profile' => '10',
  'bx_forum_rss_num' => '10',
  'bx_forum_searchable_fields' => 'title,text',
  'bx_forum_autosubscribe_created' => '',
  'bx_forum_autosubscribe_replied' => '',
  'bx_notifications_events_per_page' => '10',
  'bx_notifications_events_hide' => '',
  'bx_timeline_enable_delete' => 'on',
  'bx_timeline_events_per_page_profile' => '10',
  'bx_timeline_events_per_page_account' => '20',
  'bx_timeline_events_per_page_home' => '20',
  'bx_timeline_events_per_page' => '20',
  'bx_timeline_rss_length' => '5',
  'bx_timeline_events_hide' => '',
  'bx_timeline_chars_display_max' => '300',
  'bx_posts_summary_chars' => '700',
  'bx_posts_plain_summary_chars' => '240',
  'bx_posts_per_page_browse' => '12',
  'bx_posts_per_page_profile' => '3',
  'bx_posts_rss_num' => '10',
  'bx_posts_searchable_fields' => 'title,text',
  'bx_events_num_connections_quick' => '4',
  'bx_events_per_page_browse' => '24',
  'bx_events_num_rss' => '10',
  'bx_events_time_format' => 'H:i',
  'bx_events_short_date_format' => 'j M y',
  'bx_events_searchable_fields' => 'event_name,event_desc',
); ?>
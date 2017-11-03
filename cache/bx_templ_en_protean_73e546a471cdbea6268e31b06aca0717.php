<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->parseSystemKey('page_charset', $mixedKeyWrapperHtml);?>" />
        <title><?php echo $this->parseSystemKey('page_header', $mixedKeyWrapperHtml);?></title>

        <?php echo $this->parseSystemKey('meta_info', $mixedKeyWrapperHtml);?>
	    <?php echo $this->parseSystemKey('page_robots', $mixedKeyWrapperHtml);?>

        <bx_include_css_system />
        <bx_include_css />

        <?php echo $this->parseSystemKey('dol_images', $mixedKeyWrapperHtml);?>
        <?php echo $this->parseSystemKey('dol_lang', $mixedKeyWrapperHtml);?>
        <?php echo $this->parseSystemKey('dol_options', $mixedKeyWrapperHtml);?>

        <bx_include_js_system />
        <bx_include_js />
        <script defer type="text/javascript">
            var sUrlRoot = 'http://localhost/una/';
            var sUrlStudio = 'http://localhost/una/studio/';
            var aSpinnerOpts = {
                lines: 7, // The number of lines to draw
                length: 0, // The length of each line
                width: 8, // The line thickness
                radius: 7, // The radius of the inner circle
                corners: 1, // Corner roundness (0..1)
                rotate: 0, // The rotation offset
                direction: 1, // 1: clockwise, -1: counterclockwise
                color: '#165ea1', // #rgb or #rrggbb or array of colors
                speed: 1, // Rounds per second
                trail: 60, // Afterglow percentage
                shadow: false, // Whether to render a shadow
                hwaccel: false, // Whether to use hardware acceleration
                className: 'bx-sys-spinner', // The CSS class to assign to the spinner
                zIndex: 2e9, // The z-index (defaults to 2000000000)
                top: '50%', // Top position relative to parent in px
                left: '50%' // Left position relative to parent in px
            };
            var aSpinnerSmallOpts = $.extend({}, aSpinnerOpts, {
                lines: 6,
                width: 6,
                radius: 4,
                color: '#333',
                top: '50%',
                left: 'calc(100% - 20px)'
            }); 

			$(document).ready(function () {
				bx_time('<?php echo $this->parseSystemKey('lang', $mixedKeyWrapperHtml);?>');

                bx_activate_anim_icons('#3e8685');
			});
        </script>
        <?php echo $this->parseSystemKey('extra_js', $mixedKeyWrapperHtml);?>

        <?php echo $this->processInjection($this->aPage['name_index'], 'injection_head'); ?>

    </head>

    <body class="bx-def-font bx-def-color-bg-page bx-std-bg<?php echo $this->processInjection($this->aPage['name_index'], 'injection_body_style'); ?>" <?php echo $this->processInjection($this->aPage['name_index'], 'injection_body'); ?> >
        <?php echo $this->processInjection($this->aPage['name_index'], 'injection_header'); ?>


<div class="bx-main">

    <div class="bx-std-page-bg<?php echo $this->processInjection($this->aPage['name_index'], 'injection_bg_style'); ?>">
        <?php echo $this->processInjection($this->aPage['name_index'], 'injection_bg_content'); ?>
    </div>

    <div class="bx-std-page-real">
        <div class="bx-std-page-wide">
            <div class="bx-std-page-wrp">
                <div class="bx-std-page bx-def-page-margin">
                    <?php echo $this->parseSystemKey('menu_top', $mixedKeyWrapperHtml);?>
                    <div class="bx-std-content">

<?php echo $a['page_main_code'];?>
                    </div>
                </div>
            </div>
            <div class="bx-std-cb"></div>
        </div>
    </div>
</div>
       <?php echo $this->parseSystemKey('popup_loading', $mixedKeyWrapperHtml);?>
       <?php echo $this->processInjection($this->aPage['name_index'], 'injection_footer'); ?>
    </body>
</html>
<?php
include($root."functions.php");
connect();
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>emspace</title>

    <link rel="stylesheet" type="text/css" href="../style-projects-jquery.css" />

    <!--slideshow js -->
    <link rel="stylesheet" href="css/basic.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" type="text/css" />
    <link rel="stylesheet" href="css/galleriffic-2.css" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.galleriffic.js"></script>
    <script type="text/javascript" src="js/jquery.opacityrollover.js"></script>
    <!-- We only want the thunbnails to display when javascript is disabled -->
    <script type="text/javascript">
        document.write('<style>.noscript { display: none; }</style>');
    </script>


    <script type="text/javascript">
        jQuery(document).ready(function($) {

            // We only want these styles applied when javascript is enabled
            $('div.navigation').css({'width' : '600px','height':'180px', 'float' : 'left', 'position':'relative', 'left':'45px', 'overflow':'hidden'});
            $('div.content').css('display', 'block');

            // Initially set opacity on thumbs and add
            // additional styling for hover effect on thumbs
            var onMouseOutOpacity = 0.67;
            $('#thumbs ul.thumbs li').opacityrollover({
                mouseOutOpacity:   onMouseOutOpacity,
                mouseOverOpacity:  1.0,
                fadeSpeed:         'fast',
                exemptionSelector: '.selected'
            });

            // Initialize Advanced Galleriffic Gallery
            var gallery = $('#thumbs').galleriffic({
                delay:                     2500,
                numThumbs:                 20,
                preloadAhead:              10,
                enableTopPager:            true,
                enableBottomPager:         false,
                maxPagesToShow:            7,
                imageContainerSel:         '#slideshow',
                controlsContainerSel:      '#controls',
                captionContainerSel:       '#caption',
                loadingContainerSel:       '#loading',
                renderSSControls:          true,
                renderNavControls:         true,
                playLinkText:              'Play Slideshow',
                pauseLinkText:             'Pause Slideshow',
                prevLinkText:              '&lsaquo; Previous Photo',
                nextLinkText:              'Next Photo &rsaquo;',
                nextPageLinkText:          'Next &rsaquo;',
                prevPageLinkText:          '&lsaquo; Prev',
                enableHistory:             false,
                autoStart:                 false,
                syncTransitions:           true,
                defaultTransitionDuration: 900,
                onSlideChange:             function(prevIndex, nextIndex) {
                    // 'this' refers to the gallery, which is an extension of $('#thumbs')
                    this.find('ul.thumbs').children()
                        .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
                        .eq(nextIndex).fadeTo('fast', 1.0);
                },
                onPageTransitionOut:       function(callback) {
                    this.fadeTo('fast', 0.0, callback);
                },
                onPageTransitionIn:        function() {
                    this.fadeTo('fast', 1.0);
                }
            });
        });
    </script>


    <!-- mousewheel plugin -->
    <script src="js/jquery.mousewheel.min.js"></script>
    <!-- custom scrollbars plugin -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
        (function($){
            $(window).load(function(){
                $("#thumbs").mCustomScrollbar({
                    horizontalScroll:true,
                    scrollButtons:{
                        enable:true
                    }

                });
            });
        })(jQuery);
    </script>

</head>

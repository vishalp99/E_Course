
    <script src="<?php echo base_url("resources/user/")?>js/jquery.min.js"></script>
    <script src="<?php echo base_url("resources/user/")?>js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="<?php echo base_url("resources/user/")?>revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("resources/user/")?>revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->  
    <script type="text/javascript" src="<?php echo base_url("resources/user/")?>revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("resources/user/")?>revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("resources/user/")?>revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("resources/user/")?>revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("resources/user/")?>revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("resources/user/")?>revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("resources/user/")?>revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("resources/user/")?>revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("resources/user/")?>revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript">
        var tpj=jQuery;             
        var revapi98;
            tpj(document).ready(function() {
                if(tpj("#rev_slider_98_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_98_1");
                    }else{
                    revapi98 = tpj("#rev_slider_98_1").show().revolution({
                    sliderType:"hero",
                    jsFileLocation:"revolution/js/",
                    sliderLayout:"fullwidth",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                    },
                    responsiveLevels:[1240,1024,778,480],
                    gridwidth:[1240,1024,778,480],
                    gridheight:[600,550,400,300],
                    lazyType:"none",
                    parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                    },
                    shadow:0,
                    spinner:"off",
                    autoHeight:"off",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                    simplifyAll:"off",
                    disableFocusListener:false,
                    }
                });
            }
        }); /*ready*/

        var tpj=jQuery;             
        var revapi98;
            tpj(document).ready(function() {
                if(tpj("#rev_slider_98_2").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_98_2");
                    }else{
                    revapi98 = tpj("#rev_slider_98_2").show().revolution({
                    sliderType:"hero",
                    jsFileLocation:"revolution/js/",
                    sliderLayout:"fullwidth",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                    },
                    responsiveLevels:[1240,1024,778,480],
                    gridwidth:[1240,1024,778,480],
                    gridheight:[400,350,300,300],
                    lazyType:"none",
                    parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                    },
                    shadow:0,
                    spinner:"off",
                    autoHeight:"off",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                    simplifyAll:"off",
                    disableFocusListener:false,
                    }
                });
            }
        }); /*ready*/
    </script>   

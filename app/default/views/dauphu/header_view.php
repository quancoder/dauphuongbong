<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <base href="<?php echo base_url(); ?>" />
        <title><?php echo $title == "" ? $common_lang["title"] : $title ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" itemprop="inLanguage" content="vi"/>
        <link type="image/x-icon" href="<?php echo base_url(); ?>logo.ico" rel="icon" />
        <link type="image/x-icon" href="<?php echo base_url(); ?>logo.ico" rel="shortcut icon" />
        <link href="https://fonts.googleapis.com/css?family=Mali&amp;subset=vietnamese" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="og:title" property="og:title" content="<?php echo $common_lang["metatitle"] ?>">
        <meta name="keywords" content="<?php echo $common_lang['keyword'] ?>" />
        <meta name="description" content="<?php echo $common_lang["description"] ?>" />
        <meta name="robots" content="index,follow,noodp" /><meta name="robots" content="noarchive">
        <meta name="language" content="vietnamese" />

        <!-- bootstrap -->
        <link href="<?php echo base_url() . "skins/" . ltrim(URI_PATH . '/', '/') . $template_f; ?>bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
        
        <script src="<?php echo base_url(); ?>js/<?php echo ltrim(URI_PATH . '/', '/') . $template_f; ?>jquery-3.3.1.min.js"></script>

        <link href="<?php echo base_url() . "skins/" . ltrim(URI_PATH . '/', '/') . $template_f; ?>common.css" rel='stylesheet' type='text/css' media="all" />
        <link href="<?php echo base_url() . "skins/" . ltrim(URI_PATH . '/', '/') . $template_f; ?>style.css" rel='stylesheet' type='text/css' media="all" />
        <link href="<?php echo base_url() . "skins/" . ltrim(URI_PATH . '/', '/') . $template_f; ?>animate.css" rel='stylesheet' type='text/css' media="all" />
        <link href="<?php echo base_url() . "skins/" . ltrim(URI_PATH . '/', '/') . $template_f; ?>phone.css" rel='stylesheet' type='text/css' media="all" />
        
       
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <script src="<?php echo base_url(); ?>js/<?php echo ltrim(URI_PATH . '/', '/') . $template_f; ?>bootstrap.min.js"></script>  
        <script src="<?php echo base_url(); ?>js/<?php echo ltrim(URI_PATH . '/', '/') . $template_f; ?>custom.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/<?php echo ltrim(URI_PATH . '/', '/') . $template_f; ?>wow.js" type="text/javascript"></script>
    </head>
    <body id="style-6">
        
        <div class="mb-box-contact">
            <div class="mb-ct-call btn-contact">
                 <a href="tel:0349525898"><p><i class="fa fa-phone" aria-hidden="true"></i> GỌI NGAY</p></a>
            </div>
            <div class="mb-ct-chat btn-contact">
                <p><i class="fa fa-comments" aria-hidden="true"></i> TRÒ CHUYỆN</p>
            </div>
        </div>
        <div class="nav-header" id="trangchu">
            <div class="box-header-top">
                <div class="container-fluid" style="position: relative;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <a class="scrollmenu" href="#trangchu">
                                <div class="box-logo">
            <!--                        <a href="<?php echo site_url('', $langcode); ?>"><img width="120px" class="logo" title="<?php echo $common_lang['title']; ?>" src="images/<?php echo ltrim(URI_PATH . '/', '/'); ?>logo.png" /></a>-->

            <!--                        <p style="padding-top: 5px"><img width="74px" height="32px" src="images/pot.png" /></p>-->
                                    <p style="padding-top: 8px"><img class="tbllogo" width="50px" height="25px" src="images/pot.png" /> LẨU TẠI NHÀ 24H</p>
                                    <p style="font-size: 18px;color: #f9ff00;"><span class="tblholine">HOTLINE: </span> 0349 525 898</p>
                                </div>
                            </a>    
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 right-menu">
                            <div class="row">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                    <a class="scrollmenu" href="#gioithieu">
                                        <div class="item-munu igt">
                                            <p><i class="fas fa-info-circle"></i> GIỚI THIỆU</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                    <a class="scrollmenu" href="#thucdon">
                                        <div class="item-munu itd">
                                            <p><i class="fas fa-clipboard-list"></i> THỰC ĐƠN</p>
                                        </div>
                                    </a>    
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                    <a class="scrollmenu" href="#tintuc">
                                        <div class="item-munu itt">
                                            <p><i class="fas fa-newspaper"></i> TIN TỨC</p>
                                        </div>
                                    </a>    
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                    <a class="scrollmenu" href="#lienhe">
                                        <div class="item-munu ilh">
                                            <p><i class="fas fa-mail-bulk"></i> LIÊN HỆ</p>
                                        </div>
                                    </a>    
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="container" style="position: relative;display: none">
                    <div class="item-munu item-info">
                        <p>GIỚI THIỆU</p>
                    </div>
                    <div class="item-munu item-menu">
                        <p>THỰC ĐƠN</p>
                    </div>
                    <div class="box-logo">
<!--                        <a href="<?php echo site_url('', $langcode); ?>"><img width="120px" class="logo" title="<?php echo $common_lang['title']; ?>" src="images/<?php echo ltrim(URI_PATH . '/', '/'); ?>logo.png" /></a>-->
                        
<!--                        <p style="padding-top: 5px"><img width="74px" height="32px" src="images/pot.png" /></p>-->
                        <p style="padding-top: 8px"><img class="tbllogo" width="50px" height="25px" src="images/pot.png" /> LẨU TẠI NHÀ 24H</p>
                        <p style="font-size: 18px;color: #ffeb00;"><span class="tblholine">HOTLINE: </span> 0349 525 898</p>
                    </div>
<!--                    <div class="m-box-logo">
                        <p style="padding-top: 8px">LẨU TẠI NHÀ 24H</p>
                        <p style="font-size: 18px;color: #e65236;">0349 525 898</p>
                    </div>-->

                    <div class="item-munu item-news">
                        <p>TIN TỨC</p>
                    </div>

                    <div class="item-munu item-contact">
                        <p>LIÊN HỆ</p>
                    </div>
                </div>    
            </div>
            <img src="images/backg2.jpg" class="img-responsive dk-bg" alt="Cinque Terre" width="100%" height="100%"> 
            <img src="images/BG2.jpg" class="img-responsive mb-bg" alt="Cinque Terre" width="100%" height="100%"> 
            <div class="scroll-mouse">
                <div class="mouse-down">
                    <img src="images/mouse-outline.png" alt="">
                    <span>CUỘN CHUỘT VÀ CẢM NHẬN</span>
                </div>
            </div>
        </div>
        <div class="mb-nav-header">
            <a class="scrollmenu2" href="#trangchu">
                <p class="mb-menu-item mb-itc">
                    <i class="fas fa-home"></i> 
                </p>
            </a>
            <a class="scrollmenu2" href="#gioithieu">
                <p class="mb-menu-item mb-igt">
                    <i class="fas fa-info-circle"></i> 
                </p>
            </a>
            <a class="scrollmenu2" href="#thucdon">
                <p class="mb-menu-item mb-itd">
                    <i class="fas fa-clipboard-list"></i>
                </p>
            </a>
            <a class="scrollmenu2" href="#tintuc">
                <p class="mb-menu-item mb-itt">
                    <i class="fas fa-newspaper"></i>
                </p>
            </a>
            <a class="scrollmenu2" href="#lienhe">
                <p class="mb-menu-item mb-ilh">
                    <i class="fas fa-mail-bulk"></i>
                </p>
            </a>
        </div>
        <script>
        wow = new WOW(
        {
          animateClass: 'animated',
          offset:       100
        }
        );
        wow.init();
        
        $(document).ready(function() {
            $('a.scrollmenu').bind('click', function(e) {
                e.preventDefault(); // prevent hard jump, the default behavior
                var target = $(this).attr("href"); // Set the target as variable

                // perform animated scrolling by getting top-position of target-element and set it as scroll target
                var height_header = $(".box-header-top").height();
                $('html, body').stop().animate({
                        scrollTop: $(target).offset().top - height_header
                }, 800);

                return false;
            });
            
            $('a.scrollmenu2').bind('click', function(e) {
                e.preventDefault(); // prevent hard jump, the default behavior
                var target = $(this).attr("href"); // Set the target as variable

                // perform animated scrolling by getting top-position of target-element and set it as scroll target
                $('html, body').stop().animate({
                        scrollTop: $(target).offset().top
                }, 800);

                return false;
            });
            
            scrollaction();
        });

        $(window).scroll(function() {
            scrollaction();
        });
        
        
        function scrollaction()
        {
            var scrollDistance = $(window).scrollTop();
            var height_header = $(".box-header-top").height();
            var h1 = $(".nav-header").height();
            var h2 = $("#gioithieu").height();
            var h3 = $("#thucdon").height();
            var h4 = $("#tintuc").height();
            
            
            //Mobile
            if(scrollDistance < h1)
            {
                $(".mb-menu-item").removeClass('mb-menu-active');
                $(".mb-itc").addClass('mb-menu-active');
            }
            else
            {
                $(".mb-itc").removeClass('mb-menu-active');
            }
            
            
            // PC 
            if(scrollDistance >= (h1 - height_header - 5))
            {
                $(".item-munu").removeClass('menu-active');
                $(".igt").addClass('menu-active');
            }
            else
            {
                $(".igt").removeClass('menu-active');
            }
            //Mobile
            if(scrollDistance >= h1)
            {
                $(".mb-menu-item").removeClass('mb-menu-active');
                $(".mb-igt").addClass('mb-menu-active');
            }
            else
            {
                $(".mb-igt").removeClass('mb-menu-active');
            }
            
            // PC 
            if(scrollDistance >= (h1 + h2 - height_header))
            {
                $(".item-munu").removeClass('menu-active');
                $(".itd").addClass('menu-active');
            }
            else
            {
                $(".itd").removeClass('menu-active');
            }
            //mobile
            if(scrollDistance >= h1 + h2)
            {
                $(".mb-menu-item").removeClass('mb-menu-active');
                $(".mb-itd").addClass('mb-menu-active');
            }
            else
            {
                $(".mb-itd").removeClass('mb-menu-active');
            }
            
            //PC
            if(scrollDistance >= (h1 + h2 + h3 - height_header))
            {
                $(".item-munu").removeClass('menu-active');
                $(".itt").addClass('menu-active');
            }
            else
            {
                $(".itt").removeClass('menu-active');
            }
            //Mobile
            if(scrollDistance >= (h1 + h2 + h3))
            {
                $(".mb-menu-item").removeClass('mb-menu-active');
                $(".mb-itt").addClass('mb-menu-active');
            }
            else
            {
                $(".mb-itt").removeClass('mb-menu-active');
            }
            if(scrollDistance + $(window).height() >  $(document).height() )
            {
                $(".item-munu").removeClass('menu-active');
                $(".mb-menu-item").removeClass('mb-menu-active');
                $(".ilh").addClass('menu-active');
                $(".mb-ilh").addClass('mb-menu-active');
            }
        }
        </script>
        
        










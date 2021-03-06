<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'link_.php'; ?>
<link rel="stylesheet" href="./asset/unslider/dist/css/unslider.css">
<link href="./asset/css/header_home.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/home.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/special_offer.css" rel="stylesheet" type="text/css" />
<link href="./asset/css/footer.css" rel="stylesheet" type="text/css" />

<style type="text/css">
    body{
        overflow-x: hidden;
        width: 100%;
    }
    .content{
        font-family: Lato;
    }
    .my-slider ul li img{
        height: 708px;
    }
</style>

<script type="text/javascript">

    $(document).ready(function() {
        //var img = document.getElementById('content_home_left_image');
        //var height = img.clientHeight;
        //alert(height);

        document.getElementById("menu_bg").height = "705";
        $("#sofa_text").hover(
            function () {
                $('#content_home_left_image_sofa').attr("src", './asset/image/content/home/sofa.png');
            },
            function () {
                $('#content_home_left_image_sofa').attr("src", './asset/image/content/home/sofa_bw.png');
             }
         );
        $("#op").hover(
            function () {
                $('#our_products').attr("src", './asset/image/header/our_products_active.png');
            },
            function () {
                $('#our_products').attr("src", './asset/image/header/our_products.png');
             }
         );
         $("#ow").hover(
            function () {
                $('#our_works').attr("src", './asset/image/header/our_works_active.png');
            },
            function () {
                $('#our_works').attr("src", './asset/image/header/our_works.png');
            }
        );
        $("#cu").hover(
            function () {
                $('#contact_us').attr("src", './asset/image/header/contact_us_active.png');
            },
            function () {
                $('#contact_us').attr("src", './asset/image/header/contact_us.png');
            }
        );
        $("#stools_text").hover(
            function () {
                $('#content_home_center_image_stools').attr("src", './asset/image/content/home/stool.png');
            },
            function () {
                $('#content_home_center_image_stools').attr("src", './asset/image/content/home/stool_bw.png');
            }
        );
        $("#chair_text").hover(
            function () {
                $('#content_home_center_image_chair').attr("src", './asset/image/content/home/chair.png');
            },
            function () {
                $('#content_home_center_image_chair').attr("src", './asset/image/content/home/chair_bw.png');
            }
        );
    });

    $(document).on('mouseover', 'li', function() {
        var idny = $(this).attr('id');
        var classny = $(this).attr('class');
        if (idny=="wool_material"){
            $('#wool_text').toggleClass("bld");
        }
        if (idny=="cotton_material"){
            $('#cotton_text').toggleClass("bld");
        }
        if (idny=="linen_material"){
            $('#linen_text').toggleClass("bld");
        }
        if (idny=="tweed_material"){
            $('#tweed_text').toggleClass("bld");
        }
        if (idny=="wool_text"){
            $('#wool_icon1').toggleClass("big");
            $('#wool_text').toggleClass("bld");
            $('#span_wool').toggleClass("hide");
        }
        if (idny=="cotton_text"){
            $('#cotton_icon1').toggleClass("big");
            $('#cotton_text').toggleClass("bld");
            $('#span_cotton').toggleClass("hide");
        }
        if (idny=="linen_text"){
            $('#linen_icon1').toggleClass("big");
            $('#linen_text').toggleClass("bld");
            $('#span_linen').toggleClass("hide");
        }
        if (idny=="tweed_text"){
            $('#tweed_icon1').toggleClass("big");
            $('#tweed_text').toggleClass("bld");
            $('#span_tweed').toggleClass("hide");
        }
    });

    $(document).on('mouseout', 'li', function() {
        var idny = $(this).attr('id');
        var classny = $(this).attr('class');
        if (idny=="wool_material"){
            $('#wool_text').toggleClass("bld");
        }
        if (idny=="cotton_material"){
            $('#cotton_text').toggleClass("bld");
        }
        if (idny=="linen_material"){
            $('#linen_text').toggleClass("bld");
        }
        if (idny=="tweed_material"){
            $('#tweed_text').toggleClass("bld");
        }
        if (idny=="wool_text"){
            $('#wool_icon1').toggleClass("big");
            $('#wool_text').toggleClass("bld");
            $('#span_wool').toggleClass("hide");
        }
        if (idny=="cotton_text"){
            $('#cotton_icon1').toggleClass("big");
            $('#cotton_text').toggleClass("bld");
            $('#span_cotton').toggleClass("hide");
        }
        if (idny=="linen_text"){
            $('#linen_icon1').toggleClass("big");
            $('#linen_text').toggleClass("bld");
            $('#span_linen').toggleClass("hide");
        }
        if (idny=="tweed_text"){
            $('#tweed_icon1').toggleClass("big");
            $('#tweed_text').toggleClass("bld");
            $('#span_tweed').toggleClass("hide");
        }
    });

    

   $(document).on('mouseover', 'img', function() {
        var idny = $(this).attr('id');
        var classny = $(this).attr('class');
        if (idny=="main_menu_logo"){
            if (classny==""){
                $('#menu').toggleClass("show");
                $('#menu_bg').toggleClass("show");
                $('#menu_').toggleClass("show");
                $('#main_menu_logo').toggleClass("show");
                $('#main_menu_logo').attr("src", './asset/image/header/main_menu_active.png');
            } else {
                $('#menu').toggleClass("show");
                $('#menu_bg').toggleClass("show");
                $('#menu_').toggleClass("show");
                $('#main_menu_logo').toggleClass("show");
                $('#main_menu_logo').attr("src", './asset/image/header/main_menu.png');
            }
        }
        if (idny=="content_home_left_image_sofa"){
                $('#sofa_text').toggleClass("over");
        }
        if (idny=="content_home_center_image_stools"){
                $('#stools_text').toggleClass("over");
        }
        if (idny=="content_home_center_image_chair"){
                $('#chair_text').toggleClass("over");
        }
    });

   $(document).on('mouseout', 'img', function() {
        var idny = $(this).attr('id');
        if (idny=="content_home_left_image_sofa"){
                $('#sofa_text').toggleClass("over");
        }
        if (idny=="content_home_center_image_stools"){
                $('#stools_text').toggleClass("over");
        }
        if (idny=="content_home_center_image_chair"){
                $('#chair_text').toggleClass("over");
        }
    });

    $(document).on('click', 'img', function() {
        var idny = $(this).attr('id');
        var classny = $(this).attr('class');
        if (idny=="main_menu_logo"){
            if (classny==""){
                $('#menu').toggleClass("show");
                $('#menu_bg').toggleClass("show");
                $('#menu_').toggleClass("show");
                $('#main_menu_logo').toggleClass("show");
                $('#main_menu_logo').attr("src", './asset/image/header/main_menu_active.png');
            } else {
                $('#menu').toggleClass("show");
                $('#menu_bg').toggleClass("show");
                $('#menu_').toggleClass("show");
                $('#main_menu_logo').toggleClass("show");
                $('#main_menu_logo').attr("src", './asset/image/header/main_menu.png');
            }
        }
    });

</script>

</head>
<body>
    <div id="hd" style="overflow: hidden; ">
    <?php include 'header_home.php'; ?>
    </div>
    <div class="content">
        <div class="container">
            <div class="row"></div>
            <div id="content_home_header">
                <p id="content_home_header_title">
                    ABOUT SUVA
                </p>
                <p id="content_home_header_body">
                    Well prepared, original designs
                </p>
                <p id="content_home_header_footer">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div>
    <div id="content_home_products">
        <div class="row">
            <div class="col-xs-4" id="content_home_left_image">
                <!--<img class="img-responsive center-block" src="./asset/image/content/home/sofa.png" id="clr_sofa" />-->
                <img class="img-responsive center-block" src="./asset/image/content/home/sofa_bw.png"
                    onmouseover="this.src='./asset/image/content/home/sofa.png';"
                    onmouseout="this.src='./asset/image/content/home/sofa_bw.png';"
                    id="content_home_left_image_sofa" border="0">
                <p class="content_image_desc_title" id="sofa_text">SOFAS</p>
                <p class="content_image_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-xs-4" id="content_home_center_image">
                <a href="our_product"><p id="our_product_box">
                    OUR PRODUCTS
                </p></a>
                <img class="img-responsive center-block" src="./asset/image/content/home/stool_bw.png"
                onmouseover="this.src='./asset/image/content/home/stool.png';"
                onmouseout="this.src='./asset/image/content/home/stool_bw.png';"
                id="content_home_center_image_stools" border="0">
                <p class="content_image_desc_title" id="stools_text">STOOLS</p>
                <p class="content_image_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-xs-4" id="content_home_right_image">
                <img class="img-responsive center-block" src="./asset/image/content/home/chair_bw.png"
                onmouseover="this.src='./asset/image/content/home/chair.png';"
                onmouseout="this.src='./asset/image/content/home/chair_bw.png';"
                id="content_home_center_image_chair" border="0">
                <p class="content_image_desc_title" id="chair_text">CHAIRS</p>
                <p class="content_image_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
    <div id="content_home_customization">
        <p id="content_home_costumization_title">CUSTOMIZATION</p>
        <p id="content_home_costumization_header">Built to fit your style and your life</p>
        <p id="content_home_costumization_body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="contact_us"><p id="content_home_costumization_footer">CONTACT US</p></a>
    </div>

    <p id="content_home_material_title">CHOSE YOUR MATERIAL</p>
    <div class="image_list_choose_material">
        <ul>
            <li id="arrow_left">
                <img src="./asset/image/content/home/left_icon.png" id="left_arrow_icon" class="arrow_logo" />
            </li>
            <li id="wool_material">
                <img src="./asset/image/content/home/wool.png" id="wool_icon" class="material_logo"/>
                <span id="span_wool"></span>
                <img src="./asset/image/content/home/wool.png" id="wool_icon1" class="material_logo1"/>
            </li>
            <li id="cotton_material">
                <img src="./asset/image/content/home/cotton.png" id="cotton_icon" class="material_logo"/>
                <span id="span_cotton"></span>
                <img src="./asset/image/content/home/cotton.png" id="cotton_icon1" class="material_logo1"/>
            </li>
            <li id="linen_material">
                <img src="./asset/image/content/home/linen.png" id="linen_icon" class="material_logo" />
                <span id="span_linen"></span>
                <img src="./asset/image/content/home/linen.png" id="linen_icon1" class="material_logo1" />
            </li>
            <li id="tweed_material">
                <img src="./asset/image/content/home/tweed.png" id="tweed_icon" class="material_logo" />
                <span id="span_tweed"></span>
                <img src="./asset/image/content/home/tweed.png" id="tweed_icon1" class="material_logo1" />
            </li>
            <li id="arrow_right">
                <img src="./asset/image/content/home/right_icon.png" id="right_arrow_icon" class="arrow_logo" />
            </li>
        </ul>
    </div>
    <div class="image_list_choose_material_text">
        <ul>
            <li id="wool_text">WOOL</li>
            <li id="cotton_text">COTTON</li>
            <li id="linen_text">LINEN</li>
            <li id="tweed_text">TWEED</li>
        </ul>
    </div>
    <img class="img-responsive block" src="./asset/image/content/home/sofa_customization-m_.png" id="content_home_customization_image" border="0" />
    <!--<div id="content_home_material">
        <p id="content_home_material_title">CHOSE YOUR MATERIAL</p>
        <div class="image_list_choose_material">
            <ul>
                <li>
                    <img src="./asset/image/content/home/wool.png" id="wool_icon" class="material_logo"/>
                    <span></span>
                </li>
                <li>
                    <img src="./asset/image/content/home/wool.png" id="wool_icon" class="material_logo"/>
                    <span></span>
                </li>
            </ul>
        </div>
        <div id="content_home_choose_material">
            <div class="row">
                <div class="col-xs-1"><img src="./asset/image/content/home/left_icon.png" id="left_arrow_icon" class="arrow_logo" /></div>
                <div class="col-xs-1" id="material_wool">
                    <img src="./asset/image/content/home/wool.png" id="wool_icon" class="material_logo" />
                    <span></span>
                    <p id="material_text1" class="material_text">WOOL</p>
                </div>
                <div class="col-xs-1" id="material_cotton">
                    <img src="./asset/image/content/home/cotton.png" id="cotton_icon" class="material_logo" />
                    <span></span>
                    <p id="material_text2" class="material_text">COTTON</p>
                </div>
                <div class=col-xs-1 id="material_linen">
                    <img src="./asset/image/content/home/linen.png" id="linen_icon" class="material_logo" />
                    <span></span>
                    <p id="material_text3" class="material_text">LINEN</p>
                </div>
                <div class=col-xs-1 id="material_tweed">
                    <img src="./asset/image/content/home/tweed.png" id="tweed_icon" class="material_logo" />
                    <span></span>
                    <p id="material_text4" class="material_text">TWEED</p>
                </div>
                <div class="col-xs-1"><img src="./asset/image/content/home/right_icon.png" id="right_arrow_icon" class="arrow_logo" /></div>
            </div>
        </div>
        <div id="content_home_customization_sofa_image">
            <img class="img-responsive block" src="./asset/image/content/home/sofa_customization-m.png" id="content_home_customization_image" border="0" />
        </div>
    </div>-->
    <?php include 'v_special_offer.php'; ?>
    <?php include 'v_footer.php'; ?>

    <script src="./asset/js/jquery-2.1.4.min.js"></script>
    <script src="./asset/unslider/src/js/unslider.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $('.my-slider').unslider({
                keys: false,
                autoplay: true,
                delay: 3500,
                arrows: false,
                nav: false
            });
        });
    </script>

</body>
</html>

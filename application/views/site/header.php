<link type="text/css" href="<?php echo public_url()?>/js/jquery/autocomplete/css/smoothness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />  
<script type="text/javascript" src="<?php echo public_url()?>/js/jquery/autocomplete/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript">
    $(function() {
        $( "#text-search" ).autocomplete({
            source: "<?php echo site_url('product/search/1') ?>",
        });
    });
</script>
<section id="header-top">
    <div class="container">
        <div class="row">
            <div id="sp-main-menu-top" class="col-xs-3 col-sm-1 col-md-8">
                <div class="sp-column ">
                    <div class="sp-module horizontal-menu-dev">
                        <div class="sp-module-content">
                            <div id="container_menu_13700365671522916855" class="sambar layout1" data-sam="13700365671522916855">
                                <div class="sambar-inner menu_horizontal">
                                    <div style="background-color: #444444" class="sj-megamenu  fullpage horizontal-menu-dev sj-megamenu-hover" data-jsapi="on">
                                        <ul class="sj-megamenu-parent menu-fade sj-megamenu-horizontal hidden-sm hidden-xs">
                                            <li class="sj-menu-item item-554 level-1 mega-left">
                                                <a href="<?php echo base_url() ?>"><i class="fa fa-map-marker" aria-hidden="true"></i>　Bản Đồ</a>
                                            </li>
                                        </ul>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sp-top2" class="col-xs-2 col-sm-3 col-md-2">
                <div class="sp-column ">
                    <div class="sp-module horizontal-menu-dev">
                        <div class="sp-module-content">
                            <div id="container_menu_13700365671522916855" class="sambar layout1" data-sam="13700365671522916855">
                                <div class="sambar-inner menu_horizontal">
                                    <div style="background-color: #444444" class="sj-megamenu  fullpage horizontal-menu-dev sj-megamenu-hover" data-jsapi="on">
                                        <div id="sp-cart" class="">
                                            <div class="sp-column ">
                                                <div class="sp-module my-cart">
                                                    <div class="sp-module-content">
                                                        <div id="jshop_module_cart">
                                                            <a href="<?php echo base_url('cart')?>">
                                                                <strong class="title-my-cart">Giỏ hàng</strong>
                                                                <span class="count-item">
                                                                    <b><?php echo $total_items ?> SP</b>
                                                                </span>
                                                                <span class="price">
                                                                    <?php echo number_format($total) ?>đ        
                                                                </span>
                                                            </a>
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
                </div>
            </div>

            <div id="sp-top2" class="col-xs-7 col-sm-8 col-md-2">
                <div class="sp-column ">
                    <div class="sp-module horizontal-menu-dev">
                        <div class="sp-module-content">
                            <div id="container_menu_13700365671522916855" class="sambar layout1" data-sam="13700365671522916855">
                                <div class="sambar-inner menu_horizontal">
                                    <div style="background-color: #444444" class="sj-megamenu  fullpage horizontal-menu-dev sj-megamenu-hover" data-jsapi="on">
                                        <ul class="sj-megamenu-parent menu-fade sj-megamenu-horizontal hidden-sm hidden-xs">
                                            <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('dang-ky') ?>">Đăng Kí</a></li>
                                            <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('dang-nhap') ?>">Đăng Nhập</a></li>
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
</section>



<section id="sp-header-top">
    <div class="container">
        <div class="row">
            <div id="sp-logo" class="col-xs-6 col-sm-12 col-md-3">
                <div class="sp-column ">
                    <h1 class="logo">
                        <a href="<?php echo base_url() ?>">
                            <img width="150px" height="50px" class="sp-default-logo" src="<?php echo public_url('site/images/vietkas.png') ?>" alt="Mua Hàng OnLine | Shop đa thời trang cao cấp | Giảm ngay 30% khi mua sản phẩm">
                        </a>
                    </h1>
                </div>
            </div>
            <div id="sp-top1" class="col-xs-12 col-sm-9 col-md-9 hidden-xs">
                <div class="sp-column ">
                    <div class="sp-module ">
                        <div class="sp-module-content">
                            <div class="custom">
                                <ul class="list-serviser">
                                    <li class="item pull-right">
                                        <div class="content">
                                            <ul>
                                                <div class="sp-column ">
                                                    <div class="sp-module jshopping-search">
                                                        <div class="sp-module-content">
                                                            <script type="text/javascript">
                                                                function isEmptyValue(value){
                                                                    var pattern = /\S/;
                                                                    return ret = (pattern.test(value)) ? (true) : (false);
                                                                }
                                                            </script>
                                                            <form class="form-inline mod-shop-search" name="searchForm" method="get" action="<?php echo base_url('product/search') ?>">
                                                                <input style="width: 250px;" type="text" placeholder="Nhập tên sản phẩm cần tìm" id="text-search" name="key-search" value="<?php echo isset($key) ? $key : "" ?>">
                                                                <input class="button btn" type="submit" value="Go">
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <ul class="sp-contact-info"></ul>
                                                </div>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="sp-header-bottom">
    <div class="container">
        <div class="row">
            <div id="sp-main-menu" class="col-xs-3 col-sm-1 col-md-8">
                <div class="sp-column ">
                    <div class="sp-module horizontal-menu-dev">
                        <div class="sp-module-content">
                            <div id="container_menu_13700365671522916855" class="sambar layout1" data-sam="13700365671522916855">
                                <div class="sambar-inner menu_horizontal">
                                    <a class="btn-sambar" id="container_menu_13700365671522916855trigger" data-sapi="collapse" href="javascript:void(0)">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </a>
                                    <div style="background-color: #444444" class="sj-megamenu  fullpage horizontal-menu-dev sj-megamenu-hover" data-jsapi="on">
                                        <ul class="sj-megamenu-parent menu-fade sj-megamenu-horizontal hidden-sm hidden-xs">
                                            <li class="sj-menu-item item-554 level-1 mega-left">
                                                <a href="<?php echo base_url() ?>">Trang chủ</a>
                                            </li>
                                            <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('gioi-thieu') ?>">Giới Thiệu</a></li>
                                            <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('san-pham') ?>">Sản Phẩm</a></li>
                                            <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('tin-tuc') ?>">Tin Tức</a></li>
                                            <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('lien-he') ?>">Liên Hệ</a></li>
                                        </ul>    
                                    </div>
                                <div class="offcanvas-overlay"></div>
                                <div class="offcanvas-overlay"></div>
                                <div class="offcanvas-menu menu_fullpage" id="container_menu_13700365671522916855sj-pusher">
                                    <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
                                    <div class="offcanvas-inner">
                                    <ul class="nav menu">
                                        <li class="sj-menu-item item-554 level-1 mega-left">
                                            <a href="<?php echo base_url() ?>">Trang chủ</a>
                                        </li>
                                        <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('gioi-thieu') ?>">Giới Thiệu</a></li>
                                        <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('san-pham') ?>">Sản Phẩm</a></li>
                                        <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('tin-tuc') ?>">Tin Tức</a></li>
                                        <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('lien-he') ?>">Liên Hệ</a></li>
                                    </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                            jQuery(document).ready(function($) {
                            })
                            </script>
                            <script type="text/javascript">
                                jQuery(document).ready(function($) {
                                    $('<div class="offcanvas-overlay"></div>').insertBefore('#container_menu_13700365671522916855 .offcanvas-menu');
                                    $(document).on('click', '#container_menu_13700365671522916855 a.btn-sambar', function (event) {
                                        if ($(this).parent('.sambar-inner').hasClass('offcanvas')) {
                                            $(this).parent('.sambar-inner').removeClass('offcanvas');
                                        }
                                        else {
                                        $(this).parent('.sambar-inner').removeClass('offcanvas').addClass('offcanvas');
                                        }
                                        if ($('body').hasClass('js-close-any')) {
                                            $('body').removeClass('js-close-any')
                                            $(this).parent('.sambar-inner').find('.offcanvas-overlay').removeClass('opened');
                                        }
                                        else {
                                            $('body').removeClass('js-close-any').addClass('js-close-any');
                                            $(this).parent('.sambar-inner').find('.offcanvas-overlay').removeClass('opened').addClass('opened');
                                        }
                                    });
                                    $(document).on('click', '.close-offcanvas, .offcanvas-overlay', function(event) {
                                        event.preventDefault();
                                        $('.sambar-inner').removeClass('offcanvas');
                                        $('body').removeClass('offcanvas');
                                        $('.offcanvas-overlay').removeClass('opened');            
                                    });
                                    // Close any
                                    $( document ).on( 'click', '.js-close-any', function ( event ) {
                                        $('.btn-sambar').removeClass('open');
                                        $('body').removeClass('js-close-any');
                                        $('body').removeClass('offcanvas');
                                        $('.sambar-inner').removeClass('offcanvas');
                                        $('.offcanvas-overlay').removeClass('opened');      
                                    })
                                });
                            </script>
                            <script type="text/javascript">
                                jQuery(document).ready(function($) {
                                    var window_w = $(window).width();
                                    $('#container_menu_13700365671522916855 .sj-megamenu').each(function() {
                                        var $menu = $(this);
                                        var clearMenus = function( el ){
                                            var parents = $(el).parents();
                                            $menu.find('.actived').not(parents).not(el).each( function(){
                                            $(this).removeClass('actived');
                                            $(this).children('.sj-dropdown').slideUp(0);
                                            });
                                        };
                                        if(window_w <= 980) {
                                            $('.sj-menu-item > a', $menu).click( function(e){
                                                e.preventDefault();
                                                $parent = $(this).parent();           
                                                $sub = $(this).next();            
                                                clearMenus($parent);
                                                $parent.toggleClass('actived');
                                                
                                                if($parent.hasClass('actived')){
                                                    $sub.stop().animate( { height: "show", "opacity" : "1" }, 150, 'easeInOutCirc' );
                                                }else{
                                                    $sub.stop().animate( { height: "hide", "opacity" : "0" }, 150, 'easeInOutCirc' );
                                                }
                                                return false;
                                            });
                                        }
                                        else {
                                            $( '.sj-menu-item', $menu ).hover(function(){
                                                $parent = $(this);
                                                $sub = $(this).children('.sj-dropdown');
                                                $parent.removeClass('actived').addClass('actived');
                                                if( $parent.hasClass('actived') && !$(this).hasClass('mega-pinned') ){
                                                    $sub.stop().animate( { height: "show", "opacity" : "1" }, 150, 'easeInOutCirc' );
                                                }
                                            }).mouseleave(function(){
                                                $parent = $(this);
                                                $sub = $(this).children('.sj-dropdown');
                                                $(this).removeClass('actived');
                                                if( !$(this).hasClass('mega-pinned') ){
                                                    $sub.stop().animate( { height: "hide", "opacity" : "0" }, 150, 'easeInOutCirc' );
                                                }
                                            });
                                            return false;
                                        }
                                    })
                                })
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sp-top2" class="col-xs-9 col-sm-11 col-md-4">
            
            </div>
        </div>
    </div>
</section>


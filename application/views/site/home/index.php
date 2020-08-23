<section id="sp-main-body">
    <div class="row">
        <div id="sp-component" class="col-sm-12 col-md-12">
            <div class="sp-column ">
                <div id="sp-page-builder" class="sp-page-builder home-page page-8">
                    <div class="page-content">
                        <section id="yt_slideshow" class="sppb-section  padding-5px" >
                            <div class="sppb-row-container" >
                                <div class="sppb-row" >
                                    <div class="sppb-col-md-3" >
                                        <div class="sppb-addon-container ">
                                            <div class="clearfix">
                                                <div class="sppb-addon sppb-addon-module ">
                                                    <div class="sppb-addon-content">
                                                        <div id="container_menu" class="sambar layout1">
                                                            <div class="sambar-inner menu_vertical">
                                                                <a class="btn-sambar" data-sapi="collapse" href="javascript:void(0)">
                                                                    <span class="icon-bar"></span>
                                                                    <span class="icon-bar"></span>
                                                                    <span class="icon-bar"></span>
                                                                </a>
                                                                <h3 class="title-mod">
                                                                    <i class="fa fa-align-left" aria-hidden="true"></i>Danh Mục Sản Phẩm
                                                                </h3>
                                                                <div style="background-color: #ffffff; " class="sj-megamenu  menu-slide-down dropdown  sj-megamenu-hover" data-jsapi="on" >
                                                                    <ul class="sj-megamenu-parent menu-fade sj-megamenu-vertical hidden-sm hidden-xs col-md-3" style="float: left;">
                                                                        <?php foreach($catalog_list as $row) : ?>
                                                                        <?php 
                                                                            $name = convert_vi_to_en($row->name); 
                                                                            $name = strtolower($name);
                                                                        ?>
                                                                        <li class="sj-menu-item sj-has-<?php  if(!empty($row->subs)) echo 'child'; else echo "";?>  item-584 level-1 mega-left ">
                                                                            <a href="<?php echo base_url($name.'-c'.$row->id) ?>" title="<?=$row->name?>">
                                                                                <img src="<?php echo public_url('site/images/icon1.png')?>" alt="<?=$row->name?>">
                                                                                <span class="subtitle"><?=$row->name?></span>
                                                                            </a>
                                                                            <?php  if(!empty($row->subs)) : ?>
                                                                            <div class="sj-dropdown sj-dropdown-main sj-dropdown-mega sj-menu-right" style="width: 540px; background-color: rgb(255, 255, 255); top: 0px; left: auto; right: -540px;">
                                                                                <div class="sj-dropdown-inner">
                                                                                    <div class="sj-megamenu-row">
                                                                                        <div class="sj-megamenu-col-sm-12">
                                                                                            <div class="sp-module ">
                                                                                                <div class="sp-module-content">
                                                                                                    <div class="custom">
                                                                                                        <ul class="custom-vertical-1">
                                                                                                            <?php foreach($row->subs as $sub) : ?>  
                                                                                                            <?php 
                                                                                                                $name = convert_vi_to_en($sub->name); 
                                                                                                                $name = strtolower($name);
                                                                                                            ?>  
                                                                                                            <li class="item">
                                                                                                                <div class="img">
                                                                                                                    <img src="<?php echo public_url('site/images/v3.png') ?>" alt="Banner"></div>
                                                                                                                <div class="content">
                                                                                                                    <h3 class="title">
                                                                                                                        <a title="" href="<?php echo base_url($name.'-c'.$sub->id) ?>" title="<?= $sub->name ?>"><?= $sub->name ?></a>
                                                                                                                    </h3>
                                                                                                                    <span class="des"><?php echo mb_substr($sub->site_title,0,100,'utf8').'...'; ?></span> 
                                                                                                                </div>
                                                                                                            </li>
                                                                                                            <?php endforeach?>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <?php endif?>
                                                                        </li>
                                                                        <?php endforeach ?>
                                                                    </ul>
                                                                </div>
                                                                <div class="offcanvas-menu menu_dropdown">
                                                                    <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
                                                                    <div class="offcanvas-inner">
                                                                        <ul class="nav menu">
                                                                            <?php foreach($catalog_list as $row) : ?>
                                                                                <?php 
                                                                                    $name = convert_vi_to_en($row->name); 
                                                                                    $name = strtolower($name);
                                                                                ?>
                                                                                <li class="item"><a href="<?php echo base_url($name.'-c'.$row->id) ?>" title="<?=$row->name?>"><?=$row->name?></a></li>
                                                                            <?php endforeach?>
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
                                    <div class="sppb-col-md-6" style="float:left;">
                                        <?php 
                                            $this->load->view('site/slide.php', $this->data);
                                        ?>
                                    </div>
                                    <!-- <div class="sppb-col-md-3" >
                                        
                                    </div> -->
                                </div>
                            </div>
                        </section>

                        



                        <section id="scoll2" class="sppb-section ">
                            <div class="sppb-row-container">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#description" aria-controls="home" role="tab" data-toggle="tab">Nội dung</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#other" aria-controls="messages" role="tab" data-toggle="tab">Khác</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="description">
                                        <div class="sppb-row">
                                            <div class="sppb-col-md-12">
                                                <div class="sppb-addon-container">
                                                    <div class="clearfix">
                                                        <div class="sppb-addon sppb-addon-module listing-tab-dev color1">
                                                            <div class="sppb-addon-content">
                                                                <h3 class="sppb-addon-title">
                                                                    <span>Sản Phẩm Mới Nhất</span>
                                                                </h3>
                                                                <div id="product_new" class="sj-responsive-listing">
                                                                    <div class="respl-wrap cf">
                                                                        <div class="respl-items respl01-5 respl02-4 respl03-3 respl04-2 grid cf  module-158 isotope">
                                                                            <?php foreach($product_newest as $row) : ?>
                                                                            <div class="respl-item  category-1 isotope-item">
                                                                                <div class="item-inner">
                                                                                    <div class="item-image cf">
                                                                                        <a class="img" href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                            <img src="<?php echo base_url('/upload/product/'.$row->image_link)?>" alt="<?=$row->name?>" title="<?=$row->name?>">                  
                                                                                        </a>
                                                                                        <a class="addtocart" href="<?php echo site_url('cart/add/'.$row->id)?>">
                                                                                            Mua ngay          
                                                                                        </a>
                                                                                        <?php if($row->discount > 0) :?>
                                                                                            <span class="sale">
                                                                                                Sale              
                                                                                            </span>
                                                                                        <?php endif?>
                                                                                    </div>
                                                                                    <div class="item-info">
                                                                                        <h3 class="item-title ">
                                                                                            <a href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                                <?=$row->name?>                              
                                                                                            </a>
                                                                                        </h3>
                                                                                        <div class="main-price">
                                                                                            <div class="item-price">
                                                                                                <span class="price"><?php if($row->discount > 0) :?>
                                                                                                <?php $price_new = $row->price - $row->discount; ?>
                                                                                                <?php echo number_format($price_new) ?>đ <span class="old-price"><?php echo number_format($row->price) ?> đ</span>
                                                                                                <?php else : ?>
                                                                                                    <?php echo number_format($row->price) ?>đ
                                                                                                <?php endif ?>
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="price-sale">
                                                                                                <span class="num">Lượt Xem</span>
                                                                                                <span class="text"><b><?=$row->view?></b></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <?php endforeach?>
                                                                        </div>
                                                                        <div class="respl-loader respl-btn ">
                                                                            <a class="respl-button" href="<?php echo base_url('san-pham')?>">
                                                                                <span class="loader-image"></span>
                                                                                <span class="loader-label">
                                                                                    Xem thêm sản phẩm               
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="other">
                                        <div class="sppb-row">
                                            <div class="sppb-col-md-12">
                                                <div class="sppb-addon-container">
                                                    <div class="clearfix">
                                                        <div class="sppb-addon sppb-addon-module listing-tab-dev color1">
                                                            <div class="sppb-addon-content">
                                                                <h3 class="sppb-addon-title">
                                                                    <span>Sản Phẩm Mới Nhất</span>
                                                                </h3>
                                                                <div id="product_new" class="sj-responsive-listing">
                                                                    <div class="respl-wrap cf">
                                                                        <div class="respl-items respl01-5 respl02-4 respl03-3 respl04-2 grid cf  module-158 isotope">
                                                                            <?php foreach($product_newest as $row) : ?>
                                                                            <div class="respl-item  category-1 isotope-item">
                                                                                <div class="item-inner">
                                                                                    <div class="item-image cf">
                                                                                        <a class="img" href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                            <img src="<?php echo base_url('/upload/product/'.$row->image_link)?>" alt="<?=$row->name?>" title="<?=$row->name?>">                  
                                                                                        </a>
                                                                                        <a class="addtocart" href="<?php echo site_url('cart/add/'.$row->id)?>">
                                                                                            Mua ngay          
                                                                                        </a>
                                                                                        <?php if($row->discount > 0) :?>
                                                                                            <span class="sale">
                                                                                                Sale              
                                                                                            </span>
                                                                                        <?php endif?>
                                                                                    </div>
                                                                                    <div class="item-info">
                                                                                        <h3 class="item-title ">
                                                                                            <a href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                                <?=$row->name?>                              
                                                                                            </a>
                                                                                        </h3>
                                                                                        <div class="main-price">
                                                                                            <div class="item-price">
                                                                                                <span class="price"><?php if($row->discount > 0) :?>
                                                                                                <?php $price_new = $row->price - $row->discount; ?>
                                                                                                <?php echo number_format($price_new) ?>đ <span class="old-price"><?php echo number_format($row->price) ?> đ</span>
                                                                                                <?php else : ?>
                                                                                                    <?php echo number_format($row->price) ?>đ
                                                                                                <?php endif ?>
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="price-sale">
                                                                                                <span class="num">Lượt Xem</span>
                                                                                                <span class="text"><b><?=$row->view?></b></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <?php endforeach?>
                                                                        </div>
                                                                        <div class="respl-loader respl-btn ">
                                                                            <a class="respl-button" href="<?php echo base_url('san-pham')?>">
                                                                                <span class="loader-image"></span>
                                                                                <span class="loader-label">
                                                                                    Xem thêm sản phẩm               
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="clear"></div>
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
                        </section>
                                





                        <!-- <section id="scoll2" class="sppb-section ">
                            <div class="sppb-row-container">
                                <div class="sppb-row">
                                    <div class="sppb-col-md-12">
                                        <div class="sppb-addon-container">
                                            <div class="clearfix">
                                                <div class="sppb-addon sppb-addon-module listing-tab-dev color1">
                                                    <div class="sppb-addon-content">
                                                        <h3 class="sppb-addon-title">
                                                            <span>Sản Phẩm Mới Nhất</span>
                                                        </h3>
                                                        <div id="product_new" class="sj-responsive-listing">
                                                            <div class="respl-wrap cf">
                                                                <div class="respl-items respl01-5 respl02-4 respl03-3 respl04-2 grid cf  module-158 isotope" style="position: relative; height: 1217px; overflow: visible;">
                                                                    <?php foreach($product_newest as $row) : ?>
                                                                    <div class="respl-item  category-1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                                                                        <div class="item-inner">
                                                                            <div class="item-image cf">
                                                                                <a class="img" href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                    <img src="<?php echo base_url('/upload/product/'.$row->image_link)?>" alt="<?=$row->name?>" title="<?=$row->name?>">                  
                                                                                </a>
                                                                                <a class="addtocart" href="<?php echo site_url('cart/add/'.$row->id)?>">
                                                                                    Mua ngay          
                                                                                </a>
                                                                                <?php if($row->discount > 0) :?>
                                                                                    <span class="sale">
                                                                                        Sale              
                                                                                    </span>
                                                                                <?php endif?>
                                                                            </div>
                                                                            <div class="item-info">
                                                                                <h3 class="item-title ">
                                                                                    <a href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                        <?=$row->name?>                              
                                                                                    </a>
                                                                                </h3>
                                                                                <div class="main-price">
                                                                                    <div class="item-price">
                                                                                        <span class="price"><?php if($row->discount > 0) :?>
                                                                                        <?php $price_new = $row->price - $row->discount; ?>
                                                                                        <?php echo number_format($price_new) ?>đ <span class="old-price"><?php echo number_format($row->price) ?> đ</span>
                                                                                        <?php else : ?>
                                                                                            <?php echo number_format($row->price) ?>đ
                                                                                        <?php endif ?>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="price-sale">
                                                                                        <span class="num">Lượt Xem</span>
                                                                                        <span class="text"><b><?=$row->view?></b></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php endforeach?>
                                                                </div>
                                                                <div class="respl-loader respl-btn ">
                                                                    <a class="respl-button" href="<?php echo base_url('san-pham')?>">
                                                                        <span class="loader-image"></span>
                                                                        <span class="loader-label">
                                                                            Xem thêm sản phẩm               
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="clear"></div>
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
                        </section> -->
                        <!-- <section id="scoll3" class="sppb-section ">
                            <div class="sppb-row-container">
                                <div class="sppb-row">
                                    <div class="sppb-col-md-12">
                                        <div class="sppb-addon-container">
                                            <div class="clearfix">
                                                <div class="sppb-addon sppb-addon-module listing-tab-dev color2">
                                                    <div class="sppb-addon-content">
                                                        <h3 class="sppb-addon-title"><span>Sản Phẩm Đươc Mua Nhiều Nhất</span></h3>
                                                        <div id="product_buy_more" class="sj-responsive-listing">
                                                            <div class="respl-wrap cf">
                                                                <div class="mains row">
                                                                    <div class="pretext">
                                                                        <ul class="list-banner">
                                                                            <li><a href="#" title=""><img src="<?php echo public_url('site/images/banner5.jpg')?>" alt=""></a></li>
                                                                            <li><a href="#" title=""><img src="<?php echo public_url('site/images/banner6.jpg')?>" alt=""></a></li>
                                                                        </ul>      
                                                                    </div>
                                                                    <div class="respl-items respl01-4 respl02-3 respl03-2 respl04-2 grid cf  module-159 isotope" style="position: relative; height: 770px; overflow: visible;">
                                                                        <?php foreach($product_buyed as $row) : ?>
                                                                        <div class="respl-item  category-1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                                                                            <div class="item-inner">
                                                                                <div class="item-image cf">
                                                                                    <a class="img" href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                        <img src="<?php echo base_url('/upload/product/'.$row->image_link)?>" alt="<?=$row->name?>" title="<?=$row->name?>">                  
                                                                                    </a>
                                                                                    <a class="addtocart" href="<?php echo site_url('cart/add/'.$row->id)?>">
                                                                                        Mua ngay          
                                                                                    </a>
                                                                                    <?php if($row->discount > 0) :?>
                                                                                        <span class="sale">
                                                                                            Sale              
                                                                                        </span>
                                                                                    <?php endif?>
                                                                                </div>
                                                                                <div class="item-info">
                                                                                    <h3 class="item-title ">
                                                                                        <a href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                        <?=$row->name?>                              
                                                                                        </a>
                                                                                    </h3>
                                                                                    <div class="main-price">
                                                                                        <div class="item-price">
                                                                                            <span class="price">
                                                                                                <?php if($row->discount > 0) :?>
                                                                                                    <?php $price_new = $row->price - $row->discount; ?>
                                                                                                    <?php echo number_format($price_new) ?>đ 
                                                                                                    <span class="old-price"><?php echo number_format($row->price) ?> đ</span>
                                                                                                <?php else : ?>
                                                                                                    <?php echo number_format($row->price) ?>đ
                                                                                                <?php endif ?>
                                                                                            </span>
                                                                                        </div>
                                                                                        <div class="price-sale">
                                                                                            <span class="num">Lượt Xem</span>
                                                                                            <span class="text"><b><?=$row->view?></b></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php endforeach?>
                                                                    </div>
                                                                </div>
                                                                <div class="respl-loader respl-btn ">
                                                                    <a class="respl-button" href="<?php base_url('san-pham') ?>">
                                                                    <span class="loader-image"></span>
                                                                    <span class="loader-label">
                                                                        Xem thêm sản phẩm                   
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> -->
                        <section id="scoll4" class="sppb-section ">
                            <div class="sppb-row-container">
                                <div class="sppb-row">
                                    <div class="sppb-col-md-12">
                                        <div class="sppb-addon-container">
                                            <div class="clearfix">
                                                <div class="sppb-addon sppb-addon-module listing-tab-dev color3">
                                                    <div class="sppb-addon-content">
                                                        <h3 class="sppb-addon-title">
                                                            <span>Thời trang nam</span>
                                                        </h3>
                                                        <div id="product_view_more" class="sj-responsive-listing">    
                                                            <div class="respl-wrap cf">
                                                                <div class="mains row">
                                                                    <div class="respl-items respl01-4 respl02-3 respl03-2 respl04-2 grid cf  module-160 isotope" style="position: relative; height: 804px; overflow: visible;">
                                                                        <?php foreach($product_view as $row) : ?>
                                                                        <div class="respl-item  category-1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                                                                            <div class="item-inner">
                                                                                <div class="item-image cf">
                                                                                    <a class="img" href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                        <img src="<?php echo base_url('/upload/product/'.$row->image_link)?>" alt="<?=$row->name?>" title="<?=$row->name?>">                  
                                                                                    </a>
                                                                                    <a class="addtocart" href="<?php echo site_url('cart/add/'.$row->id)?>">
                                                                                        Mua ngay          
                                                                                    </a>
                                                                                    <?php if($row->discount > 0) :?>
                                                                                        <span class="sale">
                                                                                            Sale              
                                                                                        </span>
                                                                                    <?php endif?>
                                                                                </div>
                                                                                <div class="item-info">
                                                                                    <h3 class="item-title ">
                                                                                        <a href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                        <?=$row->name?>                              
                                                                                        </a>
                                                                                    </h3>
                                                                                    <div class="main-price">
                                                                                        <div class="item-price">
                                                                                            <span class="price">
                                                                                                <?php if($row->discount > 0) :?>
                                                                                                    <?php $price_new = $row->price - $row->discount; ?>
                                                                                                    <?php echo number_format($price_new) ?>đ 
                                                                                                    <span class="old-price"><?php echo number_format($row->price) ?> đ</span>
                                                                                                <?php else : ?>
                                                                                                    <?php echo number_format($row->price) ?>đ
                                                                                                <?php endif ?>
                                                                                            </span>
                                                                                        </div>
                                                                                        <div class="price-sale">
                                                                                            <span class="num">Lượt Xem</span>
                                                                                            <span class="text"><b><?=$row->view?></b></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php endforeach?>
                                                                    </div>
                                                                    <div class="pretext">
                                                                        <ul class="list-banner">
                                                                            <li>
                                                                                <a href="#" title=""><img src="<?php echo public_url('site/images/banner7.jpg')?>" alt=""></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" title=""><img src="<?php echo public_url('site/images/banner8.jpg')?>" alt=""></a>
                                                                            </li>
                                                                        </ul>      
                                                                    </div>
                                                                </div>
                                                                <div class="respl-loader respl-btn ">
                                                                    <a class="respl-button" href="<?php echo base_url('san-pham') ?>">
                                                                        <span class="loader-image"></span>
                                                                        <span class="loader-label">
                                                                            Xem thêm sản phẩm                   
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="clear"></div>
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
                        <section id="scoll5" class="sppb-section ">
                            <div class="sppb-row-container">
                                <div class="sppb-row">
                                    <div class="sppb-col-md-12">
                                        <div class="sppb-addon-container">
                                            <div class="clearfix">
                                                <div class="sppb-addon sppb-addon-module listing-tab-dev color4">
                                                    <div class="sppb-addon-content">
                                                        <h3 class="sppb-addon-title">
                                                            <span>Hàng điện tử kỹ thuật số</span>
                                                        </h3>
                                                        <div id="product_hot" class="sj-responsive-listing">
                                                            <div class="respl-wrap cf">
                                                                <div class="respl-items respl01-5 respl02-4 respl03-3 respl04-2 grid cf  module-161 isotope" style="position: relative; height: 400px; overflow: visible;">
                                                                    <?php foreach($product_view as $row) : ?>
                                                                    <div class="respl-item  category-1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                                                                        <div class="item-inner">
                                                                            <div class="item-image cf">
                                                                                <a class="img" href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                    <img src="<?php echo base_url('/upload/product/'.$row->image_link)?>" alt="<?=$row->name?>" title="<?=$row->name?>">
                                                                                </a>
                                                                                <a class="addtocart" href="<?php echo site_url('cart/add/'.$row->id)?>">
                                                                                    Mua ngay          
                                                                                </a>
                                                                                <?php if($row->discount > 0) :?>
                                                                                    <span class="sale">
                                                                                        Sale              
                                                                                    </span>
                                                                                <?php endif?>
                                                                            </div>
                                                                            <div class="item-info">
                                                                                <h3 class="item-title ">
                                                                                    <a href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                            <?=$row->name?>                              
                                                                                    </a>
                                                                                </h3>
                                                                                <div class="main-price">
                                                                                    <div class="item-price">
                                                                                        <span class="price">
                                                                                            <?php if($row->discount > 0) :?>
                                                                                                <?php $price_new = $row->price - $row->discount; ?>
                                                                                                <?php echo number_format($price_new) ?>đ <span class="old-price"><?php echo number_format($row->price) ?> đ</span>
                                                                                            <?php else : ?>
                                                                                                <?php echo number_format($row->price) ?>đ
                                                                                            <?php endif ?>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="price-sale">
                                                                                        <span class="num">Lượt Xem</span>
                                                                                        <span class="text"><b><?=$row->view?></b></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php endforeach?>
                                                                </div>
                                                                <div class="banner-bottom">
                                                                    <ul class="list-banner">
                                                                        <li><a href="#" title=""><img src="<?php echo public_url('site/images/banner9.jpg')?>" alt=""></a></li>
                                                                        <li><a href="#" title=""><img src="<?php echo public_url('site/images/banner10.jpg')?>" alt=""></a></li>
                                                                    </ul>   
                                                                </div>
                                                                <div class="respl-loader respl-btn ">
                                                                    <a class="respl-button" href="<?php echo base_url('san-pham') ?>">
                                                                        <span class="loader-image"></span>
                                                                        <span class="loader-label">
                                                                            Xem thêm sản phẩm                   
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="clear"></div>
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
                        <section class="sppb-section">
                            <div class="sppb-row-container">
                                <div class="sppb-row">
                                    <div class="sppb-col-md-4">
                                        <div class="sppb-addon-container">
                                            <div class="clearfix">
                                                <div class="sppb-addon sppb-addon-module si-extraslider-dev style2-dev color1">
                                                    <div class="sppb-addon-content">
                                                        <h3 class="sppb-addon-title">
                                                            <span>Túi xách thời trang</span>
                                                        </h3>    
                                                        <div class="sj-extraslider style2-dev slide preset02-1" data-start-jcarousel="1">
                                                            <div class="extraslider-inner">
                                                                <div class="item active">
                                                                    <div class="line">
                                                                        <?php foreach ($product_newest as $row): ?>
                                                                        <div class="item-wrap style2 last ">
                                                                            <div class="item-image">
                                                                                <a href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                    <img src="<?php echo base_url('/upload/product/'.$row->image_link)?>" alt="<?=$row->name?>" title="<?=$row->name?>">      
                                                                                </a>   
                                                                            </div>
                                                                            <div class="item-info">
                                                                                <h3 class="item-title">
                                                                                    <a href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                        <?=$row->name?>               
                                                                                    </a>               
                                                                                </h3>
                                                                                <div class="item-content">                     
                                                                                    <div class="main-price">
                                                                                        <div class="item-price">
                                                                                            <span class="price">
                                                                                                <?php if($row->discount > 0) :?>
                                                                                                    <?php $price_new = $row->price - $row->discount; ?>
                                                                                                    <?php echo number_format($price_new) ?>đ <span class="old-price"><?php echo number_format($row->price) ?> đ</span>
                                                                                                <?php else : ?>
                                                                                                    <?php echo number_format($row->price) ?>đ
                                                                                                <?php endif ?>
                                                                                            </span>
                                                                                        </div>
                                                                                        <div class="price-sale">
                                                                                        <span class="num">Lược Xem</span>
                                                                                        <span class="text"><b><?=$row->view?></b></span>
                                                                                    </div>
                                                                                </div>                                   
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                    <?php endforeach ?>
                                                                    <div class="respl-loader respl-btn " style="width:100%; text-align: center;">
                                                                        <a class="respl-button" style="background: #6fbf1d; color: #fff;line-height:50px; padding:10px"  href="<?php echo base_url('san-pham') ?>">
                                                                            <span class="loader-image"></span>
                                                                            <span class="loader-label">
                                                                                Xem thêm sản phẩm                   
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div><!--line-->
                                                            </div><!--end item--> 
                                                        </div><!--end extraslider-inner -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sppb-col-md-4">
                                    <div class="sppb-addon-container">
                                        <div class="clearfix">
                                            <div class="sppb-addon sppb-addon-module si-extraslider-dev style2-dev color2">
                                                <div class="sppb-addon-content">
                                                    <h3 class="sppb-addon-title"><span>Mỹ phẩm</span></h3>    
                                                        <div class="sj-extraslider style2-dev slide preset02-1" data-start-jcarousel="1">
                                                            <div class="extraslider-inner">
                                                                <div class="item active">
                                                                    <div class="line">
                                                                        <?php foreach ($product_buyed as $row): ?>
                                                                        <div class="item-wrap style2 last ">
                                                                            <div class="item-image">
                                                                                <a href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                    <img src="<?php echo base_url('/upload/product/'.$row->image_link)?>" alt="<?=$row->name?>" title="<?=$row->name?>">      
                                                                                </a>   
                                                                            </div>
                                                                            <div class="item-info">
                                                                                <h3 class="item-title">
                                                                                    <a href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                    <?=$row->name?>               
                                                                                    </a>               
                                                                                </h3>
                                                                                <div class="item-content">                     
                                                                                    <div class="main-price">
                                                                                        <div class="item-price">
                                                                                            <span class="price">
                                                                                                <?php if($row->discount > 0) :?>
                                                                                                    <?php $price_new = $row->price - $row->discount; ?>
                                                                                                    <?php echo number_format($price_new) ?>đ <span class="old-price"><?php echo number_format($row->price) ?> đ</span>
                                                                                                <?php else : ?>
                                                                                                    <?php echo number_format($row->price) ?>đ
                                                                                                <?php endif ?>
                                                                                            </span>
                                                                                        </div>
                                                                                        <div class="price-sale">
                                                                                            <span class="num">Lược Xem</span>
                                                                                            <span class="text"><b><?=$row->view?></b></span>
                                                                                        </div>
                                                                                    </div>                                   
                                                                                </div>
                                                                            </div>
                                                                        </div> 
                                                                        <?php endforeach ?>
                                                                        <div class="respl-loader respl-btn " style="width:100%; text-align: center;">
                                                                            <a class="respl-button" style="background: #6fbf1d; color: #fff;line-height:50px; padding:10px"  href="<?php echo base_url('san-pham') ?>">
                                                                                <span class="loader-image"></span>
                                                                                <span class="loader-label">
                                                                                Xem thêm sản phẩm                   
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div><!--line-->                           
                                                                </div><!--end item--> 
                                                            </div><!--end extraslider-inner -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sppb-col-md-4">
                                        <div class="sppb-addon-container">
                                            <div class="clearfix">
                                                <div class="sppb-addon sppb-addon-module si-extraslider-dev style2-dev color3">
                                                    <div class="sppb-addon-content">
                                                        <h3 class="sppb-addon-title">
                                                            <span>Đồng hồ thời trang</span>
                                                        </h3>    
                                                        <div id="watch_style" class="sj-extraslider style2-dev slide preset02-1" data-start-jcarousel="1">          
                                                            <div class="extraslider-control  button-type2">
                                                                <a class="button-prev" href="#watch_style" data-jslide="prev">
                                                                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                                                                </a>
                                                                <a class="button-next" href="#watch_style" data-jslide="next">
                                                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                </a>
                                                            </div>
                                                            <div class="extraslider-inner">
                                                                <div class="item active">
                                                                    <div class="line">
                                                                        <?php foreach ($product_view as $row): ?>
                                                                        <div class="item-wrap style2 last ">
                                                                            <div class="item-image">
                                                                                <a href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                    <img src="<?php echo base_url('/upload/product/'.$row->image_link)?>" alt="<?=$row->name?>" title="<?=$row->name?>">      
                                                                                </a>   
                                                                            </div>
                                                                            <div class="item-info">
                                                                                <h3 class="item-title">
                                                                                    <a href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                                                                                        <?=$row->name?>               
                                                                                    </a>               
                                                                                </h3>
                                                                                <div class="item-content">                     
                                                                                    <div class="main-price">
                                                                                        <div class="item-price">
                                                                                            <span class="price">
                                                                                                <?php if($row->discount > 0) :?>
                                                                                                    <?php $price_new = $row->price - $row->discount; ?>
                                                                                                    <?php echo number_format($price_new) ?>đ <span class="old-price"><?php echo number_format($row->price) ?> đ</span>
                                                                                                <?php else : ?>
                                                                                                    <?php echo number_format($row->price) ?>đ
                                                                                                <?php endif ?>
                                                                                            </span>
                                                                                        </div>
                                                                                        <div class="price-sale">
                                                                                            <span class="num">Lược Xem</span>
                                                                                            <span class="text"><b><?=$row->view?></b></span>
                                                                                        </div>
                                                                                    </div>                                   
                                                                                </div>
                                                                            </div>
                                                                        </div> 
                                                                        <?php endforeach ?>
                                                                        <div class="respl-loader respl-btn " style="width:100%; text-align: center;">
                                                                            <a class="respl-button" style="background: #6fbf1d; color: #fff;line-height:50px; padding:10px"  href="<?php echo base_url('san-pham') ?>">
                                                                                <span class="loader-image"></span>
                                                                                <span class="loader-label">
                                                                                    Xem thêm sản phẩm                   
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div><!--line-->              
                                                                </div><!--end item-->                              
                                                            </div><!--end extraslider-inner -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="block-scoll" class="sppb-section ">
                            <div class="sppb-row-container">
                                <div class="sppb-row">
                                    <div class="sppb-col-md-12">
                                        <div class="sppb-addon-container">
                                            <div class="clearfix">
                                                <div class="sppb-addon sppb-addon-module ">
                                                    <div class="sppb-addon-content">
                                                        <div class="custom">
                                                            <ul class="list-info-service">
                                                                <li class="item">
                                                                    <div class="icon">
                                                                        <img src="<?php echo public_url('site/images/s1.png')?>" alt="">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3>GIAO HÀNG TOÀN QUỐC</h3>
                                                                        <p>Miễn phí từ 2 sản phẩm</p>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="icon">
                                                                        <img src="<?php echo public_url('site/images/t2.png')?>" alt="">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3>THANH TOÁN NHẬN HÀNG</h3>
                                                                        <p>Trả tiền khi nhận hàng</p>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="icon">
                                                                        <img src="<?php echo public_url('site/images/t3.png')?>" alt="">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3>7 NGÀY ĐỔI HÀNG</h3>
                                                                        <p>Có thể đổi sản phẩm khác</p>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="icon">
                                                                        <img src="<?php echo public_url('site/images/t4.png')?>" alt="">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3>HOTLINE</h3>
                                                                        <p>Mr. Luật - 0169.377.9225</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sppb-hidden-sm sppb-hidden-xs clearfix">
                                                <div class="sppb-addon sppb-addon-module ">
                                                    <div class="sppb-addon-content">
                                                        <div class="custom">
                                                            <ul class="list-scoll" style="margin-left:40px;">
                                                                <li class="item-scoll scoll2">
                                                                    <a href="#scoll2">
                                                                        <span class="text" style="width:100px;">Mới Nhất</span>
                                                                    </a>
                                                                </li>
                                                                <li class="item-scoll scoll3">
                                                                    <a href="#scoll3">  
                                                                        <span class="text" style="width:150px;">Mua Nhiều Nhất</span>
                                                                    </a>
                                                                </li>
                                                                <li class="item-scoll scoll4">
                                                                    <a href="#scoll4">
                                                                        <span class="text" style="width:150px;">Xem Nhiều Nhất</span>
                                                                    </a>
                                                                </li>
                                                                <li class="item-scoll scoll5">
                                                                    <a href="#scoll5">
                                                                        <span class="text" style="width:150px;">Đồ Điện Tử</span>
                                                                    </a>
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
                        </section>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>



<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#container_menu .menu_vertical .sj-megamenu-vertical .sj-dropdown.sj-menu-left').each(function(){
            $(this).css('top', '0px');  
            $(this).css('right', 'auto'); 
            $(this).css('left', '-'+$(this).outerWidth()+'px');
        });
        $('#container_menu .menu_vertical .sj-megamenu-vertical .sj-dropdown.sj-menu-right').each(function() {
            $(this).css('top', '0px');
            $(this).css('left', 'auto');
            $(this).css('right', '-'+$(this).outerWidth()+'px');
        });
    })
</script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(document).on('click', '#container_menu a.btn-sambar', function (event) {
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
        $('ul.nav li.parent .touch-button').on('click', function(e) {
            if ($(this).hasClass('opened')) {
                $(this).removeClass('opened');
            }
            else {
                $(this).removeClass('opened').addClass('opened');
            }
            $sub = $(this).parent('li.parent').find('>ul');
            if ($sub.hasClass('flexnav-show') === true) {
                $sub.removeClass('flexnav-show').slideUp(250);
            }
            else {
                $sub.addClass('flexnav-show').slideDown(250);
            }
            return false;
        })
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function($){
        ;(function(element){
            var $respl = $(element);
            var $container = $('.respl-items', $respl);
            $('.item-image img.respl-nophoto', $respl).parent().parent().addClass('respl-nophoto');
            var $loadding = $('.respl-loading',$respl);
            $respl.removeClass('pre-load');
            $loadding.remove();  
            var sortdef = $('.sort-inner', $respl).attr('data-curr_value');
            var filterdef = $('.respl-cat', $respl).filter('.sel').children().attr('data-rl_value');
            $('.sort-curr',$respl).attr('data-filter_value',filterdef);
            $('.sort-curr',$respl).html($('.respl-cat', $respl).filter('.sel').children().html());
            // add randomish size classes
            $container.imagesLoaded( function(){
                $container.isotope({
                    containerStyle: {
                        position: 'relative',
                        height: 'auto',
                        overflow: 'visible'
                    },
                    itemSelector : '.respl-item',
                    filter: filterdef,
                    sortBy : sortdef,
                    layoutMode: 'fitRows',
                    sortAscending: true,
                });
            });
           
        })('.sj-responsive-listing');
    });
</script>
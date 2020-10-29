<div class='row'>
    <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 pad dotted-style-qc'>
        <div class='single-tab-img'>
            <a href='#'><img src='https://demo1013.web30s.vn/datafiles/4751/upload/images/14992450121864_banner_trai.jpg' alt='mở rộng 1 - không xài' /></a>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6  col-xs-12 pad dv-home-sptieubieu">
        <div class='single-product pt-30 pb-20 white-bg glo-trang-thai-sp'>
            <div class='product-img pb-40'>
                <?php 
                    $name = convert_vi_to_en($product_newest[0]->name); 
                    $name = strtolower($name);
                ?>
                <a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[0]->id?>.html" title="<?=$product_newest[0]->name?>">
                    <img src="<?php echo base_url('/upload/product/'.$product_newest[0]->image_link)?>" alt="<?=$product_newest[0]->name?>" title="<?=$product_newest[0]->name?>" />
                </a>
            </div>
            <div class='product-content'>
                <div class='pro-title'>
                    <h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[0]->id?>.html" title="<?=$product_newest[0]->name?>"><?=$product_newest[0]->name?></a></h4>
                </div>
                <div class='price-box'>
                    <?php if($product_newest[0]->discount > 0) :?>
                        <?php $price_new = $product_newest[0]->price - $product_newest[0]->discount; ?>
                        <span class="price product-price"><?php echo number_format($product_newest[0]->price) ?> <sup> đ</sup>&nbsp;</span>
                        <span class='product-price product-price-km'><?php echo number_format($price_new) ?> <sup> đ</sup></span>
                    <?php else : ?>
                        <span class='product-price product-price-km'><?php echo number_format($product_newest[0]->price) ?> <sup> đ</sup></span>
                    <?php endif ?>
                </div>
                <div class='product-icon'>
                    <div class='product-icon-left f-left'>
                        <a href='<?php echo site_url('cart/add/'.$product_newest[0]->id)?>'><i class='fa fa-shopping-cart'></i>Đặt mua</a>
                    </div>
                    <!-- <div class='product-icon-right floatright'>
                        <a class='cur' onclick='SOSANH_sp("2403199","add","LIÊN HỆ","Sản phẩm đã được thêm vào so sánh!","Đã thêm đủ số lượng sản phẩm cần so sánh")'><i class='fa fa-exchange'></i></a>
                    </div> -->
                </div>
            </div>
        </div>          
    </div>
    <div class="col-lg-4 col-md-4 padd-2 col-sm-12  col-xs-12 dotted-style-1 dotted-style-danhsach">
        <div class="tab-product-active">

            <?php foreach($product_newest as $key=>$row) : ?>
                <?php 
                    $name = convert_vi_to_en($row->name); 
                    $name = strtolower($name);
                ?>
                <?php if($key % 2 == 0 && $key > 0) :?>
                <div class='together-single-product glo-trang-thai-sp'>
                    <div class='single-product white-bg'>
                        <div class='product-img product-container-img'>
                            <a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key-1]->id?>.html" title="<?=$product_newest[$key-1]->name?>">
                                <img src="<?php echo base_url('/upload/product/'.$product_newest[$key-1]->image_link)?>" alt="<?=$product_newest[$key-1]->name?>" title="<?=$product_newest[$key-1]->name?>" />
                            </a>
                        </div>
                        <div class='product-content product-i'>
                            <div class='pro-title'>
                                <h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key-1]->id?>.html" title="<?=$product_newest[$key-1]->name?>"><?=$product_newest[$key-1]->name?></a></h4>
                            </div>
                            <div class='price-box'>
                                <?php if($product_newest[$key-1]->discount > 0) :?>
                                    <?php $price_new = $product_newest[$key-1]->price - $product_newest[$key-1]->discount; ?>
                                    <span class="price product-price"><?php echo number_format($product_newest[$key-1]->price) ?> <sup> đ</sup>&nbsp;</span>
                                    <span class='product-price product-price-km'><?php echo number_format($price_new) ?> <sup> đ</sup></span>
                                <?php else : ?>
                                    <span class='product-price product-price-km'><?php echo number_format($product_newest[$key-1]->price) ?> <sup> đ</sup></span>
                                <?php endif ?>
                            </div>
                            <div class='product-icon'>
                                <div class='product-icon-left f-left'>
                                    <a href='<?php echo site_url('cart/add/'.$product_newest[$key-1]->id)?>'><i class='fa fa-shopping-cart'></i>Đặt mua</a>
                                </div>
                                <!-- <div class='product-icon-right floatright'>
                                    <a class='cur' onclick='SOSANH_sp("2403200","add","LIÊN HỆ","Sản phẩm đã được thêm vào so sánh!","Đã thêm đủ số lượng sản phẩm cần so sánh")'><i class='fa fa-exchange'></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class='single-product white-bg'>
                        <div class='product-img product-container-img'>
                            <a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key-1]->id?>.html" title="<?=$product_newest[$key-1]->name?>">
                                <img src="<?php echo base_url('/upload/product/'.$product_newest[$key]->image_link)?>" alt="<?=$product_newest[$key]->name?>" title="<?=$product_newest[$key]->name?>" />
                            </a>
                        </div>
                        <div class='product-content product-i'>
                            <div class='pro-title'>
                                <h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key-1]->id?>.html" title="<?=$product_newest[$key-1]->name?>"><?=$product_newest[$key]->name?></a></h4>
                            </div>
                            <div class='price-box'>
                                <?php if($product_newest[$key]->discount > 0) :?>
                                    <?php $price_new = $product_newest[$key]->price - $product_newest[$key]->discount; ?>
                                    <span class="price product-price"><?php echo number_format($product_newest[$key]->price) ?> <sup> đ</sup>&nbsp;</span>
                                    <span class='product-price product-price-km'><?php echo number_format($price_new) ?> <sup> đ</sup></span>
                                <?php else : ?>
                                    <span class='product-price product-price-km'><?php echo number_format($product_newest[$key]->price) ?> <sup> đ</sup></span>
                                <?php endif ?>
                            </div>
                            <div class='product-icon'>
                                <div class='product-icon-left f-left'>
                                    <a href='<?php echo site_url('cart/add/'.$product_newest[$key]->id)?>'><i class='fa fa-shopping-cart'></i>Đặt mua</a>
                                </div>
                                <!-- <div class='product-icon-right floatright'>
                                    <a class='cur' onclick='SOSANH_sp("2403200","add","LIÊN HỆ","Sản phẩm đã được thêm vào so sánh!","Đã thêm đủ số lượng sản phẩm cần so sánh")'><i class='fa fa-exchange'></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>  
                <?php endif ?>
            <?php endforeach?>
        </div>
    </div>
</div>
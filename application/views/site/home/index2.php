<div class="col-lg-4 col-md-4 col-sm-6  col-xs-12 pad dv-home-sptieubieu">
    <div class='single-product pt-30 pb-20 white-bg glo-trang-thai-sp'>
        <div class='product-img pb-40'>
            <a href="<?php echo base_url('product/view/'.$product_buyed[0]->id)?>" title="<?=$product_buyed[0]->name?>">
                <img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_buyed[0]->image_link)?>" alt="<?=$product_buyed[0]->name?>" title="<?=$product_buyed[0]->name?>" />
            </a>
        </div>
        <div class='product-content'>
            <div class='pro-title'>
                <h4><a href="<?php echo base_url('product/view/'.$product_buyed[0]->id)?>" title="<?=$product_buyed[0]->name?>"><?=$product_buyed[0]->name?></a></h4>
            </div>
            <div class='price-box'>
                <?php if($product_buyed[0]->discount > 0) :?>
                    <?php $price_new = $product_buyed[0]->price - $product_buyed[0]->discount; ?>
                    <span class="price product-price"><?php echo number_format($product_buyed[0]->price) ?> <sup> đ</sup>&nbsp;</span>
                    <span class='product-price product-price-km'><?php echo number_format($price_new) ?> <sup> đ</sup></span>
                <?php else : ?>
                    <span class='product-price product-price-km'><?php echo number_format($product_buyed[0]->price) ?> <sup> đ</sup></span>
                <?php endif ?>
            </div>
            <div class='product-icon'>
                <div class='product-icon-left f-left'>
                    <a href='<?php echo site_url('cart/add/'.$product_buyed[0]->id)?>'><i class='fa fa-shopping-cart'></i>Đặt mua</a>
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

        <?php foreach($product_buyed as $key=>$row) : ?>
            <?php if($key % 2 == 0 && $key > 0) :?>
            <div class='together-single-product glo-trang-thai-sp'>
                <div class='single-product white-bg'>
                    <div class='product-img product-container-img'>
                        <a href="<?php echo base_url('product/view/'.$product_buyed[$key-1]->id)?>" title="<?=$product_buyed[$key-1]->name?>">
                            <img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_buyed[$key-1]->image_link)?>" alt="<?=$product_buyed[$key-1]->name?>" title="<?=$product_buyed[$key-1]->name?>" />
                        </a>
                    </div>
                    <div class='product-content product-i'>
                        <div class='pro-title'>
                            <h4><a href="<?php echo base_url('product/view/'.$product_buyed[$key-1]->id)?>" title="<?=$product_buyed[$key-1]->name?>"><?=$product_buyed[$key-1]->name?></a></h4>
                        </div>
                        <div class='price-box'>
                            <?php if($product_buyed[$key-1]->discount > 0) :?>
                                <?php $price_new = $product_buyed[$key-1]->price - $product_buyed[$key-1]->discount; ?>
                                <span class="price product-price"><?php echo number_format($product_buyed[$key-1]->price) ?> <sup> đ</sup>&nbsp;</span>
                                <span class='product-price product-price-km'><?php echo number_format($price_new) ?> <sup> đ</sup></span>
                            <?php else : ?>
                                <span class='product-price product-price-km'><?php echo number_format($product_buyed[$key-1]->price) ?> <sup> đ</sup></span>
                            <?php endif ?>
                        </div>
                        <div class='product-icon'>
                            <div class='product-icon-left f-left'>
                                <a href='<?php echo site_url('cart/add/'.$product_buyed[$key-1]->id)?>'><i class='fa fa-shopping-cart'></i>Đặt mua</a>
                            </div>
                            <!-- <div class='product-icon-right floatright'>
                                <a class='cur' onclick='SOSANH_sp("2403200","add","LIÊN HỆ","Sản phẩm đã được thêm vào so sánh!","Đã thêm đủ số lượng sản phẩm cần so sánh")'><i class='fa fa-exchange'></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class='single-product white-bg'>
                    <div class='product-img product-container-img'>
                        <a href="<?php echo base_url('product/view/'.$product_buyed[$key]->id)?>" title="<?=$product_buyed[$key]->name?>">
                            <img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_buyed[$key]->image_link)?>" alt="<?=$product_buyed[$key]->name?>" title="<?=$product_buyed[$key]->name?>" />
                        </a>
                    </div>
                    <div class='product-content product-i'>
                        <div class='pro-title'>
                            <h4><a href="<?php echo base_url('product/view/'.$product_buyed[$key]->id)?>" title="<?=$product_buyed[$key]->name?>"><?=$product_buyed[$key]->name?></a></h4>
                        </div>
                        <div class='price-box'>
                            <?php if($product_buyed[$key]->discount > 0) :?>
                                <?php $price_new = $product_buyed[$key]->price - $product_buyed[$key]->discount; ?>
                                <span class="price product-price"><?php echo number_format($product_buyed[$key]->price) ?> <sup> đ</sup>&nbsp;</span>
                                <span class='product-price product-price-km'><?php echo number_format($price_new) ?> <sup> đ</sup></span>
                            <?php else : ?>
                                <span class='product-price product-price-km'><?php echo number_format($product_buyed[$key]->price) ?> <sup> đ</sup></span>
                            <?php endif ?>
                        </div>
                        <div class='product-icon'>
                            <div class='product-icon-left f-left'>
                                <a href='<?php echo site_url('cart/add/'.$product_buyed[$key]->id)?>'><i class='fa fa-shopping-cart'></i>Đặt mua</a>
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
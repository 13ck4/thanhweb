<article>
	<section class="content gallery pad1" style="padding:0">
		<div class="midle_main_idclass fix1200_cus1">
			<div class="main">
				<div class="content_top">
					<div class="container">
						<div class="dv-child-one-style">
                            <div class="dv-child-left">
                                <h3>Kết Quả Tìm Kiếm Với Từ Khóa <b style="color: red;"> <?= $key ?></b></h3>
                                <div class="dv-sp-cont dm_sanpham">
                                    <!-- <div class="breadcrumb">
                                    </div> -->
                                    <div class="row">
                                        <?php foreach($list as $row) : ?>
                                            <?php 
                                                $name = convert_vi_to_en($row->name); 
                                                $name = strtolower($name);
                                            ?>
                                            <div class="single-product  white-bg dv-danhsach-sp">
                                                <div class="product-img pt-20">
                                                    <a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$row->id?>.html" title="<?=$row->name?>">
                                                        <img style="width: 100%; height:100%;" src="<?php echo base_url('/upload/product/'.$row->image_link)?>" alt="<?=$row->name?>" title="<?=$row->name?>">
                                                    </a>
                                                </div>
                                                <div class="product-content product-i">
                                                    <div class="pro-title">
                                                        <h4>
                                                            <a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$row->id?>.html" title="<?=$row->name?>">
                                                                <?=$row->name?>                     
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <?php if($row->discount > 0) :?>
                                                            <?php $price_new = $row->price - $row->discount; ?>
                                                            <span class="price product-price"><?php echo number_format($row->price) ?> <sup> đ</sup>&nbsp;</span>
                                                            <span class='product-price product-price-km'><?php echo number_format($price_new) ?> <sup> đ</sup></span>
                                                        <?php else : ?>
                                                            <span class='product-price product-price-km'><?php echo number_format($row->price) ?> <sup> đ</sup></span>
                                                        <?php endif ?>
                                                    </div>
                                                    <div class="product-icon">
                                                        <div class="product-icon-left f-left">
                                                            <a href='<?php echo site_url('cart/add/'.$row->id)?>'><i class='fa fa-shopping-cart'></i>Đặt mua</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach?>
                                        <div class="page_break page_break_cus1"></div>                
                                    </div>
                                    <div class="clear"></div> 
                                </div>
                            </div>
                            <div class="dv-child-right">
								<?php $this->load->view('site/left.php');?>
							</div>	      
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>				
		</div>
	</section>
</article>
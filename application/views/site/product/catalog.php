<?php 
    $price_from_select = isset($price_from) ? intval($price_from) : 0;
    $price_to_select = isset($price_to) ? intval($price_to) : 0;
?>
<article>
	<section class="content gallery pad1" style="padding:0">
		<div class="midle_main_idclass fix1200_cus1">
			<div class="main">
				<div class="content_top">
					<div class="container">
						<div class="dv-child-one-style">
							<div class="dv-child-left">
								<h3>Danh Sách Sản Phẩm</h3>
								

                                <div class="dv-sp-cont dm_sanpham">
                                    
                                    <div class="breadcrumb w30s__filter-top">
                                        <div class="left">
                                            <div class="left global_ss global_ss_cus1">Chủ đề</div>
                                            <!-- <div class="boxselect left">
                                                <form class="t-form form_action" method="get" style="padding:10px" action="<?php echo site_url('product/search_price')?>" name="search">
                                                    <div class="form-row">
                                                        <label for="param_price_from" class="form-label" style="width:70px">Giá từ:<span class="req">*</span></label>
                                                            <div class="form-item" style="width:90px">
                                                                <select class="input" id="price_from" name="price_from">
                                                                    <?php for($i = 0;$i <= 5000000; $i=$i+1000000 )  : ?>
                                                                    <option <?php echo ($price_from_select == $i) ? 'selected' : "" ?> value="<?=$i?>">
                                                                        <?= number_format($i) ?>đ
                                                                    </option>
                                                                    <?php endfor ?>
                                                                </select>
                                                                <div class="clear"></div>
                                                                <div class="error" id="price_from_error"></div>
                                                            </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="form-row">
                                                        <label for="param_price_from" class="form-label" style="width:70px">Giá tới:<span class="req">*</span></label>
                                                            <div class="form-item" style="width:90px">
                                                                <select class="input" id="price_to" name="price_to">
                                                                <?php for($i = 1000000;$i <= 50000000; $i=$i+1000000 )  : ?>
                                                                    <option <?php echo ($price_to_select == $i) ? 'selected' : "" ?> value="<?=$i?>">
                                                                        <?= number_format($i) ?>đ
                                                                    </option>
                                                                    <?php endfor ?>
                                                                </select>
                                                                <div class="clear"></div>
                                                            <div class="error" id="price_from_error"></div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    
                                                    <div class="form-row">
                                                        <label class="form-label">&nbsp;</label>
                                                        <div class="form-item">
                                                            <input type="submit" class="button" name="search" value="Tìm kiềm" style="height:30px !important;line-height:30px !important;padding:0px 10px !important">
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </form> 
                                            </div> -->
                                        </div>
                                        <form class="t-form form_action" method="get" style="padding:10px" action="<?php echo site_url('product/search_price')?>" name="search">
                                            <div class="left marginleft20">
                                                <div class="left global_ss global_ss_cus1">Sắp xếp</div>
                                                <div class="boxselect left">
                                                    <select class="todoselect" id="price_from" name="price_from">
                                                        <?php for($i = 0;$i <= 5000000; $i=$i+1000000 )  : ?>
                                                            <option <?php echo ($price_from_select == $i) ? 'selected' : "" ?> value="<?=$i?>">
                                                                <?= number_format($i) ?>đ
                                                            </option>
                                                        <?php endfor ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="left marginleft20 marginright20">
                                                <div class="left global_ss global_ht_cus1">Hiển thị</div>
                                                <div class="boxselect left">
                                                    <select class="todoselect" id="price_to" name="price_to">
                                                        <?php for($i = 1000000;$i <= 50000000; $i=$i+1000000 )  : ?>
                                                            <option <?php echo ($price_to_select == $i) ? 'selected' : "" ?> value="<?=$i?>">
                                                                <?= number_format($i) ?>đ
                                                            </option>
                                                        <?php endfor ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="submit" class="button" value="Tìm kiềm" style="height:30px !important;line-height:30px !important;padding:0px 10px !important">
                                        </form>
                                            <!-- <div class="right">
                                            <div class="left global_ss global_xe_cus1">Kiểu xem</div>
                                            <div class="left global_viewlist global_viewlist_cus1">
                                                <a href="https://demo1013.web30s.vn/Phu-kien-cong-nghe-390861/?viewby=1&amp;sortby=&amp;numby=100" class="a_view_sp a_view_sp_cus1 " title="Danh sách"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
                                                <a href="https://demo1013.web30s.vn/Phu-kien-cong-nghe-390861/?viewby=0&amp;sortby=&amp;numby=100" class="a_view_sp a_view_sp_cus1 active" title="Lưới"><i class="fa fa-th-large"></i></a>

                                            </div>
                                        </div> -->
                                        <div class="clear"></div>
                                    </div>
                                    <?php foreach($list as $row) : ?>
                                        <?php 
                                            $name = convert_vi_to_en($row->name); 
                                            $name = strtolower($name);
                                        ?>
                                        <div class="single-product  white-bg dv-danhsach-sp">
                                            <div class="product-img pt-20">
                                                <a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$row->id?>.html" title="<?=$row->name?>">
                                                    <img src="<?php echo base_url('/upload/product/'.$row->image_link)?>" alt="<?=$row->name?>" title="<?=$row->name?>">
                                                </a>
                                            </div>
                                            <div class="product-content product-i">
                                                <div class="pro-title">
                                                    <h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$row->id?>.html" title="<?=$row->name?>"><?=$row->name?></a></h4>
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
                                    <div class="clear"></div>
                                    <div class='pagination'>
                                        <?php echo $this->pagination->create_links() ?>
                                    </div> 
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
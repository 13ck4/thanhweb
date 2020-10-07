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
                                            <div class="boxselect left">
                                            <select class="input" id="price_from" name="price_from">
                                                <?php for($i = 0;$i <= 5000000; $i=$i+1000000 )  : ?>
                                                <option <?php echo ($price_from_select == $i) ? 'selected' : "" ?> value="<?=$i?>">
                                                    <?= number_format($i) ?>đ
                                                </option>
                                                <?php endfor ?>
                                            </select>
                                            </div>
                                        </div>
                                        <!-- <div class="left marginleft20">
                                            <div class="left global_ss global_ss_cus1">Sắp xếp</div>
                                            <div class="boxselect left">
                                                <select class="todoselect url_dropdown">
                                                    <option selected="true" value="https://demo1013.web30s.vn/Phu-kien-cong-nghe-390861/?viewby=&amp;sortby=0&amp;numby=">Mặc định</option>
                                                    <option value="https://demo1013.web30s.vn/Phu-kien-cong-nghe-390861/?viewby=&amp;sortby=1&amp;numby=">Sort tên                    (A-&gt;Z)
                                                    </option>
                                                    <option value="https://demo1013.web30s.vn/Phu-kien-cong-nghe-390861/?viewby=&amp;sortby=2&amp;numby=">Sort tên                    (Z-&gt;A)
                                                    </option>
                                                    <option value="https://demo1013.web30s.vn/Phu-kien-cong-nghe-390861/?viewby=&amp;sortby=3&amp;numby=">Sort giá                    (Sort thấp-&gt;Sort cao)
                                                    </option>
                                                    <option value="https://demo1013.web30s.vn/Phu-kien-cong-nghe-390861/?viewby=&amp;sortby=4&amp;numby=">Sort giá                    (Sort cao-&gt;Sort thấp)
                                                    </option>
                                                    <option value="https://demo1013.web30s.vn/Phu-kien-cong-nghe-390861/?viewby=&amp;sortby=5&amp;numby=">Sort khuyến mãi                    (Sort có -&gt; Sort không)
                                                    </option>
                                                    <option value="https://demo1013.web30s.vn/Phu-kien-cong-nghe-390861/?viewby=&amp;sortby=6&amp;numby=">Sort khuyến mãi                    (Sort không -&gt; Sort có)
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="left marginleft20">
                                            <div class="left global_ss global_ht_cus1">Hiển thị</div>
                                            <div class="boxselect left">
                                                <select class="todoselect url_dropdown">
                                                    <option selected="true" value="https://demo1013.web30s.vn/Phu-kien-cong-nghe-390861/?viewby=&amp;sortby=&amp;numby=30">Mặc định</option>
                                                    <option value="https://demo1013.web30s.vn/Phu-kien-cong-nghe-390861/?viewby=&amp;sortby=&amp;numby=12">12
                                                    </option>
                                                    <option value="https://demo1013.web30s.vn/Phu-kien-cong-nghe-390861/?viewby=&amp;sortby=&amp;numby=25">25
                                                    </option>
                                                    <option value="https://demo1013.web30s.vn/Phu-kien-cong-nghe-390861/?viewby=&amp;sortby=&amp;numby=50">50
                                                    </option>
                                                    <option value="https://demo1013.web30s.vn/Phu-kien-cong-nghe-390861/?viewby=&amp;sortby=&amp;numby=75">75
                                                    </option>
                                                    <option value="https://demo1013.web30s.vn/Phu-kien-cong-nghe-390861/?viewby=&amp;sortby=0&amp;numby=100">100
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="right">
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
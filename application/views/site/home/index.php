
<article style="position: relative;" id="article">
	<section class="content gallery pad1" style='padding:0'>
		<div class="midle_main_idclass fix1200_cus1">
			<div class="slider-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 hidden-sm hidden-xs"></div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="main-slider">
								<div class="slider-container">
									<?php 
										$this->load->view('site/slide.php', $this->data);
									?>
								</div>  
							</div>
							<div class="slider-product dotted-style-1 pt-25">
								<div class="slider-product-active">
									<?php foreach($product_newest as $key=>$row) : ?>
										<?php 
											$name = convert_vi_to_en($row->name); 
											$name = strtolower($name);
										?>
										<div class='single-product single-product-sidebar white-bg glo-trang-thai-sp'>
											<div class='product-img product-img-left'>
												<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key]->id?>.html" title="<?=$product_newest[$key]->name?>">
													<img src="<?php echo base_url('/upload/product/'.$product_newest[$key]->image_link)?>" alt="<?=$product_newest[$key]->name?>" title="<?=$product_newest[$key]->name?>" />
												</a>
											</div>
											<div class='product-content product-content-right'>
												<div class='pro-title'>
													<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key]->id?>.html" title="<?=$product_newest[$key]->name?>"><?=$product_newest[$key]->name?></a></h4>
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
													<div class='product-icon-left f-left wid-100'>
														<a href='<?php echo site_url('cart/add/'.$product_newest[$key]->id)?>'><i class='fa fa-shopping-cart'></i>Đặt mua</a>
														<!-- <a class='cur sosanh_right ' onclick='SOSANH_sp("2403199","add","LIÊN HỆ","Sản phẩm đã được thêm vào so sánh!","Đã thêm đủ số lượng sản phẩm cần so sánh")'><i class='fa fa-exchange'></i></a> -->
													</div>
												</div>
											</div>          
										</div>
									<?php endforeach?>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
							<div class="slider-sidebar">
								<div class="slider-single-img mb-20">
									<a href="#">
									<img class="img_a" src="https://demo1013.web30s.vn/datafiles/4751/upload/images/14992441044645_banner_phaitren.jpg" alt="mở rộng 1 - không xài" />
									<img class="img_b" src="https://demo1013.web30s.vn/datafiles/4751/upload/images/14992441044645_banner_phaitren.jpg" alt="mở rộng 1 - không xài" />
									</a>
								</div>
								<div class="slider-single-img mb-20">
									<a href="#">
									<img class="img_a" src="https://demo1013.web30s.vn/datafiles/4751/upload/images/14992440699522_banner_phaitren2.jpg" alt="mở rộng 1 - không xài" />
									<img class="img_b" src="https://demo1013.web30s.vn/datafiles/4751/upload/images/14992440699522_banner_phaitren2.jpg" alt="mở rộng 1 - không xài" />
									</a>
								</div>       
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="electronic-tab-area pt-30 pb-50">
				<img id="adslefts" class="ads hidden-sm hidden-xs" style="position: absolute; top:-16px; left:0;" src="<?php echo public_url('site/images/banner7.jpg')?>" alt="" title="" />
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="tab-title">
								<h2>Sản phẩm</h2>
							</div>
							<div class="tab-menu">
								<ul>
									<li class="active"><a href="#home" data-toggle="tab">SẢN PHẨM MỚI </a></li>
									<li><a href="#profile" data-toggle="tab">SẢN PHẨM KHUYẾN MÃI</a></li>
									<li><a href="#messages" data-toggle="tab">SẢN PHẨM ĐẶC BIỆT</a></li>
									<li><a href="#settings" data-toggle="tab">SẢN PHẨM HOT</a></li>
								</ul>           
							</div>
						</div>
					</div>
					<div class="tab-content tab-content-item">
						<div class="tab-pane  dv-home-spqc active" id="home">
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
						</div>
						<div class="tab-pane dv-home-spqc" id="profile">
							<div class="row">
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
											<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_buyed[0]->id?>.html" title="<?=$product_buyed[0]->name?>">
												<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_buyed[0]->image_link)?>" alt="<?=$product_buyed[0]->name?>" title="<?=$product_buyed[0]->name?>" />
											</a>
										</div>
										<div class='product-content'>
											<div class='pro-title'>
												<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_buyed[0]->id?>.html" title="<?=$product_buyed[0]->name?>"><?=$product_buyed[0]->name?></a></h4>
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
										<?php 
												$name = convert_vi_to_en($product_newest[0]->name); 
												$name = strtolower($name);
											?>
											<?php if($key % 2 == 0 && $key > 0) :?>
											<div class='together-single-product glo-trang-thai-sp'>
												<div class='single-product white-bg'>
													<div class='product-img product-container-img'>
														<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_buyed[$key-1]->id?>.html" title="<?=$product_buyed[$key-1]->name?>">
															<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_buyed[$key-1]->image_link)?>" alt="<?=$product_buyed[$key-1]->name?>" title="<?=$product_buyed[$key-1]->name?>" />
														</a>
													</div>
													<div class='product-content product-i'>
														<div class='pro-title'>
															<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_buyed[$key-1]->id?>.html" title="<?=$product_buyed[$key-1]->name?>"><?=$product_buyed[$key-1]->name?></a></h4>
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
														<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_buyed[$key]->id?>.html" title="<?=$product_buyed[$key]->name?>">
															<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_buyed[$key]->image_link)?>" alt="<?=$product_buyed[$key]->name?>" title="<?=$product_buyed[$key]->name?>" />
														</a>
													</div>
													<div class='product-content product-i'>
														<div class='pro-title'>
															<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_buyed[$key]->id?>.html" title="<?=$product_buyed[$key]->name?>"><?=$product_buyed[$key]->name?></a></h4>
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
							</div>
						</div> 
						<div class="tab-pane dv-home-spqc" id="messages">
							<div class="row">
								<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 pad dotted-style-qc'>
									<div class='single-tab-img'>
										<a href='#'><img src='https://demo1013.web30s.vn/datafiles/4751/upload/images/14992450121864_banner_trai.jpg' alt='mở rộng 1 - không xài' /></a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6  col-xs-12 pad dv-home-sptieubieu">
									<div class='single-product pt-30 pb-20 white-bg glo-trang-thai-sp'>
										<div class='product-img pb-40'>
											<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_view[0]->id?>.html" title="<?=$product_view[0]->name?>">
												<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_view[0]->image_link)?>" alt="<?=$product_view[0]->name?>" title="<?=$product_view[0]->name?>" />
											</a>
										</div>
										<div class='product-content'>
											<div class='pro-title'>
												<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_view[0]->id?>.html" title="<?=$product_view[0]->name?>"><?=$product_view[0]->name?></a></h4>
											</div>
											<div class='price-box'>
												<?php if($product_view[0]->discount > 0) :?>
													<?php $price_new = $product_view[0]->price - $product_view[0]->discount; ?>
													<span class="price product-price"><?php echo number_format($product_view[0]->price) ?> <sup> đ</sup>&nbsp;</span>
													<span class='product-price product-price-km'><?php echo number_format($price_new) ?> <sup> đ</sup></span>
												<?php else : ?>
													<span class='product-price product-price-km'><?php echo number_format($product_view[0]->price) ?> <sup> đ</sup></span>
												<?php endif ?>
											</div>
											<div class='product-icon'>
												<div class='product-icon-left f-left'>
													<a href='<?php echo site_url('cart/add/'.$product_view[0]->id)?>'><i class='fa fa-shopping-cart'></i>Đặt mua</a>
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

										<?php foreach($product_view as $key=>$row) : ?>
											<?php if($key % 2 == 0 && $key > 0) :?>
											<div class='together-single-product glo-trang-thai-sp'>
												<div class='single-product white-bg'>
													<div class='product-img product-container-img'>
														<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_view[$key-1]->id?>.html" title="<?=$product_view[$key-1]->name?>">
															<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_view[$key-1]->image_link)?>" alt="<?=$product_view[$key-1]->name?>" title="<?=$product_view[$key-1]->name?>" />
														</a>
													</div>
													<div class='product-content product-i'>
														<div class='pro-title'>
															<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_view[$key-1]->id?>.html" title="<?=$product_view[$key-1]->name?>"><?=$product_view[$key-1]->name?></a></h4>
														</div>
														<div class='price-box'>
															<?php if($product_view[$key-1]->discount > 0) :?>
																<?php $price_new = $product_view[$key-1]->price - $product_view[$key-1]->discount; ?>
																<span class="price product-price"><?php echo number_format($product_view[$key-1]->price) ?> <sup> đ</sup>&nbsp;</span>
																<span class='product-price product-price-km'><?php echo number_format($price_new) ?> <sup> đ</sup></span>
															<?php else : ?>
																<span class='product-price product-price-km'><?php echo number_format($product_view[$key-1]->price) ?> <sup> đ</sup></span>
															<?php endif ?>
														</div>
														<div class='product-icon'>
															<div class='product-icon-left f-left'>
																<a href='<?php echo site_url('cart/add/'.$product_view[$key-1]->id)?>'><i class='fa fa-shopping-cart'></i>Đặt mua</a>
															</div>
															<!-- <div class='product-icon-right floatright'>
																<a class='cur' onclick='SOSANH_sp("2403200","add","LIÊN HỆ","Sản phẩm đã được thêm vào so sánh!","Đã thêm đủ số lượng sản phẩm cần so sánh")'><i class='fa fa-exchange'></i></a>
															</div> -->
														</div>
													</div>
												</div>

												<div class='single-product white-bg'>
													<div class='product-img product-container-img'>
														<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_view[$key]->id?>.html" title="<?=$product_view[$key]->name?>">
															<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_view[$key]->image_link)?>" alt="<?=$product_view[$key]->name?>" title="<?=$product_view[$key]->name?>" />
														</a>
													</div>
													<div class='product-content product-i'>
														<div class='pro-title'>
															<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_view[$key]->id?>.html" title="<?=$product_view[$key]->name?>"><?=$product_view[$key]->name?></a></h4>
														</div>
														<div class='price-box'>
															<?php if($product_view[$key]->discount > 0) :?>
																<?php $price_new = $product_view[$key]->price - $product_view[$key]->discount; ?>
																<span class="price product-price"><?php echo number_format($product_view[$key]->price) ?> <sup> đ</sup>&nbsp;</span>
																<span class='product-price product-price-km'><?php echo number_format($price_new) ?> <sup> đ</sup></span>
															<?php else : ?>
																<span class='product-price product-price-km'><?php echo number_format($product_view[$key]->price) ?> <sup> đ</sup></span>
															<?php endif ?>
														</div>
														<div class='product-icon'>
															<div class='product-icon-left f-left'>
																<a href='<?php echo site_url('cart/add/'.$product_view[$key]->id)?>'><i class='fa fa-shopping-cart'></i>Đặt mua</a>
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
						</div>
						<div class="tab-pane dv-home-spqc" id="settings">
							<div class="row">
								<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 pad dotted-style-qc'>
									<div class='single-tab-img'>
										<a href='#'><img src='https://demo1013.web30s.vn/datafiles/4751/upload/images/14992450121864_banner_trai.jpg' alt='mở rộng 1 - không xài' /></a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6  col-xs-12 pad dv-home-sptieubieu">
									<div class='single-product pt-30 pb-20 white-bg glo-trang-thai-sp'>
										<div class='product-img pb-40'>
											<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[0]->id?>.html" title="<?=$product_newest[0]->name?>">
												<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_newest[0]->image_link)?>" alt="<?=$product_newest[0]->name?>" title="<?=$product_newest[0]->name?>" />
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
											<?php if($key % 2 == 0 && $key > 0) :?>
											<div class='together-single-product glo-trang-thai-sp'>
												<div class='single-product white-bg'>
													<div class='product-img product-container-img'>
														<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key-1]->id?>.html" title="<?=$product_newest[$key-1]->name?>">
															<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_newest[$key-1]->image_link)?>" alt="<?=$product_newest[$key-1]->name?>" title="<?=$product_newest[$key-1]->name?>" />
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
														<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key]->id?>.html" title="<?=$product_newest[$key]->name?>">
															<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_newest[$key]->image_link)?>" alt="<?=$product_newest[$key]->name?>" title="<?=$product_newest[$key]->name?>" />
														</a>
													</div>
													<div class='product-content product-i'>
														<div class='pro-title'>
															<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key]->id?>.html" title="<?=$product_newest[$key]->name?>"><?=$product_newest[$key]->name?></a></h4>
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
						</div>
						<div class="all-product-area pb-20 pt-20">
							<div class="container">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
										<div class="bestseller-area dotted-style-2">
											<div class="section-title">
												<h3>SẢN PHẨM MỚI</h3>
											</div>
											<div class="single-product-items-active border-1">
												<div class='single-product-items'>
													<?php foreach($product_newest as $key=>$row) : ?>
														<div class='single-product single-product-sidebar white-bg glo-trang-thai-sp glo-trang-thai-sp-2403454' data='2403454'>
															<div class='product-img product-img-left'>
																<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key]->id?>.html" title="<?=$product_newest[$key]->name?>">
																	<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_newest[$key]->image_link)?>" alt="<?=$product_newest[$key]->name?>" title="<?=$product_newest[$key]->name?>" />
																</a>
															</div>
															<div class='product-content product-content-right'>
																<div class='pro-title'>
																	<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key]->id?>.html" title="<?=$product_newest[$key]->name?>"><?=$product_newest[$key]->name?></a></h4>
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
																</div>
															</div>          
														</div>
													<?php endforeach?>
												</div>
												<div class='single-product-items'>
													<?php foreach($product_buyed as $key=>$row) : ?>
														<div class='single-product single-product-sidebar white-bg glo-trang-thai-sp glo-trang-thai-sp-2403454' data='2403454'>
															<div class='product-img product-img-left'>
																<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_buyed[$key]->id?>.html" title="<?=$product_buyed[$key]->name?>">
																	<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_buyed[$key]->image_link)?>" alt="<?=$product_buyed[$key]->name?>" title="<?=$product_buyed[$key]->name?>" />
																</a>
															</div>
															<div class='product-content product-content-right'>
																<div class='pro-title'>
																	<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_buyed[$key]->id?>.html" title="<?=$product_buyed[$key]->name?>"><?=$product_buyed[$key]->name?></a></h4>
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
																</div>
															</div>          
														</div>
													<?php endforeach?>
												</div>
												<div class='single-product-items'>
													<?php foreach($product_view as $key=>$row) : ?>
														<div class='single-product single-product-sidebar white-bg glo-trang-thai-sp glo-trang-thai-sp-2403454' data='2403454'>
															<div class='product-img product-img-left'>
																<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_view[$key]->id?>.html" title="<?=$product_view[$key]->name?>">
																	<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_view[$key]->image_link)?>" alt="<?=$product_view[$key]->name?>" title="<?=$product_view[$key]->name?>" />
																</a>
															</div>
															<div class='product-content product-content-right'>
																<div class='pro-title'>
																	<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_view[$key]->id?>.html" title="<?=$product_view[$key]->name?>"><?=$product_view[$key]->name?></a></h4>
																</div>
																<div class='price-box'>
																	<?php if($product_view[$key]->discount > 0) :?>
																		<?php $price_new = $product_view[$key]->price - $product_view[$key]->discount; ?>
																		<span class="price product-price"><?php echo number_format($product_view[$key]->price) ?> <sup> đ</sup>&nbsp;</span>
																		<span class='product-price product-price-km'><?php echo number_format($price_new) ?> <sup> đ</sup></span>
																	<?php else : ?>
																		<span class='product-price product-price-km'><?php echo number_format($product_view[$key]->price) ?> <sup> đ</sup></span>
																	<?php endif ?>
																</div>
																<div class='product-icon'>
																	<div class='product-icon-left f-left'>
																		<a href='<?php echo site_url('cart/add/'.$product_view[$key]->id)?>'><i class='fa fa-shopping-cart'></i>Đặt mua</a>
																	</div>
																</div>
															</div>          
														</div>
													<?php endforeach?>
												</div>
												<div class='single-product-items'>
													<?php foreach($product_newest as $key=>$row) : ?>
														<div class='single-product single-product-sidebar white-bg glo-trang-thai-sp glo-trang-thai-sp-2403454' data='2403454'>
															<div class='product-img product-img-left'>
																<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key]->id?>.html" title="<?=$product_newest[$key]->name?>">
																	<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_newest[$key]->image_link)?>" alt="<?=$product_newest[$key]->name?>" title="<?=$product_newest[$key]->name?>" />
																</a>
															</div>
															<div class='product-content product-content-right'>
																<div class='pro-title'>
																	<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key]->id?>.html" title="<?=$product_newest[$key]->name?>"><?=$product_newest[$key]->name?></a></h4>
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
																</div>
															</div>          
														</div>
													<?php endforeach?>
												</div>                
											</div>            
										</div>
									</div>
									<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
										<div class='feature-product-area feature-product-area-sphome dotted-style-2'>
											<div class='section-title'>
												<h3>Điện Thoại</h3>
											</div>
											<div class='feature-product-active border-1'>
												<?php foreach($product_newest as $key=>$row) : ?>
													<?php 
														$name = convert_vi_to_en($row->name); 
														$name = strtolower($name);
													?>
													<div class='single-product  white-bg glo-trang-thai-sp'>
														<div class='product-img pt-20'>
															<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key]->id?>.html" title="<?=$product_newest[$key]->name?>">
																<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_newest[$key]->image_link)?>" alt="<?=$product_newest[$key]->name?>" title="<?=$product_newest[$key]->name?>" />
															</a>
														</div>
														<div class='product-content product-i'>
															<div class='pro-title'>
																<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key]->id?>.html" title="<?=$product_newest[$key]->name?>"><?=$product_newest[$key]->name?></a></h4>
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
																	<a class='cur' onclick='SOSANH_sp("2403195","add","LIÊN HỆ","Sản phẩm đã được thêm vào so sánh!","Đã thêm đủ số lượng sản phẩm cần so sánh")'><i class='fa fa-exchange'></i></a>
																</div> -->
															</div>
														</div>
													</div>
												<?php endforeach?>
											</div>
										</div>

										<div class='feature-product-area feature-product-area-sphome dotted-style-2'>
											<div class='section-title'>
												<h3>Máy Tính</h3>
											</div>
											<div class='feature-product-active border-1'>
												<?php foreach($product_buyed as $key=>$row) : ?>
													<?php 
														$name = convert_vi_to_en($row->name); 
														$name = strtolower($name);
													?>
													<div class='single-product  white-bg glo-trang-thai-sp'>
														<div class='product-img pt-20'>
															<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_buyed[$key]->id?>.html" title="<?=$product_buyed[$key]->name?>">
																<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_buyed[$key]->image_link)?>" alt="<?=$product_buyed[$key]->name?>" title="<?=$product_buyed[$key]->name?>" />
															</a>
														</div>
														<div class='product-content product-i'>
															<div class='pro-title'>
																<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_buyed[$key]->id?>.html" title="<?=$product_buyed[$key]->name?>"><?=$product_buyed[$key]->name?></a></h4>
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
																	<a class='cur' onclick='SOSANH_sp("2403195","add","LIÊN HỆ","Sản phẩm đã được thêm vào so sánh!","Đã thêm đủ số lượng sản phẩm cần so sánh")'><i class='fa fa-exchange'></i></a>
																</div> -->
															</div>
														</div>
													</div>
												<?php endforeach?>
											</div>
										</div>


										<div class='feature-product-area feature-product-area-sphome dotted-style-2'>
											<div class='section-title'>
												<h3>Phụ kiện công nghệ</h3>
											</div>
											<div class='feature-product-active border-1'>
												<?php foreach($product_view as $key=>$row) : ?>
													<?php 
														$name = convert_vi_to_en($row->name); 
														$name = strtolower($name);
													?>
													<div class='single-product  white-bg glo-trang-thai-sp'>
														<div class='product-img pt-20'>
															<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_view[$key]->id?>.html" title="<?=$product_view[$key]->name?>">
																<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_view[$key]->image_link)?>" alt="<?=$product_view[$key]->name?>" title="<?=$product_view[$key]->name?>" />
															</a>
														</div>
														<div class='product-content product-i'>
															<div class='pro-title'>
																<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_view[$key]->id?>.html" title="<?=$product_view[$key]->name?>"><?=$product_view[$key]->name?></a></h4>
															</div>
															<div class='price-box'>
																<?php if($product_view[$key]->discount > 0) :?>
																	<?php $price_new = $product_view[$key]->price - $product_view[$key]->discount; ?>
																	<span class="price product-price"><?php echo number_format($product_view[$key]->price) ?> <sup> đ</sup>&nbsp;</span>
																	<span class='product-price product-price-km'><?php echo number_format($price_new) ?> <sup> đ</sup></span>
																<?php else : ?>
																	<span class='product-price product-price-km'><?php echo number_format($product_view[$key]->price) ?> <sup> đ</sup></span>
																<?php endif ?>
															</div>
															<div class='product-icon'>
																<div class='product-icon-left f-left'>
																	<a href='<?php echo site_url('cart/add/'.$product_view[$key]->id)?>'><i class='fa fa-shopping-cart'></i>Đặt mua</a>
																</div>
																<!-- <div class='product-icon-right floatright'>
																	<a class='cur' onclick='SOSANH_sp("2403195","add","LIÊN HỆ","Sản phẩm đã được thêm vào so sánh!","Đã thêm đủ số lượng sản phẩm cần so sánh")'><i class='fa fa-exchange'></i></a>
																</div> -->
															</div>
														</div>
													</div>
												<?php endforeach?>
											</div>
										</div>

										<div class='feature-product-area feature-product-area-sphome dotted-style-2'>
											<div class='section-title'>
												<h3>Máy giặt</h3>
											</div>
											<div class='feature-product-active border-1'>
												<?php foreach($product_newest as $key=>$row) : ?>
													<?php 
														$name = convert_vi_to_en($row->name); 
														$name = strtolower($name);
													?>
													<div class='single-product  white-bg glo-trang-thai-sp'>
														<div class='product-img pt-20'>
															<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key]->id?>.html" title="<?=$product_newest[$key]->name?>">
																<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_newest[$key]->image_link)?>" alt="<?=$product_newest[$key]->name?>" title="<?=$product_newest[$key]->name?>" />
															</a>
														</div>
														<div class='product-content product-i'>
															<div class='pro-title'>
																<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key]->id?>.html" title="<?=$product_newest[$key]->name?>"><?=$product_newest[$key]->name?></a></h4>
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
																	<a class='cur' onclick='SOSANH_sp("2403195","add","LIÊN HỆ","Sản phẩm đã được thêm vào so sánh!","Đã thêm đủ số lượng sản phẩm cần so sánh")'><i class='fa fa-exchange'></i></a>
																</div> -->
															</div>
														</div>
													</div>
												<?php endforeach?>
											</div>
										</div>
										<div class='feature-product-area feature-product-area-sphome dotted-style-2'>
											<div class='section-title'>
												<h3>Tivi</h3>
											</div>
											<div class='feature-product-active border-1'>
												<?php foreach($product_buyed as $key=>$row) : ?>
													<?php 
														$name = convert_vi_to_en($row->name); 
														$name = strtolower($name);
													?>
													<div class='single-product  white-bg glo-trang-thai-sp'>
														<div class='product-img pt-20'>
															<a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_buyed[$key]->id?>.html" title="<?=$product_buyed[$key]->name?>">
																<img style="width:100px; height:100px;" src="<?php echo base_url('/upload/product/'.$product_buyed[$key]->image_link)?>" alt="<?=$product_buyed[$key]->name?>" title="<?=$product_buyed[$key]->name?>" />
															</a>
														</div>
														<div class='product-content product-i'>
															<div class='pro-title'>
																<h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_buyed[$key]->id?>.html" title="<?=$product_buyed[$key]->name?>"><?=$product_buyed[$key]->name?></a></h4>
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
																	<a class='cur' onclick='SOSANH_sp("2403195","add","LIÊN HỆ","Sản phẩm đã được thêm vào so sánh!","Đã thêm đủ số lượng sản phẩm cần so sánh")'><i class='fa fa-exchange'></i></a>
																</div> -->
															</div>
														</div>
													</div>
												<?php endforeach?>
											</div>
										</div>
									</div>
									<script>
										$(document).ready(function (){
											$('.feature-product-active').owlCarousel({
												loop:true,
												autoplay:false,
												nav:true,
												navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
												responsive:{
													0:{
														items:1
													},
													767:{
														items:2
													},
													991:{
														items:3
													},
													1200:{
														items:4
													}
												}
											})
										})
									</script>
								</div>
							</div>
							<div class="brand-area pb-60 dotted-style-2">
								<div class="container">
									<div class="row">
										<div class="col-lg-12">
											<div class="section-title">
												<h3>ĐỐI TÁC</h3>
											</div>          
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<div class="brand-active border-1">
												<div class="single-brand">
													<a href="<?php echo base_url()?>"><img src="https://demo1013.web30s.vn/datafiles/4751/upload/images/14997624647321_14993986887182_logo4.jpg" alt="mở rộng 1 - không xài" /></a>
												</div>
												<div class="single-brand">
													<a href="<?php echo base_url()?>"><img src="https://demo1013.web30s.vn/datafiles/4751/upload/images/14997624643640_14993986548937_logo1.png" alt="mở rộng 1 - không xài" /></a>
												</div>
												<div class="single-brand">
													<a href="<?php echo base_url()?>"><img src="https://demo1013.web30s.vn/datafiles/4751/upload/images/14997624646852_14993986773177_logo3.jpg" alt="mở rộng 1 - không xài" /></a>
												</div>
												<div class="single-brand">
													<a href="<?php echo base_url()?>"><img src="https://demo1013.web30s.vn/datafiles/4751/upload/images/14997624647498_14993986642560_logo2.jpg" alt="mở rộng 1 - không xài" /></a>
												</div>
												<div class="single-brand">
													<a href="<?php echo base_url()?>"><img src="https://demo1013.web30s.vn/datafiles/4751/upload/images/14997624648905_14993986984985_logo5.png" alt="mở rộng 1 - không xài" /></a>
												</div>
												<div class="single-brand">
													<a href="<?php echo base_url()?>"><img src="https://demo1013.web30s.vn/datafiles/4751/upload/images/14997624642594_14993987848022_logo7.png" alt="mở rộng 1 - không xài" /></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="blog-area dotted-style-2  pb-60">
								<div class="container">
									<div class="row">
										<div class="col-lg-12">
											<div class="section-title">
												<h3>Tin tức</h3>
											</div>          
										</div>
									</div>
									<div class="row">
										<div class="blog-active dv-tintuc-home">
											<?php foreach($news_list as $row) : ?>
												<?php 
													$name = convert_vi_to_en($row->title); 
													$name = strtolower($name);
												?>
												<div class='col-lg-12'>
													<div class='single-blog'>
														<div class='blog-img'>
															<a href="<?php echo base_url()?>chi-tiet/<?=$name?>-<?=$row->id?>.html" title="<?=$row->title?>">
																<img style="width:100px; height: 110px;" src="<?php echo base_url('/upload/news/'.$row->image_link)?>" alt="<?=$row->title?>" title="<?=$row->title?>">
															</a>
														</div>
														<div class='blog-content-inner'>
															<div class='blog-content white-bg'>
																<a href="<?php echo base_url()?>chi-tiet/<?=$name?>-<?=$row->id?>.html" title="<?=$row->title?>">
																	<h4> <?=$row->title?> </h4>
																</a>
																<p class='mb-0'>
																	<?php 
																		if(strlen($row->intro) < 20){
																			echo $row->intro;
																		}else{
																			echo mb_substr($row->intro,0,80,'utf8').'...';
																		}
																	?>
																</p>
															</div>              
														</div>
													</div>
												</div>
											<?php endforeach?>   
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<img id="adsrights" class="ads hidden-sm hidden-xs" style="position: absolute; top:-16px; right:0;" src="<?php echo public_url('site/images/banner5.jpg')?>" alt="" title="" />
			</div>
		</div>
		<div class="newletter-area ptb-30" style="">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="newletter-logo">
							<a href="https://demo1013.web30s.vn"><img alt='Bán hàng online' class='img_logo' src='https://demo1013.web30s.vn/datafiles/4751/upload/images/14992412349479_logo.png'></a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="subscribe-form">
							<form>
								<input type="text" name="newsletter" id="newsletter_id" value="Đăng ký nhận tin" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Đăng ký nhận tin';}" >
								<button class="subscribe" onclick="return NewsLetter();" >Đăng ký</button>              
							</form>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="subscribe-social text-right">
						<a href="https://www.youtube.com/channel/UC2CD0jJ4HZLCZReyCyzwp0g" target="_blank"><i class="fa fa-youtube"></i></a>
						<a href="https://www.facebook.com/pavietnam.com.vn" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://plus.google.com/114627120430815730885" target="_blank"><i class="fa fa-google-plus"></i></a>
						<a href="https://twitter.com/wwwpavietnamcom" target="_blank"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</article>

<script type="text/javascript">
    $(document).ready(function(){
        var article = $("#article").offset().top;
		var footer = $("footer").offset().top;
        $(window).scroll(function(){
            var y = $(window).scrollTop();
			if(y>= article-100 && y < footer-300){
				$('#adslefts').css('top',''+y+'px');
				$('#adsrights').css('top',''+y+'px');
				document.getElementById("adslefts").style.transition="all 500ms linear";
				document.getElementById("adsrights").style.transition="all 500ms linear";
			}
			else if(y === 0){
				document.getElementById("adslefts").style.top="-16px";
				document.getElementById("adsrights").style.top="-16px";
			}
			else if(y>= footer-300){
				console.log("heee");
				document.getElementById("adslefts").style.top="";
				document.getElementById("adslefts").style.bottom="0";
				document.getElementById("adsrights").style.top="";
				document.getElementById("adsrights").style.bottom="0";
			}
        });
    });
</script>
<article>
	<section class="content gallery pad1" style="padding:0">
		<div class="midle_main_idclass fix1200_cus1">
			<div class="main">
				<div class="content_top">
					<div class="container">
						<div class="dv-child-one-style">
							<div class="dv-child-left">
								<h3><?php echo $product->name ?></h3>
								<div class="cont-tintuc">
									<div class=" detai_sanpham">		
										<div class="breadcrumb">
											<a href="https://demo1013.web30s.vn/San-pham" class="linky">
												<span>Sản phẩm</span>
											</a>
											<span class="">»</span>
											<a href="https://demo1013.web30s.vn/Dien-Thoai-390755" class="linky">
												<span>Điện Thoại</span>
											</a>
											<span class="">»</span>
											<a href="https://demo1013.web30s.vn/Samsung-390765" class="linky">
												<span>Samsung</span>
											</a>
										</div>
										<a href="JavaScript:ajax_action(2403117,1);" class="butthree" style="margin-left: 10px; opacity: 0; display: inline;">
											<img src="/images/love_icon.png" align="absmiddle" width="15" height="15">Thích
										</a>
										<a href="JavaScript:ajax_action(2403117,2);" class="butthree" style="margin-left: 70px; opacity: 0; display: inline;">
											<img src="/images/needle_icon.png" align="absmiddle" width="15" height="15"> Muốn
										</a>
										<div class="main_content_top main_content_top_cus1">
											<script type="text/javascript" src="/js/jquery.simple-gallery.min.js"></script>
											<script type="text/javascript" src="/js/jquery.simple-lens.min.js"></script>
											<link rel="stylesheet" type="text/css" href="/css/jquery.simple-lens.css">
											<link rel="stylesheet" type="text/css" href="/css/jquery.simple-gallery.css">
											<script>
												$(document).ready(function () {
													$('.glo-demo-1 .simpleLens-thumbnails-container img').simpleGallery({
														loading_image: 'demo/images/loading.gif',
														show_event: 'click'
													});

													$('.glo-demo-1 .simpleLens-big-image').simpleLens({
														loading_image: 'demo/images/loading.gif'
													});
												});
											</script>
											<div class="simpleLens-gallery-container main_col_left main_col_left_cus1 glo-demo-1" id="demo-1">
												<div class="simpleLens-container">
													<div class="simpleLens-big-image-container">
														<a class="simpleLens-lens-image" data-lens-image="<?php echo base_url('upload/product/'.$product->image_link)?>">
															<img alt="<?php echo $product->name ?>" class="simpleLens-big-image" src="<?php echo base_url('upload/product/'.$product->image_link)?>">
															<div class="simpleLens-mouse-cursor"></div>
														</a>
													</div>
												</div>

												<div class="simpleLens-thumbnails-container body_thumb_content body_thumb_content_cus1">
													<?php if(is_array($image_list)) : ?>
														<?php foreach($image_list as $img): ?>
															<a href="JavaScript:void(0);" class="simpleLens-thumbnail-wrapper" data-lens-image="<?php echo base_url('upload/product/'.$img)?>" data-big-image="<?php echo base_url('upload/product/'.$img)?>">
																<img class="border_images" src="<?php echo base_url('upload/product/'.$img)?>" width="50">
															</a>
														<?php endforeach?>
													<?php endif?>
												</div>

												
											</div>
											<div class="main_col_right main_col_right_cus1">
												<form method="post" action="https://demo1013.web30s.vn/cart-add/">
													<input type="hidden" name="module" value="order">
													<input type="hidden" name="action" value="add_cart_tmdt">
													<div style="padding:8px;" class="text_color">
														<div class="comment_nho">
															<span id="love_2403117">0</span> yêu thích
														</div> 
														<div class="comment_nho">
															<span id="want_2403117">0</span> muốn mua
														</div>
													</div>            
													<div class="clear"></div>
													<h1 class="main_right_title"><?= $product->name ?></h1>

													<div class="spdt_2_left list_body_left list_body_left_cus1">Mã Sản Phẩm:</div>
													<div class="spdt_2_right list_body_right list_body_right_cus1"><?= $product->id ?></div>

													<div class="spdt_2_left list_body_left list_body_left_cus1">Danh mục:</div>
													<div class="spdt_2_right list_body_right list_body_right_cus1"><?= $catalog->name ?></div>
													<div class="spdt_2_left list_body_left list_body_left_cus1">Lượt xem:</div>
													<div class="spdt_2_right list_body_right list_body_right_cus1"><?=$product->view ?></div>

													<!-- <div class="spdt_2_left list_body_left list_body_left_cus1">Quà tặng:</div>
													<div class="spdt_2_right list_body_right list_body_right_cus1"><?php echo $product->gifts ?></div> -->


													<div class="clear"></div>
													<div class="line_top_1 line_top_cus1"></div>
													<div class="global_ghichu_1 global_ghichu_2"><p><?php echo $product->name ?></p></div>
													<div class="clear"></div>
													<div class="gia_thanhtien gia_thanhtien_cus1">
														<?php if($product->discount > 0) :?>
															<?php $price_new = $product->price - $product->discount; ?>
															<span class="glo-tgiagoc" style="display:block">Giá bán: <?php echo number_format($price_new) ?> VND</span>
														<?php else : ?>
															<span class="glo-tgiagoc" style="display:block">Giá bán: <?php echo number_format($product->price) ?> VND</span>
														<?php endif ?>
													</div>            
													<style type="text/css">.gia_thanhtien_cus1 {
															display: block
														}@-webkit-keyframes marqueeAnimation-8773695  { 100%  {margin-top:-0px}}
													</style>
													<div class="clear"></div>
													<div class="glo-sanpham-detal"></div>
													<div class="product_details_cart">
														<!-- <div class="product-quantity">
															<div class="numbers-row">
																<div class="buttontext left" onclick="ADD_soluong_cart('-')">-</div>
																<input class="intext left" type="text" name="quantity" value="1" id="input-quantity">
																<div class="buttontext left" onclick="ADD_soluong_cart('+')">+</div>
																<div onclick="compareProduct(2403117,'add_sosanh',10, 'Sản phẩm đã được thêm vào so sánh!'); return false;" class="left icon_body icon_body_sosanh_cus1">
																	<i class="fa fa-retweet"></i>
																</div>
																<div class="left icon_body icon_body_love_cus1" onclick="add_whishlist(2403117,1); return false;">
																	<i class="fa fa-heart-o"></i>
																</div>
															</div>
														</div> -->
														<div class="product-bottom">
															<a  name="add_cart_tmdt" id="button-cart" class="button btn-cart shopng-btn" class='button' style='float:left;padding:8px 15px;font-size:16px' href="<?php echo base_url('cart/add/'.$product->id) ?>" title='Mua ngay'>Thêm vào giỏ hàng</a>              
														</div>
														<div class="right social_network_right">
															<ul class="social_links">
																<li class="skype">
																	<script>
																		(function(r, d, s) {
																			r.loadSkypeWebSdkAsync = r.loadSkypeWebSdkAsync || function(p) {
																				var js, sjs = d.getElementsByTagName(s)[0];
																				if (d.getElementById(p.id)) { return; }
																				js = d.createElement(s);
																				js.id = p.id;
																				js.src = p.scriptToLoad;
																				js.onload = p.callback
																				sjs.parentNode.insertBefore(js, sjs);
																			};
																			var p = {
																				scriptToLoad: "//swx.cdn.skype.com/shared/v/latest/skypewebsdk.js",
																				id: "skype_web_sdk"
																			};
																			r.loadSkypeWebSdkAsync(p);
																		})(window, document, "script");
																	</script>
																	<div class="skype-share" data-href="https://demo1013.web30s.vn/DIEN-THOAI-GALAXY-NOTE-5-note-5-390783" data-lang="vi" data-style="square">
																		<link rel="stylesheet" type="text/css" href="https://swx.cdn.skype.com/skypewebsdk/shareButton/v/1.4.0.0/assets/css/shareButton.css">
																		<div class="skypeShare square" title="Chia sẻ trên Skype">
																			<span class="skypeShareLogo"></span>
																			<span class="skypeShareText">Chia sẻ</span>
																		</div>
																	</div>
																</li>
																<li class="zalo">
																	<div class="zalo-share-button" data-href="https://demo1013.web30s.vn/DIEN-THOAI-GALAXY-NOTE-5-note-5-390783" data-oaid="579745863508352884" data-layout="2" data-color="blue" data-customize="false" style="overflow: hidden; display: inline-block; width: 20px; height: 20px;">
																		<iframe frameborder="0" allowfullscreen="" scrolling="no" width="20px" height="20px" src="https://sp.zalo.me/plugins/share?dev=null&amp;color=blue&amp;oaid=579745863508352884&amp;href=https%3A%2F%2Fdemo1013.web30s.vn%2FDIEN-THOAI-GALAXY-NOTE-5-note-5-390783&amp;layout=2&amp;customize=false&amp;callback=null&amp;id=10b01538-0f50-419b-85c5-f5ac080bb5f9&amp;domain=demo1013.web30s.vn&amp;android=false&amp;ios=false"></iframe>
																	</div>
																	<script src="//sp.zalo.me/plugins/sdk.js"></script>
																</li>
																<li class="twitter">
																	<script>window.twttr = (function(d, s, id) {
																		var js, fjs = d.getElementsByTagName(s)[0],
																			t = window.twttr || {};
																		if (d.getElementById(id)) return t;
																		js = d.createElement(s);
																		js.id = id;
																		js.src = "//platform.twitter.com/widgets.js";
																		fjs.parentNode.insertBefore(js, fjs);
																		t._e = [];
																		t.ready = function(f) {
																			t._e.push(f);
																		};
																		return t;
																		}(document, "script", "twitter-wjs"));
																	</script>
																	<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 60px; height: 20px;" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.96fd96193cc66c3e11d4c5e4c7c7ec97.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fdemo1013.web30s.vn%2FDIEN-THOAI-GALAXY-NOTE-5-note-5-390783&amp;size=m&amp;text=%C4%90I%E1%BB%86N%20THO%E1%BA%A0I%20GALAXY%20NOTE%205%20-%20note%205&amp;time=1601702540593&amp;type=share&amp;url=https%3A%2F%2Fdemo1013.web30s.vn%2FDIEN-THOAI-GALAXY-NOTE-5-note-5-390783" data-url="https://demo1013.web30s.vn/DIEN-THOAI-GALAXY-NOTE-5-note-5-390783"></iframe>
																</li>
																<li class="facebook">
																	<script>
																		if (!document.getElementById('fb-root')) {
																			document.writeln('<div id="fb-root" style="display: inline-block;"></div>');
																			(function(d, s, id) {
																			var js, fjs = d.getElementsByTagName(s)[0];
																			if (d.getElementById(id)) return;
																			js = d.createElement(s); js.id = id;//vi_VN //en_US
																			js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=164566120964750&autoLogAppEvents=1";
																			fjs.parentNode.insertBefore(js, fjs);
																			}(document, 'script', 'facebook-jssdk'));
																		}
																	</script>
																	<div id="fb-root" style="display: inline-block;" class=" fb_reset">
																		<div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
																			<div>
																			</div>
																		</div>
																	</div>
																	<div class="fb-share-button fb_iframe_widget" data-layout="button" data-href="https://demo1013.web30s.vn/DIEN-THOAI-GALAXY-NOTE-5-note-5-390783" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=164566120964750&amp;container_width=0&amp;href=https%3A%2F%2Fdemo1013.web30s.vn%2FDIEN-THOAI-GALAXY-NOTE-5-note-5-390783&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey">
																		<span style="vertical-align: bottom; width: 76px; height: 20px;">
																			<iframe name="f89fd3b864315" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.2/plugins/share_button.php?app_id=164566120964750&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df26e716c15114d4%26domain%3Ddemo1013.web30s.vn%26origin%3Dhttps%253A%252F%252Fdemo1013.web30s.vn%252Ffd09ec38304948%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fdemo1013.web30s.vn%2FDIEN-THOAI-GALAXY-NOTE-5-note-5-390783&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey" style="border: none; visibility: visible; width: 76px; height: 20px;" class=""></iframe>
																		</span>
																	</div>
																</li>
															</ul>  
														</div>
													</div>
												</form>
											</div>
											<div class="clear"></div>
										</div>
										<div class="main_content_body main_content_body_cus1">
											<div class="microformat">
												<p style="text-align: left;">
													<strong>
														<span style="font-size: medium;">Chi Tiết Sản Phẩm</span>
													</strong>
												</p>
												<p style="padding-left: 30px;">
													<?=($product->content)?>
												</p>
												<ul>
												</ul>
												<div class="clear"></div>
												<div class="dv-glo-tags">
													<i class="fa fa-tags"></i>
													<a href="https://demo1013.web30s.vn/San-pham/?keysearch=galaxy+note+5">galaxy note 5</a>
													<a href="https://demo1013.web30s.vn/San-pham/?keysearch=note+5">note 5</a>
													<div class="clear"></div>
												</div>
												<div class="clear cao20"></div>
												<div class="dv-fbbox-like">
													<div class="fb-like fb_iframe_widget" id="fb-like" data-href="https://demo1013.web30s.vn/DIEN-THOAI-GALAXY-NOTE-5-note-5-390783" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true" data-width="844" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=164566120964750&amp;container_width=844&amp;href=https%3A%2F%2Fdemo1013.web30s.vn%2FDIEN-THOAI-GALAXY-NOTE-5-note-5-390783&amp;layout=standard&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small&amp;width=844">
														<span style="vertical-align: bottom; width: 844px; height: 20px;">
															<iframe name="f1b55185602f1cc" width="844px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.2/plugins/like.php?action=like&amp;app_id=164566120964750&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df38cbab2d66f2d4%26domain%3Ddemo1013.web30s.vn%26origin%3Dhttps%253A%252F%252Fdemo1013.web30s.vn%252Ffd09ec38304948%26relation%3Dparent.parent&amp;container_width=844&amp;href=https%3A%2F%2Fdemo1013.web30s.vn%2FDIEN-THOAI-GALAXY-NOTE-5-note-5-390783&amp;layout=standard&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small&amp;width=844" style="border: none; visibility: visible; width: 844px; height: 20px;" class=""></iframe>
														</span>
													</div>
													<div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-width="100%" data-href="https://demo1013.web30s.vn/DIEN-THOAI-GALAXY-NOTE-5-note-5-390783" data-numposts="5" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=164566120964750&amp;container_width=844&amp;height=100&amp;href=https%3A%2F%2Fdemo1013.web30s.vn%2FDIEN-THOAI-GALAXY-NOTE-5-note-5-390783&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v3.2&amp;width=" style="width: 100%;">
														<span style="vertical-align: bottom; width: 100%; height: 178px;">
															<iframe name="f15ca9ad73aa25c" width="1000px" height="100px" data-testid="fb:comments Facebook Social Plugin" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.2/plugins/comments.php?app_id=164566120964750&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2502cc8d38dc7c%26domain%3Ddemo1013.web30s.vn%26origin%3Dhttps%253A%252F%252Fdemo1013.web30s.vn%252Ffd09ec38304948%26relation%3Dparent.parent&amp;container_width=844&amp;height=100&amp;href=https%3A%2F%2Fdemo1013.web30s.vn%2FDIEN-THOAI-GALAXY-NOTE-5-note-5-390783&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v3.2&amp;width=" style="border: none; visibility: visible; width: 100%; height: 178px;" class=""></iframe>
														</span>
													</div>
												</div>
											</div>    
											<script>
												var div_fb_like = document.getElementById('fb-like');
												if (div_fb_like) {
													div_fb_like.setAttribute('data-width', div_fb_like.parentNode.offsetWidth);
												}
											</script>
											<div class="clear"></div>
										</div>				
										<div class="clearfix"> </div>
									</div>
									<div class="clearfix"> </div>
									<div id="title_page">
										<h3>Sản phẩm liên quan</h3>
									</div> 
									<div class="clearfix"> </div>
									<div id="noidung_load">
										<div id="placeSlide_main">
											<div class="dv-sp-cont">
												<ul>


												<?php foreach($product_newest as $row) : ?>
													<?php 
														$name = convert_vi_to_en($row->name); 
														$name = strtolower($name);
													?>

													<div class="single-product  white-bg dv-danhsach-sp">
														<div class="product-img pt-20">
															<a href="<?php echo base_url('san-pham/'.$name.'-'.$row->id)?>.html" title="<?=$row->name?>">
																<img src="<?=base_url('upload/product/')?><?=$row->image_link?>" alt="<?=$row->name?>"></a>
														</div>
														<div class="product-content product-i">
															<div class="pro-title">
																<h4><a href="<?php echo base_url('san-pham/'.$name.'-'.$row->id)?>.html" title="<?=$row->name?>"><?=$row->name?></a></h4>
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
																	<a href="<?php echo site_url('cart/add/'.$row->id)?>"><i class="fa fa-shopping-cart"></i>Đặt mua</a>
																</div>
															</div>
														</div>
													</div>

												<?php endforeach ?>

												</ul>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
									<div class="clear"></div>
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


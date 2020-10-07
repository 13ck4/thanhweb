<header>
	<div class="header-top-area black-bg ptb-3 ">
		<div class="container">
			<div class="hd-left">
				<div class="header-top-left">
					<span><a class="phone" href="tel:(028) 6256 3737">Hotline: (028) 6256 3737</a></span>
				</div>
			</div>
			<div class="hd-right">
				<div class="header-top-right dv-mem-login">
					<ul>
						<div class="glo-dangky-gruop">
                            <script>
                                function jsupdate(k, idclass, jscolor) {
                                    if (k == 0) $("." + idclass).css("background-color", "#" + jscolor);
                                    else if (k == 1) $("." + idclass).css("color", "#" + jscolor);
                                }
                            </script>
							<ul>
								<li>
									<a href="https://demo1013.web30s.vn/login" onclick="ShowHidden('id_mem_login'); return false;" class="mem memdn">Đăng nhập</a>
								</li>
								<li>
									<a href="https://demo1013.web30s.vn/reg" class="mem memdk">Đăng ký</a>
								</li>
							</ul> 
							<div id="top_menu_admin_1" class="fix1000">
								<div id="id_mem_login" class="trontron">
									<form class="nomargin" id="memberloginit" action="https://demo1013.web30s.vn" method="post" name="TheFormLogin" onsubmit="return Check_LoginMember('id_tentruycap','id_matkhau'); return false;">
										<input name="module" type="hidden" value="user">
										<input name="action" type="hidden" value="member_login">
										<div align="center">	
											<h2 class="h2memberstop cus1">THÀNH VIÊN ĐĂNG NHẬP</h2>
										</div>
										Tên truy cập                
										<input name="tentruycap" type="text" class="box_input" id="id_tentruycap" maxlength="65">
										Mật khẩu
										<input name="matkhau" type="password" class="box_input" id="id_matkhau" value="" maxlength="65">
										<input class="submitbutton" type="submit" name="dangky" id="button" value="đăng nhập">
										<div style="cursor:pointer;" onclick="ShowHidden('id_mem_login');ShowHidden('id_mem_loss');">Quên mật khẩu?</div>
									</form>
									<div class="clear"></div>
									<!-- <div class="dv-glo-login-mxh dv-glo-login-mxh-cus">
										<span></span> <a href="/login-fb/"  class='fb'><i class="fa fa-facebook"></i></a> <a class='gg'  href="/login-google/"><i class="fa fa-google"></i></a>
										<div class="clear"></div>
									</div> -->
									<div class="clear"></div>
								</div>
								<div id="id_mem_loss" style="position:absolute; top:30px; z-index:99999; display:none; background:#ccc; width:250px; margin-left:700px; padding:10px;" class="trontron">
									<form class="nomargin" id="memberlossit" action="https://demo1013.web30s.vn" method="post" name="TheFormLogin" onsubmit="return Check_LossMember('email_loss'); return false;">
										<input type="hidden" name="module" value="user">
										<input type="hidden" name="action" value="member_loss">
										<div align="center">
											<h2>QUÊN MẬT KHẨU</h2>
										</div>
										Xin nhập vào email của bạn:
										<input name="email" type="text" class="box_input" id="email_loss" maxlength="65">
										<input class="submitbutton" type="submit" name="dangky" id="id_quenmatkhau" value="QUÊN MẬT KHẨU">
										<div style="cursor:pointer;" onclick="ShowHidden('id_mem_login');ShowHidden('id_mem_loss');">nhớ rồi, đăng nhập lại</div>
									</form>
									<div class="clear"></div>
								</div>
							</div>
						</div>						
						<li></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom-area bg-color-1 ptb-25">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="logo">
						<a href="https://demo1013.web30s.vn">
							<img alt="Bán hàng online" class="img_logo" src="https://demo1013.web30s.vn/datafiles/4751/upload/images/14992412349479_logo.png">
						</a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="header-bottom-middle">
						<div class="top-search">
                            <span class="tex_top_zalo"><i class="fa fa-phone"></i>Zalo: <a href="Mở rộng 11">Mở rộng 12</a></span>
							<span class="tex_top_skype"><i class="fa fa-skype"></i>Skype: <a href="skype:tuvanmuahang?chat">tuvanmuahang</a></span>
							<span class="tex_top_email"><i class="fa fa-envelope"></i>Email: <a href="maitto:web@pavietnam.vn">web@pavietnam.vn</a></span>
						</div>
						<div class="search-box-2"> 
							<div class="form">
								<input type="text" class="key_timkiem" placeholder="Nhập từ khóa tìm kiếm" value="">
								<a class="btn" onclick="SEARCH_btn()"><i class="fa fa-search"></i></a>
							</div>
							<script type="text/javascript">
				                function SEARCH_btn() 
								{
									var key = $(".key_timkiem").val().replace(/ /g,"+");
									if(key.length < 2)
										{
											$(".key_timkiem").focus();
										}		
									else window.location.href = "/search/?key="+key;
								}
								$('.key_timkiem').keypress(function(event){
									var keycode = (event.keyCode ? event.keyCode : event.which);
									if (keycode == '13') {
										SEARCH_btn();
									}
								});
				            </script>
						</div>								
					</div>
					<div class="header-bottom-right">
						<div class="shop-cart-area">
							<div class="top-cart-wrapper">
								<div class="block-cart">
									<div class="top-cart-title">
										<a href="<?php echo base_url('cart'); ?>">
											<span class="title-cart">GIỎ HÀNG</span>
											<span class="count-item">(<?php echo $total_items ?>) SẢN PHẨM</span>
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
</header>
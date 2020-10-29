<article>
	<section class="content gallery pad1" style="padding:0">
		<div class="midle_main_idclass fix1200_cus1">
			<div class="main">
				<div class="content_top">
					<div class="container">
						<div class="dv-child-one-style">
                            <div class="dv-child-left">
                                <h3>Chỉnh Sửa Thông Tin Thành Viên</h3>
                                <div class="dv-sp-cont">
                                    <div class="dv-dangky-thanhvien" id="load-main">
                                        <div class="contact">
                                            <form enctype="multipart/form-data" action="" method="post" class="t-form form_action">
                                                <li>
                                                    <input placeholder="email" onfocus="this.placeholder=''" onblur="this.placeholder='Email'" type="text" class="box_input"  value="<?php echo $user->email ?>" name="email" id="mail"><span class="req">*</span>
                                                    <div id="email_error" class="error"><?php echo form_error('email')?></div>
                                                </li>
                                                <li>
                                                    <input placeholder="Họ tên" onfocus="this.placeholder=''" onblur="this.placeholder='Họ tên'" type="text" class="box_input"  value="<?php echo $user->name ?>" name="name" id="name"><span class="req">*</span>
                                                    <div id="name_error" class="error"><?php echo form_error('name')?></div>
                                                </li>
                                                <li>
                                                    <input placeholder="Điện thoại" onfocus="this.placeholder=''" onblur="this.placeholder='Điện thoại'" type="text" class="box_input" value="<?php echo $user->phone ?>" name="phone" id="phone">
                                                    <div id="phone_error" class="error"><?php echo form_error('phone')?></div>
                                                </li>
                                                <li>
                                                    <input placeholder="Địa chỉ" onfocus="this.placeholder=''" onblur="this.placeholder='Địa chỉ'"  type="text" class="box_input" value="<?php echo $user->address ?>" name="address" id="address">
                                                    <div id="address_error" class="error"><?php echo form_error('address')?></div>
                                                </li>

                                                <li>
                                                    <input placeholder="Mật Khẩu" onfocus="this.placeholder=''" onblur="this.placeholder='Mật Khẩu'"  type="text" class="box_input" name="password" id="password">
                                                    <p>Nếu thay đổi mật khẩu thỳ nhập dữ liệu vào đây. </p>
                                                    <div id="password_error" class="error"><?php echo form_error('password')?></div>
                                                </li>
                                                <li>
                                                    <input placeholder="Nhập lại mật khẩu" onfocus="this.placeholder=''" onblur="this.placeholder='Nhập lại mật khẩu'"  type="text" class="box_input" name="re_password" id="re_password">
                                                    <div id="re_password_error" class="error"><?php echo form_error('re_password')?></div>
                                                </li>
                                                
                                                
                                                <div class="clr"></div>
                                                <div align="center">
                                                    <button type="submit" class="buttonSignup">Chỉnh Sửa Thông Tin</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="clr"></div>
                                    <style>
                                        .buttonSignup{
                                            border-radius: 5px;
                                            padding: 14px 16px;
                                            text-align: center;
                                            text-decoration: none;
                                            display: inline-block;
                                            font-size: 16px;
                                            cursor: pointer;
                                            -webkit-transition-duration: 0.4s;
                                            transition-duration: 0.4s;
                                            background-color: white;
                                            color: black;
                                            border: 2px solid #555555;
                                        }
                                        .buttonSignup:hover{
                                            background-color: #555555;
                                            color: white;
                                            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                                        }

                                        @-webkit-keyframes marqueeAnimation-5447259  { 100%  {margin-top:-2290px}}
                                    </style>          <!--  -->
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
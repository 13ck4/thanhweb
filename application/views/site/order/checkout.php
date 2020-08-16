<style type="text/css">
    body{font-family:Roboto, sans-serif; font-weight:normal; }
    h1{font-family:Roboto, sans-serif; font-weight:100; }
    #sp-header-top{ background-color:#ffffff; }
    #sp-breadcrumb-block{ background-image:url("/demo/senvietdeal/images/bg-bredum.png");background-color:#f6f6f6; }
    #sp-block-acymailling{ background-color:#ffffff; }
    #sp-block-bottom-2{ background-color:#ffffff; }
    #sp-footer{ background-color:#060d11; }
    div.mod_search35 input[type="search"]{ width:auto; }
</style>
<section id="sp-breadcrumb-block">
    <div class="container">
        <div class="row">
            <div id="sp-breadcrumb" class="col-sm-12 col-md-12">
                <div class="sp-column ">
                    <div class="sp-module ">
                        <div class="sp-module-content">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>" class="pathway">Home</a></li>
                                <li class="active">Xác Nhận Mua Hàng</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sp-main-body">
    <div class="container">
        <div class="row">
            <div id="sp-component" class="col-sm-9 col-md-9">
                <div class="sp-column ">
                    <table class="jshop" id="jshop_menu_order">
                        <tbody>
                            <tr>    
                                <td class="jshop_order_step active">
                                    <span id="active_step" class="active_step">Thông tin</span>      
                                </td>
                                <td class="jshop_order_step next">
                                    <span class="not_active_step">Phương thức thanh toán</span>      
                                </td>
                                <td class="jshop_order_step next">
                                    <span class="not_active_step">Xác nhận đơn hàng</span>      
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="jshop address_block">
                        <form action="" method="post">
                            <div class="jshop_register">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="name"><span>Tổng tiền cần thanh toán:</span></td>
                                            <td class="name"><b style="color: red;font-size: 22px"><?php echo number_format($total_amount) ?> đ</b></td>
                                        </tr>
                                        <tr>
                                            <td class="name">
                                                Họ và Tên <span style="color: red;">*</span>          
                                            </td>
                                            <td>
                                                <input type="text" value="<?php echo isset($user->name) ? $user->name : set_value('name')?>" name="name" id="name" class="input">
                                                <div id="name_error" class="error"><?php echo form_error('name')?></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="name">
                                                E-mail <span style="color: red;">*</span>          
                                            </td>
                                            <td>
                                                <input type="text" value="<?php echo isset($user->email) ? $user->email : set_value('email') ?>" name="email" id="email" class="input">
                                                <div id="email_error" class="error"><?php echo form_error('email')?></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="name">
                                                Địa Chỉ: <span style="color: red;">*</span>          
                                            </td>
                                            <td>
                                                <textarea name="message" id="message" rows="4" style="height: 100px;" class="input"> <?php echo set_value('message')?></textarea>
                                                <div id="message_error" class="error"><?php echo form_error('message')?></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="name">
                                                Điện thoại di động <span style="color: red;">*</span>          </td>
                                            <td>
                                                <input type="text" value="<?php echo isset($user->phone) ? $user->phone : set_value('phone') ?>" name="phone" id="phone" class="input">
                                                <div id="phone_error" class="error"><?php echo form_error('phone')?></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="name">
                                                Hình thức thanh toán <span style="color: red;">*</span>
                                            </td>
                                            <td class="name">
                                            <select name="payment">
                                                <option value="">---- Chọn Hình Thức Thanh Toán ----</option>
                                                <option value="offline">Thanh Toán Khi Nhận Hàng</option>
                                                <option value="atcomputer">Giao dịch tại công ty</option>
                                                <option value="atpostoffice">Giao dịch wa bưu điện</option>
                                            </select>
                                            <div id="phone_error" class="error"><?php echo form_error('payment')?></div>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="padding-top:10px;">
                                <input type="submit" name="submit" value="Thanh Toán" class="button">
                            </div>
                        </form>
                    </div>
                    <span id="mxcpr">
                        <a rel="nofollow" target="_blank" href="https://www.webdesigner-profi.de/">Webseite www.webdesigner-profi.de</a>
                    </span>
                </div>
            </div>
            <div id="sp-right" class="col-sm-3 col-md-3">
                <div class="sp-column ">
                    <div class="sp-module ">
                        <div class="sp-module-content">
                            <div class="custom">
                                <ul style="background: white; padding: 15px; border: 1px solid white; height: 100%; width: 100%; box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.2);">
                                    <li>
                                        <h4 style="text-align: left;">
                                            <span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Đặt hàng nhanh</span>
                                        </h4>
                                        <span style="font-size: 14pt; color: #ff0000;">
                                            <strong>
                                                <span class="hotline" style="font-family: 'times new roman', times, serif;">0169.377.9225</span>
                                            </strong>
                                        </span>
                                    </li>
                                    <li style="text-align: left;">
                                        <span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Giao hàng và thu tiền tận nơi trên toàn quốc</span>
                                    </li>
                                    <li style="text-align: left;">
                                        <span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Miễn phí vận chuyển cho đơn hàng từ 2 sản phẩm</span>
                                    </li>
                                    <li style="text-align: left;">
                                        <span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Đặt hàng số lượng lớn xin liên hệ&nbsp;
                                            <span class="red" style="color: #ff0000;">
                                                <strong>0169.377.9225</strong>
                                            </span>
                                        </span>
                                    </li>
                                    <li style="text-align: left;">
                                        <span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Khiếu nại sản phẩm&nbsp;
                                            <span class="red" style="color: #ff0000;">
                                                <strong>0169.377.9225</strong>
                                            </span>
                                        </span>
                                    </li>
                                    <li style="text-align: left;">
                                        <span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Thời gian đổi hàng là 7 ngày</span>
                                    </li>
                                    <li style="text-align: left;"></li>
                                </ul>
                                <p style="text-align: left;">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
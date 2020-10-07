<article>
	<section class="content gallery pad1" style="padding:0">
	    <div class="midle_main_idclass fix1200_cus1">			
            <section class="main">
                <div class="content_top">
                    <div class="container">
                        <div class="dv-child-one-style">
                            <h3>GIỎ HÀNG</h3>
                            <div class="content-buy">
                                <form id="TheFormX" name="TheFormX" onsubmit="return checkShoppingCartNew();" action="https://demo1013.web30s.vn/buy-products/" method="post" novalidate="novalidate">
                                    <input type="hidden" name="module" value="order">
                                    <input type="hidden" name="action" value="thanhtoandatmuasanpham">
                                    <div class="group-info">
                                        <!-- <div class="person-received-buy">
                                            <h2><i class="fa fa-map-marker"></i> Thông tin đăng ký</h2>
                                            <div class="border-box-buy">
                                                <input class="received-buy" name="tendaydu" id="tendaydu" value="" type="text" required="" placeholder="Họ tên">
                                                <input class="received-buy" name="email" id="email" value="" type="text" required="" placeholder="Email">
                                                <input class="received-buy" name="diachi" id="diachi" value="" type="text" required="" placeholder="Địa chỉ">
                                                <input class="received-buy" name="dienthoai" id="dienthoai" value="" type="text" required="" placeholder="Số điện thoại">
                                            </div>
                                        </div> -->
                                        <div class="other-person-received-buy">
                                            <div class="other-person">

                                                <h5><i class="fa fa-users"></i> Thông tin nhận hàng</h5>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="border-box-buy">
                                                <input  class="received-buy" type="email" value="<?php echo isset($user->email) ? $user->email : "" ?>" name="email" id="email" required="" placeholder="Email">
                                                <input class="received-buy" value="<?php echo isset($user->name) ? $user->name : "" ?>" name="name" id="name" type="text" required="" placeholder="Họ tên">
                                                <input class="received-buy" name="message" id="message" value="" type="text" required="" placeholder="Địa chỉ">
                                                <input class="received-buy"  value="<?php echo isset($user->phone) ? $user->phone : "" ?>" name="phone" id="phone" type="text" required="" placeholder="Số điện thoại">
                                                <a onclick="Get_Information_Register()" id="id_laythongtin" class="copy-received-buy"><i class="fa fa-check-square"></i>
                                                    <h6>Sử dụng thông tin đăng ký</h6></a>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="pay-buy">
                                            <h2>
                                                <i class="fa fa-credit-card"></i>
                                                Loại hình thanh toán                
                                            </h2>
                                            <div class="box-pay">
                                                <div class="border-payment-home">
                                                    <label class="radio-payment">
                                                        <img class="images-payment" src="https://demo1013.web30s.vn/images/payment/icon-congty.png" alt="Thanh toán tại công ty" title="Thanh toán tại công ty">
                                                        <label for="id_thanhtoan_congty">Thanh toán tại công ty</label>
                                                        <input id="id_thanhtoan_congty" name="payment" value="atcomputer" type="radio" class="option-input radio" checked="checked">
                                                        <span class="radiobtn_payment"></span>
                                                    </label>
                                                </div>
                                                <div class="border-payment-home">
                                                    <label class="radio-payment">
                                                        <img class="images-payment" src="https://demo1013.web30s.vn/images/payment/icon-cod.png" alt="Thanh toán khi nhận hàng" title="Thanh toán khi nhận hàng">
                                                        <label for="id_thanhtoan_nhanhang">Thanh toán khi nhận hàng</label>
                                                        <input id="id_thanhtoan_nhanhang" name="payment" value="offline" type="radio" class="option-input radio">
                                                        <span class="radiobtn_payment"></span>
                                                    </label>
                                                </div>
                                                <script>
                                                    $(function () {
                                                        $(".box-pay").click(function () {
                                                            showHidePayment('id_thanhtoan_chuyenkhoan', 'global_thanhtoanchuyenkhoan');
                                                            showHidePayment('id_thanhtoan_paypal', 'glo-img-paypal');
                                                            showHidePayment('id_thanhtoan_baokim', 'glo-thanhtoan-baokum');
                                                            showHidePayment('id_thanhtoan_nganluong', 'glo-thanhtoan-nganluong');
                                                            showHidePayment('id_thanhtoan_onpay', 'glo-thanhtoan-onepay');
                                                        });

                                                        // Chon loai thanh toan dau tien neu khong co mac dinh nao ca
                                                        if ($(':radio[name=id_thanhtoan]:checked').length === 0) {
                                                            $(':radio[name=id_thanhtoan]:first').prop('checked', true);
                                                        }
                                                    })
                                                    function showHidePayment(id, classes) {
                                                        if ($('#' + id).is(':checked')) {
                                                            $('.' + classes).show('200');
                                                        } else {
                                                            $('.' + classes).hide('200');
                                                        }
                                                    }
                                                </script>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group-check-out">
                                        <h5 class="title-payment"><i class="fa fa-shopping-basket"></i> Thông tin đơn hàng</h5>
                                        <div class="payment-cart">
                                            <div class="info-payment-cart">
                                                <a class="postion-img" href="https://demo1013.web30s.vn/HTC-One-E9-Dual-390854/"><img id="postion-img" src="https://demo1013.web30s.vn/datafiles/4751/upload/thumb_images/14992493006090_700_htc-one-e9-2.jpg"></a>
                                                <div class="group-info-payment">
                                                    <a href="https://demo1013.web30s.vn/HTC-One-E9-Dual-390854">HTC One E9 Dual</a>
                                                    <div class="position-payment">
                                                        <label>1</label>
                                                        <h6 class="info-payment-right"> 4.450.000 VND</h6>
                                                    </div>
                                                    <div class="box-features-payment">
                                                        <span class="img-features-payment">Màu sắc:&nbsp;Màu trắng<img src="/datafiles/1/05-07-2017/thumb_14992493733117_700_htc-one-e9-2.jpg"></span>
                                                        <h6 class="info-payment-middle">16 GB</h6>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="info-payment-cart">
                                                <a class="postion-img" href="https://demo1013.web30s.vn/Dien-thoai-di-dong-HTC-Desire-820G-Plus-Dual-SIM-390855/">
                                                    <img id="postion-img" src="https://demo1013.web30s.vn/datafiles/4751/upload/thumb_images/14992491376020_700_htc-desire-820g-plus-1.jpg">
                                                </a>
                                                <div class="group-info-payment">
                                                    <a href="https://demo1013.web30s.vn/Dien-thoai-di-dong-HTC-Desire-820G-Plus-Dual-SIM-390855">Điện thoại di động HTC Desire 820G Plus Dual SIM</a>
                                                    <div class="position-payment">
                                                        <label>1</label>
                                                        <h6 class="info-payment-right"> 2.870.000 VND</h6>
                                                    </div>
                                                    <div class="box-features-payment">
                                                        <span class="img-features-payment">Màu sắc:&nbsp;Màu trắng
                                                            <img src="/datafiles/1/05-07-2017/thumb_14992491879587_700_htc-desire-820g-plus-1.jpg">
                                                        </span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="info-payment-cart">
                                                <a class="postion-img" href="https://demo1013.web30s.vn/Laptop-Dell-Vostro-5568-391442/">
                                                    <img id="postion-img" src="https://demo1013.web30s.vn/datafiles/4751/upload/thumb_images/14993059437753_700_laptop-dell-vostro-5568-1.jpg">
                                                </a>
                                                <div class="group-info-payment">
                                                    <a href="https://demo1013.web30s.vn/Laptop-Dell-Vostro-5568-391442">Laptop Dell Vostro 5568</a>
                                                    <div class="position-payment">
                                                        <label>1</label>
                                                        <h6 class="info-payment-right"> 16.490.000 VND</h6>
                                                    </div>
                                                    <div class="box-features-payment">
                                                        <span class="img-features-payment">Màu sắc:&nbsp;Màu vàng
                                                            <img src="/datafiles/1/06-07-2017/thumb_14993069422020_700_laptop-dell-vostro-5568-1.jpg">
                                                        </span>
                                                        <h6 class="info-payment-middle">2GB</h6>
                                                        <h6 class="info-payment-middle">500GB</h6>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="info-payment-cart">
                                                <a class="postion-img" href="https://demo1013.web30s.vn/TIVI-LED-SAMSUNG-50-INCH-UA50MU6100KXXV-391474/">
                                                    <img id="postion-img" src="https://demo1013.web30s.vn/datafiles/4751/upload/thumb_images/14993100181884_UA50MU6100KXXV.jpg">
                                                </a>
                                                <div class="group-info-payment">
                                                    <a href="https://demo1013.web30s.vn/TIVI-LED-SAMSUNG-50-INCH-UA50MU6100KXXV-391474">TIVI LED SAMSUNG 50 INCH UA50MU6100KXXV</a>
                                                    <div class="position-payment">
                                                        <label>1</label>
                                                        <h6 class="info-payment-right"> 1.999.000 VND</h6>
                                                    </div>
                                                    <div class="box-features-payment"></div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>            
                                        </div>

                                        <div class="form-total">
                                            <h5 class="title-payment"> Thành tiền:</h5>
                                            <h5 class="total" id="basket-total"><?php echo number_format($total_amount) ?> VND</h5>
                                        </div>
                                        <div class="security-buy">
                                            <div class="postion-received-buy-content">
                                                <textarea class="received-buy" rows="3" name="noidung" id="noidung" placeholder="Ghi chú"></textarea>
                                            </div>
                                            <div class="postion-security">
                                                <!-- <input class="received-buy" name="mabaove" id="mabaove" type="text" placeholder="Mã bảo vệ">
                                                <div data-type="order" class="autoCaptcha"><img src="/imgcode.php?time=0.6013781446914437&amp;type=order">
                                                    <a class="renewCaptcha"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                                </div> -->
                                            </div>
                                            <span class="submitbutton disdathang" style="display: none">Đang xử lý ...</span>
                                            <input type="submit" name="thanhtoandatmuasanpham" value="Đặt hàng" class="confirm-cart">
                                            <input type="hidden" readonly="" name="lang_proccess" id="lang_proccess" value="Đang xử lý ...">
                                        </div>
                                    </div>
                                </form>
                                <div class="clear"></div>
                            </div>
                            <style>
                                .dv-child-one-style, .dv-child-left, .left_conten {
                                    width: 100%
                                }
                            </style>
                            <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
                                <script type="text/javascript" src="../js/messages_vi.min.js"></script>
                            <link rel="stylesheet" href="https://demo1013.web30s.vn/templates/admin_pro/components/select2/dist/css/select2.min.css">
                            <script src="https://demo1013.web30s.vn/templates/admin_pro/components/select2/dist/js/select2.full.min.js"></script>
                            <script type="text/javascript">
                                $(function () {
                                    $('#TheFormX').validate({
                                        errorClass: "invalid-value",
                                        validClass: "valid-value",
                                        rules: {
                                            tendaydu: {
                                                required: true
                                            },
                                                            email: {
                                                required: true,
                                                email: true
                                            },
                                                            diachi: {
                                                required: true
                                            },
                                            dienthoai: {
                                                required: true,
                                                minlength: 10,
                                                maxlength: 13
                                            },
                                            cf_tendaydu: {
                                                required: true
                                            },
                                            cf_diachi: {
                                                required: true
                                            },
                                            cf_dienthoai: {
                                                required: true,
                                                minlength: 10,
                                                maxlength: 13
                                            },
                                            mabaove: {
                                                required: true
                                            }
                                        }
                                    })
                                });
                                var initOffset = $('.group-check-out').offset().top;
                                var botOffset = 0;
                                $('.group-info').on('DOMSubtreeModified', function () {
                                    botOffset = initOffset + $('.group-info').height() - $('.group-check-out').height();
                                }).trigger('DOMSubtreeModified');
                                $(window).scroll(function () {
                                    if ($(this).width() >= 1024) {
                                        $('.group-check-out').toggleClass('group-check-out-fixed', $(window).scrollTop() >= initOffset && $(window).scrollTop() <= botOffset);
                                        if ($(window).scrollTop() > botOffset) {
                                            var height = $('.group-info').height() - $('.group-check-out').height();
                                            $('.group-check-out').css('transform', 'translate3d(0,' + height + 'px,0)');
                                        } else {
                                            $('.group-check-out').css('transform', 'none');
                                        }
                                    }
                                });

                                //JS Thay doi phuong thuc van chuyen (neu co).

                                var objMethodShipping = $('#d_method_shipping');
                                var valProvince = $('#d_to_province');
                                var valDistrict = $('#d_to_district');


                                $('.autoProvince').change(function () {
                                    var objProvince = $(this);
                                    var province = objProvince.val();
                                    var objDistrict = $('#d_to_district');
                                    if (!province) {
                                        objDistrict.find('option').remove();
                                        objMethodShipping.html('...');
                                        return;
                                    }
                                    objMethodShipping.html('...');
                                    getDistrict(objDistrict, province);

                                });

                                $('.autoDistrict').change(function () {
                                    var objDistrict = $(this);
                                    var district = objDistrict.val();
                                    if (!district) {
                                        objMethodShipping.html('...');
                                        return;
                                    }
                                    var valPaymentMethod = $('input[name="id_thanhtoan"]:checked').val();
                                    getCTU(objMethodShipping, valPaymentMethod, valProvince.val(), district);
                                }).trigger('change');

                                $('input[name="id_thanhtoan"]').change(function () {
                                    var objPayment = $(this);
                                    var paymentMethod = objPayment.val();
                                    if (!paymentMethod || !valDistrict.val()) {
                                        objMethodShipping.html('...');
                                        return;
                                    }
                                    resetPrice();
                                    getCTU(objMethodShipping, paymentMethod, valProvince.val(), valDistrict.val());
                                }).trigger('change');

                                $('#noshipping').click(function () {
                                    if (this.checked) {
                                        $('#select-shipping,.form-shipping,.form-amount').hide();
                                        resetPrice();
                                        $('.autoProvince').val('').trigger('change');
                                    } else {
                                        $('#select-shipping,.form-shipping,.form-amount').show();
                                    }
                                });

                                $(document).on('change', '.ms-method', function () {
                                    var amount = $('#basket-amount').data('value');
                                    var objShipping = $('#basket-shipping');
                                    var shipping = $(this).data('fee');
                                    var total = amount + shipping;

                                    objShipping.data('value', shipping).html(formatCurrency(shipping) + " VND");

                                    $('#basket-total').html(formatCurrency(total) + " VND");
                                });

                                function getCTU(objMethodShipping, paymentMethod, province, district) {
                                    $('#img-loading-ctu').css('display','block');
                                    $.get('/?module=van-chuyen&action=method-shipping&paymentMethod=' + paymentMethod + '&idProvince=' + province + '&idDistrict=' + district + '&haity=', function (data) {
                                        $('#img-loading-ctu').css('display','none');
                                        objMethodShipping.hide().html(data).fadeIn().trigger('DOMSubtreeModified');
                                    });
                                }

                                function getDistrict(objDistrict, province) {
                                    $.get('/?module=van-chuyen&action=district&idProvince=' + province, function (data) {
                                        objDistrict.find('option').remove().end().append(data);
                                        var selectValue = objDistrict.data('select');
                                        if (selectValue) {
                                            objDistrict.val(selectValue);
                                        }
                                    });
                                }

                                function resetPrice() {
                                    $('#basket-shipping').html("0 VND");
                                    $('#basket-total').html(formatCurrency($('#basket-amount').data('value')) + " VND");
                                }

                                function Get_Information_Register() {
                                    $("#cf_tendaydu").val($("#tendaydu").val());
                                    $("#cf_diachi").val($("#diachi").val());
                                    $("#cf_dienthoai").val($("#dienthoai").val());
                                }
                                $(function () {
                                    $('#d_to_province, #d_to_district').select2();
                                })
                            </script>                
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </section>				
        </div>
    </section>
</article>
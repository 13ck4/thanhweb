<article>
	<section class="content gallery pad1" style="padding:0">
		<div class="midle_main_idclass fix1200_cus1">
			<div class="main">
				<div class="content_top">
					<div class="container">
						<div class="dv-child-one-style">
                            <div class="dv-child-left">
                                <h3>GIỎ HÀNG</h3>
                                <div class="shopping-cart">
                                    <?php if($total_items > 0) : ?>
                                        <form action="<?php echo base_url('cart/update')?>" method="post">
                                            <input type="hidden" name="module" value="order">
                                            <input type="hidden" name="action" value="cart_maxvalue">
                                            <div class="column-labels">
                                                <label class="product-cart-image">Hình ảnh</label>
                                                <label class="product-cart-details">Sản phẩm</label>
                                                <label class="product-cart-price">Đơn giá</label>
                                                <label class="product-cart-quantity">Số lượng</label>
                                                <label class="product-cart-removal">Remove</label>
                                                <label class="product-cart-line-price">Thành tiền</label>
                                            </div>
                                            
                                            <?php $total_amount = 0; ?>
                                            <?php foreach ($carts as $row):?>
                                                <?php $total_amount = $total_amount + $row['subtotal']?>
                                                <div class="product-cart-boxitem">
                                                    <div class="product-cart-image">
                                                        <a href="<?php echo base_url('product/view/'.$row['id'])?>" title="<?=$row['name']?>">
                                                            <img src="<?php echo base_url('upload/product/'.$row['image_link'])?>">
                                                        </a>
                                                    </div>
                                                    <div class="product-cart-details">
                                                        <div class="product-cart-title">
                                                            <a href="<?php echo base_url('product/view/'.$row['id'])?>"><?=$row['name']?></a></div>
                                                        <p class="product-cart-description"></p>
                                                    </div>
                                                    <div class="product-cart-price">
                                                        <div><b><?=number_format($row['price'])?></b> VND</div>
                                                    </div>
                                                    <div class="product-cart-quantity">
                                                        <input class="input-number" name="qty_<?php echo $row['id'] ?>" style="width:70px" min="1" type="number" value="<?=$row['qty']?>"></td>
                                                    </div>
                                                    <div class="product-cart-removal">
                                                        <a class="remove-product-cart" href="<?php echo base_url('cart/del/'.$row['id']) ?>">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-cart-line-price">
                                                        <b class="product-cart-line-price-num" id="idfullmoney1"><?=number_format($row['subtotal'])?></b> VND                    </div>
                                                </div>
                                            <?php endforeach?>
                                            


                                            <button class="checkout-cart pull-left" type="submit" name="update">Cập Nhật Giỏ Hàng</button>
                                        
                                            <a href="<?php echo site_url('order/checkout') ?>" class="checkout-cart" >Mua Hàng</a>
                                            <button class="checkout-cart" name="Submit" type="button"  href="<?php echo site_url()?>"> Tiếp Tục Mua Hàng</button>
                                        </form>
                                    <?php else : ?>
                                        <h2> Không có sản phẩm nào trong giỏ hàng </h2>
                                    <?php endif?>
                                </div>
                                <script type="text/javascript">
                                    $(document).ready(function () {

                                        /* Set rates + misc */
                                        var fadeTime = 300;


                                        /* Assign actions */
                                        $('.input-number').on('change keyup mouseup', function () {
                                            updateQuantity(this);
                                        });

                                        /* Recalculate cart */
                                        function recalculateCart() {
                                            var total = 0;

                                            /* Sum up row totals */
                                            $('.product-cart-boxitem').each(function () {
                                                total += parseFloat($(this).children('.product-cart-line-price').children('.product-cart-line-price-num-hide').text());
                                            });

                                            /* Update totals display */
                                            $('.totals-value').fadeOut(fadeTime, function () {
                                                $('#ttmoney').html(formatCurrency(total));
                                                if (total == 0) {
                                                    $('.checkout-cart').fadeOut(fadeTime);
                                                } else {
                                                    $('.checkout-cart').fadeIn(fadeTime);
                                                }
                                                $('.totals-value').fadeIn(fadeTime);
                                            });
                                        }


                                        /* Update quantity */
                                        function updateQuantity(quantityInput) {

                                            /* Calculate line price */
                                            var productRow = $(quantityInput).parent().parent();
                                            var price = parseFloat(productRow.children('.product-cart-price').children('.product-cart-price-num').text());
                                            var quantity = $(quantityInput).val();
                                            var linePrice = price * quantity;

                                            /* Update line price display and recalc cart totals */
                                            productRow.children('.product-cart-line-price').children('.product-cart-line-price-num').each(function () {
                                                $(this).fadeOut(fadeTime, function () {
                                                    $(this).text(formatCurrency(linePrice));
                                                    $(this).parent().children('.product-cart-line-price-num-hide').text(linePrice);
                                                    recalculateCart();
                                                    $(this).fadeIn(fadeTime);
                                                });
                                            });
                                        }

                                        $('.remove-product-cart').click(function () {
                                            var id = $(this).data('id');
                                            window.location.href='https://demo1013.web30s.vn/cart-del/' + id;
                                        });
                                    });

                                </script>                
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


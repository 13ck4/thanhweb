<div class="product">
    <div class="dv_content_leftsp">
        <h3>MENU SẢN PHẨM</h3>
        <ul class="dv_list_dmsp">
            <?php foreach($catalog_list as $row) : ?>
                <?php 
                    $name = convert_vi_to_en($row->name); 
                    $name = strtolower($name);
                ?>
                <li>
                    <a href="<?php echo base_url($name.'-c'.$row->id) ?>" title="<?=$row->name?>"><?=$row->name?></a>
                    <?php  if(!empty($row->subs)) : ?> <span  class="SHOW_menu_left" data="<?=$name.'-c'.$row->id?>" data-on="0"><i class="fa fa-angle-down"></i></span><?php endif?>
                    <!-- lay danh sach danh muc con -->
                    <?php  if(!empty($row->subs)) : ?>
                        <ul class="dv_list_dmsp_2  ul-data-<?=$name.'-c'.$row->id?>">
                            <?php foreach($row->subs as $sub) : ?>	
                                <?php 
                                    $name = convert_vi_to_en($sub->name); 
                                    $name = strtolower($name);
                                ?>				                     
                                <li>
                                    <a href="<?php echo base_url($name.'-c'.$sub->id) ?>" title="<?= $sub->name ?>"> 
                                        <?= $sub->name ?>
                                    </a>
                                </li>	
                            <?php endforeach?>                              
                        </ul>
                    <?php endif?>
                </li>
            <?php endforeach ?>
        </ul>
        <script type="text/javascript">
            $(".SHOW_menu_left").click(function () {
                var data = $(this).attr('data');
                var data_text = $(this).html();
                var data_on = $(this).attr("data-on");

                if (data_on == 0 && data_text != "") {
                    $(".SHOW_menu_left").attr("data-on", "0");
                    $(".SHOW_menu_left").html("<i class='fa fa-angle-down'></i>");
                    $(this).html("<i class='fa fa-angle-up'></i>");
                    $(this).attr("data-on", "1");
                    $(".dv_list_dmsp_2").hide('500');
                    $(".ul-data-" + data).show('500');
                }
                else {
                    $(this).attr("data-on", "0");
                    $(this).html("<i class='fa fa-angle-down'></i>");
                    $(".ul-data-" + data).hide('500');
                }
            });
        </script>
    </div>
    <div class="dv_content_leftsp">
        <h3>SẢN PHẨM ĐẶC BIỆT</h3>
        <div class="dv-marqueew">
            <div class="marqueew" style="height: 400px;">
                <div class="js-marquee-wrapper" style="margin-top: 400px; animation: 75.0469s linear 0s 1 normal none running marqueeAnimation-4710634;">
                    <div class="js-marquee" style="margin-right: 0px; float: none; margin-bottom: 0px;">
                        <?php foreach($product_newest as $key=>$row) : ?>
                            <?php 
                                $name = convert_vi_to_en($row->name); 
                                $name = strtolower($name);
                            ?>
                            <div class="dv-spleft">
                            <a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key]->id?>.html" title="<?=$product_newest[$key]->name?>">
                                <img src="<?php echo base_url('/upload/product/'.$product_newest[$key]->image_link)?>" alt="<?=$product_newest[$key]->name?>" title="<?=$product_newest[$key]->name?>" />
                            </a>
                                <h4><a href="<?php echo base_url()?>san-pham/<?=$name?>-<?=$product_newest[$key]->id?>.html" title="<?=$product_newest[$key]->name?>"><?=$product_newest[$key]->name?></a></h4>
                                <div class="price-left">
                                    <?php if($product_newest[$key]->discount > 0) :?>
                                        <?php $price_new = $product_newest[$key]->price - $product_newest[$key]->discount; ?>
                                        <span class="item_goc"><?php echo number_format($product_newest[$key]->price) ?> <sup> đ</sup>&nbsp;</span>
                                        <span class='item_price'><?php echo number_format($price_new) ?> <sup> đ</sup></span>
                                    <?php else : ?>
                                        <span class='item_price'><?php echo number_format($product_newest[$key]->price) ?> <sup> đ</sup></span>
                                    <?php endif ?>

                                </div>
                                <div class="dv-nd"></div>
                                <div class="clearfix"> </div>
                            </div>
                        <?php endforeach?>                
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo public_url('site/js/jquery.marquee.min.js')?>"></script>
        <script>$('.marqueew').marquee({
                duration: 19000,
                gap: 0,
                delayBeforeStart: 0,
                direction: 'up',
                duplicated: true,
                pauseOnHover: true,
                startVisible: true
            });
        </script>
    </div>
    <div class="dv_content_leftsp">
        <h3>TIN TỨC HOT</h3>
        <div id="newsRight">
            <?php foreach($news_list as $row) : ?>
                <?php 
                    $name = convert_vi_to_en($row->title); 
                    $name = strtolower($name);
                ?>
                <a href="<?php echo base_url()?>chi-tiet/<?=$name?>-<?=$row->id?>.html" title="<?=$row->title?>">
                    <img src="<?php echo base_url('/upload/news/'.$row->image_link)?>" alt="<?=$row->title?>" title="<?=$row->title?>">
                    <h4>
                        <?php 
                            if(strlen($row->intro) < 20){
                                echo $row->intro;
                            }else{
                                echo mb_substr($row->intro,0,80,'utf8').'...';
                            }
                        ?>
                    </h4>
                    <div class="clear"></div>
                </a>
            <?php endforeach?>   
        </div>
    </div>
</div>
<div class="mainmenu-area bg-color-2 hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="mainmenu-left visible-lg  visible-md">
                    <div class="product-menu-title">
                        <h2>MENU SẢN PHẨM <i class="fa fa-arrow-circle-down"></i></h2>
                    </div>
                    <div class="product_vmegamenu pl-10">
                        <ul>
                        <?php foreach($catalog_list as $row) : ?>
                            <?php 
                                $name = convert_vi_to_en($row->name); 
                                $name = strtolower($name);
                            ?>
                            <li>
                                <a href="<?php echo base_url($name.'-c'.$row->id) ?>" title="<?=$row->name?>" <?php  if(!empty($row->subs)) : ?> class="hover-icon" <?php endif?> > <i class="fa fa-list-alt fa-fw " aria-hidden="true"></i><?=$row->name?> </a>
                                <!-- lay danh sach danh muc con -->
                                <?php  if(!empty($row->subs)) : ?>
                                    <div class="vmegamenu"> 
                                        <?php foreach($row->subs as $sub) : ?>	
                                            <?php 
                                                $name = convert_vi_to_en($sub->name); 
                                                $name = strtolower($name);
                                            ?>				                     
                                            <a href="<?php echo base_url($name.'-c'.$sub->id) ?>" title="<?= $sub->name ?>"> 
                                                <?= $sub->name ?>
                                            </a>
                                        <?php endforeach?>                              
                                    </div>
                                <?php endif?>
                            </li>
                        <?php endforeach ?>
                            
                        </ul>
                    </div>
                </div>  
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="mainmenu">
                    <nav>
                        <ul>
                            <li class="grid active" id="homes">
                                <a class="" href="<?php echo base_url()?>"><span>Trang chủ</span></a>
                            </li>
                            <li class="grid" id="gioi-thieu">
                                <a class="" href="<?php echo base_url('gioi-thieu') ?>"><span>Giới Thiệu</span></a>
                            </li>
                            <li class="grid" id="san-pham">
                                <a class="" href="<?php echo base_url('san-pham')?>"><span>Sản phẩm</span></a>
                                <ul class="dl-submenu">
                                    <?php foreach($catalog_list as $row) : ?>
                                        <?php 
                                            $name = convert_vi_to_en($row->name); 
                                            $name = strtolower($name);
                                        ?>
                                        <li>
                                            <a href="<?php echo base_url($name.'-c'.$row->id) ?>" title="<?=$row->name?>"><?=$row->name?> <?php  if(!empty($row->subs)) : ?> <i class="fa fa-angle-right"> </i><?php endif?></a>
                                            <!-- lay danh sach danh muc con -->
                                            <?php  if(!empty($row->subs)) : ?>
                                            <ul class="dl-submenu"> 
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
                            </li>
                            <li class="grid" id="tin-tuc">
                                <a class="" href="<?php echo base_url('tin-tuc') ?>"><span>Tin tức</span></a>
                                <!-- <ul class="dl-submenu  ">
                                    <li><a href="https://demo1013.web30s.vn/Tin-tuc-xa-hoi-405868">» Tin tức xã hội</a></li>
                                    <li><a href="https://demo1013.web30s.vn/Tin-tuc-suc-khoe-405869">» Tin tức sức khỏe</a></li>
                                    <li><a href="https://demo1013.web30s.vn/Tin-tuc-cong-nghe-405870">» Tin tức công nghệ</a></li>
                                    <li><a href="https://demo1013.web30s.vn/Tin-cong-nghe-393620">» Tin công nghệ</a></li>
                                    <li><a href="https://demo1013.web30s.vn/Tin-cap-nhat-393621">» Tin cập nhật</a></li>
                                </ul> -->
                            </li>
                            <!-- <li class="grid">
                                <a class="" href="https://demo1013.web30s.vn/Dich-Vu-391689"><span>Dịch Vụ</span></a>
                            </li>              -->
                            <li class="grid" id="tuyen-dung">
                                <a class="" href="<?php echo base_url('tuyen-dung') ?>"><span>Tuyển Dụng</span></a>
                            </li>
                            <li class="grid" id="lien-he">
                                <a class="" href="<?php echo base_url('lien-he') ?>"><span>Liên hệ</span></a>
                            </li>    

                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var url = window.location.pathname.split("/");  
    if(url[2] != ""){
        $(".mainmenu").find("li.grid").removeClass("active");
    } 
    $.each( $(".mainmenu").find("li.grid"), function( key, value ) {
        if(value.id == url[2]){
            $(this).addClass("active");
        }
    });                 
</script>
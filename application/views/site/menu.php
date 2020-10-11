<div class="mainmenu-area bg-color-2 hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="mainmenu-left visible-lg  visible-md">
                    <div class="product-menu-title">
                        <h2>MENU SẢN PHẨM <i class="fa fa-arrow-circle-down"></i></h2>
                    </div>
                    <div class="product_vmegamenu  ">
                        <ul>
                        <?php foreach($catalog_list as $row) : ?>
                            <?php 
                                $name = convert_vi_to_en($row->name); 
                                $name = strtolower($name);
                            ?>
                            <li>
                                <a href="<?php echo base_url($name.'-c'.$row->id) ?>" title="<?=$row->name?>" <?php  if(!empty($row->subs)) : ?> class="hover-icon" <?php endif?> > <?=$row->name?> </a>
                                
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
                            <li class="grid active">
                                <a class="" href="<?php echo base_url()?>"><span>Trang chủ</span></a>
                            </li>
                            <li class="grid">
                                <a class="" href="<?php echo base_url('gioi-thieu') ?>"><span>Giới Thiệu</span></a>
                            </li>
                            <li class="grid ">
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
                                <!-- <ul class="dl-submenu  ">
                                    <li><a href="https://demo1013.web30s.vn/Dien-Thoai-390755">» Điện Thoại</a>
                                        <ul class="dl-submenu">
                                            <li>
                                                <a href="https://demo1013.web30s.vn/iPhone-390764">» iPhone</a>
                                            </li>
                                            <li>
                                                <a href="https://demo1013.web30s.vn/Samsung-390765">» Samsung</a>
                                            </li>
                                            <li><a href="https://demo1013.web30s.vn/HTC-390769">» HTC</a></li>
                                            <li><a href="https://demo1013.web30s.vn/LG-390770">» LG</a></li>
                                            <li><a href="https://demo1013.web30s.vn/Motorola-390771">» Motorola</a></li>
                                            <li><a href="https://demo1013.web30s.vn/Sony-390767">» Sony</a></li>
                                            <li><a href="https://demo1013.web30s.vn/Nokia-390763">» Nokia</a></li>
                                            <li><a href="https://demo1013.web30s.vn/Sky-390768">» Sky</a></li>
                                            <li><a href="https://demo1013.web30s.vn/OPPO-390766">» OPPO</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="https://demo1013.web30s.vn/May-Tinh-390756">» Máy Tính</a>
                                        <ul class="dl-submenu">
                                            <li><a href="https://demo1013.web30s.vn/Dell-390772">» Dell</a></li>
                                            <li><a href="https://demo1013.web30s.vn/Macbook-390777">» Macbook </a></li>
                                            <li><a href="https://demo1013.web30s.vn/Asus-390775">» Asus </a></li>
                                            <li><a href="https://demo1013.web30s.vn/HP-390773">» HP</a></li>
                                            <li><a href="https://demo1013.web30s.vn/Lenovo-390774">» Lenovo</a></li>
                                            <li><a href="https://demo1013.web30s.vn/Acer-390776">» Acer </a></li>
                                            <li><a href="https://demo1013.web30s.vn/MSI-390778">» MSI</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="https://demo1013.web30s.vn/Phu-kien-cong-nghe-390861">» Phụ kiện công nghệ</a>
                                        <ul class="dl-submenu">
                                            <li><a href="https://demo1013.web30s.vn/Chuot-391454">» Chuột</a></li>
                                            <li><a href="https://demo1013.web30s.vn/Tai-nghe-391456">» Tai nghe</a></li>
                                            <li><a href="https://demo1013.web30s.vn/USB-391457">» USB</a></li>
                                            <li><a href="https://demo1013.web30s.vn/Camera-391459">» Camera</a></li>
                                            <li><a href="https://demo1013.web30s.vn/Ban-phim-391458">» Bàn phím</a></li>
                                            <li><a href="https://demo1013.web30s.vn/De-tan-nhiet-391460">» Đế tản nhiệt</a></li>
                                            <li><a href="https://demo1013.web30s.vn/Phu-kien-khac-391461">» Phụ kiện khác</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="https://demo1013.web30s.vn/May-giat-390871">» Máy giặt</a>
                                        <ul class="dl-submenu">
                                            <li><a href="https://demo1013.web30s.vn/Toshiba-391483">» Toshiba</a></li>
                                            <li><a href="https://demo1013.web30s.vn/SHARP-391486">» SHARP</a></li>
                                            <li><a href="https://demo1013.web30s.vn/Samsung-391488">» Samsung</a></li>
                                            <li><a href="https://demo1013.web30s.vn/LG-391494">» LG</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="https://demo1013.web30s.vn/Tivi-390872">» Tivi</a>
                                        <ul class="dl-submenu">
                                            <li><a href="https://demo1013.web30s.vn/Samsung-391470">» Samsung</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="https://demo1013.web30s.vn/may-lanh">» Máy lạnh</a></li>
                                    <li><a href="https://demo1013.web30s.vn/dien-dung-gia-dinh-noi-com">» Điện dụng gia đình, nồi cơm</a></li>
                                    <li><a href="https://demo1013.web30s.vn/tu-lanh">» Tủ lạnh</a></li>
                                    <li><a href="https://demo1013.web30s.vn/san-pham-cu">» Sản phẩm cũ</a></li>
                                    <li><a href="https://demo1013.web30s.vn/do-dung-gia-dinh">» Đồ dùng gia đình</a></li>
                                    <li><a href="https://demo1013.web30s.vn/loc-nuoc">» Lọc nước</a></li>
                                    <li><a href="https://demo1013.web30s.vn/may-giac-say-quan-ao">» Máy giặc sấy quần áo</a></li>
                                    <li><a href="https://demo1013.web30s.vn/sim-so-the-cao-thu-ho">» Sim số, thẻ cào, thu hộ</a></li>
                                    <li><a href="https://demo1013.web30s.vn/noi-that">» Nội thất</a></li>
                                </ul> -->
                            </li>
                            <li class="grid ">
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
                            <li class="grid">
                                <a class="" href="<?php echo base_url('tuyen-dung') ?>"><span>Tuyển Dụng</span></a>
                            </li>
                            <li class="grid">
                                <a class="" href="<?php echo base_url('lien-he') ?>"><span>Liên hệ</span></a>
                            </li>    

                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
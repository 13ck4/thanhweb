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
                            <?php foreach($menu_list as $row):?>
                                <?php 
                                    $name = convert_vi_to_en($row->title); 
                                    $name = strtolower($name);
                                ?>
                                <li class="grid" id=<?= $name ?>>
                                    <a class="" href="<?php echo base_url($name) ?>">
                                        <span>
                                            <?= $row->title?> <?php  if(!empty($row->subs)) echo '<i class="fa fa-angle-down ml-5"></i>'; else echo ''; ?></span>
                                    </a>

                                    <?php  if(count($row->subs) > 0) : ?>
                                        <ul class="dl-submenu">
                                            <?php foreach($row->subs as $rows) : ?>
                                                <?php 
                                                    $name = convert_vi_to_en($rows->name); 
                                                    $name = strtolower($name);
                                                ?>
                                                <li><!-- Content container to add padding -->
                                                    <a href="<?php echo base_url($name.'-c'.$rows->id) ?>" title="<?=$rows->name?>">
                                                        <?=$rows->name?> <?php  if(!empty($rows->subs)) : ?> <i class="fa fa-angle-right"> </i><?php endif?>
                                                    </a>
                                                    <?php  if(!empty($rows->subss)) : ?>
                                                        <ul class="dl-submenu">
                                                            <?php foreach($rows->subss as $rowss) : ?>
                                                                <?php 
                                                                    $name = convert_vi_to_en($rowss->name); 
                                                                    $name = strtolower($name);
                                                                ?>
                                                                <li><a href="<?php echo base_url($name.'-c'.$rowss->id) ?>" title="<?=$rowss->name?>"><?=$rowss->name?></a></li>
                                                            <?php endforeach ?>
                                                        </ul><!-- end ul col -->
                                                    <?php endif?> 
                                                </li><!-- end li --> 
                                            <?php endforeach ?>
                                        </ul><!-- end ul dropdown-menu -->
                                    <?php endif ?>

                                </li>    
                            <?php endforeach ?>
                            
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
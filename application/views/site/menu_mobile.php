<div class="dv-mnmb mobile menu_mobile">
	<div class="container">
		<a class="a_home" href="<?php echo base_url()?>">trang chủ</a>
		<div id="dl-menu" class="dl-menuwrapper">
			<button class="dl-trigger cur "></button>
			<div class="clear"></div>
			<ul class="dl-menu">
				<li class='grid active'>
					<a class='' href='<?php echo base_url()?>'>
						<span>Trang chủ</span>
					</a>
				</li>
				<li class='grid'>
					<a class='' href='<?php echo base_url('gioi-thieu')?>' >
						<span>Giới Thiệu</span>
					</a>
				</li>
				<li class='grid '>
					<a class='' href='<?php echo base_url('san-pham')?>' >
						<span>Sản phẩm</span>
					</a>
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
				<li class='grid '>
                    <a class="" href="<?php echo base_url('tin-tuc') ?>"><span>Tin tức</span></a>
				</li>
				<li class='grid'>
					<a class="" href="<?php echo base_url('lien-he') ?>"><span>Liên hệ</span></a>
				</li>       <!--  -->
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
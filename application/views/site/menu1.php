<ul class="nav navbar-nav"><!-- Home -->
    <li class="active"><a href="<?php echo base_url()?>"><i class="fa fa-home mr-5"></i>Trang chủ</a></li> <!-- Pages -->
    <?php foreach($menu_list as $row):?>
        <li class="dropdown  <?php  if($row->id== 1) echo  ' yamm-fw'; else echo 'left'; ?>">
            <a href="<?php echo base_url($row->url)?>" <?php  if($row->id != 1):?> onclick="window.location.href='<?php echo base_url($row->url)?>'";<?php  endif?>data-toggle="dropdown" class="<?php  if(!empty($row->subs)) echo 'dropdown-toggle'; else echo ''; ?> ">
                <?=$row->title?> <?php  if(!empty($row->subs)) echo '<i class="fa fa-angle-down ml-5"></i>'; else echo ''; ?>
            </a>
            <?php  if(count($row->subs) > 0) : ?>
                <ul class="dropdown-menu">
                    <li><!-- Content container to add padding -->
                        <div class="yamm-content">
                            <div class="row">
                                <?php foreach($row->subs as $rows) :?>
                                    <?php 
                                        $name = convert_vi_to_en($rows->name); 
                                        $name = strtolower($name);
                                    ?>
                                    <ul class="<?php  if($row->id== 1) echo  'col-sm-3'; else echo 'col-sm-12'; ?> ">
                                        <a href="<?php echo base_url(strtolower(convert_vi_to_en($row->title)).'/'.$name.'-'.$rows->id)?>.html"> 
                                            <h6><?=$rows->name?></h6>
                                        </a>
                                        <?php  if(!empty($rows->subss)) : ?>
                                            <?php foreach($rows->subss as $rowss) : ?>
                                                <?php 
                                                    $name = convert_vi_to_en($rows->name); 
                                                    $name = strtolower($name);
                                                ?>
                                                <li><a href="<?php echo base_url($name.'-'.$rowss->id) ?>.html" title="<?=$rowss->name?>"><?=$rowss->name?></a></li>
                                            <?php endforeach ?>
                                        <?php endif?>
                                    </ul><!-- end ul col -->
                                <?php endforeach ?>
                                <!-- end ul col -->
                            </div><!-- end row -->
                        </div><!-- end yamn-content -->
                    </li><!-- end li --> 
                </ul><!-- end ul dropdown-menu -->
            <?php endif ?>
        </li><!-- end li dropdown --><!-- Features -->
    <?php endforeach ?>
</ul><!-- end navbar-nav -->
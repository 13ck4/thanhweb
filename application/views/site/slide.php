<div id="column-id-1494857548816" class="sppb-addon-container">
    <div id="sppb-addon-1496930674534" class="clearfix">
        <div id="sppb-carousel1" class="sppb-carousel sppb-slide">
            <ol class="sppb-carousel-indicators">
                <li data-sppb-target="#sppb-carousel1" class="active" data-sppb-slide-to="0"></li>
                <li data-sppb-target="#sppb-carousel1" data-sppb-slide-to="1"></li>
                <li data-sppb-target="#sppb-carousel1" data-sppb-slide-to="2"></li>
            </ol>
            <div class="sppb-carousel-inner sppb-text-center">
                <?php foreach($slide_list as $row) : ?>
                    <div class="sppb-item sppb-item-has-bg">
                        <img src="<?php echo base_url()?>/upload/slide/<?=$row->image_link?>" alt="<?=$row->name?>" title="<?=$row->name?>" style="width:100%; height:400px;">
                        <div class="sppb-carousel-item-inner">
                            <div class="sppb-carousel-caption">
                                <div class="sppb-carousel-pro-text">&nbsp;&nbsp;
                                    <a href="<?=$row->link?>" id="btn-1496930674535" class="sppb-btn sppb-btn-default sppb-btn-rounded">Link Buy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <a href="#sppb-carousel1" class="sppb-carousel-arrow left sppb-carousel-control" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a href="#sppb-carousel1" class="sppb-carousel-arrow right sppb-carousel-control" data-slide="next"><i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
    <div id="sppb-addon-1497104245670" class="clearfix"></div>
</div>
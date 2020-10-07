<article>
	<section class="content gallery pad1" style="padding:0">
		<div class="midle_main_idclass fix1200_cus1">
			<div class="main">
				<div class="content_top">
					<div class="container">
						<div class="dv-child-one-style">
							<div class="dv-child-left">
								<h3>Tin Tức</h3>
								<div class="cont-tintuc">
                                    <?php foreach($news_list as $new) : ?>
                                        <?php 
                                            $name = convert_vi_to_en($new->title); 
                                            $name = strtolower($name);
                                        ?>
                                        <div class="one-news">
                                            <div class="news-img">
                                                <a href="<?php echo base_url()?>chi-tiet/<?=$name?>-<?=$new->id?>.html" title="<?=$new->title?>">
                                                    <img width="100%" src="<?php echo base_url('/upload/news/'.$new->image_link)?>" alt="<?=$new->title?>" title="<?=$new->title?>" itemprop="thumbnailUrl">
                                                </a>
                                            </div>
                                            <div class="news-view">
                                                <div class="tieude_tintuc">
                                                    <a href="<?php echo base_url()?>chi-tiet/<?=$name?>-<?=$new->id?>.html" title="<?=$new->title?>" itemprop="url">
                                                        <?= $new->title ?>
                                                    </a>
                                                </div>
                                                <div class="news-day">Ngày đăng: 24-07-18 </div>
                                                <div class="dv-mota-tintuc">
                                                    <?php echo mb_substr($new->intro,0,500,'utf8').'...';?>
                                                </div>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
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
<article>
	<section class="content gallery pad1" style="padding:0">
		<div class="midle_main_idclass fix1200_cus1">
			<div class="main">
				<div class="content_top">
					<div class="container">
						<div class="dv-child-one-style">
							<div class="dv-child-left">
								<h3><?=$info_list->title ?></h3>
								<div class="cont-tintuc">
									<div id="showText">
										<p>
											<?= $info_list->content ?>
										</p>
									</div>
									<div class="clear"></div> 
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
<div id="mainSlider" class="nivoSlider slider-image">
	<?php foreach($slide_list as $row) : ?>
		<a href="<?=$row->link?>" target='_blank'>
			<img class="img-responsive" style="min-height: 300px;" src="<?php echo base_url()?>/upload/slide/<?=$row->image_link?>" alt="<?=$row->name?>" title="<?=$row->name?>" /> 
		</a>
	<?php endforeach ?>
</div>
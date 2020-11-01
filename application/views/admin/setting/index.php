
<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5>Quản Lý Chung</h5>
		</div>
		<div class="clear"></div>
	</div>
</div>

<form  class="form" method="post" enctype="multipart/form-data">
	

	<div class="widget">

		
		<div class="formRow ">
			<label>Hình ảnh trên tab</label>
			<div class="formRight">
				<input type="file" name="favicol_vi" class="tipS" />
				<img width="40" src="<?php echo base_url()?>/upload/logofavicon/<?=$info->favicon?>">
			</div>
			<div class="clear"></div>
		</div>

		<div class="formRow ">
			<label>Hình ảnh logo</label>
			<div class="formRight">
				<input type="file" name="image_vi" class="tipS"/>
				<img width="100" src="<?php echo base_url()?>/upload/logofavicon/<?=$info->logo?>">
			</div>
			<div class="clear"></div>
		</div>

		<div class="formRow ">
			<label>Tên Công Ty</label>
			<div class="formRight">
				<input type="text" name="ten_vi" title="Nhập tên công ty" id="ten_vi" class="tipS" value="<?=$info->company?>" />
				<div name="name_error" class="clear error"><?php echo form_error('ten_vi') ?></div>
			</div>

			<div class="clear"></div>
		</div>
		

		<div class="formRow ">
			<label>Slogan</label>
			<div class="formRight">
				<input type="text" name="slogan_vi" title="Nhập slogan" id="slogan_vi" class="tipS" value="<?=$info->slogan?>" />
				<div name="name_error" class="clear error"><?php echo form_error('slogan_vi') ?></div>
			</div>
			<div class="clear"></div>
		</div>




		<div class="formRow">
			<label>Hotline</label>
			<div class="formRight">
				<input type="text" value="<?=$info->hotline?>" name="hotline" title="Nhập hotline" class="tipS" />
				<div name="name_error" class="clear error"><?php echo form_error('hotline') ?></div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="formRow">
			<label>Ðiện thoại mobile</label>
			<div class="formRight">
				<input type="text" value="<?=$info->phone?>" name="dienthoai" title="Nhâp số điện thoại" class="tipS" />
				<div name="name_error" class="clear error"><?php echo form_error('dienthoai') ?></div>
			</div>
			<div class="clear"></div>
		</div> 

		<div class="formRow">
			<label>Email</label>
			<div class="formRight">
				<input type="text" value="<?=$info->email?>" name="email" title="Nhập email" class="tipS" />
				<div name="name_error" class="clear error"><?php echo form_error('email') ?></div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="formRow ">
			<label>Ðịa chỉ</label>
			<div class="formRight">
				<input type="text" name="diachi_vi" title="Nhập địa chỉ công ty" id="diachi_vi" class="tipS" value="<?=$info->address?>" />
				<div name="name_error" class="clear error"><?php echo form_error('diachi_vi') ?></div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="formRow">
			<label>Website</label>
			<div class="formRight">
				<input type="text" value="<?=$info->website?>" name="website" title="Nhập địa chỉ website" class="tipS" />
				<div name="name_error" class="clear error"><?php echo form_error('website') ?></div>
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<label>Tọa độ bản đồ</label>
			<div class="formRight">
				<input type="text" value="<?=$info->map?>" name="toado" title="Nhập tọa độ vị trí công ty" class="tipS" />
				<div name="name_error" class="clear error"><?php echo form_error('toado') ?></div>
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<label>FanPage Facebook</label>
			<div class="formRight">
				<input type="text" value="<?=$info->fanpage?>" name="facebook" title="Nhập link fanpage facebook" class="tipS" />
				<div name="name_error" class="clear error"><?php echo form_error('facebook') ?></div>
			</div>
			<div class="clear"></div>
		</div>

	</div>


	<div class="widget">
		<div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
			<h6>Nội dung seo</h6>
		</div>			
		
		<div class="formRow">
			<label>Title</label>
			<div class="formRight">
				<input type="text" value="<?=$info->titleseo?>" name="title" title="Nội dung thẻ meta Title dùng để SEO" class="tipS" />
				<div name="name_error" class="clear error"><?php echo form_error('title') ?></div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="formRow">
			<label>Từ khóa</label>
			<div class="formRight">
				<input type="text" value="<?=$info->keyseo?>" name="keywords" title="Từ khóa chính cho website" class="tipS" />
				<div name="name_error" class="clear error"><?php echo form_error('keywords') ?></div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="formRow">
			<label>Description:</label>
			<div class="formRight">
				<textarea rows="8" cols="" title="Nội dung thẻ meta Description dùng để SEO" class="tipS" name="description">
					<?=$info->descriptseo?>
				</textarea>
				
				<b>(Tốt nhất là 160 ký tự)</b>
				<div name="name_error" class="clear error"><?php echo form_error('description') ?></div>
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<label>Nhập code trong head :</label>
			<div class="formRight">
				<textarea rows="8" cols="" title="Code headc" class="tipS" name="headc">
					
						<?=$info->codehead?>
        		</textarea>
        		<div name="name_error" class="clear error"><?php echo form_error('headc') ?></div>
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<label>Nhập code trong body (Top) :</label>
			<div class="formRight">
				<textarea rows="8" cols="" title="Code topc" class="tipS" name="topc">
					<?=$info->codetop?>
				</textarea>
				<div name="name_error" class="clear error"><?php echo form_error('topc') ?></div>
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<label>Nhập code trong body (Bottom) :</label>
			<div class="formRight">
				<textarea rows="8" cols="" title="Code bottomc" class="tipS" name="bottomc">

					<?=$info->codebottom?>
				</textarea>
				<div name="name_error" class="clear error"><?php echo form_error('bottomc') ?></div>
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<div class="formRight">
				<input type="submit" class="blueB"  value="Hoàn tất" />
			</div>
			<div class="clear"></div>
		</div> 			
	</div>


</form>   		
</div>
</div>
		<div class="clear"></div>

		


<?php 
	$this->load->view('admin/menu/head', $this->data);
?>
<div class="line"></div>
<div class="wrapper">
	<div class="widget">
		<div class="title">
			<h6>Cập nhật danh mục sản phẩm</h6>
		 	
		</div>
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="formRow">
					<label class="formLeft" for="param_name">Tên:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="name" id="param_name" value="<?php echo $info->title?>" _autocheck="true" type="text"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('name') ?></div>
					</div>
					<div class="clear"></div>
				</div>

				

				<div class="formRow">
					<label class="formLeft" for="param_name">Thứ tự hiển thị:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="sort_order" id="param_sort_order" value="<?php echo $info->sort_order?>" _autocheck="true" type="text"></span>
						<span name="sort_order_autocheck" class="autocheck"></span>
						<div name="sort_order_error" class="clear error"><?php echo form_error('sort_order') ?></div>
					</div>
					<div class="clear"></div>
				</div>	

				<div class="formRow">
					<label class="formLeft" for="param_username">Trạng Thái:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo">
							<span> 
								<p>
									hiển thị
									<input name="phone" value="1" id="param_username" _autocheck="true" type="radio" <?php if($info->status == 1) echo 'checked'; else echo '' ?> />
								</p>
							</span>
							<span>	
								<p>
									không hiển thị
									<input name="phone" value="0" id="param_username" _autocheck="true" type="radio" <?php if($info->status == 0) echo 'checked'; else echo '' ?> />
								</p>
							</span>
						</span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('username') ?></div>
					</div>
					<div class="clear"></div>
				</div>
				

				<div class="formSubmit">
           			<input type="submit" value="Cập Nhật" class="redB">
           			<input type="reset" value="Hủy bỏ" class="basic">
           		</div>
			</fieldset>
		</form>
	</div>
	
</div>
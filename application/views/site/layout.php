<!DOCTYPE HTML>
<html>
	<?php $this->load->view('site/head.php');?>
	<body class="cbp-spmenu-push">
		<div class="head_top header_admin">
			<div class="bg_top">
				<script>
					function jsupdate(k,idclass,jscolor) {
						if(k==0) 		$("."+idclass).css("background-color","#"+jscolor);
						else if (k==1)	$("."+idclass).css("color","#"+jscolor);
					}
				</script>
			</div>
		</div>
		<?php $this->load->view('site/header.php');?>
		<?php $this->load->view('site/menu.php');?>
		<?php $this->load->view('site/menu_mobile.php');?>
		<?php if(isset($message)) : ?>
			<p style="color:red;"><?php echo $message; ?></p>
		<?php endif?>
		<?php $this->load->view($temp, $this->data);?>
		<?php $this->load->view('site/footer.php');?>
	</body>
</html>
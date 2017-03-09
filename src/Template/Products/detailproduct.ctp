<style>
	.ctsp{
		margin-top:30px;
		height:450px;
		weight:300px;
		border:2px solid red;
		text-align:left;
		margin-left:500px;
		margin-right:500px;
		margin-bottom:30px;
	}
	img{
		height:300px;
		width:200px;
	}
	h1{
		margin-left:100px;
	}
</style>
<h1>Chi tiết sản phẩm</h1>
<div class="ctsp">
	<?php echo '<b>'.'Mã sản phẩm:'.'</b>'?>
	<?= h($sp->id_product)?><br>
	<?php echo '<b>'.'Tên sản phẩm:'.'</b>'?>
	<?= h($sp->name_product) ?><br>
	<?php echo '<b>'.'Hình ảnh sản phẩm:'.'</b>'?><br>
	<?= $this->Html->image('Hinhanh/'.$sp['img_product'],array('alt'=>'CakePHP'))?><br>
	<?php echo '<b>'.'Giá sản phẩm:'.'</b>'?>
	<?=number_format($sp['price_product']) ?><br>
	<?php echo '<b>'.'Chú thích:'.'</b>'?>
	<?=h($sp->comment_product)?><br>
    <?=$this->Form->button('Mua hàng');?>
</div>

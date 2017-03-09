<style>
	.htsp{
		margin-top:10px;
		margin-bottom:10px;
		border:2px solid red;
		float:left;
		width:200px;
		height:300px;	
		text-align:left;
		margin-left:30px;
	}
	img{
		width:180px;
		height:200px;
	}
	.ttrang{
		height:1000px;
		margin-left:88px;
		margin-right:30px;
	}
	.phantrang{
		margin-top:20px;
	}
	h1{
		float:center;
	}
</style>
<div class="ttrang">
<h1> Sản phẩm theo mục</h1>
	<?php foreach($sp as $sanpham): ?>
	<div class="htsp">
		<?php echo '<b>'.'Tên sản phẩm:'.'</b>'?>
		<?= $sanpham->name_product?><br>
		<?php echo '<b>'.'Hình ảnh sản phẩm:'.'</b>'.'<br>'?>
		<?= $this->Html->image('Hinhanh/'.$sanpham['img_product'],array('alt'=>'CakePHP'))?><br>
		<div style="margin-left:100px;">
			<?= $this->Html->link('Chi tiết',['action' => '../products/detailproduct', $sanpham->id_product]) ?>
			</div>
		</div>
	<?php endforeach; ?>
</div>

<div class="phantrang">
<ul class="pagination">
        <li><?php echo $this->Paginator->numbers(); ?></li>
    </ul>
   <!--<li><?php echo $this->Paginator->numbers(); ?></li>-->
 <!-- <?php echo $this->Paginator->prev(' < ' . __('previous')); ?> 
<?php echo $this->Paginator->first('< first'); ?> 
<?php echo $this->Paginator->numbers(); ?> 
 <?php echo $this->Paginator->next(' next >'); ?>  
<?php echo $this->Paginator->last(' last >'); ?>-->
</div>
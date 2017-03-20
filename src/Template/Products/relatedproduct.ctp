<div class="ttrang" style="float:left;">
	<?php foreach($sp as $sanpham):?>
		<div class="grid_1_of_4 images_1_of_4">
			<a href="../detailproduct/<?php echo $sanpham->id_product;?>" target="_blank" title="Click để xem chi tiết">
		    	<?= $this->Html->image('Hinhanh/'.$sanpham['img_product'],array('alt'=>'CakePHP'))?><br>
		    </a>				
							<div class="price" style="border:none">
							       <div class="add-cart" style="float:none">								
										<h4><a href="#">Add to Cart</a></h4>
									     </div>
							<div class="clear"></div>
		</div>
	<?php endforeach;?>
</div>
<div class="phantrang" style="clear:both; margin-left: 200px;">
	<ul class="pagination">
        <li><?php echo $this->Paginator->numbers(); ?> </li>
    </ul>
</div>
<?php foreach($sp as $sanpham): ?>
	<div class="grid_1_of_4 images_1_of_4" style="float:left;">	
	    <a href="../products/detailproduct/<?php echo $sanpham->id_product; ?>" target="_blank" title="Click để xem chi tiết">
	    	<?= $this->Html->image('Hinhanh/'.$sanpham['img_product'],array('alt'=>'CakePHP'))?><br>
	    </a>
	                     <h2><?= $sanpham->name_product?> </h2>
	                    <div class="price-details">
	                       <div class="price-number">
	                            <?=number_format($sanpham['price_product']) ?>
	                        </div>
	                                <div class="add-cart">                              
	                                    <h4><a href="#">Add to Cart</a></h4>
	                                 </div>
	                             <div class="clear"></div>
	                    </div>                  
	 </div>
 <?php endforeach; ?> 

 <div class="phantrang" style="clear:both; margin-left: 400px;">
<ul class="pagination">
        <li><?php echo $this->Paginator->numbers(); ?> </li>
    </ul>
</div>
<!--<style>
	.pagination li{
		float:left;
		color:black;
		 padding: 8px 16px;
		 text-decoration: none;
	}
</style>-->
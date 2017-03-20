<div class="ttrang" style="float:left;">
<?php foreach($sp as $sanpham): ?>
	<div class="grid_1_of_4 images_1_of_4">	
	    <a href="../products/detailproduct">
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
</div>

 <div class="phantrang" style="clear:both;">
	<ul class="pagination" style="margin-left:400px;">
	        <li><?php echo $this->Paginator->numbers(); ?></li>
	    </ul>
</div>

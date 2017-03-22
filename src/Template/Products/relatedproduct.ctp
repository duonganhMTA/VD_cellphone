<html>
<?php foreach($sanpham as $key=>$sanpham): ?>
    <?php if(($key%4) == 0){ ?>
    <div class="row" style="height:400px;">
    <?php } ?>
    <div class="col-lg-3 images_1_of_4">
         <?= $this->request->session()->write('id_tp',$sanpham['id_type']);?>   
        <a href="../products/detailproduct/<?php echo $sanpham->id_product;?>" target="_blank" title="Click để xem chi tiết">
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
     <?php if(($key%4) == 3){ ?>
        </div>
    <?php } ?>
 <?php endforeach; ?> 
</div> 
 <div class="row" style="height:80px;">
<ul class="pagination" style="display: inline-block;margin-left:600px;">
        <li><?php echo $this->Paginator->numbers(); ?></li>
    </ul>
</div>

</html>

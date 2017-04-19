<html>
<style>
	/*.header_slide{
      display: none;
   }
   .content_top{
   	display:none;
   }*/
</style>
	<?php if($loggedAdmin): ?>
           <?=$this->Html->link('Add news',['action'=>'addnews'])?>  
	  <?php else: ?>
	    <h2 style="color:red;margin-left:400px;"> <?php echo 'Thông tin công nghệ:';?></h2>
	  <?php endif; ?>
  		<hr style="width: 1064px;margin-left: 0px;">
	    <div class="row" style="height:300px;">
	    			<div class="col-lg-8">
	    			<?php foreach($new as $value):?>
	    				<div class="row">
					    	<div class="col-lg-4">
					    		<?= $this->Html->image('News/'.$value['image'],array('alt'=>'CakePHP','style'=>'    width: 350px; height: 350px'))?>
					    	</div>
					    	<div class="col-lg-8">
						       <?=$this->Html->link($value->name_news,['action'=>'../news/detailnews/'.$value->id_news])?><br>
						        <small><?=$value->user->username?>
						        <?= $value->created ?>
						       </small>
						        <br>
						        <?php 
						        	$content = mb_substr($value->content,0,400);
						        ?>
						       <?=$this->Html->link(html_entity_decode(strip_tags($content)),['action'=>'../news/detailnews/'.$value->id_news])?>...<br>
						    </div>
					    </div>
					     <hr style="width: 1064px; margin-left: 0px;"></hr>
					     <?php endforeach;?>
					     <div class="row" style="height: 100px;margin-left:150px;">
							    <ul class="pagination" style="display: inline-block;">
							            <li><?php echo $this->Paginator->numbers(); ?></li>
							    </ul>
							</div>
					</div>
		    <div class="col-lg-4">
		    <h3 class="glyphicon glyphicon-gift"; style="color:black;margin-left: 40px;">
		    	<?=$this->Html->link('Gift Information',['action'=>'../gifts/viewgift'])?>
		    </h3>
		    	<?=  $this->Element('../Gifts/viewgift1'); ?> 
		    	<h4 style="margin-left:150px;"><?=$this->Html->link('See more',['action'=>'../gifts/viewgift'])?></h4>
		    </div>
	    </div>
	    </hr>
	    <br></br>
</html>
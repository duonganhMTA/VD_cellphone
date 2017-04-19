<html>
<style>
	/*.header_slide{
      display: none;
   }
   .content_top{
   	display:none;
   }*/
</style>
<body>
	<!-- <div class="container" style="background: url(../img/bkfUo3.jpg) fixed ;background-repeat: no-repeat;background-size: 100% 100%;" > -->
	<div class="container">
		<?php if($loggedAdmin): ?>
	           <?=$this->Html->link('Add gift',['action'=>'addgift'])?>  
		  <?php else: ?>
		    <h2 style="color:red;margin-left:400px;"> <?php echo 'Thông tin quà tặng:';?></h2>
		  <?php endif; ?>
	  	<?php foreach($gift as $value):?>
		    <div class="row" style="height:300px;margin-left:80px;">
		    	<!-- <?= $this->request->session()->write('idgift',$value['id_gift']);?> -->
		    	<div class="col-lg-4">
		    		<?= $this->Html->image('News/'.$value['image_gift'],array('alt'=>'CakePHP','style'=>'width: 450px; height: 300px'))?>
		    	</div>
		    	<div class="col-lg-7">
			       <?=$this->Html->link($value->name_gift,['action'=>'../gifts/detailgift/'.$value->id_gift])?><br>

			        <small><?=$value->user->username?><?= $value->created ?></small><br>

			        <?php 
			        	$content = mb_substr($value->content_gift,0,300);
			        ?>
			       <?=$this->Html->link(html_entity_decode(strip_tags($content)),['action'=>'../gifts/detailgift/'.$value->id_gift])?>...<br>
			    </div>
		    </div>
		    </hr>
		   <br></br>
	    <?php endforeach;?>
	</div>
</body>
</html>
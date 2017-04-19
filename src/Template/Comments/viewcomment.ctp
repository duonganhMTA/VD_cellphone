<html>
	<?php foreach($comment as $value):?>
		<div class="row" style="height: auto;">
	    	<div class="col-lg-1">
	    	<?=$this->Html->image('user/'.$value->user->['img'],array('alt'=>'CakePHP','style'=>'width:80px; height:80px'))?>
	    	</div>
	    	<div class="col-lg-11">
	    		<p><?=h($value->user->username)?></p><br></br>
		        <?=$value->content ?>
				 <small>Trả lời <?= $value->created ?></small>
		    </div>
	    </div>
   <?php endforeach;?>
</html>
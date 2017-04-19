<html>
<div class="container">

  	<?php foreach($gift1 as $value):?>
	    		<?= $this->Html->image('News/'.$value['image_gift'],array('alt'=>'CakePHP','style'=>'width: 300px; height: 250px'))?>
	    		<br></br>
	    		<p> <?=$this->Html->link($value->name_gift,['action'=>'../gifts/detailgift/'.$value->id_gift])?></p>
	    </hr>
    <?php endforeach;?>

</div>
</html>

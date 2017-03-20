<?php foreach($typeListMobile as $value):?>
	<?= $this->Html->link($value->name_type, ['action' => '../products/getproduct',$value->id_type]) ?>
<?php endforeach;?>
<?=$this->Html->link('Add news',['action'=>'addnews'])?>
<div class="container">
  	<?php foreach($new as $value):?>
    <div class="row">
       <a href="#"><?= h($new->name_news)?></a><br>
       <?= h($new->content)?><br>
       <small>Created: <?= $users->created ?></small>
    </div>
    <?php endforeach;?>
</div>
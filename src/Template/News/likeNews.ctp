<html>
<?=$this->Form->create(null, ['url' => ['controller' => 'News', 'action' => 'likeNews',$new->id_news]])?>
	<button style="color:blue;font-size:20px;" class="fa fa-thumbs-o-up" name="Likes" id="likes">
	</button><span><?=$new->likes?></span>
	<?php echo $this->Form->hidden('likes',['value'=>$new->likes])?>
   <button style="color:blue;font-size:20px;" class="fa fa-thumbs-o-down" name="Dislikes" id="likes"></button>
   <span><?=$new->dislike?></span>
   <?php echo $this->Form->hidden('dislike',['value'=>$new->dislike])?>
   <button style="color:blue;font-size:20px;"  name="Share" id="share">Share</button>
   <i style="color:orange;font-size:20px;" class="glyphicon glyphicon-eye-open"></i>
<?=$this->Form->end();?>
</html>
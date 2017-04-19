<html>
<?=$this->Form->create(null, ['url' => ['controller' => 'News', 'action' => 'likeNews',$new->id_news]])?>
	<button style="color:blue;font-size:20px;" class="fa fa-facebook-official" name="Likes" id="likes">
	</button><span><?=$like->likes?></span>
	<?php echo $this->Form->hidden('likes',['value'=>$like->likes])?>
   <button style="color:blue;font-size:20px;" class="fa fa-thumbs-o-down" name="Dislikes" id="likes"></button>
   <span><?=$dislike->dislike?></span>
   <?php echo $this->Form->hidden('dislike',['value'=>$dislike->dislike])?>
   <button style="color:blue;font-size:20px;"  name="Share" id="share">Share</button>
   <i style="color:orange;font-size:20px;" class="glyphicon glyphicon-eye-open"></i>
<?=$this->Form->end();?>
</html>
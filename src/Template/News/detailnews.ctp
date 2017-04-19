<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	.header_slide{
      display: none;
   }
   .content_top{
   	display:none;
   }
</style>
		<h2 style="text-align:center;color:red;"><?=h($new->name_news)?></h2>
		<div class="row"style="margin-left:250px;margin-right:250px;height:100%">	 
		        <small><?= $new->created ?></small><br>
		        <?= html_entity_decode($new->content)?> <!--khi hiển thị chữ sẽ k bị lỗi--> 
		        <br></br>
		        <!-- <i style="color:blue;" class="fa fa-facebook-official">Like</i> -->
		        <?=$this->Element('../News/likeNews')?>
	    </div>
</html>


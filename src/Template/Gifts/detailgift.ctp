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
		 <h2 style="text-align:center;color:red;"><?=h($gift->name_gift)?></h2>
			<div class="row"style="margin-left:300px;margin-right:100px;height:100%">	
			        <small><?= $gift->created ?></small><br>
			        <?= html_entity_decode($gift->content_gift)?> <!--khi hiển thị chữ sẽ k bị lỗi--> 
			        <i style="background-color:#4c69ba;color:white;margin-left:300px;" class="fa fa-thumbs-o-up">Like</i>
			    	<i style="background-color:#4c69ba;color:white;" class="fa fa-thumbs-o-down">Dislike
			    	</i>
			    	<i style="background-color:#4c69ba;color:white;">Share</i>
			    	<i style="color:orange;" class="glyphicon glyphicon-eye-open"></i>
					<?=$this->Element('../comments/addcomment');?>
					
					
		    </div>

		    		  

		    
		    	
		    




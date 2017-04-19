<html>
	<?php foreach($comment as $value):?>
		<div class="row" style="height: auto;">
	    	<div class="col-lg-1">
	    	
	    	</div>
	    	<div class="col-lg-11">
	    		<p style="font-weight:bold;color:green;"><?=h($value->user->username)?></p>
		        <small style="color:#4a4a4a;font-size:80%;"><?=$value->content ?></small>
				 <small style="font-size:80%">Trả lời <?= $value->created ?></small>
		    </div>
	    </div>
	    <br>
   <?php endforeach;?>
</html>
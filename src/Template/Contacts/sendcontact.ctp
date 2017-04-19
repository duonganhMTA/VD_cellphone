<html>
<head>
    <style>
    	input,textarea{
    		margin-left: 30px;
    		color:black;
    	}
    	form{
    		
    		display: block;
			margin: 1% 0 1% 1.6%;
			box-shadow: 0px 0px 3px rgb(150, 150, 150);
			-webkit-box-shadow: 0px 0px 3px rgb(150, 150, 150);
			-moz-box-shadow: 0px 0px 3px rgb(150, 150, 150);
			-o-box-shadow: 0px 0px 3px rgb(150, 150, 150);
    	}
    	.header_bottom_left,.header_bottom_right,.content_top{
    		display: none;
    	}
    	label{
    		margin-left:30px;
    	}
    	.container{
    		
    		width:90%;
    	}
    	/*body{
    		background-color: #f5f5f5;
    	}*/
    </style>
</head>
<body>

	<div class="row">

		<div class="col-md-4">
			<?=$this->Html->image('anh3-1.jpg',array('alt'=>'CakePHP'))?>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-7">
			<h3><?=$this->Html->link('Home',['action'=>'../products/newproduct'])?> <small class="glyphicon glyphicon-play"></small>Contact</h3>
			<hr style="color:blue;"></hr>
			<h2>Shop điện thoại di động</h2>
			<h4><strong>Hà Nội:</strong> 93 Phố Huế</h4>
			<h4><strong>Email:</strong> duonganh95hd@gmail.com</h4>
			<h4><strong>FaceBook:https://www.facebook.com/anh.duong.188</strong> </h4>
			<h4><strong>Phone Number:</strong> 123456789</h4>
			<br>
			<h4><strong>Hải Dương:</strong>KDC Mật Sơn- Chí Linh</h4>
			<h4><strong>Phone number:</strong>01684824218</h4>
			<br>
			<h4><strong>Giao dịch,thanh toán qua các tài khoản:</strong></h4>
			<h4>Số TKNH TechCombank- CN Thăng Long: 1234528364</h4>
			<h4>Số TKNH BIDV- CN Đống Đa: 2161000001489</h4>
			<h4>Số TKNH VietinBank- CN Hà Nội: 190245787554</h4>
		</div>
		
	</div>
	<div class="row" style="display: inline-block;height:auto;margin-top:20px;">
		<p style="color:blue;margin-left:200px;">Mọi thắc mắc,khiếu nại về chất lượng, dịch vụ sản phẩm,quý khách vui lòng liên hệ :0962075028</p>
		<form class="form-horizontal" role="form" method="post" id="form_content" style="width:600px;height: 630px;margin-left:550px;">
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Fullname</label><br></br>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="name" name="fullname" placeholder="Fullname" value=""  required="true">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label><br></br>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" placeholder="abc@gmail.com" value="" required="true">
			</div>
		</div>
		<div class="form-group">
			<label for="message" class="col-sm-2 control-label">Message</label><br></br>
			<div class="col-sm-10">
				<textarea class="form-control" rows="4" name="message" required="true"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="address" class="col-sm-2 control-label">Address</label><br></br>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="address" name="address" placeholder="Address" value="">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
			</div>
		</div>
	</form>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		 var submit   = $("button[type='submit']");
		  submit.click(function()
   			 {
	     var data = $('form#form_content').serialize();
        //su dung ham $.ajax()
        $.ajax({
        type : 'POST', //kiểu post
        url  : 'VD_cake/contacts/sendcontact', //gửi dữ liệu sang trang submit.php
        data : data,
        success :  function(data)
               {                       
                    if(data == 'false')
                    {
                        alert('Sai tên hoặc mật khẩu');
                    }else{

                        $('#content').html(data);
                    }
               }
        });
        return false;
    });
});
</script>
</html>
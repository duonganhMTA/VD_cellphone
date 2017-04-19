<!DOCTYPE HTML>
<head>
<title>Detail product</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--chèn css-->
        <?= $this->Html->css('style.css') ?>
        <?= $this->Html->css('slider.css') ?>
        <?=$this->Html->css('global.css')?>
        <?=$this->Html->css('easy-responsive-tabs.css')?>
       
    <!-- chèn javascrit-->
        <?= $this->Html->script('jquery-1.7.2.min'); ?>
        <?= $this->Html->script('move-top'); ?>
        <?= $this->Html->script('easing'); ?>
        <?= $this->Html->script('startstop-slider'); ?>
        <?=$this->Html->script('easyResponsiveTabs')?>

         <?= $this->fetch('meta'); ?>
        <?= $this->fetch('css') ;?>
        <?= $this->fetch('script'); ?>

</head>
<body style="font-size: 24px;">
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p><span>Need help?</span> call us <span class="number">1-22-3456789</span></span></p>
			</div>
            <div class="account_desc">
                <ul>
                     <li>
                        <?= $this->Html->link('Users',['action'=>'../users/index'])?>
                    </li>
                    <li>
                         <a href="#">Account</a>
                          <ul>
                      <?php if($loggedIn): ?>
                           <li>
                              <i style="color:black"><?=$this->Html->link('Logout',['action'=>'../Users/logout'])?></i>
                           </li> 
                           <li>
                          <p style="color:black;font-size:0.823em;"><?= $this->request->session()->read('Auth.User.username') ?></p>
                           </li>  
                      <?php else: ?>
                         <li><i style="color:white"><?=$this->Html->link('Register',['action'=>'register'])?></i></li>
                      <?php endif; ?>
                      </ul>
                    </li>
                   
                </ul>
            </div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="#"><?=$this->Html->image('logo.png',array('alt'=>'cakePHP'))?></a>
			</div>
			  <div class="glyphicon glyphicon-shopping-cart" id="cart" style="margin-left:1064px;">
                <?php 
                   if(isset($_SESSION['cart']) && $_SESSION['cart'] !=null) {
                    $totalquantity = 0;
                    foreach($_SESSION['cart'] AS $product) {
                        $totalquantity = $totalquantity + $product['quantity'];
                    }
                   }
                 else {
                       $totalquantity = 0;
                  }
                ?>

                <a href="/Carts/viewCart"><?php echo $totalquantity;?> Product</a>
              </div>
			  
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li>
			    		<?=$this->Html->link('Home',['action'=>'../products/newproduct'])?>
			    	</li>
			   
			    	<li><a href="#">Products</a>
			    		 <ul>
                    		<li>
                        	 <?=  $this->Element('../Types/getlistphone'); ?>    
                       	
                    		</li>
               			 </ul>
			    	</li>
			    	   <li><?=$this->Html->link('News',['action'=>'../news/viewnews'])?></li>
              <li><?=$this->Html->link('Gift',['action'=>'../gifts/viewgift'])?></li>
               <li><?=$this->Html->link('Contact',['action'=>'../contacts/sendcontact'])?></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="search_box">
	     		<form>
	     			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
	     		</form>
	     	</div>
	     	<div class="clear"></div>
	     </div>	     	
   </div>
 <div class="main">
   	<div class="container-fluid">
  		<div class="row content">
    		<div class="col-sm-3 sidenav">
     			
     			 <ul>
             <h3 style="background:#383838;color:white;">Categories</h3>
       			 <li>
        			  <ul>
              			 <li>  
                 			 <?=  $this->Element('../Types/getListtype'); ?>           
              			 </li>
         			 </ul>
       			 </li>
     			 </ul>
    		</div>

    <div class="col-sm-9">
      
      	<h5 style="margin-left:935px;"><?=$this->Html->link('Home',['action'=>'../products/newproduct'])?> >>> <?=$this->Html->link('All product',['action'=>'../products/viewproduct'])?>
     	 </h5>
      		<hr>
     	 <div class="image" style="float:left;">
      	<?= $this->Html->image('Hinhanh/'.$sp['img_product'],array('alt'=>'CakePHP','style'=>'width:368px;height:440px;'))?>
      	</div>
      	<div class="desc span_3_of_2">
      	 <h2><?= $sp->name_product?></h2>
      	<p>Price:<?=number_format($sp['price_product']).'VNĐ' ?></p> 

        <form method="post" id="addcart"> 
          <input name="id_product" type="hidden" value="{$sp['id_product']}}">
          <button type="submit"  class="button">Add to Cart</button>
         </form>

     	<!-- <div class="button"><span><a href="#">Add to Cart</a></span></div>--> 
     	</div> 
          <div class="clear"></div>
          
    </div>
  </div>
  <div class="row">
  	<div class="tab">
      <button class="tablinks" style="font-size: 24px;" onclick="openMenu(event, 'Detailproduct')">Detailproduct</button>
      <button class="tablinks" style="font-size: 24px;" onclick="openMenu(event, 'Relateproduct')">Relateproduct</button>
    </div>

    <div id="Detailproduct" class="tabcontent">
      <h3>Các thông số kỹ thuật:</h3>
                        <p>
                            <?php echo '<b>'.'Tên sản phẩm:'.'</b>'?>
                            <?= h($sp->name_product) ?><br>
                            <?php echo '<b>'.'Giá sản phẩm:'.'</b>'?>
                            <?=number_format($sp['price_product']) ?><br>
                            <?php echo '<b>'.'Số lượng còn:'.'</b>'?>
                            <?=h($sp->num_product)?><br>
                            <?php echo '<b>'.'Camera:'.'</b>'?>
                            <?=h($sp->camera)?><br>
                            <?php echo '<b>'.'Ram:'.'<b>'?>
                            <?=h($sp->ram)?><br>
                            <?php echo '<b>'.'Memory card:'.'</b>'?>
                            <?=h($sp->memory_card)?><br>
                            <?php echo '<b>'.'Sim:'.'</b>'?>
                            <?=h($sp->sim)?><br>
                            <?php echo '<b>'.'Pin:'?>
                            <?=h($sp->pin)?>
                        </p>  
    </div>

    <div id="Relateproduct" class="tabcontent">
        <?=  $this->Element('../Products/relatedproduct'); ?>
    </div>
  </div>
</div>
 </div>
 </div>
   <div class="footer">
      <div class="wrap">    
         <div class="section group">
                <div class="col_1_of_4 span_1_of_4">
                        <h4>Information</h4>
                        <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Customer Service</a></li>
                        <li><a href="#">Advanced Search</a></li>
                        <li><a href="delivery.html">Orders and Returns</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h4>Why buy from us</h4>
                        <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Customer Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="contact.html">Site Map</a></li>
                        <li><a href="#">Search Terms</a></li>
                        </ul>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h4>My account</h4>
                        <ul>
                            <li><a href="contact.html">Sign In</a></li>
                            <li><a href="index.html">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="contact.html">Help</a></li>
                        </ul>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h4>Contact</h4>
                        <ul>
                            <li><span>+91-123-456789</span></li>
                            <li><span>+00-123-000000</span></li>
                        </ul>
                        <div class="social-icons">
                            <h4>Follow Us</h4>
                              <ul>
                                  <li><a href="#" target="_blank"><?=$this->Html->image('facebook.png',array('alt'=>'CakePHP','style'=>'width: 54px;
    height: 39px;'))?></a></li>
                                  <li><a href="#" target="_blank"><?=$this->Html->image('twitter.png',array('alt'=>'CakePHP','style'=>'width: 54px;
    height: 39px;')) ?></a></li>
                                  <li><a href="#" target="_blank"><?=$this->Html->image('skype.png',array('alt'=>'CakePHP','style'=>'width: 54px;
    height: 39px;'))?> </a></li>
                                  <li><a href="#" target="_blank"> <?=$this->Html->image('dribbble.png',array('alt'=>'CakePHP','style'=>'width: 54px;
    height: 39px;'))?></a></li>
                                  <li><a href="#" target="_blank"> <?=$this->Html->image('linkedin.png',array('alt'=>'CakePHP','style'=>'width: 54px;
    height: 39px;'))?></a></li>
                                  <div class="clear"></div>
                             </ul>
                        </div>
                </div>
            </div>          
        </div>
        <div class="copy_right">
                <p> Duong Thi Anh</p>
           </div>
    </div>
   
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>

<script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}
//ajax khi add to cart
  $(document).ready(function(){
     var submit   = $("button[type='submit']");
      submit.click(function()
         {
       var data = $('form#addcart').serialize();
        //su dung ham $.ajax()
        $.ajax({
        type : 'POST', //kiểu post
        url  : 'VD_cake/carts/addCart', //gửi dữ liệu sang trang submit.php
        data : data,
        success :  function(data)
               {                       
                    if(data == 'false')
                    {
                        alert('cant add to cart');
                    }else{

                        $('#content').html(data);
                    }
               }
        });
        return false;
    });
});
  //tab menu

function openMenu(evt, content) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(content).style.display = "block";
    evt.currentTarget.className += " active";
}


			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});
		</script>
		 <script type="text/javascript">
   			 $(document).ready(function () {
		        $('#horizontalTab').easyResponsiveTabs({
		            type: 'default', //Types: default, vertical, accordion           
		            width: 'auto', //auto or any width like 600px
		            fit: true   // 100% fit in a container
		        });
   			 });
   </script>	
		<script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
<style>
	
	.sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    .sidenav li a{
    font-size:1em;
	padding:8px 0 8px 20px;
	color: #666;
	display: block;
	font-family: 'ambleregular';
	background: url(../images/drop_arrow.png) no-repeat 0;
	border-bottom:1px solid #F0F0F0;
    }
    .sidenav li a:hover{
    background: url(../images/drop_arrow-hover.png) no-repeat 0;
	color:#B81D22;
    }
    .row{
	    margin-right: -15px;
	    margin-left: -15px;
	    height: auto;
      margin-bottom: 20px;
    }
    .footer{
    	clear:both;
    }
    /* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>

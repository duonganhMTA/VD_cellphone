<!DOCTYPE HTML>
<head>
<title>Detail product</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
<body>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p><span>Need help?</span> call us <span class="number">1-22-3456789</span></span></p>
			</div>
			<div class="account_desc">
				<ul>
					 <li>
                        <?= $this->Html->link('Register',['action'=>'../users/register'])?>
                    </li>
                    <li>
                        <?= $this->Html->link('Login',['action'=>'../users/login'])?>
                    </li>
                    <li>
                        <?= $this->Html->link('Logout',['action'=>'../users/logout'])?>
                    </li>
                    <li><a href="#">Checkout</a></li>
                    <li>
                        <?= $this->Html->link('My Account',['action'=>'../users/index'])?>
                    </li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="#"><?=$this->Html->image('logo.png',array('alt'=>'cakePHP'))?></a>
			</div>
			  <div class="cart">
			  	   <p>Welcome to our Online Store! <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
			  	   	<ul class="dropdown">
							<li>you have no items in your Shopping cart</li>
					</ul></div></p>
			  </div>
			  
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li>
			    		<?=$this->Html->link('Home',['action'=>'../products/newproduct'])?>
			    	</li>
			    	<li><a href="#">About</a></li>
			    	<li><a href="#">Products</a>
			    		 <ul>
                    		<li>
                        	 <?=  $this->Element('../Types/getlistphone'); ?>    
                       	
                    		</li>
               			 </ul>
			    	</li>
			    	<li><a href="#">News</a></li>
			    	<li><a href="#">Contact</a></li>
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
     			 <h4>Categories</h4>
     			 <ul>
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
      	<h4><?=$this->Html->link('Home',['action'=>'../products/newproduct'])?> >>>> <?=$this->Html->link('All product',['action'=>'../products/viewproduct'])?>
     	 </h4>
      		<hr>
     	 <div class="image" style="float:left;">
      	<?= $this->Html->image('Hinhanh/'.$sp['img_product'],array('alt'=>'CakePHP','style'=>'width:300px;height:350px;'))?>
      	</div>
      	<div class="desc span_3_of_2">
      	 <h2><?= $sp->name_product?></h2>
      	<p>Price:<?=number_format($sp['price_product']) ?></p>  
     	 <div class="button"><span><a href="#">Add to Cart</a></span></div> 
     	</div> 
          <div class="clear"></div>
    </div>
  </div>
  <div class="row">
  	<ul class="nav nav-tabs">
	    <li class="active"><a data-toggle="tab" href="#home">Related product</a></li>
	    <li><a data-toggle="tab" href="#menu1">Detail product </a></li>
  	</ul>
  	<div class="col-lg-12 tab-content">
    	<div id="home" class="tab-pane fade in active">
    		<?=  $this->Element('../Products/relatedproduct'); ?>
   		</div>
    	<div id="menu1" class="tab-pane fade">
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
                <p>home_shoppe. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
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
	    height: 633px;
    }
    .footer{
    	clear:both;
    }
</style>

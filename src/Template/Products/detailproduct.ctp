<!DOCTYPE HTML>
<head>
<title>Detail product</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
    <div class="content">
    	<div class="content_top">
    		<div class="back-links">
    		<h3><?=$this->Html->link('Home',['action'=>'../products/newproduct'])?> >>>> <?=$this->Html->link('All product',['action'=>'../products/viewproduct'])?>
    		</h3>
    	    </div>
    		<div class="clear"></div>
    	</div>
    	<div class="section group">
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">				
					<div class="grid images_3_of_2">
						<div id="container">
						   <div id="products_example">
							   <div id="products">
								<div class="image">
									<?= $this->Html->image('Hinhanh/'.$sp['img_product'],array('alt'=>'CakePHP'))?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="desc span_3_of_2">
					<h2><?= $sp->name_product?></h2>					
					<div class="price">
						<p>Price:<?=number_format($sp['price_product']) ?></p>	
					</div>
					
				<div class="share-desc">
					<div class="button"><span><a href="#">Add to Cart</a></span></div>	
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">	
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tabs-item" aria-controls="tab_item-0" role="tab">Product Details</li>
					<li class="resp-tabs-item resp-tab-active" aria-controls="tab_item-1" role="tab">product Tags</li>
					<div class="clear"></div>
				</ul>
				<div class="resp-tabs-container">
					<div class="product-desc">
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
												<?php echo '<b>'.'Memory card:'.'</b>'?><br>
												<?=h($sp->memory_card)?><br>
												<?php echo '<b>'.'Sim:'.'</b>'?><br>
												<?=h($sp->sim)?><br>
												<?php echo '<b>'.'Pin:'.'</b>'?>
												<?=h($sp->pin)?><br>
										</p>
					</div>

				 <div class="product-tags">
						 <p>Các sản phẩm liên quan</p>
			    </div>	
			</div>
		 </div>
	 </div>
   <div class="content_bottom">
    		<div class="heading">
    		<h3>Related Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    </div>
   		<div class="section group">
   			 <?=  $this->Element('../products/relatedproduct'); ?> 
		</div>

  </div>

				<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
						<ul>
					       <li>  
	                              <?=  $this->Element('../Types/getListtype'); ?>           
	                        </li>
	    				</ul>
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
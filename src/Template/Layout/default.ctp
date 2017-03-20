<?php
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ;?>
    <title>CellPhone Website </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    
    <!--chèn css-->
        <?= $this->Html->css('style.css') ?>
        <?= $this->Html->css('slider.css') ?>
        <?=$this->Html->css('global.css')?>
    <!-- chèn javascrit-->
        <?= $this->Html->script('jquery-1.7.2.min'); ?>
        <?= $this->Html->script('move-top'); ?>
        <?= $this->Html->script('easing'); ?>
        <?= $this->Html->script('startstop-slider'); ?>

         <?= $this->fetch('meta'); ?>
        <?= $this->fetch('css') ;?>
        <?= $this->fetch('script'); ?>
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
                <a href="#"><?= $this->Html->image('logo.png',array('alt'=>'CakePHP') ) ?></a>
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
                    <li class="active">
                        <?= $this->Html->link('Home',['action'=>'../products/newproduct'])?>
                    </li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Product</a>
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
    <div class="header_slide">
            <div class="header_bottom_left">                
                <div class="categories">
                  <ul>
                    <h3>Categories</h3>
                        <li>
                             <ul>
                                <li>
                                    
                                     <?=  $this->Element('../Types/getListtype'); ?>    
                                    
                                </li>
                            </ul>
                        </li>
                  </ul>
                </div>                  
             </div>
                     <div class="header_bottom_right">                   
                         <div class="slider">                        
                             <div id="slider">
                                <div id="mover">
                                    <div id="slide-1" class="slide">                                
                                     <div class="slider-img">
                                        <?=$this->Html->image('Hinhanh/samsung-galaxy-s6-edge-64gb-15-200x200.jpg',array('alt'=>'CakePHP'))?>                                  
                                      </div>
                                        <div class="slider-text">
                                         <h1>Clearance<br><span>SALE</span></h1>
                                         <h2>UPTo 5% OFF</h2>
                                       <div class="features_list">
                                                                                
                                        </div>
                                         <a href="#" class="button">Shop Now</a>
                                       </div>                          
                                      <div class="clear"></div>             
                                  </div>    
                                        <div class="slide">
                                            <div class="slider-text">
                                         <h1>Clearance<br><span>SALE</span></h1>
                                         <h2>UPTo 20% OFF</h2>
                                       <div class="features_list">
                                                                                
                                        </div>
                                         <a href="preview.html" class="button">Shop Now</a>
                                       </div>       
                                         <div class="slider-img">
                                         <a href="#"><?=$this->Html->image('lumia.jpg',array('alt'=>'cakePHP'))?></a>
                                      </div>                                                                         
                                      <div class="clear"></div>             
                                  </div>
                                  <div class="slide">                                       
                                      <div class="slider-img">
                                         <a href="#"><?=$this->Html->image('ip6plus_128G.jpg',array('alt'=>'cakePHP'))?></a>
                                      </div>
                                      <div class="slider-text">
                                         <h1>Clearance<br><span>SALE</span></h1>
                                         <h2>UPTo 10% OFF</h2>
                                       <div class="features_list">
                                                                                
                                        </div>
                                         <a href="#" class="button">Shop Now</a>
                                       </div>   
                                      <div class="clear"></div>             
                                  </div>                                                
                             </div>     
                        </div>
                     <div class="clear"></div>                         
                 </div>
              </div>
           <div class="clear"></div>
        </div>
   </div>
 <div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3><?=$this->Html->link('New Product',['action'=>'../products/newproduct'])?></h3>
            </div>
            <div class="see">
                <h3><?=$this->Html->link('All product',['action'=>'../products/viewproduct'])?></h3>
            </div>
            <div class="clear"></div>
        </div>
          <div class="container"> 
                    <!--Nội dung hiện thị*@-->
                    <?= $this->fetch('content');?>      
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
    <script type="text/javascript">
        $(document).ready(function() {          
            $().UItoTop({ easingType: 'easeOutQuart' });
            
        });
    </script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>


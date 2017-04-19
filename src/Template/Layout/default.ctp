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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <!--chèn css-->
    
        <?= $this->Html->css('font-awesome.min.css') ?>
        <?= $this->Html->css('style.css') ?>
       <?= $this->Html->css('slider.css') ?>
      
        <?=$this->Html->css('bootstrap.css')?>
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
<body style="font-size:24px;">
  <div class="wrap">
    <div class="header">
        <div class="headertop_desc">
            <div class="call">
                 <p><span>Need help?</span> call us <span class="number">1-22-3456789</span></p>
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
                              <p style="color:black"><?=$this->Html->link('Logout',['action'=>'../Users/logout'])?></p>
                           </li> 
                           <li>
                          <p style="color:black;font-size:0.823em;"><?= $this->request->session()->read('Auth.User.username') ?></p>
                           </li>  
                      <?php else: ?>
                         <li><i style="color:black"><?=$this->Html->link('Register',['controller'=>'Users','action'=>'register'])?></i></li>
                         <li><i style="color:black"><?=$this->Html->link('Login',['controller'=>'Users','action'=>'login'])?></i></li>
                      <?php endif; ?>
                      </ul>
                    </li>
                   
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="header_top">
            <div class="logo">
                <a href="../products/newproduct"><?= $this->Html->image('logo.png',array('alt'=>'CakePHP') ) ?></a>
            </div>
              <div class="glyphicon glyphicon-shopping-cart" id="cart" style="margin-left:1064px;">
                <?php 
                  $total=0;
                  if(isset($_SESSION['cart'])&& $_SESSION['cart'] !=null){
                      foreach ($_SESSION['cart'] as $list) {
                        $total+= $list['quantity'];
                      }
                  }
                ?>
                <a href="../carts/viewCart"><?php echo $total;?> Product</a>
              </div>
             
     <div class="clear"></div>
  </div>

    <div class="header_bottom">
            <div class="menu">
                <ul>
                    <li class="active">
                        <?= $this->Html->link('Home',['action'=>'../products/newproduct'])?>
                    </li>
               
                    <li><a href="#">Product</a>
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
                      <?=$this->Html->image('lumia.jpg',array('alt'=>'CakePHP'))?>                
                      </div>
                                             
                      <div class="clear"></div>       
                  </div>  
                  <div class="slide">
                  
                   <div class="slider-img">
                   <?=$this->Html->image('ip6plus_128G.jpg',array('alt'=>'CakePHP','style'=>'width:400px;height:350px;'))?> 
                  </div>                                                   
                  <div class="clear"></div>       
                  </div>
                  <div class="slide">                         
                    <div class="slider-img">
                     <?=$this->Html->image('samsungc5.jpg',array('alt'=>'CakePHP'))?> 
            </div>
        
            <div class="clear"></div>       
              </div>                        
               </div>   
           <div class="clear"></div>                  
           </div>
       
    </div>
  </div>
  </div>
 <div class="main">
    <div class="content">   <div class="clear"></div>
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
   <div class="footer" style="clear: both;display: block;">
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


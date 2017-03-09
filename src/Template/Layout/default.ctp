<?php
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ;?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
        <?= $cakeDescription ?>: <?= $this->fetch('title'); ?>
    </title>

    <?= $this->Html->meta('icon'); ?>

    <!--chèn css-->
    <?= $this->Html->css('Site.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('icon.css') ?>
    <?= $this->Html->css('NguoiDungCss.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('nivo-slider.css') ?>
  
    <!--chèn  js-->
    <?= $this->Html->script('jquery-1.12.2.min'); ?>
    <?= $this->Html->script('jquery.nivo.slider'); ?>
    <?= $this->Html->script('jquery.nivo.slider.pack.js'); ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    
    <?= $this->Html->script('bootstrap'); ?>
    <?= $this->Html->script('bootstrap.min'); ?>
<!-- chenf css js cho phaanf danh muc sp -->
    <?=$this->Html->script('carousel', ['block' => true]);?>
    <?=$this->Html->css('carousel', ['block' => true]);?>
    <?=$this->Html->script('carousel', ['block' => 'scriptBottom']);?>  


    <?= $this->fetch('meta'); ?>
    <?= $this->fetch('css') ;?>
    <?= $this->fetch('script'); ?>

 <!--   <?= $this->fetch('title') ?>
    <?= $this->fetch('scriptBottom') ?>  -->
</head>
<body > 
    <div class="toantrang" style="background-color:#0a0758">
       
        <!--"Phần đầu"-->
        <div style="height:48px"></div>
        <div id="bg" background-image:<?= $this->Html->image('/Hinhanh/Netcen Welcome.png', array('alt' => 'CakePHP', 'style' => 'height: 61px; float:left;')); ?> </div>
        </div>

        <!--"Phần Menu"-->
        <div id="noi" class="nav">

         <ul>
             <li> 
             <a href="../Products/viewproduct"><i style="color:white" class="fa fa-home"></i><b>Home</b></a>   
            </li>
            <li>
             <a href="#"><i style="color:white" class="fa fa-list"></i><b>Category</b> </a>
                <ul>
                    <li>
                        <a href="#">
                         <?=  $this->Element('../Types/getListtype'); ?>    
                        </a>
                    </li>
                </ul>
            </li>
             <li>
                    <a href="#"><i style="color:white" class="fa fa-headphones"></i><b>Phụ kiện</b></a>
            </li>

             <li>
                    <a href="#"><i style="color:white" class="fa fa-file-text-o"></i><b>News</b></a>
            </li>

             <li>
                    <a href="#"><i style="color:white" class="fa fa-gift"></i><b>Promotion</b></a>
             </li>
               
             <li>
                <a href="#">Account</a>
                    <ul>
                    <?php if($loggedIn): ?>
                         <li>
                            <i style="color:white"><?=$this->Html->link('Logout',['action'=>'../Users/logout'])?></i>
                         </li> 
                         <li>
                        <i style="color:white"><?= $this->request->session()->read('Auth.User.username') ?></i>
                         </li>  
                    <?php else: ?>
                       <li><i style="color:white"><?=$this->Html->link('Register',['action'=>'register'])?></i></li>
                    <?php endif; ?>
                    </ul>
                </li>
                <li>
                    <a href="#"><i style="color: white" class="fa fa-shopping-cart"></i><b>Shopping</b></a>
                </li>

            </ul>
            <!-- Phần tìm kiếm 
            <div style="width:200px;float:left">
                @using (Html.BeginForm("Ketquatimkiem","Timkiem",FormMethod.Post))
                {
                    @Html.TextBox("txtTimkiem","", htmlAttributes: new { @class = "TextBoxTimkiem", @placeholder = "Nhập từ khóa cần tìm kiếm vào đây" })
                    @*<div>
                        <button class="tim_kiem" type="submit">
                            <img src="/Hinhanh/images.png" />
                        </button>
                    </div>*@
                     @*<form class="tim_kiem">
                               <input style="background-image: url('/Hinhanh/images.png');" type="text" name="search" placeholder="Search...">
                      </form>*@
                }
               
            </div>  -->
           
        </div>

       <div style="height:20px;background-color:#ffd800"></div>
        <!-- chen hinh anh dong *@-->
        <div id="slider" class="nivoSlider" >
        <?= $this->Html->image('Hinhanh/17_03_2016_16_15_21_TGDD-ZTE-Wave3-800-300.jpg',array('alt'=>'CakePHP'))?>
        <?= $this->Html->image('Hinhanh/18_03_2016_16_51_27_TGDD-iPhone6s-800-300.jpg',array('alt'=>'CakePHP'))?>   
        <?= $this->Html->image('Hinhanh/19_03_2016_10_32_38_TGDD-Launching-Galaxy-S7-800-300.jpg',array('alt'=>'CakePHP'))?>     
        <?= $this->Html->image('Hinhanh/22_03_2016_14_50_03_TGDD-Le-hoi-Galaxy-800-300.jpg',array('alt'=>'CakePHP'))?>         
        </div>

    <!--Hình ảnh khuyến mại-->
         <div class="km" >
     <a href="#">
         <?= $this->Html->image('Hinhanh/photoshop.png',array('alt'=>'CakePHP','style'=>'height: 325px;
    width: 320px;; float:left;'))?>
     </a>
      
    </div>
      
         
   
    <!--Nội dung hiện thị*@-->
            <?= $this->fetch('content');?>


          <!--"Phần cuối"-->
       

   
    <div class="footer" style="background-color:#c1baef;font-size:20px width: 100%; height:none;">
        <div class="row">
            <br><br>
            <div class="col-md-4">
             <span class="fa fa-search fa-2x" ></span>
             <a href="#"> <h4>Tin công nghệ...</h4></a>
              <a href="#"><p>HÌnh ảnh mới nhất ip7plus</p></a>
              <a href="#"><p>Samsung sắp ra mắt sản phẩm mới</p></a>
             </div>
             <div class="col-md-4">
             <span class="fa fa-phone fa-2x"></span>
              <h4 style="color: green">Chăm sóc khách hàng</h4>
                Gọi mua hàng 1800.1060 (7:30 - 22:00)<br>
                Gọi bảo hành1800.1064 (8:00 - 21:00)
             </div>
             <div class="col-md-4">
             <span class="fa fa-envelope fa-2x" ></span>
             <a href="#"> <h4>Hòm thư góp ý</h4></a>
             
              <p>Lorem ipsum dolor sit amet..</p>
             </div>
        </div>
        <br><br>

        <div class="row">
            <div class="col-md-4">
                <h4 style="color: green">Cách thức liên hệ</h4>
                
                <div class="lienhe">
                    <ul style="list-style-type:none">
                        <li>
                            <a href="#" class="fa fa-facebook-official fa-2x" style="color: blue">
                            </a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-google-plus-circle fa-2x" style="color: green"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-twitter-square fa-2x" style="color:#71f1ec"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-tumblr-square fa-2x" style="color: orange"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
               <form class="navbar-form navbar-left" role="search">
                <h4 style="color: green">Đăng ký nhận bản tin</h4>
                 <div class="form-group">
                     <input type="text" class="form-control" placeholder="Search">
                </div>
                 <button type="submit" class="btn btn-default">Đăng ký</button>
               </form>
            </div>
            <div class="col-md-4">
                <h4 style="color: green">Dịch vụ và hỗ trợ</h4>  
                <p>Hướng dẫn mua hàng<p>
                <p>Bảo hành và hỗ trợ</p>  
            </div>
        </div>
    </div>
  

    <!--Script chay nivo-Slider-->
    <script type="text/javascript">
        $(window).load(function () {
            $('#slider').nivoSlider();
        });
    </script>
</body> 
</html>
<style>
    .nivo-controlNav {
        display: none;
    }
</style>
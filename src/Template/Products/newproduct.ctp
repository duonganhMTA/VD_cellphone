<html>
<?php foreach($sp as $key=>$sanpham): ?>
    <?php if(($key%4) == 0){ ?>
    <div class="row">
    <?php } ?>
	<div class="col-lg-3 images_1_of_4">	
         <?= $this->request->session()->write('id_tp',$sanpham['id_type']);?>
        
	    <a href="../products/detailproduct/<?php echo $sanpham->id_product;?>" target="_blank" title="Click để xem chi tiết">
	    	<?= $this->Html->image('Hinhanh/'.$sanpham['img_product'],array('alt'=>'CakePHP'))?><br>
	    </a>
         <h2><?= $sanpham->name_product?> </h2>
        <div class="price-details">
           <div class="price-number">
                <?=number_format($sanpham['price_product']).'VNĐ' ?>  
               
            </div>
           <!--  <div class="detail">
                <p style="margin-left:20px;margin-top:10px;float:left;font-size: 27px;"> 
                <?=$this->Html->link('Detail',['action'=>'../product/detailproduct',$sanpham->id_product],array('alt'=>'CakePHP','style'=>'border:1px;background-color:green;color:black;'))?></p>
            </div> -->
                    <div class="add-cart">        
                        <h4><button type="submit" onclick="addCart(<?= $sanpham['id_product']; ?>)" class="button">Add to Cart</button></h4>
                     </div>
                 <div class="clear"></div>
        </div>                  
	 </div>
     <?php if(($key%4) == 3){ ?>
        </div>
    <?php } ?>
 <?php endforeach; ?> 
</div> 
 <div class="row" style="height: 100px; margin-top:50px;margin-left:500px;">
    <ul class="pagination" style="display: inline-block;">
            <li><?php echo $this->Paginator->numbers(); ?></li>
    </ul>
</div>
<style>
	.row{
        height:410px;

    }
    .col-lg-3{
            height:356px;
    }
</style>
</html>
<script>
$(document).ready(function(){
    $('#add-form').submit(function(e){
        e.preventDefault();
        var tis = $(this);
        $.post(tis.attr('action'),tis.serialize(),function(data){
            $('#cart-counter').text(data);
        });
    });
});

function addCart(id_product){
    console.log(id_product);
    $.ajax({
     // method: "POST",
     type:"POST",
      url:  'VD_cake/carts/addCart',
      data: { id: id_product},
      success: function( response ) {
        console.log(response);
        //alert( "Data Saved: " + msg );
      }
    });

    $('input.button-buy').click(function(){
         var product_id = $(this).attr('id');
         jQuery.ajax({
         type:'POST',
         url: ajax_url,
         dataType:'json',
         data:{
         "action":"addCart",
         "product_id ":product_id 
         },
         success: function(data){
         if(data.resp=='success'){
        // do something here
        // example: alert success
         }
         else{
        // do something here
        // example: alert error
         } 
         },
         error: function(xhr, ajaxOptions, thrownError){
         jAlert(thrownError,'error');
         }
         });
         return false
    });
      
}
//add to cart vd2
$(".form-item").submit(function(e){ //user clicks form submit button
    var form_data = $(this).serialize(); //prepare form data for Ajax post
    var button_content = $(this).find('button[type=submit]'); //get clicked button info
    button_content.html('Adding...'); //Loading button text //change button text 

    $.ajax({ //make ajax request to cart_process.php
        url: "cart_process.php",
        type: "POST",
        dataType:"json", //expect json value from server
        data: form_data
    }).done(function(data){ //on Ajax success
        $("#cart-info").html(data.items); //total items count fetch in cart-info element
        button_content.html('Add to Cart'); //reset button text to original text
        alert("Item added to Cart!"); //alert user
        if($(".shopping-cart-box").css("display") == "block"){ //if cart box is still visible
            $(".cart-box").trigger( "click" ); //trigger click to update the cart box.
        }
    })
    e.preventDefault();
});
</script>
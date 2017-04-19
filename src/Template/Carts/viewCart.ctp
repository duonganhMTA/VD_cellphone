<html>
<head>
    <style>
        .header_slide{
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php 

            if(isset($_GET['id'])&& isset($_GET['quantity'])){
                $sql="select *from products where id_product=".$_GET['id'];
                $result=mysqli_query($sql);
                $data=mysqli_fetch_row($result);

                //update gio hang
                if($_GET['quantity']>0){
                    $_SESSION['cart'][$_GET['id']]=array(
                        "quantity"=>$_GET['quantity'],
                        "price_product"=>$data[3],
                        "name_product"=>$data[1],
                        "img_product"=>$data[2],
                    );
                }else{
                    unset($_SESSION['cart'][$_GET['id']]);
                }
            }
            if(isset($_GET['id'])&& isset($_GET['action'])){
                unset($_SESSION['cart'][$_GET['id']]);
            }
        ?>
        <div class="row">
            <div class="col-md-9">
              <h2>Shopping cart</h2>  
              <h3>Customer:<?=$cart->user->username?></h3>  
              <?php $product_id=$_GET['id_product'];

              ?>   
              <table class="table table-bordered">
               
                  <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                  </tr>
               <?php
                    if(!empty($_SESSION['cart'])){
                        $i=0;
                        foreach($_SESSION['cart'] as $product_id => $product){
                            $i++;
                        }
                    }
               ?>
                      <tr>
                      if(isset($_SESSION['cart'])&& $_SESSION['cart'] !=null){
                            foreach($_SESSION['cart'] as $product_id => $product){
                                <td><?php echo $i;?></td>
                                <td><?php echo $_SESSION['cart'][$product_id]['name_product']?></td>
                                <td><img src="<?php echo $_SESSION['cart'][$product_id]['img_product']?>" alt=""></td>
                                <td>
                                    <input type="text" name="quantity_<?php echo $product_id?>" id="quantity_<?php echo $product_id?>" value="<?php echo $_SESSION['cart'][$product_id]['quantity']?>">
                                    <a href="javascript:void(0)" onclick="updateItem(<?php echo $product_id?>)">Update</a>
                                    <a href="javascript:void(0)" onclick="deleteItem(<?php echo $product_id?>)">Delete</a>
                                </td>
                                <td><?php echo $_SESSION['cart'][$product_id]['price_product']?></td>
                                <td>
                                    <?php 
                                        echo $total=($_SESSION['cart'][$product_id]['quantity'])*$_SESSION['cart'][$product_id]['price_product'];
                                    ?>
                                </td>
                        }
                    }
                      </tr>
              </table>
          
            </div>
            <div class="col-md-3">
                 <h3>Order summary</h3>
                     <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th>total</th>
                                    </tr>
                                    <tr>
                                        <td>Shipping and handling</td>
                                        <th>$10.00</th>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <th>$0.00</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>$456.00</th>
                                    </tr>
                                </tbody>
                            </table>
                     </div>
            </div>
    </div>
</div>
  <script>
    function updateItem(id) {
        quantity=$('quantity_'+$id).$val();
        $.get("carts?view=viewCart&id_product="+id+"&quantity="+quantity,function(data){
            location.reload();
        });
    }
    function deleteItem(id){
        $.get("carts?view=viewCart&id_product="+id+"&action=del",function(data){
            location.reload();
        });
    }
  </script>
</body>
</html>
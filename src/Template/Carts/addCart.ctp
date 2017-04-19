<html>
<?php
 if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $product_id => $product){
      echo $product_id.'<br>';
      echo $product['name_product'].'<br>';
      echo $product['price'];
    }
    $item=$_SESSION['cart'];
    echo '<p>Ban dang co <a href="../Carts/viewCart">'.count($item).'mon hang trong gio hang</a></p>';
}else{
  echo '<p>Ban khong co mon hang nao trong gio hang</p>';
}
?>  
</html>
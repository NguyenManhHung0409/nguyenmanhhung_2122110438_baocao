<?php
use App\Libraries\Cart;
//Cart::updateCart();

$arr_qty=$_POST['qty'];
foreach($arr_qty as $id=>$qty){
    Cart::updateCart($id,$qty);
header("location:index.php?option=cart");
}
?>
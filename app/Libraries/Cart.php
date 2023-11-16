<?php

namespace App\Libraries;

class Cart
{
    public static function checkCart($id)
    {
        $carts = $_SESSION['cart'] ?? [];
        if (count($carts) > 0) {
            foreach ($carts as $pos => $item) {
                if ($item['id'] == $id) {
                    return true;
                }
            }
        }
        return false;
    }
    public static function posCart($id)
    {
        $carts = $_SESSION['cart'] ?? [];
        if (count($carts) > 0) {
            foreach ($carts as $pos => $item) {
                if ($item['id'] == $id) {
                    return $pos;
                }
            }
        }
        return -1;
    }
    public static function addCart($cart_item)
    {
        $carts = $_SESSION['cart'] ?? [];
        if (count($carts) > 0) {
            //Tồn tại giỏ hàng
            if (self::checkCart($cart_item['id']) == true) {
                $pos = self::posCart($cart_item['id']);
                $carts[$pos]['qty'] += $cart_item['qty'];
            } else {
                $carts[] = $cart_item;
            }
        } else {
            //Chưa tồn tại giỏ hàng thêm mới 
            $carts[] = $cart_item;
        }
        $_SESSION['cart'] = $carts;
    }
    public static function cartContent()
    {
        return $_SESSION['cart'] ?? [];
    }
    public static function cartTotal()
    {
        $total = 0;
        $carts = $_SESSION['cart'] ?? [];
        if (count($carts) > 0) {
            foreach ($carts as $pos => $item) {
                $total += $item['qty'] * $item['price'];
            }
        }
        return $total;
    }
    public static function updateCart($id, $qty)  //Truyền vào một mã sản phẩm và số lượng nào đó
    {
        $carts = $_SESSION['cart'] ?? [];  //Lấy ra tất cả những sản phẩm trong giỏ hàng
        if (count($carts) > 0) {
            foreach ($carts as $pos => $item) {
                if ($item['id'] == $id) {
                    if ($qty == 0) {
                        unset($carts[$pos]);
                    } else {
                        $carts[$pos]['qty'] = $qty;
                    }
                }
            }
        }
        $_SESSION['cart'] = $carts;
    }
    public static function deleteCart($id)
    {
        $carts = $_SESSION['cart'] ?? [];  //Lấy ra tất cả những sản phẩm trong giỏ hàng 
        if (count($carts) > 0) {               //kiểm tra số lượng giỏ hàng bao nhiêu
            foreach ($carts as $pos => $item) {   //chạy vòng lập
                if ($item['id'] == $id) {
                    unset($carts[$pos]);      //lệnh xoá
                }
            }
        }
        $_SESSION['cart'] = $carts;  //cập nhật lại giỏ hàng
    }
}

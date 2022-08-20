<?php

$id = $_POST['id'];

$cart_data = json_decode($_COOKIE['shopping_cart'], true);
foreach ($cart_data as $keys => $values) {
    if ($cart_data[$keys]['item_id'] == $id) {
        unset($cart_data[$keys]);
        $item_data = json_encode($cart_data);
        setcookie("shopping_cart", $item_data, time() + (86400 * 30), '/');
    }
}

?>

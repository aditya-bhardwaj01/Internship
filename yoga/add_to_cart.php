<?php
if (isset($_COOKIE["shopping_cart"])) { 

    $cart_data = json_decode($_COOKIE['shopping_cart'], true);
} else {   
    $cart_data = array();
}

$item_id_list = array_column($cart_data, 'item_id');

if (in_array($_POST["id"], $item_id_list)) {  
    foreach ($cart_data as $keys => $values) {
        if ($cart_data[$keys]["item_id"] == $_POST["id"]) {
            $cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + $_POST["quantity"];
        }
    }
} 
else {  
    $item_array = array(
        'item_id'           =>    $_POST["id"],
        'item_name'         =>    $_POST["title"],
        'item_price'        =>    $_POST["cost"],
        'item_image'        =>    $_POST["imgUrl"],
        'item_quantity'     =>    $_POST['quantity'] 
    );
    $cart_data[] = $item_array;
}


$item_data = json_encode($cart_data);
setcookie('shopping_cart', $item_data, time() + (86400 * 30), '/');

$res = "";
if(isset($_COOKIE['shopping_cart'])){
    $cart_data = json_decode($_COOKIE['shopping_cart']);

    foreach ($cart_data as $keys => $values) {
        $res .= '<div class="product">
                            <button class="item-close" onclick="deleteFromCart('.$values->item_id.')"></button>

                            <a href="#" class="product-image">

                              <img src="'.$values->item_image.'" alt="">

                            </a>

                            <div class="product-description">

                              <h6 class="product-title"><a href="#">'.$values->item_name.'</a></h6>

                              <span class="product-price">'.$values->item_quantity.'X'.$values->item_price.'</span>

                            </div>

                          </div>';
    }
}
else{
    $res .= "No items in the cart";
}

echo $res;

?>

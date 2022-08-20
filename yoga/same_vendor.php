<?php

if (isset($_POST['vendor'])) {
  $vendor_id = $_POST['vendor'];

  $conn = mysqli_connect("localhost", "root", "", "ideal_village") or die("Connection failed");
  $sql = "SELECT x.product_title, x.cat_id, y.image_url FROM marketplace_products x INNER JOIN product_images y ON x.vendor_id=$vendor_id AND x.id=y.product_id" or die("SQL query failed");

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $count = 1;
    foreach ($result as $row) {
      if ($count > 4) break;
      echo '<div class="product">
        <figure class="product-image">
          <span class="label sale">Sale</span>
          <a href="#"><img src="' . $row['image_url'] . '" alt="" '.'id="other-img'.$count.'"'.'></a>
        </figure>
        <div class="product-description">

          <a href="#" class="product-cat">' . $row['cat_id'] . '</a>

          <h6 class="product-name"><a href="#" '.'id="other-name'.$count.'"'.'>' . $row['product_title'] . '</a></h6>

          <div class="pricing-area">

            <div class="product-price" '.'id="other-price'.$count.'"'.'>$38.95
            </div>

            <ul class="rating">
              <li><i class="licon-star"></i></li>
              <li><i class="licon-star"></i></li>
              <li><i class="licon-star"></i></li>
              <li><i class="licon-star"></i></li>
              <li><i class="licon-star"></i></li>
            </ul>

          </div>

          <button class="btn btn-small btn-style-3" '.'id="other-add'.$count.'"'.'>Add To Cart</button>

        </div>

      </div>';
      $count = $count + 1;
    }
  } else {
    echo "<h4>No record Found</h4>";
  }
}
//<a href="#" class="btn btn-small btn-style-3" '.'id="other-add'.$count.'"'.'>Add To Cart</a>
?>
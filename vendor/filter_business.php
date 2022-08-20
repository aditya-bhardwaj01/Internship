<?php
include "../config/connection.php";
if(isset($_POST["action"]))
{
	$sql="select * from marketplace_business WHERE site_id = '$this_site_id' AND status='1'" ;
	if($_POST["action"]=='data')
{
	
	if((isset($_POST["category"]))&& !empty($_POST['category'])){
		$cat = implode("','", $_POST['category']);
		$sql .=  " AND Category IN('" . $cat . "')";
	
	}
	$flag=0;
	
	
	
	if((isset($_POST["sort"]))&& !empty($_POST['sort'])){
		$sort=($_POST['sort']);
		if($sort!="default"){
			$sql .=  " order by ".$sort;
		}
	}
}
if($_POST["action"]=='service')
{
	if((isset($_POST["head"]))&& ($_POST['head']!='all')){
		
		$sql .=  " AND Category ='".$_POST['head']."' ";
	
	}
	if((isset($_POST["search"]))&& strlen($_POST['search'])>2){
		
		$sql .=  " AND Business_Name LIKE '%".$_POST['search']."%' ";
	}
	if((isset($_POST["sort"]))&& !empty($_POST['sort'])){
		$sort=($_POST['sort']);
		if($sort!="default"){
			$sql .=  " order by ".$sort;
		}
	}
}

	$row=$conn->query($sql);
	if(!$row){
		errlog(mysqli_error($conn), $sql);
	}else{
	
	if($row->num_rows>0){
		
		while($res=$row->fetch_assoc()){
			
		$sql_logo="select * from vendor where id= '".$res["vendor_id"]."' ";
		$log_row=$conn->query($sql_logo);
		if(!$log_row){
			errlog(mysqli_error($conn), $sql_logo);
		}else{
		$logo=$log_row->fetch_assoc();
			
?>

<div class="col-md-4 col-6">
														<figure class="product-media">
															<a href="business_detail.php?id=<?=($res["id"])?>">
															   <img src="<?=htmlspecialchars($res["logo"])?>" alt="Product" style="width:270px;height:170px;" />
															</a>
															
															<div class="verified-group">
														   <figure class="vendor-brand">
															<img src="<?=$logo["profile_pic"]?>" alt="Brand" width="50" height="50">
															</figure>
															</div>
															<div class="product-countdown-container font-size-sm text-white bg-primary align-items-center mr-auto mt-2 mb-1 br-xs d-flex">
															<div class="product-action-horizontal">
																<a href="#" class="btn-product-icon btn-cart w-icon-cart"
																	title="Buy Ticket"></a>
																<a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
																	title="Wishlist"></a>
															</div>
														</figure>
														<div class="product-details">
															<div class="product-cat">
																<a href="shop-banner-sidebar.html"><?=htmlspecialchars($res["Category"])?></a>
															</div>
															<h3 class="product-name">
																<a href="product-default.html"><?=htmlspecialchars($res["Business_Name"])?></a>
															</h3>
															<h3 class="product-name">
																<a href="product-default.html"><span><?=htmlspecialchars($logo["name"])?></span>								
																<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 17.542 17.774">
																<g data-name="Group 2129" transform="translate(-1298.5 -235.5)">
																<circle cx="8.271" cy="8.271" r="8.271" fill="none" stroke="#0f9347" data-name="Ellipse 81" transform="translate(1299 237)"></circle>
																<path d="M0 0h16.542v2.789H0z" fill="#0f9347" data-name="Rectangle 624" transform="translate(1299 251.485)"></path>
																<path d="M4380.563 5908.823l-1.076 1.076-4.009 4.011-2.033-2.032-.276-.278-.545.547-.544.545 3.4 3.4 6.176-6.177zm0 0" fill="#0f9347" data-name="Path 939" transform="translate(-3069.595 -5666.796)"></path>
																</g></svg></a>
															</h3>
															<div class="product-price">
											<h6 class="mt-2">Budget&#8377; <ins class="new-price"> <?=htmlspecialchars($res["Max_Investment_Range"])?>.00</ins></h6>
                                        </div>
														</div>
													</div>
													

</div>
<?php 
		}
		}
		
	}
	else{
		echo '<p><b style="color:red; background-color:white;">No data Found </b><p>';

	}
	}
	}
?>          
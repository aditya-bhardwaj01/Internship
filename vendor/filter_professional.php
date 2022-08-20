<?php
include "../config/connection.php";
if(isset($_POST["action"]))
{
	$sql="SELECT a.*, c.name, c.profile_pic from marketplace_professionals a INNER JOIN vendor_type b INNER JOIN vendor c
		  ON a.site_id = $this_site_id AND a.professional_type = b.id AND b.parent_type =2 AND a.vendor_id = c.id ";
	if((isset($_POST["type"]))&& !empty($_POST['type'])){
		$cat = implode("','", $_POST['type']);
		$sql .=  " AND b.title IN('" . $cat . "')";
	
	}
	if((isset($_POST["cat"]))&& !empty($_POST['cat'])){
		$cat = implode("','", $_POST['cat']);
		$sql .=  " AND a.sub_cat_id IN('" . $cat . "')";
	
	}
	if((isset($_POST["skill"]))&& !empty($_POST['skill'])){
		$cat = implode("','", $_POST['skill']);
		$sql .=  " AND a.prof_skills IN('" . $cat . "')";
	}
	if((isset($_POST["location"]))&& !empty($_POST['location'])){
		$cat = implode("','", $_POST['location']);
		$sql .=  " AND c.city IN('" . $cat . "')";
	
	}
	// if((isset($_POST["indus"]))&& !empty($_POST['indus'])){
	// 	$cat = implode("','", $_POST['indus']);
	// 	$sql .=  " AND industry IN('" . $cat . "')";
	
	// }
	
	if((isset($_POST["sort"]))&& !empty($_POST['sort'])){
		$sort=($_POST['sort']);
		if($sort!="default"){
			$sql .=  " order by ".$sort;
		}
	}

	$row=$conn->query($sql);
	if(!$row){
		errlog(mysqli_error($conn), $sql);
	}else{
	
	if($row->num_rows>0){
?>
<div class="product-wrapper row cols-md-4 cols-sm-2 cols-2">
<?php 
	while($res=$row->fetch_assoc()){
		
?>

<div class="product-wrap" id="<?php echo $res["id"];?>">
    <div class="product product-simple text-center" id="<?php echo $res["id"];?>">
        <figure class="product-media">
			<a href="product-default.html">
				<img src="<?php echo $res["profile_pic"];?>" alt="Product" width="295" height="335" />
			</a>
			<div class="product-label-group">
				<label class="product-label label-discount"><?php echo $conn -> real_escape_string(htmlspecialchars($res["label"]));?></label>
			</div>
			<div class="product-action-horizontal" id="<?php echo $res["id"];?>">
				<a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
				<a href="#tab-<?php echo $res["id"];?>" class="btn-product-icon w-icon-search" title="Quick View"></a>
				<button id="<?php echo $res["id"];?>" onclick="quick(this);" class="quick_v btn-quickview btn-product-icon  " title="Apply"><i class="  w-icon-check"></i></button>
			</div>
		</figure>
        <div class="product-details">
            <h4 class="product-name"><a href="product-default.html"><?php echo $conn -> real_escape_string(htmlspecialchars($res["name"]));?></a></h4>
							
			
        </div>
		<div class="widget-body tags">
		<?php
		$ski=explode(",",$res["prof_skills"]); 
		$i=0;
		$flag=0;
		foreach($ski as $skill ){
			if($i<3){
		?>
			<a href="#" class="tag"><?php echo $skill;?></a>
			
			
		<?php
			}
			else{
				$flag++;
			}
			
		$i++;
		
		}
		if($flag!=0){
			echo "<a href='#' class='tag'>+".$flag."</a>";
		}
		?>
		</div>
        
    </div>
</div>


<?php
	
	}
	?>
	</div>

	<?php
	}
	
	else{
		echo '<p><b style="color:red; background-color:white;">No data Found </b><p>';

	}
	}
}
if(isset($_POST["quick"]))
{
	$id=$_POST["id"];
	$sql="select * from marketplace_professionals where id=$id";
	
	$row=$conn->query($sql);
	if(!$row){
		errlog(mysqli_error($conn), $sql);
	}else{
	
	if($row->num_rows>0){

	while($res=$row->fetch_assoc()){
		
		
?>
<div class="row gutter-lg" id="view">
            <div class="col-md-3 mb-4 mb-md-0">
                <div class="product-gallery product-gallery-sticky mb-0">
                    <div class="product-single-swiper swiper-container swiper-theme nav-inner row cols-1 gutter-no">
                        <figure class="product-image">
                            <img src="<?php echo $res["profile_pic"];?>"
                                data-zoom-image="<?php echo $res["profile_pic"];?>"
                                alt="Water Boil Black Utensil" width="800" height="900">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-md-9 overflow-hidden p-relative">
                <div class="product-details scrollable pl-0">
                    <h2 class="product-title"><b><?php echo $conn -> real_escape_string(htmlspecialchars($res["name"]));?></b></h2>
                         <h6 class="product-name"><a href="product-default.html"><?php echo $conn -> real_escape_string(htmlspecialchars($res["bio"]));?></a></h6>
							<div class="product-meta" style="font-size:12px;">
								<div class="product-categories">
									<i class="w-icon-cog"></i> Experience:<span class="product-category"><a href="#"><b> <?php echo $conn -> real_escape_string(htmlspecialchars($res["year_of_exp"]));?> Years</b></a></span>
								</div>
								<div class="product-sku"> <i class="w-icon-wallet2"></i>  Industry: <span><?php echo $conn -> real_escape_string(htmlspecialchars($res["industry"]));?> </span></div>
								<div class="product-sku"> <i class="w-icon-wallet2"></i>  	Languages_known: <span><?php echo $conn -> real_escape_string(htmlspecialchars($res["languages_known"]));?> </span></div>
								<div class="product-sku"> <i class="w-icon-wallet2"></i>  	Interests: <span><?php echo $conn -> real_escape_string(htmlspecialchars($res["interests"]));?> </span></div>
								
								<div class="product-sku mt-3"> <i class="w-icon-map-marker"></i>  Location: <span><?php echo $conn -> real_escape_string(htmlspecialchars($res["city"]));?></span></div>
							</div>
							
							<div class="widget-body tags">
							<?php
								$ski=explode(",",$res["prof_skills"]); 
								$i=0;
								$flag=0;
								foreach($ski as $skill ){
		
								?>
								<a href="#" class="tag"><?php echo $skill;?></a>
			
			
								<?php
					
								}
								?>
							</div>
							
							<div class="sold-by"> Posted <a href="#">:<?php echo agoTime($res["created_date"]);?></a></div>
							<div class="sold-by"> Profile Added :<a href="#">Self</a></div>
							<div class="social-links-wrapper">
								<div class="social-links">
									<div class="social-icons social-no-color border-thin">
										<a href="<?php echo $conn -> real_escape_string(htmlspecialchars($res["fb_link"]));?>" target="blank" class="social-icon social-google w-icon-facebook"></a>
										<a href="<?php echo $conn -> real_escape_string(htmlspecialchars($res["insta_link"]));?>" target="blank" class="social-icon social-linkedin w-icon-instagram"></a>
										<a href="<?php echo $conn -> real_escape_string(htmlspecialchars($res["twitter_link"]));?>" target="blank" class="social-icon social-instagram w-icon-twitter"></a>
									</div>
								</div>
								<span class="divider d-xs-show"></span>
								<div class="product-link-wrapper d-flex">
									<a href="#" class="btn-product-icon btn-wishlist w-icon-heart"></a>
									<a href="#"
										class="btn-product-icon btn-compare btn-icon-left  w-icon-call"></a>
								</div>
							</div>
							<hr class="product-divider">
							<div class="product-form">
								<button class="btn btn-primary btn-cart">
									<i class="w-icon-cart"></i>
									<span>Apply</span>
								</button>
							</div>

                </div>
            </div>
    </div>
        
    
	<?php 
		
		}
		}
		}
		}
		
		?>
?> 
<?php
/*
Template Name: Menu Page
Template Post Type: post, page, event
*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tulasi</title>
    <?php include 'style.php';?>
</head>

<body class="menu-page">
	<?php include 'header_new.php';?>
	<div class="all-title-box py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-right font-weight-bold text-light">
                    <h1 class="display-4 m-0">Enjoy the</h1>
                    <h1 class="display-3 m-0">Delicious</h1>
                    <h3 class="display-5 m-0">Indian and Western Cuisine</h3>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
    	<?php
    		$outlet_id = $_COOKIE['outlet_id'];
            $menu_url = "https://ccpl.ninjaos.com/apiv2/products/getMenuNavigation?app_id=".$app_id."&availability=718B1A92-5EBB-4F25-B24D-3067606F67F0&outletId=".$outlet_id;
            $menu_header = array();
            $menu_header[] = 'Content-Type: application/json';
            $menu_ch = curl_init($menu_url);
            curl_setopt($menu_ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($menu_ch, CURLOPT_HTTPHEADER, $menu_header);
            curl_setopt($menu_ch, CURLOPT_POST, 0);
            // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            // curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
            $menu_result = curl_exec($menu_ch);
            curl_close($menu_ch);  
            $menu_values = json_decode($menu_result,true);  
            // var_dump($menu_values);

        ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark catmenu">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                	<?php
		        		foreach ($menu_values['result_set'] as $key=>$menu_value) 
		                {
		                	if ($key < 5) {		                	
		        	?>
	                    <li class="nav-item">
	                        <a class="menu_<?php echo $key;?> active_nav nav-link <?php if($key == 0){echo 'active';} ?>" onClick="getNavgiation(<?php echo $key;?>)">
	                        	<?php echo $menu_value['category_name'];?>	                        		
	                        </a>
	                    </li>
		            <?php
		            		}
		        		}
		        	?>
                    <li class="nav-item nav-down-click">
                        <a class="nav-link">
                        	<i class="fa fa-arrow-down"></i>
                        	<span class="dropdown-menu-content"></span>
                        </a>
                        <ul class="dropdown-menu menu-page-dropdown">
                        	<?php
				        		foreach ($menu_values['result_set'] as $key=>$menu_value) 
				                {
				                	if ($key > 5) {		                	
				        	?>
						    	<li>
						    		<a onClick="getNavgiation(<?php echo $key;?>)">
						    			<?php echo $menu_value['category_name'];?>
						    		</a>
						    	</li>
				            <?php
				            		}
				        		}
				        	?>
						 </ul>
                    </li>
                </ul>

            </div>

        </nav>

        <div class="offer">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="media">
                        <div class="mimg">
                            <img src="<?php echo $asset_url;?>images/megaphone.png" />
                        </div>
                        <div class="media-body">
                            <h3 class="font-weight-bold">10% off for takeaway</h3>
                            <p>Enjoy 10% off for your 1st purchase</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="media">
                        <div class="mimg">
                            <img src="<?php echo $asset_url;?>images/megaphone.png" />
                        </div>
                        <div class="media-body">
                            <h3 class="font-weight-bold">10% off for takeaway</h3>
                            <p>Enjoy 10% off for your 1st purchase</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="media">
                        <div class="mimg">
                            <img src="<?php echo $asset_url;?>images/megaphone.png" />
                        </div>
                        <div class="media-body">
                            <h3 class="font-weight-bold">10% off for takeaway</h3>
                            <p>Enjoy 10% off for your 1st purchase</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
		 	foreach ($menu_values['result_set'] as $key=>$menu_value) 
		    {	                	
		?>
	        <div class="row my-5 menu_tab" id="menu_<?php echo $key;?>" <?php if ($key != 0){ ?> style="display: none;" <?php } ?>>
	            <div class="col-lg-12">
	                <div class="title-all text-center">
	                    <h1><?php echo $menu_value['category_name'];?></h1>
	                    <?php
	                    	if (!empty($menu_value['pro_cate_short_description'])) {
	                    		echo '<p>'.$menu_value['pro_cate_short_description'].'</p>';
	                    	}	                    	
	                    ?>
	                </div>
	                <?php
	                	foreach ($menu_value['subcat_list_arr']['sub_result_set'] as $key1=>$submenu_value) 
		    				{
		    					$sub_menu_url = "https://ccpl.ninjaos.com/apiv2/products/getAllProducts?app_id=A566D22A-F07E-4CA7-84E6-8A1D590C2259&availability=718B1A92-5EBB-4F25-B24D-3067606F67F0&category_slug=".$menu_value['pro_cate_slug']."&subcate_slug=".$submenu_value['pro_subcate_slug']."&outletId=".$outlet_id;
					            $sub_menu_header = array();
					            $sub_menu_header[] = 'Content-Type: application/json';
					            $sub_menu_ch = curl_init($sub_menu_url);
					            curl_setopt($sub_menu_ch, CURLOPT_RETURNTRANSFER, 1);
					            curl_setopt($sub_menu_ch, CURLOPT_HTTPHEADER, $sub_menu_header);
					            curl_setopt($sub_menu_ch, CURLOPT_POST, 0);
					            // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
					            // curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
					            $sub_menu_result = curl_exec($sub_menu_ch);
					            curl_close($sub_menu_ch);  
					            $sub_menu_values = json_decode($sub_menu_result,true); 
					            $product_base_image_url = $sub_menu_values['common']['product_image_source'];
					            $sub_menu_valuess = $sub_menu_values['result_set'][0]['subcategorie'][0]['products'];
					            // var_dump($sub_menu_valuess);
					            // exit;
	                ?>
			                <div class="title-all text-left">
			                    <h2><?php echo $submenu_value['pro_subcate_name'];?></h2>
						            <div class="row">
					                    <?php
						                	foreach ($sub_menu_valuess as $key2=>$sub_menu_value) 
							    			{	
							    		?>
							                   	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							                       	<div class="products-single fix">
							                           	<div class="box-img-hover">
								                           	<?php
						                                		if (!empty($sub_menu_value['product_thumbnail'])) { ?>
						                                			<img src="<?php echo $product_base_image_url;?>/<?php echo $sub_menu_value['product_thumbnail'];?>" class="img-fluid" alt="<?php echo $sub_menu_value['product_name'];?>">
						                                	<?php
						                                		}else{
						                                	?>
						                                    		<img src="<?php echo $asset_url;?>images/no-image.png" class="img-fluid" alt="<?php echo $sub_menu_value['product_name'];?>">
						                                    <?php
						                                    	}
						                                    ?>
							                           	</div>
							                           	<div class="why-text text-center">
							                               <h4><?php echo substr($sub_menu_value['product_name'],0,25);?></h4>
							                               <span style="display: none;" class="product_slug_<?php echo $sub_menu_value['product_primary_id'];?>"><?php echo $sub_menu_value['product_slug'];?></span>
							                               <hr class="divider m-0" />
							                               <p class="text-muted">
							                                    <?php echo substr($sub_menu_value['product_short_description'],0,80);?>
							                               </p>
							                               <hr class="divider  m-0" />
							                               <h4> <?php echo $currency;?><?php echo $sub_menu_value['product_price'];?></h4>
							                               <a class="btn hvr-hover text-light menu-add-cart-<?php echo $sub_menu_value['product_primary_id'];?>" onclick="addCart(<?php echo $sub_menu_value['product_primary_id'];?>)">Add to Cart</a>
							                               <div class="add-cart-div add-cart-div-<?php echo $sub_menu_value['product_primary_id'];?>">
							                               	<div class="input-group">
							                               		&nbsp;&nbsp;
			                                                    <a class="btn btn-light border" style="margin-right: 5px;" onclick="menuminus(<?php echo $sub_menu_value['product_primary_id'];?>)">-</a>
			                                                   <!--  <input type="hidden" class="form-control text-center" value="1"> -->
			                                                   <span class="add_cart_<?php echo $sub_menu_value['product_primary_id'];?>">0</span>              
			                                                    <a class="btn btn-light border" style="margin-left: 5px;" onclick="menuplus(<?php echo $sub_menu_value['product_primary_id'];?>)">+</a>
			                                                    &nbsp;&nbsp;
			                                                    <a class="btn btn-primary" onclick="done(<?php echo $sub_menu_value['product_primary_id'];?>)" style="color: white;">Done</a>
			                                                </div>
							                               </div>
							                           	</div>
							                       	</div>
							                   	</div>
								        <?php
								            }
								        ?>
						            </div>
			                </div>
					<?php
						}
					?>
	            </div>
	        </div>
		<?php
			}
		?>
    </div>
    <?php include 'footer_new.php';?>
    <?php include 'scripts.php';?>
    <script>
    	$('.home_link').removeClass('active');
    	$('.about_link').removeClass('active');
    	$('.contact_link').removeClass('active');
    	$('.menu_link').addClass('active');
    </script>
</body>

</html>
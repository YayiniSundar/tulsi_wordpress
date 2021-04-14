<?php
/*
Template Name: Index Page
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
    <style>
    	.featured-products-box .owl-nav {
		    margin-top: -220px;
		    position: inherit;
		}
    </style>
</head>

<body>

	<?php include 'header_new.php';?>
    <div id="slides-shop" class="cover-slides" style="height:600px;">
    	<?php
            $bannre_url = "https://ccpl.ninjaos.com/api/cms/banner?app_id=".$app_id."";
            $bannre_header = array();
            $bannre_header[] = 'Content-Type: application/json';
            $bannre_ch = curl_init($bannre_url);
            curl_setopt($bannre_ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($bannre_ch, CURLOPT_HTTPHEADER, $bannre_header);
            curl_setopt($bannre_ch, CURLOPT_POST, 0);
            // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            // curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
            $bannre_result = curl_exec($bannre_ch);
            curl_close($bannre_ch);  
            $bannre_values = json_decode($bannre_result,true);
            $banner_img_base_url = $bannre_values['common']['image_source'];                    
        ?>
        <ul class="slides-container">
        	<?php
        		foreach ($bannre_values['result_set'] as $bannre_value) 
                {
        	?>
            <li class="text-center">
                <img src="<?php echo $banner_img_base_url;?><?php echo $bannre_value['banner_image'];?>" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">&nbsp;</div>
                        <div class="col-md-6 bgvector pl-5 text-right">
                            <div>
                                <?php echo $bannre_value['banner_description'];?>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php
        		}
        	?>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 onhoverbox">
                    <div class="d-flex align-items-center justify-content-center position-relative"
                        style="background:url('<?php echo $asset_url;?>images/delivery1.jpg'); height:450px;">
                        <div class="water"></div>
                        <div class="text-center text-light">
                            <img src="<?php echo $asset_url;?>images/scotter.png" />
                            <h2 class="text-light font-weight-bold mt-3">Delivery</h2>
                            <p>Sample text of this section will be
                            </p><a class="btn hvr-hover  text-light" data-toggle="modal" data-target="#order_now_popup">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 onhoverbox">
                    <div class="d-flex align-items-center justify-content-center position-relative"
                        style="background:url('<?php echo $asset_url;?>images/delivery2.jpg'); height:450px;">
                        <div class="water"></div>
                        <div class="text-center text-light">
                            <img src="<?php echo $asset_url;?>images/takeaway.png" />
                            <h2 class="text-light font-weight-bold mt-3">Takeaway</h2>
                            <p>Sample text of this section will be
                            </p><a class="btn hvr-hover  text-light" data-toggle="modal" data-target="#order_now_popup">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 onhoverbox">
                    <div class="d-flex align-items-center justify-content-center position-relative"
                        style="background:url('<?php echo $asset_url;?>images/delivery3.jpg'); height:450px;">
                        <div class="water"></div>
                        <div class="text-center text-light">
                            <img src="<?php echo $asset_url;?>images/catering.png" />
                            <h2 class="text-light font-weight-bold mt-3">Catering</h2>
                            <p>Sample text of this section will be
                            </p><a class="btn hvr-hover text-light" data-toggle="modal" data-target="#order_now_popup">Order Now</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <p>
                        	<?php
            					echo $static_values['result_set'][0]['staticblocks_description']
        					?> 
                        </p>
                    </div>
                    <div class="featured-products-box owl-carousel owl-theme">
                    	<?php
				            $feature_url = "https://ccpl.ninjaos.com/api/products/new_products_list?app_id=".$app_id."&availability=634E6FA8-8DAF-4046-A494-FFC1FCF8BD11";
				            $feature_header = array();
				            $feature_header[] = 'Content-Type: application/json';
				            $feature_ch = curl_init($feature_url);
				            curl_setopt($feature_ch, CURLOPT_RETURNTRANSFER, 1);
				            curl_setopt($feature_ch, CURLOPT_HTTPHEADER, $feature_header);
				            curl_setopt($feature_ch, CURLOPT_POST, 0);
				            // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
				            // curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
				            $feature_result = curl_exec($feature_ch);
				            curl_close($feature_ch);  
				            $feature_values = json_decode($feature_result,true);
				            $feature_img_base_url = $feature_values['common']['image_source']                    
				        ?>
			        	<?php
			        		foreach ($feature_values['result_set'] as $feature_value) 
			                {
			        	?>
	                        <div class="item">
	                            <div class="products-single fix">
	                                <div class="box-img-hover">
	                                	<?php
	                                		if (!empty($feature_value['product_thumbnail'])) { ?>
	                                			<img src="<?php echo $feature_img_base_url;?><?php echo $feature_value['product_thumbnail'];?>" class="img-fluid" alt="<?php echo $feature_value['product_name'];?>">
	                                	?>
	                                	<?php
	                                		}else{
	                                	?>
	                                    		<img src="<?php echo $asset_url;?>images/no-image.png" class="img-fluid" alt="<?php echo $feature_value['product_name'];?>">
	                                    <?php
	                                    	}
	                                    ?>

	                                </div>
	                                <div class="why-text text-center">
	                                    <h4><?php echo substr($feature_value['product_name'],0,25);?></h4>
	                                    <hr class="divider m-0" />
	                                    <p class="text-muted">
	                                    	<?php 
	                                    		echo substr($feature_value['product_short_description'],0,80); 
							              	?>	                                    		
	                                    </p>
	                                    <hr class="divider  m-0" />
	                                    <h4> <?php echo $currency;?><?php echo $feature_value['product_price'];?></h4>
	                                    <a class="btn hvr-hover  text-light" data-toggle="modal" data-target="#order_now_popup" style="cursor: pointer;">Add to Cart</a>
	                                </div>
	                            </div>
	                        </div>  
			            <?php
			        		}
			        	?>                     
                    </div>
                </div>
            </div>
            <div class="text-center" style="margin-top: 250px;">

                <button type="button" class="btn btn-secondary">Load More..</button>
            </div>
            <div class="my-5">
                <!-- <img src="<?php echo $asset_url;?>images/specialpromotion.jpg" class="img-fluid" /> -->
                <?php
            		echo $static_values['result_set'][1]['staticblocks_description']
        		?> 
            </div>
        </div>

    </div>

 	<?php include 'footer_new.php';?>
    <?php include 'scripts.php';?>
     <script>
    	$('.home_link').addClass('active');
    	$('.about_link').removeClass('active');
    	$('.contact_link').removeClass('active');
    	$('.menu_link').removeClass('active');
    </script>
</body>

</html>
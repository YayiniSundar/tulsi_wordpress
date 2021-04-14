<?php
/*
Template Name: Check Out Page
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
	<div class="all-title-box back-none py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center font-weight-bold text-light">
                    <h2 class="display-4 float-none py-5">CHECKOUT</h2>


                </div>
            </div>
        </div>
    </div>
    <div class="container">



        <div class="row my-5">
            <div class="col-lg-12">
                <div class="title-all  text-center">.
                    <h2 class="text-dark display-5 m-0">Welcome <img src="<?php echo $asset_url;?>images/welcome.png"></h3>
                    	<?php
                        	$user_id = $_SESSION['user_id'];
				            $account_url = "https://ccpl.ninjaos.com/api/customer/customerdetail?app_id=".$app_id."&status=A&refrence=".$user_id;
				            $account_header = array();
				            $account_header[] = 'Content-Type: application/json';
				            $account_ch = curl_init($account_url);
				            curl_setopt($account_ch, CURLOPT_RETURNTRANSFER, 1);
				            curl_setopt($account_ch, CURLOPT_HTTPHEADER, $account_header);
				            curl_setopt($account_ch, CURLOPT_POST, 0);
				            // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
				            // curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
				            $account_result = curl_exec($account_ch);
				            curl_close($account_ch);  
				            $account_value = json_decode($account_result,true);  
				            // var_dump($account_values);

					        $account_values = $account_value['result_set'];

				        ?>
                        <h1><?php echo $account_values['customer_first_name'];?> <?php echo $account_values['customer_last_name'];?></h1>
                        <input type="hidden" class="customer_id" value="<?php echo $account_values['customer_id'];?>">
                        <input type="hidden" class="customer_fname" value="<?php echo $account_values['customer_first_name'];?>">
                        <input type="hidden" class="customer_lname" value="<?php echo $account_values['customer_last_name'];?>">
                        <input type="hidden" class="customer_mobile_no" value="<?php echo $account_values['customer_phone'];?>">
                        <input type="hidden" class="customer_email" value="<?php echo $account_values['customer_email'];?>">
                </div>




                <div class="row">
                    <div class="col-sm-6">
                        <div class="card shadow" style="min-height:670px;">
                            <div class="card-header border-0">
                                <h3 class="font-weight-bold m-0 p-0 text-dark text-center">Delivery Details</h3>
                            </div>
                            <div class="card-body">
                                <div class="card-header mb-3 border-0">
                                    <h4 class="font-weight-bold m-0 p-0 text-dark text-left">Delivery Location</h4>
                                </div>

                                <div class="mb-3">

                                    <input type="text" class="form-control" id="address" placeholder="Address" value="<?php echo $account_values['customer_address_line1'];?>,<?php echo $account_values['customer_address_line2'];?>">
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">

                                        <input type="text" class="form-control" id="city" placeholder="City" value="<?php echo $account_values['customer_city'];?>">
                                    </div>
                                    <div class="col-md-4 mb-3">

                                        <input type="text" class="form-control" id="state" placeholder="State" value="<?php echo $account_values['customer_state'];?>">
                                    </div>
                                    <div class="col-md-4 mb-3">

                                        <input type="text" class="form-control" id="pin_code" placeholder="Pin Code" value="<?php echo $account_values['customer_postal_code'];?>">
                                    </div>
                                </div>
                                <div class="card-header mb-3 d-flex justify-content-between border-0">
                                    <h4 class="font-weight-bold m-0 p-0 text-dark text-left">Billing Address</h4>
                                    <div>
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input mt-0 check_address" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label pt-0" for="flexCheckDefault">
                                                Same as Delivery Address
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">

                                    <input type="text" class="form-control" id="bii_address" placeholder="Address">
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">

                                        <input type="text" class="form-control" id="bii_city" placeholder="City">
                                    </div>
                                    <div class="col-md-4 mb-3">

                                        <input type="text" class="form-control" id="bii_state" placeholder="State">
                                    </div>
                                    <div class="col-md-4 mb-3">

                                        <input type="text" class="form-control" id="bii_pin_code" placeholder="Pin Code">
                                    </div>
                                </div>
                                <div class="card-header mb-3 border-0">
                                    <h4 class="font-weight-bold m-0 p-0 text-dark text-left">Choose Date & Time</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                    	<input type="text" class="form-control date" value="<?php echo $_COOKIE['delivery_date'];?>">
                                        <!-- <select class="wide w-100" id="date">
                                            <option value="Choose..." data-display="Select">Choose...</option>
                                            <option value="United States"><?php echo $_COOKIE['user_id'];?></option>
                                        </select> -->
                                    </div>
                                    <div class="col-md-6 mb-3">                                    	
                                    	<input type="text" class="form-control date" value="<?php echo $_COOKIE['delivery_time'];?>">
                                        <!-- <select class="wide w-100" id="time">
                                            <option value="Choose..." data-display="Select">Choose...</option>
                                            <option value="United States"></option>
                                        </select> -->
                                    </div>

                                </div>
                                <div class="card-header mb-3 border-0">
                                    <h4 class="font-weight-bold m-0 p-0 text-dark text-left">Special Note</h4>
                                </div>
                                <textarea class="form-control" placeholder="Special Note"></textarea>

                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="font-weight-bold text-dark m-0 p-0">Get Redeem</h4>
                                        <p>Redeem Your Points Here</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="bg-dark text-light text-center">You have 100 points available</div>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Add Can Redeem 100 Points">
                                    <a href="javascript:void(0)" class="btn btn-secondary px-3 ml-2">Apply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card shadow" style="min-height:670px;">
                            <div class="card-header border-0">
                                <h3 class="font-weight-bold m-0 p-0 text-dark text-center">Your Order Details</h3>
                            </div>
                            <div class="card-body">

                                <?php
					                // $user_id = $_SESSION['user_id'];
									   $product_url = "https://ccpl.ninjaos.com/api/cart/contents?status=A&app_id=".$app_id."&reference_id=&customer_id=".$user_id."&availability_id=718B1A92-5EBB-4F25-B24D-3067606F67F0";
									   $product_header = array();
									   $product_header[] = 'Content-Type: application/json';
									   $product_ch = curl_init($product_url);
									   curl_setopt($product_ch, CURLOPT_RETURNTRANSFER, 1);
									   curl_setopt($product_ch, CURLOPT_HTTPHEADER, $product_header);
									   curl_setopt($product_ch, CURLOPT_POST, 0);
									   // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
									   // curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
									   $product_result = curl_exec($product_ch);
									   curl_close($product_ch);  
									   $product_value = json_decode($product_result,true);  
									   // var_dump($account_values);

									$product_values = $product_value['result_set'];
									$quantity = 0;
								?>
								<input type="hidden" class="cart_id" value="<?php echo $product_values['cart_details']['cart_id'];?>">
								<div class="table-main table-responsive">
									    		<table class="table table-fixed" style="table-layout: fixed;">
			                                        <colgroup>
			                                            <col width="70%">
			                                            <col width="30%">
			                                        </colgroup>
			                                        <thead>
			                                            <tr>
			                                                <th>Your Items</th>
			                                                <th class="text-right"><a href="javacsript:void(0)"
			                                                        class="text-light">Clear Cart</a></th>
			                                            </tr>
			                                        </thead>
			                                        <tbody>
								<?php 
									foreach ($product_values['cart_items'] as $key => $value) {
									    echo '
			                                        	<tr>
			                                                <td class="thumbnail-img">
			                                                    <div class="media">
			                                                        <img class="img-fluid" src="'.$value['cart_item_product_image'].'" alt=""
			                                                            width="100">
			                                                        <div class="media-body ml-3">
			                                                            <div class="d-flex justify-content-between">
			                                                                <div>
			                                                                    <h3 class="m-0 p-0 font-weight-bold text-dark">
			                                                                        '.$value['cart_item_product_name'].'
			                                                                    </h3>			                                                                    
			                                                                </div>
			                                                            </div>
			                                                        </div>
			                                                    </div>
			                                                </td>
			                                                <td class="" style="vertical-align: top;">
			                                                    <div class="d-flex justify-content-between">
			                                                        <h3 class="text-right w-100 mr-2">$'.$value['cart_item_total_price'].'</h3>
			                                                        <a href="#">
			                                                            <i class="fa fa-times text-dark"></i>
			                                                        </a>
			                                                    </div>
			                                                    <div class="input-group">
			                                                        <a href="javascript:void(0)" class="btn btn-light border" style="margin-right: 5px;">-</a>
			                                                        <span>'.$value['cart_item_qty'].'</span>
			                                                        <a href="javascript:void(0)" class="btn btn-light border" style="margin-left: 5px;">+</a>

			                                                    </div>
			                                                </td>

			                                            </tr>';
			                            $quantity = $quantity + $value['cart_item_qty'];
									}
								?>
								<input type="hidden" class="quantity" value="<?php echo $quantity;?>">
			                                        </tbody>
				                                 </table>

				                            </div>
                                
                                    
									        
                                            


                                        
                            </div>
                            <div class="card-header">

                                <div class="order-box">


                                    <div class="d-flex">
                                        <h4>Sub Total</h4>
                                        <div class="ml-auto font-weight-bold"> $ <span class="sub_total"><?php echo $product_values['cart_details']['cart_sub_total'];?></span> </div>
                                    </div>
                                    <div class="d-flex">
                                        <h4>Delivery</h4>
                                        <div class="ml-auto font-weight-bold"> $ <?php echo $product_values['cart_details']['cart_delivery_charge'];?> </div>
                                    </div>

                                    <div class="d-flex">
                                        <h4>Promo Code</h4>
                                        <div class="ml-auto font-weight-bold"> $ <span class="promo_amount"><?php echo $product_values['cart_details']['cart_special_discount'];?></span></div>
                                    </div>
                                    <!-- <div class="d-flex">
                                        <h4>GST</h4>
                                        <div class="ml-auto font-weight-bold"> $ 10.00 </div>
                                    </div> -->


                                    <div class="d-flex gr-total">
                                        <h5>Grand Total</h5>
                                        <div class="ml-auto h5"> $  <span class="total"><?php echo $product_values['cart_details']['cart_grand_total'];?></span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
					                // $user_id = $_SESSION['user_id'];
									   $promocode_url = "https://ccpl.ninjaos.com/api/promotion_api_v2/promotionlistWhitoutuniqcode?app_id=".$app_id."&customer_id=".$user_id;
									   $promocode_header = array();
									   $promocode_header[] = 'Content-Type: application/json';
									   $promocode_ch = curl_init($promocode_url);
									   curl_setopt($promocode_ch, CURLOPT_RETURNTRANSFER, 1);
									   curl_setopt($promocode_ch, CURLOPT_HTTPHEADER, $promocode_header);
									   curl_setopt($promocode_ch, CURLOPT_POST, 0);
									   // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
									   // curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
									   $promocode_result = curl_exec($promocode_ch);
									   curl_close($promocode_ch);  
									   $promocode_value = json_decode($promocode_result,true);  
									   // var_dump($account_values);

									$promocode_count = count($promocode_value['result_set']['my_promo']);

								?>
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="font-weight-bold text-dark m-0 p-0">Promo Code</h4>
                                        <p>Apply your promo code here</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="bg-dark text-light text-center ">You have <?php echo $promocode_count; ?> Promotions available
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <input type="text" class="form-control form-control-sm promocode_value"
                                        placeholder="Add Your Promo Code Here">
                                    <a class="btn btn-secondary px-3 ml-2 promocode_btn">Apply</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="title-all text-center">.
            <h2 class="text-dark font-weight-bold m-0">Do share the following for us to reach out to you with promotions
                and offers !</h3>
                <div class="col-8 mx-auto">
                    <div class="row">
                        <div class="col-md-6 mb-3">

                            <input type="text" class="form-control" id="address2" placeholder="Your Birthday">
                        </div>
                        <div class="col-md-6 mb-3">

                            <input type="text" class="form-control" id="address2" placeholder="Gender">
                        </div>

                    </div>
                </div>
        </div>
        <div class="card mt-3 border-primary mb-5">
            <div class="card-body">
                <h4 class="font-weight-bold text-dark text-center m-0 p-0">Select your Payment Method</h4>
                <div class="col-6 mt-5 mx-auto">
                    <div class="row">
                        <div class="col-md-6 mb-3">

                            <div class="form-control d-flex align-items-center" style="height: 60px;;">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input mt-0" name="payment" type="radio" value="0"
                                        id="flexCheckDefault1">
                                    <label class="form-check-label pt-0" for="flexCheckDefault1">
                                        Cash on Delivery
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">

                            <div class="form-control d-flex align-items-center" style="height: 60px;;">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input mt-0" name="payment" type="radio" value="1"
                                        id="flexCheckDefault2">
                                    <label class="form-check-label pt-0" for="flexCheckDefault2">
                                        <div class="payment-icon p-0">
                                            <ul>
                                                <li><img class="img-fluid" src="<?php echo $asset_url;?>images/payment1.png" alt=""></li>
                                                <li><img class="img-fluid" src="<?php echo $asset_url;?>images/payment2.png" alt=""></li>
                                                <li><img class="img-fluid" src="<?php echo $asset_url;?>images/payment3.png" alt=""></li>

                                            </ul>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">

                            <a class="btn hvr-hover text-light btn-block" id="checkoutButton">Checkout New</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
	<?php include 'footer_new.php';?>
    <?php include 'scripts.php';?>
    <script type="text/javascript" src="https://cdn.omise.co/omise.js"></script>
 <script>
  OmiseCard.configure({
    publicKey: "pkey_test_5n9200oudv8jp021pzd"
  });

  var button = document.querySelector("#checkoutButton");
  // var form = document.querySelector("#checkoutForm");

  button.addEventListener("click", (event) => {
  	var payment = $("input[name='payment']:checked").val();
  	var total = $(".total").html();
  	console.log('payment = '+payment);
  	if (payment == 1) {
  		event.preventDefault();
	    OmiseCard.open({
	      amount: total*100,
	      currency: "USD",
	      defaultPaymentMethod: "credit_card",
	      onCreateTokenSuccess: (nonce) => {
	          if (nonce.startsWith("tokn_")) {
	              // form.omiseToken.value = nonce;

				$('#payment_success').modal('toggle');
				window.location.href = "http://localhost/balaji/sundaresh/Apptivo%20Technologies/tulasi/index.php/account";
	          } else {
	              // form.omiseSource.value = nonce;
	          };
	        form.submit();
	      }
	    });
  	}
    
  });
</script>
</body>

</html>
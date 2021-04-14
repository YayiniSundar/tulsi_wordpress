<?php
/*
Template Name: Account Page
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
    	.order_div .col-md-6 {
		    margin-bottom: 15px;
		}
		.past_order_div{
			display: block;
		}
    </style>
</head>

<body class="menu-page">
	<?php include 'header_new.php';?>
	<div class="container">
        <div class="d-md-flex align-items-start my-5">
            <div class="nav flex-column accountnav  text-light nav-pills me-3" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">
                <a class="nav-link active" id="account1-tab" data-toggle="pill" data-target="#account1"
                    href="javascript:void(0)" role="tab" aria-controls="account1" aria-selected="true">Accout
                    Informations <i class="fa fa-chevron-right"></i></a>

                <a class="nav-link " id="account2-tab" data-toggle="pill" data-target="#account2"
                    href="javascript:void(0)" role="tab" aria-controls="account2" aria-selected="false">My Orders
                    <i class="fa fa-chevron-right"></i></a>

                <a class="nav-link " id="account3-tab" data-toggle="pill" data-target="#account3" role="tab" aria-controls="account3" aria-selected="false">Rewards
                    <i class="fa fa-chevron-right"></i></a>

                <a class="nav-link " id="account4-tab" data-toggle="pill" data-target="#account4"
                    href="javascript:void(0)" role="tab" aria-controls="account4" aria-selected="false">Promotions <i
                        class="fa fa-chevron-right"></i></a>
<!-- 
                <a class="nav-link" id="account5-tab" data-toggle="pill" data-target="#account5"
                    href="javascript:void(0)" role="tab" aria-controls="account5" aria-selected="false">Vouchers
                    <i class="fa fa-chevron-right"></i></a>

                <a class="nav-link" id="account6-tab" data-toggle="pill" data-target="#account6"
                    href="javascript:void(0)" role="tab" aria-controls="account6" aria-selected="false">Settings
                    <i class="fa fa-chevron-right"></i></a> -->

                <a class="nav-link logout_btn" id="account7-tab" data-toggle="pill" data-target="#account7"
                    href="javascript:void(0)" role="tab" aria-controls="account7" aria-selected="false">Logout
                    <i class="fa fa-chevron-right"></i></a>

            </div>
            <div class="tab-content card shadow  " id="v-pills-tabContent">
                <div class="tab-pane fade show p-5 active" id="account1" role="tabpanel" aria-labelledby="account1-tab">

                    <div class="title-all  text-left">
                        <h2 class="text-dark display-5 p-0 m-0">Welcome <img src="<?php echo $asset_url;?>images/welcome.png"></h2>
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
                        <h1><?php echo $account_values['customer_first_name'];?></h1>


                    </div>
                    <div class="card-header mb-3 border-0">
                        <h4 class="font-weight-bold m-0 p-0 text-dark text-left">Your Account Information</h4>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" id="address2" placeholder="Name" value="<?php echo $account_values['customer_first_name'];?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" id="address2" placeholder="Last Name" value="<?php echo $account_values['customer_last_name'];?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" id="address2" placeholder="Preferred Name" value="<?php echo $account_values['customer_nick_name'];?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" id="address2" placeholder="Mobile Number" value="<?php echo $account_values['customer_phone'];?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" id="address2" placeholder="Email Address" value="<?php echo $account_values['customer_email'];?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" id="address2" placeholder="Birthday" value="<?php echo $account_values['customer_birthdate'];?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" id="address2" placeholder="Gender" value="<?php echo $account_values['customer_gender'];?>">
                        </div>

                    </div>
                    <div class="card-header mb-3 border-0">
                        <h4 class="font-weight-bold m-0 p-0 text-dark text-left">Billing Address</h4>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">

                            <input type="text" class="form-control" id="address2" placeholder="Postal Code" value="<?php echo $account_values['customer_postal_code'];?>">
                        </div>
                        <div class="mb-3 col-md-6">

                            <input type="text" class="form-control" id="address2" placeholder="Address Line 1" value="<?php echo $account_values['customer_address_line1'];?>">
                        </div>

                        <div class="mb-3 col-md-6">

                            <div class="d-flex justify-content-start align-items-center">
                                <div>#</div>
                                <input type="text" class="form-control mx-2" style="width: 60px;">
                                <input type="text" class="form-control mx-2" style="width: 60px;">
                            </div>
                        </div>
                    </div>
                    <div class="card-header mb-3 border-0">
                        <h4 class="font-weight-bold m-0 p-0 text-dark text-left">Other Address</h4>
                    </div>
                    <div class="card">
                        <div class="card-body" style="max-height:200px; overflow-y:auto">
                        	<?php
					            $address_url = "https://ccpl.ninjaos.com/api/customer/get_all_user_secondary_address?app_id=".$app_id."&status=A&refrence=".$user_id;
					            $address_header = array();
					            $address_header[] = 'Content-Type: application/json';
					            $address_ch = curl_init($address_url);
					            curl_setopt($address_ch, CURLOPT_RETURNTRANSFER, 1);
					            curl_setopt($address_ch, CURLOPT_HTTPHEADER, $address_header);
					            curl_setopt($address_ch, CURLOPT_POST, 0);
					            // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
					            // curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
					            $address_result = curl_exec($address_ch);
					            curl_close($address_ch);  
					            $address_value = json_decode($address_result,true);  
					            // var_dump($account_values);

						        $address_values = $address_value['result_set'];

					        ?>
                            <div class="row">
                            	<?php
                            		foreach ($address_values as $key => $value) {
                            			
	                            		echo '<div class="col-sm-4">
			                                    <div class="card bg-light mb-2">
			                                        <div class="card-body p-2">
			                                            <a href="javascript:void(0)" class="close boxclose">&times;</a>
			                                            <p>
			                                                '.$value["address"].',<br>
			                                                '.$value["country"].' - '.$value["postal_code"].'

			                                            </p>
			                                        </div>
			                                    </div>
			                                </div>';
                            		}
                            	?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show p-5" id="account2" role="tabpanel" aria-labelledby="account2-tab">
                    <ul class="nav nav-pills nav-justified subtab">
                        <li class="nav-item">
                            <a class="nav-link active current_order" aria-current="page">Current Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link past_order">Past Orders</a>
                        </li>

                    </ul>
                    <!-- <div class="d-flex my-2 justify-content-end align-items-center">
                        SHOW<select class="form-control mx-2" style="width: 80px;;">
                            <option>5</option>
                        </select> PER PAGE
                    </div> -->

                    <div class="row order_div">
                        
                    </div>
                    <div class="row past_order_div">
                        
                    </div>
                </div>
                <div class="tab-pane fade show" id="account3" role="tabpanel" aria-labelledby="account2-tab">
                    <div style="background: url(<?php echo $asset_url;?>images/congrat.jpg);" class="text-center font-weight-bold py-3">
                        <img src="<?php echo $asset_url;?>images/medal.png" />
                        <h3 class="text-light font-weight-bold mt-3">Congrats! You Have Earned</h3>
                        <h2 class="text-primary font-weight-bold"><span class="reward_point"> 60</span> Points</h2>
                    </div>
                    <div class="p-5">
                        <ul class="nav nav-pills nav-justified subtab">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">POINTS REWARDED</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">POINTS REDEEMED</a>
                            </li>

                        </ul>
                        <div class="d-flex my-2 justify-content-end align-items-center">
                            SHOW<select class="form-control mx-2" style="width: 80px;;">
                                <option>5</option>
                            </select> PER PAGE
                        </div>

                        <div class="row rewards_div">
                            <div class="col-md-6 mb-3">
                                <div class="card shadow">
                                    <div class="card-header bg-dark p-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="text-light p-2 bg-dark">Order No - 170530.E1001
                                            </div>
                                            <div class="graypend p-1 text-light font-weight-bold text-right">
                                                <small>Order Value</small> </br /><sup>$</sup>&nbsp;56.60
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-center text-dark font-weight-bold">
                                            Order placed at : 30/05/2017 02:29 <br />
                                            Pay by : Online payment</p>

                                        <div class="d-flex justify-content-between mt-3 mb-3">
                                            <div class="w-50">
                                                <h3 class="text-dark font-weight-bold m-0 p-0">Delivery Date</h3>
                                                <h2 class="text-dark display-5 m-0 font-weight-bold">30/05/2017</h2>
                                            </div>
                                            <div class="w-50 text-right">
                                                <h4 class="text-dark font-weight-bold m-0 p-0">Event Time</h4>
                                                <h2 class="text-dark display-5 m-0  font-weight-bold">12:30PM</h2>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-header bg-primary p-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="text-light p-2 px-3  m-0 h3">EARNED
                                            </div>
                                            <div class="text-light p-2 px-3 m-0  h3">20 Points
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-block btn-outline-secondary">PRINT INVOICE</a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="javascript:void(0)" class="btn btn-block btn-secondary">VIEW
                                                    RECEIPT</a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <div class="card-header bg-dark p-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="text-light p-2 bg-dark">Order No - 170530.E1001
                                            </div>
                                            <div class="graypend p-1 text-light font-weight-bold text-right">
                                                <small>Order Value</small> </br /><sup>$</sup>&nbsp;56.60
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-center text-dark font-weight-bold">
                                            Order placed at : 30/05/2017 02:29 <br />
                                            Pay by : Online payment</p>

                                        <div class="d-flex justify-content-between mt-3 mb-3">
                                            <div class="w-50">
                                                <h3 class="text-dark font-weight-bold m-0 p-0">Delivery Date</h3>
                                                <h2 class="text-dark display-5 m-0 font-weight-bold">30/05/2017</h2>
                                            </div>
                                            <div class="w-50 text-right">
                                                <h4 class="text-dark font-weight-bold m-0 p-0">Event Time</h4>
                                                <h2 class="text-dark display-5 m-0  font-weight-bold">12:30PM</h2>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-header bg-primary p-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="text-light p-2 px-3  m-0 h3">EARNED
                                            </div>
                                            <div class="text-light p-2 px-3 m-0  h3">20 Points
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-block btn-outline-secondary">PRINT INVOICE</a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="javascript:void(0)" class="btn btn-block btn-secondary">VIEW
                                                    RECEIPT</a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade  show" id="account4" role="tabpanel" aria-labelledby="account4-tab">
                    <div style="background: url(<?php echo $asset_url;?>images/congrat.jpg);" class="text-center font-weight-bold py-3">

                        <h3 class="text-light font-weight-bold mt-3">Redeem Your</h3>
                        <h1 class="text-light font-weight-bold">Promotions</h1>
                        <div class="col-6 mx-auto">
                            <div class="input-group input-group-md">
                                <input type="text" class="form-control " placeholder="Add your promo/invite code here">
                                <a href="javascript:void(0)" class="btn btn-primary">View Receipt</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <ul class="nav nav-pills nav-justified subtab">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">PROMO REWARDED</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">PROMO REDEEMED</a>
                            </li>

                        </ul>
                        <!-- <div class="d-flex my-2 justify-content-end align-items-center">
                            SHOW<select class="form-control mx-2" style="width: 80px;;">
                                <option>5</option>
                            </select> PER PAGE
                        </div> -->

                        <div class="row pomo_div">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="account5" role="tabpanel" aria-labelledby="account5-tab">

                    <div class="p-5">
                        <ul class="nav nav-pills nav-justified subtab">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">AVAILABLE E-VOUCHERS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">USED E-VOUCHERS</a>
                            </li>

                        </ul>
                        <div class="d-flex my-2 justify-content-end align-items-center">
                            SHOW<select class="form-control mx-2" style="width: 80px;;">
                                <option>5</option>
                            </select> PER PAGE
                        </div>
                        <div class=" mx-auto">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="card shadow bg-primary text-center">
                                        <div class="card-body">
                                            <h2 class="text-light font-weight-bold">10 Drinks Voucher</h2>
                                            <p class="font-weight-bold text-dark">Expiry 31-Jul-2020</p>
                                            <div class="d-flex justify-content-between">
                                                <div class="border-right w-100  px-3">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <span class="number">6</span>
                                                        <h3 class="font-weight-bold mb-0 p-0 mx-3 text-light">X
                                                            Available</h3>
                                                    </div>
                                                </div>
                                                <div class="w-100 px-3 text-left">
                                                    <p class="text-light">Item short description will
                                                        be in this area</p>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="card-header bg-dark">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <img src="images/logo.png" width="100" />
                                                <a href="javascript:void(0)"
                                                    class="btn btn-block mx-3 btn-outline-light">VIEW</a>
                                                <a href="javascript:void(0)"
                                                    class="btn btn-block mx-3 m-0 btn-primary">REDEEM</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card shadow bg-primary text-center">
                                        <div class="card-body">
                                            <h2 class="text-light font-weight-bold">10 Drinks Voucher</h2>
                                            <p class="font-weight-bold text-dark">Expiry 31-Jul-2020</p>
                                            <div class="d-flex justify-content-between">
                                                <div class="border-right w-100  px-3">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <span class="number">2</span>
                                                        <h3 class="font-weight-bold mb-0 p-0 mx-3 text-light">X
                                                            Available</h3>
                                                    </div>
                                                </div>
                                                <div class="w-100 px-3 text-left">
                                                    <p class="text-light">Item short description will
                                                        be in this area</p>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="card-header bg-dark">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <img src="images/logo.png" width="100" />
                                                <a href="javascript:void(0)"
                                                    class="btn btn-block mx-3 btn-outline-light">VIEW</a>
                                                <a href="javascript:void(0)"
                                                    class="btn btn-block mx-3 m-0 btn-primary">REDEEM</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include 'footer_new.php';?>
    <?php include 'scripts.php';?>
    
</body>

</html>

<style>
    .wrapper {
        margin-top: -30px;
    }
    span.regiserror_pin , .regiserror_terms_conditiob , .login_error {
        color: red;
    }
    p.regis_success {
        text-align: center;
        background-color: green;
        color: white;
        border-radius: 5px;
        font-size: 16px;
        padding: 5px;
        display: none;
        margin-bottom: 10px;
    }
    p.regis_error {
        text-align: center;
        background-color: #ca0909c2;
        color: white;
        border-radius: 5px;
        font-size: 16px;
        padding: 5px;
        display: none;
        margin-bottom: 10px;
    }
    div#order_now_popup .modal-content {
        padding: 10px;
    }
    div#order_now_popup h2.title {
        text-align: center;
        font-weight: 600;
        font-size: 38px;
        margin-bottom: 0;
        text-transform: capitalize;
    }
    div#order_now_popup p.sub-title {
        color: #333;
        font-size: 16px;
        margin: 0 0 20px;
        text-align: center;
    }
    .header-ordernow-single-img:hover {
        background: #2e9d36;
    }
    .header-ordernow-single-img {
        display: block;
        position: relative;
        background: #e5e5e5;
        padding: 15px 10px;
        border-radius: 10px;
        box-shadow: 0 3px 5px 0 rgb(0 0 0 / 8%);
        color: black;
        text-align: center;
        cursor: pointer;
    }
    .header-ordernow-single-img:hover img.order_type_img {
        display: none;
    }
    img.order_type_img {
        height: 70px;
    }
    .header-ordernow-single-img:hover img.order_type_imgwt {
        display: initial;
    }
    img.order_type_imgwt {
        height: 70px;
        display: none;
    }
    .header-ordernow-single-img:hover h3 {
        color: white;
    }
    .header-ordernow-single-img h3 {
        color: black;
        margin-top: 16px;
        font-weight: 600;
        font-size: 20px;
    }
    div#outlets .bg-green {
        background: #2e9d36;
        padding: 20px 15px;
        margin-right: -1px;
    }
    div#outlets .div1 {
        text-align: right !important;
    }
    div#outlets .div1 img {
        height: 85px;
    }
    div#outlets .div2 {
        text-align: left !important;
    }
    div#outlets .div2 h2.title {
        font-size: 38px;
        font-weight: 700;
        margin-bottom: 0;
        text-transform: capitalize;
    }
    div#outlets .div2 p.sub-title {
        margin-bottom: 0;
        font-size: 20px;
        color: #fff;
    }
    div#outlets .content {
        padding: 20px;
    }
    div#outlets li.outlet_li {
        background: #1e1e20;
        color: #fff;
        padding: 10px 15px;
        display: block;
        font-size: 15px;
        position: relative;
        overflow: hidden;
        border-radius: 3px;
        cursor: pointer;
    }
    p.text-muted {
        height: 120px;
    }
    div#product_added_popup h2.title {
        text-align: center;
        background: #181818;
        color: #fff;
        font-size: 20px;
        padding: 12px 14px;
        position: relative;
        font-family: "Century Gothic";
        text-transform: uppercase;
    }
    div#product_added_popup h2.title {
        text-align: center;
        background: #181818;
        color: #fff;
        font-size: 20px;
        padding: 12px 14px;
        position: relative;
        font-family: "Century Gothic";
        text-transform: uppercase;
    }
    div#product_added_popup p.sub-title {
        text-align: center;
        color: green;
        font-size: 20px;
        font-weight: 700;
    }

    /* Menu page */
    .menu-page .menu-page-dropdown {
        background-color: #060801;
        /*display: block;*/
        float: right !important;
        right: 0;
        left: auto;
    }
    .menu-page .menu-page-dropdown li {
        border-bottom: 1px solid #ffffff3b;
        cursor: pointer;
    }
    .menu-page .nav-down-click {
        cursor: pointer;
    }
    .menu-page .products-single .box-img-hover img.img-fluid {
        width: 100%;
        height: 255px;
    }
    .menu-page p.text-muted {
        height: 120px;
    }
    .menu-page a.nav-link {
        cursor: pointer;
    }
    .menu-page .title-all h2 {
        font-weight: 600;
    }
    .add-cart-div{
        display: none;
    }
    .select_deliveryaddress_img {
        background-color: black;
        min-height: 310px;
        justify-content: center;
        text-align: center;
        align-items: center;
        padding-top: 80px;
    }
    .select_deliveryaddress_img img {
        max-width: 90px;
        margin-bottom: 15px;
    }
    .select_deliveryaddress_img h3 , .select_deliveryaddress_img p {
        color: white;
    }
    .delivery1_address_choose_div span {
        font-size: 17px;
        font-weight: 600;
    }
    .user_postal_code_danger{
        background: #ffbaba;
        color: #d8000c;
        padding: 5px 10px;
        /*font-size: 11px!important;*/
        position: relative;
        font-weight: 400;
        z-index: 4;
        line-height: 1.1;
        display: none;
    }
</style>
<!-- <script type="text/javascript">
    if (sessionStorage.getItem('user_id')) {
        if (Cookies.get("user_id") == '') {
            document.cookie = "user_id ="+sessionStorage.getItem('user_id')+"";
        }else{
            
        }
        
    }else{
        document.cookie = "user_id = 0";
    }
    
</script> -->
    <?php
       if (isset($_SESSION['user_id'])) {
            if ($_SESSION['user_id'] != 0) {
                $_SESSION['user_id'] = $_COOKIE['user_id'];
            }
           
       }else{
            $_SESSION['user_id'] = $_COOKIE['user_id'];
       }
        

    ?>
    <?php
        $static_url = "https://ccpl.ninjaos.com/api/cms/staticblocks?app_id=".$app_id;
        $static_header = array();
        $static_header[] = 'Content-Type: application/json';
        $static_ch = curl_init($static_url);
        curl_setopt($static_ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($static_ch, CURLOPT_HTTPHEADER, $static_header);
        curl_setopt($static_ch, CURLOPT_POST, 0);
        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        $static_result = curl_exec($static_ch);
        curl_close($static_ch);  
        $static_values = json_decode($static_result,true);

                    
    ?>
    <div class="main-top text-light text-center">
        <?php
            echo $static_values['result_set'][3]['staticblocks_description']
        ?>
        <!-- Pre-Orders Delivery : Lunch-By 10am / Dinner-By 3pm -->
    </div>
    <input type="hidden" class="asset_url" value="<?php echo $asset_url;?>">
    <input type="hidden" class="app_id" value="<?php echo $app_id;?>">
    <input type="hidden" class="status_cart" value="0>">
    <?php
        echo '<input type="hidden" value="'.$_SESSION['user_id'].'" class="user_id">';

    ?>
    
    <header class="main-header">

        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="https://interlinkpro.co.in/demo_food_delivery/"><img src="<?php echo $asset_url;?>images/logo.png" class="logo" alt=""></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item home_link"><a class="nav-link" href="https://interlinkpro.co.in/demo_food_delivery">Home</a></li>
                        <li class="nav-item about_link"><a class="nav-link" href="https://interlinkpro.co.in/demo_food_delivery/index.php/about-us/">About Us</a></li>
                        <li class="nav-item menu_link"><a class="nav-link" >Menu</a></li>
                        <li class="nav-item contact_link"><a class="nav-link" href="https://interlinkpro.co.in/demo_food_delivery/index.php/contact-us/">Contact Us</a></li>
                        <?php
                            if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
                                echo '<li class="nav-item"><a class="nav-link" href="https://interlinkpro.co.in/demo_food_delivery/index.php/account/" style="display: inline-block;padding-right: 5px;">Account</a>/<a class="nav-link logout_btn" href="javascript:void(0)" style="display: inline-block;padding-left: 5px;">Logout</a></li>';
                            }else{
                                echo '<li class="nav-item"><a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#login">Login/Sign Up</a></li>';
                            }
                        ?>
                        
                        <li class="nav-item"><a class="btn hvr-hover btn-primary" href="javascript:void(0)" data-toggle="modal" data-target="#order_now_popup">Order Now</a></li>
                    </ul>
                </div>
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
                            <a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="badge cart_count">0</span>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php include 'side_cart.php';?>
        </nav>
    </header>
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>

    <!-- Order Now -->
    
    <div class="modal fade" id="order_now_popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="min-width: 700px;">
                <div class="modal-content">
                    <div class="modal-body p-0 bg-light">
                        <button type="button" class="btn-close float-right" data-dismiss="modal"
                            aria-label="Close">&times;</button>
                        <h2 class="title">Order Now</h2>
                        <p class="sub-title">Select your order type</p>
                        <div class="d-md-flex justify-content-between align-items-center select_delivery_type">                            
                            <div class="col-md-6  text-light text-center delivery_outlet">
                                <div class="header-ordernow-single-img">
                                    <img class="order_type_img" src="https://tulasi.promobuddy.asia/static/media/delivery.ab2e648c.svg">
                                    <img class="order_type_imgwt" src="https://tulasi.promobuddy.asia/static/media/delivery-w.22a0844b.svg">
                                    <h3>Delivery</h3>
                                </div>
                            </div>
                            <div class="col-md-6  text-light text-center">
                                <div class="header-ordernow-single-img">
                                    <img class="order_type_img" src="https://tulasi.promobuddy.asia/static/media/takeaway.b26093e1.svg">
                                    <img class="order_type_imgwt" src="https://tulasi.promobuddy.asia/static/media/takeaway-w.6e727f01.svg">
                                    <h3>Takeaway</h3>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                </div>
            </div>
    </div>

    <!-- Order Now -->
    
    <div class="modal fade" id="delivery_address_popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="min-width: 700px;">
                <div class="modal-content">
                    <div class="modal-body p-0 bg-light">
                        <button type="button" class="btn-close float-right" data-dismiss="modal"
                            aria-label="Close">&times;</button>
                        <div class="d-md-flex justify-content-between align-items-center" style="background-color: black;">                            
                            <div class="col-md-6  text-light text-center" style="background-color: black;">
                                <div class="select_deliveryaddress_img">
                                    <img class="" src="https://tulasi.promobuddy.asia/static/media/delivery-w.22a0844b.svg">
                                    <h3>LET US KNOW</h3>
                                    <p>Your <b>Delivery</b> Location</p>
                                </div>
                            </div>
                            <div class="col-md-6" style="background-color: white;">
                                <div class="delivery1_address_choose_div"> </div>
                                <h3 class="text-center">YOUR DELIVERY LOCATION2</h3>
                                <input type="text" class="form-control mb-2 user_postal_code" placeholder="Enter your postal code">
                                <span class="user_postal_code_danger">Please enter valid postal code.</span>

                                    <div class="row">
                                        <div class="col-6"> <a href="javascript:void(0)"
                                                class="btn btn-md btn-secondary btn-block user_address_back">GO BACK</a></div>
                                        <div class="col-6"> <a href="javascript:void(0)"
                                                class="btn btn-md btn-primary btn-block user_address_continue">CONTINUE</a></div>
                                    </div>

                            </div>
                        </div>
                    </div>  
                </div>
            </div>
    </div>

    <!-- Select Outlets -->

    <div class="modal fade" id="outlets" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="min-width: 700px;">
            <div class="modal-content">
                <div class="modal-body p-0 bg-light">
                    <div class="bg-green">
                        <button type="button" class="btn-close float-right" data-dismiss="modal"
                            aria-label="Close">&times;</button>
                        
                        <div class="d-md-flex justify-content-between align-items-center">  
                            <div class="col-md-6  text-light text-center div1">
                                <img src="https://tulasi.promobuddy.asia/static/media/delivery-w.22a0844b.svg">
                            </div>
                            <div class="col-md-6  text-light text-center div2">
                                <h2 class="title">Please Select</h2>
                                <p class="sub-title">Your Delivery Outlet</p>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="form-group">
                            <div class="focus-out">
                                <input type="input" class="form-control input-focus" id="search_outlet" placeholder="Search Outlet">
                                <div class="outlet_error"></div>
                            </div>
                        </div>

                        <h2 class="title">Nearby Outlets</h2>
                        <ul>
                            <?php
                                $url = "https://ccpl.ninjaos.com/apiv2/outlets/getAllOutles?app_id=".$app_id."&availability_id=634E6FA8-8DAF-4046-A494-FFC1FCF8BD11";
                                $header = array();
                                $header[] = 'Content-Type: application/json';
                                $ch = curl_init($url);
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                                curl_setopt($ch, CURLOPT_POST, 0);
                                // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
                                // curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
                                $result = curl_exec($ch);
                                curl_close($ch);  
                                $values = json_decode($result,true);
                                foreach ($values['result_set'] as $value) 
                                {
                                    echo "<li class='outlet_li' data-id='".$value['outlet_id']."' data-pin='".$value['outlet_postal_code']."' data-address='".$value['outlet_address_line1']."' data-delivery='10' data-gst='18' data-free='20'>".$value['outlet_address_line1'].",".$value['outlet_postal_code']."</li>";
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Login -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="min-width: 900px;">
                <div class="modal-content">

                    <div class="modal-body p-0 bg-light">
                        <button type="button" class="btn-close float-right" data-dismiss="modal"
                            aria-label="Close">&times;</button>
                        <div class="d-md-flex justify-content-between align-items-center">
                            <div class="col-md-5 text-light">
                                <div class="p-5">
                                    <img src="<?php echo $asset_url;?>images/logo.png" class="logo" alt="" class="mb-5">
                                    <a href="javascript:void(0)" class="btn mt-5 btn-outline-secondary btn-block sign-up-btn" data-toggle="modal" data-target="#register">Sign
                                        Up</a>
                                    <a href="javascript:void(0)" class="btn btn-outline-secondary btn-block">Continue as
                                        Guest</a>
                                </div>
                            </div>
                            <div class="col-md-7" style="background-color: #fff;">

                                <div class="clearfix"></div>
                                <div class="px-5  py-3 text-center">
                                    <h2 class="font-weight-bold">Have an Account?</h2>
                                    <p class="text-center ">Update your informations and continue</p>

                                </div>
                                <div class="col-10 mx-auto mt-3">
                                    <p class="login_error"></p>
                                    <form action="" method="post" class="login_form">
                                        <input type="hidden" name="app_id" value="<?php echo $app_id; ?>">
                                        <input type="hidden" name="type" value="web">
                                        <input type="hidden" name="logintype" value="mobile">
                                        <input type="hidden" name="passwordtype" value="pin">
                                        <input type="text" onkeypress="return isNumber(event)" class="form-control mb-2 login_username" name="login_username" placeholder="Enter Phone Number">
                                        <input type="text" class="form-control mb-2 login_password" name="login_password" placeholder="Enter Your Pin">
                                        <!-- <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I agree with Restauarnt Name Terms & Conditions
                                            </label>
                                        </div> -->
                                        <div class="my-3 d-flex justify-content-center">
                                            <div>
                                                <a href="javascript:void(0)" class="btn btn-md btn-secondary px-5 login_submit">Login</a>
                                                <button type="submit" class="btn btn-success submit_login" style="display: none;">Login</button>
                                                <div class="text-center">
                                                    <a href="javascript:void(0)" class="text-dark">Forgot Pin?</a>
                                                </div>
                                            </div>

                                        </div>
                                    </form>


                                    <div class="mb-3">
                                        <div class="bortext">
                                            <span>Or Sign in With</span>
                                        </div>

                                        <a href="javacsript:void(0)" class="btn btn-block text-light"
                                            style="background-color:#cf4332 ;"><i class="fa fa-google mr-2"
                                                aria-hidden="true"></i>Sign in with Google</a>
                                        <a href="javacsript:void(0)" class="btn btn-block text-light"
                                            style="background-color:#3d5a98 ;"><i class="fa fa-facebook mr-2"
                                                aria-hidden="true"></i>Log in with Facebook</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Register -->
        <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="min-width: 700px;">
                <div class="modal-content">

                    <div class="modal-body p-0 ">
                        <button type="button" class="btn-close float-right" data-dismiss="modal"
                            aria-label="Close">&times;</button>

                        <div class="shadow py-3 text-dark text-center position-relative">
                            <h2 class="display-5 mb-0 font-weight-bold">CREATE AN ACCOUNT</h2>
                            <p class="">Update your informations and continue</p>
                        </div>
                        <div class="bg-light py-5">
                            <div class="col-8 mx-auto">
                                <p class="regis_success"></p>
                                <p class="regis_error"></p>
                                <a href="javacsript:void(0)" class="btn mb-3 btn-block text-light"
                                    style="background-color:#3d5a98 ;"><i class="fa fa-facebook mr-2"
                                        aria-hidden="true"></i>Log in with Facebook</a>


                                <div class="bortext mb-3">
                                    <span>OR REGISTER WITH</span>
                                </div>

                                <form action="" method="post" class="register_form">
                                    <input type="hidden" name="app_id" value="<?php echo $app_id; ?>">
                                    <input type="hidden" name="type" value="web">
                                    <input type="text" class="form-control mb-3 regis_name" name="customer_first_name" required placeholder="Enter your name">
                                    <input type="number" class="form-control mb-3 regis_phone" placeholder="Enter mobile number" name="customer_phone" required>
                                    <input type="email" class="form-control mb-3 regis_email" placeholder="Enter email address" name="customer_email" required>
                                    <input type="text" class="form-control mb-3 regis_pin" placeholder="Enter your pin" name="customer_password" required>
                                    <input type="text" class="form-control mb-3 regis_re_pin" placeholder="Re-enter your pin" name="re_pin" required>
                                    <span class="regiserror_pin" style="display: none;">Pin and Re-Pin are not same</span>
                                    <div class="form-check d-flex align-items-center justify-content-center">
                                        <input class="form-check-input position-relative mt-0 mr-3 terms_condition" type="checkbox" value="" id="flexCheckDefault" name="customer_pdpa_consent">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree with Restauarnt Name Terms & Conditions
                                        </label>
                                    </div>
                                    <p class="regiserror_terms_conditiob" style="display: none;">Kindly accept Terms & Conditions</p>
                                    <a href="javascript:void(0)"
                                    class="btn btn-md btn-secondary mt-3 mb-3 btn-block regis_submit">SUBMIT</a>
                                    <button type="submit" class="btn btn-success submit_regis" style="display: none;">SUBMIT</button>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- TakeWay -->
        <div class="modal fade" id="takeaway" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="min-width: 700px;">
                <div class="modal-content">

                    <div class="modal-body p-0 bg-dark">
                        <button type="button" class="btn-close float-right" data-dismiss="modal"
                            aria-label="Close">&times;</button>
                        <div class="d-md-flex justify-content-between align-items-center">
                            <div class="col-md-5  text-light text-center">
                                <div class="px-5">
                                    <img src="images/takeaway.png" alt="" class="mb-3">
                                    <h2 class="text-light display-5 mb-0 font-weight-bold">AWESOME <br />YOU CAN PICKUP
                                    </h2>
                                    <p class="text-light">Let Us Know Your Pickup Date & Time</p>
                                </div>
                            </div>
                            <div class="col-md-7" style="background-color: #fff;height:350px">

                                <div class="clearfix"></div>
                                <div class="px-5  pt-5 text-center">
                                    <h2 class="font-weight-bold">Choose Date & Time</h2>

                                </div>
                                <div class="col-10 mx-auto mt-3">
                                    <div class="row">
                                        <div class="col-6"> <input type="text" class="form-control mb-2"
                                                placeholder="Date"></div>
                                        <div class="col-6"> <input type="text" class="form-control mb-2"
                                                placeholder="Time"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6"> <a href="javascript:void(0)"
                                                class="btn btn-md btn-secondary btn-block">GO BACK</a></div>
                                        <div class="col-6"> <a href="javascript:void(0)"
                                                class="btn btn-md btn-primary btn-block">CONTINUE</a></div>
                                    </div>





                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Delivery 1 -->

        <div class="modal fade" id="delivery1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="min-width: 700px;">
                <div class="modal-content">

                    <div class="modal-body p-0 bg-dark">
                        <button type="button" class="btn-close float-right" data-dismiss="modal"
                            aria-label="Close">&times;</button>
                        <div class="d-md-flex justify-content-between align-items-center">
                            <div class="col-md-5  text-light text-center">
                                <div class="px-5">
                                    <img src="images/awesome.png" alt="" class="mb-3">
                                    <h2 class="text-light display-5 mb-0 font-weight-bold">CREATE AN ACCOUNT</h2>
                                    <p class="text-light">Update your informations and continue</p>
                                </div>
                            </div>
                            <div class="col-md-7" style="background-color: #fff;height:350px">

                                <div class="clearfix"></div>
                                <div class="px-5  pt-5 text-center">
                                    <h2 class="font-weight-bold">Your Delivery Location</h2>
                                    <div class="row">
                                        <div class="col-12"> 
                                            <input type="text" class="form-control mb-2 delivery1_pin"
                                                placeholder="Pin">
                                            </div>

                                    </div>
                                    <div class="text-center d-flex justify-content-center">
                                        <div class="tick mr-3"><i class="fa fa-check"></i></div>
                                        <span class="delivery1_address"></span>
                                    </div>
                                </div>
                                <div class="px-5  pt-5 text-center">
                                    <h2 class="font-weight-bold">Choose Date & Time</h2>

                                </div>
                                <div class="col-12 mx-auto mt-2">
                                    <div class="row">
                                        <div class="col-6"> 
                                            <input type="date" class="form-control mb-2 delivery_date"
                                                placeholder="Date"></div>
                                        <div class="col-6"> 
                                            <!-- <input type="text" class="form-control mb-2 delivery_time"
                                                placeholder="Time"> -->
                                            <select class="form-control mb-2 delivery_time">
                                                <option value="0">Select Time</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6"> <a href="javascript:void(0)"
                                                class="btn btn-md btn-secondary btn-block delivery1_back">GO BACK</a></div>
                                        <div class="col-6"> <a href="javascript:void(0)"
                                                class="btn btn-md btn-primary btn-block delivery1_nxt">CONTINUE</a></div>
                                    </div>





                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Delivery 2 -->
        <div class="modal fade" id="delivery2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="min-width: 700px;">
                <div class="modal-content">

                    <div class="modal-body p-0 bg-dark">
                        <button type="button" class="btn-close float-right" data-dismiss="modal"
                            aria-label="Close">&times;</button>
                        <div class="d-md-flex justify-content-between align-items-center">
                            <div class="col-md-5  text-light text-center">
                                <div class="px-5">
                                    <img src="<?php echo $asset_url;?>images/scotter.png" alt="" class="mb-3">
                                    <h2 class="text-light display-5 mb-0 font-weight-bold">Let us know</h2>
                                    <p class="text-light">Your <strong>Delivery</strong> Location</p>
                                </div>
                            </div>
                            <div class="col-md-7" style="background-color: #fff;height:250px">

                                <div class="clearfix"></div>
                                <div class="px-5  pt-5 text-center">
                                    <h2 class="font-weight-bold">Your Delivery Location</h2>
                                    <div class="row">
                                        <div class="col-12"> 
                                            <input type="hidden" name="outlet_id" class="outlet_id">
                                            <input type="hidden" name="outlet_id_pin" class="outlet_id_pin">
                                            <input type="hidden" name="outlet_id_address" class="outlet_id_address">
                                            <input type="text" class="form-control mb-2 delivery_pin" placeholder="Pin">
                                            <p style="color:red;display: none;" class="error_postal_code">We can't find your postal code</p>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-6"> <a href="javascript:void(0)"
                                                class="btn btn-md btn-secondary btn-block pincode_check_back">GO BACK</a></div>
                                        <div class="col-6"> <a href="javascript:void(0)"
                                                class="btn btn-md btn-primary btn-block pincode_check">CONTINUE</a></div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="product_added_popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="min-width: 700px;">
                <div class="modal-content">
                    <div class="modal-body p-0 bg-light">
                        <button type="button" class="btn-close float-right" data-dismiss="modal"
                            aria-label="Close">&times;</button>
                        <h2 class="title">success</h2>
                        <br>
                        <p class="sub-title">Great choice! Item added to your cart.</p>
                        <br>
                        
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="login_success" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="min-width: 700px;">
                <div class="modal-content">
                    <div class="modal-body p-0 bg-light">
                        <button type="button" class="btn-close float-right" data-dismiss="modal"
                            aria-label="Close">&times;</button>
                        <h2 class="title">success</h2>
                        <br>
                        <p class="sub-title">Great choice! Item added to your cart.</p>
                        <br>
                        
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="payment_success" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="min-width: 700px;">
                <div class="modal-content">
                    <div class="modal-body p-0 bg-light">
                        <button type="button" class="btn-close float-right" data-dismiss="modal"
                            aria-label="Close">&times;</button>
                        <h2 class="title">success</h2>
                        <br>
                        <p class="sub-title">Payment Done Successfully</p>
                        <br>
                        
                    </div>

                </div>
            </div>
        </div>

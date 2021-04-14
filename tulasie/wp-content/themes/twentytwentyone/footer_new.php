   <style>
        div#footer_content {
            color: white;
        }
        .footer-col.footer-c1 h3 , .footer-col.footer-c2 h3 {
            color: #ffffff;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
            position: relative;
            font-weight: 700;
        }
        .footer-col.footer-c2 a {
            color: white;
        }
        @media (min-width: 992px){
            .footer-col.footer-c1 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }
            .footer-col.footer-c2 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding-left: 50px;
            }
            .footer-col.footer-c2 div {
                ms-flex: 0 0 32%;
                flex: 0 0 32%;
                max-width: 32%;
            }
        }
        @media (max-width: 768px){
            .footer-col.footer-c1 .footer-col.footer-c2 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                display: block
            }
            .footer-col.footer-c2 div {
                ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
   </style>
   <footer>
        <div class="footer-main">
            <div class="container" id="footer_content">
                <!-- <div class="d-flex justify-content-center mb-5 text-center text-light footbox">
                    <div>
                        <div class="circle">
                            <img src="<?php echo $base_url;?>images/footicn1.png" />
                        </div>
                        <h3 class="font-weight-bold">Address</h3>
                        <p>46 Race Course Rd,
                            Singapore 218559</p>
                    </div>
                    <div>
                        <div class="circle">
                            <img src="<?php echo $base_url;?>images/footicn2.png" />
                        </div>
                        <h3 class="font-weight-bold">Telephone</h3>
                        <p>6909 3333</p>

                    </div>

                    <div>
                        <div class="circle">
                            <img src="<?php echo $base_url;?>images/footicn3.png" />
                        </div>
                        <h3 class="font-weight-bold">Email</h3>
                        <p>email@domain.com</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Us</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>About Us</h4>
                            <ul>
                                <li><a href="#">About Tulasi</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Locations</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>My Account</h4>
                            <ul>
                                <li><a href="#">Personal Details</a></li>
                                <li><a href="#">Orders</a></li>
                                <li><a href="#">Rewards</a></li>
                                <li><a href="#">Promotions</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Other</h4>
                            <ul>


                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-12 col-sm-12">
                        <div class="footer-link">

                            <h4>Social Media</h4>
                            <div class="footer-top-box">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <?php
                        echo $static_values['result_set'][2]['staticblocks_description']
                    ?>
                </div>
            </div>
        </div>
    </footer>

    <div class="footer-copyright">
        <p class="footer-company">Copyright 2020 Restaurant Name.  All rights reserved.
        </p>
    </div>


    <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-chevron-up"></i></a>
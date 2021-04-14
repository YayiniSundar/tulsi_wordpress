<?php
/*
Template Name: Product Page
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

	<body>
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
	        <nav class="navbar navbar-expand-lg navbar-dark bg-dark catmenu">


	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
	                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>
	            <div class="collapse navbar-collapse" id="navbarColor01">
	                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	                    <li class="nav-item">
	                        <a class="nav-link active" aria-current="page" href="#">STARTERS</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#">SOUPS</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#">MAIN DISHES</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#">CATEGORY NAME</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#">CATEGORY NAME</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#">CHECK MORE</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#">CHECK MORE</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#"><i class="fa fa-arrow-down"></i></a>
	                    </li>

	                </ul>

	            </div>

	        </nav>

	        <div class="card mt-5">
	            <div class="card-body">
	                <a href="javascript:void(0)" class="close">&times;</a>
	                <div class="shop-detail-box-main p-0">
	                    <div class="container">
	                        <div class="row">
	                            <div class="col-xl-6 col-lg-5 col-md-6">
	                                <div id="carousel-example-1" class="single-product-slider carousel slide"
	                                    data-ride="carousel">
	                                    <div class="carousel-inner" role="listbox">
	                                        <div class="carousel-item active"> <img class="d-block w-100"
	                                                src="images/productmain.jpg" alt="First slide"> </div>
	                                        <div class="carousel-item"> <img class="d-block w-100"
	                                                src="images/productmain.jpg" alt="Second slide"> </div>
	                                        <div class="carousel-item"> <img class="d-block w-100"
	                                                src="images/productmain.jpg" alt="Third slide"> </div>
	                                        <div class="carousel-item"> <img class="d-block w-100"
	                                                src="images/productmain.jpg" alt="Second slide"> </div>
	                                        <div class="carousel-item"> <img class="d-block w-100"
	                                                src="images/productmain.jpg" alt="Third slide"> </div>
	                                        <div class="carousel-item"> <img class="d-block w-100"
	                                                src="images/productmain.jpg" alt="Second slide"> </div>

	                                    </div>
	                                    <a class="carousel-control-prev" href="#carousel-example-1" role="button"
	                                        data-slide="prev">
	                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
	                                        <span class="sr-only">Previous</span>
	                                    </a>
	                                    <a class="carousel-control-next" href="#carousel-example-1" role="button"
	                                        data-slide="next">
	                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
	                                        <span class="sr-only">Next</span>
	                                    </a>
	                                    <ol class="carousel-indicators">
	                                        <li data-target="#carousel-example-1" data-slide-to="0" class="active">
	                                            <img class="d-block w-100 img-fluid" src="images/productmain.jpg" alt="" />
	                                        </li>
	                                        <li data-target="#carousel-example-1" data-slide-to="1">
	                                            <img class="d-block w-100 img-fluid" src="images/productmain.jpg" alt="" />
	                                        </li>
	                                        <li data-target="#carousel-example-1" data-slide-to="2">
	                                            <img class="d-block w-100 img-fluid" src="images/productmain.jpg" alt="" />
	                                        </li>
	                                        <li data-target="#carousel-example-1" data-slide-to="0" class="active">
	                                            <img class="d-block w-100 img-fluid" src="images/productmain.jpg" alt="" />
	                                        </li>
	                                        <li data-target="#carousel-example-1" data-slide-to="1">
	                                            <img class="d-block w-100 img-fluid" src="images/productmain.jpg" alt="" />
	                                        </li>
	                                        <li data-target="#carousel-example-1" data-slide-to="2">
	                                            <img class="d-block w-100 img-fluid" src="images/productmain.jpg" alt="" />
	                                        </li>
	                                    </ol>
	                                </div>
	                            </div>
	                            <div class="col-xl-6 col-lg-7 col-md-6">
	                                <div class="single-product-details">
	                                    <h3>Main Dishes</h3>
	                                    <h2 class="m-0 p-0">Chicken Biriyani</h2>
	                                    <div>
	                                        <span class="badge-pill badge-secondary badge">Chicken</span>
	                                        <span class="badge-pill badge-secondary badge">Spicy</span>
	                                    </div>
	                                    <h2 class="text-primary display-4 mt-3 font-weight-bold"> $40.79</h2>

	                                    <p>Nam sagittis a augue eget scelerisque. Nullam lacinia consectetur sagittis. Nam
	                                        sed neque id eros fermentum dignissim quis at tortor. Nullam ultricies urna quis
	                                        sem sagittis pharetra. Nam erat turpis, cursus in ipsum at,
	                                        tempor imperdiet metus. In interdum id nulla tristique accumsan. Ut semper in
	                                        quam nec pretium. Donec egestas finibus suscipit. Curabitur tincidunt convallis
	                                        arcu. </p>


	                                    <div class="card-header border-0 font-weight-bold">
	                                        Choose Product Size
	                                    </div>
	                                    <div class="d-flex align-items-center py-2 px-3">
	                                        <h6>Regular</h6>
	                                        <div class="ml-auto font-weight-bold"> <input type="radio" name="prsize"></div>
	                                    </div>
	                                    <div class="d-flex align-items-center py-2 px-3">
	                                        <h6>Large</h6>
	                                        <div class="ml-auto font-weight-bold"> <input type="radio" name="prsize"></div>
	                                    </div>
	                                    <div class="card-header border-0 font-weight-bold">
	                                        Choose Add-ons
	                                    </div>
	                                    <div class="d-flex align-items-center py-2 px-3">
	                                        <h6>Salman Sauce</h6>
	                                        <div class="ml-auto font-weight-bold" style="width: 120px;;">


	                                            <div class="input-group">
	                                                <a href="javascript:void(0)" class="btn btn-outline-secondary"><i
	                                                        class="fa fa-minus"></i> </a>
	                                                <input type="text" class="form-control text-center" value="1">
	                                                <a href="javascript:void(0)" class="btn btn-secondary"> <i
	                                                        class="fa fa-plus"></i> </a>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="d-flex align-items-center py-2 px-3">
	                                        <h6>California Dreams</h6>
	                                        <div class="ml-auto font-weight-bold" style="width: 120px;;">
	                                            <div class="input-group">
	                                                <a href="javascript:void(0)" class="btn btn-outline-secondary"><i
	                                                        class="fa fa-minus"></i> </a>
	                                                <input type="text" class="form-control text-center" value="1">
	                                                <a href="javascript:void(0)" class="btn btn-secondary"><i
	                                                        class="fa fa-plus"></i> </a>
	                                            </div>
	                                        </div>
	                                    </div>



	                                    <div class="mb-3">
	                                        <label for="username">Select Quantity</label>
	                                        <div class="d-flex justify-content-start">
	                                            <div class="input-group mr-3" style="width: 150px;">
	                                                <a href="javascript:void(0)" class="btn btn-outline-secondary"><i
	                                                        class="fa fa-minus"></i></a>
	                                                <input type="text" class="form-control text-center" value="1">
	                                                <a href="javascript:void(0)" class="btn btn-primary "><i
	                                                        class="fa fa-plus"></i> </a>
	                                            </div>
	                                            <a class="btn btn-secondary" data-fancybox-close="" href="#">Done</a>

	                                        </div>

	                                    </div>


	                                </div>
	                            </div>
	                        </div>




	                    </div>
	                </div>
	            </div>
	        </div>

	        <div class="row my-5">
	            <div class="col-lg-12">
	                <div class="title-all text-center">
	                    <h1>Category name</h1>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>

	                </div>
	                <div class="title-all text-left">

	                    <div class="row">
	                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
	                            <div class="products-single fix">
	                                <div class="box-img-hover">
	                                    <img src="images/product4.jpg" class="img-fluid" alt="Image">

	                                </div>
	                                <div class="why-text text-center">
	                                    <h4>Chicken Burger</h4>
	                                    <hr class="divider m-0" />
	                                    <p class="text-muted">
	                                        Short description will be here with
	                                        limited text description will be here
	                                        with limited text
	                                    </p>
	                                    <hr class="divider  m-0" />
	                                    <h4> $9.79</h4>
	                                    <a class="btn hvr-hover  text-light" href="#">Add to Cart</a>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
	                            <div class="products-single fix">
	                                <div class="box-img-hover">
	                                    <img src="images/product3.jpg" class="img-fluid" alt="Image">

	                                </div>
	                                <div class="why-text text-center">
	                                    <h4>Chicken Burger</h4>
	                                    <hr class="divider m-0" />
	                                    <p class="text-muted">
	                                        Short description will be here with
	                                        limited text description will be here
	                                        with limited text
	                                    </p>
	                                    <hr class="divider  m-0" />
	                                    <h4> $9.79</h4>
	                                    <a class="btn hvr-hover  text-light" href="#">Add to Cart</a>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
	                            <div class="products-single fix">
	                                <div class="box-img-hover">
	                                    <img src="images/product4.jpg" class="img-fluid" alt="Image">

	                                </div>
	                                <div class="why-text text-center">
	                                    <h4>Chicken Burger</h4>
	                                    <hr class="divider m-0" />
	                                    <p class="text-muted">
	                                        Short description will be here with
	                                        limited text description will be here
	                                        with limited text
	                                    </p>
	                                    <hr class="divider  m-0" />
	                                    <h4> $9.79</h4>
	                                    <a class="btn hvr-hover  text-light" href="#">Add to Cart</a>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
	                            <div class="products-single fix">
	                                <div class="box-img-hover">
	                                    <img src="images/product3.jpg" class="img-fluid" alt="Image">

	                                </div>
	                                <div class="why-text text-center">
	                                    <h4>Chicken Burger</h4>
	                                    <hr class="divider m-0" />
	                                    <p class="text-muted">
	                                        Short description will be here with
	                                        limited text description will be here
	                                        with limited text
	                                    </p>
	                                    <hr class="divider  m-0" />
	                                    <h4> $9.79</h4>
	                                    <a class="btn hvr-hover  text-light" href="#">Add to Cart</a>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
	                            <div class="products-single fix">
	                                <div class="box-img-hover">
	                                    <img src="images/product4.jpg" class="img-fluid" alt="Image">

	                                </div>
	                                <div class="why-text text-center">
	                                    <h4>Chicken Burger</h4>
	                                    <hr class="divider m-0" />
	                                    <p class="text-muted">
	                                        Short description will be here with
	                                        limited text description will be here
	                                        with limited text
	                                    </p>
	                                    <hr class="divider  m-0" />
	                                    <h4> $9.79</h4>
	                                    <a class="btn hvr-hover  text-light" href="#">Add to Cart</a>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
	                            <div class="products-single fix">
	                                <div class="box-img-hover">
	                                    <img src="images/product3.jpg" class="img-fluid" alt="Image">

	                                </div>
	                                <div class="why-text text-center">
	                                    <h4>Chicken Burger</h4>
	                                    <hr class="divider m-0" />
	                                    <p class="text-muted">
	                                        Short description will be here with
	                                        limited text description will be here
	                                        with limited text
	                                    </p>
	                                    <hr class="divider  m-0" />
	                                    <h4> $9.79</h4>
	                                    <a class="btn hvr-hover  text-light" href="#">Add to Cart</a>
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
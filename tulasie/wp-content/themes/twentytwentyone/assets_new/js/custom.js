(function($) {
    "use strict";
	

	$(window).on('load', function() {
		$('.preloader').fadeOut();
		$('#preloader').delay(550).fadeOut('slow');
		$('body').delay(450).css({
			'overflow': 'visible'
		});
	});


	$(window).on('scroll', function() {
		if ($(window).scrollTop() > 50) {
			$('.main-header').addClass('fixed-menu');
		} else {
			$('.main-header').removeClass('fixed-menu');
		}
	});



	$('#slides-shop').superslides({
		inherit_width_from: '.cover-slides',
		inherit_height_from: '.cover-slides',
		play: 5000,
		animation: 'fade',
	});

	$(".cover-slides ul li").append("<div class='overlay-background'></div>");


	$(document).ready(function() {
		$(window).on('scroll', function() {
			if ($(this).scrollTop() > 100) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		$('#back-to-top').click(function() {
			$("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	});

	$('.featured-products-box').owlCarousel({
		loop: true,
		margin: 15,
		dots: false,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		navText: ["<i class='fa fa-arrow-left'></i>", "<i class='fa fa-arrow-right'></i>"],
		responsive: {
			0: {
				items: 1,
				nav: true
			},
			600: {
				items: 3,
				nav: true
			},
			1000: {
				items: 5,
				nav: true,
				loop: true
			}
		}
	});


	$(document).ready(function() {
		$(window).on('scroll', function() {
			if ($(this).scrollTop() > 100) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		$('#back-to-top').click(function() {
			$("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});
		$('.sign-up-btn').click(function() {
			$('#login').modal('toggle');
		});

		// Register

		$('.regis_submit').click(function() {
            // alert();
            var regis_name = $('.regis_name').val();
            var regis_phone = $('.regis_phone').val();
            var regis_email = $('.regis_email').val();
            var regis_pin = $('.regis_pin').val();
            var regis_re_pin = $('.regis_re_pin').val();
            var terms_condition = $('.terms_condition').val();
            if ($.trim(regis_name) == '') {
                $('.regis_name').css('border-color','red');
            }else{
                $('.regis_name').css('border-color','#ced4da');

                if ($.trim(regis_phone) == '') {
                    $('.regis_phone').css('border-color','red');
                }else{
                    $('.regis_phone').css('border-color','#ced4da');

                    if ($.trim(regis_email) == '') {
                        $('.regis_email').css('border-color','red');
                    }else{
                        $('.regis_email').css('border-color','#ced4da');

                        if ($.trim(regis_pin) == '') {
                            $('.regis_pin').css('border-color','red');
                        }else{
                            $('.regis_pin').css('border-color','#ced4da');

                            if ($.trim(regis_re_pin) == '') {
                                $('.regis_pin').css('border-color','red');
                            }else{
                                $('.regis_pin').css('border-color','#ced4da');
                                if (regis_pin == regis_re_pin) {
                                    $('.regiserror_pin').hide();
                                    $('.regis_re_pin').css('margin-bottom','1rem!important');
                                    // $('.submit_regis').trigger('click');
                                    if ($('.terms_condition').prop('checked')==true){ 
								    	$('.regiserror_terms_conditiob').hide();
								        var form_data = new FormData();
								        var other_data = $('.register_form').serializeArray();
										$.each(other_data,function(key,input){
										    form_data.append(input.name,input.value);
										})
										// console.log(form_data);
								  //         alert(form_data);
								        $.ajax({
								            url: 'https://ccpl.ninjaos.com/api/customer/registration', 
								            dataType: 'text',  
								            cache: false,
								            contentType: false,
								            processData: false,
								            data: form_data,
								            type: 'post',
								            success: function(response){
								                  
								            	// console.log(response);
								            	var myArray = JSON.parse(response);
								            	// console.log(myArray);
								            	// console.log(myArray.status);
								            	if (myArray.status == "ok") {
								            		$('.regis_success').show();
								            		$('.regis_error').hide();
								            		$('.regis_success').html(myArray.message);
								            		$('.register_form').trigger("reset");
								            		$('#register').modal('toggle');
								            	}else{
								            		$('.regis_success').hide();
								            		$('.regis_error').show();
								            		$('.regis_error').html(myArray.form_error);
								            	}
								            }
								        });
								    }else{
								    	$('.regiserror_terms_conditiob').show();
								    }
							        
                                }else{
                                    $('.regiserror_pin').show();
                                    $('.regis_re_pin').css('margin-bottom','0rem!important');
                                }
                            }
                        }
                    }
                }
            }
        });

        //  Login

		$('.login_submit').click(function() {
			// alert();
			var login_username = $('.login_username').val();
            var login_password = $('.login_password').val();
            if ($.trim(login_username) == '') {
                $('.login_username').css('border-color','red');
            }else{
            	$('.login_username').css('border-color','#ced4da');

                if ($.trim(login_password) == '') {
	                $('.login_password').css('border-color','red');
	            }else{
	            	$('.login_password').css('border-color','#ced4da');

	            	var form_data = new FormData();
					var other_data = $('.login_form').serializeArray();
					$.each(other_data,function(key,input){
						form_data.append(input.name,input.value);
					})
					console.log(form_data);
					$.ajax({
						url: 'https://ccpl.ninjaos.com/api/customer/login', 
						dataType: 'text',  
						cache: false,
						contentType: false,
						processData: false,
						data: form_data,
						type: 'post',
						success: function(response){
								                  
							// console.log(response);
							var myArray = JSON.parse(response);
							// console.log(myArray);
							// console.log(myArray.status);
							if (myArray.status == "ok") {
								// $('.login_form').trigger("reset");
								// $('.login_success').modal('toggle');
								// $('#login').modal('toggle');
								// sessionStorage.setItem("user_id", myArray.result_set['customer_id']);
								Cookies.set("user_id", myArray.result_set['customer_id'], { expires: 7 });
								$('.user_id').val(myArray.result_set['customer_id']);
								var cart_product_status = Cookies.get("cart_product_value");
								// console.log('cart_product_status = '+cart_product_status);
								if (cart_product_status == 1) {
									var add_product = product;
									var app_id = $('.app_id').val();
									var asset_url = $('.asset_url').val();
									for (var i = 0; i < add_product.length; i++) {
										var product_slug = add_product[i]['product_slug'];
										var product_count = add_product[i]['product_count'];
										var product_id = add_product[i]['product_id'];
										var url = "https://ccpl.ninjaos.com/api/products/products_list?app_id="+app_id+"&product_slug="+product_slug+"&availability=718B1A92-5EBB-4F25-B24D-3067606F67F0";
										$.ajax({
									        url: url,
									        type: 'GET',
									        dataType: 'json', // added data type
									        success: function(response) {
									            console.log(response);
									            if (response.status == "ok") {

									            	var product = response.result_set[0];
									            	if (product['product_thumbnail'] == '') {
									            		var img = asset_url+"images/no-image.png";
									            	}else{
									            		var img = asset_url+""+product['product_thumbnail'];
									            	}
									            	var total = product['product_price'] * product_count;
									            	var formData1 = new FormData;
									            	formData1.append('app_id', app_id);
									            	formData1.append('product_id', product['product_id']);
									            	formData1.append('product_qty', product_count);
									            	formData1.append('availability_id', '718B1A92-5EBB-4F25-B24D-3067606F67F0');
									            	formData1.append('product_name', product['product_name']);
									            	formData1.append('product_total_price', total);
									            	formData1.append('product_unit_price', product['product_price']);
									            	formData1.append('product_remarks', app_id);
									            	formData1.append('product_image', img);
									            	formData1.append('product_sku', product['product_sku']);
									            	formData1.append('product_slug', product_slug);
									            	formData1.append('modifiers', '');
									            	formData1.append('menu_set_component', '');
									            	formData1.append('individual', 'yes');
									            	formData1.append('customer_id', myArray.result_set['customer_id']);
									            	formData1.append('reference_id', '');
									            	formData1.append('product_edit_enable', 'No');
									            	console.log(formData1);
									            	$.ajax({
														url: 'https://ccpl.ninjaos.com/api/cart/insert', 
														dataType: 'text',  
														cache: false,
														contentType: false,
														processData: false,
														data: formData1,
														type: 'post',
														success: function(response){
															var myArray1 = JSON.parse(response);
															console.log('myArray1 = '+myArray1);
															if (myArray1.status == "ok") {
																
																$('.status_cart').val(1);
															}
														}
													});
									            }else{
									            		
									            }
									            
									        }
									    });
									}
									var status_cart = $('.status_cart').val();
									console.log('status_cart = '+status_cart);
									if (status_cart == '1') {
										window.location.href = "http://localhost/balaji/sundaresh/Apptivo%20Technologies/tulasi/index.php/check-out/";
									}
								}else{
									window.location.reload();
								}
								
							}else{
								$('.login_error').show();
								$('.login_error').html(myArray.message);
							}
						}
					});
	            }
            }
		});
		$('.select_delivery_type').click(function() {
			$('#order_now_popup').modal('toggle');
		});
		$('.outlet_li').click(function(e) {
			var id = $(this).attr('data-id');
			var pin = $(this).attr('data-pin');
			var address = $(this).attr('data-address');
			var delivery = $(this).attr('data-delivery');
			var gst = $(this).attr('data-gst');
			var free = $(this).attr('data-free');
			if ($.trim(id) == "") {
		
			}else{
				
				Cookies.set("outlet_id", id, { expires: 7 });
				Cookies.set("postal_code", pin, { expires: 7 });
				Cookies.set("address", address, { expires: 7 });
				Cookies.set("gst", gst, { expires: 7 });
				Cookies.set("delivery", delivery, { expires: 7 });
				Cookies.set("free", free, { expires: 7 });
				$('.outlet_id').val(id);
				$('.outlet_id_pin').val(pin);
				$('.outlet_id_address').val(address);
				
				$('#delivery2').modal('toggle');
				$('#outlets').modal('toggle');
			}
		});
		$('.pincode_check').click(function() {
			var outlet_id = Cookies.get("outlet_id");
			var delivery_pin = $('.delivery_pin').val();
			var app_id = $('.app_id').val();
			var url = "https://ccpl.ninjaos.com/apiv2/outlets/findOutletZone?app_id="+app_id+"&availability_id=634E6FA8-8DAF-4046-A494-FFC1FCF8BD11&postal_code="+delivery_pin+"&outlet_id="+outlet_id;
			// console.log("url = "+url);
			$.ajax({
		        url: url,
		        type: 'GET',
		        dataType: 'json', // added data type
		        success: function(response) {
		            console.log(response);
		            if (response.status == "error") {
		            	$('.error_postal_code').css('display','block');
		            }else{
		            		$('#delivery2').modal('toggle');
							$('#delivery1').modal('toggle');
							$('.error_postal_code').css('display','none');
							var pin = Cookies.get("postal_code");
							let address1 = (response.result_set.postal_code_information.zip_sname);
							let pin1  = (response.result_set.postal_code_information.zip_buno);
							let zip_addtype = response.result_set.postal_code_information.zip_addtype
							let zip_code    = response.result_set.postal_code_information.zip_code
							var address = Cookies.get("address");
							$('.delivery1_pin').val(delivery_pin);
							$('.delivery1_address').html(pin1+","+address1+","+zip_addtype+","+zip_code);
							var today = new Date();
							var dayIndex = today.getDay();
						    // console.log(dayIndex, 'dayIndex');
						    var day_position = [
							    'sun',
							    'mon',
							    'tue',
							    'wed',
							    'thu',
							    'fri',
							    'sat'
							];
							var day = day_position[dayIndex];
						    // console.log(day, 'day');
							var outlet_id = Cookies.get("outlet_id");
							var app_id = $('.app_id').val();
						    var url = "https://ccpl.ninjaos.com/apiv2/settings/availableDatesAdvanced/?app_id="+app_id+"&availability_id=634E6FA8-8DAF-4046-A494-FFC1FCF8BD11&outletId="+outlet_id+"&tatTime=15";
							// console.log("url = "+url);
							$.ajax({
						        url: url,
						        type: 'GET',
						        dataType: 'json', // added data type
						        success: function(response) {
						            console.log(response);
						            if (response.status == "success") {
						            	var time = response.result_set.currentdayslot_data;
						            	console.log(time);
						            	console.log(time[day]);
						            	var time_slot = [];
						            	for (var i = time[day].length - 1; i >= 0; i--) {
						            		time_slot.push('<option value="'+time[day][i]+'">'+time[day][i]+'</option>');
						            	}
						            	$('.delivery_time').children().remove().end()
						            	$('.delivery_date').val(new Date().toISOString().slice(0, 10));
						            	$('.delivery_time').append(time_slot);
										Cookies.set("delivery_date", today, { expires: 7 });
						            }else{
						            		
						            }
						            
						        }
						    });
		            }
		            
		        }
		    });
		});
		$('.delivery_date').change(function() {
		    var date = $(this).val();
		    // console.log(date, 'change');
		    var today = new Date(date);
			var dayIndex = today.getDay();
		    // console.log(dayIndex, 'dayIndex');
		    var day_position = [
			    'sun',
			    'mon',
			    'tue',
			    'wed',
			    'thu',
			    'fri',
			    'sat'
			];
			var day = day_position[dayIndex];
		    // console.log(day, 'day');
			var outlet_id = Cookies.get("outlet_id");
			var app_id = $('.app_id').val();
		    var url = "https://ccpl.ninjaos.com/apiv2/settings/availableDatesAdvanced/?app_id="+app_id+"&availability_id=634E6FA8-8DAF-4046-A494-FFC1FCF8BD11&outletId="+outlet_id+"&tatTime=15";
			// console.log("url = "+url);
			$.ajax({
		        url: url,
		        type: 'GET',
		        dataType: 'json', // added data type
		        success: function(response) {
		            console.log(response);
		            if (response.status == "success") {
		            	var time = response.result_set.currentdayslot_data;
		            	console.log(time);
		            	console.log(time[day]);
		            	var time_slot = [];
		            	for (var i = time[day].length - 1; i >= 0; i--) {
		            		time_slot.push('<option value="'+time[day][i]+'">'+time[day][i]+'</option>');
		            	}
						$('.delivery_time').children().remove().end()
		            	$('.delivery_time').append( time_slot );
						Cookies.set("delivery_date", date, { expires: 7 });
		            }else{
		            		
		            }
		            
		        }
		    });

		});
		$('.delivery_time').change(function() {
			var time = $(this).val();
			Cookies.set("delivery_time", time, { expires: 7 });
		});
		$('.pincode_check_back').click(function() {
			$('#delivery2').modal('toggle');
			$('#outlets').modal('toggle');
		});
		$('.delivery1_back').click(function() {
			$('#delivery1').modal('toggle');
			$('#delivery2').modal('toggle');
		});
		$('.delivery1_nxt').click(function() {
			window.location.href = "http://localhost/balaji/sundaresh/Apptivo%20Technologies/tulasi/index.php/menu/";
		});
		$('.nav-down-click').click(function() {
			$('.menu-page-dropdown').toggle();
		});
		$('.side-menu').click(function() {
			var cart_product_value = product;
			console.log(cart_product_value);
			var outlet_id = Cookies.get("outlet_id");
			var app_id = $('.app_id').val();
			var asset_url = $('.asset_url').val();
			            var total = 0;
			            	$('.cart_value').html('');
			for (var i = 0; i < cart_product_value.length; i++) {
					var product_slug = cart_product_value[i]['product_slug'];
					var product_count = cart_product_value[i]['product_count'];
					var product_id = cart_product_value[i]['product_id'];
				var url = "https://ccpl.ninjaos.com/api/products/products_list?app_id="+app_id+"&product_slug="+product_slug+"&availability=718B1A92-5EBB-4F25-B24D-3067606F67F0";
				// console.log("url = "+url);
				$.ajax({
			        url: url,
			        type: 'GET',
			        dataType: 'json', // added data type
			        success: function(response) {
			            console.log(response);
			            if (response.status == "ok") {
			            	var product = response.result_set[0];
			            	if (product['product_thumbnail'] == '') {
			            		var img = asset_url+"images/no-image.png";
			            	}else{
			            		var img = asset_url+""+product['product_thumbnail'];
			            	}
			            	var product_value = '<tr><td class="thumbnail-img"><div class="media"><img class="img-fluid" src="'+img+'" alt="" width="100"><div class="media-body ml-3"><div class="d-flex justify-content-between"><div><h3 class="m-0 p-0 font-weight-bold text-dark">'+product['product_name']+'</h3></div></div></div></div></td><td class="" style="vertical-align: top;"><div class="d-flex justify-content-between"><h3 class="text-right w-100 mr-2">$'+product['product_price']+'</h3><a href="#"><i class="fa fa-times text-dark"></i></a></div><div class="input-group"><a href="javascript:void(0)" class="btn btn-light border" style="margin-right: 5px;">-</a><span class="cart_value'+i+'">'+product_count+'</span><a href="javascript:void(0)" class="btn btn-light border" style="margin-left: 5px;">+</a></div></td></tr>';
			            	$('.cart_value').append(product_value);
			            	var product_price = product['product_price'] * product_count;
			            	total = +total + +product_price;
			            	console.log('total = '+total);
							$('.sub_total').html(total);
							// Cookies.set("delivery_date", date, { expires: 7 });
			            }else{
			            		
			            }
			            
			        }
			    });
			}
			var delivery = 60;
			var min = 60;
			var total = $('.sub_total').html();
			// if (total >= min) {
			// 	if (total >= delivery) {
			            	console.log('total1 = '+total);
					var min_delivery = delivery - total;
					$('.free_delivery').html(min_delivery);
					var min_delivery_bar = min_delivery * 100 / 100;
					$('.free-delivery-bar').css('width',min_delivery_bar+'%');
					$('.free-delivery-bar').attr('aria-valuenow',min_delivery_bar);
					$('.free-delivery-bar').html(min_delivery_bar+'%');

			// 	}
			// }else{
				var min_order = min - total;
				$('.min_order').html(min_order);
				var min_order_bar = min_order * 100 / 100;
				$('.min-order-bar').css('width',min_order_bar+'%');
				$('.min-order-bar').attr('aria-valuenow',min_order_bar);
				$('.min-order-bar').html(min_order_bar+'%');
			// }
		 
		});
		$('.check_order_status').click(function() {
			var total = $('.sub_total').html();
			console.log('sub_total = '+total);
			var delivery = 60;
			var min = 60;
			if (total >= min) {
				console.log('min = S');
				if (total >= delivery) {
					console.log('delivery = S');
					var user_id = $('.user_id').val();
					if (user_id != 0 ) {
						window.location.href = "http://localhost/balaji/sundaresh/Apptivo%20Technologies/tulasi/index.php/check-out/";
					}else{

						Cookies.set("cart_product_value", 1, { expires: 7 });
						$('#login').modal('toggle');
					}

				}else{
						console.log('delivery = F');
					var min_delivery = delivery - total;
					$('.free_delivery').html(min_delivery);
					var min_delivery_bar = min_delivery/100;
					$('.free-delivery-bar').css('width',min_delivery_bar);
					$('.free-delivery-bar').attr('aria-valuenow',min_delivery_bar);
					$('.free-delivery-bar').html(min_delivery_bar+'%');
				}
			}else{
				console.log('min = F');
				var min_order = min - total;
				// alert("$"+min_order+" more to min order amount");
				$('.min_order').html(min_order);
				var min_order_bar = min_order/100;
				$('.min-order-bar').css('width',min_order_bar);
				$('.min-order-bar').attr('aria-valuenow',min_order_bar);
				$('.min-order-bar').html(min_order_bar+'%');
			}
		});

		$('#account4-tab').click(function(){
			$('.pomo_div').html('');
			var user_id = $('.user_id').val();
			// alert('user_id = '+user_id);
			var app_id = $('.app_id').val();
			var url = "https://ccpl.ninjaos.com/api/promotion_api_v2/promotionlistWhitoutuniqcode?app_id="+app_id+"&customer_id="+user_id;
				// console.log("url = "+url);
				$.ajax({
			        url: url,
			        type: 'GET',
			        dataType: 'json', // added data type
			        success: function(response) {
			            console.log(response);
			            if (response.status == "ok") {
			            	var results = response.result_set.my_promo;
							var asset_url = $('.asset_url').val();
			            		console.log('results.length = '+results.length);

			            	for (var i = 0; i < results.length; i++) {
				            	if (!results[i]['promotion_image']) {
				            		var img = asset_url+"images/no-image.png";
				            	}else{
				            		var img = response.common['promo_image_source']+results[i]['promotion_image'];
				            	}
				            	if (results[i]['promotion_type'] == 'percentage') {
				            		var type = '%';
				            		var price = results[i]['promotion_percentage'];
				            	}else{
				            		var type = '$';
				            		var price = results[i]['promotion_max_amt'];
				            	}
			            		console.log('results = '+results[i]['promotion_type'] );
			            		var content = '<div class="col-lg-6"><div class="card shadow"><div class="d-lg-flex justify-content-betweeen"><div><img style="width: 200px;" src="'+img+'" /></div><div class="text-center p-3 w-100"><h4>Promotion Name</h4><h3 class="mb-0 p-0 font-weight-bold"><sup>'+type+'</sup> '+price+' OFF</h3><p class="text-muted p-0">Valid till '+results[i]['promotion_end_date']+'</p><h4 class="font-weight-bold">No - '+results[i]['promo_code']+'</h4><div class="row"><div class="col-lg-6 mb-2" style="padding-right: 10px;padding-left: 0px;"><a href="javascript:void(0)"class="btn btn-block btn-outline-secondary" data-toggle="modal" data-target="#propotion'+i+'">VIEW</a></div><div class="col-lg-6  mb-2" style="padding-right: 0px;padding-left: 0px;"><a href="javascript:void(0)"class="btn btn-block btn-secondary">REDEEM</a></div></div></div></div></div></div><div class="modal fade" id="propotion'+i+'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" style="min-width: 700px;"><div class="modal-content" style="padding: 10px;"><div class="modal-body p-0 bg-light"><button type="button" class="btn-close float-right" data-dismiss="modal" aria-label="Close">&times;</button><br><center><img style="width: 200px;" src="'+img+'" /></center><br><h3 style="text-align: center;font-weight: 600;">'+results[i]['promo_code']+'</h3><br><p class="sub-title">'+results[i]['promo_desc']+'</p><br></div></div></div></div>';
			            		$('.pomo_div').append(content);
			            	}
			            }else{
			            		console.log('else');
			            		
			            }
			            
			        }
			    });
		})

		$('#account2-tab').click(function(){
			$('.order_div').html('');
			var user_id = $('.user_id').val();
			// alert('user_id = '+user_id);
			var app_id = $('.app_id').val();
					$('.order_div').css('display','flex');
					$('.past_order_div').hide();
					$('.current_order').addClass('active');
					$('.past_order').removeClass('active');
			var url = "https://ccpl.ninjaos.com/api/reports/order_history?order_status=P&app_id="+app_id+"&customer_id="+user_id+"&limit=10&except_availability=yes";
				// console.log("url = "+url);
				$.ajax({
			        url: url,
			        type: 'GET',
			        dataType: 'json', // added data type
			        success: function(response) {
			            console.log(response);
			            if (response.status == "ok") {
			            	var results = response.result_set;
							var asset_url = $('.asset_url').val();
			            		console.log('results.length = '+results.length);

			            	for (var i = 0; i < results.length; i++) {
				            	
			            		var content = '<div class="col-md-6"><div class="card shadow"><div class="card-header bg-dark p-0"><div class="d-flex justify-content-between"><div class="text-light p-2 bg-dark">Order No - '+results[i]["order_primary_id"]+'</div><div class="greenpend p-2 text-light">PROCESSING...</div></div></div><div class="card-body"><p class="text-center text-dark font-weight-bold">Order placed at : '+results[i]["order_date"]+' <br />Pay by : '+results[i]["order_method_name"]+'</p><div class="d-flex align-items-center my-3"><img src="'+asset_url+'images/delivery.png" width="39" style="max-width:39px;"><hr class="my-1 d-flex w-100 mx-3"><img src="'+asset_url+'images/location.png" width="13" style="max-width:13px;"></div><div class="d-flex justify-content-between"><div class="w-50"><h4 class="text-dark font-weight-bold m-0 p-0">Order Handeling By</h4><p class="text-dark">'+results[i]["outlet_name"]+'<br>'+results[i]["order_method_name"]+' <br>'+results[i]["outlet_address_line1"]+'<br>'+results[i]["outlet_address_line2"]+'<br>'+results[i]["outlet_postal_code"]+'</p></div><div class="w-50 text-right"><h4 class="text-dark font-weight-bold m-0 p-0">Delivery Location</h4><p class="text-dark">'+results[i]["order_customer_billing_address_line1"]+' <br>'+results[i]["order_customer_billing_address_line2"]+' <br>'+results[i]["order_customer_billing_postal_code"]+'</p></div></div><div class="d-flex justify-content-between mt-3 mb-3"><div class="w-50"><h3 class="text-dark font-weight-bold m-0 p-0" style="font-size: 20px;">Delivery Date</h3><h2 class="text-dark display-5 font-weight-bold">'+results[i]["order_date"]+'</h2></div><div class="w-50 text-right"><h4 class="text-dark font-weight-bold m-0 p-0">Event Time</h4><h2 class="text-dark display-5 font-weight-bold" style="font-size: 20px;">'+results[i]["order_pickup_time"]+'</h2></div></div></div><div class="card-header bg-dark p-0"><div class="d-flex justify-content-between"><div class="text-light p-2 px-3 bg-dark h3">Total</div><div class="text-light p-2 px-3 bg-dark h3"><sup>$</sup>&nbsp;'+results[i]["order_total_amount"]+'</div></div></div><div class="card-body"><div class="row"><div class="col-sm-6"><a href="javascript:void(0)"class="btn btn-block btn-outline-secondary">PRINT INVOICE</a></div><div class="col-sm-6"><a href="javascript:void(0)" class="btn btn-block btn-secondary"  data-toggle="modal" data-target="#view_receipt'+i+'">VIEW RECEIPT</a></div></div></div></div></div><div class="modal fade" id="view_receipt'+i+'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" style="min-width: 700px;"><div class="modal-content"><div class="modal-body p-0 bg-light"><button type="button" class="btn-close float-right" data-dismiss="modal"aria-label="Close">&times;</button><br><div class="card shadow"><div class="card-header bg-dark p-0"><div class="d-block justify-content-between"><div class="text-light p-2 bg-dark" style="margin-bottom: 10px;font-size: 36px;font-weight: 700;text-transform: uppercase;">Order No - '+results[i]["order_primary_id"]+'</div></div></div><div class="card-body"><p class="text-center text-dark font-weight-bold">Order placed at : '+results[i]["order_date"]+' <br />Pay by : '+results[i]["order_method_name"]+'</p><div class="d-flex align-items-center my-3"><img src="'+asset_url+'images/delivery.png" width="39" style="max-width:39px;"><hr class="my-1 d-flex w-100 mx-3"><img src="'+asset_url+'images/location.png" width="13" style="max-width:13px;"></div><h2 style="color: #fff;background: #060203;font-size: 17px;padding: 13px 10px;text-transform: uppercase;margin-bottom: 0;font-weight: 700;">YOUR ORDER DETAILS</h2><div class="d-flex justify-content-between"><div class="w-50"><h4 class="text-dark font-weight-bold m-0 p-0">Order Handeling By</h4><p class="text-dark">'+results[i]["outlet_name"]+'<br>'+results[i]["order_method_name"]+' <br>'+results[i]["outlet_address_line1"]+'<br>'+results[i]["outlet_address_line2"]+'<br>'+results[i]["outlet_postal_code"]+'</p></div><div class="w-50 text-right"><h4 class="text-dark font-weight-bold m-0 p-0">Delivery Location</h4><p class="text-dark">'+results[i]["order_customer_billing_address_line1"]+' <br>'+results[i]["order_customer_billing_address_line2"]+' <br>'+results[i]["order_customer_billing_postal_code"]+'</p></div></div><div class="d-flex justify-content-between mt-3 mb-3"><div class="w-50"><h3 class="text-dark font-weight-bold m-0 p-0" style="font-size: 20px;">Delivery Date</h3><h2 class="text-dark display-5 font-weight-bold">'+results[i]["order_date"]+'</h2></div><div class="w-50 text-right"><h4 class="text-dark font-weight-bold m-0 p-0">Event Time</h4><h2 class="text-dark display-5 font-weight-bold" style="font-size: 20px;">'+results[i]["order_pickup_time"]+'</h2></div></div><hr><div class="d-flex justify-content-between"><div class="text-light p-2 px-3 bg-dark h3"></div><div class="text-light p-2 px-3 bg-dark h3"><sup>$</sup>&nbsp;'+results[i]["order_total_amount"]+'</div></div></div><div class="card-header bg-dark p-0"><div class="d-flex justify-content-between"><div class="text-light p-2 px-3 bg-dark h3">Total</div><div class="text-light p-2 px-3 bg-dark h3"><sup>$</sup>&nbsp;'+results[i]["order_total_amount"]+'</div></div></div></div></div></div></div></div></div>';
			            		$('.order_div').append(content);
			            	}
			            }else{
			            		console.log('else');
			            		
			            }
			            
			        }
			    });
		})

		$('.current_order').click(function(){
			$('.order_div').html('');
			var user_id = $('.user_id').val();
			// alert('user_id = '+user_id);
			var app_id = $('.app_id').val();
					$('.order_div').css('display','flex');
					$('.past_order_div').hide();
					$('.current_order').addClass('active');
					$('.past_order').removeClass('active');
			var url = "https://ccpl.ninjaos.com/api/reports/order_history?order_status=P&app_id="+app_id+"&customer_id="+user_id+"&limit=10&except_availability=yes";
				// console.log("url = "+url);
				$.ajax({
			        url: url,
			        type: 'GET',
			        dataType: 'json', // added data type
			        success: function(response) {
			            console.log(response);
			            if (response.status == "ok") {
			            	var results = response.result_set;
							var asset_url = $('.asset_url').val();
			            		console.log('results.length = '+results.length);

			            	for (var i = 0; i < results.length; i++) {
				            	
			            		var content = '<div class="col-md-6"><div class="card shadow"><div class="card-header bg-dark p-0"><div class="d-flex justify-content-between"><div class="text-light p-2 bg-dark">Order No - '+results[i]["order_primary_id"]+'</div><div class="greenpend p-2 text-light">PROCESSING...</div></div></div><div class="card-body"><p class="text-center text-dark font-weight-bold">Order placed at : '+results[i]["order_date"]+' <br />Pay by : '+results[i]["order_method_name"]+'</p><div class="d-flex align-items-center my-3"><img src="'+asset_url+'images/delivery.png" width="39" style="max-width:39px;"><hr class="my-1 d-flex w-100 mx-3"><img src="'+asset_url+'images/location.png" width="13" style="max-width:13px;"></div><div class="d-flex justify-content-between"><div class="w-50"><h4 class="text-dark font-weight-bold m-0 p-0">Order Handeling By</h4><p class="text-dark">'+results[i]["outlet_name"]+'<br>'+results[i]["order_method_name"]+' <br>'+results[i]["outlet_address_line1"]+'<br>'+results[i]["outlet_address_line2"]+'<br>'+results[i]["outlet_postal_code"]+'</p></div><div class="w-50 text-right"><h4 class="text-dark font-weight-bold m-0 p-0">Delivery Location</h4><p class="text-dark">'+results[i]["order_customer_billing_address_line1"]+' <br>'+results[i]["order_customer_billing_address_line2"]+' <br>'+results[i]["order_customer_billing_postal_code"]+'</p></div></div><div class="d-flex justify-content-between mt-3 mb-3"><div class="w-50"><h3 class="text-dark font-weight-bold m-0 p-0" style="font-size: 20px;">Delivery Date</h3><h2 class="text-dark display-5 font-weight-bold">'+results[i]["order_date"]+'</h2></div><div class="w-50 text-right"><h4 class="text-dark font-weight-bold m-0 p-0">Event Time</h4><h2 class="text-dark display-5 font-weight-bold" style="font-size: 20px;">'+results[i]["order_pickup_time"]+'</h2></div></div></div><div class="card-header bg-dark p-0"><div class="d-flex justify-content-between"><div class="text-light p-2 px-3 bg-dark h3">Total</div><div class="text-light p-2 px-3 bg-dark h3"><sup>$</sup>&nbsp;'+results[i]["order_total_amount"]+'</div></div></div><div class="card-body"><div class="row"><div class="col-sm-6"><a href="javascript:void(0)"class="btn btn-block btn-outline-secondary">PRINT INVOICE</a></div><div class="col-sm-6"><a href="javascript:void(0)" class="btn btn-block btn-secondary"  data-toggle="modal" data-target="#view_receipt'+i+'">VIEW RECEIPT</a></div></div></div></div></div><div class="modal fade" id="view_receipt'+i+'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" style="min-width: 700px;"><div class="modal-content"><div class="modal-body p-0 bg-light"><button type="button" class="btn-close float-right" data-dismiss="modal"aria-label="Close">&times;</button><br><div class="card shadow"><div class="card-header bg-dark p-0"><div class="d-block justify-content-between"><div class="text-light p-2 bg-dark" style="margin-bottom: 10px;font-size: 36px;font-weight: 700;text-transform: uppercase;">Order No - '+results[i]["order_primary_id"]+'</div></div></div><div class="card-body"><p class="text-center text-dark font-weight-bold">Order placed at : '+results[i]["order_date"]+' <br />Pay by : '+results[i]["order_method_name"]+'</p><div class="d-flex align-items-center my-3"><img src="'+asset_url+'images/delivery.png" width="39" style="max-width:39px;"><hr class="my-1 d-flex w-100 mx-3"><img src="'+asset_url+'images/location.png" width="13" style="max-width:13px;"></div><h2 style="color: #fff;background: #060203;font-size: 17px;padding: 13px 10px;text-transform: uppercase;margin-bottom: 0;font-weight: 700;">YOUR ORDER DETAILS</h2><div class="d-flex justify-content-between"><div class="w-50"><h4 class="text-dark font-weight-bold m-0 p-0">Order Handeling By</h4><p class="text-dark">'+results[i]["outlet_name"]+'<br>'+results[i]["order_method_name"]+' <br>'+results[i]["outlet_address_line1"]+'<br>'+results[i]["outlet_address_line2"]+'<br>'+results[i]["outlet_postal_code"]+'</p></div><div class="w-50 text-right"><h4 class="text-dark font-weight-bold m-0 p-0">Delivery Location</h4><p class="text-dark">'+results[i]["order_customer_billing_address_line1"]+' <br>'+results[i]["order_customer_billing_address_line2"]+' <br>'+results[i]["order_customer_billing_postal_code"]+'</p></div></div><div class="d-flex justify-content-between mt-3 mb-3"><div class="w-50"><h3 class="text-dark font-weight-bold m-0 p-0" style="font-size: 20px;">Delivery Date</h3><h2 class="text-dark display-5 font-weight-bold">'+results[i]["order_date"]+'</h2></div><div class="w-50 text-right"><h4 class="text-dark font-weight-bold m-0 p-0">Event Time</h4><h2 class="text-dark display-5 font-weight-bold" style="font-size: 20px;">'+results[i]["order_pickup_time"]+'</h2></div></div><hr><div class="d-flex justify-content-between"><div class="text-light p-2 px-3 bg-dark h3"></div><div class="text-light p-2 px-3 bg-dark h3"><sup>$</sup>&nbsp;'+results[i]["order_total_amount"]+'</div></div></div><div class="card-header bg-dark p-0"><div class="d-flex justify-content-between"><div class="text-light p-2 px-3 bg-dark h3">Total</div><div class="text-light p-2 px-3 bg-dark h3"><sup>$</sup>&nbsp;'+results[i]["order_total_amount"]+'</div></div></div></div></div></div></div></div></div>';
			            		$('.order_div').append(content);
			            	}
			            }else{
			            		console.log('else');
			            		
			            }
			            
			        }
			    });
		})
		$('.past_order').click(function(){
					$('.past_order_div').html('');
					var user_id = $('.user_id').val();
					// alert('user_id = '+user_id);
					var app_id = $('.app_id').val();
					$('.order_div').hide();
					$('.past_order_div').css('display','flex');
					$('.current_order').removeClass('active');
					$('.past_order').addClass('active');
					var url = "https://ccpl.ninjaos.com/api/reports/order_history?order_status=C&app_id="+app_id+"&customer_id="+user_id+"&limit=10&except_availability=yes";
						// console.log("url = "+url);
						$.ajax({
					        url: url,
					        type: 'GET',
					        dataType: 'json', // added data type
					        success: function(response) {
					            // console.log(response);
					            if (response.status == "ok") {
					            	var results = response.result_set;
									var asset_url = $('.asset_url').val();
					            		console.log('results.length = '+results.length);

					            	for (var i = 0; i < results.length; i++) {
						            	
					            		var content = '<div class="col-md-6"><div class="card shadow"><div class="card-header bg-dark p-0"><div class="d-flex justify-content-between"><div class="text-light p-2 bg-dark">Order No - '+results[i]["order_primary_id"]+'</div><div class="greenpend p-2 text-light">Completed</div></div></div><div class="card-body"><p class="text-center text-dark font-weight-bold">Order placed at : '+results[i]["order_date"]+' <br />Pay by : '+results[i]["order_method_name"]+'</p><div class="d-flex align-items-center my-3"><img src="'+asset_url+'images/delivery.png" width="39" style="max-width:39px;"><hr class="my-1 d-flex w-100 mx-3"><img src="'+asset_url+'images/location.png" width="13" style="max-width:13px;"></div><div class="d-flex justify-content-between"><div class="w-50"><h4 class="text-dark font-weight-bold m-0 p-0">Order Handeling By</h4><p class="text-dark">'+results[i]["outlet_name"]+'<br>'+results[i]["order_method_name"]+' <br>'+results[i]["outlet_address_line1"]+'<br>'+results[i]["outlet_address_line2"]+'<br>'+results[i]["outlet_postal_code"]+'</p></div><div class="w-50 text-right"><h4 class="text-dark font-weight-bold m-0 p-0">Delivery Location</h4><p class="text-dark">'+results[i]["order_customer_billing_address_line1"]+' <br>'+results[i]["order_customer_billing_address_line2"]+' <br>'+results[i]["order_customer_billing_postal_code"]+'</p></div></div><div class="d-flex justify-content-between mt-3 mb-3"><div class="w-50"><h3 class="text-dark font-weight-bold m-0 p-0" style="font-size: 20px;">Delivery Date</h3><h2 class="text-dark display-5 font-weight-bold">'+results[i]["order_date"]+'</h2></div><div class="w-50 text-right"><h4 class="text-dark font-weight-bold m-0 p-0">Event Time</h4><h2 class="text-dark display-5 font-weight-bold" style="font-size: 20px;">'+results[i]["order_pickup_time"]+'</h2></div></div></div><div class="card-header bg-dark p-0"><div class="d-flex justify-content-between"><div class="text-light p-2 px-3 bg-dark h3">Total</div><div class="text-light p-2 px-3 bg-dark h3"><sup>$</sup>&nbsp;'+results[i]["order_total_amount"]+'</div></div></div><div class="card-body"><div class="row"><div class="col-sm-6"><a href="javascript:void(0)"class="btn btn-block btn-outline-secondary">PRINT INVOICE</a></div><div class="col-sm-6"><a href="javascript:void(0)" class="btn btn-block btn-secondary"  data-toggle="modal" data-target="#view_receipt'+i+'">VIEW RECEIPT</a></div></div></div></div></div><div class="modal fade" id="view_receipt'+i+'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" style="min-width: 700px;"><div class="modal-content"><div class="modal-body p-0 bg-light"><button type="button" class="btn-close float-right" data-dismiss="modal"aria-label="Close">&times;</button><br><div class="card shadow"><div class="card-header bg-dark p-0"><div class="d-block justify-content-between"><div class="text-light p-2 bg-dark" style="margin-bottom: 10px;font-size: 36px;font-weight: 700;text-transform: uppercase;">Order No - '+results[i]["order_primary_id"]+'</div></div></div><div class="card-body"><p class="text-center text-dark font-weight-bold">Order placed at : '+results[i]["order_date"]+' <br />Pay by : '+results[i]["order_method_name"]+'</p><div class="d-flex align-items-center my-3"><img src="'+asset_url+'images/delivery.png" width="39" style="max-width:39px;"><hr class="my-1 d-flex w-100 mx-3"><img src="'+asset_url+'images/location.png" width="13" style="max-width:13px;"></div><h2 style="color: #fff;background: #060203;font-size: 17px;padding: 13px 10px;text-transform: uppercase;margin-bottom: 0;font-weight: 700;">YOUR ORDER DETAILS</h2><div class="d-flex justify-content-between"><div class="w-50"><h4 class="text-dark font-weight-bold m-0 p-0">Order Handeling By</h4><p class="text-dark">'+results[i]["outlet_name"]+'<br>'+results[i]["order_method_name"]+' <br>'+results[i]["outlet_address_line1"]+'<br>'+results[i]["outlet_address_line2"]+'<br>'+results[i]["outlet_postal_code"]+'</p></div><div class="w-50 text-right"><h4 class="text-dark font-weight-bold m-0 p-0">Delivery Location</h4><p class="text-dark">'+results[i]["order_customer_billing_address_line1"]+' <br>'+results[i]["order_customer_billing_address_line2"]+' <br>'+results[i]["order_customer_billing_postal_code"]+'</p></div></div><div class="d-flex justify-content-between mt-3 mb-3"><div class="w-50"><h3 class="text-dark font-weight-bold m-0 p-0" style="font-size: 20px;">Delivery Date</h3><h2 class="text-dark display-5 font-weight-bold">'+results[i]["order_date"]+'</h2></div><div class="w-50 text-right"><h4 class="text-dark font-weight-bold m-0 p-0">Event Time</h4><h2 class="text-dark display-5 font-weight-bold" style="font-size: 20px;">'+results[i]["order_pickup_time"]+'</h2></div></div><hr><div class="d-flex justify-content-between"><div class="text-light p-2 px-3 bg-dark h3"></div><div class="text-light p-2 px-3 bg-dark h3"><sup>$</sup>&nbsp;'+results[i]["order_total_amount"]+'</div></div></div><div class="card-header bg-dark p-0"><div class="d-flex justify-content-between"><div class="text-light p-2 px-3 bg-dark h3">Total</div><div class="text-light p-2 px-3 bg-dark h3"><sup>$</sup>&nbsp;'+results[i]["order_total_amount"]+'</div></div></div></div></div></div></div></div></div>';
					            		$('.past_order_div').append(content);
					            	}
					            }else{
					            		$('.past_order_div').append('No order Found');
					            		
					            }
					            
					        }
					    });
				})

		$('#account3-tab').click(function(){
			// alert();
			$('.rewards_div').html('');
			var user_id = $('.user_id').val();
			// alert('user_id = '+user_id);
			var app_id = $('.app_id').val();
			var url = "https://ccpl.ninjaos.com/api/loyalty/customer_earned_rewardpoint_histroyv1/?app_id="+app_id+"&customer_id="+user_id+"&limit=10";
				// console.log("url = "+url);
				$.ajax({
			        url: url,
			        type: 'GET',
			        dataType: 'json', // added data type
			        success: function(response) {
			            console.log(response);
			            if (response.status == "ok") {
			            	var results = response.result_set;
							var asset_url = $('.asset_url').val();
			            		console.log('results.length = '+results.length);
			            	var reward_points = 0;
			            	for (var i = 0; i < results.length; i++) {
				            	reward_points = +reward_points + +results[i]['reward_points'];
			            		// var content = '<div class="col-md-6"><div class="card shadow"><div class="card-header bg-dark p-0"><div class="d-flex justify-content-between"><div class="text-light p-2 bg-dark">Order No - '+results[i]["order_primary_id"]+'</div><div class="greenpend p-2 text-light">PROCESSING...</div></div></div><div class="card-body"><p class="text-center text-dark font-weight-bold">Order placed at : '+results[i]["order_date"]+' <br />Pay by : '+results[i]["order_method_name"]+'</p><div class="d-flex align-items-center my-3"><img src="'+asset_url+'images/delivery.png" width="39" style="max-width:39px;"><hr class="my-1 d-flex w-100 mx-3"><img src="'+asset_url+'images/location.png" width="13" style="max-width:13px;"></div><div class="d-flex justify-content-between"><div class="w-50"><h4 class="text-dark font-weight-bold m-0 p-0">Order Handeling By</h4><p class="text-dark">'+results[i]["outlet_name"]+'<br>'+results[i]["order_method_name"]+' <br>'+results[i]["outlet_address_line1"]+'<br>'+results[i]["outlet_address_line2"]+'<br>'+results[i]["outlet_postal_code"]+'</p></div><div class="w-50 text-right"><h4 class="text-dark font-weight-bold m-0 p-0">Delivery Location</h4><p class="text-dark">'+results[i]["order_customer_billing_address_line1"]+' <br>'+results[i]["order_customer_billing_address_line2"]+' <br>'+results[i]["order_customer_billing_postal_code"]+'</p></div></div><div class="d-flex justify-content-between mt-3 mb-3"><div class="w-50"><h3 class="text-dark font-weight-bold m-0 p-0" style="font-size: 20px;">Delivery Date</h3><h2 class="text-dark display-5 font-weight-bold">'+results[i]["order_date"]+'</h2></div><div class="w-50 text-right"><h4 class="text-dark font-weight-bold m-0 p-0">Event Time</h4><h2 class="text-dark display-5 font-weight-bold" style="font-size: 20px;">'+results[i]["order_pickup_time"]+'</h2></div></div></div><div class="card-header bg-dark p-0"><div class="d-flex justify-content-between"><div class="text-light p-2 px-3 bg-dark h3">Total</div><div class="text-light p-2 px-3 bg-dark h3"><sup>$</sup>&nbsp;'+results[i]["order_total_amount"]+'</div></div></div><div class="card-body"><div class="row"><div class="col-sm-6"><a href="javascript:void(0)"class="btn btn-block btn-outline-secondary">PRINT INVOICE</a></div><div class="col-sm-6"><a href="javascript:void(0)" class="btn btn-block btn-secondary"  data-toggle="modal" data-target="#view_receipt'+i+'">VIEW RECEIPT</a></div></div></div></div></div><div class="modal fade" id="view_receipt'+i+'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" style="min-width: 700px;"><div class="modal-content"><div class="modal-body p-0 bg-light"><button type="button" class="btn-close float-right" data-dismiss="modal"aria-label="Close">&times;</button><br><div class="card shadow"><div class="card-header bg-dark p-0"><div class="d-block justify-content-between"><div class="text-light p-2 bg-dark" style="margin-bottom: 10px;font-size: 36px;font-weight: 700;text-transform: uppercase;">Order No - '+results[i]["order_primary_id"]+'</div></div></div><div class="card-body"><p class="text-center text-dark font-weight-bold">Order placed at : '+results[i]["order_date"]+' <br />Pay by : '+results[i]["order_method_name"]+'</p><div class="d-flex align-items-center my-3"><img src="'+asset_url+'images/delivery.png" width="39" style="max-width:39px;"><hr class="my-1 d-flex w-100 mx-3"><img src="'+asset_url+'images/location.png" width="13" style="max-width:13px;"></div><h2 style="color: #fff;background: #060203;font-size: 17px;padding: 13px 10px;text-transform: uppercase;margin-bottom: 0;font-weight: 700;">YOUR ORDER DETAILS</h2><div class="d-flex justify-content-between"><div class="w-50"><h4 class="text-dark font-weight-bold m-0 p-0">Order Handeling By</h4><p class="text-dark">'+results[i]["outlet_name"]+'<br>'+results[i]["order_method_name"]+' <br>'+results[i]["outlet_address_line1"]+'<br>'+results[i]["outlet_address_line2"]+'<br>'+results[i]["outlet_postal_code"]+'</p></div><div class="w-50 text-right"><h4 class="text-dark font-weight-bold m-0 p-0">Delivery Location</h4><p class="text-dark">'+results[i]["order_customer_billing_address_line1"]+' <br>'+results[i]["order_customer_billing_address_line2"]+' <br>'+results[i]["order_customer_billing_postal_code"]+'</p></div></div><div class="d-flex justify-content-between mt-3 mb-3"><div class="w-50"><h3 class="text-dark font-weight-bold m-0 p-0" style="font-size: 20px;">Delivery Date</h3><h2 class="text-dark display-5 font-weight-bold">'+results[i]["order_date"]+'</h2></div><div class="w-50 text-right"><h4 class="text-dark font-weight-bold m-0 p-0">Event Time</h4><h2 class="text-dark display-5 font-weight-bold" style="font-size: 20px;">'+results[i]["order_pickup_time"]+'</h2></div></div><hr><div class="d-flex justify-content-between"><div class="text-light p-2 px-3 bg-dark h3"></div><div class="text-light p-2 px-3 bg-dark h3"><sup>$</sup>&nbsp;'+results[i]["order_total_amount"]+'</div></div></div><div class="card-header bg-dark p-0"><div class="d-flex justify-content-between"><div class="text-light p-2 px-3 bg-dark h3">Total</div><div class="text-light p-2 px-3 bg-dark h3"><sup>$</sup>&nbsp;'+results[i]["order_total_amount"]+'</div></div></div></div></div></div></div></div></div>';
			            		// var content = '<div class="col-md-6 mb-3">
                 //                <div class="card shadow">
                 //                    <div class="card-header bg-dark p-0">
                 //                        <div class="d-flex justify-content-between">
                 //                            <div class="text-light p-2 bg-dark">Order No - '+results[i]['order_local_no']+'
                 //                            </div>
                 //                            <div class="graypend p-1 text-light font-weight-bold text-right">
                 //                                <small>Order Value</small> </br /><sup>$</sup>&nbsp;'+results[i]['order_total_amount']+'
                 //                            </div>
                 //                        </div>
                 //                    </div>
                 //                    <div class="card-body">
                 //                        <p class="text-center text-dark font-weight-bold">
                 //                            Order placed at : '+results[i]['order_date']+'<br />
                 //                            Pay by : '+results[i]['order_availability_name']+'</p>

                 //                        <div class="d-flex justify-content-between mt-3 mb-3">
                 //                            <div class="w-50">
                 //                                <h3 class="text-dark font-weight-bold m-0 p-0">Delivery Date</h3>
                 //                                <h2 class="text-dark display-5 m-0 font-weight-bold">30/05/2017</h2>
                 //                            </div>
                 //                            <div class="w-50 text-right">
                 //                                <h4 class="text-dark font-weight-bold m-0 p-0">Event Time</h4>
                 //                                <h2 class="text-dark display-5 m-0  font-weight-bold">12:30PM</h2>
                 //                            </div>

                 //                        </div>
                 //                    </div>
                 //                    <div class="card-header bg-primary p-0">
                 //                        <div class="d-flex justify-content-between">
                 //                            <div class="text-light p-2 px-3  m-0 h3">EARNED
                 //                            </div>
                 //                            <div class="text-light p-2 px-3 m-0  h3">20 Points
                 //                            </div>
                 //                        </div>
                 //                    </div>
                 //                    <div class="card-body">
                 //                        <div class="row">
                 //                            <div class="col-sm-6">
                 //                                <a href="javascript:void(0)"
                 //                                    class="btn btn-block btn-outline-secondary">PRINT INVOICE</a>
                 //                            </div>
                 //                            <div class="col-sm-6">
                 //                                <a href="javascript:void(0)" class="btn btn-block btn-secondary">VIEW
                 //                                    RECEIPT</a>
                 //                            </div>
                 //                        </div>


                 //                    </div>
                 //                </div>
                 //            </div>';
			            		// $('.rewards_div').append(content);
			            	}
			            }else{
			            		console.log('else');
			            		
			            }
			            
			        }
			    });
		})

		// Apply Promocode
		$('.promocode_btn').click(function(){
			var code = $('.promocode_value').val();
			var app_id = $('.app_id').val();
			var quantity = $('.quantity').val();
			var total = $('.total').html();
			var user_id = $('.user_id').val();
			var outlet_id = Cookies.get("outlet_id");
			var formData1 = new FormData;
			formData1.append('app_id', app_id);
			formData1.append('reference_id',user_id);
			formData1.append('promo_code', code);
			formData1.append('cart_amount', total);
			formData1.append('product_name', '');
			formData1.append('cart_quantity', quantity);
			formData1.append('category_id', user_id);
			formData1.append('availability_id', '718B1A92-5EBB-4F25-B24D-3067606F67F0');
			formData1.append('outlet_id', outlet_id);
			$.ajax({
				url: 'https://ccpl.ninjaos.com/api/promotion_api_v2/apply_promotion', 
				dataType: 'text',  
				cache: false,
				contentType: false,
				processData: false,
				data: formData1,
				type: 'post',
				success: function(response){
					var myArray1 = JSON.stringify(response);
					console.log('myArray1 = '+myArray1);
					console.log('response = '+response);
					console.log('response_status = '+jQuery.parseJSON(myArray1));
					if (myArray1.status == "success") {	
						var promotion_amount = myArray1.result_set['promotion_amount'];															
						$('.promo_amount').html(promotion_amount);
						var grant_total =  total - promotion_amount;
						$('.total').html(promotion_amount);
					}	
				}
			});
		});

		$('.delivery_outlet').click(function(){
			// alert();
			$('.menu_order_now').html('Delevery');
			var user_id = $('.user_id').val();
			if (user_id != 0) {
				$('.delivery1_address_choose_div').html('');
				var app_id = $('.app_id').val();
				var url = "https://ccpl.ninjaos.com/api/customer/get_all_user_secondary_address?app_id="+app_id+"&status=A&refrence="+user_id;
				// console.log("url = "+url);
				$.ajax({
			        url: url,
			        type: 'GET',
			        dataType: 'json', // added data type
			        success: function(response) {
			            console.log(response);
			            if (response.status == "ok") {
			            	var results = response.result_set;
			            		console.log('results.length = '+results.length);

			            	for (var i = 0; i < results.length; i++) {
				            	
			            		var content = '<div><div><input type="radio" name="address_chk1" class="address_chk" onclick="address_chk('+results[i]["postal_code"]+')" value="'+results[i]["postal_code"]+'"><span>'+results[i]["address"]+''+results[i]["postal_code"]+'</span></div></div>';
			            		$('.delivery1_address_choose_div').append(content);
			            		$('#delivery_address_popup').modal('toggle');
			            	}
			            }else{
			            	$('#outlets').modal('toggle');
			            		
			            }
			            
			        }
			    });
			}else{
				var outlet_count = Cookies.get("outlet_count");
				console.log('outlet_count = '+outlet_count);
				if (outlet_count == 1) {
					$('#delivery2').modal('toggle');
				}else{
					$('#outlets').modal('toggle');
				}
				

			}
		});
		$('.address_chk').change(function(){
			var address = $(this).val();
			console.log('address = '+address);
			$('.user_postal_code').val(address);
            Cookies.set("user_address", address, { expires: 7 });
		});
		$('.user_address_back').click(function(){
			$('#order_now_popup').modal('toggle');	
			$('#delivery_address_popup').modal('toggle');
		 });
		$('.user_address_continue').click(function(){
			var postal = $('.user_postal_code').val();
			if ($.trim(postal) == "") {
				$('.user_postal_code_danger').show();
			}else{
				$('.user_postal_code_danger').hide();
				$('#outlets').modal('toggle');	
				$('#delivery_address_popup').modal('toggle');
			}
			
		});
		$('.menu_link').click(function(){
			var outlet_id = Cookies.get("outlet_id");
			if ($.trim(outlet_id) == "") {
				$('#order_now_popup').modal('toggle');
			}else{
				window.location.href = "http://localhost/balaji/sundaresh/Apptivo%20Technologies/tulasi/index.php/menu";
			}
		});
		// $('.menu_order_now').click(function(){
		// 	var outlet_id = Cookies.get("outlet_id");
		// 	if ($.trim(outlet_id) == "") {
		// 		$('#order_now_popup').modal('toggle');
		// 	}else{
		// 		window.location.href = "http://localhost/balaji/sundaresh/Apptivo%20Technologies/tulasi/index.php/menu";
		// 	}
		// });

		//  Logout
		$('.logout_btn').click(function(){
                Cookies.set("outlet_id", '', { expires: 7 });
                Cookies.set("postal_code", '', { expires: 7 });
                Cookies.set("address", '', { expires: 7 });
                Cookies.set("delivery_date", '', { expires: 7 });
                Cookies.set("delivery_time", '', { expires: 7 });
                Cookies.set("user_id", '', { expires: 7 });
                Cookies.set("cart_product_value", '', { expires: 7 });
                Cookies.set("user_address", '', { expires: 7 });
                // sessionStorage.removeItem('user_id');
                // sessionStorage.clear();
                window.location.href = "http://localhost/balaji/sundaresh/Apptivo%20Technologies/tulasi/index.php";
        });
		// End

		//  Footer Menu 
		$('.footer-c2 div:nth-child(1) li:nth-child(1) a').attr('href','http://localhost/balaji/sundaresh/Apptivo%20Technologies/tulasi/index.php/about-us');
		$('.footer-c2 div:nth-child(1) li:nth-child(2) a').attr('href','#');
		$('.footer-c2 div:nth-child(1) li:nth-child(3) a').attr('href','#');
		$('.footer-c2 div:nth-child(1) li:nth-child(4) a').attr('href','#');
		$('.footer-c2 div:nth-child(1) li:nth-child(5) a').attr('href','http://localhost/balaji/sundaresh/Apptivo%20Technologies/tulasi/index.php/contact-us');


		$('.footer-c2 div:nth-child(3) li:nth-child(1) a').attr('href','http://localhost/balaji/sundaresh/Apptivo%20Technologies/tulasi/index.php/contact-us');

		$('.footer-c2 div:nth-child(3) li:nth-child(2) a').attr('href','http://localhost/balaji/sundaresh/Apptivo%20Technologies/tulasi/index.php/contact-us');
	});


}(jQuery));

function address_chk(postal_code){
			console.log('postal_code = '+postal_code);
			$('.user_postal_code').val(postal_code);
            Cookies.set("user_address", postal_code, { expires: 7 });

}
function get_outlet(id,postal_code,address){
	console.log(id);
	if ($.trim(id) == "") {
		
	}else{

		$('.outlet_id').val(id);
		$('.outlet_id_pin').val(postal_code);
		$('.outlet_id_address').val(address);
		$('.delivery1_pin').val(postal_code);
		$('.delivery1_addtress').val(address);
		$('#delivery2').modal('toggle');
		$('#outlets').modal('toggle');
	}
}

function getNavgiation(id){
	var menu = '#menu_'+id;
	var menu1 = '.menu_'+id;
	$('.menu_tab').hide();
	$(menu).show();
	$('.active_nav').removeClass('active');
	$(menu1).addClass('active');
}

function addCart(id){
	var div = ".add-cart-div-"+id;
	var div1 = ".menu-add-cart-"+id;
	$(div).toggle();
	$(div1).toggle();
}

function menuminus(id){
	var add_cart = ".add_cart_"+id;
	var count = $(add_cart).html();
	var minus = count - 1;
	if (minus <= 0) {
		$(add_cart).html('0');
	}else{
		$(add_cart).html(minus);
	}
}

function menuplus(id){
	var add_cart = ".add_cart_"+id;
	var count = $(add_cart).html();
	var one = 1
	var plus = +count + +one;
	// if (plus > 0) {
	// 	$(add_cart).html('0');
	// }else{
		$(add_cart).html(plus);
	// }
}
// if (cart_product.length == 0) {}
var cart_product = [];
var product = [];
localStorage.clear();
function done(id){
	var add_cart = ".add_cart_"+id;
	var count = $(add_cart).html();
	var slug = ".product_slug_"+id;
	var slug1 = $(slug).html();
	
	// var product = {  
 //        product_id :id,
 //        product_count :count 
 //     };
    console.log('product = ', product);
    // var cart_product = [];
	// cart_product.push({product_id: id, product_count: count});
	if (cart_product[id] != null) {
		cart_product[id] = { product_count: count, product_slug: slug1};
		// cart_product.push({id: count});
		// cart_product.push({product_id: id, product_count: count});
		product.push({product_id: id, product_count: count, product_slug: slug1});
	}else{
		cart_product[id] = { product_count: count, product_slug: slug1};
		// cart_product.push({id: count});
		// cart_product.push({product_id: id, product_count: count});
		product.push({product_id: id, product_count: count, product_slug: slug1});
	}
	
	console.log('cart_product = ', cart_product);
	// var localstorage = localStorage.getItem(id);
	// if (localstorage) {
	// 	localstorage.setItem(id, count);
	// }else{
	// 	localStorage.setItem(id, count);
	// }
	
	
	// var localstorage1 = localStorage.getItem("cart_product");
	
	// console.log('cart_product1 = '+ localstorage1);
	var cart_product1 = Cookies.get("cart_product");
	// console.log('cart_product_length = '+ cart_product1.length);
	if (!cart_product1) {
		Cookies.set("cart_product", JSON.stringify(cart_product), { expires: 7 });
	}else{
		// cart_product1.push(cart_product);
		// for (var i = 0; i < cart_product1.length; i++) {
		//    	// console.log('cart_product_value = '+ cart_product1[i]);
		// }
		Cookies.set("cart_product", JSON.stringify(cart_product), { expires: 7 });
	}
	var cart_product12 = Cookies.get("cart_product");
	console.log('cart_product1 = ', cart_product12);
	
	var div = ".add-cart-div-"+id;
	var div1 = ".menu-add-cart-"+id;
	$(div).toggle();
	$(div1).toggle();
	var product_length = product.length;
	$('.cart_count').html(product_length);
	$('#product_added_popup').modal('toggle');
}
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
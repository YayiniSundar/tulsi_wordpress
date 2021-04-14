<?php
/*
Template Name: Privacy Policy Page
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
    	.all-title-box.py-2 {
		    background: #000;
		}
    	.content{
    		background: #fff;
    		padding: 40px 20px 30px;
    	}
    	.content p {
		    font-size: 17px;
		    font-weight: 600;
		}
    </style>
</head>

<body class="menu-page">
	<?php include 'header_new.php';?>
	<?php
            $menu_url = "https://ccpl.ninjaos.com/api/cms/page?status=A&app_id=".$app_id;
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
	<div class="all-title-box py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center font-weight-bold text-light">
                    <h1 class="display-4 m-0"><?php echo $menu_values['result_set'][2]['cmspage_title'];?></h1>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
    	<div class="content">
    		<?php echo $menu_values['result_set'][2]['cmspage_description'];?>
    	</div>
    </div>

 	<?php include 'footer_new.php';?>
    <?php include 'scripts.php';?>
   
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<title></title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

<section id="portfolio" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Notebook Product</h2>
                    <h3 class="section-subheading text-muted">It's Nice To Meet You</h3>
                </div>
            </div>	
<?php
error_reporting(0);
 $gid=$_GET['g'];
 use google\appengine\api\users\UserService;
 use google\appengine\api\cloud_storage\CloudStorageTools;
 if(!isset($db['groups'][$gid])){
   echo "ไม่พบข้อมูลกลุ่มสินค้า";
   return;
 } 
 $grec = $db['groups'][$gid];
 $list = [];
 if(isset($db['items'][$gid]))$list=$db['items'][$gid];
 
echo "
 <h1>Notebook $grec[name]</h1>";
			
			
			
 
 if(UserService::isCurrentUserAdmin()){
    echo "<a href='main.php?p=additem&g=$gid'><html><h3>เพิ่มรายการสินค้า</h3></html></a>";
 }
 
 
			
	
			    foreach($list as $pid=>$prec){
		$imgtag=""; 
	 if(isset($prec['picfile']) && file_exists($prec['picfile'])){
		 $img=CloudStorageTools::getImageServingUrl($prec['picfile'],["size"=>500]);
		 $imgtag2 = "<img src ='$img' class='img-centered' width='335' height='200'>";
	 }
		 
 
		?>			

	
	
	
	<body>

<div class="container">
  <div class="row text-center">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
      <div class="thumbnail"> <img src='<?php echo $img; ?>' class="img-responsive" width="350" height="250" >
        <div class="caption">
          <h2><?php echo $prec[name]; ?></h2>
          <p>ราคา <?php echo $prec[price]; ?> ฿</p>
          <p><?php echo $prec[detail]; ?></p>
            <?php
 				if(UserService::isCurrentUserAdmin()){
      echo " | <a href='main.php?p=additem&g=$gid&i=$pid'>Edit</a>";
   }

 
 ?>
        <div class="container">
  <div class="row text-center">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
    
        <div class="caption">
          
         
        </div>
      </div>
   
      
  
	
                    
                        
                    </div>
					</div>
               </div>
        
		 </div>
	</div>
			
	 <?php
 				
   }

 
 ?>
	</div>
 <br><br>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<h2 class="text-center">Fackbook Comment</h2>
<center><div class="fb-comments" data-href="http://web592group06.appspot.com/" data-width="1000" data-numposts="5"></div></div></center>
<br><br>
 	<hr>
<h2 class="text-center">Comment</h2>
<hr>
 </html>

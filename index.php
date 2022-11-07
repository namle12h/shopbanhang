<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/detail.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


  <title>Web Thời Trang</title>

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100'
    rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
  <link href="css/sequence-looptheme.css" rel="stylesheet" media="all" />
  <!-- <link href="css/style.css" rel="stylesheet"> -->
  <!-- <link href="css/cart.css" rel="stylesheet"> -->
  <link href="css/menu.css" rel="stylesheet">



</head>

<body id="home">
  <div class="wrapper">

    <?php
			

				session_start();
				
					
					require_once("admincp/config/config.php");
				  require_once("pages/header.php");
					  // require_once("pages/slide.php");
					  require_once("pages/main.php");
						require_once("pages/thuonghieu.php");
					 require_once("pages/footer.php");

		
	

		?>

  </div>
</body>
<!-- Bootstrap core JavaScript==================================================-->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.sequence-min.js"></script>
<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/script.min.js"></script>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HOMENEEDS SUPERMARKET</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>
<header class="header trans_300">
	
<div class="super_container">

<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">HOMENEEDS<span>SUPERMARKET</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="home.php">HOME</a></li>
								<li><a href="customer.php">CUSTOMER</a></li>
								<li><a href="employee.php">EMPLOYEES</a></li>
								<li><a href="product.php">PRODUCTS</a></li>
								<li><a href="supplier.php">SUPPLIER</a></li>
								<li><a href="sale.php">SALE</a></li>
								<li><a href="stock.php">STOCK</a></li>
								
							</ul>
							
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						usd
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">cad</a></li>
						<li><a href="#">aud</a></li>
						<li><a href="#">eur</a></li>
						<li><a href="#">gbp</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">French</a></li>
						<li><a href="#">Italian</a></li>
						<li><a href="#">German</a></li>
						<li><a href="#">Spanish</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="#">shop</a></li>
				<li class="menu_item"><a href="#">promotion</a></li>
				<li class="menu_item"><a href="#">pages</a></li>
				<li class="menu_item"><a href="#">blog</a></li>
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>


<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(adp.png)">
						<div class="banner_category">
							<a href="form_products.html">ADD NEW PRODUCT</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(ex2.jpeg)">
						<div class="banner_category">
							<a href="display_product.php">EXISTING PRODUCTS</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(ex2.jpeg)">
						<div class="banner_category">
							<a href="QUERY5.php">PRODUCTS EXPIRED</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>TOP 5 BEST SELLING PRODUCTS</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">
							<!-- Slide 1 -->

							<div class="owl-item product_slider_item">
								<div class="product-item">
									<div class="product discount">
										<div class="product_image">
											<img src="galaxy.jpg" alt="">
										</div>
										
										
										
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>1</span></div>
										<div class="product_info">
											<h6 class="product_name"></h6>
											<div class="product_price"><div class="product_image">
											<div class="section_title"><?php
	$host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="dept_store_original";
    
    //create connection
    $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
    
    if(mysqli_connect_error())
	{
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$sql="SELECT SUM(S.QTY) AS COUNT,P.NAME 
FROM SALE S 
INNER JOIN PRODUCT P 
ON S.PR_ID=P.P_ID 
GROUP BY S.PR_ID,P.NAME 
ORDER BY SUM(S.QTY) DESC LIMIT 5;";

		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		
		


		if($resultCheck > 0){
			$row1=mysqli_fetch_array($result);
				
				echo $row1[1];

			
			
		
		
		}
		
	}
?><span></span></div></div></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 2 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="pringles.jpg" alt="">
										</div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>2</span></div>
										<div class="product_info">
											<h6 class="product_name"></h6>
											<div class="product_price"><?php
	$host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="dept_store_original";
    
    //create connection
    $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
    
    if(mysqli_connect_error())
	{
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$sql="SELECT SUM(S.QTY) AS COUNT,P.NAME 
FROM SALE S 
INNER JOIN PRODUCT P 
ON S.PR_ID=P.P_ID 
GROUP BY S.PR_ID,P.NAME 
ORDER BY SUM(S.QTY) DESC LIMIT 5;";

		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		$row1=mysqli_fetch_array($result);
		
		


		if($resultCheck > 0){
			$row1=mysqli_fetch_array($result);
				
				echo $row1[1];

			
			}
		
		
		
		
	}
?></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 3 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="lipstick_1.jpg" alt="">
										</div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>3</span></div>
										<div class="product_info">
											<h6 class="product_name"></h6>
											<div class="product_price"><?php
	$host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="dept_store_original";
    
    //create connection
    $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
    
    if(mysqli_connect_error())
	{
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$sql="SELECT SUM(S.QTY) AS COUNT,P.NAME 
FROM SALE S 
INNER JOIN PRODUCT P 
ON S.PR_ID=P.P_ID 
GROUP BY S.PR_ID,P.NAME 
ORDER BY SUM(S.QTY) DESC LIMIT 5;";

		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		$row1=mysqli_fetch_array($result);
		$row1=mysqli_fetch_array($result);
		
		


		if($resultCheck > 0){
			$row1=mysqli_fetch_array($result);
				
				echo $row1[1];

			
			
		
		
		}
		
	}
?></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 4 -->

							<div class="owl-item product_slider_item">
								<div class="product-item accessories">
									<div class="product">
										<div class="product_image">
											<img src="icecream.jpg" alt="">
										</div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>4</span></div>
										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"></h6>
											<div class="product_price"><?php
	$host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="dept_store_original";
    
    //create connection
    $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
    
    if(mysqli_connect_error())
	{
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$sql="SELECT SUM(S.QTY) AS COUNT,P.NAME 
FROM SALE S 
INNER JOIN PRODUCT P 
ON S.PR_ID=P.P_ID 
GROUP BY S.PR_ID,P.NAME 
ORDER BY SUM(S.QTY) DESC LIMIT 5;";

		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		
		


		if($resultCheck > 0){
			$row1=mysqli_fetch_array($result);
			$row1=mysqli_fetch_array($result);
			$row1=mysqli_fetch_array($result);
			$row1=mysqli_fetch_array($result);
				
				echo $row1[1];

			
			
		
		
		}
		
	}
?></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 5 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women men">
									<div class="product">
										<div class="product_image">
											<img src="bounty.jpg" alt="">
										</div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>5</span></div>
										<div class="product_info">
											<h6 class="product_name"></h6>
											<div class="product_price"><?php
	$host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="dept_store_original";
    
    //create connection
    $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
    
    if(mysqli_connect_error())
	{
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$sql="SELECT SUM(S.QTY) AS COUNT,P.NAME 
FROM SALE S 
INNER JOIN PRODUCT P 
ON S.PR_ID=P.P_ID 
GROUP BY S.PR_ID,P.NAME 
ORDER BY SUM(S.QTY) DESC LIMIT 5;";

		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		
		


		if($resultCheck > 0){
			$row1=mysqli_fetch_array($result);
			$row1=mysqli_fetch_array($result);
			$row1=mysqli_fetch_array($result);
			$row1=mysqli_fetch_array($result);
			$row1=mysqli_fetch_array($result);	
				echo $row1[1];

			
			
		
		
		}
		
	}
?></div>
										</div>
									</div>
								</div>
							</div>
							<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>



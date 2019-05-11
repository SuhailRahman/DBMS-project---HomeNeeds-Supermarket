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

	


<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(add1.png)">
						<div class="banner_category">
							<a href="form_customer.html">ADD NEW CUSTOMER</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(ex1.jpg)">
						<div class="banner_category">
							<a href="display_customer.php">EXISTING CUSTOMER</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="deal_ofthe_week">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="deal_ofthe_week_img">
						<img src="c1.jpg" width ="210%" alt="">
					</div>
				</div>
				<div class="col-lg-6 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
						<div class="section_title">
							<h2>NO OF CUSTOMERS PER MONTH</h2>
						</div>
						<ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								
								<div class="timer_unit"><div class="section_title"><h3><?php
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
		$sql="SELECT SUM(V.CNT) FROM (SELECT COUNT(VISIT_ID) AS CNT
FROM SALE 
WHERE BILL_DATE>=DATE(NOW())-30
GROUP BY VISIT_ID)V
;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		
		


		if($resultCheck > 0){
			while($row1=mysqli_fetch_array($result)){
				
				echo $row1[0];

			
			}
		
		
		}
		
	}
?></h3></div></div>
							</li>
							
						</ul>
						
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


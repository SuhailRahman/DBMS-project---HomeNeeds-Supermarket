<?php
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
		$sql="update restock
set s_id = (select t2.sid from
(select spi2.COST_PRICe as cp,
spi2.PROD_ID as pid,
spi2.s_id as sid
from
(select 
spi.PROD_ID as pid,
min(spi.COST_PRICe) as cp
from 
supplier_prod_info spi
group by spi.PROD_ID) as t inner join 
supplier_prod_info spi2
on spi2.PROD_ID = t.pid
and spi2.COST_PRICe = t.cp) as t2
where restock.prod_id = t2.pid
limit 1
)
,COST_PRICE = (select t2.cp from
(select spi2.COST_PRICe as cp,
spi2.PROD_ID as pid,
spi2.s_id as sid
from
(select 
spi.PROD_ID as pid,
min(spi.COST_PRICe) as cp
from 
supplier_prod_info spi
group by spi.PROD_ID) as t inner join 
supplier_prod_info spi2
on spi2.PROD_ID = t.pid
and spi2.COST_PRICe = t.cp) as t2
where restock.prod_id = t2.pid
limit 1
)
;";
		$result = mysqli_query($conn,$sql);
		
	
		


	}
?>
<?php
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
		$sql="update RESTOCK set NO_OF_SUPPLIES = NO_OF_SUPPLIES + 10
	where PROD_ID IN 
(select 
prod.P_ID
from product prod inner join 
stock stk 	
on stk.prod_id = prod.p_id
where stk.NUMBER_OF_STOCKS <= 5)
;";
		$result = mysqli_query($conn,$sql);
		
		
		


	}
?>


<html>
<head><title>Table with restock</title><style>
body {
  background: url('https://source.unsplash.com/twukN12EN7c/1920x1080') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
	</style>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><meta charset="utf-8">
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
<body >
	<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		

		<!-- Main Navigation -->

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

	
<center>
	<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
<table class="table" >
	<thead class="thead-dark">
	<tr>
		<th>NUMBER OF SUPPLIES</th>
		<th>PRODUCT ID</th>
		<TH>COST PRICE</TH>
		<TH>SUPPLIER ID</TH>
		
		
		
		
	</tr>
</thead>

<?php
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
		$sql="SELECT * FROM RESTOCK;";

		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		
		


		if($resultCheck > 0){
			while($row1=mysqli_fetch_array($result)){
				
				echo "<tr><td>".$row1[0]."</td><td>".$row1[1]."</td><td>".$row1[2]."</td><td>".$row1[3]."</td></tr>";

			
			}
		
		echo "</table>";
		}
		
	}
?>
</table>
</div>
</div>
</div>
</center>
</body>
</html>


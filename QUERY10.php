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
		$sql="update stock
set NUMBER_OF_STOCKS = NUMBER_OF_STOCKS - 
(select sum(t1.qty)
from sale as t1
where t1.pr_id = stock.prod_id
group by t1.pr_id
);";
		$result = mysqli_query($conn,$sql);
		
	
		


	}
?>

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

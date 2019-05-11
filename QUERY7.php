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
?>

<html>
<head>
	<style>

	</style>
	<title>Table with customer per month</title><style>
</style>
	
</head>
<body >
	



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
?>

</body>
</html>
</body>
</html>
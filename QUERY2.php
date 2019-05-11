<html>
<head><style>
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
		$sql="SELECT (SELECT SUM(AMOUNT) 
FROM SALE 
WHERE BILL_DATE>DATE(NOW())-30) -
(SELECT SUM(SALARY) 
FROM EMPLOYEE E 
INNER JOIN working_hours W 
ON E.EMP_ID=W.EMP_ID 
WHERE WORK_DATE>DATE(NOW())-30)-
(SELECT SUM(NO_OF_SUPPLIES*COST_PRICE) 
FROM RESTOCK) AS GROSS;";
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
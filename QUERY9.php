<html>
<head>
	<style>

	</style>
	<title>Table with employee of the month </title><style>
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
		$sql="SELECT SUM(NO_OF_HOURS) AS S,NAME, E.EMP_ID 
FROM EMPLOYEE AS E 
INNER JOIN WORKING_HOURS AS W 
ON E.EMP_ID=W.EMP_ID 
WHERE W.WORK_DATE>DATE(NOW())-30  
GROUP BY E.EMP_ID 
 ORDER BY S DESC LIMIT 1 ;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		
		


		if($resultCheck > 0){
			while($row1=mysqli_fetch_array($result)){
				
				echo $row1[1];

			
			}
		
		
		}
		
	}
?>
</table>
</body>
</html>
</body>
</html>
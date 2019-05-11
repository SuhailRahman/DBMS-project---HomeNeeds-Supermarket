<?php
$NUMBER_OF_STOCKS=$_POST['NUMBER_OF_STOCKS'];
$PROD_ID=$_POST['PROD_ID'];
$EXP_DATE=$_POST['EXP_DATE'];


if(!empty($NUMBER_OF_STOCKS)|| !empty($PROD_ID)|| !empty($EXP_DATE))
{
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
		$sql="INSERT INTO employee values('$NUMBER_OF_STOCKS','$PROD_ID','$EXP_DATE')";
		if($conn->query($sql)){
			echo "New record is inserted successfully";
		}
		else{
			echo "Error: " .$sql ."<br>".$conn->error;
		}
		
	}
}
else
{
    echo "ALL field are required";
}
echo "<script>location.href='display_stock.php'</script>";

?>
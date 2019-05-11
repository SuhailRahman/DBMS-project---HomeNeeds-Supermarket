<?php
$CUSTOM_ID=$_POST['CUSTOM_ID'];
$Name=$_POST['NAME'];
$Mobile_Number=$_POST['MOBILE_NUMBER'];
$Address=$_POST['ADDRESS'];

include "db.php";
if(!empty($CUSTOM_ID)|| !empty($Name)|| !empty($Mobile_Number)|| !empty($Address))
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
		$sql="INSERT INTO customer values('$CUSTOM_ID','$Name','$Mobile_Number','$Address')";
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

echo "<script>location.href='display_customer.php'</script>";
?>
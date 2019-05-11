<?php
$EMP_ID=$_POST['EMP_ID'];
$Address=$_POST['ADDRESS'];
$Name=$_POST['NAME'];
$Salary=$_POST['SALARY'];


if(!empty($EMP_ID)|| !empty($Address)|| !empty($Name)|| !empty($Salary))
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
		$sql="INSERT INTO employee values('$EMP_ID','$Address','$Name','$Salary')";
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
echo "<script>location.href='display_employee.php'</script>";

?>
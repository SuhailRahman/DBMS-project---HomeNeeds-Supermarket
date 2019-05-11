
<?php
$CONTACT=$_POST['CONTACT'];
$NAME=$_POST['NAME'];
$S_ID=$_POST['S_ID'];
$ADDRESS=$_POST['ADDRESS'];
 
include "db.php";

if(!empty($S_ID)|| !empty($NAME)|| !empty($CONTACT)|| !empty($ADDRESS))
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
		$sql="INSERT INTO SUPPLIER values('$CONTACT','$NAME','$S_ID','$ADDRESS')";
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
echo "<script>location.href='display_supplier.php'</script>";

?>

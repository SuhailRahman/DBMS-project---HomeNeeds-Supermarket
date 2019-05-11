<?php

$CUSTOM_ID=$_POST['CUSTOM_ID'];
$PR_ID=$_POST['PR_ID'];
$EMP_ID=$_POST['EMP_ID'];
$QTY=$_POST['QTY'];


$RATE=$_POST['RATE'];

$AMOUNT=$_POST['AMOUNT'];

$BILL_DATE=$_POST['BILL_DATE'];
$VISIT_ID=$_POST['VISIT_ID'];

include "db.php";





if(!empty($PR_ID)|| !empty($EMP_ID)|| !empty($VISIT_ID)||!empty($RATE)|| !empty($AMOUNT)|| !empty($CUSTOM_ID) || !empty($QTY)|| !empty($BILL_DATE) )

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

		$sql="INSERT INTO SALE values('$CUSTOM_ID','$PR_ID','$EMP_ID','$QTY','$RATE','$AMOUNT','$BILL_DATE','$VISIT_ID')";

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
echo "<script>location.href='display_sale.php'</script>";



?>
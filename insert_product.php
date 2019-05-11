<?php

$P_ID=$_POST['P_ID'];

$RATE=$_POST['RATE'];

$CATEGORY=$_POST['CATEGORY'];

$NAME=$_POST['NAME'];

include "db.php";





if(!empty($P_ID)|| !empty($RATE)|| !empty($CATEGORY)|| !empty($NAME))

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

		$sql="INSERT INTO PRODUCT values('$P_ID','$RATE','$CATEGORY','$NAME')";

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
echo "<script>location.href='display_product.php'</script>";



?>
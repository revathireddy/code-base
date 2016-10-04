<?php

   $servername = 'localhost';
   $username = 'root';
   $password ='bhea@123';
   $dbname = 'donuts';
   $connect = mysqli_connect($servername, $username, $password, $dbname);
   if(! $connect)
   {
     die('Could not connect: ' . mysqli_error());
   }
   echo 'Connected successfully';
  
	$name=$_POST['name'];
	$cakedonuts=$_POST['cdon'];
	$glazedonuts=$_POST['gdon'];
	$stotal=$_POST['stotal'];
	$tax=$_POST['tax'];
	$total=$_POST['total'];
  $query="insert into donut(name,cakedonuts,glazedonuts,stotal,tax,total) values ('$name','$cakedonuts','$glazedonuts','$stotal','$tax','$total')";

	$result = mysqli_query($connect,$query);
	
	if($result)
	echo "data inserted succesfully";
mysqli_close($connect);
?>

<?php
   include('../include/connect.php');

   $id = $_POST['idKey'];

$sql = "SELECT * FROM customer WHERE cust_id = ?";
$q = $conn->prepare($sql);
$q -> execute(array($id));
$browse = $q -> fetchAll();
foreach($browse as $fetch)
{
  $output[] = array ($fetch['cust_type'],$fetch['cust_name'],
  	$fetch['cust_email'],$fetch['cust_tel'],$fetch['cust_phone'],
  	$fetch['cust_add'],$fetch['comp_CPname'],$fetch['comp_CPphone']);				 	
}                      

echo json_encode($output);
$conn = null;
?>
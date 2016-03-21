<?php
   include('../include/connect.php');

   $id = $_POST['idKey'];

$sql = "SELECT * FROM discount WHERE disc_id = ?";
$q = $conn->prepare($sql);
$q -> execute(array($id));
$browse = $q -> fetchAll();
foreach($browse as $fetch)
{

	
  $output[] = array ($fetch['disc_name'],$fetch['disc_rate'],
  	$fetch['disc_startDate'],$fetch['disc_endDate']);				 	
}                      

echo json_encode($output);
$conn = null;
?>
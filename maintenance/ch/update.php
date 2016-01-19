<?php
   include('../include/connect.php');

   $id = $_POST['idKey'];

$sql = "SELECT * FROM charge WHERE charge_id = ?";
$q = $conn->prepare($sql);
$q -> execute(array($id));
$browse = $q -> fetchAll();
foreach($browse as $fetch)
{
  $output[] = array ($fetch['charge_type'],$fetch['charge_measure'],
  	$fetch['charge_rate']);				 	
}                      

echo json_encode($output);
$conn = null;
?>
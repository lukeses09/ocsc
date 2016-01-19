<?php
   include('../include/connect.php');

   $id = $_POST['idKey'];

$sql = "SELECT * FROM truck WHERE tr_pltno = ?";
$q = $conn->prepare($sql);
$q -> execute(array($id));
$browse = $q -> fetchAll();
foreach($browse as $fetch)
{
  $output[] = array ($fetch['tr_pltno'],$fetch['tr_type'],
  	$fetch['tr_model'],$fetch['tr_desc'],$fetch['tr_usage']);				 	
}                      

echo json_encode($output);
$conn = null;
?>
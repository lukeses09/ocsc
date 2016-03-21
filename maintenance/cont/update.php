<?php
   include('../include/connect.php');

   $id = $_POST['idKey'];

$sql = "SELECT * FROM container WHERE cont_no = ?";
$q = $conn->prepare($sql);
$q -> execute(array($id));
$browse = $q -> fetchAll();
foreach($browse as $fetch)
{
  $output[] = array ($fetch['cont_name'],$fetch['cont_height'],
  	$fetch['cont_width'],$fetch['cont_description'],$fetch['cont_rate'],
  	$fetch['cont_qty']);				 	
}                      

echo json_encode($output);
$conn = null;
?>
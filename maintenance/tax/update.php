<?php
   include('../include/connect.php');

   $id = $_POST['idKey'];

$sql = "SELECT * FROM tax WHERE tax_id = ?";
$q = $conn->prepare($sql);
$q -> execute(array($id));
$browse = $q -> fetchAll();
foreach($browse as $fetch)
{
  $output[] = array ($fetch['tax_name'],$fetch['tax_rate']);				 	
}                      

echo json_encode($output);
$conn = null;
?>
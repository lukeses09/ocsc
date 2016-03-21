<?php
    include('../include/connect.php');


  $sql = "SELECT * FROM charge WHERE charge_status='active' 
  ORDER BY charge_type DESC";

  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['charge_id'],$fetch['charge_type'],
      $fetch['charge_measure'],$fetch['charge_rate']);				 	
  }         
$conn = null;             

echo json_encode($output);
?>    
<?php
    include('../include/connect.php');


  $sql = "SELECT * FROM tax WHERE tax_status='active' 
  ORDER BY tax_id DESC";

  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['tax_id'],$fetch['tax_name'],
      $fetch['tax_rate']);				 	
  }         
$conn = null;             

echo json_encode($output);
?>    
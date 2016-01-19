<?php
    include('../include/connect.php');


  $sql = "SELECT * FROM trails ORDER BY date DESC";

  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['trail_id'],$fetch['module_type'],
      $fetch['module'],$fetch['action'],$fetch['description'],$fetch['date'],$fetch['username']);				 	
  }         
$conn = null;             

echo json_encode($output);
?>    
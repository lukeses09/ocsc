<?php
    include('../include/connect.php');


  $sql = "SELECT * FROM container WHERE cont_status='active' 
  ORDER BY cont_no ASC";

  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['cont_no'],$fetch['cont_name'],$fetch['cont_rate'],
      $fetch['cont_height'],
    $fetch['cont_width'],$fetch['cont_description'],
    $fetch['cont_qty']);				 	
  }         
$conn = null;             

echo json_encode($output);
?>    
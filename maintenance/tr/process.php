<?php
    include('../include/connect.php');


  $sql = "SELECT * FROM truck WHERE tr_status='active' 
  ORDER BY tr_pltno ASC";

  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['tr_pltno'],$fetch['tr_type'],
      $fetch['tr_model'],$fetch['tr_desc'],$fetch['tr_usage']);         
  }         
$conn = null;             

echo json_encode($output);
?>    
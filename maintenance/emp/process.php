<?php
    include('../include/connect.php');


  $sql = "SELECT * FROM employee WHERE emp_status='active' ORDER BY emp_id DESC";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['emp_id'],$fetch['emp_name'],
      $fetch['emp_email'],$fetch['emp_phone'],$fetch['emp_tel'],
      $fetch['emp_dep'],$fetch['emp_job']);				 	
  }         
$conn = null;             

echo json_encode($output);
?>    
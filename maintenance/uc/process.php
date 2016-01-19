<?php
    include('../include/connect.php');


  $sql = "SELECT * FROM user_account ORDER by user_status";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['username'],
    $fetch['password'],$fetch['user_type'],$fetch['user_status']);				 	
  }         
$conn = null;             

echo json_encode($output);
?>    
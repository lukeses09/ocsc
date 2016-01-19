<?php
    include('../include/connect.php');


  $sql = "SELECT disc_id,disc_name,disc_rate,disc_startDate,disc_endDate,
  DATEDIFF(disc_endDate,CURDATE()) AS effective, DATEDIFF(CURDATE(),disc_startDate) AS start
   FROM discount WHERE disc_status='active' 
  ORDER BY effective DESC";

  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {

    if($fetch['start']>=0){
      if($fetch['effective']>=0)
        $status = 'Effective';
      else if($fetch['effective']<0)
        $status = 'Expired';
    }
    else if($fetch['start']<0)
      $status = 'Awaiting';

    $output[] = array ($fetch['disc_id'],$fetch['disc_name'],
      $fetch['disc_rate'],$fetch['disc_startDate'],$fetch['disc_endDate'],$status);				 	
  }         
$conn = null;             

echo json_encode($output);
?>    
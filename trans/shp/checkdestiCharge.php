<?php
include('../../maintenance/include/connect.php');

   $charge = $_POST['charge'];

          $sql = "SELECT COUNT(*) as count, charge_id, charge_rate FROM charge 
          WHERE charge_measure = ? 
          AND charge_status='active' 
          AND charge_type = 'To Destination'";
          $q = $conn->prepare($sql);
          $q -> execute(array($charge));
          $browse = $q -> fetchAll();
          $rowcount = $q -> rowCount();
		  foreach($browse as $fetch)
		  {
            $output = array($fetch['count'],$fetch['charge_id'], $fetch['charge_rate']);         		 	
		  }                

                 

echo json_encode($output);
$conn = null;
?>
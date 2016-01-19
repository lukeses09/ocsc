<?php
include('../../maintenance/include/connect.php');

   $deliveryReg = $_POST['deliveryReg'];

          $sql = "SELECT COUNT(*) as count, charge_id, charge_rate FROM charge 
          WHERE charge_measure = ? 
          AND charge_status='active' 
          AND charge_type='Regional'";

          $q = $conn->prepare($sql);
          $q -> execute(array($deliveryReg));
          $browse = $q -> fetchAll();
          $rowcount = $q -> rowCount();
		  foreach($browse as $fetch)
		  {
            $output = array($fetch['count'],$fetch['charge_id'],$fetch['charge_rate']);         		 	
		  }                

                 

echo json_encode($output);
$conn = null;
?>
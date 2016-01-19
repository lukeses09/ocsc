<?php
include('../../maintenance/include/connect.php');

   $discount = $_POST['discount'];

          $sql = "SELECT COUNT(*) as count, disc_id, disc_rate FROM discount 
          WHERE disc_name = ? AND disc_status='active'";
          $q = $conn->prepare($sql);
          $q -> execute(array($discount));
          $browse = $q -> fetchAll();
          $rowcount = $q -> rowCount();
		  foreach($browse as $fetch)
		  {
            $output = array($fetch['count'],$fetch['disc_id'],$fetch['disc_rate']);         		 	
		  }                

                 

echo json_encode($output);
$conn = null;
?>
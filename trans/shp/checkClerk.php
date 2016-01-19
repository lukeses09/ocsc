<?php
include('../../maintenance/include/connect.php');

   $clerk = $_POST['clerk'];

          $sql = "SELECT COUNT(*) as count, emp_id FROM employee WHERE emp_name = ? AND emp_status='active' ";
          $q = $conn->prepare($sql);
          $q -> execute(array($clerk));
          $browse = $q -> fetchAll();
          $rowcount = $q -> rowCount();
		  foreach($browse as $fetch)
		  {
            $output = array($fetch['count'],$fetch['emp_id']);         		 	
		  }                  

echo json_encode($output);
$conn = null;
?>
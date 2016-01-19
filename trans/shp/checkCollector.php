<?php
include('../../maintenance/include/connect.php');

   $collector = $_POST['collector'];

          $sql = "SELECT COUNT(*) as count, emp_id FROM employee WHERE emp_name = ? 
          AND emp_status='active' 
          AND emp_job = 'Collector' ";
          $q = $conn->prepare($sql);
          $q -> execute(array($collector));
          $browse = $q -> fetchAll();
          $rowcount = $q -> rowCount();
		  foreach($browse as $fetch)
		  {
            $output = array($fetch['count'],$fetch['emp_id']);         		 	
		  }                  

echo json_encode($output);
$conn = null;
?>
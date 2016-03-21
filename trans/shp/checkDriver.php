<?php
include('../../maintenance/include/connect.php');

   $driver = $_POST['driver'];

          $sql = "SELECT COUNT(*) as count, emp_id FROM employee 
          WHERE emp_name = ? 
          AND (emp_status='active') 
          AND (emp_job = 'Driver') ";
          $q = $conn->prepare($sql);
          $q -> execute(array($driver));
          $browse = $q -> fetchAll();
          $rowcount = $q -> rowCount();
		  foreach($browse as $fetch)
		  {
            $output = array($fetch['count'],$fetch['emp_id']);         		 	
		  }                  

echo json_encode($output);
$conn = null;
?>
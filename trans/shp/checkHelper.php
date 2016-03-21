<?php
include('../../maintenance/include/connect.php');

   $helper = $_POST['helper'];

          $sql = "SELECT COUNT(*) as count, emp_id FROM employee 
          WHERE emp_name = ? 
          AND (emp_status='active') 
          AND (emp_job = 'Helper') ";
          $q = $conn->prepare($sql);
          $q -> execute(array($helper));
          $browse = $q -> fetchAll();
          $rowcount = $q -> rowCount();
		  foreach($browse as $fetch)
		  {
            $output = array($fetch['count'],$fetch['emp_id']);         		 	
		  }                  

echo json_encode($output);
$conn = null;
?>
<?php
include('../../maintenance/include/connect.php');

   $custname = $_POST['custname'];

          $sql = "SELECT COUNT(*) as count,cust_id FROM customer WHERE cust_name = ? AND cust_status='active' ";
          $q = $conn->prepare($sql);
          $q -> execute(array($custname));
          $browse = $q -> fetchAll();
          $rowcount = $q -> rowCount();
		  foreach($browse as $fetch)
		  {
            $output = array($fetch['count'],$fetch['cust_id']);         		 	
		  }   

echo json_encode($output);
$conn = null;
?>
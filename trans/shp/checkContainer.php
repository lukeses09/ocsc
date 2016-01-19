<?php
include('../../maintenance/include/connect.php');

   $container = $_POST['container'];

          $sql = "SELECT COUNT(*) as count, cont_no FROM container
           WHERE cont_name = ? AND cont_status='active' 
           AND cont_qty !=0 ";
          $q = $conn->prepare($sql);
          $q -> execute(array($container));
          $browse = $q -> fetchAll();
          $rowcount = $q -> rowCount();
		  foreach($browse as $fetch)
		  {
            $output = array($fetch['count'],$fetch['cont_no']);         		 	
		  }                

                 

echo json_encode($output);
$conn = null;
?>
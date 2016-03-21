<?php
include('../../maintenance/include/connect.php');

   $truck = $_POST['truck'];

          $sql = "SELECT COUNT(*) as count, tr_pltno FROM truck WHERE tr_pltno = ? AND tr_status='active' AND tr_usage='Available'";
          $q = $conn->prepare($sql);
          $q -> execute(array($truck));
          $browse = $q -> fetchAll();
          $rowcount = $q -> rowCount();
		  foreach($browse as $fetch)
		  {
            $output = array($fetch['count'],$fetch['tr_pltno']);         		 	
		  }                

                 

echo json_encode($output);
$conn = null;
?>
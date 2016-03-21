<?php
    include('../../maintenance/include/connect.php');


  $sql = "SELECT shp.so_no as so_no, c.cust_name as custname,
c.cust_phone as custphone, shp.cargo_desc as cargo, shp.add_pickup as pickup,
shp.add_del as delivery, shp.so_status as so_status 
FROM shipping_order shp, customer c 
WHERE (shp.so_cl_id = c.cust_id)
GROUP by shp.so_no
ORDER by shp.so_status";

  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['so_no'],$fetch['custname'],
      $fetch['custphone'],$fetch['pickup'], $fetch['delivery'], strtoupper($fetch['so_status']),
      $fetch['cargo']);				 	
  }         
$conn = null;             

echo json_encode($output);
?>    
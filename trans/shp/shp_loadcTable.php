<?php
   include('../../maintenance/include/connect.php');

   $so_no = $_POST['so_no'];

$sql = "SELECT cont_name,cont_height,cont_width,cont_rate,sl_cont_qty 
FROM container cont, shipping_order so, shipping_leg sl 
WHERE (so.so_no = ?) 
AND (sl.sl_so_no = so.so_no) 
AND (cont.cont_no = sl.sl_cont_no)
GROUP BY (sl.sl_no)";
$q = $conn->prepare($sql);
$q -> execute(array($so_no));
$browse = $q -> fetchAll();
foreach($browse as $fetch)
{
  $output[] = array($fetch['cont_name'],$fetch['cont_height'], $fetch['cont_width'],
  	$fetch['cont_rate'],$fetch['sl_cont_qty'],);				 	
}                      

echo json_encode($output);
$conn = null;
?>
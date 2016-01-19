<?php
   include('../../maintenance/include/connect.php');

   $so_no = $_POST['so_no'];

$sql = "SELECT pay_date,pay_amount,pay_type,
(SELECT emp_name FROM employee emp WHERE (emp.emp_id = p.pay_collector)) as collector
FROM payment p, shipping_order so 
WHERE(so.so_no = ?)
AND (p.pay_ar_so_no = so.so_no)
ORDER BY pay_date DESC";

$q = $conn->prepare($sql);
$q -> execute(array($so_no));
$browse = $q -> fetchAll();
foreach($browse as $fetch)
{
  $output[] = array($fetch['pay_date'],$fetch['pay_amount'],$fetch['pay_type'],$fetch['collector']);				 	
}                      

echo json_encode($output);
$conn = null;
?>
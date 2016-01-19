<?php
include('../../maintenance/include/connect.php');



    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $start = date('Y-m-d', strtotime(str_replace('-', '/', $startDate)));
    $end = date('Y-m-d', strtotime(str_replace('-', '/', $endDate)));   

$sql="SELECT so_no, ar_no, cust_name, ar_balance,
(SUM(pay_amount)) as current, 
(ar_balance - SUM(pay_amount)) as receivable
FROM shipping_order so, customer c, account acc, account_record ar, payment p 
WHERE (so.so_no = p.pay_ar_so_no)
AND (so.so_cl_id = c.cust_id)
AND (c.cust_id = acc.acc_cust_id)
AND (so.so_no = ar.ar_so_no)
AND (so.so_status !='deleted')
GROUP BY so_no
ORDER BY receivable, cust_name";


$q = $conn->prepare($sql);
$q -> execute(array());
$browse = $q -> fetchAll();
foreach($browse as $fetch)
{
  $output[] = array ($fetch['so_no'],$fetch['ar_no'],$fetch['cust_name'],$fetch['ar_balance'],
  $fetch['current'],$fetch['receivable']);				 	
}                      

echo json_encode($output);
$conn=null;
?>
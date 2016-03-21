<?php
include('../../maintenance/include/connect.php');


    $type = $_POST['type'];
    $name = $_POST['name'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $start = date('Y-m-d', strtotime(str_replace('-', '/', $startDate)));
    $end = date('Y-m-d', strtotime(str_replace('-', '/', $endDate)));   


if($type=='specific'){
 $sql=" SELECT pay_no, pay_ar_so_no, c.cust_name as customer, pay_date, pay_amount, pay_type, e.emp_name as collector
  FROM payment p, customer c, shipping_order so, employee e
  WHERE p.pay_ar_so_no = so.so_no 
  AND (c.cust_id = so.so_cl_id) 
  AND (p.pay_collector = e.emp_id)
  AND (pay_date between ? AND ?)
  AND (e.emp_name = ?)
  GROUP BY pay_no
  ORDER BY pay_date DESC"; 
}

else if($type=='all'){
 $sql=" SELECT pay_no, pay_ar_so_no, c.cust_name as customer, pay_date, pay_amount, pay_type, e.emp_name as collector
  FROM payment p, customer c, shipping_order so, employee e
  WHERE p.pay_ar_so_no = so.so_no 
  AND (c.cust_id = so.so_cl_id) 
  AND (p.pay_collector = e.emp_id)
  GROUP BY pay_no
  ORDER BY pay_date DESC"; 
}

$q = $conn->prepare($sql);
if($type=='specific')
  $q -> execute(array($start,$end,$name));
else if($type=='all')
  $q -> execute(array());    
$browse = $q -> fetchAll();
foreach($browse as $fetch)
{
  $output[] = array ($fetch['collector'],$fetch['pay_no'],$fetch['pay_ar_so_no'],$fetch['customer'],
  $fetch['pay_date'],$fetch['pay_amount'],$fetch['pay_type']);				 	
}                      

echo json_encode($output);
$conn=null;
?>
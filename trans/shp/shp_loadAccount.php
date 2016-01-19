<?php
   include('../../maintenance/include/connect.php');

   $so_no = $_POST['so_no'];

$sql = "SELECT ar_balance, (ar_balance - ( SELECT SUM(pay_amount) FROM payment py WHERE(py.pay_ar_so_no = so.so_no) ) ) as bal
FROM account_record ar, shipping_order so
WHERE (so.so_no =?) 
AND (ar.ar_so_no = so.so_no)";

$q = $conn->prepare($sql);
$q -> execute(array($so_no));
$browse = $q -> fetchAll();
foreach($browse as $fetch)
{
	if($fetch['bal'] == null)
		$balance = $fetch['ar_balance'];
	else
		$balance = $fetch['bal'];

  $output[] = array($balance);				 	
}                      

echo json_encode($output);
$conn = null;
?>
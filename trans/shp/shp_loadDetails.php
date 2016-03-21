<?php
   include('../../maintenance/include/connect.php');

   $so_no = $_POST['so_no'];

$sql = "SELECT so_transdate,cust_name,cust_email,cust_tel,comp_CPname,comp_CPphone,
(SELECT emp_name FROM employee emp WHERE emp.emp_id = so.so_emp_id) as clerk,
(SELECT emp_name FROM employee emp WHERE emp.emp_id = so.driver) as driver,
(SELECT tr_pltno FROM truck tr WHERE tr.tr_pltno = so.truck_no) as truckPltno,
(SELECT tr_type FROM truck tr WHERE tr.tr_pltno = so.truck_no) as truckType,
(SELECT emp_name FROM employee emp WHERE emp.emp_id = so.helper) as helper,
cargo_desc,add_pickup,add_del,
(SELECT charge_measure FROM charge ch WHERE ch.charge_id = so.add_pickup_reg) as pickup_regName,
(SELECT charge_rate FROM charge ch WHERE ch.charge_id = so.add_pickup_reg) as pickup_regRate,
(SELECT charge_measure FROM charge ch WHERE ch.charge_id = so.add_del_reg) as del_regName,
(SELECT charge_rate FROM charge ch WHERE ch.charge_id = so.add_del_reg) as del_regRate,
pickupExpected,deliveryExpected,
(SELECT charge_measure FROM charge ch WHERE ch.charge_id = so.charge_pickup) as pickupCharge,
(SELECT charge_rate FROM charge ch WHERE ch.charge_id = so.charge_pickup) as pickupChargeRate,
(SELECT charge_measure FROM charge ch WHERE ch.charge_id = so.charge_del) as delCharge,
(SELECT charge_rate FROM charge ch WHERE ch.charge_id = so.charge_del) as delChargeRate,
distance_pickup, distance_del, so_tax,
(SELECT disc_name FROM discount disc WHERE disc.disc_id = so.so_disc_id) as discount,
(SELECT disc_rate FROM discount disc WHERE disc.disc_id = so.so_disc_id) as discountRate,
so_status
FROM shipping_order so, employee emp, customer c 
WHERE (so.so_no = ?)
AND (so.so_cl_id = c.cust_id)
GROUP BY so.so_no";
$q = $conn->prepare($sql);
$q -> execute(array($so_no));
$browse = $q -> fetchAll();
foreach($browse as $fetch)
{
  $output[] = array($fetch['so_transdate'],$fetch['cust_name'],$fetch['cust_email'],$fetch['cust_tel'],
  	$fetch['comp_CPname'],$fetch['comp_CPphone'],$fetch['clerk'],$fetch['driver'],$fetch['helper'],
  $fetch['cargo_desc'],$fetch['add_pickup'],$fetch['add_del'],$fetch['pickup_regName'],
  $fetch['pickup_regRate'],$fetch['del_regName'],$fetch['del_regRate'],$fetch['pickupExpected'],
  $fetch['deliveryExpected'],$fetch['pickupCharge'],$fetch['pickupChargeRate'],
  $fetch['delCharge'],$fetch['delChargeRate'],$fetch['distance_pickup'],$fetch['distance_del'],
  $fetch['so_tax'],$fetch['discount'],$fetch['discountRate'], $fetch['truckPltno'], $fetch['truckType'], $fetch['so_status']  );				 	
}                      

echo json_encode($output);
$conn = null;
?>
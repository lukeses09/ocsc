<?php
include('../../maintenance/include/connect.php');
include('../../maintenance/include/translog.php');


   $so_no = $_POST['so_no'];


    $sql = "UPDATE shipping_order SET so_status = 'deleted' WHERE so_no = ?";          
    $q = $conn->prepare($sql);
    $q -> execute(array($so_no));             

$year = date('Y');
$year = substr($year,2,3);
$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Transaction','Shipment', 'REMOVE', 'Deleted ID: '.$so_no, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));
                 

echo json_encode($output);
$conn = null;
?>
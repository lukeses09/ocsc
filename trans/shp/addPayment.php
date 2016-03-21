<?php
include('../../maintenance/include/connect.php');
include('../../maintenance/include/translog.php');


   $so_no = $_POST['so_no'];
   $pyDate = $_POST['pyDate'];
   $pyAmount = $_POST['pyAmount'];
   $pyCollector = $_POST['pyCollector'];
   $pyMode = $_POST['pyMode'];

    // py no
    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('py'.$year);      


$sql = "INSERT INTO payment VALUES(?,?,?,?,?,?)";          
$q = $conn->prepare($sql);
$q -> execute(array($id,$so_no,$pyDate,$pyAmount,$pyMode,$pyCollector));             

$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Transaction','Shipment', 'PAYMENT', 'Payment No: '.$id. ', SO_NO: '.$so_no.', Amount: '.$pyAmount.', Mode: '.$pyMode, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));
                 

echo json_encode($output);
$conn = null;
?>
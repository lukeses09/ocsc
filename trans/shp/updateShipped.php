<?php
include('../../maintenance/include/connect.php');
include('../../maintenance/include/translog.php');


   $so_no = $_POST['so_no'];
   $pickDate = $_POST['pickDate'];
   $pickTime = $_POST['pickTime'];
   $delDate = $_POST['delDate'];
   $delTime = $_POST['delTime'];
     

    //fix time
    if(substr($pickTime, 6)=='PM'){
        $i = 12+substr($pickTime, 0, 2);
        $pickTime = $i.':'.substr($pickTime, 3, 2).':00';
    }
    else if(substr($pickTime, 6)=='AM'){
        $pickTime = substr($pickTime, 0, 5).':00';
    }

    if(substr($delTime, 6)=='PM'){
        $i = 12+substr($delTime, 0, 2);
        $delTime = $i.':'.substr($delTime, 3, 2).':00';
    }
    else if(substr($delTime, 6)=='AM'){
        $delTime = substr($delTime, 0, 5).':00';
    }

    //concat date and time
    $pickup = $pickDate.' '.$pickTime;
    $delivery = $delDate.' '.$delTime;    
    //polish convert to datetime
    $pickup = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $pickup)));
    $delivery = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $delivery)));


    $sql = "UPDATE shipping_details SET pickup_actual = ?, del_actual = ? WHERE sd_so_no = ?";          
    $q = $conn->prepare($sql);
    $q -> execute(array($pickup, $delivery, $so_no));          

    $sql = "UPDATE shipping_order SET so_status = 'shipped' WHERE so_no = ?";          
    $q = $conn->prepare($sql);
    $q -> execute(array($so_no));      

    $sql = "UPDATE truck SET tr_usage = 'Available' WHERE tr_pltno = (SELECT truck_no FROM shipping_order so WHERE so.so_no = ?) ";          
    $q = $conn->prepare($sql);
    $q -> execute(array($so_no));             

$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Transaction','Shipment', 'EDIT', 'Updated to SHIPPED - ID: '.$so_no. ', Actual Pickup: '.$pickup.', Actual Delivery: '.$delivery, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));

                 

echo json_encode($output);
$conn = null;
?>
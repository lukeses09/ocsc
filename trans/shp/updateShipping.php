<?php
include('../../maintenance/include/connect.php');
include('../../maintenance/include/translog.php');


   $so_no = $_POST['so_no'];
   $depDate = $_POST['depDate'];
   $depTime = $_POST['depTime'];


    // py no
    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('sd'.$year);      

    //fix time
    if(substr($depTime, 6)=='PM'){
        $i = 12+substr($depTime, 0, 2);
        $depTime = $i.':'.substr($depTime, 3, 2).':00';
    }
    else if(substr($depTime, 6)=='AM'){
        $depTime = substr($depTime, 0, 5).':00';
    }

    //concat date and time
    $departure = $depDate.' '.$depTime;
    //polish convert to datetime
    $departure = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $departure)));


    $sql = "INSERT INTO shipping_details(sd_no,sd_so_no,departure) VALUES(?,?,?)";          
    $q = $conn->prepare($sql);
    $q -> execute(array($id,$so_no,$departure));             

    $sql = "UPDATE shipping_order SET so_status = 'shipping' WHERE so_no = ?";          
    $q = $conn->prepare($sql);
    $q -> execute(array($so_no));  

    $sql = "UPDATE truck SET tr_usage = 'On Shipment' WHERE tr_pltno = (SELECT truck_no FROM shipping_order so WHERE so.so_no = ?) ";          
    $q = $conn->prepare($sql);
    $q -> execute(array($so_no));         



$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Transaction','Shipment', 'EDIT', 'Updated to SHIPPING - ID: '.$so_no. ', Departure: '.$departure, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));


                 

echo json_encode($output);
$conn = null;
?>
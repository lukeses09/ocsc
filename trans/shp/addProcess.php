

    <?php           // ESTABLISH CONNECTION TO MYSQL
include('../../maintenance/include/connect.php');
include('../../maintenance/include/translog.php');

                                     //FETCH ALL VARIABLES



    $rowCount = $_POST['rowCount'];
    $cont_no = $_POST['cont_no'];
    $qty = $_POST['qty'];

    $cust = $_POST['cust'];
    $clerk = $_POST['clerk'];
    $transdate = $_POST['transdate'];
    $discount = $_POST['discount'];   
    $pickup = trim(ucwords($_POST['pickup']));   
    $pickupReg = $_POST['pickupReg'];   
    $delivery = trim(ucwords($_POST['delivery']));   
    $deliveryReg = $_POST['deliveryReg'];   
    $cargo = trim(ucwords($_POST['cargo']));   
    $truck = $_POST['truck'];   
    $driver = $_POST['driver'];       
    $helper = $_POST['helper'];   
    $pickupCharge = $_POST['pickupCharge'];   
    $distance_pickup = $_POST['distance_pickup'];   
    $destiCharge = $_POST['destiCharge'];   
    $distance_deli = $_POST['distance_deli'];   
    $pickupEx = $_POST['pickupEx'];   
    $deliveryEx = $_POST['deliveryEx'];   
    $pickupTime = $_POST['pickupTime'];   
    $deliveryTime = $_POST['deliveryTime'];   
    $tax = $_POST['tax'];
    $addBal = $_POST['addBal'];
    $accNo;

    //if value is no-match make it empty for optional fields
    if($helper=='no-match')
        $helper='';
    if($discount=='no-match')
        $discount='';

    //fix datetime format
    //fix time
    if(substr($pickupTime, 6)=='PM'){
        $i = 12+substr($pickupTime, 0, 2);
        $pickupTime = $i.':'.substr($pickupTime, 3, 2).':00';
    }
    else if(substr($pickupTime, 6)=='AM'){
        $pickupTime = substr($pickupTime, 0, 5).':00';
    }

    if(substr($deliveryTime, 6)=='PM'){
        $i = 12+substr($deliveryTime, 0, 2);
        $deliveryTime = $i.':'.substr($deliveryTime, 3, 2).':00';
    }
    else if(substr($deliveryTime, 6)=='AM'){
        $deliveryTime = substr($deliveryTime, 0, 5).':00';
    }    
    //concat date and time
    $pickupEx = $pickupEx.' '.$pickupTime;
    $deliveryEx = $deliveryEx.' '.$deliveryTime;
    //polish convert to datetime
    $pickupEx = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $pickupEx)));
    $deliveryEx = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $deliveryEx)));

    // SO_NO ID
    $year = date('Y');
    $year = substr($year,2,3);
    $so_no =uniqid('so'.$year);     

    //Query get Client's Account No.
    $sql = "SELECT * FROM account WHERE acc_cust_id = ?"; //get acc_no
    $q = $conn->prepare($sql);
    $q -> execute(array($cust));
    $browse = $q -> fetchAll();
    foreach($browse as $fetch)
    { $accNo=$fetch['acc_no']; }

    /*----------------------------------------------------------------------*/
    //BEGIN INSERTION

    //INTO shipping_order
    $sql = "INSERT INTO shipping_order values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"; //INSERT recordd
    $q = $conn -> prepare($sql);
    $q -> execute(array($so_no, $transdate, $clerk, $cust, $pickup, $pickupReg, $delivery, $deliveryReg, $distance_pickup, 
        $distance_deli, $cargo, $truck, $driver, $helper, $pickupCharge, $destiCharge, $pickupEx, $deliveryEx, 
        $discount, $tax, 'pending'));


    //INTO account_record
    $arNo = uniqid('AR');        
    $sql = "INSERT INTO account_record values(?,?,?,?,?)"; //INSERT acc_record
    $q = $conn -> prepare($sql);
    $q -> execute(array($arNo,$accNo,$so_no, $addBal, 'active'));



    // INTO shipping_leg
    for($x=0; $x<$rowCount; $x++)
    {   
        $sl_no = uniqid('sl'.$year);    
        $sql = "INSERT INTO shipping_leg VALUES(?,?,?,?)";
        $q = $conn -> prepare($sql);
        $q -> execute(array($sl_no, $so_no, $cont_no[$x], $qty[$x]));
    }    

    //audit trails
$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Transaction','Shipment', 'CREATE', 'Created ID: '.$so_no, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));



$conn=null;
?>

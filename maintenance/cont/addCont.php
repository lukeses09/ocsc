

    <?php           // ESTABLISH CONNECTION TO MYSQL
    include('../include/connect.php');  
    include('../include/log.php');  

                                     //FETCH ALL VARIABLES
    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('co'.$year);   

    $name = $_POST['name'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $desc = $_POST['desc'];
    $rate = $_POST['rate'];
    $qty = $_POST['qty'];    

                                                                 // INSERT DATA TO DATABASE
$sql = "INSERT INTO container VALUES(?,?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);
$q -> execute(array($id,ucwords(trim($name)),trim($rate),ucwords(trim($height)),ucwords(trim($width)),ucwords(trim($desc)),trim($qty),'active'));

$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Maintenance','Container', 'CREATE', 'Created ID: '.$id. ', Name: '.$name.', Rate: '.$rate.', Qty: '.$qty, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));



$conn = null;
?>

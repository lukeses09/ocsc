

    <?php           // ESTABLISH CONNECTION TO MYSQL
    include('../include/connect.php');  
    include('../include/log.php');  

                                     //FETCH ALL VARIABLES
    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('ch'.$year);   

    $type = $_POST['type'];
    $measure = $_POST['measure'];
    $rate = $_POST['rate'];

                                                                 // INSERT DATA TO DATABASE
$sql = "INSERT INTO charge VALUES(?,?,?,?,?)";
$q = $conn -> prepare($sql);
$q -> execute(array($id,ucwords(trim($type)),ucwords(trim($measure)),trim($rate),'active'));


$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Maintenance','Charges', 'CREATE', 'Created ID: '.$id. ', Type: '.$type.', Measure: '.$measure.', Rate: '.$rate, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));



$conn = null;
?>

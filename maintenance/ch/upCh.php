

    <?php           // ESTABLISH CONNECTION TO MYSQL
   include('../include/connect.php');
   include('../include/log.php');

                                     //FETCH ALL VARIABLES
  
    $id = $_POST['idKey'];
    $type = $_POST['type'];
    $measure = $_POST['measure'];
    $rate = $_POST['rate'];

                                                                 // INSERT DATA TO DATABASE
$sql = "UPDATE charge SET charge_type=?, charge_measure=?,
charge_rate=? WHERE charge_id=?";

$q = $conn -> prepare($sql);
$q -> execute(array(ucwords(trim($type)),ucwords(trim($measure)),trim($rate),$id));

$year = date('Y');
$year = substr($year,2,3);
$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Maintenance','Charges', 'EDIT', 'Updated ID: '.$id. ', Type: '.$type.', Measure: '.$measure.', Rate: '.$rate, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));


$conn = null;

?>

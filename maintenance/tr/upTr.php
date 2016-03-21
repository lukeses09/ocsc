

    <?php           // ESTABLISH CONNECTION TO MYSQL
   include('../include/connect.php');
   include('../include/log.php');

                                     //FETCH ALL VARIABLES
  
    $id = $_POST['idKey'];
    $type = $_POST['type'];
    $model = $_POST['model'];
    $desc = $_POST['desc'];
    $usage = $_POST['usage'];

// INSERT DATA TO DATABASE
$sql = "UPDATE truck SET tr_type=?, tr_model=?, tr_desc=?,
tr_usage=? WHERE tr_pltno=?";

$q = $conn -> prepare($sql);
$q -> execute(array(ucwords(trim($type)),ucwords(trim($model)),ucwords(trim($desc)),ucwords(trim($usage)),$id));

$year = date('Y');
$year = substr($year,2,3);
$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Maintenance','Truck', 'EDIT', 'Updated Pltno: '.$pltno. ' Type: '.$type, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));

$conn = null;

?>

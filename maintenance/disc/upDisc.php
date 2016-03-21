

    <?php           // ESTABLISH CONNECTION TO MYSQL
   include('../include/connect.php');
   include('../include/log.php');

                                     //FETCH ALL VARIABLES
  
    $id = $_POST['idKey'];
    $name = $_POST['name'];
    $rate = $_POST['rate'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $start = date('Y-m-d', strtotime(str_replace('-', '/', $startDate)));
    $end = date('Y-m-d', strtotime(str_replace('-', '/', $endDate)));

                                                                 // INSERT DATA TO DATABASE
$sql = "UPDATE discount SET disc_name=?, disc_rate=?, 
disc_startDate=?, disc_endDate=? WHERE disc_id=?";

$q = $conn -> prepare($sql);
$q -> execute(array(ucwords(trim($name)),trim($rate),trim($start),trim($end),$id));

$year = date('Y');
$year = substr($year,2,3);
$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Maintenance','Discount', 'EDIT', 'Updated ID: '.$id. ' Name: '.$name.', Rate: '.$rate.'%', date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));

$conn = null;

?>



    <?php           // ESTABLISH CONNECTION TO MYSQL
   include('../include/connect.php');
   include('../include/log.php');

                                     //FETCH ALL VARIABLES
  
    $id = $_POST['idKey'];
    $name = $_POST['name'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $desc = $_POST['desc'];
    $rate = $_POST['rate'];
    $qty = $_POST['qty'];    

                                                                 // INSERT DATA TO DATABASE
$sql = "UPDATE container SET cont_name=?, cont_height=?,
cont_width=?, cont_description=?, cont_rate=?, cont_qty=? 
WHERE cont_no = ?";

$q = $conn -> prepare($sql);
$q -> execute(array(ucwords(trim($name)),ucwords(trim($height)),ucwords(trim($width)),ucwords(trim($desc)),trim($rate),trim($qty),$id));

    $year = date('Y');
    $year = substr($year,2,3);
$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Maintenance','Container', 'EDIT', 'Updated ID: '.$id. ', Name: '.$name.', Rate: '.$rate.', Qty: '.$qty, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));


$conn = null;

?>

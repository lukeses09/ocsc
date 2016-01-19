

    <?php           // ESTABLISH CONNECTION TO MYSQL
    include('../include/connect.php');       
	include('../include/log.php'); 
                          //FETCH ALL VARIABLES
    $id = $_POST['idKey'];

                                                                 // UPDATE DATA TO DATABASE
$sql = "UPDATE discount SET disc_status = ? WHERE disc_id = ?";
$q = $conn -> prepare($sql);
$q -> execute(array('inactive',$id));

$year = date('Y');
$year = substr($year,2,3);
$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Maintenance','Discount', 'REMOVE', 'Deleted ID: '.$id, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));


$conn = null;

?>  

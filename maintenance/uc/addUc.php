

    <?php           // ESTABLISH CONNECTION TO MYSQL
    include('../include/connect.php');  
	include('../include/log.php');


                                     //FETCH ALL VARIABLES
    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    $password = md5($password);    


                                                                 // INSERT DATA TO DATABASE
$sql = "INSERT INTO user_account VALUES(?,?,?,?)";
$q = $conn -> prepare($sql);
$q -> execute(array($username,ucwords(trim($password)),ucwords(trim($type)),'active'));

$year = date('Y');
$year = substr($year,2,3);
$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);
$q -> execute(array($trail_id,'Utilities','User Accounts', 'CREATE', 'Added user: '.$username.' Type: '.$type, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));

$conn = null;
?>

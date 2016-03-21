

    <?php           // ESTABLISH CONNECTION TO MYSQL
    include('../include/connect.php');  
    include('../include/log.php');

                                     //FETCH ALL VARIABLES
    $id = "emp-".date("Y")."-";    
    $empname = $_POST['empname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $phone = $_POST['phone'];  
    $dep = $_POST['dep'];
    $job = $_POST['job'];    
    $add = $_POST['add'];

            $sql = "SELECT * FROM employee";  //Generate ID
            $q = $conn -> prepare($sql);
            $q -> execute(array());
            $rowcount = $q -> rowCount();
            $rowcount++;
            $id = $id.str_pad($rowcount,4,"0",STR_PAD_LEFT);


                                                                 // INSERT DATA TO DATABASE
$sql = "INSERT INTO employee VALUES(?,?,?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);
$q -> execute(array($id,ucwords(trim($empname)),trim($email),trim($tel),trim($phone),ucwords(trim($dep)),ucwords(trim($job)),ucwords(trim($add)),'active'));


$year = date('Y');
$year = substr($year,2,3);
$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Maintenance','Employee', 'CREATE', 'Created ID: '.$id. ' Name: '.$empname, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));



$conn = null;
?>



    <?php           // ESTABLISH CONNECTION TO MYSQL
   include('../include/connect.php');
   include('../include/log.php');

                                     //FETCH ALL VARIABLES
  
    $id = $_POST['idKey'];
    $empname = $_POST['empname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $phone = $_POST['phone'];  
    $dep = $_POST['dep'];
    $job = $_POST['job'];    
    $add = $_POST['add'];

                                                                 // INSERT DATA TO DATABASE
$sql = "UPDATE employee SET emp_name=?, emp_email=?, emp_tel=?,
emp_phone=?, emp_dep=?, emp_job=?, emp_add=? WHERE emp_id = ?";

$q = $conn -> prepare($sql);
$q -> execute(array(ucwords(trim($empname)),trim($email),trim($tel),trim($phone),ucwords(trim($dep)),ucwords(trim($job)),ucwords(trim($add)),$id));

$year = date('Y');
$year = substr($year,2,3);
$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Maintenance','Employee', 'EDIT', 'Updated ID: '.$id. ' Name: '.$empname, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));


$conn = null;

?>

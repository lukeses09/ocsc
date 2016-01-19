

    <?php           // ESTABLISH CONNECTION TO MYSQL
   include('../include/connect.php');
    include('../include/log.php');
   
                                     //FETCH ALL VARIABLES
  
    $id = $_POST['idKey'];
    $type = $_POST['type'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $phone = $_POST['phone'];    
    $add = $_POST['add'];
    $CPname = $_POST['CPname'];
    $CPphone = $_POST['CPphone'];  

                                                                 // INSERT DATA TO DATABASE
$sql = "UPDATE customer SET cust_type=?, cust_name=?, cust_email=?, cust_tel=?,
cust_phone=?, comp_CPname=?, comp_CPphone=?, cust_add=? WHERE cust_id = ?";

$q = $conn -> prepare($sql);
$q -> execute(array(ucwords(trim($type)),ucwords(trim($name)),trim($email),trim($tel),trim($phone),ucwords(trim($CPname)),trim($CPphone),ucwords(trim($add)),$id));


$year = date('Y');
$year = substr($year,2,3);
$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Maintenance','Customer', 'EDIT', 'Updated ID: '.$id. ' Name: '.$name, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));



$conn = null;

?>

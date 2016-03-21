

    <?php           // ESTABLISH CONNECTION TO MYSQL
    include('../include/connect.php');  
    include('../include/log.php');

                                     //FETCH ALL VARIABLES
    $id = "cus-".date("Y")."-";    
    $type = $_POST['type'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $phone = $_POST['phone'];    
    $add = $_POST['add'];
    $CPname = $_POST['CPname'];
    $CPphone = $_POST['CPphone'];      

            $sql = "SELECT * FROM customer";  //Generate ID
            $q = $conn -> prepare($sql);
            $q -> execute(array());
            $rowcount = $q -> rowCount();
            $rowcount++;
            $id = $id.str_pad($rowcount,4,"0",STR_PAD_LEFT);


                                                                 // INSERT DATA TO DATABASE
$sql = "INSERT INTO customer VALUES(?,?,?,?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);
$q -> execute(array($id,ucwords(trim($name)),trim($phone),trim($tel),trim($email),ucwords(trim($add)),ucwords(trim($CPname)),trim($CPphone),ucwords(trim($type)),'active'));


$accNo = uniqid('ACC');

$sql = "INSERT INTO account VALUES(?,?,?)";
$q = $conn -> prepare($sql);      
$q -> execute(array($accNo,$id,'active'));    


$year = date('Y');
$year = substr($year,2,3);
$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Maintenance','Customer', 'CREATE', 'Created ID: '.$id. ' Name: '.$name, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));



$conn = null;
?>

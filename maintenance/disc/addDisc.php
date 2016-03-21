

    <?php           // ESTABLISH CONNECTION TO MYSQL
    include('../include/connect.php');  
    include('../include/log.php');  

                                     //FETCH ALL VARIABLES
    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('dc'.$year);   

    $name = $_POST['name'];
    $rate = $_POST['rate'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $start = date('Y-m-d', strtotime(str_replace('-', '/', $startDate)));
    $end = date('Y-m-d', strtotime(str_replace('-', '/', $endDate)));
                                                                 // INSERT DATA TO DATABASE
$sql = "INSERT INTO discount VALUES(?,?,?,?,?,?)";
$q = $conn -> prepare($sql);
$q -> execute(array($id,ucwords(trim($name)),trim($rate),trim($start),trim($end),'active'));

$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Maintenance','Discount', 'CREATE', 'Created ID: '.$id. ' Name: '.$name.', Rate: '.$rate.'%', date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));


$conn = null;
?>

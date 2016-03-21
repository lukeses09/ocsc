

    <?php           // ESTABLISH CONNECTION TO MYSQL
    include('../include/connect.php');  
    include('../include/log.php');  

                                     //FETCH ALL VARIABLES 

    $pltno = $_POST['pltno'];
    $type = $_POST['type'];
    $model = $_POST['model'];
    $desc = $_POST['desc'];
    $usage = $_POST['usage'];



$result=0;

$sql = "SELECT COUNT(*) as existence FROM truck WHERE tr_pltno = ?";
$q = $conn->prepare($sql);
$q -> execute(array($pltno));
$browse = $q -> fetchAll();
foreach($browse as $fetch){
    if($fetch['existence']>0)
        $result=1;
    else
        $result=0;
}

$output = $result;

if($result==0)
{
                   // INSERT DATA TO DATABASE
$sql = "INSERT INTO truck VALUES(?,?,?,?,?,?)";
$q = $conn -> prepare($sql);
$q -> execute(array($pltno,ucwords(trim($type)),ucwords(trim($model)),ucwords(trim($desc)),ucwords(trim($usage)),'active'));

$year = date('Y');
$year = substr($year,2,3);
$trail_id =uniqid('at'.$year);  

$sql = "INSERT INTO trails VALUES(?,?,?,?,?,?,?)";
$q = $conn -> prepare($sql);    
$q -> execute(array($trail_id,'Maintenance','Truck', 'CREATE', 'Created Pltno: '.$pltno. ' Type: '.$type, date('Y/m/d H:i:s'),  $_SESSION["ocsc_uname"]  ));
}





echo json_encode($output);
$conn = null;
?>



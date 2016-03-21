

    <?php           // ESTABLISH CONNECTION TO MYSQL
    include('../include/connect.php');  
                                     //FETCH ALL VARIABLES
    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('tx'.$year);   

    $name = $_POST['name'];
    $rate = $_POST['rate'];

                                                                 // INSERT DATA TO DATABASE
$sql = "INSERT INTO tax VALUES(?,?,?,?)";
$q = $conn -> prepare($sql);
$q -> execute(array($id,ucwords(trim($name)),trim($rate),'active'));
$conn = null;
?>

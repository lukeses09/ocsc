

    <?php           // ESTABLISH CONNECTION TO MYSQL
   include('../include/connect.php');
                                     //FETCH ALL VARIABLES
  
    $id = $_POST['idKey'];
    $name = $_POST['name'];
    $rate = $_POST['rate'];

                                                                 // INSERT DATA TO DATABASE
$sql = "UPDATE tax SET tax_name=?, tax_rate=? WHERE tax_id=?";

$q = $conn -> prepare($sql);
$q -> execute(array(ucwords(trim($name)),trim($rate),$id));
$conn = null;

?>

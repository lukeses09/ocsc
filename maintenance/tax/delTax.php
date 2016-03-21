

    <?php           // ESTABLISH CONNECTION TO MYSQL
    include('../include/connect.php');                             //FETCH ALL VARIABLES
    $id = $_POST['idKey'];

                                                                 // UPDATE DATA TO DATABASE
$sql = "UPDATE tax SET tax_status = ? WHERE tax_id = ?";
$q = $conn -> prepare($sql);
$q -> execute(array('inactive',$id));
$conn = null;

?>  

<?php
include('../../maintenance/include/connect.php');

   $cont_no = $_POST['cont_no'];

$sql = "SELECT cont_name, cont_rate FROM container
WHERE cont_status='active' 
AND (cont_qty > 2)
AND (cont_no = ?)";

$q = $conn->prepare($sql);
$q -> execute(array($cont_no));
$browse = $q -> fetchAll();
foreach($browse as $fetch){
$output[] = array ($cont_no, $fetch['cont_name'], $fetch['cont_rate']);				 	
}                      

echo json_encode($output);
$conn = null;
?>
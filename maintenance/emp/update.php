<?php
   include('../include/connect.php');

   $id = $_POST['idKey'];

$sql = "SELECT * FROM employee WHERE emp_id = ?";
$q = $conn->prepare($sql);
$q -> execute(array($id));
$browse = $q -> fetchAll();
foreach($browse as $fetch)
{
  $output[] = array ($fetch['emp_name'],$fetch['emp_email'],
  	$fetch['emp_tel'],$fetch['emp_phone'],$fetch['emp_dep'],
  	$fetch['emp_job'],$fetch['emp_add']);				 	
}                      

echo json_encode($output);
$conn = null;
?>
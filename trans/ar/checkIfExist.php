<?php
include('../../maintenance/include/connect.php');

   $name = $_POST['name'];

          $sql = "SELECT * FROM employee WHERE emp_name = ? AND emp_status='active' ";
          $q = $conn->prepare($sql);
          $q -> execute(array($name));
          $browse = $q -> fetchAll();
          $rowcount = $q -> rowCount();

            $output = $rowcount;         
                 

echo json_encode($output);
$conn = null;
?>
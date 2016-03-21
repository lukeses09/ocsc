<?php
    $key=$_GET['key'];
    $array = array();
include('../../maintenance/include/connect.php');
        $sql = "SELECT * FROM employee WHERE emp_status = 'active'
         AND emp_name LIKE '%{$key}%' 
         AND emp_job = 'Collector' ";
        $q = $conn->prepare($sql);
        $q -> execute();
        $browse = $q -> fetchAll();
        foreach($browse as $fetch)
        $array[] = $fetch['emp_name'];
    
    echo json_encode($array);
    $conn=null;
?>

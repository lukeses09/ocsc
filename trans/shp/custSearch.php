<?php
    $key=$_GET['key'];
    $array = array();
include('../../maintenance/include/connect.php');
        $sql = "SELECT * FROM customer WHERE cust_status = 'active' AND cust_name LIKE '%{$key}%'";
        $q = $conn->prepare($sql);
        $q -> execute();
        $browse = $q -> fetchAll();
        foreach($browse as $fetch)
        $array[] = $fetch['cust_name'];
    
    echo json_encode($array);
    $conn = null;
?>

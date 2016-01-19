<?php
    $key=$_GET['key'];
    $array = array();
include('../../maintenance/include/connect.php');

        $sql = "SELECT * FROM charge WHERE charge_status='active' 
        AND (charge_type = 'To Destination') 
        AND (charge_measure LIKE '%{$key}%')";
        $q = $conn->prepare($sql);
        $q -> execute();
        $browse = $q -> fetchAll();
        foreach($browse as $fetch)
        $array[] = $fetch['charge_measure'];
    
    echo json_encode($array);
    $conn = null;
?>

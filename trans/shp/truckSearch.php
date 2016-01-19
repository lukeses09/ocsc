<?php
    $key=$_GET['key'];
    $array = array();
include('../../maintenance/include/connect.php');

        $sql = "SELECT * FROM truck WHERE tr_status='active' AND tr_usage = 'Available' AND 
        tr_pltno LIKE '%{$key}%'";
        $q = $conn->prepare($sql);
        $q -> execute();
        $browse = $q -> fetchAll();
        foreach($browse as $fetch)
        $array[] = $fetch['tr_pltno'];
    
    echo json_encode($array);
    $conn = null;
?>

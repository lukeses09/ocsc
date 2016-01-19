<?php
    $key=$_GET['key'];
    $array = array();
include('../../maintenance/include/connect.php');

        $sql = "SELECT * FROM container WHERE cont_status='active' AND cont_qty > 0 AND
         cont_name LIKE '%{$key}%'";
        $q = $conn->prepare($sql);
        $q -> execute();
        $browse = $q -> fetchAll();
        foreach($browse as $fetch)
        $array[] = $fetch['cont_name'];
    
    echo json_encode($array);
    $conn = null;
?>

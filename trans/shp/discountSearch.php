<?php
    $key=$_GET['key'];
    $array = array();
include('../../maintenance/include/connect.php');
        $sql = "SELECT * FROM discount 
        WHERE disc_status = 'active' 
        AND ( DATEDIFF(CURDATE(),disc_startDate) >= 0 )
        AND ( DATEDIFF(disc_endDate,CURDATE()) >= 0 )
        AND disc_name LIKE '%{$key}%'";
        $q = $conn->prepare($sql);
        $q -> execute();
        $browse = $q -> fetchAll();
        foreach($browse as $fetch)
        $array[] = $fetch['disc_name'];
    
    echo json_encode($array);
    $conn = null;
?>

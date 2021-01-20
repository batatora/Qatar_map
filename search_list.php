<?php
    include_once ("connection.php");
    $witch_id = $_POST['witch_id'];
    $sql = "SELECT * FROM maps WHERE lookfor_id = ".$witch_id;
    $result = mysqli_query($conn, $sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    print json_encode($rows);
?>

//git commit commit!!!!!!

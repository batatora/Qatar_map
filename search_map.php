<?php
    include_once ("connection.php");

    $lookfor_id = $_POST['lookfor_id'];
    $witchone = $_POST['witchone'];
    $sql = "SELECT * FROM maps WHERE lookfor_id = ".$lookfor_id." AND witchone = '".$witchone."'";
    $result = mysqli_query($conn, $sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    print json_encode($rows);
?>

//git commit commit!!!!!!

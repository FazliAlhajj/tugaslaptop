<?php 

$conn = mysqli_connect("localhost", "root", "", "tokolaptop");

function query($query){
    global $conn;
    
    $data = mysqli_query($conn, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($data)){
        $rows[] = $row;
    }

    return $rows;
}

?>
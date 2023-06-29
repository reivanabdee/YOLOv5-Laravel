<?php 
include("connection.php");
function hapus ($id){

    global $db;
    mysqli_query($db,"DELETE FROM mhs WHERE id = $id");
    return mysqli_affected_rows($db); 
}


?>
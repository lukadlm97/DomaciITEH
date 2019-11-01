<?php

include "konekcija.php";
if($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["update"])){
    if(isset($_POST["name"])){
        $name = $_POST["name"];
    }
    $query = "UPDATE Athletes SET ";
}



?>
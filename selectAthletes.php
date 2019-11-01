<?php
if(!isset($_GET["id"])){
    echo "Unknow id.";
}else{
$temp = $_GET["id"];
include "konekcija.php";
$query = "SELECT* FROM athletes WHERE id='".$temp."'";

$result = $mysqli->query($query);

$row = $result->fetch_object();

$name = $row->Name;
$country = $row->Country;
$sport = $row->Sport;
$curYear = date('Y');
$year = $curYear-$row->YearOfBirth;



}



?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'openCon.php';

$data = file_get_contents("php://input");
$mid = json_decode($data);


$query0 = sprintf("DELETE FROM modelo WHERE id = %s ",$mid);
$result0 = mysqli_query($con,$query0);
if($result0){
    echo 'OK';
} else {
    echo "Não foi possivél Anular!";
}




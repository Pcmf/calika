<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'openCon.php';
$data = file_get_contents('php://input');
$dt = json_decode($data);
$parm = json_decode($dt->params);



$query = sprintf("DELETE FROM detpedcor where pedido=%s and modelo=%s and linha=%s",
        $parm->pedido, $parm->modelo,$parm->linha);
$result = mysqli_query($con,$query);
if($result){
    echo 'OK';
} else {
    echo $query; 
}

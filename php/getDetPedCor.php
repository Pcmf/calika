<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'openCon.php';
$data = file_get_contents('php://input');
$dt = json_decode($data);


$resp = array();
    $result1 = mysqli_query($con,sprintf("SELECT * FROM detpedcor "
            . " WHERE pedido=%s AND modelo=%s",$dt->pedido,$dt->modelo));
    if($result1){
        while ($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
            $row1['cor1'] = json_decode($row1['cor1']);
            $row1['cor2'] = json_decode($row1['cor2']);
            $row1['elem1'] = json_decode($row1['elem1']);
            $row1['elem2'] = json_decode($row1['elem2']);
            $row1['elem3'] = json_decode($row1['elem3']);
            $row1['qtys'] = json_decode($row1['qtys']);
            array_push($resp, $row1);
        }
        echo json_encode($resp);
    } 
<!DOCTYPE html>
<!--
Author: Theoderic Platt
Contributors: Moinul Morshed Porag Chowdhury
Date Last Modified: 03/30/2021
Description: Takes the name, label, and type of an item along with its metadata and creates an item in Openhab.
             Creates a thing to control the item. Links item to thing.
Includes: Item_handler.php
Included In: ---
Links To: ---
Links From: registration.php
-->
<html>
<body>
<?php
    include 'Item_handler.php';

    $debug = false;

    $data = $_POST['itemData'];
    $name  = $_POST['name'];
    $label = $_POST['label'];
    $type  = $_POST['type'];

    $data = stripslashes($data);
    $data = json_decode($data,true);
    if($debug)echo 'name: '.$name.'</br>label: '.$label.'</br>type: '.$type.'</br>UID: '.array_values($data)[4];
    itemCreate('localhost:8080',$usr,$psd,$name,$label,$type,$debug);
    inboxApprove('localhost:8080',$usr,$psd,array_values($data)[4],$debug);
    itemLink('localhost:8080',$usr,$psd,$name,str_replace(':','%3A',array_values($data)[4]),strtolower($type),$debug);


    header("Location: activedevices.php");
    exit();



?>
</body>
</html>


<?php

include("data_class.php");

$addnames=$_POST['addname'];
$addpass= $_POST['addpass'];
$addemail= $_POST['addemail'];
$addphone = $_POST['addphone']; 
$type= $_POST['type'];


$obj=new data();
$obj->setconnection();
$obj->addnewuser($addnames,$addpass,$addemail,$addphone,$type);

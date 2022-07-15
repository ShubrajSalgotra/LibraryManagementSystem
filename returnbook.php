<?php
include("data_class.php");

$returnbook=$_GET['returnid'];


$obj=new data();
$obj->setconnection();
$obj->returnbook($returnbook);
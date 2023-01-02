<?php
include_once 'Handler.php';
$Calender = new Calendar();
// print_r($_GET);
$startdate=$_GET['startdate'];
$enddate=$_GET['enddate'];
$now=$_GET['now'];

echo $Calender->event($startdate,$enddate,$now);

<?php
include_once 'Handler.php';
$Calender = new Calendar();
$startdate = $_GET['startdate'];
$enddate = $_GET['enddate'];
$now = $_GET['now'];
echo $Calender->event($startdate, $enddate, $now);

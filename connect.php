<?php
$connection = mysqli_connect("localhost","root","","hb_poultry");
//check for database connectivity
if (!isset($connection)){
    die("DB Connection failed!!!");
}
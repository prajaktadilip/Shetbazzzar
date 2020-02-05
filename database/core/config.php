<?php
$SERVERNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DBNAME="agriculture";

//create connection
$con= mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DBNAME);
//check connection
if(!$con)
{
    die($con);
}

<?php

$con=new mysqli('localhost','root','','bus ticket management system');


if(!$con){

    die(mysql_error($con));
}
?>
<?php
error_reporting(0);

include_once 'includes/dbconnection.class.php';
include_once 'includes/user.class.php';
include_once 'includes/session.class.php';

session::start();


// ----------------------- Template Loading -----------------------

function load_templates($name){
    include $_SERVER['DOCUMENT_ROOT']."/project/_templates/$name.php";
}


?>
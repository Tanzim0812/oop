<?php
require_once 'class/database.php';

$show= new db();

$id= base64_decode($_GET['id']);


$show->delete($id);


?>
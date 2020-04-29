<?php

require_once 'class/database.php';

$show= new db();

$id=($_GET['id']);
$yoo=$show->Updateprimary($id);


    
        if(isset($_POST['submitt'])){
            $show->Updatedone($_POST);
        }
    
    
    

?>
<html><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <?php
    while ($row = mysqli_fetch_array($yoo)) { ?>
    
    <form method="post">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="name" value="<?= $row['name']; ?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="email" value="<?= $row['email']; ?>">
        </div>
        
        <input type="submit" name="submitt" value="submit">
    </form>
    
    <?php }?>
    
    
    
</div>
    </body>
    
    


</html>

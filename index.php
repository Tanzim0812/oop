<?php
require_once 'class/database.php';

$show= new db();

if(isset($_POST['submit'])){
    
  $message=$show->insert($_POST);
}

$yo=$show->select();





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
    
    <form method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="email">
        </div>
        <div class="form-group">
            <label>Passsword</label>
            <input type="password" name="password" placeholder="password">
        </div>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if(isset($message)){
    
    ?>
    <div class="bg bg-success"><h3><?= $message; ?></h3></div>
    <?php }?>
    
    <table border>
        
        <tr>
            <th>name</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        while($row= mysqli_fetch_array($yo))
        {
        
        ?>
        
        <tr>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><a href="edit.php?id=<?= $row['id'] ;?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo base64_encode($row['id']) ;?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
    
    
    
</div>
    
   
</body>


</html>
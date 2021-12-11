<?php
  require('Book_controller.php');
  $uname=$_POST['user'];
  $password=$_POST['passw'];

  $view=getSingleticket($id);
  

  ?>
  <?php
$number=$_POST['num'];
 if(preg_match('/[^0-9]/',$number)){
    echo"Enter only numbers";
}

 ?>
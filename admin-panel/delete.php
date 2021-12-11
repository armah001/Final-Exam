<?php
include_once (dirname(__FILE__)).'\Book_controller.php';

if(isset($_GET['to'])){
    $deleteticket = deleteticket($_GET['to']);
    if($deleteticket){
        header("location: dashboard.php");
    }else{
        echo "something went wrong";
    }
}

?>
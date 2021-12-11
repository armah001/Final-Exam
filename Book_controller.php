<?php
//connect to post class
include 'Book_class.php';

// Inserting a new passenger
function addPassenger($Fname, $email, $address,$id,$country,$phone){
    $Book= new Book;

    $runQuery=$Book->Passenger_details($Fname, $email, $address,$id,$country,$phone);

    //check if it worked
    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}


function getTicketss(){
    // Create new post object
    $Book = new Book;
    
    // Run query
    $runQuery = $Book->gettickets();

    if($runQuery){
        
        $books = array();
        while($record = $Book->db_fetch()){
            $post[] = $record;
        }
        return $posts;
    }else{
        return false;
    }
}

function getSingleticket($dest){
    // Create new post object
    $Book = new Book;

    // Run query
    $runQuery = $Book->getticketsfromdestination($dest);

    if($runQuery){

        $books = array();
        while($record = $Book->db_fetch()){
            $posts[] = $record;
        }
        return $posts;
        
    }else{
        return false;
    }
}

function updateticket($dest){
    // Create new post object
    $Book = new Book;

    // Run query
    $runQuery = $Book->update_ticket($dest);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

function deleteTicket($dest){
    // Create new post object
    $Book = new Book;

    // Run query
    $runQuery = $Book->deleteticket($dest);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}
function Adminlogin($uname,$password){
    $admin= new Book;
    $runQuery = $admin->login($uname,$password);
    if($runQuery){
        $admins= array();
        while($record=$admin ->db_fetch()){
            $admins[]=$record;
        } return $admins;
    } else{
        return false;
    }

}
function create($price,$dest,$Origin,$class,$date,$airline,$flight){
    $Book= new Book;

    $runQuery=$Book->createticket($price,$dest,$Origin,$class,$date,$airline,$flight);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
    }

?>
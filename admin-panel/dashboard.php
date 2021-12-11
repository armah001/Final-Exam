
 <?php

include_once (dirname(__FILE__)).'\Book_controller.php';

?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BLUE TRAVEL AND TOUR</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        	<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.min.css">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
body {
    background: #f2f6e9;
}
.navbar {
    background:#6ab446;
}
.nav-link,
.navbar-brand {
    color: #fff;
    cursor: pointer;
}
.nav-link {
    margin-right: 1em !important;
}
.nav-link:hover {
    color: #000;
}
.navbar-collapse {
    justify-content: flex-end;
}
p{
    text-align: center;
}

.btn-primary {
  color: #fff;
  background-color: #ff8c00;
  border-color: #ff8c00;
}
      </style>  
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="..//index.php">Dashboard</a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="..//index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="..//aboutus.php">About Us</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">log Out</a>
                </li>
            </ul>
        </div>
    </nav>
<br>



<div class="available">
<table class="table table-bordered" id="dataTable" width="100" collspacing="0">
      <thead>
        <tr>
          <th>Origin</th>
          <th>Destination</th>
          <th>Departure_Date</th>
          <th>Class</th>
          <th>Airline_Name</th>
          <th>Flight_No</th>
          <!-- <th>Buy</th> -->
          
        </tr>
      <thead>
        <tbody>
            
            <?php
            
                function console_log($output, $with_script_tags = true) {
                    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
                ');';
                    if ($with_script_tags) {
                        $js_code = '<script>' . $js_code . '</script>';
                    }
                    echo $js_code;
                }
                    $posts = getTicketss();
                    
                    foreach($posts as $key => $value){
                    ?>   
                        <tr>
                            <td><?= $value['Departure']; ?></td>
                            <td><?= $value['Destination']; ?></td>
                            <td><?= $value['departure_date']; ?></td>
                            <td><?= $value['travel_class']; ?></td>
                            <td><?= $value['airline_name']; ?></td>
                            <td><?= $value['flight_no']; ?></td>
                            <!-- <td><a href="payment.phpid=<?= $value['Destination'] ?>" class="btn btn-danger btn-custom"> Buy</a> </td> -->
                        <td>
                            <form  method="POST">
                            <input type="button" value="Home" class="homebutton" id="btnHome" onClick="<?php header("Location: /create_ticket.php"); ?>" />
                                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                <input type="button" value="Home" class="homebutton" id="btnHome" onClick="<?php header("Location: /delete.php"); ?>" />
                                <input type="button" value="Home" class="homebutton" id="btnHome" onClick="<?php header("Location: update.php"); ?>" />
                                <input type="button" value="Home" class="homebutton" id="btnHome" onClick="<?php header("Location: create_ticket.php"); ?>" />
                            </form>

                            <!-- <form action="update.php" method="POST">
                            <input type="button" value="Home" class="homebutton" id="btnHome" onClick="<?php header("Location: /update.php"); ?>" />
                            </form> -->
                        </td>
                        </tr>
                        <?php
                        }
                    
                ?>    
        </tbody>
    </table>
  </div>

</body>
</html>

<?php
include_once (dirname(__FILE__)).'\Book_controller.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BLUE TRAVEL AND TOUR </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <style>
                      body {
    padding: 0;
    margin: 0;
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
body{
    text-align: center;
    
}
/* .login{
text-align: center;
padding: 1.5% 1.5%;
background-color: darkseagreen; /*it should be faded  
margin: 0 auto !important;
margin-top: 9rem !important;
text-shadow: white 0px 0px 2px;
width: 30%;
} 
.sbtn{
margin: 1.5rem 0;
color: white;
}
*/
.bi{
    color: black;
} 
.divider:after,
.divider:before {
  content: "";
  flex: 1;
  height: 1px;
  background: #eee;
}
.btn{
    background-color:#6ab446 !important;
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

    <h4>Update Ticket Details </h4>
    <div class="ticket-body">
          <form method="post" action="controller/courseedit.php" id="insert_form">
          
          <label>Destination</label>
          <input type="text" name="name" value="<?php echo $dest; ?>" id="name" class="form-control" />
          <br />
          <label>Departure Location</label>
          <input type="text" name="program" value="<?php echo $Origin; ?>" id="program" class="form-control">
          <br />  
          <label>Departure Date</label>
          <input type="date" name="duration" value="<?php echo $date; ?>" id="duration" class="form-control" />
          <br />  
          <label>Travel Class</label>
          <input type="number" name="price" value="<?php echo $class; ?>" id="price" class="form-control" />
          <br />
          <input type="hidden" name="id" value=<?php echo $id;?>>
          <input type="submit" name="insert" id="insert" value="Update" class="btn btn-success" />
          </form>
        </div>




</body>
</html>    
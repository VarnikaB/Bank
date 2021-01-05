<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Banking System</title>
  </head>
    <style>
    .activity img{
        height:300;
    }
    .container-fluid{
        position:relative;
    }
    
    </style>
  <body>
  <?php
  include 'header.php';
  ?>
  
      <div class="container-fluid min-vh-100">
      <!--Intro-->
            <div class="row intro py-1" style="background-color: bisque;">
              <div class="col-sm-12 col-md img text-center">
              <caption>
                    <h4><em>Welcome to SPARKS BANK</em></h4>
                </caption>
                <img src="img/bank.png" class="img-fluid pt-2">
                
              </div>
            </div>

      <!-- Links -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.png" class="img-fluid" >
                    <br>
                    <a href="newuser.php"><button class="btn btn-primary"><b>CREATE USER</b></button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.png" class="img-fluid" >
                    <br>
                    <a href="transfer.php"><button  class="btn btn-primary"><b>Make a Transaction</b></button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.png" height="256">
                    <br>
                    <a href="history.php"><button  class="btn btn-primary"><b>Transaction History</b></button></a>
                  </div>
            </div>
      </div>
      <?php require_once "footer.php"; ?>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
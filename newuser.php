<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body>
<?php
    include 'mysqli.php';
    if(isset($_POST['submit'])){
       
        $name=$_POST['name'];
        $email=$_POST['email'];
        $balance=$_POST['balance'];
        $sql="Insert into customer (name,email,balance) values('{$name}','{$email}','{$balance}')";
        $result=mysqli_query($conn,$sql);
        
        if($result){
            echo "hi";
                echo "<script> alert('Hurray! User created');
                                window.location='transfer.php';
                        </script>";
                        
    }
  }
?>

<?php
  include 'header.php';
?>

        <h2 class="text-center pt-4">Create a User</h2>
        <br>

  <div class="background">
  <div class="container min-vh-100">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        
        <div class="screen-body-item">
          <form class="form" method="post">
            <div class="form-group">
              <input class="form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="form-group button">
              <input class="form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once "footer.php"; ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
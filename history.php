<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>
<style>
td{
    text-align: center;
}
table{
    background-color: bisque;
}
th{
    background-color: beige;
}
table,td,th{
            border: 2px solid black;
        }
        
</style>
<body>

<?php
  include 'header.php';
?>

	<div class="container min-vh-100">
        <h2 class="text-center pt-4">Transaction History</h2>
        
       <br>
        <div class="table-responsive-sm">
            <table class="table table-hover table-condensed table-striped">
                <thead>
                    <tr>
                        <th class="text-center">T.No.</th>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Receiver</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Date &amp; Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        include 'mysqli.php';

                        $sql ="select * from transfer";

                        $query =mysqli_query($conn, $sql);

                        while($rows = mysqli_fetch_assoc($query))
                        {
                    ?>

                        <tr>
                        <td class="py-2"><?php echo $rows['TRANSACTION_ID']; ?></td>
                        <td class="py-2"><?php echo $rows['FORM_ID']; ?></td>
                        <td class="py-2"><?php echo $rows['TO_ID']; ?></td>
                        <td class="py-2"><?php echo $rows['AMOUNT']; ?> </td>
                        <td class="py-2"><?php echo $rows['dt']; ?> </td>
                            
                    <?php
                        }

                    ?>
                </tbody>
            </table>
            <center><a href="transfer.php"><button class="btn btn-primary" ><b>Back</b></button></a></center>
        </div>
    </div>
    <?php require_once "footer.php"; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
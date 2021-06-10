<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="css/index.css" rel="stylesheet" type="text/css" />
  <title>Transaction History</title>
</head>

<body style="background-color:Aliceblue">
  <?php include 'header-footer.php' ?>
  <br><br><br>
  <h2>
    <center>
      TRANSACTION HISTORY
    </center>
  </h2>
  <div class="container">


    <div class="table-responsive-sm">
      <table class="table table-hover  table-bordered">
        <thead>
          <tr>
            <th class="text-center">S.No.</th>
            <th class="text-center">Sender</th>
            <th class="text-center">Receiver</th>
            <th class="text-center">Amount</th>
            <th class="text-center">Date & Time</th>
          </tr>
        </thead>
        <tbody>
          <?php include 'configure.php';
           $sql="SELECT *FROM transaction";
           $result=mysqli_query($conn,$sql);
           while($rows=mysqli_fetch_assoc($result)){

          ?>
          <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
          </tr>
          <?php
          }

      ?>
        </tbody>
      </table>

    </div>
  </div>
</body>

</html>

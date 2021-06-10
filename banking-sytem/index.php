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
  <title>Welcome to YOUR bank</title>
</head>

<body style="background-color:Aliceblue">



  <?php
  include 'header-footer.php';
  ?>
  <br><br><br>
  <!-- Introduction section -->
  <div class="container-fluid">
    <div class="heading text-center my-5">

      <center style="font-color:steelgray">

        <h1>Welcome to Your Bank!!!</h1>
      </center>
      <img src="img/bankk.jpg" class="img">
    </div>
  </div>
  <br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-xs-3">
        <p> Click to create new Users Account.</p>
        <a href="create-user.php" style="font-color:white"><button>Create User</button></a>

      </div>
      <div class="col-xs-3">
        <p> Click to view Users</p>
        <a href="view-users.php" style="font-color:white"><button>View User</button></a>
      </div>

      <div class="col-xs-3">
        <p> Click to Transfer Money</p>
        <a href="transfer-money.php" style="font-color:white"><button>Transfer Money</button></a>

      </div>
      <div class="col-xs-3">
        <p>Click to view Transaction History. </p>
        <a href="transactionhistory.php" style="font-color:white"><button>Transaction History</button></a>
      </div>
    </div>

  </div>


</body>

</html>

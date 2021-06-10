<!doctype html>
<html lang="en">

<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="css/index.css" rel="stylesheet" type="text/css" />
  <title>Create User</title>
</head>

<body style="background-color:Aliceblue">
  <?php
    include 'configure.php';
    if(isset($_POST['submit']))
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $balance=$_POST['balance'];
      $sql="insert into users(name,email,balance) value('{$name}','{$email}','{$balance}')";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
        echo "<script> alert('Congratulation! User account created .Welcome!!!');
                                window.location='transfer-money.php';
                      </script>";

      }

    }
    ?>


  <?php
include 'header-footer.php';
   ?>
  <br><br><br><br><br>
  <div class="container">

    <div class="row">
      <div class="col-xs-4 col-xs-offset-4">
        <div class="panel " style="background-color:#cce6ff">
          <div class="panel-heading" style="background-color:#cce6ff" style="font-color:darkgray">
            <h3>
              <center>
                <b><u>Create Users Account</u></b>
              </center>
            </h3>
          </div>
          <div class="panel-body">
            <form action="create-user.php" method="post">
              <div class="form-group">
                Name : <input type="text" placeholder="Enter Users Name" class="form-control" name="name" required />
                Email : <input type="email" placeholder="Enter Users Email" class="form-control" name="email" required />
                Balance : <input type="number" placeholder="Enter Balance" class="form-control" name="balance" required /><br>
                <input class="btn btn-primary btn-block" type="submit" value="Create User Account" name="submit"></input>

              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</body </html>

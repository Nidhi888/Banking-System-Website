<?php include 'configure.php' ?>
<?php if(isset($_POST['submit'])){
  $from=$_GET['id'];
  $to=$_POST['to'];
  $amount=$_POST['amount'];

  $sql="SELECT *FROM users where id=$from";
  $result=mysqli_query($conn,$sql);
  $sql1=mysqli_fetch_array($result);

  $sql= "SELECT *FROM users where id=$to";
  $result=mysqli_query($conn,$sql);
  $sql2=mysqli_fetch_array($result);


    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }
    else if($amount==0)
    {
      echo '<script type="text/javascript">';
      echo ' alert("Zero amount cannot be trasfered")';  // showing an alert box.
      echo '</script>';
    }
    else if ($amount>$sql1['balance'])
    {

        echo '<script type="text/javascript">';
        echo ' alert("Not sufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    else{
      $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);


                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);

      $sender=$sql1['name'];
      $receiver=$sql2['name'];
      $sql="INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES('$sender','$receiver','$amount')";
      $result=mysqli_query($conn,$sql);
      if($result){
        echo "<script> alert('Transaction Successful');
                                     window.location='transactionhistory.php';
                           </script>";

      }
      $newbalance=0;
      $amount=0;
    }
}
?>
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
</head>

<body style="background-color:Aliceblue">
  <?php include 'header-footer.php' ?>
  <br><br><br>
  <h2>
    <center>
      Transfer Money
    </center>
  </h2>
  <br><br>
  <div class="container">
    <?php
      include 'configure.php';
       $uid=$_GET['id'];
       $sql="SELECT*FROM users where id=$uid";
       $result=mysqli_query($conn,$sql);
       if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $row=mysqli_fetch_assoc($result);


       ?>
    <form method="post" name="tcredit" class="tabletext">
      <table class="table table-striped table-condensed table-bordered">
        <thead>
          <tr>
            <td> ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>BALANCE</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['balance']; ?></td>
          </tr>
        </tbody>
      </table>
      <br><br>
      <label>Transfer to :</label>
      <select name="to" class="form-control" required>

        <option value="" disabled selected>Choose</option>

        <?php
           include 'configure.php';
           $sid=$_GET['id'];
           $sql="SELECT *FROM users where id!=$sid";
           $result=mysqli_query($conn,$sql);
           if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }

           while($rows=mysqli_fetch_assoc($result)){
          ?>
        <option class="table" value="<?php echo $rows['id']; ?>">
          <?php echo $rows['name']; ?> Balance(
          <?php echo $rows['balance']; ?>)
        </option>
        <?php
                }
            ?>
        <div>
      </select>
      <br>
      <br> <label>Amount:</label>
      <input type="number" class="form-control" name="amount" required>
      <br><br>
      <div class="text-center">
        <button class="btn mt-3" name="submit" type="submit" id="myBtn">Transfer</button>
      </div>




    </form>
  </div>
</body>

</html>

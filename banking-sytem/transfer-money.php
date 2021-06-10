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
  <link href="css/table.css" rel="stylesheet" type="text/css" />
  <title>Transfer Money</title>
</head>

<body style="background-color:Aliceblue">
  <?php
        include 'configure.php';
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn,$sql);
    ?>
  <?php include 'header-footer.php' ?>
  <br><br>
  <div class="container">
    <center>

      <h2>Transfer Money</h2>
    </center>
    <br>
    <div class="row">
      <div class="col">
        <div class="table-responsive-sm">
          <table class="table table-hover table-sm  table-bordered ">
            <thead>
              <tr>
                <th scope="col" class="text-center ">ID</th>
                <th scope="col" class="text-center ">NAME</th>
                <th scope="col" class="text-center ">E-MAIL</th>
                <th scope="col" class="text-center ">BALANCE</th>
                <th scope="col" class="text-center ">OPERATION</th>
              </tr>
            </thead>
            <tbody>
              <?php
                          while($row=mysqli_fetch_assoc($result) ){
                          ?>
              <tr>
                <td class="text-center "><?php echo $row['id'];?></td>
                <td class="text-center "><?php echo $row['name'];?></td>
                <td class="text-center "><?php echo $row['email'];?></td>
                <td class="text-center "><?php echo $row['balance'];?></td>
                <td class="text-center "><a href="selecteduserdetail.php?id= <?php echo $row['id'] ;?>"> <button type="button" class="btn">Send Money</button></a></td>



              </tr>
              <?php } ?>

            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

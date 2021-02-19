<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">

  <title>Basic Banking System</title>
</head>

<body style="background-color : 	#d4b590 ;" ;>
  <?php
  include 'navbar.php';
  ?>

  <div class="container-fluid">

    <section id="main" class="coloured-section">
      <div class="row intro py-1" style="background-color: #008080;">
        <div class="col-sm-5 col-md">
          <div class="heading text-center my-5" style="color: #008080 ;">

            <h1>
              
              WELCOME TO THE SPARKS FOUNDATION BANK
              <img src="img/BANK2.png" width="100px" height="100px">
            </h1>
          </div>
    </section>

    <div class="row activity text-center">
      <div class="col-md act">
        <img  src="img/adduser.png" class="img-fluid"width="350px" height="350px">
        <br>
        <br>
        </br>
        <a href="createuser.php"><button style="background-color : #008080;">CREATE USER</button></a>
      </div>
      <div class="col-md act">
        <img  src="img/transfer123.png" class="img-fluid"width="310px" height="310px"  >

        <br>
        <br>
        </br>
        <br>
        </br>
        <a href="transfermoney.php"><button style="background-color : #008080;">MAKE TRANSACTION</button></a>
      </div>
      <div class="col-md act">
      <img  src="img/transfer12.png" class="img-fluid"width="390px" height="390px">
        <br>
        <a href="transactionhistory.php"><button style="background-color : #008080;">TRANSACTION HISTORY</button></a>
      </div>
    </div>
  </div>
  <footer class="text-center mt-5 py-2">
    <footer id="footer" class="coloured-section">
      

      <p>&copy FEB 2021. Made by <b>G PRASHANTH</b>
      <p> At The Sparks Foundation</p>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
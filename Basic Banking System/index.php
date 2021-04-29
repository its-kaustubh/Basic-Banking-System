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

    <title>BIG MONEY BANK</title>
  </head>
  
  <body>
  <body style="background-color:#55DCE4;">
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5"><br><br>
                  <h3>Welcome to</h3>
                  <h1 style="color:#FF0E0E;">BIG MONEY BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act"><br>
                    <img src="img/user.png" class="img-fluid" width="217" height="217">
                    <br><br>
                    <a href="createuser.php"><button>Create a User</button></a>
                  </div>
                  <div class="col-md act"><br>
                    <img src="img/transfer.png" class="img-fluid" width="215" height="215">
                    <br>
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act"><br>
                    <img src="img/hist.jpg" class="img-fluid" width="257" height="257">
                    <br><br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
                  <div class="col-md act">
                    <br><br>
                    <img src="img/about.jpeg" class="img-fluid" width="323" height="323">
                    <br><br><br>
                    <a href="about.php"><button>About Us</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021, BIG MONEY BANK <br> This website is made and maintained by <b>KAUSTUBH PATIL</b> </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
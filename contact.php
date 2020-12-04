<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Portfolio - Quentin Laplace D'olonde</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script src="mail.js"></script>


  </head>
<body>

<?php
  session_start();
?>
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg p-4">
    <div>QUENTIN LAPLACE D'OLONDE</div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto nav-header">
        <li class="nav-item ">
          <a class="nav-link" href="index.html">RETURN HOME</a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="offset-4"></div>
    <div class="col-lg-4">
      <div class="school-title">
        CONTACT FORM
      </div>
      <div class="trait">
      </div>
    </div>
  </div>
</div>


  <div class="form">
    <form method="POST" action="mail.php" id="needs-validation">
      <div class="row">
        <div class="col-lg-6">
          <img src="img/email.png" class="img-fluid img-email" alt="Responsive image">

        </div>


        <div class="col-lg-6" id="formulaire">
          <div class="form-contact-title">
            Get in touch
          </div>
            <div class="form-row">
              <div class="col-md-6 mb-6">
                <label for="validationTooltip01">First name</label>
                <input type="text" class="form-control" placeholder="First name" id="prenom" name="prenom">
                <div class="first valid-tooltip">
                  Looks good!
                </div>
                <div class="firstIn invalid-tooltip">
                  Please enter a correct First Name.
                </div>
              </div>
              <div class="col-md-6 mb-6">
                <label for="validationTooltip02">Last name</label>
                <input type="text" class="form-control" placeholder="Last name" id="nom" name="nom">
                <div class="last valid-tooltip">
                  Looks good!
                </div>
                <div class="lastIn invalid-tooltip">
                  Please enter a a correct Last Name.
                </div>
              </div>

              <div class="col-md-12 mb-12 mt-4">
                <label for="validationTooltipUsername">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                  </div>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email" aria-describedby="validationTooltipUsernamePrepend">
                  <div class="email valid-tooltip">
                    Looks good!
                  </div>
                  <div class="emailIn invalid-tooltip">
                    Please enter a valid e-mail.
                  </div>
                </div>
              </div>
                <div class="col-md-12 mb-12 mt-4">
                  <label for="validationTooltip02">Last name</label>
                  <textarea class="form-control" id="textarea" name="textarea" rows="3"></textarea>
                  <div class="text valid-tooltip">
                    Looks good!
                  </div>
                  <div class="textIn invalid-tooltip">
                    Use only alphanumeric.
                  </div>
                </div>

          </div>
          <button type="submit" class="btn btn-submit btn-primary mt-4">Submit</button>

 
        </div>
      </div>
    </form>
    <?php
  if(isset($_SESSION["msg"])){
    if($_SESSION["msgN"] == 1){
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      <strong class='mr-3'>Error</strong>".$_SESSION["msg"]."
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
      </button>
      </div>";
    }
    else{
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong class='mr-3'>Congrat</strong>".$_SESSION["msg"]."
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
      </button>
      </div>";
    }
  }
  unset($_SESSION["msgN"]);
  unset($_SESSION["msg"]);
?>
  </div>

  






  <footer id="footer">


    <div class="nom-dev ">QUENTIN LAPLACE D'OLONDE</div>

    <div class="credit mt-10">Copyright &copy 2020 Quentin Laplace D'olonde</div>
</footer>





</body>

</html>
<?php include "login-kontrol.php";?>

<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Login</title>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="images/user.png" alt="Turgay Teymurov" title="Turgay Teymurov">
                <span class="text text-right hidden-xs"><p>Turgay Teymurov</p></span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> 
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.html"><b>Anasayfa</b></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="hakkimda.html"><b>Hakkımda</b></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="ozgecmis.html"><b>Özgeçmiş</b></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="sehrim.html"><b>Şehrim</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="takimimiz.html"><b>Takmımız</b></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="login.php"><b>Login</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="iletisim.html"><b>İletişim</b></a>
                        </li>
                     </ul>
                </div>
                </div>
              </nav>
            </div>
        </header>
 
        <form class="" action="login-kontrol.php" method="post">
            <div class="form">
            <input class="info" type="text" name="mail" placeholder="E-posta adresinizi giriniz" value="" required><br>
            <input class="info" type="password" name="pass" placeholder="Parolanızı Giriniz" value="" required><br>
            <input type="submit" name="gonder" value="Giriş"><br>
            </div>
        </form>  
        
        <div class="container">
            <div class="row margin-bottom-login">
                <div class="col-md-12">
                    <br><br><br><h5>Üyelik Sistememimiz şuanda sadece admin için vardır</h5>
                </div>
            </div>
            <div class="row margin-bottom-login">
                <div class="col-md-12">
                    <br><h6>Yakın zamanda kullanıcılar içinde üyelik sistemi gelecektir.</h6>
                </div>
            </div>
        </div>
        <div class="footer text-center">
            <p>Made by Turgay Teymurov </p>
            </div>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/Login.css">
  <script src="../js/login.js"></script>
  <title>İstanbul</title>
  <style>
    input {
      width: 80%;
      align-items: center;
      padding: 10px 0px;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .login-in {
      background: white;
      border: 1px hsl(0, 5%, 73%) solid;
      border-radius: 10px;
      width: 70%;
    }

    .login-h1 {
      color: #212529;
    }

    button {
      margin-left: 37%;
    }
  </style>
</head>

<body>
  <div class="container-fluid backgroundimg">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light m-0 pl-0 pr-0">
          <h1 class="display-5">İstanbul ve Ben</h1>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mt-2 ml-5">
              <li class="nav-item active">
                <a class="nav-link" href="../html/index.html">Hakkında</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="../html/Eğitim-Bilgileri.html">Özgeçmiş</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="../html/Şehrim.html">Şehrim</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="../html/Mirasımız.html">Mirasımız</a>
              </li>
            </ul>
            <div class=" justify-content-lg-end" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto justify-content-lg-end mt-2">
                <li class="nav-item active">
                  <a class="nav-link mr-2" href="../html/İletişim.html">İletişim</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link mr-5" href="../html/Login.html"><span class="text-info">Giriş</span></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p style="text-align: center;">
        <?php 
        if($_POST["isim"]==""||$_POST["email"]==""||$_POST["konu"]==""||$_POST["mesaj"]==""||$_POST["cinsiyet"]==null)
        {
          header("refresh:3; ../index.html");
        }
        ?>
        <table class="table table-hover" style="background-color: gray;">
          <thead>
            <tr>
              <th>Ad</th>
              <th>Email</th>
              <th>Cinsiyet</th>
              <th>Yaş</th>
              <th>Konu</th>
              <th>Mesaj</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $_POST["isim"]?></td>
              <td><?php echo $_POST["email"]?></td>
              <td><?php echo $_POST["cinsiyet"]?></td>
              <td><?php echo $_POST["yas"]?></td>
              <td><?php echo $_POST["konu"]?></td>
              <td><?php echo $_POST["mesaj"]?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>Hakkında</h6>
          <p class="text-justify">İstanbul ve Ben websitesi kendimi ve İstanbulu anlatmak için oluşturduğum bir
            websitedir. </p>
        </div>
        <div class="col-xs-6 col-md-3">
          <h6>Site Haritası</h6>
          <ul class="footer-links">
            <li><a href="Eğitim-Bilgileri.html">Özgeçmiş</a></li>
            <li><a href="Şehrim.html">Şehrim</a></li>
            <li><a href="Mirasımız.html">Mirasımız</a></li>
            <li><a href="İletişim.html">İletişim</a></li>
            <li><a href="Login.html">Giriş</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Sosyal Medya</h6>
          <ul class="footer-links">
            <li><a href="https://www.instagram.com/burak_aciker/?hl=tr">İnstagram</a></li>
            <li><a href="https://www.facebook.com/burak.ack/">Facebook</a></li>
            <li><a href="https://www.linkedin.com/in/burak-a%C3%A7%C4%B1ker-615a85207/">Linkedin</a></li>
            <li><a href="https://github.com/burakack">Github</a></li>
            <li><a href="https://steamcommunity.com/id/Burakack">Steam</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
  </footer>
</body>

</html>
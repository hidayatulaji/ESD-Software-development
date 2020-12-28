<?php

require_once("config.php");
if(isset($_POST['daftar'])){

  // filter data yang diinputkan
  $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
  $no_hp = filter_input(INPUT_POST, 'no_hp', FILTER_SANITIZE_BIGINT);
  // enkripsi password
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


  // menyiapkan query
  $sql = "INSERT INTO user (nama, email, no_hp, password) 
          VALUES ('$nama','$email','$no_hp','$password')";
  $stmt = $conn->prepare($sql);

  // bind parameter ke query
  $params = array(
      ":name" => $nama,
      ":email" => $email,
      ":no_hp" => $no_hp,
      ":password" => $password
  );

  // eksekusi query untuk menyimpan ke database
  $saved = $stmt->execute($params);

  // jika query simpan berhasil, maka user sudah terdaftar
  // maka alihkan ke halaman login
  if($saved) header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SEWA HOTEL</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->

<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.register-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  width: 30%;
  border: 0;
  padding: 10px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
    background: #e7ffff;    
}
</style>
</head>
<body>
 <!-- main -->
 <header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#f8f9fb;">
                <a class="navbar-brand" href="#">WAD Beauty</a>
                        <div class="collapse navbar-collapse justify-content-end"id="navbarTogglerDemo01">
                    <ul class="nav justify-content-end">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                            <a class="nav-link btn-light" href="Login.html">Login</a>
                            <!--<button type="button" class="btn btn-light" href="#">Login</button>-->
                            </li>
      
                            <li class="nav-item">
                                <a class="nav-link btn-light" href="Registrasi.html">Register</a>
                            <!--<button type="button" class="btn btn-light" href="#">Register</button>-->
                            </li>
                        </ul>
                    </div>
                </div>
              </nav>
    </header>
    <div class="container">
            <div class="row">
                <div class="col-sm"><br>
                    <div class="card; shadow p-3 mb-5 bg-white rounded" style="width: 30rem; margin: auto;">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">Register</h5><hr>
                            <form action="dashboard utama.php" method="post" >
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Lengkap" ><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1">E-mail</label>
                                    <input type="email" class="form-control" placeholder="Masukkan Alamat E-mail"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1">No. Handphone</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nomor Handphone"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1">Kata Sandi</label>
                                    <input type="password" class="form-control" placeholder="Buat Kata Sandi"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1">Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control" placeholder="Konfirmasi Kata Sandi"><br>
                                </div>
                            </div>

                            </form>
                            <a class="nav-link btn btn-primary center-block" href="#">Daftar</a><br>
                            <!--<button type="button" class="btn btn-primary center-block" href="#">Daftar</button>
                            <button type="submit" class="btn btn-primary center-block" href="#">Daftar</button><br>-->
                            <p style="text-align: center;">Sudah punya akun ?
                                <a href="Login.php" >Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
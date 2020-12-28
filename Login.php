<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body style="background-color: #e8fafe">
        <div class="shadow-sm">

            <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#f8f9fb;">
                <a class="navbar-brand" href="#">SEWA HOTEL</a>
                        <div class="collapse navbar-collapse justify-content-end"id="navbarTogglerDemo01">
                    <ul class="nav justify-content-end">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link btn-light" href="Login.php">Login</a>
                            <!--<button type="button" class="btn btn-light" href="#">Login</button>-->
                            </li>
      
                            <li class="nav-item">
                                <a class="nav-link btn-light" href="Registrasi.php">Register</a>
                            <!--<button type="button" class="btn btn-light" href="#">Register</button>-->
                            </li>
                        </ul>
                    </div>
                </div>
              </nav>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm"><br>
                    <div class="card; shadow p-3 mb-5 bg-white rounded" style="width: 30rem; margin: auto;">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">Login</h5><hr>
                            <form action="dashboard utama.php" method="post" >
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1">E-mail</label>
                                    <input type="email" class="form-control" placeholder="Masukkan Alamat E-mail"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1">Kata Sandi</label>
                                    <input type="password" class="form-control" placeholder="Buat Kata Sandi"><br>
                                </div>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>

                            </form>
                            <a class="nav-link btn btn-primary center-block" href="Index.php">Login</a><br>
                            <!--<button type="button" class="btn btn-primary center-block" href="#">Login</button>
                            <button type="submit" class="btn btn-primary center-block" href="#">Daftar</button><br>-->
                            <p style="text-align: center;">Belum punya akun ?
                                <a href="Registrasi.html" >Registrasi</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
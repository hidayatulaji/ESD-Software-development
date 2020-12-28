<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body style="background-color: white">
        <div class="shadow-sm">

            <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#f8f9fb;">
                <a class="navbar-brand" href="Index.php">SEWA HOTEL</a>
                        <div class="collapse navbar-collapse justify-content-end"id="navbarTogglerDemo01">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                </svg>
                                <!--<a class="nav-link btn-light" href="Login.php">Login</a>
                            <button type="button" class="btn btn-light" href="#">Login</button>-->
                            </li>
                        </ul>
                        Selamat Datang,
                        <div class="dropdown">
                            <a class="nav-link btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Nama Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="Profile.php">Profile</a>
                              <a class="dropdown-item" href="Login.php">Logout</a>
                            </div>
                          </div>
                    </div>
                </div>
              </nav>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm"><br>
                    <h1 style="text-align: center;">Profile</h1>
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
                </div>
            </div>
        </div>
    </body>
</html>
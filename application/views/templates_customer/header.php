<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Hilal Rental Car</title>
      <link rel="stylesheet" href="style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/273cd879e5.js" crossorigin="anonymous"></script>  
      <link href="<?php echo base_url('assets/assets_shop/') ?>" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('assets/assets_shop/') ?>css/main.css" rel="stylesheet" />
   
      <script src="https://kit.fontawesome.com/273cd879e5.js" crossorigin="anonymous"></script>  
      <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

    </head>
    <body>
        <header class="p-2 bg-dark text-white" >
            <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-11 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="#" class="nav-link px-0 text-white">Hubungi Kami : +(62) 8569298375</a></li>
                </ul>
                <div class="text-end">
                <?php if ($this->session->userdata('nama')) { ?>
                <a class="nav-link" href="<?php echo base_url('auth/logout')  ?>">Welcome <?php echo $this->session->userdata('nama')  ?><span class="btn btn-sm btn-warning">Logout</span></a>
                <a class="nav-link" href="<?php echo base_url('auth/ganti_password')  ?>"><span class="btn btn-sm btn-primary">Ganti password</span></a>
                <?php } else { ?>
                <button type="button" class="btn btn-outline-light me-2"><a href="<?php echo base_url('auth/login')  ?>" style="text-decoration: none; color: white;">Login</a></button>
                <button type="button" class="btn " style="background-color: #27C499; color: white; text-decoration:none;"> <a href="<?php echo base_url('register') ?>" style="text-decoration: none; color:white;">Register</a></button>
                <?php } ?>
            </div>
              </div>
            </div>
          </header>
          <nav class="navbar navbar-expand-lg navbar-light bg-white py-2">
            <div class="container-fluid">
              <a class="navbar-brand" href="#" style="font-weight: bold; margin-bottom:5px; "><i class='fas fa-car' style='font-size:35px'></i>  HilalRentCar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0" style=" margin-left: auto; margin-right:110px;">
                  <li class="nav-item">
                    <a class="nav-link active" id="active" aria-current="page" href="<?php echo base_url('customer/dashboard')?>">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('customer/data_mobil')?>">Mobil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="<?php echo base_url('customer/transaksi')?>">Transaksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('customer/faq')?>">FAQ</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
         
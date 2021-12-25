
    <style>
      .container .card{
        border-radius:7px;
        border: ridge grey;
        box-shadow: 0 10px 12px 0 rgba(0,0,0,0.6);
        transition: 0.3s;

      }
    </style>
    <body>
          <section class="py-5">
            <div class="container px-4 px-lg-5">
              <h2 style="margin-bottom:10px;">Daftar Mobil Disewa :</h2>
                <div class="row">
                    <?php foreach($mobil as $mb) : ?>
                        <div class="col lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="<?php echo base_url('assets/upload/'.$mb->gambar) ?>" style="width: 420px; height:230px"/>
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h4 class ="card-title">
                                            <?php echo $mb->merk ?></h4>
                                        <!-- Product price-->
                                        <h6>No. Plat : <?php echo $mb->no_plat ?></h6>
                                        <h5>Rp. <?php echo number_format($mb->harga,0,',','.') ?> / Hari</h5>
                                    </div>
                                </div>
                                <div class="text-center card-footer p-2">
                                    <?php
                                    if ($mb->status == "1") {
                                        echo anchor('customer/rental/tambah_rental/'.$mb->id_mobil,'
                                        <span
                                        class="btn btn-success">Rental</span>'
                                    );
                                    }else {
                                        echo "<span class='btn btn-danger'>Tidak Tersedia</span>";
        
                                    }
                                    ?>

                                    <a class="btn btn-dark" href="<?php echo base_url('customer/dashboard/detail_mobil/'.$mb->id_mobil) ?>">Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        

   

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Hilal Rental Car</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/273cd879e5.js" crossorigin="anonymous"></script>  
    </head>


<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="margin-top:180px;">
                <div class="card-header">
                    Invoice Pembayaran Anda
                </div>

                <div class="card-body">
                    <table class="table">
                        <?php foreach($transaksi as $tr) : ?>
                            <tr>
                                <th>Merk Mobil</th>
                                <td>:</td>
                                <td><?php echo $tr->merk ?></td>
                            </tr>

                            <tr>
                                <th>Tanggal Rental</th>
                                <td>:</td>
                                <td><?php echo $tr->tanggal_rental ?></td>
                            </tr>

                            <tr>
                                <th>Tanggal Kembali</th>
                                <td>:</td>
                                <td><?php echo $tr->tanggal_kembali ?></td>
                            </tr>

                            <tr>
                                <th>Biaya Sewa/Hari</th>
                                <td>:</td>
                                <td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
                            </tr>
                            <tr>
                                <?php
                                    $x = strtotime($tr->tanggal_kembali);
                                    $y = strtotime($tr->tanggal_rental);
                                    $jmlHari = abs(($x - $y)/(60*60*24));
                                ?>
                                <th>Jumlah Hari Sewa</th>
                                <td>:</td>
                                <td>Rp. <?php echo $jmlHari ?></td>
                            </tr>

                            <tr class="text-success">
                                <th>Jumlah Pembayaran</th>
                                <td>:</td>
                                <td><button class="btn btn-sm btn-success">Rp. <?php echo number_format($tr->harga * $jmlHari,0,',','.') ?></button</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><a href="<?php echo base_url('customer/transaksi/cetak_invoice/'.$tr->id_rental) ?>" class="btn btn-sm btn-secondary">Print Invoice</a></td>
                            </tr>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="margin-top:180px;">
            <div class="card-header alert alert-primary">
                Informasi Pembayaran
            </div>

            <div class="card-body">
                <p class="text-success mb-3">Silahkan Melakukan Pembayaran Melalui Nomor Rekening di Bawah Ini:</p>
                <ul class="list-group list-group-flush">
  <li class="list-group-item">Bank Mandiri 12183138189</li>
  <li class="list-group-item">Bank BCA 12183138111</li>
  <li class="list-group-item">Bank BRI 12183138111</li>
  <li class="list-group-item">Bank BNI 11183138111</li>
  <li class="list-group-item">BANK DKI 14183138111 </li>
</ul>

<?php
if(empty($tr->bukti_pembayaran)) { ?>
<button style="width: 100%" type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#exampleModal">
Upload Bukti Pembayaran
</button>
<?php }elseif($tr->status_pembayaran == '0'){ ?><button style="width: 100%" 
    class="btn btn-sm btn-warning"><i class="fas fa-clock"></i>Menunggu Konfirmasi </button>
    <?php }elseif($tr->status_pembayaran == '1'){ ?><button style="width: 100%" 
    class="btn btn-sm btn-success"><i class="fa fa-check"></i>Pembayaran Selesai </button>
    <?php } ?>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk upload bukti pembayaran-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
      <div class="modal-body">
       <div class="form-group">
           <label>Upload Bukti Pemabayaran</label>
           <input type="hidden" name="id_rental" class="form-control" value="<?php echo $tr->id_rental?>">
           <input type="file" name="bukti_pembayaran" class="form-control">
       </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-sm btn-success">Kirim</button>
      </div>
      </form>
    </div>

  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


<section class="py-5">
<div class="container mb-5">
    <div class="card mx-auto" style="margin-top: 50px; width: 80%">
    <div class="card-header">
        Data Transaksi Anda
    </div>

    <span class="mt-2 p2"><?php echo $this->session->flashdata('pesan') ?></span>
    <div class="card-body">
    <table class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>nama Customer</th>
            <th>Merk Mobil</th>
            <th>No Plat</th>
            <th>Harga Sewa</th>
            <th>Action</th>
            <th>Lainnya</th>


        </tr>

        <?php $no=1; foreach($transaksi as $tr) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $tr->nama ?></td>
                <td><?php echo $tr->merk ?></td>
                <td><?php echo $tr->no_plat ?></td>
                <td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
                <td>
                    <?php if($tr->status_rental == "Selesai") { ?>
                    <button class="btn btn-sm btn-danger">Rental Selesai</button>
                    <?php }else{ ?>
                        <a href="<?php echo base_url('customer/transaksi/pembayaran/'.$tr->id_rental) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                        <?php } ?>
                </td>
                <td>
                <?php 
                        if($tr->status_rental == "Belum Selesai") { ?>
                            <a onclick="return confirm('Yakin Batal?')" class="btn btn-sm btn-danger" href="<?php echo base_url('customer/transaksi/batal_transaksi/'.$tr->id_rental) ?>">Batal</a>
                        <?php }else{ ?>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#Mymodal">
                                Batal
                            </button>
                        <?php } ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    </div>
</div>
</section>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Maaf...Transaksi sudah selesai dan tidak bisa dibatalkan!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"></button>
      </div>
    </div>
  </div>
</div>
</div>


<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Penjualan<strong> Berhasil </strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>



    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="Cari Data Barang..." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari<button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row mt 3">
        <div class="col-md-6">
            <h3>Penjualan Barang</h3>
            <?php if (empty($penjualan)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Barang Tidak Ditemukan
                </div>
            <?php endif; ?>
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Size Barang</th>
                    <th>Harga Barang</th>
                </tr>
                <?php
                $no = 1;
                foreach ($penjualan as $pjl) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>

                        <td><?php echo $pjl->tanggal; ?></td>
                        <td><?php echo $pjl->kd_barang; ?></td>
                        <td><?php echo $pjl->nama_barang; ?></td>
                        <td><?php echo $pjl->size; ?></td>
                        <td><?php echo $pjl->harga; ?></td>
                    </tr>

                <?php } ?>
            </table>

        </div>
    </div>

</div>
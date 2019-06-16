<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Barang<strong> Berhasil </strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?php base_url(); ?>riwayat/tambah" class="btn btn-primary">Tambah Data Barang</a>

        </div>
    </div>

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
            <h3>Riwayat Barang</h3>
            <?php if (empty($riwayat)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Barang Tidak Ditemukan
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($riwayat as $rwt) : ?>
                    <li class="list-group-item">
                        <?= $rwt['nama_barang']; ?>
                        <a href="<?= base_url(); ?>riwayat/hapus/<?= $rwt['kd_barang']; ?>" class="badge badge-danger float-right" onclick="return confirm('Anda akan menghapus data barang ini,yakin?');">hapus</a>

                        <a href="<?= base_url(); ?>riwayat/ubah/<?= $rwt['kd_barang']; ?>" class="badge badge-success float-right">ubah</a>

                        <a href="<?= base_url(); ?>riwayat/detail/<?= $rwt['kd_barang']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>
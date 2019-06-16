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
            <h3>Barang Ready</h3>
            <?php if (empty($ready)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Barang Tidak Ditemukan
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($ready as $rd) : ?>
                    <li class="list-group-item">
                        <?= $rd['nama_barang']; ?>

                        <a href="<?= base_url(); ?>ready/detail/<?= $rd['kd_barang']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>
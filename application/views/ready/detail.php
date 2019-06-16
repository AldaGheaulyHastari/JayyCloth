<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Barang
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $ready_barang['nama_barang'] ?></h5>
                    <p class="card-text"><?= $ready_barang['size'] ?></p>
                    <p class="card-text"><?= $ready_barang['harga'] ?></p>
                    <a href="<?= base_url(); ?>ready" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
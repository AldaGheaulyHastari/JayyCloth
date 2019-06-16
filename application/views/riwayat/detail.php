<div class="container">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row mt-3">
            <div class="col-md-4">
                <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $riwayat_barang['nama_barang'] ?></h5>
                    <p class="card-text"><?= $riwayat_barang['size'] ?></p>
                    <p class="card-text"><?= $riwayat_barang['harga'] ?></p>
                    <a href="<?= base_url(); ?>riwayat" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
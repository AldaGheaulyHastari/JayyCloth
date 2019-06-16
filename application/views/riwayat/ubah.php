<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Barang
                </div>
                <div class="card-body">

                    <form action="" method="post">
                        <input type="hidden" name="kd_barang" value="<?= $riwayat_barang['kd_barang'] ?>">
                        <div class="form-group">
                            <label for="kd_barang">Kode Barang</label>
                            <input type="text" name="kd_barang" class="form-control" id="kd_barang" value="<?= $riwayat_barang['kd_barang']; ?>">
                            <small class="form-text text-danger"><?= form_error('kd_barang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $riwayat_barang['nama_barang']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="size">Size</label>
                            <select class="form-control" id="size" name="size">
                                <?php foreach ($size as $s) : ?>
                                    <?php if ($s == $riwayat_barang['size']) : ?>
                                        <option value="<?= $s; ?>" selected><?= $s; ?>
                                        </option>
                                    <?php else : ?>
                                        <option value="<?= $s; ?>"><?= $s; ?>
                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $riwayat_barang['harga']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
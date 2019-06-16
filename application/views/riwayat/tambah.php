<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Barang
                </div>
                <div class="card-body">

                    <?= form_open_multipart('riwayat/tambah'); ?>
                    <div class="form-group">
                        <label for="kd_barang">Kode Barang</label>
                        <input type="text" name="kd_barang" class="form-control" id="kd_barang">
                        <small class="form-text text-danger"><?= form_error('kd_barang'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                        <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="size">Size</label>
                        <select class="form-control" id="size" name="size">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga">
                        <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose Image</label>
                    </div>
                    <div class="row mt-2 float-right">
                        <button type="submit" name="tambah" class="btn btn-primary ">Tambah Data</button>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
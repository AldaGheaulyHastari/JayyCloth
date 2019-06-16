<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Barang
                </div>
                <div class="card-body">

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="kd_barang">Kode Barang</label>
                            <input type="text" name="kd_barang" class="form-control" id="kd_barang">
                            <small class="form-text text-danger"><?= form_error('kd_barang'); ?></small>
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
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
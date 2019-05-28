<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Barang
                    </div>
                        <div class="card-body">
                            <?php if( validation_errors() ) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= validation_errors(); ?>
                                </div>
                                <?php endif; ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="kode_barang">Kode Barang</label>
                                <input type="text"  name="kode_barang" class="form-control" id="kode_barang" >
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" >
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
                                <input type="text" class="form-control" id="harga" name="harga" >
                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary float-right" >Tambah Data</button>
                         </form>
                        </div>
                    </div>

        </div>
    </div>
</div>
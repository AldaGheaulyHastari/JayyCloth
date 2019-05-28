<div class="container">
    <?php if( $this->session->flashdata('flash') ) : ?>
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
<?php endif;?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?php base_url();?>manajemen/tambah" class="btn btn-primary">Tambah Data Barang</a>

        </div>
    </div>

        <div class="row mt 3">
            <div class="col-md-6">
                <h3>Riwayat Barang</h3>
               <ul class="list-group">
                    <?php foreach( $manajemen as $mnj ) : ?>
                        <li class="list-group-item">
                            <?= $mnj['nama_barang']; ?>
                            <a href="<?= base_url(); ?>manajemen/hapus/<?=$mnj['kode_barang'];?>" class="badge badge-danger float-right" onclick="return confirm('Anda akan menghapus data barang ini,yakin?');">hapus</a>
                           
                            <a href="<?= base_url(); ?>manajemen/detail/<?=$mnj['kode_barang'];?>" class="badge badge-primary float-right" >detail</a>
                            </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

</div>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-8">
        <form action="" class="form-horizontal" method="post">
            
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Judul Buku</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" id="jd_buku" name="jd_buku" value=" <?=$idbuku['jd_buku'] ?>" placeholder="Judul Buku" readonly>
                    <?= form_error('jd_buku', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>

                <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Tanggal Kembali</label>
                    <div class="col-sm-5">
                        <input data-provide="datepicker" class="bootstrap-datepicker" id="tglkbl" name="tglkbl" >
                    <br>
                        <?= form_error('tglkbl', '<small class="text-danger pl-3">', '</small>'); ?>           
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col">
                        <button type="submit" name=editBuku class="btn btn-primary">Tambah Data</button>
                        <a href="<?= base_url('buku/pinjaman'); ?>" name=editBuku class="btn btn-secondary">Kembali</a>
                
                    </div>
                </div>
            </form>


        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 
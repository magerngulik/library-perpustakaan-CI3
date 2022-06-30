<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-8">

        <div class="card border-dark mb-3" style="max-width: 30rem;">
        <div class="card-header font-weight-bold text-uppercase"><?=$buku['jd_buku'] ?></div>
            <div class="card-body text-dart">

                <label class="col-sm-10 col-form-label">Penulis</label>
                    <div class="col-sm-15">
                        <input type="text" class="form-control" id="kode" name="kode" value="<?=$buku['penulis'] ?>" readonly>
                    </div>
                <label class="col-sm-10 col-form-label">Nomor Induk</label>
                    <div class="col-sm-15">
                        <input type="text" class="form-control" id="kode" name="kode" value="<?=$buku['no_induk'] ?>" readonly>
                    </div>

                <label class="col-sm-10 col-form-label">Penerbit</label>
                    <div class="col-sm-15">
                        <input type="text" class="form-control" id="kode" name="kode" value="<?=$buku['penerbit'] ?>" readonly>
                    </div>
                    
                <label class="col-sm-10 col-form-label">Penerbit</label>
                    <div class="col-sm-15">
                        <input type="text" class="form-control" id="kode" name="kode" value="<?=$buku['tmp_terbit'] ?>" readonly>
                    </div>

                <label class="col-sm-10 col-form-label">Tahun</label>
                    <div class="col-sm-15">
                        <input type="text" class="form-control" id="kode" name="kode" value="<?=$buku['th_terbit'] ?>" readonly>
                    </div>

                <label class="col-sm-10 col-form-label">Edisi/Kategori</label>
                    <div class="col-sm-15">
                        <input type="text" class="form-control" id="kode" name="kode" value="<?=$buku['ed_cat'] ?>" readonly>
                    </div>

                <label class="col-sm-10 col-form-label">Jumlah</label>
                    <div class="col-sm-15">
                        <input type="text" class="form-control" id="kode" name="kode" value="<?=$buku['jml'] ?>" readonly>
                    </div>

                <label class="col-sm-10 col-form-label">Bahasa</label>
                    <div class="col-sm-15">
                        <input type="text" class="form-control" id="kode" name="kode" value="<?=$buku['bhs'] ?>" readonly>
                    </div>
                    
                <label class="col-sm-10 col-form-label">ISBN</label>
                    <div class="col-sm-15">
                        <input type="text" class="form-control" id="kode" name="kode" value="<?=$buku['isbn'] ?>" readonly>
                    </div>


                <label class="col-sm-10 col-form-label">Sumber</label>
                    <div class="col-sm-15">
                        <input type="text" class="form-control" id="kode" name="kode" value="<?=$buku['sumber'] ?>" readonly>
                    </div>
                <label class="col-sm-10 col-form-label">ODC</label>
                    <div class="col-sm-15">
                        <input type="text" class="form-control" id="odc" name="kode" value="<?=$buku['odc'] ?>" readonly>
                    </div>



                <div class="form-group row justify-content-end">
                <div class="col-sm-50">
                    
                    <a href="<?= base_url('buku/'); ?>" name=editBuku class="btn btn-secondary mt-5">Kembali</a>
                </div>
            </div>
            </div>
        </div>

            


        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 
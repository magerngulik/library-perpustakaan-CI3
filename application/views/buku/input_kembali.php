<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-8">
        <form action="" method="post">


            <input type="hidden" name="id" id="id" value="<?= $datapinjam['no_peminjaman']; ?>">
            <input type="hidden" name="tgl" id="tgl" value="<?= $datapinjam['tgl_kembali']; ?>">
            <input type="hidden" name="id_buku" id="id_buku" value="<?= $datapinjam['id_buku']; ?>">
            <input type="hidden" name="jml_pinjam" id="jml_pinjam" value="<?= $datapinjam['jml_pinjam']; ?>">
    
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Judul Buku</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="jd_buku" name="jd_buku" value=" <?=$datapinjam['jd_buku'] ?>" placeholder="Judul Buku" readonly>
                    <?= form_error('jd_buku', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Nama Siswa</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="nm_siswa" name="nm_siswa" value=" <?=$datapinjam['tgl_kembali'] ?>" placeholder="Judul Buku" readonly>
                    <?= form_error('jd_buku', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>


    
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Kelas / Kategori</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="kelas" name="kelas" value=" <?=$datapinjam['nm_kelas'] ?>" placeholder="Judul Buku" readonly>
                    <?= form_error('jd_buku', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>



            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Tanggal Pinjam</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="jmlPjm" name="jmlPjm" value=" <?=$datapinjam['date_create'] ?>" placeholder="Judul Buku" readonly>
                    <?= form_error('jd_buku', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Tanggal Kembali</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="jmlPjm" name="jmlPjm" value=" <?=$datapinjam['tgl_kembali'] ?>" placeholder="Judul Buku" readonly>
                    <?= form_error('jd_buku', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Jumlah Pinjam</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="jmlPjm" name="jmlPjm" value=" <?=$datapinjam['jml_pinjaman'] ?>" placeholder="Judul Buku" readonly>
                    <?= form_error('jd_buku', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Jumlah Kembali</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="jmlKem" name="jmlKem"  placeholder="Jumlah Buku Kembali" >
                    <?= form_error('jd_buku', '<small class="text-danger pl-3">', '</small>'); ?>           
                    <?= $this->session->flashdata('data'); ?>
                </div>
            </div>
            
            
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" name=editBuku class="btn btn-primary">Tambah Data</button>
                    <a href="<?= base_url('buku/pengembalian'); ?>" name=editBuku class="btn btn-secondary">Kembali</a>
                </div>
            </div>
            </form>


        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 
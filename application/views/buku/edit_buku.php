<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-8">
        <form action="" method="post">
            
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Judul Buku</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="jd_buku" name="jd_buku" value=" <?=$buku['jd_buku'] ?>" placeholder="Judul Buku">
                    <?= form_error('jd_buku', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>
            
            <?php 
                $kode= $buku['no_induk'];
                $noUrut =substr($kode, 5,2);
                $Stkode = substr($kode,0,4);
            ?>
            <input type="hidden" name="id" id="id" value="<?= $buku['id_buku']; ?>">
            <input type="hidden" name="kdepan" id="kdepan" value="<?=$Stkode?>">


            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Kode Buku</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $noUrut ?>">
                    <?= form_error('kode', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label"> Penulis</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="penulis" name="penulis" value="<?=$buku['penulis'] ?>">
                    <?= form_error('penulis', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label"> Penerbit</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?=$buku['penerbit'] ?>">
                    <?= form_error('penerbit', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Tempat Terbit</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tmp_terbit" name="tmp_terbit" value="<?=$buku['tmp_terbit'] ?>">
                    <?= form_error('penerbit', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>


            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Tahun Terbit</label>
                    <div class="col-sm-10">
                        <select name="tahun" id="tahun" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($tahun as $k) : ?>
                            <option value="<?=  $k?>"><?=$k  ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>    
                        </div>
            </div>
            
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label"> Edisi/Kategori </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="ed_cat" name="ed_cat"  value="<?=$buku['ed_cat'] ?>">
                    <?= form_error('ed_cat', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>
            
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="jml" name="jml"  value="<?=$buku['jml'] ?>">
                    <?= form_error('jml', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>
            
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Bahasa</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="bhs" name="bhs"  value="<?=$buku['bhs'] ?>">
                    <?= form_error('bhs', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>
            
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">ISBN</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" name="isbn"  value="<?=$buku['isbn'] ?>">
                    <?= form_error('isbn', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>
            
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Sumber</label>
                <div class="col-sm-10">
                <textarea type='text' class="form-control" id="sumber" name="sumber" rows="5"  ><?=$buku['sumber'] ?></textarea>
                    <?= form_error('sumber', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>


            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">odc</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="odc" name="odc" value="<?=$buku['odc'] ?>"  >
                    <?= form_error('odc', '<small class="text-danger pl-3">', '</small>'); ?>           
                </div>
            </div>
            
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" name=editBuku class="btn btn-primary">Edit Data</button>
                    <a href="<?= base_url('buku/'); ?>" name=editBuku class="btn btn-secondary">Kembali</a>
                </div>
            </div>
            </form>


        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 
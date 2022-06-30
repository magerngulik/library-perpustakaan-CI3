<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="<?= base_url('buku/tambahBuku/')?>" class="btn btn-primary mb-3" >Tambah Data</a>
            <a href="<?= base_url('buku/tambahBuku/')?>" class="btn btn-success mb-3" >Print Data</a>
            <div class="row">
                <!-- ukuran dalam col untuk mengatur panjang dari dari element yang sedand ei eksekusi-->
                <div class="col-6">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Masukan Keyword Pencarian" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="submit" name= "submit">Cari</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>  
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tempat Terbit</th>
        
                        <th scope="col">Ed/Cat</th>
                        <th scope="col">Jumlah</th>
                
                        <th scope="col">ISBN/ISSN</th>
                        <th scope="col">Sumber</th>
        
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($buku as $sm) : ?>
                    <tr> 
                        <th scope="row"><?= $i; ?></th>  
                        <td><?= $sm['jd_buku']; ?></td>
                        <td><?= $sm['penulis']; ?></td>
                        <td><?= $sm['penerbit']; ?></td>
                        <td><?= $sm['tmp_terbit']; ?></td>
                        <td><?= $sm['ed_cat']; ?></td>
                        <td><?= $sm['jml_pinjam']; ?></td>
                        <td><?= $sm['isbn']; ?></td>
                    
                        <td>
                            <a href="<?= base_url('buku/getidbuku/').$sm['id_buku'];?>" class="badge badge-success">pilih</a>                          
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
            
                </tbody>
            </table>

            <?php if (empty($buku)) : ?>
            <div class="alert alert-danger" role="alert">
            Data yang anda cari tidak di temukan
            </div>
            <?php endif; ?>

                        
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->

<!-- Modal -->

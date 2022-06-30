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
                <div class="row">
                    <div class="col">

                        <a href="<?= base_url('buku/pinjaman/')?>" class="btn btn-success mb-4 " >
                            <i class="fa fa-book"></i>
                        Pinjaman</a>
                        <a href="<?= base_url('buku/pengembalian/')?>" class="btn btn-danger mb-4" >
                        <i class="fa fa-book"></i>   
                        Pengembalian</a>
                        <!-- <a href="<?= base_url('buku/exelA/')?>" class="btn btn-warning mb-4" >
                        <i class="fa fa-file"></i>   
                            Cetak PDF</a> -->
                    </div>
                </div>

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


            <?= $this->session->flashdata('message'); ?>
            <a href="<?= base_url('buku/pDataSiswa/')?>" class="btn btn-primary mb-3" >
            <i class="fas fa-plus"></i>   
            Tambah Data</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Kelas/Kategori</th>
                        <th scope="col">Jumlah Pinjam</th>
                        <th scope="col">Status Pinjaman</th>
        
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pinjam as $sm) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $sm['nm_siswa']; ?></td>
                        <td><?= $sm['jd_buku']; ?></td>
                        <td><?= $sm['nm_kelas']; ?></td>               
                        <td><?= $sm['jml_pinjaman']; ?></td>
                        
                        <?php if ($sm['status_pinjaman']==0) : ?>
                        <td>
                            <span class="badge badge-danger">Belum Kembali</span>
                        </td>
                        <?php endif; ?>

                        <?php if ($sm['status_pinjaman']==1) : ?>
                        <td>
                            <span class="badge badge-success">Sudah Kembali</span>
                        </td>
                        <?php endif; ?>                   
                        
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->

<!-- Modal -->

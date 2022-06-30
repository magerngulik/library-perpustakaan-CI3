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
      
            
            <table class="table table-hover" >
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tempat Terbit</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Ed/Cat</th>
                        <th scope="col">Jml Awal</th>
                        <th scope="col">Jml Tersedia</th>
                        <th scope="col">Bahasa</th>
                        <th scope="col">ISBN/ISSN</th>
                        <th scope="col">Sumber</th>
                        <th scope="col">Action</th>
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
                        <td><?= $sm['th_terbit']; ?></td>
                        <td><?= $sm['ed_cat']; ?></td>
                        <td><?= $sm['jml']; ?></td>
                        <td><?= $sm['jml_pinjam']; ?></td>
                        <td><?= $sm['bhs']; ?></td>
                        <td><?= $sm['isbn']; ?></td>
                        <td><?= $sm['sumber']; ?></td>       
                        <td>
                            <a href="<?= base_url('buku/lihatdata/').$sm['id_buku'];?>" class="btn btn-info" role="button" data-toggle="tooltip" title="Lihat"><i class="fas fa-bars"></i></a>
                            <a href="<?= base_url('buku/ubahBuku/').$sm['id_buku'];?>" class="btn btn-warning" role="button" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="<?= base_url('buku/hapusdata/').$sm['id_buku'];?>" class="btn btn-danger" role="button" data-toggle="tooltip" title="Hapus"><i class="fas fa-trash-alt"></i></a>
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

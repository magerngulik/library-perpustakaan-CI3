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
       
            <a href="<?= base_url('laporan/printAbsen/')?>" class="btn btn-danger mb-4" ><i class="fa fa-file"></i> Print Data</a>
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor Anggota</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($absen as $sm) : ?>
                    <tr> 
                        <th scope="row"><?= $i; ?></th>  
                        <td><?= $sm['no_anggota']; ?></td>
                        <td><?= $sm['nm_siswa']; ?></td>
                        <td><?= $sm['nisn']; ?></td>
                        <td><?= $sm['nm_kelas']; ?></td>
                        <td><?= $sm['alamat']; ?></td>
                        <td><?= $sm['date_absen']; ?></td>    
                         
                        
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

</div>

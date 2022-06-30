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
       
            <a href="<?= base_url('laporan/printPengembalian/')?>" class="btn btn-danger mb-4" ><i class="fa fa-file"></i> Print Data</a>
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Kelas/Kategori</th>
                        <th scope="col">Jumlah Pinjam</th>
                        <th scope="col">Jenis Pinjaman</th>
                        <th scope="col">Tgl Pinjam</th>
                        <th scope="col">Tgl Kembali</th>
                        <th scope="col">Terlambat</th>
                        <th scope="col">Jml Kembali</th>
                        <th scope="col">Kekurangan</th>
                        <th scope="col">Status Pinjaman</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kembali as $sm) : ?>
                    <tr> 
                        <th scope="row"><?= $i; ?></th>  
                        <td><?= $sm['nm_siswa']; ?></td>
                        <td><?= $sm['jd_buku']; ?></td>
                        <td><?= $sm['nm_kelas']; ?></td>               
                        <td><?= $sm['jml_pinjaman']; ?></td>
                        <td><?= $sm['jns_pinjam']; ?></td>
                        <td><?= $sm['date_create']; ?></td>
                        <td><?= $sm['tgl_kembali']; ?></td>
                        <td><?= $sm['terlambat']; ?></td>
                        <td><?= $sm['jml_kembali']; ?></td>
                        
                        <?php if ($sm['jml_kembali']==$sm['jml_pinjaman']) : ?>
                            <td>
                                <span class="badge badge-success">Lengkap</span>
                            </td>
                            <?php else:?>
                                <td><?= $sm['jml_pinjaman']-$sm['jml_kembali'] ?></td>
                        <?php endif; ?>

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

            <?php if (empty($kembali)) : ?>
            <div class="alert alert-danger" role="alert">
            Data yang anda cari tidak di temukan
            </div>
            <?php endif; ?>

                        
        </div>
    </div>


</div>

</div>

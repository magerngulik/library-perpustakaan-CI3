<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg">

        <div class="card border-dark mb-3" style="max-width: 100rem;">
        <div class="card-header font-weight-bold text-uppercase"> Detail Pengembalian Buku</div>
            <div class="card-body text-dart">
            <table cellspacing="0"  width="70%">

                    </tr>  
                        <tr>
                        <td width="50%"><label>nama siswa </label></td>
                        <td> <h5>:</h5></td>
                        <td><label><?=$siswa['nm_siswa'] ?>
                        </label>
                            </td>
                    </tr>  
                    </tr>  
                        <tr>
                        <td width="50%"><label> Nomor Induk Siswa </label></td>
                        <td> <h5>:</h5></td>
                        <td><label><?=$siswa['nisn'] ?>
                        </label>
                            </td>
                    </tr>  

                    </tr>  
                        <tr>
                        <td width="50%"><label> Kelas </label></td>
                        <td> <h5>:</h5></td>
                        <td><label><?=$siswa['nm_kelas'] ?>
                        </label>
                            </td>
                    </tr>  

                    </tr>  
                        <tr>
                        <td width="50%"><label> Alamat </label></td>
                        <td> <h5>:</h5></td>
                        <td><label><?=$siswa['alamat'] ?>
                        </label>
                            </td>
                    </tr>  
                    </table>
    

                    <table class="table table-borderless">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul buku</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Jenis Pinjaman</th>
                        <th scope="col">Status Pinjam</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($riwayat as $sm) : ?>
                    <tr> 
                        <th scope="row"><?= $i; ?></th>  
                        <td><?= $sm['jd_buku']; ?></td>
                        <td><?= $sm['penulis']; ?></td>
                        <td><?= $sm['date_create']; ?></td>
                        <td><?= $sm['jns_pinjam']; ?></td>
                        <?php if ($sm['status_pinjaman']==0) : ?>
                        <td>
                            <span class="badge badge-danger">Belum Kembali</span>
                        </td>
                        
                        <?php else: ?>
                            <td>
                            <span class="badge badge-success">Sudah Kembali</span>
                        </td>
                        <?php endif; ?>

                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                    <?php if (empty($riwayat)) : ?>
                    <div class="alert alert-danger" role="alert">
                    Belum ada data pinjaman
                    </div>
                    <?php endif; ?>
                    <div class="col-sm-15">
                <div class="form-group row justify-content-end">
                <div class="col-sm-50">
                    
                    <a href="<?= base_url('anggota'); ?>" name=editBuku class="btn btn-secondary mt-5">Kembali</a>
                </div>
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
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-12">

     
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-1000 mb-4">ABSENSI PUSTAKA</h1>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
            
                                <!-- kelas x -->
                             
                                    <h5 class="text-gray-1000 mb-4">Pilih Nama Anda</h5>
                                    <div class="col-lg-4 justify-content-center">

                                     
                                    <?php $i = 1; ?>
                                    <?php foreach ($absen as $sm) : ?>
                                        <ul class="list-group">   
                                            <a href="<?= base_url('anggota/ketAbsensi/').$sm['id_siswa'];?>"> <li class="list-group-item" id="name"><?=$sm['nm_siswa']?>                      
                                        </li>
                                        </a>
                                        </ul>
                                        <?php $i++; ?>
                                        <?php endforeach; ?>

                                    </div>
                                    <?php if (empty($absen)) : ?>
                                    <div class="alert alert-danger" role="alert">
                                    Belum ada data siswa
                                    </div>
                                    <?php endif; ?>
                                <!-- End Kelas X -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        </div> 
    </div>

</div> 

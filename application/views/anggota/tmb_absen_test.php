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
                             
                                    <h5 class="text-gray-1000 mb-4">Pilih Kategori</h5>
                                    <div class="row justify-content-center">

                                        <?php foreach ($kelas as $sm) : ?>
                                    

                                        
                                        <div class="col-xl-3 col-md-6 mb-4">
                                        <a href="<?= base_url('anggota/formAbsen/').$sm['id_kelas'];?>">
                                            <div class="card border-left-<?=$sm['color_kelas']?> shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="h5 mb-0 font-weight-bold text-danger-800"><?= $sm['nm_kelas']; ?></div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas <?=$sm['logo_kelas']?> fa-2x text-black-300"></i>                                                     
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    
                                        <?php endforeach; ?>
                                    </div>
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

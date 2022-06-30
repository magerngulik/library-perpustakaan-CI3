
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
                                <div class="row justify-content-center">
                                    <div class="col-lg">
                                        <form action="<?= base_url('anggota/ketAbsensi/').$siswaId['id_siswa']; ?>" method="post">
                                            <input type="hidden" name="id_siswa" id="id_siswa" value="<?= $siswaId['id_siswa']; ?>">
                                            
                                      
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label">Nama Siswa</label>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" id="nm_siswa" name="nm_siswa" value="<?= $siswaId['nm_siswa']; ?>" readonly>
                                                <?= form_error('nm_kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>      
                                        </div>
                                     
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-2 col-form-label">Keterangan</label>
                                                <div class="col-sm-10">
                                                <textarea type='text' class="form-control" id="ket" name="ket" rows="5" placeholder="Ex: Membaca Buku"></textarea>
                                                    <?= form_error('sumber', '<small class="text-danger pl-3">', '</small>'); ?>           
                                                </div>
                                            </div>          
                                            

                                            
                                            
                                            <div class="form-group row justify-content-end">
                                                <div class="col-sm-10">
                                                    <button type="submit" name=editBuku class="btn btn-primary">Tambahkan</button>
                                                    <a href="<?= base_url('anggota/absenSiswa'); ?>" name=editBuku class="btn btn-secondary">Kembali</a>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
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

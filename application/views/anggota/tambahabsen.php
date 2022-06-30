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
                            
                                
                                <div class="row">
                                    <!-- dalam col -->  
                                    <div class="col-lg-4">
                                        <div class="text-center">
                                            <h1 class="h4 text-danger-1000 mb-4">5 Absensi Terakhir</h1>    
                                        </div>
                                    <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Anggota</th>
                                            <th scope="col">Nama Siswa</th>
                                            <th scope="col">Kelas</th>
                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($siswa as $sm) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $sm['no_anggota']; ?></td>
                                            <td><?= $sm['nm_siswa']; ?></td>
                                            <td><?= $sm['nm_kelas']; ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                    </table>
                                <!-- <hr> -->  
                                    </div>
                                <div class="col-lg-8 text-center"> 

                                                <p class=" text-danger"> Absensi MAN 1 Kepulauan Meranti</p>
                                                <div class="jumbotron">
                                                    <img src="<?= base_url('assets/logo.png'); ?>" class="img-circle" alt="...">
                                                </div>
                                            </div>
                                </div> 

                                <!-- batasan dari col pertama-->
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <h1 class="h4 text-danger-1000 mb-4">Form Absensi</h1>
                                    </div>
                                    <div class="row">
                                <!-- ukuran dalam col untuk mengatur panjang dari dari element yang sedand ei eksekusi-->
                                    <div class="col">
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

                                            <th scope="col">Nama Siswa</th>
                                            <th scope="col">NISN</th>
                                            <th scope="col">Kelas</th>
                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($siswa as $sm) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $sm['nm_siswa']; ?></td>
                                            <td><?= $sm['nm_kelas']; ?></td>

                                            <td>
                                                <a href="<?= base_url('buku/riwayatpinjam/').$sm['id_siswa'];?>" class="badge badge-success">Pilih</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <!-- <hr> -->  
                                            
                                
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        </div> 
    </div>

</div> 

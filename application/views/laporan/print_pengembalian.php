<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h4 style="text-align:center; padding: 0px; margin: 0px;" >PERPUSTAKAAN</h4>
    <h4 style="text-align:center; padding: 0px; margin: 0px" >MAN 1 KEPULAUAN MERANTI</h4>
    <h3 style="text-align:center; padding: 0px; margin: 0px" >Jalan Banglas Kecamatan Tebing Tinggi Kabupaten Kepulauan Meranti</h3>
    <h3 style="text-align:center; padding: 0px; margin: 0px" >Telp: (0763) 33735 E-mail: man1kepulauanmeranti@gmail.com</h3>
    <div style="border-bottom: 10px solid dark; margin-top: 5px; width: 100%;"></div>
    <h4 style="text-align:center; padding: 3px; margin: 1px" >Daftar Pengembalian Pustaka </h4>
    <table border="1" cellpadding="10" cellspacing="0" style=" width: 100%;  margin-left: auto; margin-right: auto; ">
           
                    <tr>
                    
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Judul Buku</th>
                        <th>Kelas/Kategori</th>
                        <th>Jumlah Pinjam</th>
                        <th>Jenis Pinjaman</th>
                        <th>Tgl Pinjam</th>
                        <th>Tgl Kembali</th>
                        <th>Terlambat</th>
                        <th>Jml Kembali</th>
                        <th>Kekurangan</th>
                        <th>Status Pinjaman</th>
      
                    </tr>           
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
            
            </table>


</body>
</html>
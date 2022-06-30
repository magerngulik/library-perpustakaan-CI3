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
    <h4 style="text-align:center; padding: 3px; margin: 1px" >Daftar Kunjungan Pustaka </h4>
    <table border="1" cellpadding="10" cellspacing="0" style=" width: 100%;  margin-left: auto; margin-right: auto; ">
           
                    <tr>
                        <th>No</th>
                        <th scope="col">Nomor Anggota</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Date</th>
      
                    </tr>           
                    <?php $i = 1; ?>
                    <?php foreach ($absen as $sm) : ?>
                    <tr> 
                        <th scope="row"><?= $i; ?></th>  
                        <td><?= $sm['no_anggota']; ?></td>
                        <td><?= $sm['nm_siswa']; ?></td>
                        <td><?= $sm['nisn']; ?></td>
                        <td><?= $sm['nm_kelas']; ?></td>
                        <td><?= $sm['alamat']; ?></td>
                        
                        <td><?= date("d-F-Y", strtotime($sm['date_absen'])); ?></td>  
                      
                        
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
            
            </table>


</body>
</html>
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
    <h4 style="text-align:center; padding: 3px; margin: 1px" >BUKU INDUK PERPUSTAKAAN</h4>
    <table border="1" cellpadding="10" cellspacing="0" style=" width: 10%;  margin-left: auto; margin-right: auto; ">
           
                    <tr>
                        <th>No</th>
                        <th >No Induk</th>
                        <th >Tgl_Masuk</th>
                        <th >Judul Buku</th>
                        <th >Penulis</th>
                        <th >Penerbit</th>
                        <th >Tempat Terbit</th>
                        <th >Tahun Terbit</th>
                        <th >Ed/Cat</th>
                        <th >Jumlah</th>
                        <th >Bahasa</th>
                        <th >ISBN/ISSN</th>
                        <th >Sumber</th>
                        <th >DDC</th>
                    </tr>           
                    <?php $i = 1; ?>
                    <?php foreach ($buku as $sm) : ?>
                    <tr> 
                        <th><?= $i; ?></th>  
                        <td><?= $sm['no_induk']; ?></td>
                        <td><?= $sm['tgl_masuk']; ?></td>
                        <td><?= $sm['jd_buku']; ?></td>
                        <td><?= $sm['penulis']; ?></td>
                        <td><?= $sm['penerbit']; ?></td>
                        <td><?= $sm['tmp_terbit']; ?></td>
                        <td><?= $sm['th_terbit']; ?></td>
                        <td><?= $sm['ed_cat']; ?></td>
                        <td><?= $sm['jml']; ?></td>
                        <td><?= $sm['bhs']; ?></td>
                        <td><?= $sm['isbn']; ?></td>
                        <td><?= $sm['sumber']; ?></td>       
                        <td><?= $sm['odc']; ?></td>       
                      
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
            
            </table>


</body>
</html>
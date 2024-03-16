<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        .border-table{
            font-family: Arial;
            width: 100%;
            border-collapse: collapse;
            text-align:center;
            font-size: 12px;
            color: #232323;
        }
        .border-table th{
            border: 1 solid $000;
            font-weight: bold;
            background-color: #e1e1e1;
            }
         .border-table td{
            border: 1 solid #000;


         }   

    </style>
</head>
<body>
    <script type="text/javascript">
        window.print();
    </script>

    <center>
        <h1>LAPORAN LELANG ONLINE</h1>
    </center>
    
    <table class="border-table">
                <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Nama Pembeli</th>
                        <th scope="col">Nama Prtugas</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Tanggal Lelang</th>
                        <th scope="col">Penawaran Harga</th>
                        <th scope="col">Status</th>

                    </tr>
                </thead>
                <tbody>
                  <?php

                  $no=1;
                  foreach($manda as $erwin){
                     ?>   

                     <tr>
                        <td><?= $no++ ?></td>
                        <td><?=$erwin->nama_barang?></td>
                        <td><?= $erwin ->nama_lengkap?></td>
                        <td><?= $erwin ->nama_petugas?></td>
                        <td><?= $erwin ->tgl?></td>
                        <td><?= $erwin ->deskripsi_barang?></td>
                        <td><?= $erwin ->tgl_lelang?></td>
                        <td><?= $erwin ->harga_akhir?></td>
                        <td><?= $erwin ->status?></td>

    </tr>
    <?php } ?>
                    </tbody>
                </table>
</body>
</html>
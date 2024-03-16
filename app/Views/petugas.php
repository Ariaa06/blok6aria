<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tables petugas</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?=base_url('home/dashboard')?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Table</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Petugas
                </div>
                <a href="<?= base_url('home/tambah_petugas') ?>">
                   <button class="btn btn-outline-primary"></i>Tambah ≽^•⩊•^≼</button>
               </a>
               <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                      <tr>
                        <th scope="col">no</th>
                        <th scope="col">Nama petugas</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Level</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php

                  $no=1;
                  foreach($manda as $erwin){
                   ?>   

                   <tr>
                    <td><?= $no++ ?></td>
                    <td><?=$erwin->nama_petugas?></td>
                    <td><?= $erwin ->username?></td>
                    <td><?= $erwin ->password?></td>
                    <td><?= $erwin ->id_level?></td>
                    <td>



                        <a href="<?= base_url('home/edit_petugas/' . $erwin ->id_petugas) ?>">
                           <button class="fa-solid fa-pen"></button>
                       </a>

                       <a href="<?= base_url('home/hapus_petugas/' . $erwin ->id_petugas) ?>">
                           <button class="fa-solid fa-eraser"></button>
                       </a>
                   </td> 
               </tr>
           <?php } ?>
       </tbody>
   </table>
</div>
</div>
</div>
</main>

    <!-- nanti buat join baru di model dan copas yang if dan else karna level di petugas dan tabel level belum di koneksikan. buat yang kayak jumat sebelumnya(jangan lupa buat hapus dan edit nya ) -->
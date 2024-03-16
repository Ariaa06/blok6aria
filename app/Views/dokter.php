<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Book A Doctor</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?=base_url('home/dashboard')?>">Home</a></li>
            </ol>
            <li>today time:
                <?php echo date('H:i:s'); ?></li>

                <?php if(session()->has('success')): ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

                <div class="card mb-4">

                    <?php if(session()->get('level')==1 || session()->get('level')==2) { ?>
                        <a href="<?= base_url('home/tambah_dokter') ?>">
                           <button class="btn btn-outline-primary">Add Doctor</button>
                       <?php } ?>
                </a>
                <div class="card-body">
                 <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">no</th>
                        <th scope="col">Nama Dokter</th>
                        <th scope="col">Bidang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Status</th>
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
                        <td><?=$erwin->nama_dokter?></td>
                        <td><?= $erwin ->bidang?></td>
                        <td><?= $erwin ->harga?></td>
                        <td><?= $erwin ->status?></td>
                        <td>
                            <?php if(session()->get('level')==1 || session()->get('level')==2) { ?>

                                <a href="<?= base_url('home/edit_dokter/' . $erwin ->id_dokter) ?>">
                                 <button class="fa-solid fa-pen"></button>
                             </a>

                             <a href="<?= base_url('home/hapus_dokter/' . $erwin ->id_dokter) ?>">
                                 <button class="fa-solid fa-eraser"></button>
                             </a>
                         <?php } ?>

                         <?php if(session()->get('level')==3) { ?>
                            <a href="<?= base_url('home/booking/' . $erwin ->id_dokter) ?>">
                                <button type="button" class="btn btn-success">Book</button>
                            </a>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>
</div>
</main>
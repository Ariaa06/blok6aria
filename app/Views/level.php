<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table level</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?=base_url('home/dashboard')?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Table</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Level
                </div>
               <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                      <tr>
                        <th scope="col">no</th>
                        <th scope="col">Level</th>
                    </tr>
                </thead>
                <tbody>
                  <?php

                  $no=1;
                  foreach($manda as $erwin){
                     ?>   

                     <tr>
                        <td><?= $no++ ?></td>
                        <td><?=$erwin->level?></td>
                 </tr>
             <?php } ?>
         </tbody>
     </table>
 </div>
</div>
</div>
</main>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Reset Password</h1>
            <ol class="breadcrumb mb-4">
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Reset Password
                </div>
             <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                      <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php

                  $no=1;
                  foreach($manda as $erwin){
                   ?>   

                   <tr>
                    <td><?=$erwin->username?></td>
                    <td>
                        <a href="<?= base_url('home/aksi_reset/' . $erwin ->id_petugas) ?>">
                           <button class="btn btn-outline-primary">Reset password</button>
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
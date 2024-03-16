<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Edit Petugas</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?=base_url('home/dashboard')?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Table</li>
      </ol>

      <div class="container mt-3">
        <form action="<?= base_url('home/aksi_edit_petugas') ?>" method="POST">
          <div class="mb-3 mt-3">
            <label for="inputText" class="col-sm-2 col-form-label">Nama petugas</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" name="nama_petugas" value="<?= $satu->nama_petugas ?>">
            </div>
          </div>

          <div class="mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" name="username" value="<?= $satu->username ?>">
            </div>
          </div>

          <div class="mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" name="password" value="<?= $satu->password ?>">
            </div>
          </div>


          <div class="mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Level</label>
            <div class="col-sm-10">
              <select  type="select" class="form-control" id="level" placeholder="Enter level" name="level" value="<? $satu->level ?>">
               <option value="<?= $satu->id_level ?>">
                <?php
                if( $satu->id_level==1){
                  echo "administrator";
                }else if( $satu->id_level==2){
                  echo " petugas";
                }else{
                  echo "masyarakat";
                }
                ?>

              </option>
              <option value="1">administrator</option>
              <option value="2">Petugas</option>
              <option value="3">masyarakat</option>
              <option value="<?= $satu->id_level ?>">

              </select>
            </div>
          </div>

          <input type="hidden" name="id" value="<?= $satu->id_petugas ?>">

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
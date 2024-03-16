<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Tambah Petugas</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?=base_url('home/dashboard')?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Table</li>
      </ol>

      <div class="container mt-3">
        <form action="<?= base_url('home/aksi_t_petugas') ?>" method="POST" enctype="multipart/form-data">
          <div class="mb-3 mt-3">
            <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" name="nama_petugas">
            </div>
          </div>

          <div class="mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" name="username">
            </div>
          </div>

          <div class="mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" name="password">
            </div>
          </div>

          <div class="mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Level</label>
            <div class="col-sm-10">
              <select  type="select" class="form-control" name="level" id="level" placeholder="Enter level" name="level">
               <option value="volvo">Pilih Level</option>
               <option value="1">administrator</option>
               <option value="2">petugas</option>
               <option value="2">masyarakat</option>
             </select>
           </div>
         </div>

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
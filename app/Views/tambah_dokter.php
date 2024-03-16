<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Tambah dokter</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?=base_url('home/dashboard')?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Table</li>
      </ol>

      <div class="container mt-3">
        <form action="<?= base_url('home/aksi_t_dokter') ?>" method="POST" enctype="multipart/form-data">
          <div class="mb-3 mt-3">
            <label for="inputText" class="col-sm-2 col-form-label">Nama Dokter</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" name="nama_dokter">
            </div>
          </div>

          <div class="mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Bidang</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" name="bidang">
            </div>
          </div>

          <div class="mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" name="harga">
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
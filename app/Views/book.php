<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Appointment</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard') ?>">Dashboard</a></li>
            </ol>

            <div class="container mt-3">
                <form action="<?= base_url('home/aksi_book') ?>" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="appointment_time" class="form-label">Select Appointment Time:</label>
                        <select class="form-select" id="book" name="book">
                            <!-- Tambahkan opsi untuk waktu konsultasi -->
                            <option value="08:00">08:00 AM</option>
                            <option value="09:00">09:00 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="12:00">12:00 AM</option>
                            <option value="13:00">13:00 AM</option>
                            <option value="14:00">14:00 AM</option>
                            <option value="15:00">15:00 AM</option>
                            <option value="16:00">16:00 AM</option>
                            <option value="17:00">17:00 AM</option>
                            <option value="18:00">18:00 AM</option>
                            <option value="19:00">19:00 AM</option>
                            <option value="20:00">20:00 AM</option>
                            <option value="21:00">21:00 AM</option>
                            <option value="22:00">22:00 AM</option>
                        </select>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                    <!-- Tambahkan input hidden untuk menyimpan ID dokter -->
                    <input type="hidden" name="id" value="<?= $satu->id_dokter ?>">
                </form>
      </div>
    </div>
  </main>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating Room</title>
</head>
<body>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Rate Us!!</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard') ?>">Back To The Dashboard</a></li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Consultation Data Place
                    </div>
                    <div class="card-body">
                        <!-- Tempat untuk menampilkan chat -->
                        <div id="chatBox">
                            <!-- Pesan-pesan chat akan ditampilkan di sini -->
                        </div>
                        <!-- Form untuk mengirim pesan -->
                        <form id="chatForm" action="<?= base_url('home/aksi_t_rating') ?>" method="POST">
                           <div class="mb-3">
                            <div class="mb-3 mt-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Your Name</label>
                                <h6>it can be anonymus</h6>
                                <div class="col-sm-10">
                                  <input type="text" required class="form-control" name="name" placeholder="Enter Your Name">
                              </div>
                          </div>

                          <div class="col-sm-10">
                              <select  type="select" class="form-control" name="rating" id="rating" placeholder="Select rating" name="rating">
                                <option value="volvo">Rate Us</option>
                                <option value="1">⭐</option>
                                <option value="2">⭐⭐</option>
                                <option value="3">⭐⭐⭐</option>
                                <option value="4">⭐⭐⭐⭐</option>
                                <option value="5">⭐⭐⭐⭐⭐</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</main>

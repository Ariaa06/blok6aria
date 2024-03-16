
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Sign up!!!</h3></div>
                                <div class="card-body">
                                    <form class="row g-3 needs-validation" novalidate action="<?= base_url('home/aksi_edit_profile')?>" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="username" type="text" placeholder="Enter your name" name="nama_lengkap" value="<?= $satu->nama_lengkap ?>"/>
                                            <label for="inputEmail">Your name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" type="text" placeholder="Password" name="username" value="<?= $satu->username ?>"/>
                                            <label for="Enter username">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" type="password" placeholder="Password" name="password" value="<?= $satu->password ?>"/>
                                            <label for="Enter password">Password</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" type="text" placeholder="text" name="telp" value="<?= $satu->telp ?>"/>
                                            <label for="Enter phone number">Phone Number</label>
                                        </div>



                                        <input type="hidden" name="id" value="<?= $satu->id_user ?>">
                                        <div class="col-12">
                                          <button class="btn btn-primary w-100" type="submit">Update Profile</button>
                                      </div>

                                  </form>
                              </div>
                              <div class="card-footer text-center py-3">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </main>
      </div>
  </body>


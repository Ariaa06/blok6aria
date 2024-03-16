
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
                                    <form class="row g-3 needs-validation" novalidate action="<?= base_url('home/aksi_signup')?>" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="username" type="text" placeholder="Enter your name" name="nama_lengkap" />
                                            <label for="inputEmail">Your name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" type="text" placeholder="Password" name="username" />
                                            <label for="Enter username">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" type="password" placeholder="Password" name="password" />
                                            <label for="Enter password">Password</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" type="text" placeholder="Password" name="telp" />
                                            <label for="Enter phone number">Phone Number</label>
                                        </div>



                                     <div class="col-12">
                                      <button class="btn btn-primary w-100" type="submit">Save</button>
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


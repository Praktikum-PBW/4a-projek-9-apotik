<!-- Sign Up -->
    <section class="py-lg-2">
        <div class="container p-5">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card cardLog border-0 shadow rounded-3 my-5">
                  <div class="login card-body p-4 p-sm-5">
                    <h1 class="card-title text-center mb-5 fs-5"><i class="bi bi-person-fill"></i><strong>Daftar</strong></h1>
                    <hr class="w-25 mx-auto">
                    <form class="row g-3" action="daftar-proses.php" method="POST">
                        <div class="col">
                          <label for="username" class="form-label">Username</label>
                          <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username">
                        </div>
                        <div class="col-12">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password">
                        </div>
                        <div class="col-12">
                          <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                          <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                I agree all statements in  <a href="#" class="term-service" style="color: black;">Terms of service</a>
                            </label>
                          </div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" name="daftar" type="submit">Daftar</button>
                        </div>
                        <div class="d-grid text-center" >
                            <a href="index.php?page=login" style="color: black;"> Sudah punya akun</a>
                        </div>
                        <hr class="my-4">
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>      
    </section>

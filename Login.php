<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>SIPON : Login</title>
    <link href="assets/img/.png" rel="icon" />
    <!-- MDB icon -->
    <!-- <link rel="icon" href="bootstrap-login-form-main/img/mdb-favicon.ico" type="image/x-icon" /> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <!-- <link rel="stylesheet" href="bootstrap-login-form-main/css/bootstrap-login-form.min.css" /> -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-login-form.min.css" />
    <link rel="stylesheet" href="login.css" />
    <style></style>
  </head>

  <body>
    <!-- Start your project here-->
    <section class="bg-image" style=" height: 100vh">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem">
              <div class="card-body p-5 text-center">
                <h3 class="mb-3"><img class="foto-poliban" src="assets/img/.png" alt="" /></h3>
                <hr class="my-3" />
                <h6 class="my-3">Masukkan username dan password</h6>

                <form action="proses_login.php" method="post">
                <div class="form-floating mb-4">
                  <input type="text" class="form-control" name="username" id="floatingInput" placeholder="username" required=""/>
                  <label for="floatingInput"
                    >Username
                    <svg class="user-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                      <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                      <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                    </svg>
                  </label>
                </div>

                <!-- <div class="form-outline mb-4">
                  <input type="email" id="floatingInput" class="form-control form-control-lg" />
                  <label class="form-control" for="floatingInput">Username</label>
                </div> -->

                <div class="form-floating mb-4">
                  <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="password" required=""/>
                  <label for="floatingPassword"
                    >Password
                    <svg class="lock-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                      <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                      <path
                        d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"
                      />
                    </svg>        
                  </label>
                </div>

                <input class="btn btn-primary btn-lg btn-block" type="submit" value="LOGIN">
                <a href="lupa_password.php" class="forgot-password-link">Lupa Password?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
</form>
    </section>
    <!-- End your project here-->

    <!-- MDB -->
    <!-- <script type="text/javascript" src="bootstrap-login-form-main/js/mdb.min.js"></script> -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
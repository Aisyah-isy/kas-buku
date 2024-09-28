<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>Login</title>
    <meta name="description" content="">
    <?php require_once('layout/_css.php');?>
  </head>

  <body>
    <!-- Content -->
    <div class="container-sm ">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card col-4">
            <div class="card-body">
              <h4 class="mb-2 text-center">Kas Buku Kita👋</h4>
              <p class="mb-4 text-center">Login Dulu yaa</p>

              <form class="mb-3" action="<?= base_url('auth/cek_login')?>" method="POST">
                <div class="mb-3">
                  <label  class="form-label">Username</label>
                  <input type="text" class="form-control"  name="username" placeholder="Username" autofocus="">
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" >Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input type="password" class="form-control" name="password" placeholder="············" >
                  </div>
                </div>
                <div class="mb-3 text-center">
                  <button class="btn btn-primary " type="submit">Login</button>
                </div>
              </form>
                
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- Core JS -->
    <?php require_once('layout/_js.php');?>

   

</body></html>
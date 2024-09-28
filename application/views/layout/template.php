<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path=".<?=base_url("assets/sneat")?>./assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <title>Dashboard Kas</title>
  <?php require_once('_css.php');?>
</head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <?php require_once('_sidebar.php');?>

        <div class="layout-page">
          <?php require_once('_navbar.php');?>  
           
          <div class="content-wrapper">

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">
                          <?= $contents;?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
          </div>
        <?php require_once('_footer.php');?>
    </div>
    <?php require_once('_js.php');?>
  </body>
</html>

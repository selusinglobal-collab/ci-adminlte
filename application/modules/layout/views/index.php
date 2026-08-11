<!doctype html>
<html lang="en">
    <?php $this->load->view('_partials/header'); // Panggil potongan header ?>

    <!--begin::Body-->
    <body class="layout-fixed sidebar-expand-lg bg-body-tertiary text-sm">
      <!--begin::App Wrapper-->
      <div class="app-wrapper">
          <?php $this->load->view('_partials/navbar'); // Panggil potongan navbar ?>
          <?php $this->load->view('_partials/sidebar'); // Panggil potongan sidebar ?>

          <!--begin::App Main-->
          <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
              <!--begin::Container-->
              <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                  <div class="col-sm-6">
                    <!-- <h3 class="mb-0">&nbsp;</h3> -->
                    <!-- <div class="page-pretitle"><?php if(isset($pretitle)) echo $pretitle; ?></div> -->
                    <h4 class="page-title"><?php if(isset($pagetitle)) echo $pagetitle; ?></h4>
                  </div>
                  <div class="col-sm-6">
                    <!-- <ol class="breadcrumb float-sm-end">
                      <li class="breadcrumb-item"><a href="<?= site_url() ?>">sia.selusin</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Beranda</li>
                    </ol> -->
                  </div>
                </div>
                <!--end::Row-->
              </div>
              <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">
              <!--begin::Container-->
              <div class="container-fluid">
                  <?php if(isset($content)) echo $content; ?>
              </div>
              <!--end::Container-->
            </div>
            <!--end::App Content-->
          </main>
          <!--end::App Main-->

          <?php $this->load->view('_partials/footer'); // Panggil potongan footer ?>

      </div>
      <!--end::App Wrapper-->

      <?php $this->load->view('_partials/js'); // Panggil potongan js ?>

  </body>
  <!--end::Body-->
</html>

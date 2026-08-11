<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="<?= site_url() ?>" class="brand-link">
      <!--begin::Brand Image-->
      <img
        src="<?= base_url() ?>assets/adminlte/img/sia-selusin-logo.png"
        alt="sia.selusin"
        class="brand-image opacity-75 shadow"
      />
      <!--end::Brand Image-->
      <!--begin::Brand Text-->
      <span class="brand-text fw-light">sia.selusin</span>
      <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!-- Docs CTA -->
      <!-- <div class="px-3 pb-2">
        <a
          href="./docs/introduction.html"
          class="btn btn-sm btn-outline-light w-100 d-flex align-items-center justify-content-center gap-2"
        >
          <i class="bi bi-book" aria-hidden="true"></i>
          View documentation
        </a>
      </div> -->

      <!--begin::Sidebar Menu-->
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="navigation"
        aria-label="Main navigation"
        data-accordion="false"
        id="navigation"
      >
        <!-- <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
              Dashboard
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./index.html" class="nav-link active">
                <i class="nav-icon bi bi-circle"></i>
                <p>Dashboard v1</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index2.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Dashboard v2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index3.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Dashboard v3</p>
              </a>
            </li>
          </ul>
        </li> -->
        <li class="nav-item">
          <a href="<?= site_url() ?>" class="nav-link <?= isset($beranda) ? 'active' : '' ?>">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Beranda</p>
          </a>
        </li>
        <li class="nav-item <?= isset($master_menu_open) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link">
            <!-- <i class="nav-icon bi bi-box-seam-fill"></i> -->
            <i class="nav-icon bi bi-book"></i>
            <p>
              Master
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= site_url() ?>perusahaan" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Perusahaan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./widgets/info-box.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Pengguna</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url() ?>akun" class="nav-link <?= isset($master_akun) ? 'active' : '' ?>">
                <i class="nav-icon bi bi-circle"></i>
                <p>Akun</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-pencil-square"></i>
            <p>
              Transaksi
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./forms/elements.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Jurnal Umum</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./forms/layout.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Jurnal Kas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./forms/validation.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Jurnal Bank</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-file-earmark-text"></i>
            <p>
              Laporan
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./pages/profile.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Jurnal</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./pages/settings.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Buku Besar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./pages/invoice.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Laba/Rugi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./pages/calendar.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Perubahan Modal</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./pages/kanban.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Neraca</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
      <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->

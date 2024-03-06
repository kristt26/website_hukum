        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>/assets/index.html">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url() ?>/assets/img/logo.png">
                </div>
                <div class="sidebar-brand-text mx-3">USN Papua</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item" ng-class="{'active': title=='Prodi'}">
                <a class="nav-link" href="prodi">
                    <i class="fas fa-book"></i>
                    <span>Program Studi</span></a>
            </li>
            <li class="nav-item" ng-class="{'active': title=='Pengumuman'}">
                <a class="nav-link" href="pengumuman">
                    <i class="fas fa-bullhorn"></i>
                    <span>Pengumuman</span>
                </a>
            </li>
            <li class="nav-item" ng-class="{'active': title=='Pengajar'}">
                <a class="nav-link" href="pengajar">
                    <i class="fas fa-users"></i>
                    <span>Pengajar</span>
                </a>
            </li>
            <li class="nav-item" ng-class="{'active': title=='Tentang'}">
                <a class="nav-link" href="tentang">
                    <i class="fas fa-users"></i>
                    <span>Tentang</span>
                </a>
            </li>
            <li class="nav-item" ng-class="{'active': collapse=='Akademik'}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#setView" aria-expanded="true" aria-controls="setView">
                    <i class="fas fa-book"></i>
                    <span>Akademik</span>
                </a>
                <div id="setView" class="collapse" ng-class="{'show': collapse=='Akademik'}" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" ng-class="{'active': title=='CPL'}" href="cpl">CPL</a>
                        <a class="collapse-item" ng-class="{'active': title=='Kurikulum'}" href="kurikulum">Kurikulum</a>
                    </div>
                </div>
            </li>
            <li class="nav-item" ng-class="{'active': collapse=='Kemahasiswaan'}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#setView" aria-expanded="true" aria-controls="setView">
                    <i class="fas fa-book"></i>
                    <span>Kemahasiswaan</span>
                </a>
                <div id="setView" class="collapse" ng-class="{'show': collapse=='Kemahasiswaan'}" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" ng-class="{'active': title=='Prestasi'}" href="prestasi">Prestasi Mahasiswa</a>
                        <a class="collapse-item" ng-class="{'active': title=='Kegiatan Kemahasiswaan'}" href="kegiatan">Kegiatan Mahasiswa</a>
                    </div>
                </div>
            </li>
            <li class="nav-item" ng-class="{'active': title=='Arsip'}">
                <a class="nav-link" href="arsip">
                    <i class="fas fa-file-pdf"></i>
                    <span>Arsip</span>
                </a>
            </li>
            <li class="nav-item" ng-class="{'active': title=='Slider'}">
                <a class="nav-link" href="slider">
                    <i class="fas fa-sliders-h"></i>
                    <span>Slider</span>
                </a>
            </li>
            <li class="nav-item" ng-class="{'active': title=='Profile Lulusan'}">
                <a class="nav-link" href="lulusan">
                    <i class="fas fa-sliders-h"></i>
                    <span>Profile Lulusan</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="version" id="version-ruangadmin"></div>
        </ul>
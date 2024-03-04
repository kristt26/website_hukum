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
            <li class="nav-item" ng-class="{'active': collapse=='Setting'}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#setView" aria-expanded="true" aria-controls="setView">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>Set View</span>
                </a>
                <div id="setView" class="collapse" ng-class="{'show': collapse=='Setting'}" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" ng-class="{'active': title=='Slider'}" href="slide">Slide</a>
                        <a class="collapse-item" ng-class="{'active': title=='Galery'}" href="galeri">Galery</a>
                        <a class="collapse-item" ng-class="{'active': title=='Berita'}" href="berita">Berita</a>
                        <a class="collapse-item" ng-class="{'active': title=='Kerjasama'}" href="kerjasama">Kerjasama</a>
                        <a class="collapse-item" ng-class="{'active': title=='Video'}" href="video">Video</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="version" id="version-ruangadmin"></div>
        </ul>
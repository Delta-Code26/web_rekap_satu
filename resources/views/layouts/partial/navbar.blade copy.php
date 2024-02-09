<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn">
            <i class="fas fa-align-left"></i>
        </button>
        <h3>APLIKASI REKAP HASIL PANEN</h3>
        <div class="" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0">
                <li class="nav-item dropdown">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <!-- <H4>Marno</H4> -->
                        <?= 'Marno' ?> - <i class="fas fa-user"></i> <i class="fas fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end position-absolute" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('karyawan.index') }}"><i class="fas fa-user"></i>
                                Profil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i>
                                keluar</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

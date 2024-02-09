<nav id="sidebar">
    {{-- <div class="container-fluid"> --}}
    <div class="sidebar-header">
        <h3><span class="text-white fw-bold">PANEN</span> SAWIT</h3>
        <strong><span class="text-white">P</span>S</strong>
    </div>
    <ul class="nav-item list-unstyled components">
        <li>
            <a href="{{ route('hasil-panen-sawit.index') }}">
                <div class="row">
                    <div class='col-12 col-md-2 sidebar-item-icon'>
                        <i class="fas fa-home"></i>
                    </div>
                    <span class="col-10">Beranda</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('hasil-panen-sawit.index') }}">
                <div class="row">
                    <div class='col-12 col-md-2 sidebar-item-icon'>
                        <i class="fas fa-file"></i>
                    </div>
                    <span class="col-10">Rekap</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('karyawan.index') }}">
                <div class="row">
                    <div class='col-12 col-md-2 sidebar-item-icon'>
                        <i class="fas fa-user"></i>
                    </div>
                    <span class="col-10">Karyawan</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('karyawan.index') }}">
                <div class="row">
                    <div class='col-12 col-md-2 sidebar-item-icon'>
                        <i class="fas fa-money-bill"></i>
                    </div>
                    <span class="col-10">Gaji</span>
                </div>
            </a>
        </li>
    </ul>
    {{-- </div> --}}
</nav>

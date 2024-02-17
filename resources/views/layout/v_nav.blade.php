<ul class="menu-inner py-1">
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Menu Utama</span>
    </li>
    <li class="menu-item {{ request()->is('admin/home') ? 'active' : '' }}">
        <a href="/admin/home" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Basic">Dashboard</div>
        </a>
    </li>

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Data Dasar</span>
    </li>
    <li class="menu-item {{ request()->is('admin/datatipesoal') ? 'active' : '' }}">
        <a href="/admin/datatipesoal" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Basic">Data Tipe Soal</div>
        </a>
    </li>

    <li class="menu-item {{ request()->is('admin/datasoal') ? 'active' : '' }}">
        <a href="/admin/datasoal" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Basic">Data Soal</div>
        </a>
    </li>

    <li class="menu-item {{ request()->is('admin/datajawaban') ? 'active' : '' }}">
        <a href="/admin/datajawaban" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Basic">Data Jawaban</div>
        </a>
    </li>

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Data Utama</span>
    </li>
    <li class="menu-item {{ request()->is('admin/datapeserta') ? 'active' : '' }}">
        <a href="/admin/datapeserta" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Basic">Data Peserta</div>
        </a>
    </li>

    <li class="menu-item">
        <a href="cards-basic.html" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Basic">Data Ujian</div>
        </a>
    </li>

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Pengaturan</span>
    </li>
    <li class="menu-item">
        <a href="cards-basic.html" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Basic">Data Akun User</div>
        </a>
    </li>

    <li class="menu-item">
        <a href="cards-basic.html" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Basic">Profile Saya</div>
        </a>
    </li>

</ul>
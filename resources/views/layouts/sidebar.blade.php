
<section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU UTAMA</li>
    
    @if (Auth::user()->hasRole('superadmin'))
        
    <li class="{{ (request()->is('superadmin')) ? 'active' : '' }}"><a href="/superadmin"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
    
    <li class="header">DATA MASTER</li>
    
    
    <li class="{{ (request()->is('superadmin/jaksa*')) ? 'active' : '' }}"><a href="/superadmin/jaksa"><i class="fa fa-arrow-right"></i> <span>Data Jaksa</span></a></li>
    <li class="{{ (request()->is('superadmin/penyidik*')) ? 'active' : '' }}"><a href="/superadmin/penyidik"><i class="fa fa-arrow-right"></i> <span>Data Penyidik</span></a></li>

    <li class="header">DATA TINDAKAN</li>
    <li class="{{ (request()->is('superadmin/korban*')) ? 'active' : '' }}"><a href="/superadmin/korban"><i class="fa fa-arrow-right"></i> <span>Data Korban</span></a></li>
    <li class="{{ (request()->is('superadmin/tersangka*')) ? 'active' : '' }}"><a href="/superadmin/tersangka"><i class="fa fa-arrow-right"></i> <span>Data Tersangka</span></a></li>
    <li class="{{ (request()->is('superadmin/kpp*')) ? 'active' : '' }}"><a href="/superadmin/kpp"><i class="fa fa-arrow-right"></i> <span>Tindakan KPP</span></a></li>
    <li class="{{ (request()->is('superadmin/kpa*')) ? 'active' : '' }}"><a href="/superadmin/kpa"><i class="fa fa-arrow-right"></i> <span>Tindakan KPA</span></a></li>
    
    <li class="header">DATA LAPORAN</li>
    <li class="{{ (request()->is('superadmin/laporan*')) ? 'active' : '' }}"><a href="/superadmin/laporan"><i class="fa fa-arrow-right"></i> <span>Laporan</span></a></li>
    <li class="header">SETTING</li>
    <li class="{{ (request()->is('superadmin/gp*')) ? 'active' : '' }}"><a href="/superadmin/gp"><i class="fa fa-key"></i> <span>Ganti Pass</span></a></li>
    <li><a href="/logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
    @else
        
    <li class="{{ (request()->is('pemohon')) ? 'active' : '' }}"><a href="/pemohon"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li class="{{ (request()->is('pemohon/profil*')) ? 'active' : '' }}"><a href="/pemohon/profil"><i class="fa fa-user"></i> <span>Profil</span></a></li>
    {{-- <li class="{{ (request()->is('pemohon/daftar-layanan*')) ? 'active' : '' }}"><a href="/pemohon/daftar-layanan"><i class="fa fa-list"></i> <span>Daftar Layanan</span></a></li> --}}
    @endif
    </ul>
    <!-- /.sidebar-menu -->
</section>
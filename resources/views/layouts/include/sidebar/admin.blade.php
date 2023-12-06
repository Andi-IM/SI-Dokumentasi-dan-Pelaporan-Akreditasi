<div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Dashboard</div>
<ul class="pcoded-item pcoded-left-item">
    @include('layouts.include.sidebar.dashboard')
</ul>

<div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Kelola Data</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="">
        <a href="{{ route('users.index') }}" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
            <span class="pcoded-mtext" data-i18n="nav.dash.main">Users</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
</ul>
<ul class="pcoded-item pcoded-left-item">
    <li class="">
        <a href="{{ route('dosen.index') }}" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-layout"></i><b>D</b></span>
            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dosen</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
</ul>
<ul class="pcoded-item pcoded-left-item">
    <li class="">
        <a href="{{ route('pegawai.index') }}" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-layout"></i><b>D</b></span>
            <span class="pcoded-mtext" data-i18n="nav.dash.main">Pegawai</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
</ul>
<ul class="pcoded-item pcoded-left-item">
    <li class="">
        <a href="{{ route('ta.index') }}" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-calendar"></i><b>D</b></span>
            <span class="pcoded-mtext" data-i18n="nav.dash.main">Tahun Akademik</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
</ul>

{{-- <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Dosen</div>
<div class="pcoded-navigation-label" data-i18n="nav.category.forms">Pegawai</div>
<div class="pcoded-navigation-label" data-i18n="nav.category.forms">Tahun Akademik</div> --}}


<div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Referensi</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="">
        <a href="{{ route('ptunit.index') }}" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-layers"></i><b>D</b></span>
            <span class="pcoded-mtext" data-i18n="nav.dash.main">Unit Kerja</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
</ul>
<ul class="pcoded-item pcoded-left-item">
    <li class="">
        <a href="{{ route('luaran.index') }}" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-layers"></i><b>D</b></span>
            <span class="pcoded-mtext" data-i18n="nav.dash.main">Jenis Publikasi</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
</ul>
<ul class="pcoded-item pcoded-left-item">
    <li class="">
        <a href="{{ route('luaran-lain.index') }}" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-layers"></i><b>D</b></span>
            <span class="pcoded-mtext" data-i18n="nav.dash.main">Luaran HKI</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
</ul>

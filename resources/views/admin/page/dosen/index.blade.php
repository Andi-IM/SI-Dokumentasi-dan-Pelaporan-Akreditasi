@extends('admin.layout.app')
@section('content')
    {{-- page header  --}}
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Daftar Dosen</h5>
                        <p class="m-b-0">Data Dosen</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>

                        <li class="breadcrumb-item"><a href="#!">Daftar Dosen</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <!-- Basic table card start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Daftar Dosen</h5>
                            <a href="{{ route('tambah-dosen') }}">
                                <span>Tambah data <code>disini</code> </span>
                            </a>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                    <li><i class="fa fa-refresh reload-card"></i></li>

                                </ul>
                            </div>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr style="text-align-last: center">
                                            <th scope="col">
                                                No
                                            </th>
                                            <th scope="col">
                                                Nama Dosen
                                            </th>
                                            <th scope="col">
                                                Nomor Induk Dosen
                                            </th>
                                            <th scope="col">
                                                Jenis Nomor Induk Dosen
                                            </th>
                                            <th scope="col">
                                                Pendidikan Magister
                                            </th>
                                            <th scope="col">
                                                Pendidikan Doktor
                                            </th>
                                            <th scope="col">
                                                Bidang Keahlian
                                            </th>
                                            <th scope="col">
                                                Jabatan Akademik
                                            </th>
                                            <th scope="col">
                                                Sertifikat Pendidik Profesional
                                            </th>
                                            <th scope="col">
                                                Sertifikat Kompetensi Profesi Industri
                                            </th>
                                            <th scope="col">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        // dd($data);
                                        ?>
                                        @foreach ($data as $no => $item)
                                            <tr>
                                                <td>{{ $no + 1 }}</td>
                                                <td>{{ $item->nama_dosen }}</td>
                                                <td>{{ $item->nomor_induk_dosen }}</td>
                                                <td>{{ $item->jenis_nomor_induk_dosen }}</td>
                                                <td>{{ $item->pendidikan_magister }}</td>
                                                <td>{{ $item->pendidikan_doktor }}</td>
                                                <td>{{ $item->bidang_keahlian }}</td>
                                                <td>{{ $item->jabatan_akademik }}</td>
                                                <td>{{ $item->sertifikat_pendidik_profesional }}</td>
                                                <td>{{ $item->sertifikat_kompetensi_profesi_industri }}</td>
                                                <td>
                                                    {{-- <a href="{{ route('edit-ptunit', ['id' => $item->id]) }}"
                                                        style="margin-right: 7px">
                                                        Edit
                                                    </a> --}}
                                                    <a href="{{ route('hapus-dosen', $item->id) }}"
                                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();">
                                                        Hapus
                                                    </a>
                                                    <form id="delete-form-{{ $item->id }}"
                                                        action="{{ route('hapus-dosen', ['id' => $item->id]) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Basic table card end -->
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->

        <div id="styleSelector">

        </div>
    </div>
@endsection

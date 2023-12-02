<<<<<<<< HEAD:resources/views/jurusan/page/pendanaan/index.blade.php
@extends('jurusan.layout.app')
========
@extends('layouts.app')
>>>>>>>> origin/prefered_dev:resources/views/admin/luaran_lain/index.blade.php
@section('content')
    {{-- page header  --}}
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Daftar Luaran</h5>
                        <p class="m-b-0">Data Luaran</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>

                        <li class="breadcrumb-item"><a href="#!">Daftar Luaran</a>
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
                            <h5>Daftar Luaran</h5>
                            <a href="{{ route('luaran-lain.create') }}">
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
                                                Nama Luaran
                                            </th>
                                            <th scope="col">
                                                Aksi
                                            </th>
<<<<<<<< HEAD:resources/views/jurusan/page/pendanaan/index.blade.php
                                            <th scope="col">
                                                Bukti
                                            </th>
                                            <th scope="col">
                                                Keterangan
                                            </th>
                                            <th scope="col">
                                                Unit Kerja
                                            </th>

========
>>>>>>>> origin/prefered_dev:resources/views/admin/luaran_lain/index.blade.php
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        // dd($data);
                                        ?>
                                        @foreach ($data as $no => $item)
                                            <tr>
                                                <td>{{ $no + 1 }}</td>
<<<<<<<< HEAD:resources/views/jurusan/page/pendanaan/index.blade.php
                                                <td>{{ $item->sumber_dana }}</td>
                                                <td>{{ $item->jumlah }}</td>
                                                <td>{{ $item->bukti }}</td>
                                                <td>{{ $item->keterangan }}</td>
                                                <td>{{ $item->kode_pt_unit }}</td>
========
                                                <td>{{ $item->jenis_luaran_lain }}</td>
>>>>>>>> origin/prefered_dev:resources/views/admin/luaran_lain/index.blade.php

                                                <td>
                                                    <form action="{{ route('luaran-lain.destroy', ['id' => $item->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-link">Hapus</button>
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

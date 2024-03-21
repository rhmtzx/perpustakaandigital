@extends('layout.main')

@section('content')

<div class="page-content-wrapper">
    <div class="justify-content-center">
      <div class="row-2">
        <div class="col-12 col-lg-12">
            <div class="card-body">
                <div class="container">
                    <div class="row" > 
                	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Laporan Peminjaman</div>
                        <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-grid-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Laporan Peminjaman</li>
                            </ol>
                        </nav>
                    	</div>
                	</div>
						<div class="card">
                            <div class="card-body">
                                <div>
                                <h4><em>DATA LAPORAN PEMINJAMAN</em></h4>
                                <hr>
                                <a href="/addpeminjamen" class="btn btn-primary mb-10">Tambah Peminjaman +</a>
                                <br></br>
                                <div class="row" > 
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered mb-0" id="datatable">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Id Peminjaman</th>
                                                    <th scope="col">Foto Cover</th>
                                                    <th scope="col">Judul Buku</th>
                                                    <th scope="col">Id User</th>
                                                    <th scope="col">Tgl Peminjaman</th>
                                                    <th scope="col">Tgl Pengembalian</th>
                                                    <th scope="col">Status Peminjaman</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @php
                                                    $no = 1;
                                                    @endphp
                                                    @foreach ($datasiswa as $row)
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>{{ $row->id}}</td>
                                                    <td>
                                                        <img src="{{ asset('allfoto/' . $row->bukus->foto) }}" alt=""
                                                            style="width: 40px">
                                                    </td>
                                                    <td>{{ $row->bukus->judul}}</td>
                                                    <td>{{ $row->users->username}}</td>
                                                    <td>{{ \Carbon\Carbon::parse($row->created_at)->translatedFormat('d F Y') }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($row->tanggalpengembalian)->translatedFormat('d F Y') }}</td>
                                                    @if ($row->statuspeminjaman == 'Buku Dipinjam')
                                                    <td>
                                                        <span class="badge bg-warning">Buku Dipinjam</span>
                                                    </td>
                                                    @elseif ($row->statuspeminjaman == 'Buku Dikembalikan')
                                                    <td>
                                                        <span class="badge bg-success ">Buku Dikembalikan</span>
                                                    </td>
                                                    @elseif ($row->statuspeminjaman == 'Buku Terlambat Dikembalikan' && $row->denda > 0)
                                                    <td>
                                                        <span class="badge bg-danger">Buku Terlambat Dikembalikan</span>
                                                        <br>
                                                        <span class="badge bg-danger">
                                                            Silahkan Membayar Denda Sebesar Rp.{{ $row->denda }}
                                                        </span>
                                                    </td>
                                                    @elseif ($row->statuspeminjaman == 'Buku Terlambat Dikembalikan')
                                                    <td>
                                                        <span class="badge bg-danger">Buku Terlambat Dikembalikan</span>
                                                    </td>
                                                    @endif



                                                    @if ($row->statuspeminjaman == 'Buku Dipinjam')
                                                    <td>
                                                        <a href="/kembalikanbuku/{{ $row->id }}" class="btn btn-primary"><i class="fadeIn animated bx bx-archive-in"></i></a>
                                                    </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </div>
</div>

@endsection


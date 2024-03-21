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
                    <div class="breadcrumb-title pe-3">Data Buku</div>
                        <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="fadeIn animated bx bx-book"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Data Buku</li>
                            </ol>
                        </nav>
                    	</div>
                	</div>
						<div class="card">
                            <div class="card-body">
                                <div>
                                    <h4><em>DATA SELURUH BUKU</em></h4>
                                    <hr>
                                    <a href="/addbuku" class="btn btn-primary mb-10">Tambah Data Buku +</a>
                                    <a href="/cetakbuku" target="_blank" class="btn btn-danger mb-10"><i class="fadeIn animated bx bx-printer"></i> Cetak PDF</a>
                                    <br></br>
                                    <div class="row" > 
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered mb-0" id="datatable">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Id Buku</th>
                                                        <th scope="col">Foto Cover</th>
                                                        <th scope="col">Judul</th>
                                                        <th scope="col">Penulis</th>
                                                        <th scope="col">Penerbit</th>
                                                        <th scope="col">Tahun Terbit</th>
                                                        <th scope="col">Stok Buku</th>
                                                        
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                    $no = 1;
                                                    @endphp
                                                    @foreach ($data as $row)
                                                    <tr>
                                                        <th scope="row">{{ $no++ }}</th>
                                                        <td>{{ $row->id}}</td>
                                                        <td>
                                                            <img src="{{ asset('allfoto/' . $row->foto) }}" alt=""
                                                            style="width: 40px">
                                                        </td>
                                                        <td>{{ $row->judul}}</td>
                                                        <td>{{ $row->penulis}}</td>
                                                        <td>{{ $row->penerbit}}</td>
                                                        <td>{{ $row->tahunterbit}}</td>
                                                        <td>{{ $row->stok}}</td>
                                                        <td>
                                                            <a href="/editbuku/{{ $row->id }}" class="btn btn-warning"><i class="fadeIn animated bx bx-edit-alt"></i></a>
                                                            <a href="/deletebuku/{{ $row->id }}" class="btn btn-danger"><i class="fadeIn animated bx bx-trash-alt"></i></a>
                                                        </td>
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


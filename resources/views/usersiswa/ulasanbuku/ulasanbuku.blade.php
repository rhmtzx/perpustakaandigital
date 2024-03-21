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
                    <div class="breadcrumb-title pe-3">Ulasan Buku</div>
                        <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-grid-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Data Ulasan Buku</li>
                            </ol>
                        </nav>
                    	</div>
                	</div>
						<div class="card">
                            <div class="card-body">
                                <div>
                                    <h4><em>DATA ULASAN BUKU</em></h4>
                                    <hr>
                                    <a href="/addulasanbuku" class="btn btn-primary mb-10">Tambah Ulasan Buku +</a>
                                    <br></br>
                                    <div class="row" > 
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered mb-0" id="datatable">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Id Ulasan</th>
                                                        <th scope="col">Cover Buku</th>
                                                        <th scope="col">Judul Buku</th>
                                                        <th scope="col">Ulasan Buku</th>
                                                        <th scope="col">Rating Buku</th>
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
                                                        <td>{{ $row->ulasan}}</td>
                                                        <td>{{ $row->rating }} / {!! str_repeat('<i class="fadeIn animated bx bx-star"></i>', $row->rating) !!}</td>
                                                        <td>
                                                            <a href="/editulasanbuku/{{ $row->id }}" class="btn btn-warning"><i class="fadeIn animated bx bx-edit-alt"></i></a>
                                                            <a href="/deleteulasanbuku/{{ $row->id }}" class="btn btn-danger"><i class="fadeIn animated bx bx-trash-alt"></i></a>
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


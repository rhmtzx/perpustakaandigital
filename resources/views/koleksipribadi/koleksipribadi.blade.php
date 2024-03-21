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
                    <div class="breadcrumb-title pe-3">Data Koleksi Pribadi</div>
                        <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="fadeIn animated bx bx-book-bookmark"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Data Koleksi Pribadi</li>
                            </ol>
                        </nav>
                    	</div>
                	</div>
						<div class="card">
                            <div class="card-body">
                                <div>
                                    <h4><em>DATA SELURUH KOLEKSI</em></h4>
                                    <hr>
                                    {{-- <a href="/addkoleksipribadi" class="btn btn-primary mb-10">Tambah Koleksi Pribadi +</a> --}}
                                    <br></br>
                                    <div class="row" > 
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered mb-0" id="datatable">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Id Koleksi</th>                                           
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Cover Buku</th>
                                                        <th scope="col">Judul Buku</th>
                                                        <th scope="col">Aksi</th>
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
                                                        <td>{{ $row->users->username}}</td>
                                                        <td>
                                                            <img src="{{ asset('allfoto/' . $row->bukus->foto) }}" alt=""
                                                                style="width: 40px">
                                                        </td>
                                                        <td>{{ $row->bukus->judul}}</td>
                                                        <td>
                                                            <a href="/editkoleksipribadi/{{ $row->id }}" class="btn btn-warning"><i class="fadeIn animated bx bx-edit-alt"></i></a>
                                                            <a href="/deletekoleksipribadi/{{ $row->id }}" class="btn btn-danger"><i class="fadeIn animated bx bx-trash-alt"></i></a>
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


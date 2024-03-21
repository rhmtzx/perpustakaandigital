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
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-grid-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Data Buku</li>
                            </ol>
                        </nav>
                    	</div>
                	</div>
						<div class="card">
                            <div  class="card-body">
                                <br>
                                <h2 class="text-center mb-4">TAMBAH DATA BUKU</h2>
                                <br>
                                <form action="/insertbuku" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Masukkan Judul</h5></label>
                                        <input type="text" name="judul" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Filosofi Teras">
                                    </div>
                                    @error('judul')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <br>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Masukkan Penulis</h5></label>
                                        <input type="text" name="penulis" class="form-control" id="penulis" aria-describedby="emailHelp" placeholder="Henry Manampiring">
                                    </div>
                                    @error('penulis')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <br>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Masukkan Penerbit</h5></label>
                                        <input type="text" name="penerbit" class="form-control" id="penerbit" aria-describedby="emailHelp" placeholder="Henry Manampiring">
                                    </div>
                                    @error('penerbit')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <br>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Masukkan Tahun Terbit</h5></label>
                                        <input type="number" name="tahunterbit" class="form-control" id="tahunterbit" aria-describedby="emailHelp" placeholder="2018">
                                    </div>
                                    @error('tahunterbit')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <br>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Masukkan Stok Buku</h5></label>
                                        <input type="number" name="stok" class="form-control" id="stok" aria-describedby="emailHelp" placeholder="20">
                                    </div>
                                    @error('stok')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <br>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Masukkan Foto Cover</h5></label>
                                        <br>
                                        <input type="file" name="foto" class="form-control" >
                                    </div>
                                    @error('foto')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <br>

                                    <button type="submit" class="btn btn-primary"><i class="lni lni-telegram-original"></i> Submit</button>
                                    <a href="/buku" class="btn btn-danger mb-10"><i class="bx bx-share"></i> Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </div>
</div>

@endsection
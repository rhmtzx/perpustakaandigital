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
                    <div class="breadcrumb-title pe-3">Peminjaman Buku</div>
                        <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-grid-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Peminjaman Buku</li>
                            </ol>
                        </nav>
                    	</div>
                	</div>
                        <!-- CARD FORM TAMBAH DATA -->
						<div class="card">
                            <div  class="card-body">
                                <br>
                                <h2 class="text-center mb-4">TAMBAH PEMINJAMAN BUKU</h2>
                                <br>
                                <form action="/insertpeminjamen" method="POST" enctype="multipart\form-data" >
                                    @csrf
                                    <div class="mb-3">
                                    <label for="bukuid" class="form-label"><h5>Judul Buku</h5></label>
                                    <select class="form-control" name="bukuid" id="select-state" autocomplete="off">
                                        <option value="" selected disabled>Pilih Buku</option>
                                        @foreach($buku as $hehe)
                                        <option value="{{ $hehe->id }}">{{ $hehe->judul }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    @error('bukuid')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <br>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Tanggal Pengembalian</h5></label>
                                        <input type="date" name="tanggalpengembalian" class="form-control" id="tanggalpengembalian" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    @error('tanggalpengembalian')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <br>
                                    

                                    <button type="submit" class="btn btn-primary"><i class="lni lni-telegram-original"></i> Submit</button>
                                    <a href="/peminjamen" class="btn btn-danger mb-10"><i class="bx bx-share"></i> Kembali</a>
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
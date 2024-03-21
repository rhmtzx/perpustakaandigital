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
                    <div class="breadcrumb-title pe-3">Kategori Buku Relasi</div>
                        <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-grid-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Kategori Buku Relasi</li>
                            </ol>
                        </nav>
                    	</div>
                	</div>
                        <!-- CARD FORM TAMBAH DATA -->
						<div class="card">
                            <div  class="card-body">
                                <br>
                                <h2 class="text-center mb-4">TAMBAH KATEGORI BUKU RELASI</h2>
                                <br>
                                <form action="/insertkategoribukurelasi" method="POST" enctype="multipart\form-data" >
                                    @csrf
                                    <div class="mb-3">
                                    <label for="bukuid" class="form-label"><h5>Judul Buku</h5></label>
                                    <select class="form-control" name="bukuid" id="select-state" autocomplete="off">
                                        <option value="" selected disabled>Pilih Buku</option>
                                        @foreach($buku as $haha)
                                        <option value="{{ $haha->id }}">{{ $haha->judul }}</option>
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
                                    <label for="kategoriid" class="form-label"><h5>Kategori Buku</h5></label>
                                    <select class="form-control" name="kategoriid" id="select-state" autocomplete="off">
                                        <option value="" selected disabled>Pilih Kategori</option>
                                        @foreach($kategori as $one)
                                        <option value="{{ $one->id }}">{{ $one->namakategori }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    @error('kategoriid')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <br>

                                    <div class="mb-3">
                                    <label for="rakid" class="form-label"><h5>Rak Buku</h5></label>
                                    <select class="form-control" name="rakid" id="select-state" autocomplete="off">
                                        <option value="" selected disabled>Pilih Kategori</option>
                                        @foreach($rak as $pril)
                                        <option value="{{ $pril->id }}">{{ $pril->namarak }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    @error('rakid')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <br>

                                    <button type="submit" class="btn btn-primary"><i class="lni lni-telegram-original"></i> Submit</button>
                                    <a href="/kategoribukurelasi" class="btn btn-danger mb-10"><i class="lni lni-angle-double-left"></i> Kembali</a>
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
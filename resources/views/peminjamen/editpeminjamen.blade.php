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
                                <li class="breadcrumb-item active" aria-current="page">Update Ulasan Buku</li>
                            </ol>
                        </nav>
                    	</div>
                	</div>
                        <!-- CARD FORM EDIT DATA -->
						<div class="card">
                            <div  class="card-body">
                                <br>
                                <h2 class="text-center mb-4">UPDATE ULASAN BUKU</h2>
                                <br>
                                <form action="/updatepeminjamen/{{ $data->id }}" method="POST" enctype="multipart\form-data" >
                                    @csrf
                                    <div class="col-lg-12">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Judul Buku</h5></label>
                                        <select class="form-control js-example-basic-single" name="bukuid" id="bukuid" autocomplete="off">
                                            <option value="" selected disabled>- Pilih Judul Buku -</option>
                                            @foreach($buku as $a)
                                            <option value="{{ $a->id }}"
                                                <?php 
                                                    if($data->bukuid == $a->id) { echo 'selected'; }
                                                ?> > {{ $a->judul }} 
                                            </option>
                                            @endforeach
                                        </select>
                                    <br>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Tanggal Peminjaman</h5></label>
                                        <input type="date" name="tanggalpeminjaman" class="form-control" id="tanggalpeminjaman" aria-describedby="emailHelp" value="{{ $data->tanggalpeminjaman }}">
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Tanggal Pengembalian</h5></label>
                                        <input type="date" name="tanggalpengembalian" class="form-control" id="tanggalpengembalian" aria-describedby="emailHelp" value="{{ $data->tanggalpengembalian }}">
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Status Peminjaman</h5></label>
                                            <select class="form-select" name="statuspeminjaman" aria-label="Default select example">
                                                <option selected disabled>{{ $data->statuspeminjaman }}</option>
                                                <option value="Buku Dipinjam">Buku Dipinjam</option>
                                                <option value="Buku Dikembalikan">Buku Dikembalikan</option>
                                                <option value="Buku Terlambat Dikembalikan">Buku Terlambat Dikembalikan</option>
                                            </select>  
                                    </div>
                                    <br>

                                    <button type="submit" class="btn btn-primary"><i class="lni lni-telegram-original"></i> Update</button>
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
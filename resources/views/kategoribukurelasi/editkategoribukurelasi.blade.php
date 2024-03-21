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
                    <div class="breadcrumb-title pe-3">Update Kategori Buku</div>
                        <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-grid-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Update Kategori</li>
                            </ol>
                        </nav>
                    	</div>
                	</div>
                        <!-- CARD FORM EDIT DATA -->
						<div class="card">
                            <div  class="card-body">
                                <br>
                                <h2 class="text-center mb-4">UPDATE KATEGORI BUKU</h2>
                                <br>
                                <form action="/updatekategoribukurelasi/{{ $data->id }}" method="POST" enctype="multipart\form-data" >
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

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1" class="form-label"><h5>Kategori Buku</h5></label>
                                    <select class="form-control js-example-basic-single" name="kategoriid" id="kategoriid" autocomplete="off">
                                        <option value="" selected disabled>- Pilih Kategori Buku -</option>
                                        @foreach($kategori as $a)
                                        <option value="{{ $a->id }}"
                                            <?php 
                                                if($data->kategoriid == $a->id) { echo 'selected'; }
                                            ?> > {{ $a->namakategori }} 
                                        </option>
                                        @endforeach
                                    </select>
                                <br>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1" class="form-label"><h5>Rak Buku</h5></label>
                                    <select class="form-control js-example-basic-single" name="rakid" id="rakid" autocomplete="off">
                                        <option value="" selected disabled>- Pilih Rak Buku -</option>
                                        @foreach($rak as $a)
                                        <option value="{{ $a->id }}"
                                            <?php 
                                                if($data->rakid == $a->id) { echo 'selected'; }
                                            ?> > {{ $a->namarak }} 
                                        </option>
                                        @endforeach
                                    </select>
                                <br>

                                    <button type="submit" class="btn btn-primary"><i class="lni lni-telegram-original"></i> Update</button>
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
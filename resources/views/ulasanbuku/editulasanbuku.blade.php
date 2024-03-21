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
                                <form action="/updateulasanbuku/{{ $data->id }}" method="POST" enctype="multipart\form-data" >
                                    @csrf
                                    <div class="col-lg-12">
                                    <label for="exampleInputEmail1" class="form-label"><h5>Judul Buku</h5></label>
                                    <select class="form-control js-example-basic-single" name="bukuid" id="bukuid" autocomplete="off">
                                        <option value="" selected disabled>Update Judul Buku</option>
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
                                    <label for="exampleInputEmail1" class="form-label"><h5>Update Rating Buku</h5></label>
                                        <select class="form-select" name="rating" aria-label="Default select example">
                                            <option selected disabled>{{ $data->rating }}</option>
                                            <option value="10">10</option>
                                            <option value="9">9</option>
                                            <option value="8">8</option>
                                            <option value="7">7</option>
                                            <option value="6">6</option>
                                            <option value="5">5</option>
                                            <option value="4">4</option>
                                            <option value="3">3</option>
                                            <option value="2">2</option>
                                            <option value="1">1</option>
                                        </select>  
                                    </div> 
                                    

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h5>Update Ulasan Buku</h5></label>
                                        <input type="text" name="ulasan" class="form-control" id="ulasan" aria-describedby="emailHelp" value="{{ $data->ulasan }}">
                                    </div>
                                    <br>

                                    <button type="submit" class="btn btn-primary"><i class="lni lni-telegram-original"></i> Update</button>
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
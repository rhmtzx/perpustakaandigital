@extends('layout.main')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <br>
        <div class="row">
            @if($bukus->isEmpty())
                <div class="card radius-15 shadow-none">
					<div class="row g-0">
						<div class="col-lg-6">
							<div class="card-body p-5">
								<h1 class="display-1"><span class="text-primary">U</span><span class="text-danger">p</span><span class="text-success">s</span><span class="text-primary">s</span><span class="text-danger">.</span><span class="text-success">.</span></h1>
								<h2 class="font-weight-bold display-4">Maaf Buku Yang Anda Cari Tidak Ada :(</h2>
								<p>Buku Yang Lainnya Tidak Kalah Menarik Untuk Dipinjam Lohh...
									<br>Cari Buku Yang Lainnya Yukk:D
								</p>
								<div class="mt-5">
									<a href="javascript:history.back()" class="btn btn-lg btn-primary px-md-5 radius-30">Kembali Ke Dashboard</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<img src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/images/errors-images/404-error.png')}}" class="card-img" alt="">
						</div>
					</div>
					<!--end row-->
				</div>
            @else
                @foreach($bukus as $data)
                <div class="col-12 col-lg-4">
                    <div class="card-radius-15">
                        <div class="card">
                            <img src="{{ asset('allfoto/' . $data->foto) }}" alt="" style="max-width: 100%;">
                            <div class="card-body">
                                <h4 class="card-title"><b>Judul Buku : {{$data->judul}}</b></h4>
                                <h6 class="card-title">Penulis : {{$data->penulis}}</h6>
                                <br>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal{{$data->id}}">Detail Buku</button>
                                <a href="/addkoleksipribadi" class="btn btn-success">Tambah ke Koleksi Pribadi</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="detailModal{{$data->id}}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Detail Buku</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{ asset('allfoto/' . $data->foto) }}" alt="" style="width: 100%">
                                        </div>
                                        <div class="col-md-8">
                                            <h5>Judul Buku : {{$data->judul}}</h5>
                                            <h6 class="card-title">Penulis : {{$data->penulis}}</h6>
                                            <h6 class="card-title">Penerbit : {{$data->penerbit}}</h6>
                                            <h6 class="card-title">Tahun Terbit : {{$data->tahunterbit}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="/addpeminjamen" class="btn btn-primary mb-10">Pinjam Buku</a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

@endsection

@extends('layout.main')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-12 col-lg-3">
                            <div class="card radius-15 bg-voilet">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h2 class="mb-0 text-white">{{$buku}} <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
                                        </div>
                                        <div class="ms-auto font-35 text-white"><i class="fadeIn animated bx bx-book"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-white">Total Buku</p>
                                        </div>
                                        <div class="ms-auto font-14 text-white">{{$buku}}<i class='bx bxs-up-arrow-alt font-14 text-white'></i></div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="col-12 col-lg-3">
                            <div class="card radius-15 bg-primary-blue">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h2 class="mb-0 text-white">{{$koleksibuku}} <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
                                        </div>
                                        <div class="ms-auto font-35 text-white"><i class="fadeIn animated bx bx-book-bookmark"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-white">Total Koleksi</p>
                                        </div>
                                        <div class="ms-auto font-14 text-white">{{$koleksibuku}}<i class='bx bxs-up-arrow-alt font-14 text-white'></i></div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="col-12 col-lg-3">
                            <div class="card radius-15 bg-rose">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h2 class="mb-0 text-white">{{$kategoribuku}} <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
                                        </div>
                                        <div class="ms-auto font-35 text-white"><i class="fadeIn animated bx bx-customize"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-white">Total Kategori</p>
                                        </div>
                                        <div class="ms-auto font-14 text-white">{{$kategoribuku}}<i class='bx bxs-up-arrow-alt font-14 text-white'></i></div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="col-12 col-lg-3">
                            <div class="card radius-15 bg-sunset">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h2 class="mb-0 text-white">{{$kategoribukurelasi}} <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
                                        </div>
                                        <div class="ms-auto font-35 text-white"><i class="fadeIn animated bx bx-book-reader"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-white">Total Kategori Buku Relasi</p>
                                        </div>
                                        <div class="ms-auto font-14 text-white">{{$kategoribukurelasi}}<i class='bx bxs-up-arrow-alt font-14 text-white'></i></div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="col-12 col-lg-6">
                            <div class="card radius-15 bg-success">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h2 class="mb-0 text-white">{{$peminjaman}} <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
                                        </div>
                                        <div class="ms-auto font-35 text-white"><i class="fadeIn animated bx bx-archive-in"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-white">Total Peminjaman Buku</p>
                                        </div>
                                        <div class="ms-auto font-14 text-white">{{$peminjaman}}<i class='bx bxs-up-arrow-alt font-14 text-white'></i></div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="col-12 col-lg-6">
                            <div class="card radius-15 bg-wall">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h2 class="mb-0 text-white">{{$ulasanbuku}} <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
                                        </div>
                                        <div class="ms-auto font-35 text-white"><i class="fadeIn animated bx bx-book-heart"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-white">Total Ulasan Buku</p>
                                        </div>
                                        <div class="ms-auto font-14 text-white">{{$ulasanbuku}}<i class='bx bxs-up-arrow-alt font-14 text-white'></i></div>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
        <!--end row-->
                
        <div class="col-12 col-lg-12">
            <div class="tab-content shadow" id="faq-tab-content">
                <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                    <div class="" id="accordion-tab-1">
                                        <div class="metismenu-card metismenu">
                                            <div class="card mb-0 shadow-none border-bottom mm-active">
                                                <div class="card-header has-arrow bg-light" id="accordion-tab-1-heading-1" aria-expanded="true">
                                                    <h6 class="mb-0" data-bs-toggle="collapse" data-bs-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">APA ITU DIGITAL LIBRARY ?</h6>
                                                </div>
                                                <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                                    <div class="card-body mm-collapse mm-show">
                                                        <h5><em>Digital Library Adalah Suatu Aplikasi Perpustakaan Digital Yang Dibuat Untuk Memudahkan Para Peminjam Buku Secara Online Melalui Web, Dengan Begitu Kita Tidak Perlu Meminjam Buku Dengan Menggunakan Kertas Atau Buku Lagi.</em></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="metismenu-card metismenu">
                                            <div class="card mb-0 shadow-none border-bottom mm-active">
                                                <div class="card-header has-arrow bg-light" id="accordion-tab-1-heading-2" aria-expanded="true">
                                                    <h6 class="mb-0" data-bs-toggle="collapse" data-bs-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">APA TUJUAN DIGITAL LIBRARY ?</h6>
                                                </div>
                                                <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                                    <div class="card-body mm-collapse mm-show">
                                                        <h5><em>Tujuan Dari Aplikasi Web Digital Library Adalah Untuk Memudahkan Pembaca Buku Dalam Meminjam Buku Di Perpustakaan Secara Online Melalui Situs Web Kami.</em></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="metismenu-card metismenu">
                                            <div class="card mb-0 shadow-none border-bottom mm-active">
                                                <div class="card-header has-arrow bg-light" id="accordion-tab-1-heading-3" aria-expanded="true">
                                                    <h6 class="mb-0" data-bs-toggle="collapse" data-bs-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">BAGAIMANA CARA MENGGUNAKAN DIGITAL LIBRARY ?</h6>
                                                </div>
                                                <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                                    <div class="card-body mm-collapse mm-show">
                                                        <h5><em>Cara Menggunakan Digitall Library Sangatlah Mudah, Anda hanya Perlu Membuat Akun Sebagai Siswa, Lalu Anda Login Dengan Akun Yang Sudah Di Daftarkan Sebelumnya dan Anda Bisa Memulai Meminjam Buku Secara Online Di Menu Sidebar "Peminjaman Buku" dan Jangan Lupa Untuk Mengembalikan Buku Yaa:D.</em></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="metismenu-card metismenu">
                                            <div class="card mb-0 shadow-none border-bottom mm-active">
                                                <div class="card-header has-arrow bg-light" id="accordion-tab-1-heading-4" aria-expanded="true">
                                                    <h6 class="mb-0" data-bs-toggle="collapse" data-bs-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">LAYANAN APA YANG TERDAPAT DALAM DIGITAL LIBRARY ?</h6>
                                                </div>
                                                <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                                    <div class="card-body mm-collapse mm-show">
                                                        <h5><em>Ada Beberapa Layanan Yang Terdapat Dalam Aplkasi Web Digital Library Ini, Diantaranya Adalah Meminjam Buku Secara Online Di Menu "Peminjaman Buku" Anda Juga Bisa Mengulas Buku Yang Sudah Di Pinjam Di Menu "Ulasan Buku   ".</em></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->
        <br>
        <div class="row">
        @foreach($allbuku as $data)
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
                                    <h6 class="card-title">Stok Buku : {{$data->stok}}</h6>
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
        </div>                         
    </div>
</div>

@endsection
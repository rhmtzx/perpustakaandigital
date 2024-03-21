@extends('layout.main')

@section('content')

<div class="page-content-wrapper">
    <div class="justify-content-center">
<div class="page-content">
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Profile</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-user"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
        
    </div>
    <div class="user-profile-page">
        <div class="card radius-15">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-7 border-right">
                        <div class="d-md-flex align-items-center">
                            <div class="mb-md-0 mb-3">
                                <img src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/images/avatars/avatar-111.png')}}" class="rounded-circle shadow" width="130" height="130" alt="">
                            </div>
                            <div class="ms-md-4 flex-grow-1">
                                <div class="d-flex align-items-center mb-1">
                                    <h4 class="mb-0">{{Auth()->user()->namalengkap}}</h4>
                                </div>
                                <p class="text-primary"><i class="bx bx-buildings"></i> {{Auth()->user()->role}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="tab-content mt-12">
                    <div class="tab-pane fade show active" id="Experience">
                        <div class="card shadow-none border mb-0 radius-15">
                            <div class="card-body">
                                <div class="d-sm-flex align-items-center mb-12">
                                    <form action="/updateprofile" method="POST" enctype="multipart/form-data" class="w-100">
                                        <input type="hidden" name="_token" value="zJFJWGKeAdui3i76X2WVUuZMvmr8GekwXCFw3WIZ" autocomplete="off">                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-12">
                                                    <label for="exampleInputEmail1" class="form-label"><h5>Nama Lengkap</h5></label>
                                                    <input type="text" name="namalengkap" class="form-control" id="" aria-describedby="emailHelp" value="{{Auth()->user()->namalengkap}}" >
                                                </div>
                                                <br>
                                                <div class="mb-12">
                                                    <label for="exampleInputEmail1" class="form-label"><h5>Username</h5></label>
                                                    <input type="text" name="username" class="form-control" id="" aria-describedby="emailHelp" value="{{Auth()->user()->username}}" >
                                                </div>
                                                <br>
                                                <div class="mb-12">
                                                    <label for="exampleInputEmail1" class="form-label"><h5>Alamat</h5></label>
                                                    <input type="text" name="alamat" class="form-control" id="" aria-describedby="emailHelp" value="{{Auth()->user()->alamat}}" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-12">
                                                    <label for="exampleInputEmail1" class="form-label"><h5>Role</h5></label>
                                                    <input type="text" name="" class="form-control" id="" aria-describedby="emailHelp" value="{{Auth()->user()->role}}" readonly>
                                                </div>
                                                <br>
                                                <div class="mb-12">
                                                    <label for="exampleInputEmail1" class="form-label"><h5>Email</h5></label>
                                                    <input type="text" name="" class="form-control" id="" aria-describedby="emailHelp" value="{{Auth()->user()->email}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                            
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-primary"><i class="lni lni-telegram-original"></i> Update</button>
                                                <a href="javascript:history.back()" class="btn btn-danger mb-10"><i class="bx bx-share"></i> Kembali</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
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
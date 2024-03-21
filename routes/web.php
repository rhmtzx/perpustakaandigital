<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoribukuController;
use App\Http\Controllers\RakbukuController;
use App\Http\Controllers\KategoribukuRelasiController;
use App\Http\Controllers\KoleksiPribadiController;
use App\Http\Controllers\UlasanBukuController;
use App\Http\Controllers\PeminjamenController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use App\Models\Buku;
use App\Models\Kategoribuku;
use App\Models\Rakbuku;
use App\Models\Kategoribukurelasi;
use App\Models\peminjamen;
use App\Models\koleksipribadi;
use App\Models\ulasanbuku;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// D A S H B O A R D - A D M I N
Route::get('/', function () {
	$buku = buku::count();
	$kategoribuku = kategoribuku::count();
	$koleksibuku = koleksipribadi::count();
	$kategoribukurelasi = kategoribukurelasi::count();
	$peminjaman = peminjamen::count();
	$ulasanbuku = ulasanbuku::count();

	$allbuku = buku::all();

    return view('welcome', compact('buku','kategoribuku','koleksibuku','kategoribukurelasi','peminjaman','ulasanbuku','allbuku'));
});

// D A S H B O A R D - P E T U G A S 
Route::group(['middleware' => ['auth','verified', 'HakAkses:Petugas']], function () {
    Route::get('/welcomep', function () {
    $allbuku = Buku::all();

    $buku = Buku::count();
    $kategoribuku = Kategoribuku::count();
    $kategoribukurelasi = Kategoribukurelasi::count();
    $tittle = 'welcomep';

    return view('welcomep', compact('allbuku','buku','kategoribuku','kategoribukurelasi','tittle'));
})->middleware('auth');
});

// D A S H B O A R D - S I S W A
Route::group(['middleware' => ['auth','verified', 'HakAkses:Siswa']], function () {
    Route::get('/welcomes', function () {
    $allbuku = Buku::all();

    $peminjamensiswa = Peminjamen::where('userid', auth()->id())->count();
    $koleksisiswa = koleksipribadi::where('userid', auth()->id())->count();
    $ulasansiswa = ulasanbuku::where('userid', auth()->id())->count();

    return view('welcomes', compact('allbuku','peminjamensiswa','koleksisiswa','ulasansiswa'));
})->middleware('auth');
});

// AUTHENTICATION
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/proseslogin',[LoginController::class, 'proseslogin'])->name('proseslogin');

Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/prosesregister',[LoginController::class, 'prosesregister'])->name('prosesregister');

Route::get('/registersiswa',[LoginController::class, 'registersiswa'])->name('registersiswa');
Route::post('/prosesregistersiswa',[LoginController::class, 'prosesregistersiswa'])->name('prosesregistersiswa');

Route::get('/registerpetugas',[LoginController::class, 'registerpetugas'])->name('registerpetugas');
Route::post('/prosesregisterpetugas',[LoginController::class, 'prosesregisterpetugas'])->name('prosesregisterpetugas');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/halamancaribuku',[BukuController::class, 'halamancaribuku'])->name('halamancaribuku');
Route::get('/caribuku',[BukuController::class, 'caribuku'])->name('caribuku');





// AUTHENTICATION PETUGAS
Route::group(['middleware' => ['auth', 'HakAkses:Petugas,Admin']], function () {
	// BUKU 
	Route::get('/buku',[BukuController::class, 'buku'])->name('buku')->middleware('auth');
	Route::get('/addbuku', [BukuController::class, 'addbuku'])->name('addbuku');
	Route::post('/insertbuku', [BukuController::class, 'insertbuku'])->name('insertbuku');
	Route::get('/editbuku/{id}', [BukuController::class, 'editbuku'])->name('editbuku');
	Route::post('/updatebuku/{id}', [BukuController::class, 'updatebuku'])->name('updatebuku');
	Route::get('/deletebuku/{id}', [BukuController::class, 'deletebuku'])->name('deletebuku');
	
	Route::get('/cetakbuku', [BukuController::class, 'cetakbuku'])->name('cetakbuku');
	Route::get('/detailbuku/{id}', [BukuController::class, 'detailbuku'])->name('detailbuku');

	Route::get('/dataadmin', [LoginController::class, 'dataadmin'])->name('dataadmin');
	Route::get('/deleteadmin/{id}', [LoginController::class, 'deleteadmin'])->name('deleteadmin');

	Route::get('/profile',[ProfileController::class, 'profile'])->name('profile');
	Route::get('/editprofile', [ProfileController::class, 'editprofile'])->name('editprofile');
	Route::post('/updateprofile', [ProfileController::class, 'updateprofile'])->name('updateprofile');

	// KATEGORI 
	Route::get('/kategoribuku',[KategoribukuController::class, 'kategoribuku'])->name('kategoribuku');
	Route::get('/addkategoribuku', [KategoribukuController::class, 'addkategoribuku'])->name('addkategoribuku');
	Route::post('/insertkategoribuku', [KategoribukuController::class, 'insertkategoribuku'])->name('insertkategoribuku');
	Route::get('/editkategoribuku/{id}', [KategoribukuController::class, 'editkategoribuku'])->name('editkategoribuku');
	Route::post('/updatekategoribuku/{id}', [KategoribukuController::class, 'updatekategoribuku'])->name('updatekategoribuku');
	Route::get('/deletekategoribuku/{id}', [KategoribukuController::class, 'deletekategoribuku'])->name('deletekategoribuku');

	// R A K  B U K U 
	Route::get('/rakbuku',[RakbukuController::class, 'rakbuku'])->name('rakbuku');
	Route::get('/addrakbuku', [RakbukuController::class, 'addrakbuku'])->name('addrakbuku');
	Route::post('/insertrakbuku', [RakbukuController::class, 'insertrakbuku'])->name('insertrakbuku');
	Route::get('/editrakbuku/{id}', [RakbukuController::class, 'editrakbuku'])->name('editrakbuku');
	Route::post('/updaterakbuku/{id}', [RakbukuController::class, 'updaterakbuku'])->name('updaterakbuku');
	Route::get('/deleterakbuku/{id}', [RakbukuController::class, 'deleterakbuku'])->name('deleterakbuku');

	// KATEGORI BUKU 
	Route::get('/kategoribukurelasi',[KategoriBukuRelasiController::class, 'kategoribukurelasi'])->name('kategoribukurelasi');
	Route::get('/addkategoribukurelasi', [KategoriBukuRelasiController::class, 'addkategoribukurelasi'])->name('addkategoribukurelasi');
	Route::post('/insertkategoribukurelasi', [KategoriBukuRelasiController::class, 'insertkategoribukurelasi'])->name('insertkategoribukurelasi');
	Route::get('/editkategoribukurelasi/{id}', [KategoriBukuRelasiController::class, 'editkategoribukurelasi'])->name('editkategoribukurelasi');
	Route::post('/updatekategoribukurelasi/{id}', [KategoriBukuRelasiController::class, 'updatekategoribukurelasi'])->name('updatekategoribukurelasi');
	Route::get('/deletekategoribukurelasi/{id}', [KategoriBukuRelasiController::class, 'deletekategoribukurelasi'])->name('deletekategoribukurelasi');
});

// AUTHENTICATION SISWA 
Route::group(['middleware' => ['auth', 'HakAkses:Siswa,Admin']], function () {
	// ULASAN BUKU
	Route::get('/ulasanbuku',[UlasanBukuController::class, 'ulasanbuku'])->name('ulasanbuku');
	Route::get('/addulasanbuku', [UlasanBukuController::class, 'addulasanbuku'])->name('addulasanbuku');
	Route::post('/insertulasanbuku', [UlasanBukuController::class, 'insertulasanbuku'])->name('insertulasanbuku');
	Route::get('/editulasanbuku/{id}', [UlasanBukuController::class, 'editulasanbuku'])->name('editulasanbuku');
	Route::post('/updateulasanbuku/{id}', [UlasanBukuController::class, 'updateulasanbuku'])->name('updateulasanbuku');
	Route::get('/deleteulasanbuku/{id}', [UlasanBukuController::class, 'deleteulasanbuku'])->name('deleteulasanbuku');

	// PEMINJAMAN
	Route::get('/peminjamen',[PeminjamenController::class, 'peminjamen'])->name('peminjamen');
	Route::get('/addpeminjamen', [PeminjamenController::class, 'addpeminjamen'])->name('addpeminjamen');
	Route::post('/insertpeminjamen', [PeminjamenController::class, 'insertpeminjamen'])->name('insertpeminjamen');
	Route::get('/editpeminjamen/{id}', [PeminjamenController::class, 'editpeminjamen'])->name('editpeminjamen');
	Route::post('/updatepeminjamen/{id}', [PeminjamenController::class, 'updatepeminjamen'])->name('updatepeminjamen');
	Route::get('/deletepeminjamen/{id}', [PeminjamenController::class, 'deletepeminjamen'])->name('deletepeminjamen');
	Route::get('/cetakpeminjamen', [PeminjamenController::class, 'cetakpeminjamen'])->name('cetakpeminjamen');

	Route::get('/kembalikanbuku/{id}', [PeminjamenController::class, 'kembalikanbuku'])->name('kembalikanbuku');

	Route::get('/profile',[ProfileController::class, 'profile'])->name('profile');
	Route::get('/editprofile', [ProfileController::class, 'editprofile'])->name('editprofile');
	Route::post('/updateprofile', [ProfileController::class, 'updateprofile'])->name('updateprofile');

	// KOLEKSI PRIBADI 
	Route::get('/koleksipribadi',[KoleksiPribadiController::class, 'koleksipribadi'])->name('koleksipribadi');
	Route::get('/addkoleksipribadi', [KoleksiPribadiController::class, 'addkoleksipribadi'])->name('addkoleksipribadi');
	Route::post('/insertkoleksipribadi', [KoleksiPribadiController::class, 'insertkoleksipribadi'])->name('insertkoleksipribadi');
	Route::get('/editkoleksipribadi/{id}', [KoleksiPribadiController::class, 'editkoleksipribadi'])->name('editkoleksipribadi');
	Route::post('/updatekoleksipribadi/{id}', [KoleksiPribadiController::class, 'updatekoleksipribadi'])->name('updatekoleksipribadi');
	Route::get('/deletekoleksipribadi/{id}', [KoleksiPribadiController::class, 'deletekoleksipribadi'])->name('deletekoleksipribadi');
});
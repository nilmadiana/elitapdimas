<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\NominalController;
use App\Http\Controllers\NominalxController;
use App\Http\Controllers\PembiayaanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\ProposalxController;
use App\Http\Controllers\SumberController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [IndexController::class, 'index'])->name('index')->middleware('no-cache');
Route::get('/view-jurnal/{id}', [IndexController::class, 'viewJurnal'])->name('view.jurnal')->middleware('no-cache');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.post')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');;

Route::middleware(['auth', 'no-cache'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/users/tambah', [UserController::class, 'create'])->name('user.tambah');
    Route::post('/users/tambah', [UserController::class, 'store'])->name('user.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');

    Route::get('/proposal', [ProposalController::class, 'index'])->name('proposal.index');
    Route::get('/proposal/{id}/detail', [ProposalController::class, 'show'])->name('proposal.detail');
    Route::post('/proposal/{id}/submit', [ProposalController::class, 'submit'])->name('proposal.submit');
    Route::get('/tambah/{nominal_id}', [ProposalController::class, 'create'])->name('proposal.create');
    Route::post('/store', [ProposalController::class, 'store'])->name('proposal.store');
    Route::get('/{proposal}/edit', [ProposalController::class, 'edit'])->name('proposal.edit');
    Route::put('/{proposal}', [ProposalController::class, 'update'])->name('proposal.update');
    Route::post('/proposal/{id}/comment', [ProposalController::class, 'storeComment'])
        ->name('proposal.storeComment');

    Route::post('/tema', [TemaController::class, 'store'])->name('tema.store');

    Route::post('/jenis', [JenisController::class, 'store'])->name('jenis.store');

    Route::post('/sumber', [SumberController::class, 'store'])->name('sumber.store');

    Route::get('/pembiayaan/create', [PembiayaanController::class, 'create'])->name('pembiayaan.create');
    Route::post('/pembiayaan/store', [PembiayaanController::class, 'store'])->name('pembiayaan.store');

    Route::get('/nominal/create/{id}', [NominalController::class, 'create'])->name('pembiayaan.nominal.create');
    Route::post('/nominal/{id}', [NominalController::class, 'store'])->name('pembiayaan.nominal.store');

    Route::get('/tambahx', [ProposalxController::class, 'create'])->name('proposalx.tambah');
    Route::post('/storex', [ProposalxController::class, 'store'])->name('proposalx.store');

    Route::get('/proposalx', [ProposalxController::class, 'index'])->name('proposalx.index');
    Route::get('/proposalx/{id}/detail', [ProposalxController::class, 'show'])->name('proposalx.detail');
    Route::get('/proposalx/{proposalsx}/edit', [ProposalxController::class, 'edit'])->name('proposalx.edit');
    Route::put('/proposalx/{proposalx}', [ProposalxController::class, 'update'])->name('proposalx.update');
    Route::get('/proposalx/{proposalx}/nominal', [ProposalxController::class, 'nominal'])->name('proposalx.nominal');
    Route::post('/proposalx/{id}/submit', [ProposalxController::class, 'submit'])->name('proposalx.submit');
    Route::post('/proposal/{id}/review', [ProposalxController::class, 'updateReview'])->name('proposalx.updateReview');

    Route::get('/nominalsx/create/{proposal}', [NominalxController::class, 'create'])->name('nominalsx.create');
    Route::post('/nominalsx', [NominalxController::class, 'store'])->name('nominalsx.store');
});

Route::get('/tema', [TemaController::class, 'index'])->name('tema.index')->middleware('no-cache');
Route::get('/jenis', [JenisController::class, 'index'])->name('jenis.index')->middleware('no-cache');
Route::get('/sumber', [SumberController::class, 'index'])->name('sumber.index')->middleware('no-cache');

// Route::get('/proposal', function () {
//     return view('peneliti.proposal.proposal');
// });

// Route::get('/tambah', function () {
//     return view('peneliti.proposal.tambahproposal');
// });


// Route::get('/edit', function () {
//     return view('peneliti.proposal.editproposal');
// });

// Route::get('/nominalx', function () {
//     return view('peneliti.proposal.nominalx');
// })->name('nominalx.tambah');
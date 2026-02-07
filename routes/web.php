    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterdUserController;

Route::get('/', fn () => view('welcome'))->middleware('auth');

Route::get('/register', [RegisterdUserController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterdUserController::class, 'store'])->middleware('guest');
Route::get('/login', [SessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest')->name('login');
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




// Route::get('/about', function () {
//     return view('about');
// })->name('about');


Route::get('/', [BookController::class, 'index'])->name('home');


Route::get('/book/{id}', [BookController::class, 'show'])->name('book-show');



//  یعنی action موقع ای که فقط یک متد داشته باشه میتونیم اینجوری ینویسیم
//  متد invokable
Route::get('/contacts', action: ContactController::class)->name('contact');

//یا همون کلاس 
// Route::get('/contacts', [ContactController::class, 'index'])->name('contact');


Route::get('/about', [AboutController::class, 'index'])->name('about');

//    یا متد invokable
// Route::get('/about', action: AboutController::class)->name('about');


// CRUD

Route::get('/book', [BookController::class, 'create'])->name('book-create');
Route::post('/book', [BookController::class, 'store'])->name('book-store');
Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('book-edit');
Route::put('/book/{id}', [BookController::class, 'update'])->name('book-update');
Route::delete('/book/{id}', [BookController::class, 'destroy'])->name('book-destroy');


// به جای اینکه همه روت ها رو بنیویسیم این دستور خودش همه رو داره
Route::resource(name: '/user', controller: UserController::class);

//  مثلا اگر هم متد حذف و نمایش نخواهیم داشته باشیم با except   بگیم
// Route::resource(name: '/user', controller: UserController::class)->except(['destroy', 'show']);

// یا مثلا فقط بخوایم دو تا متد استفاده کنیم بنویسیم only لیست و نمایش
// Route::resource(name: '/user', controller: UserController::class)->only(['index', 'show']);







// Create  get   /book     form to create book
// store   post  /book    store book  database
// Read
// edit    get   /book/id/edit  form to edit book
// Update  put|patch  /book/id  update date  database
// Delete  delete   /book/id  delete from  database

Route::fallback(function () {
    return redirect(to: '/');
    // return redirect()->route('home');
    // abort(code: 404);
});

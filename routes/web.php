<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', \App\Livewire\Web\Home::class)->name('home');

Route::view('/test', 'test')->name('test');


Route::get('/actualite', \App\Livewire\Web\News::class)->name('actualite');

Route::get('/blog', \App\Livewire\Web\Blog::class)->name('blog');

Route::get('/faites-un-don', \App\Livewire\Web\Don::class)->name('don');

Route::get('/vos-avis', \App\Livewire\Web\FeedBack::class)->name('feedback');

Route::get('/contact', \App\Livewire\Web\Contact::class)->name('contact');
Route::get('/apropos-de-nous', \App\Livewire\Web\About::class)->name('about');
Route::get('/foirs-aux-questions', \App\Livewire\Web\About::class)->name('faq');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

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


Route::view('/galerie','testG');

Route::view('/test2','test2')->name('test2');

Route::get('/actualites', \App\Livewire\Web\News::class)->name('Realisations');

Route::get('/actualites/{slug}', \App\Livewire\Realisation\OneRealisation::class)->name('Realisation.one');

Route::get('/category/{intitule}', \App\Livewire\Web\News\CategoryPost::class)->name('CategoryPost');

Route::get('/blog/{slug}', \App\Livewire\Blog\OneView::class)->name('blog.view');
Route::get('/blog', \App\Livewire\Web\Blog::class)->name('blog');

Route::get('/vos-avis', \App\Livewire\Web\FeedBack::class)->name('feedback');

Route::get('/contact', \App\Livewire\Web\Contact::class)->name('contact');
Route::get('/apropos-de-nous', \App\Livewire\Web\About::class)->name('about');
Route::get('/foirs-aux-questions', \App\Livewire\Web\Faq::class)->name('faq');
Route::get('/axe-accompagnement/{axe?}', \App\Livewire\Web\AxeView::class)->name('axe');

Route::get('/faites-un-don', \App\Livewire\Web\DonView::class)->name('don');
Route::get('/join-us/benevole', \App\Livewire\Web\BenevoleView::class)->name('benevole');

Route::get('/join-us/partenarait', \App\Livewire\Web\PartenaireView::class)->name('partenarait');

Route::get('/histoires/{story}', \App\Livewire\Web\OneStory::class)->name('OneStory');

Route::get('/histoires', \App\Livewire\Web\Story::class)->name('story');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

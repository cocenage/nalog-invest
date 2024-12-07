<?php

use App\Http\Controllers\Client\FeedbackController;
use App\Http\Controllers\MetaImageController;
use App\Livewire\NotFound;
use App\Livewire\PageAbout;
use App\Livewire\PageContacts;
use App\Livewire\PageHome;
use App\Livewire\PageProducts;
use App\Livewire\SingleProduct;
use Illuminate\Support\Facades\Route;

Route::get('/', PageHome::class)->name('page.home');
Route::get('/contacts', PageContacts::class)->name('page.contacts');
Route::get('/about', PageAbout::class)->name('page.about');

Route::get('/services', PageProducts::class)->name('page.products');
Route::get('/services/{slug}', SingleProduct::class)->name('single.product');
Route::get('/meta-image/{product}', [MetaImageController::class, 'generate'])->name('meta.image');;


Route::post('/contact', [PageContacts::class, 'handleForm'])->name('contact.send');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/{any}', NotFound::class)->where('any', '.*');

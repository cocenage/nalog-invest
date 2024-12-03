<?php

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
Route::get('/services/{slug}/show', SingleProduct::class)->name('single.product');

Route::get('/{any}', NotFound::class)->where('any', '.*');

Route::post('/contact', [PageContacts::class, 'handleForm'])->name('contact.send');

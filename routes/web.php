<?php

use App\Livewire\NotFound;
use App\Livewire\PageHome;
use App\Livewire\PageProducts;
use App\Livewire\SingleProduct;
use Illuminate\Support\Facades\Route;

Route::get('/', PageHome::class)->name('page.home');
Route::get('/services', PageProducts::class)->name('page.products');
Route::get('/services/{slug}/show', SingleProduct::class)->name('single.product');

Route::get('/{any}', NotFound::class)->where('any', '.*');

<?php

use App\Livewire\Home;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');

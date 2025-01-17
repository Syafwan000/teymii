<?php

use App\Livewire\Home;
use App\Livewire\Pages\Message;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/m/{slug}', Message::class)->name('message');
Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');

Route::get('/m', function() {
    return redirect()->route('home');
});

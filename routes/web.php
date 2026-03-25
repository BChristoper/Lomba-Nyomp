<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/konten', 'pages.konten')->name('konten');
Route::view('/contact', 'pages.contact')->name('contact');

Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:120'],
        'case_type' => ['required', 'string', 'max:120'],
        'message' => ['required', 'string', 'max:1200'],
    ]);

    return to_route('contact')->with('status', sprintf(
        'Permintaan awal dari %s untuk perkara %s telah diterima. Tim akan menindaklanjuti asesmen awal.',
        $validated['name'],
        $validated['case_type'],
    ));
})->name('contact.submit');

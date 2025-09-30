<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/private/thumbnail/{article}', function (Article $article) {
    $path = storage_path('app/private/' . $article->thumbnail);

    if (! file_exists($path)) {
        abort(404);
    }

    return response()->file($path);
})->name('private.thumbnail');

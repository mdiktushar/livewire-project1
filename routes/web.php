<?php

use App\Livewire\BookList;
use App\Livewire\CreateBook;
use App\Livewire\CreateModal;
use Illuminate\Support\Facades\Route;

Route::get('/', BookList::class);
Route::get('/create', CreateBook::class);
Route::get('/create-modal', CreateModal::class);

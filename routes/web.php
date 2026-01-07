<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Customers\CustomerList;
use App\Livewire\Customers\CustomerForm;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);
Route::get('/customers', CustomerList::class)->name('customers.index');
Route::get('/customers/create', CustomerForm::class)->name('customers.create');
Route::get('/customers/{customer}', CustomerForm::class)->name('customers.edit');
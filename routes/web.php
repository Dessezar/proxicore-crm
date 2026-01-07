<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Customers\CustomerList;
use App\Livewire\Customers\CustomerForm;

Route::get('/', CustomerList::class)->name('home');
Route::get('/customers', CustomerList::class)->name('customers.index');
Route::get('/customer-details', CustomerForm::class)->name('customers.details');
Route::get('/customers/{customer}', CustomerForm::class)->name('customers.edit');
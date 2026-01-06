<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;

class CustomerList extends Component
{
    public function render()
    {
        $customers = Customer::query()
            ->orderBy('created_at', 'desc')
            ->get();
        return view('livewire.customers.customer-list', [
            'customers' => $customers,
        ]);
    }
}

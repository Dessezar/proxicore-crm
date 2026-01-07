<?php

namespace App\Livewire\Customers;
use App\Enums\CustomerType;
use App\Models\Customer;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Component;


class CustomerForm extends Component
{

    public ?Customer $customer = null;
    public string $name = '';
    public CustomerType $type;

    public function mount(?Customer $customer = null): void
    {
        if ($customer) {
            $this->customer = $customer;
            $this->name = $customer->name;
            $this->type = $customer->type;
        } else {
            $this->type = CustomerType::Prospect;
        }
    }

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2'],
            'type' => ['required'],
        ];
    }

    public function save(): void
    {
        $this->validate();

        if ($this->customer) {
            $this->customer->update([
                'name' => $this->name,
                'type' => $this->type,
            ]);

            session()->flash('success', 'Customer updated successfully.');
        } else {
            Customer::create([
                'name' => $this->name,
                'type' => $this->type,
            ]);
        }

        session()->flash('success', 'Customer created successfully.');
        $this->redirect('/customers');
    }

    public function render()
    {
        return view('livewire.customers.customer-form', [
            'types' => CustomerType::cases(),
        ]);
    }
}

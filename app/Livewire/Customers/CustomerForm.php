<?php

namespace App\Livewire\Customers;
use App\Enums\CustomerType;
use App\Models\Customer;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Component;


class CustomerForm extends Component
{

    public ?Customer $customer = null;
    public ?int $searchId = null;
    public bool $searched = false;
    public bool $notFound = false;

    public string $name = '';
    public CustomerType $type;

    public function mount(?Customer $customer = null): void
    {
          if ($customer) {
            $this->loadFromCustomer($customer);
            return;
        }
        $this->type = CustomerType::Prospect;
    }

     private function loadFromCustomer(Customer $customer): void
    {
        $this->customer = $customer;
        $this->name = $customer->name;
        $this->type = $customer->type;

        $this->searchId = $customer->id;

        $this->searched = true;
        $this->notFound = false;
    }

     public function searchById(): void
    {
        $this->searched = true;

        $this->validate([
            'searchId' => ['required', 'integer', 'min:1'],
        ], [
            'searchId.required' => 'Skriv in ett kund-id.',
            'searchId.integer' => 'Kund-id måste vara ett heltal.',
            'searchId.min' => 'Kund-id måste vara minst 1.',
        ]);

        $customer = Customer::query()->find($this->searchId);

        if ($customer) {
            $this->loadFromCustomer($customer);
            session()->flash('success', 'Kund hittad.');
            return;
        }

        $this->customer = null;
        $this->notFound = true;

        $this->name = '';
        $this->type = CustomerType::Prospect;
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

            session()->flash('success', 'Kund uppdaterad.');
        } else {
            Customer::create([
                'name' => $this->name,
                'type' => $this->type,
            ]);
        }

        session()->flash('success', 'Kund skapad');
        $this->redirect('/customers');
    }

    public function render()
    {
        return view('livewire.customers.customer-form', [
            'types' => CustomerType::cases(),
        ]);
    }
}

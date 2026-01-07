<div class="max-w-xl">
    <h1 class="text-2xl font-bold mb-6">
        {{ $customer ? 'Redigera kund' : 'Skapa kund' }}
    </h1>

    @if (session()->has('success'))
        <div class="mb-4 p-3 rounded bg-green-100 text-green-800">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="save" class="space-y-4">
        <div>
            <label class="block text-sm font-medium mb-1">Namn</label>
            <input
                type="text"
                wire:model.defer="name"
                class="w-full border rounded px-3 py-2"
            >

            @error('name')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Kundtyp</label>
            <select
                wire:model.defer="type"
                class="w-full border rounded px-3 py-2"
            >
                @foreach ($types as $customerType)
                    <option value="{{ $customerType->value }}">
                        {{ ucfirst($customerType->value) }}
                    </option>
                @endforeach
            </select>

            @error('type')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end gap-2">
            <a
                href="/customers"
                class="px-4 py-2 rounded border"
            >
                Avbryt
            </a>

            <button
                type="submit"
                class="px-4 py-2 rounded bg-indigo-600 text-white hover:bg-indigo-700"
                wire:loading.attr="disabled"
            >
                Spara
            </button>
        </div>
    </form>
</div>

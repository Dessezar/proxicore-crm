<div class="max-w-2xl">
    <h1 class="text-2xl font-bold mb-6">Kunddetaljer</h1>

    @if (session()->has('success'))
        <div class="mb-4 p-3 rounded bg-green-100 text-green-800">
            {{ session('success') }}
        </div>
    @endif

    <!-- Sök på ID -->
    <div class="bg-white border rounded shadow-sm p-4 mb-6">
        <h2 class="font-semibold mb-3">Sök kund på ID</h2>

        <div class="flex gap-2 items-start">
            <div class="flex-1">
                <input
                    type="number"
                    min="1"
                    wire:model.defer="searchId"
                    class="w-full border rounded px-3 py-2"
                    placeholder="Ex: 12"
                />

                @error('searchId')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button
                type="button"
                wire:click="searchById"
                class="px-4 py-2 rounded bg-indigo-600 text-white hover:bg-indigo-700"
                wire:loading.attr="disabled"
            >
                Sök
            </button>
        </div>

        @if ($searched && $notFound)
            <p class="mt-3 text-sm text-red-700">
                Kunden finns inte. Du kan skapa en ny kund nedan.
            </p>
        @endif

        @if ($customer)
            <p class="mt-3 text-sm text-gray-700">
                Redigerar kund med ID: <span class="font-semibold">{{ $customer->id }}</span>
            </p>
        @endif
    </div>

    <!-- Skapa eller redigera -->
    <div class="bg-white border rounded shadow-sm p-6">
        <h2 class="font-semibold mb-4">
            {{ $customer ? 'Redigera kund' : 'Skapa kund' }}
        </h2>

        <form wire:submit.prevent="save" class="space-y-4">
            <div>
                <label class="block text-sm font-medium mb-1">Namn</label>
                <input
                    type="text"
                    wire:model.defer="name"
                    class="w-full border rounded px-3 py-2"
                />

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
                <a href="/customers" class="px-4 py-2 rounded border">
                    Till kundlista
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
</div>
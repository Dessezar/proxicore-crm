<div>
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Kundlista</h1>

        <a
            href="/customers/create"
            class="px-4 py-2 rounded bg-indigo-600 text-white hover:bg-indigo-700"
        >
            Ny kund
        </a>
    </div>

    <div class="bg-white border rounded shadow-sm overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="px-4 py-3 text-sm font-semibold">Namn</th>
                    <th class="px-4 py-3 text-sm font-semibold">Typ</th>
                    <th class="px-4 py-3 text-sm font-semibold"></th>
                </tr>
            </thead>

            <tbody class="divide-y">
                @forelse ($customers as $customer)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">
                            {{ $customer->name }}
                        </td>

                        <td class="px-4 py-3">
                            <span class="inline-flex px-2 py-1 text-xs rounded bg-gray-100">
                                {{ $customer->type->value }}
                            </span>
                        </td>

                        <td class="px-4 py-3 text-right">
                            <a
                                href="/customers/{{ $customer->id }}"
                                class="text-indigo-600 hover:underline"
                            >
                                Öppna
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="px-4 py-6 text-gray-500" colspan="3">
                            Inga kunder ännu.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

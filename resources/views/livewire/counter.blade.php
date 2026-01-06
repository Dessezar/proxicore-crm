<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-8 w-80 text-center">
        <h1 class="text-2xl font-bold text-indigo-600 mb-4">
            Counter
        </h1>

        <p class="text-lg mb-6">
            Count:
            <span class="font-mono font-semibold">
                {{ $count }}
            </span>
        </p>

        <button
            wire:click="increment"
            class="w-full px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded transition disabled:opacity-50"
        >
            Increment
        </button>
    </div>
</div>

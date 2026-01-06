<div class="p-4">
    <h1 class="text-xl font-bold">Counter</h1>

    <p class="my-2">Count: {{ $count }}</p>

    <button
        wire:click="increment"
        class="px-4 py-2 bg-blue-600 text-white rounded"
    >
        Increment
    </button>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Proxicore CRM' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen bg-gray-100">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-white border-r">
            <div class="p-4 font-bold text-lg">
                Proxicore CRM
            </div>

            <nav class="px-2 space-y-1">
                <a
                    href="/customers"
                    class="block px-3 py-2 rounded hover:bg-gray-100"
                >
                    Kundlista
                </a>

                <a
                    href="/customers/create"
                    class="block px-3 py-2 rounded hover:bg-gray-100"
                >
                    Kunddetaljer
                </a>
            </nav>
        </aside>
        <main class="flex-1 p-6">
            {{ $slot }}
        </main>
    </div>
    @livewireScripts
</body>
</html>

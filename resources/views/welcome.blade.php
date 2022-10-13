<x-app-layout>

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            @auth
                <x-dashboard />
            @else
                MAIN SITE
            @endauth
        </div>
    </div>
</x-app-layout>


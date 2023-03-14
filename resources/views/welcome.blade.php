<x-app-layout>
    <div class="flex justify-center">
        <div class="w-1/2">
            @include('layouts.navigation')

            <div class="relative flex items-top justify-center min-h-screen dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                <div class="mx-auto sm:px-6 lg:px-8 w-full">
                    @auth
                        <x-dashboard />
                    @else
                        <section class="text-center">
                            <h1 class="text-center">How does Snowball code look?</h1>
                            <p class="text-center">💡 Here are some small examples for you to get a vibe of it.</p>
                        </section>
                        <section class="mt-16 w-full">
                            <div class="flex w-full justify-between">
                                <div class="home-example"></div>
                                <div class="home-example"></div>
                            </div>
                            <div class="mt-5">
                                <div class="home-example w-full"></div>
                            </div>
                        </section>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<x-app-layout>
    @include('layouts.navigation')

    <div class="h-[40vh] justify-center relative content-center flex-wrap p-0 flex-col flex">
        <h1 class="text-2xl mx-auto text-center mb-4">Search from {{-- $packages->count() TODO --}}100,000,00 packages</h1>
        <div class="w-2/5 mx-auto border-2 border-black rounded content-center h-10 justify-center p-0 flex">
            <input class="px-5 focus:outline-0 w-full h-full p-0 rounded" />
            <div class="cursor-pointer w-28 text-white rounded-none h-full bg-black flex items-center justify-center font-bold">Search</div>
        </div>
    </div>

    <div class="relative flex items-top justify-center h-max bg-gray-100 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        </div>
    </div>
</x-app-layout>
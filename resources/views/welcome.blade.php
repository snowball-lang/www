<x-app-layout>
    <div class="flex justify-center">
        <div class="w-1/2 relative">
            @include('layouts.navigation')

            <div class="relative flex items-top justify-center min-h-screen dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                <div class="mx-auto sm:px-6 lg:px-8 w-full">
                    @auth
                        <x-dashboard />
                    @else
                        <div id="fullpageScroll">
                            <div class="section text-center h-screen w-full relative flex content-center flex-col items-center justify-center">
                                <div class="flex content-center relative w-full h-screen flex-col justify-center">
                                    <h1 class="w-full flex justify-center text-center mb-1">A fast and clean language.</h1>
                                    <p class="w-full text-center">Snowball allows you to write more in less code. It's simple syntax and tools it will allow you to write fast and efficient software.</p>
                                    <div class="flex mx-auto w-full items-center mt-10">
                                        <x-nav-link class="ml-auto" href="/docs">Documentation</x-nav-link>
                                        <div class="py-1 px-3 mr-auto font-bold border-2 cursor-pointer border-black ml-10 rounded duration-150 hover:bg-black hover:text-white">
                                            Download
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section">
                                <div class="section text-center pt-24 h-screen w-full relative flex content-center flex-col items-center justify-center">
                                    <section class="text-center">
                                        <h1 class="text-center">How does Snowball code look?</h1>
                                        <p class="text-center">💡 Here are some small examples for you to get a vibe of it.</p>
                                    </section>
                                    <section class="mt-16 w-full">
                                        <div class="flex w-full justify-between">
                                            <div class="home-example">
                                                <h1 class="text-left w-full">✌ Hello, world</h1>
                                                <p class="pt-2 text-left">The classic Hello World program in Snowball is as simple as a call to System::println.</p>
                                                <pre class="p-3 text-left w-full bg-white border mt-4 border-gray-400 rounded snowball-lang">
<span class="k">use</span> Core::System;

<span class="k">fn</span> <span class="ty">main</span>() {
    System::<span class="ty">println</span>(<span class="s">"Hello, world!"</span>);
}</pre>
                                            </div>
                                            <div class="home-example">
                                                <h1 class="text-elft w-full">Object oriented</h1>
                                                <p class="pt-2 text-left">An example of a class declaration and how you can publicly declare members or functions.</p>
                                                <pre class="p-3 text-left w-full bg-white border mt-4 border-gray-400 rounded snowball-lang">
<span class="k">class</span> <span class="ty">Dog</span>: <span class="ty">Animal</span> {
    <span class="k">let mut</span> sound: <span class="k">String</span> = <span class="s">""</span>;
<span class="k">pub</span>:
    <span class="k">fn</span> <span class="ty">getSound</span>(): <span class="k">String</span> => <span class="mi">self</span>.sound;
}</pre>
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <div class="home-example w-full flex">
                                                <div class="relative">
                                                    <h1 class="text-left w-full">Fibonacci sequence</h1>
                                                    <p class="pt-2 text-left">Here's an example on how to do the fibonacci sequence in snowball. It's as fast as any other low-level programming language such as c++ or rust.</p>
                                                    <p class="pt-2 absolute bottom-0 left-0">Checkout the benchmarks <span><a href="#">here</a></span>.</p>
                                                </div>
                                                <pre class="p-3 text-left w-full bg-white border mt-4 border-gray-400 rounded snowball-lang min-w-[400px] ml-10">
<span class="k">fn</span> <span class="ty">fib</span>(n: <span class="k">i64</span> = <span class="ty">47</span>) <span class="k">i64</span> {
    <span class="k">if</span> n <= <span class="ty">1</span> {
        <span class="k">return</span> n;
    }

    <span class="k">return</span> <span class="ty">fib</span>(n-<span class="ty">1</span>) + <span class="ty">fib</span>(n-<span class="ty">2</span>);
}</div>
                                        </div>
                                        <div class="w-full p-2 px-5 my-6 border-black rounded-lg flex content-center justify-between">
                                            <h1 class="font-normal text-base m-0 p-0 flex items-center"><b class="mr-2">Not enough examples?</b> There are many more to explore!</h1>
                                            <div class="py-1 px-3 font-bold border-2 cursor-pointer text-white bg-black border-black ml-10 rounded duration-150 hover:bg-white hover:text-black">
                                                Learn more
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            {{-- <div class="section">
                                <div class="section text-center pt-24 h-screen w-full relative flex content-center flex-col items-center justify-center">

                                </div>
                            </div> --}}
                        </span>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        window.addEventListener("load", () => {
            console.log(fullpage)
            var myFullpage = new window.fullpage('#fullpageScroll', {

            });
        })
    </script>
</x-app-layout>


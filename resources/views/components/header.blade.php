<header class="sticky top-0 flex w-full h-20 bg-white shadow">
    <div class="flex items-center justify-between flex-grow mx-2 items-right">
        <div class="absolute right-0 flex gap-2 mr-5 items-right">
            <form action="/logout" method="post">
                @csrf
                <button type="submit"
                    class="inline-flex items-center justify-center gap-1 px-2 py-0.5 text-center text-white rounded-full bg-dark font-xs xl:font-sm hover:bg-opacity-90 lg:px-2 xl:px-3">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>

                    </span>
                    Log Out
                </button>
            </form>

            <!-- User Area -->
            <div class="flex gap-3 items-right">
                <span class="text-right lg:block">
                    <span class="block font-medium text-md text-dark">{{ Auth::user()->name }}</span>
                    <span class="block text-sm font-medium text-dark">{{ Auth::user()->role->name }}</span>
                </span>

                <span>
                    <img class="w-12 h-12 rounded-full" src="{{ asset('storage/images/user-01.png') }}" />
                </span>

            </div>
            <!-- User Area -->

            <button id="toggler"
            class="inline-flex px-3 py-3 text-sm font-medium leading-tight text-white uppercase transition duration-150 ease-in-out rounded shadow-md bg-dark hover:bg-dark hover:shadow-lg focus:bg-dark focus:shadow-lg focus:outline-none focus:ring-0 active:bg-dark active:shadow-lg md:hidden"
            data-te-sidenav-toggle-ref data-te-target="#full-screen-example" data-te-ripple-init
            data-te-ripple-color="white">
            <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </button>
        </div>
    </div>
</header>

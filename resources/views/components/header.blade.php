<header class="fixed flex w-full h-20 bg-white shadow">
    <div class="flex items-center justify-between flex-grow mx-2 items-right md:px-6 2xl:px-11">

        <div class="relative mx-auto">
            <a href="/" class="">
                <x-application-logo />
            </a>
        </div>


        <div class="relative flex gap-2 items-right 2xsm:gap-7">
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
                <span class="hidden text-right lg:block">
                    <span class="block font-medium text-md text-dark">{{ Auth::user()->name }}</span>
                    <span class="block text-sm font-medium text-dark">{{ Auth::user()->role->name }}</span>
                </span>

                <span>
                    <img class="w-12 h-12 rounded-full" src="{{ asset('storage/images/user-01.png') }}" />
                </span>

            </div>
            <!-- User Area -->
        </div>
    </div>
</header>

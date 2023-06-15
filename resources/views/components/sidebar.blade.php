<nav id="full-screen-example"
    class="fixed left-0 top-0 z-[1035] h-screen w-50 -translate-x-full overflow-hidden bg-dark shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] md:data-[te-sidenav-hidden='false']:translate-x-0"
    data-te-sidenav-init data-te-sidenav-mode-breakpoint-over="0" data-te-sidenav-mode-breakpoint-side="sm"
    data-te-sidenav-hidden="false" data-te-sidenav-color="dark" data-te-sidenav-content="#content"
    data-te-sidenav-scroll-container="#scrollContainer">
    <div class="items-center justify-center">
        <div id="header-content" class="my-2 ml-15">
            <a href="/" class="">
                <x-application-logo-white />
            </a>
        </div>
        <hr class="w-5/6 border-gray-300" />
    </div>
    @if (auth()->user()->role_id === 1)
        @include('sidebar.police_sidebar')
    @endif
    @if (auth()->user()->role_id === 2)
        @include('sidebar.sl_sidebar')
    @endif
    @if (auth()->user()->role_id === 3)
        @include('sidebar.co_sidebar')
    @endif
    @if (auth()->user()->role_id === 4)
        @include('sidebar.admin_sidebar')
    @endif
    @if (auth()->user()->role_id === 5)
        @include('sidebar.dc_sidebar')
    @endif


    <div class="absolute bottom-0 w-full h-24 text-xl font-bold text-center text-white bg-inherit">
        <hr class="mb-6 border-gray-300" />
        <p>Ambo University</p>
        <p>HHC</p>
    </div>
</nav>
<!-- Sidenav -->

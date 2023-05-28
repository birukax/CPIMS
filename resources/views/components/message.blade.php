@if (Session::has('message'))
<div data-te-chip-init data-te-ripple-init
    class="[word-wrap: break-word] my-[5px] w-1/4 mr-4 flex h-[32px] cursor-pointer items-center justify-between rounded-[16px] border border-[#14a44d] bg-[#eceff1] bg-[transparent] px-[12px] py-0 text-[13px] font-normal normal-case leading-loose text-[#4f4f4f] shadow-none transition-[opacity] duration-300 ease-linear hover:border-[#14a44d] hover:!shadow-none dark:text-neutral-200 col"
    data-te-ripple-color="dark">
    {{ Session::get('message') }}
    <span data-te-chip-close
        class="float-right w-4 cursor-pointer pl-[8px] text-[16px] text-[#afafaf] opacity-[.53] transition-all duration-200 ease-in-out hover:text-[#8b8b8b] dark:text-neutral-400 dark:hover:text-neutral-100">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="h-3 w-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </span>
</div>
        @php
            Session::forget('message');
        @endphp
    </div>
@endif

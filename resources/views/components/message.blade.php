@if (Session::has('message'))
<div data-te-chip-init data-te-ripple-init
    class="[word-wrap: break-word] my-[5px] w-2/5 mr-4 flex h-[32px] cursor-pointer items-center justify-between rounded-[16px] border border-[#14a44d] bg-[#eceff1] bg-[transparent] px-[12px] py-0 text-[13px] font-normal normal-case leading-loose text-[#4f4f4f] shadow-none transition-[opacity] duration-300 ease-linear hover:border-[#14a44d] hover:!shadow-none dark:text-neutral-200 col"
    data-te-ripple-color="dark">
    {{ Session::get('message') }}
</div>
        @php
            Session::forget('message');
        @endphp
@endif

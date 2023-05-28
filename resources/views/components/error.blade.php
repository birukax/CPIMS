
@if(Session::has('error'))
<div class=" bg-success-500">
    {{ Session::get('error') }}
    @php
        Session::forget('error');
    @endphp
</div>
@endif


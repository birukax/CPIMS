@if ($errors->any())
    <div {{ $attributes }} class="'m-2 p-2">
        <div class="font-medium text-dark">@foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach</div>
    </div>
@endif

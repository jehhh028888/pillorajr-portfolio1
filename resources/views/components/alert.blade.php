<div>
    {{ $slot }}
    @if(session()->has('error'))
    <div class="alert alert-danger">{{session()->get ('error') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
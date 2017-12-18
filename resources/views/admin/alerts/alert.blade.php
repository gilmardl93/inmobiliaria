    @if(session('success'))
    <div class="note note-success">
        {!! session('success') !!}          
    </div>
    @endif

    @if(session('danger'))
    <div class="note note-danger">
        {!! session('danger') !!}           
    </div>
    @endif
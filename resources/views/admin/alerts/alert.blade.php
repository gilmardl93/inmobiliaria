    @if (session('success'))
    <div class="alert alert-success" role="alert">
        <i class="glyphicon glyphicon-ok"></i> 
        {!! session('success') !!}          
    </div>
    @endif

    @if (session('warning'))
    <div class="alert alert-warning" role="alert">
        <i class="glyphicon glyphicon-ok"></i> 
        {!! session('warning') !!}          
    </div>
    @endif

    @if (session('info'))
    <div class="alert alert-info" role="alert">
        <i class="glyphicon glyphicon-ok"></i> 
        {!! session('info') !!}          
    </div>
    @endif

    @if (session('danger'))
    <div class="alert alert-danger" role="alert">
        <i class="glyphicon glyphicon-trash"></i> 
        {!! session('danger') !!}           
    </div>
    @endif
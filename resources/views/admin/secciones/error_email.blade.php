{{-- Bloque de mensajes --}}
@if (session('status2'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong style="font-size: 1.5em"><i class="fe-check-circle"></i> Error</strong>  <br>
        {!! session('status2') !!}
    </div>
@endif
{{-- fin bloque mensajes --}}


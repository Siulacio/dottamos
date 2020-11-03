{{-- Bloque de mensajes --}}
@if (session('status'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong style="font-size: 1.5em"><i class="fe-check-circle"></i> Exitoso</strong>  <br>
        {!! session('status') !!}
    </div>
@endif
{{-- fin bloque mensajes --}}


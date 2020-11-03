{{-- Validaciones para los errores --}}
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <strong style="font-size: 1.5em"><i class="fe-alert-triangle"></i> Error</strong>  
            @foreach ($errors->all() as $error)
                <li>{!!$error!!}</li>    
            @endforeach
        </ul>
    </div>  
@endif
{{-- fin validaciones para los errores --}}


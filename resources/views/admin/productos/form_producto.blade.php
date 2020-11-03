<div class="form-group row">
    <label class="col-md-2 col-form-label" for="nombre">Nombre</label>
    <div class="col-md-10">
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre',$producto->nombre ?? '')}}" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label" for="descripcion">Descripcion</label>
    <div class="col-md-10">
        <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion',$producto->descripcion ?? '')}}" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label" for="orden">Imágen</label>
    <div class="col-md-10">
        <input type="file" name="imagen" id="imagen" value="{{ old('imagen',$producto->imagen ?? '')}}" class="form-control">
        <span class="text-muted">Para una correcta visualización se recomienda imágenes de 800 x 800 </span>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label" for="orden">Categoría</label>
    <div class="col-md-10">
        <select class="form-control select2 select2-hidden-accessible" name="categoria_id" data-select2-id="1" tabindex="-1" aria-hidden="true" required>
            <option value="" disabled selected>Seleccione categoría....</option>
            @foreach ($categorias as $categoria)
                @if ( isset($producto->categoria_id) )
                    @if ($categoria->id == $producto->categoria_id)
                        <option value="{{$categoria->id}}" selected>{{$categoria->nombre}}</option>
                    @else
                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                    @endif
                @else
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label" for="orden">Precio</label>
    <div class="col-md-10">
        <input type="text" name="precio" id="precio" value="{{ old('precio',$producto->precio ?? '')}}" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label" for="orden">Orden</label>
    <div class="col-md-10">
        <input type="text" name="orden" id="orden" value="{{ old('orden',$producto->orden ?? '')}}" class="form-control">
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label" for="orden">Producto relevante</label>
    <div class="col-md-10">
        <div class="switchery-demo">
            @if ( isset($producto->destacado) && $producto->destacado == 1)
                <input type="checkbox" checked name="destacado" id="destacado" data-plugin="switchery" data-color="#3db9dc" data-size="small"/>
            @else
                <input type="checkbox" name="destacado" id="destacado" data-plugin="switchery" data-color="#3db9dc" data-size="small"/>
            @endif
        </div>
    </div>
</div>

{{-- ocultos --}}
<input type="hidden" name="id" id="id" value="{{ old('id',$producto->id ?? '')}}">
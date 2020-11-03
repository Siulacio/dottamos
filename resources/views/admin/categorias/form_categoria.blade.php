    <div class="form-group row">
        <label class="col-md-2 col-form-label" for="nombre">Nombre</label>
        <div class="col-md-10">
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre',$categoria->nombre ?? '')}}" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2 col-form-label" for="descripcion">Descripcion</label>
        <div class="col-md-10">
            <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion',$categoria->descripcion ?? '')}}" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2 col-form-label" for="orden">Orden</label>
        <div class="col-md-10">
            <input type="text" name="orden" id="orden" value="{{ old('orden',$categoria->orden ?? '')}}" class="form-control">
        </div>
    </div>
   
    {{-- ocultos --}}
    <input type="hidden" name="id" id="id" value="{{ old('id',$categoria->id ?? '')}}">
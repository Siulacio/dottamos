<div class="form-group row">
    <label class="col-md-2 col-form-label" for="username">Usuario</label>
    <div class="col-md-10">
        <input type="text" name="username" id="username" value="{{ old('username',$usuario->username ?? '')}}" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label" for="nombres">Nombres</label>
    <div class="col-md-10">
        <input type="text" name="nombres" id="nombres" value="{{ old('nombres',$usuario->nombres ?? '')}}" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label" for="email">Email</label>
    <div class="col-md-10">
        <input type="email" name="email" id="email" value="{{ old('email',$usuario->email ?? '')}}" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label" for="password">Contraseña</label>
    <div class="col-md-10">
        <input type="password" name="password" id="password" value="" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label" for="password_confirm">Confirmar Contraseña</label>
    <div class="col-md-10">
        <input type="password" name="password_confirm" id="password_confirm" value="" class="form-control">
    </div>
</div>

{{-- ocultos --}}
<input type="hidden" name="id" id="id" value="{{ old('id',$usuario->id ?? '')}}">
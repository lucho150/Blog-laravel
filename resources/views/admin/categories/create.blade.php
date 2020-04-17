@extends('admin.template.main')
@section('title', 'Agregar Categoria')

@section('content')

<form action="{{ Route('admin.categories.store') }}" method="POST">
{!! csrf_field() !!}    
<div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input name="name"  type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
        <div class="alert alert-danger" role="alert">
            {!!$errors->first('name') !!}
           
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection

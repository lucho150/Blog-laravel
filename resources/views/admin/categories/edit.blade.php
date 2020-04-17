@extends('admin.template.main')

@section('title', 'editar categoria')

@section('content')

<form action="{{Route('admin.categories.update', $categories->id)}}" method="POST">

    {{ method_field('PUT') }}
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input name="name" type="name" value="{{$categories->name}}" class="form-control" placeholder="Nombre">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <button type="submit" class="btn btn-primary">Editar</button>

</form>

@endsection
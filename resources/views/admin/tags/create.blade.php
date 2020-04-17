@extends('admin.template.main')

@section('title', 'crear tags')
@section('content')


<form action="{{Route('admin.tags.store')}}" method="POST">

{!!  csrf_field() !!}
    <label for="exampleInputEmail1">Nombre</label>
    <input name="name" type="text" class="form-control" placeholder="Nombre">
    <div class="alert alert-danger" role="alert">
        {!!$errors->first('name') !!}

    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>


@endsection 
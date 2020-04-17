@extends('admin.template.main')
@section('title'. 'crear usuario')
@section('content')

<div class="container">
 <div class="row">
    <div class="col-12">
        <form action="{{Route('admin.users.update', $user->id)}}" method="POST">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input name="name" type="name" value="{{$user->name}}" class="form-control" placeholder="Nombre">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Correo electronico</label>
                <input name="email" type="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Type</label>
                </div>
                <select name="type" class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="admin">Admin</option>
                    <option value="member">Miembro</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Editar</button>
        </form>

    </div>
 </div>

</div>



@endsection
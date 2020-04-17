@extends('admin.template.main')
@section('title'. 'crear usuario')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-5">
            <form action="{{Route('admin.users.store')}}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input name="name" type="text" class="form-control" placeholder="Nombre">
                    <div class="alert alert-danger" role="alert">
                        {!!$errors->first('name') !!}
                    </div>

                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo electronico</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    <div class="alert alert-danger" role="alert">
                        {!!$errors->first('email') !!}
                    </div>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <div class="alert alert-danger" role="alert">
                        {!!$errors->first('password') !!}
                    </div>
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
                    <div class="alert alert-danger" role="alert">
                        {!!$errors->first('type') !!}
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>

        </div>
    </div>

</div>



@endsection
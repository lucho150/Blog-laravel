@extends('admin.template.main')
@section('title', 'lista de usuarios')
@section('content')
<hr><a href="{{Route('admin.users.create')}}" class="btn btn-info"><img width="30px" height="30px" src="https://previews.123rf.com/images/vladvm/vladvm1604/vladvm160400028/54826238-el-icono-de-agregar-usuario-a%C3%B1adir-amigo-y-s%C3%ADmbolo-avatar-ui-web-logo-firmar-dise%C3%B1o-plano-app-stock-vector.jpg" alt="cdsv"> Nuevo usuario</a>

<br>
<hr>
<div>
    <table class="table table-striped table-dark">
        <thead>
            <tr class="bg-success">
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Type</th>
                <th scope="col">Accion</th>

            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{ $user->type }}
                </td>
                <td><a href="{{Route('admin.users.destroy', $user->id)}}" class="btn btn-danger" onclick="return confirm('¿seguro que deseas eliminarlos?')"><img width="20px" height="20px" src="https://image.flaticon.com/icons/png/512/61/61391.png" alt=""></a> 
                <a href="{{ Route('admin.users.edit', $user->id) }}" class="btn btn-warning"><img width="20px" height="20px" src="https://cdn140.picsart.com/269304058008211.png?type=webp&to=min&r=1024" alt="edit"></a></td>
            </tr>
            @endforeach
    


        </tbody>
    </table>
    {!! $users->render() !!}
</div>


@endsection
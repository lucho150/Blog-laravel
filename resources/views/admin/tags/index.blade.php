@extends('admin.template.main')

@section('content')
<hr>
<div class="col-8">

    <a href="{{Route('admin.tags.create')}}" class="btn btn-info"> Nuevo tag</a>
    <hr>
    <!-- //buscador -->
    <form action="{{Route('admin.tags.index')}}" method="GET" class="navbar-form pull-right">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
            </div>
            <input type="text" class="form-control" name="name" placeholder="buscar tag" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </form>
    <hr>
    <!-- buscador -->

    <table class="table table-striped table-dark">
        <thead>

            <tr class="bg-success">
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Accion</th>

            </tr>
        </thead>

        <tbody>
            @foreach($tags as $tag)
            <tr>
                <td>{{$tag->id}}</td>
                <td>{{$tag->name}}</td>

                <td><a href="{{Route('admin.tags.delete', $tag->id)}}" class="btn btn-danger" onclick="return confirm('¿seguro que deseas eliminarlos?')"><img width="20px" height="20px" src="https://image.flaticon.com/icons/png/512/61/61391.png" alt=""></a>
                    <a href="{{Route('admin.tags.edit', $tag->id)}}" class="btn btn-warning"><img width="20px" height="20px" src="https://cdn140.picsart.com/269304058008211.png?type=webp&to=min&r=1024" alt="edit"></a></td>
            </tr>
            @endforeach

        </tbody>






        </tbody>
    </table>
    {!! $tags->render() !!}


    @endsection
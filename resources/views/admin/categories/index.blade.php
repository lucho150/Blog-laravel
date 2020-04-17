@extends('admin.template.main')
@section('title', 'listado de categorias')

@section('content')

<hr>
<div class="col-5">
<a href="{{Route('admin.categories.create')}}" class="btn btn-info">Nueva Categoria</a>
</div>
<hr>
<div class="col-8">
    <table class="table table-striped table-dark">
        <thead>
            <tr class="bg-success">
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Accion</th>

            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                </td>
                <td><a href="{{Route('admin.categories.destroy', $category->id)}}" class="btn btn-danger" onclick="return confirm('¿seguro que deseas eliminarlos?')"><img width="20px" height="20px" src="https://image.flaticon.com/icons/png/512/61/61391.png" alt=""></a> 
                <a href="{{Route('admin.categories.edit', $category->id)}}" class="btn btn-warning"><img width="20px" height="20px" src="https://cdn140.picsart.com/269304058008211.png?type=webp&to=min&r=1024" alt="edit"></a></td>
            </tr>
            @endforeach



        </tbody>
    </table>
    {!! $categories->render() !!}
@endsection
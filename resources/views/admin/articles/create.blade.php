@extends('admin.template.main')

@section('content')

<form action="{{Route('admin.articles.store')}}" method="POST">

    {!! csrf_field() !!}
    <div class="col-5">
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input name="title" type="text" class="form-control" placeholder="Title">



        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Contenido</label>
            <textarea name="content" type="text" class="form-control" placeholder="Contenido"></textarea>


        </div>




        <div class="form-group">
            <label class="input-group-text" for="inputGroupSelect01">Selecciona una categoria</label>


            <div>
                <!-- select categories -->
                <select name="category_id" class="custom-select" id="inputGroupSelect01">
                    <option value="null" placeholder="seleccione una opcion">seleccione una opcion</option>
                    @foreach($categories as $category)
                    <option>{{$category->name}}</option>

                    @endforeach

                </select>


            </div>
        </div>

        <!-- select tags -->

        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Selecciona una tag</label>

            <div>
                <select name="tags" class="custom-select" id="inputGroupSelect01">
                    <option placeholder="seleccione una opcion">seleccione una opcion</option>
                    @foreach($tags as $tag)
                    <option>{{$tag->name}}</option>     

                    @endforeach

                </select>
            </div>


        </div>
        <hr>


        <hr>
        <div>
            <button type="submit" class="btn btn-primary">Crear articulo</button>

        </div>
    </div>

</form>


@endsection
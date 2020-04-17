<!DOCTYPE html>
<html lang="en">



<head>
    <title>@yield('title', 'Default') | panel de administracion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link  rel = " stylesheet "  href = " //maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css " > -->
    <link href="css/style.css" rel="stylesheet">

</head>


<body style="background: url('https://www.consumer.es/wp-content/uploads/2019/07/img_fondo-pantalla-wallpaper-1280x720.jpg')">
    <div class="row">
        <div class="col-md-12 col-md-offset-12">
            @include('admin.template.partials.nav')
            <section>

                @yield('content')
            </section>
        </div>
    </div>

  

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<!-- <link  rel = " stylesheet "  href = " //maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css " > -->

</html>
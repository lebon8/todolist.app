<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>todo-nouveau</title>

        <!-- Fonts -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
        

    </head>
    <body>
    <br>
    <br>
    <div class="container ">
       <h2>Nouvelle tache</h2>

       <form action="{{ asset('enregistre') }}" method="post">
       {{ csrf_field() }}
       <div class="form-group">
          <input type="text" class="form-control" name="desc" required placeholder="Entrer ici la description de la tache">
       </div>
       <input type="submit" class="btn btn-success " value="valider">

       </form>
   </div>

    </body>
</html>

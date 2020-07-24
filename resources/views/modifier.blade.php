<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Modifier</title>

        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        

    </head>
    <body>
    <br> <br>
    <div class="container">
   <form action="{{asset('modifier/'.$la_tache->id)}}"method="post"> 
   <div class="form-group">
   <h1> Modifier Tache  </h1>
  {{csrf_field()}} 
   <input type="text" class="form-control" name="description"required value="{{$la_tache->description}}">
   </div>
   <input type="submit" class="btn btn-success" value="modifier" >

   </form>
   </div>
    </body>
</html> 

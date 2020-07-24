<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>todo</title>

        <!-- Fonts -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
        

    </head>
    <body>
    <br>
    <div class="container">
        
        <div class="row ">
            <div class="col-9">
                <h2>Ma todo list</h2>
            </div>
            <div class="col-3 text-right">
                <a href="{{ asset('newadd') }}" class="btn text-success">
                    <i class="fa fa-plus-square-o"></i> Ajouter
                </a>
            </div>
        </div>
        
        <div class=" row btn-block text-right"> Le nombre de taches actuel est de {{ $lestaches->count() }} </div>
    </div>
    <br>
    <div class="container">
    <div class="table-responsive">
    
        <table class="table">

            <thead>
                <th class="text-center">Mes tache</th>
                <th class="text-right" style>Save By</th>
                <th class="text-right" style>Statut</th>
                <th class="text-right" style>Option</th>
            </thead>

            <tbody>
             @foreach($lestaches as $item)
                <tr>
                    <td class="text-center">{{ $item->description }}</td>
                    <td class="text-right">{{ App\User::findOrFail($item->from_id)->name}}</td>
                    <td class="text-right"></td>

                    <td class="text-right">
                        
                        <a href="{{asset('edit/'.$item->id)}}"  class="btn text-primary">
                            <i class="fa fa-edit"></i>
                            Modifier
                        </a>
                            
                        <a href="{{ asset('delete/'.$item->id) }}" class="btn text-danger">
                            <i class="fa fa-scissors"></i>
                            Supprimer
                        </a>
                            
                    </td>
                </tr>

             @endforeach
            
            </tbody>
        </table>
    </div>
    </div>
    </body>
</html>

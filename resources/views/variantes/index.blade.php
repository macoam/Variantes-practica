<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid19 variant list</title>
</head>
<body>
    <h1>Lista de variantes Covid19</h1>
    <p>*Actualizado al día 28 de enero</p>
    <a href="{{route('variantes.create')}}">Add variant</a>

<table>
    <thead>
        <tr>
            <th>Lineage</th>
            <th>Common countries</th>
            <th>Earlist date</th>
            <th>Dessignatded number</th>
            <th>Assignated number</th>
            <th>Description</th>
            <th>Who named</th>
        </tr>
    </thead>
    <body>
        @foreach($variantes as $variante)
        <tr>
            <td>{{$variante->lineage}}</td>
            <td>{{$variante->common_countries}}</td>
            <td>{{$variante->earlist_date}}</td>
            <td>{{$variante->dessinagted_number}}</td>
            <td>{{$variante->assignated_number}}</td>
            <td>{{$variante->description}}</td>
            <td>{{$variante->who_named}}</td>
        </tr>
        @endforeach
    </body>
</table>
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<table class="table table-striped ">
    <tr class="table-dark">
        <th  scope="col">Sommet</th>
        <th scope="col">Distance à partir du sommet initial</th>
    </tr>
    @for ($i = 0; $i < count($dist); $i++)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $dist[$i] }}</td>
        </tr>
    @endfor
</table>
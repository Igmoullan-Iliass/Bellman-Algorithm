<!-- bellman-ford/index.blade.php --> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<p class="h1">BellmanFord Algorithm</p>
<table  class="table table-striped table-dark">
<form method="post" action="{{ route('bellman-ford.calculate') }}">
    @csrf
    <tr>
    <th> <label for="num_sommet " >Nombre de sommets: </label></th>
    <th> <input type="text" id="num_sommet"  class="form-control"name="num_sommet"></th>
    <br>
</tr>
<tr>
<th> <label for="num_arcs">Nombre d'arcs: </label></th>
<th> <input type="text" id="num_arcs" class="form-control"name="num_arcs"></th>
</tr>   
    <br>
<tr>
<th><label for="debut_sommet">Sommet Initial: </label></th>
<th  > <input type="text" id="debut_sommet" class="form-control" name="debut_sommet"></th>
</tr>    
<br>
<tr>
<th> <label for="arcs">Arcs et leurs poids (poids sommet 1 sommet 2):</label></th>

    <br>

<th> <textarea id="arcs" class="form-control z-depth-1" name="arcs" rows="10" cols="30"></textarea></th>
</tr>
 <br>
 <tr>
 <th colspan="2">  <input type="submit" class="btn btn-secondary col-sm-4" value="Calculer le plus court chemin"></th>
</tr>
</form>
</table>



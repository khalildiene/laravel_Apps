
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<center><h1>la liste des formations</h1></center>
\
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">n0</th>
      <th scope="col">nom</th>
      <th scope="col">duree</th>
      <th scope="col">cout</th>
    </tr>
  </thead>
  <tbody>

  @foreach($liste as $Cle => $valeur)
    <tr>
      <th scope="row">{{$Cle+1}}</th>
      <td>{{$valeur["nom"]}}</td>
      <td>{{$valeur["duree"]}}</td>
      <td>{{$valeur["cout"]}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
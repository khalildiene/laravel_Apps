LA liste des apprenants

@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">n0</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">matricule</th>
      <th scope="col">age</th>
    </tr>
  </thead>
  <tbody>

  @foreach($liste as $Cle => $valeur)
    <tr>
      <th scope="row">{{$Cle+1}}</th>
      <td>{{$valeur["nom"]}}</td>
      <td>{{$valeur["prenom"]}}</td>
      <td>{{$valeur["matricule"]}}</td>
      <td>{{$valeur["age"]}}</td>
    </tr>
    @endforeach
  </tbody>
</table>